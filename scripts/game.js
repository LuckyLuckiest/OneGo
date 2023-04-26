const canvas = document.getElementById("fun");
const player = document.getElementById("player");
var started = false;
var limit = 2;
var count = document.getElementsByClassName("obsMove").length;

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

    setTimeout(function () {
        obs.remove();
        count = document.getElementsByClassName("obsMove").length;
    }, 3000);
}

function spawnObstacles() {
    if (count >= limit) return;
    const obs = document.createElement("div");
    obs.id = "obs";
    obs.classList.add("obsMove");

    obs.style.top = "340px";

    canvas.appendChild(obs);
    count = document.getElementsByClassName("obsMove").length;

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
