exports.init = init;

function init($main)
{
    $('body').on('click', function(event) {
		if ($('body').hasClass('is-article-visible')) {
            $main._hide(true);
        }
	});

    $(window).on('keyup', function(event) {
    	switch (event.keyCode) {
    		case 27:
    			if ($('body').hasClass('is-article-visible')) {
                    $main._hide(true);
                }
    			break;
    		default:
    			break;
    	}
    });

	$(window).on('hashchange', function(event) {
		if (location.hash == ''	|| location.hash == '#') {
			event.preventDefault();
			event.stopPropagation();
			$main._hide();
		} else if ($('#main').children('article').filter(location.hash).length > 0) {
			event.preventDefault();
			event.stopPropagation();
			$main._show(location.hash.substr(1));
		}
	});
}