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

// stop the player and the obstacle in their place
function stationary() {
    player.classList.remove("move", "jump");
    document.getElementById("obs").style.animationPlayState = "paused";
}

// enforce move class to player to apply css
function move() {
    if (gameOver) return;
    if (player.classList == "jump") return;
    player.classList.add("move");
}


// apply jump on player
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

// move obstacle and remove after a timer
function obsMove() {
    var obs = document.getElementById("obs");

    if (obs == null) return;

    setTimeout(function () {
        if (gameOver) return;
        obs.remove();
        count = document.getElementsByClassName("obsMove").length;
    }, obsMoveDuration * 1000);
}

// spawn obstacles in the canvas
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

// check collision for obstacles
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

// game loop
function gameLoop() {
    checkCollision();
    if (gameOver) {
        gameEnded();
        return;
    }
    requestAnimationFrame(gameLoop);
}

// game end screen
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

// start spawning obstacles
function startSpawnObs() {
    if (gameOver) return;
    setInterval(function () {
        spawnObstacles();
    }, Math.floor(Math.random() * 6) * 1000);
}

// reset the values
function clear() {
    document.getElementById("obs").remove();
    count = document.getElementsByClassName("obsMove").length;
    document.getElementById("end").remove();
    points = 0;
    document.getElementById("points").innerText = points.toString().padStart(4, "0");
    passed = false;
    gameOver = false;
}

// start the game
function startGame() {
    started = true;
    if (gameOver) clear();
    move();
    startSpawnObs();
    gameLoop();
}

// jump listener
document.addEventListener("keydown", function (event) {
    if (!started) return;
    if (event.key === "Enter" || event.key === " " || event.key === "ArrowUp") {
        jump();
    }
});

// start game event
document.addEventListener("keydown", function (event) {
    startGame();
});
