window.$ = window.jQuery = require('jquery');

var particles = require('./components/background/particles.js');
var hamburgers = require('./components/hamburgers.js');
var validation = require('./components/validation.js');
var navigation = require('./components/navigation.js');
var easterEgg = require('./components/egg/zelda-easter-egg.js');
var toastr = require('toastr');
var graphs = require('./components/graphs.js');

$(document).ready(function () {
    particles.init();
    hamburgers.init();
    validation.init();
    navigation.init();
    easterEgg.init();
    graphs.init();

    if (typeof successfulSubmission != 'undefined' && successfulSubmission) {
        toastr.options.closeButton = true;
        toastr.options.timeOut = 0;

        toastr.options = {
            "closeButton": true,
            "positionClass": "toast-bottom-right",
            "timeOut": "0"
        }

        toastr.success("<h3>Thanks for saying hello.</h3>You'll get a response the moment my phone dings with an incoming email!");
    }
});
