// define variables
const canvas = document.getElementById("fun");
const player = document.getElementById("player");
const limit = 1;

const jumpDuration = 1.5; 
const obsMoveDuration = 3;

const audio = {
    GAME_OVER: new Audio("assets/game/assets_game-over.mp3"),
    JUMP: new Audio("assets/game/assets_jump.mp3"),
    LEVEL_UP: new Audio("assets/game/assets_level-up.mp3")
};

var started = false;
var gameOver = false;
var passed = false;
var points = 0;
var count = document.getElementsByClassName("obsMove").length;

/**
 * pauses the player and obstacle entities
 */
function stationary() {
    player.classList.remove("move", "jump");
    document.getElementById("obs").style.animationPlayState = "paused";
}

/**
 * changes the class of the player from jump to move
 */
// enforce move class to player to apply css
function move() {
    if (gameOver) return;
    if (player.classList == "jump") return;
    player.classList.add("move");
}


/**
 * Applys jump to player and outputs jump sound
 */
function jump() {
    if (gameOver) return;
    if (player.classList == "jump") return;

    audio.JUMP.play();

    player.classList.remove("move");
    player.classList.add("jump");

    setTimeout(function () {
        player.classList.remove("jump");
        move();
    }, jumpDuration * 1000);
}

/**
 * moves the obstacle if it exists
 */
function obsMove() {
    var obs = document.getElementById("obs");

    if (obs == null) return;

    setTimeout(function () {
        if (gameOver) return;
        obs.remove();
        count = document.getElementsByClassName("obsMove").length;
    }, obsMoveDuration * 1000);
}

/**
 * spawns a new obstacle with the specified limit and adds certain positions
 * into the canvas, then calls the obstacle move function
 */
function spawnObstacles() {
    if (gameOver) return;
    if (count >= limit) return;
    passed = false;
    const obs = document.createElement("div");
    obs.id = "obs";
    obs.classList.add("obsMove");

    var position = parseInt(canvas.style.height) - 230;

    obs.style.top = position + "px";
    obs.style.right = "-1150px";

    canvas.appendChild(obs);
    count = document.getElementsByClassName("obsMove").length;

    obsMove();
}

/**
 * checks collision of the obstacle with the player and when
 * a player passes the obstacle to add a point
 */
function checkCollision() {
    var obs = document.getElementById("obs");

    if (obs == null) return;

    let playerRect = player.getBoundingClientRect();
    let obsRect = obs.getBoundingClientRect();

    if (playerRect.bottom > obsRect.top && playerRect.top < obsRect.bottom &&
        playerRect.right > obsRect.left && playerRect.left < obsRect.right) {
        gameOver = true;
    }

    if (obsRect.left < playerRect.left) {
        if (!passed) {
            points++;
            if (points > 9999) points = 9999;
            if (points % 10 == 0) audio.LEVEL_UP.play();
            document.getElementById("points").innerText = points.toString().padStart(4, "0");
        }
        passed = true;
    }
}

/**
 * game loop to check the collision and checks if the
 * game has ended
 */
function gameLoop() {
    checkCollision();
    if (gameOver) {
        gameEnded();
        return;
    }
    requestAnimationFrame(gameLoop);
}

/**
 * creates a game end screen and plays game over sound
 */
function gameEnded() {
    started = false;
    if (document.getElementById("end") != null) return;

    audio.GAME_OVER.play();

    const over = document.createElement("h2");
    over.id = "end";
    over.style.textAlign = "center";
    over.innerText = "GAME OVER";

    canvas.appendChild(over);
    stationary();
}

/**
 * spawns an obstacle to the canvas at different intervals
 */
function startSpawnObs() {
    if (gameOver) return;
    setInterval(function () {
        spawnObstacles();
    }, Math.floor(Math.random() * 6) * 1000);
}

/**
 * resets the values to restart the game
 */
function clear() {
    document.getElementById("obs").remove();
    count = document.getElementsByClassName("obsMove").length;
    document.getElementById("end").remove();
    points = 0;
    document.getElementById("points").innerText = points.toString().padStart(4, "0");
    passed = false;
    gameOver = false;
}

/**
 * starts the game with calling the necessary functions
 */
function startGame() {
    started = true;
    if (gameOver) clear();
    move();
    startSpawnObs();
    gameLoop();
}

/**
 * checks if the user pressed jump keys to initiate jump
 * listener
 */
document.addEventListener("keydown", function (event) {
    if (!started) return;
    if (event.key === "Enter" || event.key === " " || event.key === "ArrowUp") {
        jump();
    }
});

/**
 * calls the start game function when there is any key pressed
 */
document.addEventListener("keydown", function (event) {
    startGame();
});
