'use strict';

exports.init = init;

var Typewriter = require('typewriter.js');

function init() {
    new Typewriter('.title', {
        text: 'Tina Vandervecht.',
        interval: 'human',
    }).type();
}