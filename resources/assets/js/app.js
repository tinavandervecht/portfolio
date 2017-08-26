window.$ = window.jQuery = require('jquery');

var particles = require('./components/background/particles.js');

$(document).ready(function () {
    particles.init();
});