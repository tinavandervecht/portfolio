'use strict';

exports.init = init;

function init() {
    var egg = new Egg();

    egg
        .addCode("left,up,right,left,up,right", function() {
            alert('zeldas lullaby starts');
            jQuery('#egggif').fadeIn(500, function() {
                window.setTimeout(function() { jQuery('#egggif').hide(); }, 5000);
            }, "konami-code");
        })
        .addHook(function(){
            console.log("Hook called for: " + this.activeEgg.keys);
            console.log(this.activeEgg.metadata);
        })
        .listen();

}
