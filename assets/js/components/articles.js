exports.init = init;

function init()
{
    $('#main').children('article').each(function() {
		$('<div class="close"><span class="fa fa-close"></span></div>')
		.appendTo($(this))
		.on('click', function() {
			location.hash = '';
		});

		$(this).on('click', function(event) {
			event.stopPropagation();
		});
	});
}