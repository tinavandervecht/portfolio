exports.init = init;

function init ()
{
    var $nav = $('#header').children('nav'),
        $nav_li = $nav.find('li');

    if ($nav_li.length % 2 == 0) {

        $nav.addClass('use-middle');
        $nav_li.eq( ($nav_li.length / 2) ).addClass('is-middle');

    }
}