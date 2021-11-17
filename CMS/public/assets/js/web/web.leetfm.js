$(document).ready(function()
{
    var audio = document.getElementById("stream");
    audio.volume = 0.2;

    $("#volumeUp").click(function() {
        audio.volume += 0.1;
    });

    $("#volumeDown").click(function() {
        audio.volume -= 0.1;
    });

    $("#startStream").click(function() {
        audio.play();
    });

    $("#stopStream").click(function() {
        audio.pause();
    });
});
