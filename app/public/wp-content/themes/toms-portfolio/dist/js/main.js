var $toggleNavButton = $('.hamburger');
var $siteWrapper = $('.site');
var $siteNavModifier = 'site--nav-open';
var $navWrapper = $('.mobile-nav-wrapper')
var $navModifier = "mobile-nav-wrapper--open";
var $listItem = $('.mobile-nav__link');
var $listItemClass = 'header__nav-link mobile-nav__link';
var $listModifier = ' mobile-nav__link--open';
$toggleNavButton.on('click', openNav);

function openNav() {
    if ($('.mobile-nav-wrapper--open').length) {
        closeNav();
    } else {
        $siteWrapper.addClass($siteNavModifier);
        $navWrapper.addClass($navModifier);

        $listItem.each(function (i, item) {
            item.className += $listModifier;
        })
    }
};

function closeNav() {
    $navWrapper.removeClass($navModifier);
    $siteWrapper.removeClass($siteNavModifier);
    $($listItem.get().reverse()).each(function (i, item) {
        item.className = $listItemClass;
    });
};
var videoContainer = $('.video__container');
var twitterWidget = videoContainer.find($('.twitter-tweet'));

if (twitterWidget.length) {
    videoContainer.css('padding-bottom', '0').css('display', 'flex').css('justify-content', 'center');
}