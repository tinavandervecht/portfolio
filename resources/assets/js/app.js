window.$ = window.jQuery = require('jquery');

var particles = require('./components/background/particles.js');
var modal = require('./components/modal.js');
var validation = require('./components/validation.js');
var toastr = require('toastr');

$(document).ready(function () {
    particles.init();
    modal.init();
    validation.init();

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