$(document).on('click', '.editBtn', function(){
    $('#updateText').val('');
    $('#updateSubText').val('');
    $('#UpdateActive').attr('checked', false);
    $('#updateId').val('');

    var id = $(this).data('id');
    var text = $(this).data('text');
    var sub_text = $(this).data('sub_text');
    var active = $(this).data('active');

    $('#updateText').val(text);
    $('#updateSubText').val(sub_text);
    if (active) {
        $('#UpdateActive').attr('checked', true);
    } else {
        $('#UpdateActive').attr('checked', false);
    }
    $('#updateId').val(id);
});
$(document).on('click', '.deleteBtn', function(){
    var id = $(this).data('id');
    $('.approveDelete').attr('href', '/adminchik/delete-home-text/'+id)
});