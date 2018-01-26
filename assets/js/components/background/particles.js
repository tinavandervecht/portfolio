exports.init = init;

var particlesJs = require('./particles.vendor.js');

function init() {
    particlesJS.load('particles-js', '../particles.json');
}