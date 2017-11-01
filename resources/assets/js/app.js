
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap.js');
require('./audio.js');
require('./video.js');

$(function(){
    var startedPlayers = true;
    var isMobile = window.matchMedia("only screen and (max-width: 760px)");
    if (isMobile.matches) { startedPlayers = false; }

    $('body').on('touchend click', function(){
        if (!startedPlayers) {
            startedPlayers = true;
            audioPlayer.play();
            videoPlayer.playVideo();
        } else {
            startedPlayers = false;
            audioPlayer.pause();
            videoPlayer.pauseVideo();
        }
    });
})