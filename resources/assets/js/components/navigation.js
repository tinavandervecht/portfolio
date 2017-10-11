'use strict';

exports.init = init;

function init() {
    $('nav a, .nav a').on('click', function(e) {
        e.preventDefault();

        $("body, html").animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 600);

        $(this).blur();
    })
}
