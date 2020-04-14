// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;
var player2;
var player3;
function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        height: '500',
        width: '1000',
        videoId: 'EIyZqNbZQI8',
        events: {
            'onReady': onPlayer,
            'onStateChange': onPlayerState
        }
    });
    player2 = new YT.Player('player2', {
        height: '500',
        width: '1000',
        videoId: 'Xb3E8eWZ1mk',
        events: {
            'onReady': onPlayer,
            'onStateChange': onPlayerState
        }
    });
    player3 = new YT.Player('player3', {
        height: '500',
        width: '1000',
        videoId: 'FMfV147maQI',
        events: {
            'onReady': onPlayer,
            'onStateChange': onPlayerState
        }
    });
}

// 4. The API will call this function when the video player is ready.
function onPlayer(event) {
    event.target.playVideo();
    stopVideo();
    console.log("play video");
}



function onPlayerState(event) {
    console.log("state");
}
function stopVideo() {
    player.stopVideo();
    player2.stopVideo();
    player3.stopVideo();
    console.log("stop");
}



function toggle() {
    var trailer = document.querySelector(".trailer");
    trailer.classList.toggle("active")
    stopVideo()
    console.log("toggle");

}
function toggle2() {
    var trailer2 = document.querySelector(".trailer2");
    trailer2.classList.toggle("active2")
    stopVideo()
    console.log("toggle2");

}
function toggle3() {
    var trailer3 = document.querySelector(".trailer3");
    trailer3.classList.toggle("active3")
    stopVideo()
    console.log("toggle3");

}