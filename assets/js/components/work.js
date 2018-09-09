exports.init = init;

function init()
{
    let workJSON;
    $.getJSON("work.json", function(json) {
        workJSON = json;
    });

    $('.work_item').click(function() {
        let workDetailsItem = $('.work_details');
        let workItem = workJSON[$(this).attr('id')];

        setWorkDetails(workDetailsItem, workItem);

        workDetailsItem.addClass('open');
    });

    $('.work_details .close').click(function() {
        $('.work_details .content').empty();
        $('.work_details').removeClass('open');
    })
}

function setWorkDetails(workDetailsItem, workItem)
{
    if (workItem.hasOwnProperty('title')) {
        $('.content', workDetailsItem).append('<h2 class="work-title">' + workItem['title'] + '</h2>');
    }

    if (workItem.hasOwnProperty('website')) {
        $('.content', workDetailsItem).append('<a href="' + workItem['website'] + '" class="work-website" target="_blank">Visit Website</a>');
    }

    if (workItem.hasOwnProperty('code_link')) {
        $('.content', workDetailsItem).append('<a href="' + workItem['code_link'] + '" class="work-code-link" target="_blank">View Codebase</a>');
    }

    if (workItem.hasOwnProperty('description')) {
        $('.content', workDetailsItem).append('<p class="work-description">' + workItem['description'] + '</p>');
    }
}