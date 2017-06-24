$(document).on('click', '#MassegeButton', function(){
    $('#messageText').text($(this).data('message'));
});