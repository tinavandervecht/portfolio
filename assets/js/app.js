window.$ = window.jQuery = require('jquery');

var on_page_load = require('./components/on_page_load');
var navigation = require('./components/navigation');
var on_show = require('./components/on_show');
var on_hide = require('./components/on_hide');
var events = require('./components/events');
var articles = require('./components/articles');
var work = require('./components/work');

$(document).ready(function () {
    on_page_load.init();
    navigation.init();
    work.init();

	var	$main = $('#main'),
        delay = 325,
    	locked = false;

    on_show.init($main, delay, locked);
    on_hide.init($main, delay, locked);

	articles.init();
    events.init($main);

	$main.hide();
	$('#main').children('article').hide();

	if (location.hash != '' && location.hash != '#') {
        $(window).on('load', function() {
            $main._show(location.hash.substr(1), true);
        });
    }
});
