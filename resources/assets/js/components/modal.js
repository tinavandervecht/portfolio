'use strict';

exports.init = init;

function init() {
    $('.project img').click(function(){
        var project = $(this).data('key');
        $('#modal-container .modal .title').text(projects[project]['title']);
        $('#modal-container .modal .image img').attr('src', projects[project]['image']);
        $('#modal-container .modal .image img').attr('title', projects[project]['title'] + ' Icon');
        $('#modal-container .modal .website').attr('href', projects[project]['website']);
        $('#modal-container').removeAttr('class').addClass('active');
        $('body').addClass('modal-active');
    })

    $('#modal-container').click(function(){
        $(this).addClass('out');
        $('body').removeClass('modal-active');
    });
}