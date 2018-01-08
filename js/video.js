(function () {
    var video = document.querySelector('.demo_reel');

    function videoPlay() {
        console.log('sss');
        if (this.paused) {
            this.play();
        } else {
            this.pause();
        }
    }

    video.addEventListener('click', videoPlay, false);
})();
