'use strict';

exports.init = init;

var ProgressBar = require('progressbar.js');

function init() {
    $('.graph').each(function() {
        var amt = $(this).data('amt');
        var text = $(this).data('text');
        var progressBar = new ProgressBar.Circle(this, {
            strokeWidth: '4',
            easing: 'easeInOut',
            color: '#9397B8',
            trailColor: 'white',
            trailWidth: '4',
            svgStyle: null,
            text: {
                value: text
            }
        }).animate(amt, {
            duration: 1000
        });
    })
}