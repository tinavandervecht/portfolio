window.$ = window.jQuery = require('jquery');

var particles = require('./components/background/particles.js');
var modal = require('./components/modal.js');
var validation = require('./components/validation.js');

$(document).ready(function () {
    particles.init();
    modal.init();
    validation.init();
});