exports.init = init;

function init($main, delay, locked)
{
    $main._hide = function(addState) {
		var $article = $main.children('article').filter('.active');

		if (!$('body').hasClass('is-article-visible')) { return; }

		if (typeof addState != 'undefined' && addState === true) {
            history.pushState(null, null, '#');
        }

		if (locked) {
			$('body').addClass('is-switching');
			$article.removeClass('active');
			$article.hide();
			$main.hide();
			$('#footer').show();
			$('#header').show();
			$('body').removeClass('is-article-visible');
			locked = false;
			$('body').removeClass('is-switching');
			$(window).scrollTop(0).triggerHandler('resize.flexbox-fix');

			return;
		}

		locked = true;
		$article.removeClass('active');

		setTimeout(function() {
			$article.hide();
			$main.hide();
			$('#footer').show();
			$('#header').show();

			setTimeout(function() {
				$('body').removeClass('is-article-visible');
				$(window).scrollTop(0).triggerHandler('resize.flexbox-fix');

				setTimeout(function() {
					locked = false;
				}, delay);
			}, 25);
		}, delay);
	};
}