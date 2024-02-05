document.addEventListener('DOMContentLoaded', function () {
    var a_Major_audioPlayer = document.getElementById('A-Major_audioPlayer');
    var b_Major_audioPlayer = document.getElementById('B-Major_audioPlayer');
    var c_Major_audioPlayer = document.getElementById('C-Major_audioPlayer');

    var a_Major_playButton = document.getElementById('A-Major_playButton');
    var b_Major_playButton = document.getElementById('B-Major_playButton');
    var c_Major_playButton = document.getElementById('C-Major_playButton');

    a_Major_audioPlayer.src = 'srcs/audio/major/A_Major.mp3';
    b_Major_audioPlayer.src = 'srcs/audio/major/B_Major.mp3';
    c_Major_audioPlayer.src = 'srcs/audio/major/C_Major.mp3';

    a_Major_audioPlayer.addEventListener('ended', function () {
        updatePlayButtonIcon(a_Major_playButton, 'play');
    });

    b_Major_audioPlayer.addEventListener('ended', function () {
        updatePlayButtonIcon(b_Major_playButton, 'play');
    });

    c_Major_audioPlayer.addEventListener('ended', function () {
        updatePlayButtonIcon(c_Major_playButton, 'play');
    });

    a_Major_playButton.addEventListener('click', function () {
        togglePlay(a_Major_audioPlayer, a_Major_playButton);
    });

    b_Major_playButton.addEventListener('click', function () {
        togglePlay(b_Major_audioPlayer, b_Major_playButton);
    });

    c_Major_playButton.addEventListener('click', function () {
        togglePlay(c_Major_audioPlayer, c_Major_playButton);
    });

    function togglePlay(audioPlayer, playButton) {
        if (audioPlayer.paused) {
            audioPlayer.play();
            updatePlayButtonIcon(playButton, 'pause');
        } else {
            audioPlayer.pause();
            updatePlayButtonIcon(playButton, 'play');
        }
    }

    function updatePlayButtonIcon(playButton, state) {
        var icon = playButton.querySelector('.fa');

        if (state === 'play') {
            icon.classList.remove('fa-pause-circle');
            icon.classList.add('fa-play-circle');
        } else if (state === 'pause') {
            icon.classList.remove('fa-play-circle');
            icon.classList.add('fa-pause-circle');
        }
    }
});