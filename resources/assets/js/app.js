window.$ = window.jQuery = require('jquery');

var particles = require('./components/background/particles.js');
var modal = require('./components/modal.js');

$(document).ready(function () {
    particles.init();
    modal.init();
});