'use strict';

exports.init = init;

function init() {
    window.requestAnimationFrame = window.requestAnimationFrame
     || window.mozRequestAnimationFrame
     || window.webkitRequestAnimationFrame
     || window.msRequestAnimationFrame
     || function(f){setTimeout(f, 1000/60)}

    var avatar = $('.card._avatar')[0];
    var about = $('.card._about')[0];
    var toolsLanguages = $('.card._toolsLanguages')[0];
    var funFacts = $('.card._funFacts')[0];
    var instaCard = $('#instaCard')[0];
    var contactInfo = $('.card._contactInfo')[0];
    var contact = $('.card._contact')[0];

    function parallaxScroll(){
        if ($(window).width() > 960) {
            var scrolltop = window.pageYOffset;
            avatar.style.top = -scrolltop * .3 + 'px';
            about.style.top = -scrolltop * .2 + 'px';
            toolsLanguages.style.top = -scrolltop * .3 + 'px';
            funFacts.style.top = -scrolltop * .4 + 'px';
            instaCard.style.top = -(scrolltop / 2) * .3 + 'px';
            contactInfo.style.top = -(scrolltop / 2) * .5 + 'px';
            contact.style.top = -(scrolltop / 2) * .4 + 'px';
        } else {
            avatar.style.top = '';
            about.style.top = '';
            toolsLanguages.style.top = '';
            funFacts.style.top = '';
            instaCard.style.top = '';
            contactInfo.style.top = '';
            contact.style.top = '';
        }
    }

    window.addEventListener('scroll', function () {
        if($(window).scrollTop() + $(window).height() != $(document).height()) {
            requestAnimationFrame(parallaxScroll);
        }
    }, false)
}