'use strict';

exports.init = init;

function init() {
    var egg = new Egg();

    egg.addCode("left,up,right,left,up,right", function() {
            $('#secretAudio').trigger('play');
            $('#modal-container').removeAttr('class').addClass('active');
            $('body').addClass('modal-active');
        })
        .listen();

    $('#quit-game').click(function(){
        $('#modal-container').addClass('out');
        $('body').removeClass('modal-active');
    });

}
