exports.init = init;

function init()
{
    $('#main').children('article').each(function() {
		$('<div class="close">Close</div>')
		.appendTo($(this))
		.on('click', function() {
			location.hash = '';
		});

		$(this).on('click', function(event) {
			event.stopPropagation();
		});
	});
}