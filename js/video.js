(function () {
    var video = document.querySelectorAll('.demo_reel');

    function videoPlay() {
        if (this.paused) {
            this.play();
            document.querySelectorAll('.demo_reel').setAttribute("style","opacity:1; -moz-opacity:1; filter:alpha(opacity=100)");
        } else {
            this.pause();
        }
    }

    video.forEach(function (videoItem) {
        videoItem.addEventListener('click', videoPlay, false);
    });
})();
