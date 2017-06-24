$(document).on('click', '.deleteBtn', function(){
    var id = $(this).data('id');
    $('.approveDelete').attr('href', '/adminchik/delete-service/'+id)
});
