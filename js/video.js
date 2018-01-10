(function () {
    var video = document.querySelector('.demo_reel');
    var hidebanner = document.querySelector('.banner_overlay');
    function videoPlay() {
        console.log('Fired from videoPlay');
        if (this.paused) {
            this.play();
        } else {
            this.pause();
        }
    }

    video.addEventListener('click', videoPlay, false);
})();
