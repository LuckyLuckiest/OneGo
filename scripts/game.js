const player = document.getElementById("player");
var started = false;

function move() {
    if (player.class == "jump") return;
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
    const obs = document.getElementById("obs");
    if (started == true && obs.class != "obsMove") obs.classList.add("obsMove");
}

document.addEventListener("keydown", function (event) {
    started = true;
    if (event.key === "Enter" || event.key === " " || event.key === "ArrowUp") {
        jump();
        obsMove();
    }
});