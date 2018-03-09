exports.init = init;

function init($main, delay, locked)
{
    $main._show = function(id, initial) {
		var $article = $main.children('article').filter('#' + id);

		if ($article.length == 0) { return; }

		if (locked || (typeof initial != 'undefined' && initial === true)) {
			$('body').addClass('is-switching');
			$('body').addClass('is-article-visible');
			$main.children('article').removeClass('active');
			$('#header').hide();
			$('#footer').hide();
			$main.show();
			$article.show();
			$article.addClass('active');
			locked = false;
			setTimeout(function() {
				$('body').removeClass('is-switching');
			}, (initial ? 1000 : 0));

			return;
		}

		locked = true;

		if ($('body').hasClass('is-article-visible')) {
			var $currentArticle = $main.children('article').filter('.active');
			$currentArticle.removeClass('active');

			setTimeout(function() {
				$currentArticle.hide();
				$article.show();
				setTimeout(function() {
					$article.addClass('active');
					$(window).scrollTop(0).triggerHandler('resize.flexbox-fix');
					setTimeout(function() {
						locked = false;
					}, delay);
				}, 25);
			}, delay);
		} else {
			$('body').addClass('is-article-visible');

			setTimeout(function() {
				$('#header').hide();
				$('#footer').hide();
				$main.show();
				$article.show();

				setTimeout(function() {
					$article.addClass('active');
					$(window).scrollTop(0).triggerHandler('resize.flexbox-fix');
					setTimeout(function() {
						locked = false;
					}, delay);
				}, 25);
			}, delay);
		}
	};
}