'use strict';

exports.init = init;

function init() {
    $('.hamburger').on('click', function() {
        $('.hamburger').toggleClass('is-active');
        $('nav, .nav').toggleClass('active');
    });
}
