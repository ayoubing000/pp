
$('.dots_parent span').mouseenter(function(){
    // $('.dots').removeClass('active_dots');
    if ($(this).parent().children('.dots').hasClass('active_dots')){
        $('.dots').removeClass('active_dots');
    }else{
        $('.dots').removeClass('active_dots');
        $(this).parent().children('.dots').addClass('active_dots');

    }

    $(this).parent().children('.dots').mouseleave(function(){
        $('.dots').removeClass('active_dots');
    });

});



$('.delete').click(function (e) {
    var target = $(e.currentTarget),
        id = target.attr('data-id'),
        url = target.attr('data-url-delete');
    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'json',
        data: {id: id, undo: false},
        success: function(result) {
            if (result.success) {
                target.closest('tr').remove();
                var x= result.message
                _template(x,id);
                animation();
                undoHandler({
                    url: url,
                    id: id
                });
            } else {
                console.log(result.message);
            }
            },
    });
});
function _template(message) {
        var alert ='<div class="app-alert alert alert-warning alert-dismissible" role="alert">'
        + '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'
            + '<div class="app-alert-message">' + message + '</div>'
            + '<div class="progress">'
            + '<div class="progress-bar progress-bar-warning hide" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">'
            + '</div>'
            + '</div>'
            + '</div>';
        $('table').after(alert);
}

var undoHandler = function(eventData) {
    $('<a class="undo-delete" href="javascript:;"><strong>Undo</strong></a>').insertAfter(".app-alert-message");
    $(".undo-delete").bind("click", function() {
        $.ajax({
            url: eventData.url,
            type: 'POST',
            dataType: 'json',
            data: {id: eventData.id, undo: true},
            success: function(result) {
                if (result.success) {
                    location.reload();
                    //$instance.appTable({newData: result.data});
                    //fire success callback
                   // settings.onUndoSuccess(result);
                    console.log('test');
                }
            }
        });
    });
};

function animation() {
    $('.progress').animate({width: 'toggle'}, 5000, function () {
        $('.app-alert').remove();
    });
}