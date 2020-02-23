var videoContainer = $('.video__container');
var twitterWidget = videoContainer.find($('.twitter-tweet'));

if (twitterWidget.length) {
    videoContainer.css('padding-bottom', '0').css('display', 'flex').css('justify-content', 'center');
}