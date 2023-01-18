var canvas = document.getElementById("picture");
var ctx = canvas.getContext("2d");
var img = new Image();
img.src = "https://cdn.discordapp.com/attachments/532812898150645760/1065221979688411197/MCDVoiture.PNG";

img.onload = function() {
    ctx.drawImage(img, 0, 0);
}

window.addEventListener('contextmenu', (e) => {
    e.preventDefault()
})
