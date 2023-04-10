const player = document.getElementById("player");

function move() {
    if (player.class == "jump") return;
    player.classList.add("move");
}

function jump() {
    if (player.classList == "jump") return;
    player.classList.remove("move");
    player.classList.add("jump");

    setTimeout(function() {
        player.classList.remove("jump");
        move();
    }, 300);
}

document.addEventListener("keydown", function(event) {
    jump();
});