const canvas = document.getElementById("fun");
const player = document.getElementById("player");
var started = false;

function move() {
    if (player.classList == "jump") return;
    player.classList.add("move");
}

function jump() {
    if (player.classList == "jump") return;
    player.classList.remove("move");
    player.classList.add("jump");

    setTimeout(function () {
        player.classList.remove("jump");
        move();
    }, 500);
}

function obsMove() {
    var obs = document.getElementById("obs");

    if (obs == null) return;

    if (started && obs.classList != "obsMove") {
        obs.classList.add("obsMove");
    }

    let minDistance = 300; // minimum distance between obstacles
    let maxDistance = 800; // maximum distance between obstacles
    let obsDistance = Math.floor(Math.random() * (maxDistance - minDistance) + minDistance);

    let obsRight = parseInt(getComputedStyle(obs).right); // current right position of the obstacle
    if (obsRight >= 0) {
        // reset obstacle position
        obsRight = -1150;
        obsDistance = Math.floor(Math.random() * (maxDistance - minDistance) + minDistance);
    }

    setTimeout(function () {
        obs.remove();
    }, 3000);
}

function spawnObstacles() {
    const obs = document.createElement("div");
    obs.id = "obs";
    obs.classList.add("obsMove");
    canvas.appendChild(obs);

    obsMove();
}

function checkCollision() {
    let obs = document.getElementById("obs");

    if (obs == null) return;

    let playerRect = player.getBoundingClientRect();
    let obsRect = obs.getBoundingClientRect();

    if (playerRect.bottom > obsRect.top && playerRect.top < obsRect.bottom &&
        playerRect.right > obsRect.left && playerRect.left < obsRect.right) {
        // collision detected
        console.log("collision detected");
    }
}

function gameLoop() {
    checkCollision();
    requestAnimationFrame(gameLoop);
}

function startSpawnObs() {
    setInterval(function () {
        spawnObstacles();
    }, Math.floor(Math.random() * 6) * 1000);
}

function startGame() {
    started = true;
    startSpawnObs();
    gameLoop();
}

document.addEventListener("keydown", function (event) {
    if (!started) return;
    if (event.key === "Enter" || event.key === " " || event.key === "ArrowUp") {
        jump();
    }
});

document.addEventListener("keydown", function (event) {
    startGame();
});
