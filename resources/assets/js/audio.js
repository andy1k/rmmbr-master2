var scConfig = JSON.parse($("meta[data-config='soundcloud']").attr('data-json'));

SoundCloudAudio = require('soundcloud-audio');
window.audioPlayer = new SoundCloudAudio(scConfig.client_id);

// Set up stuff
audioPlayer.resolve(scConfig.content, function() {
    audioPlayer.play({
        playlistIndex: getRandomInt(0, audioPlayer._playlist.tracks.length - 1)
    });

    audioPlayer.audio.volume = .2; //.2;

    audioPlayer.on('ended', function () {
        audioPlayer.next();
    });
});