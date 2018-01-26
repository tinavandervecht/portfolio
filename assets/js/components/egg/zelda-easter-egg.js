'use strict';

exports.init = init;

function init() {
    var egg = new Egg();
    var eggIsActive = false;

    egg.addCode("left,up,right,left,up,right", function() {
            eggIsActive = true;
            $('#secretAudio').trigger('play');

            checkShouldLoadGame();
            $('#modal-container').removeAttr('class').addClass('active');
            $('body').addClass('modal-active');
        })
        .listen();

    $('#quit-game').click(function(){
        eggIsActive = false;
        $('#modal-container').addClass('out');
        $('body').removeClass('modal-active');
        $('#game').removeAttr('src');
    });

    $(document).keyup(function(e) {
        if (e.which === 27 && eggIsActive) {
            eggIsActive = false;
            $('#modal-container').addClass('out');
            $('body').removeClass('modal-active');
            $('#game').removeAttr('src');
        }
    })

    $( window ).resize(function() {
        if (eggIsActive) {
            checkShouldLoadGame();
        }
    });


    function checkShouldLoadGame() {
        if ($(window).width() > 900) {
            var attr = $('#game').attr('src');
            if (typeof attr === typeof undefined || attr === false) {
                $('#game').prop('src', '/game/index.php');
            }
        } else {
            $('#game').removeAttr('src');
        }
    }
}
