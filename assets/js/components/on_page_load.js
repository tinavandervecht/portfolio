exports.init = init;

function init ()
{
    $('body').addClass('is-loading');
    $('#bg .after').css('background-image', 'url(/images/backgrounds/0' + $("#bg").data('img-key') + '.jpg)');

	$(window).on('load', function() {
		window.setTimeout(function() {
			$('body').removeClass('is-loading');
		}, 1000);
	});
}