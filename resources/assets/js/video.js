$("<script src='https://www.youtube.com/iframe_api'></script>").insertBefore('body script:first');

window.onYouTubeIframeAPIReady = function()
{
    window.videoPlayer = new YT.Player('video-full', {
        loopPlaylists: 'true',
        videoId: 'PzVA6gYtPc0',
        suggestedQuality: 'hd1080',
        playerVars: {
            'playsinline': 1,
            'rel': 0,
            'showinfo': 0,
            'controls': 0
        },
        events: {
            'onReady': function() {
                videoPlayer.setVolume(0);
                videoPlayer.seekTo(getRandomInt(1, 60*60*2));
                videoPlayer.playVideo();
            },
            'onStateChange': onPlayerStateChange
        }
    });
}

function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.PLAYING) {
        $("#video-overlay").css('opacity', '0');
    }
}