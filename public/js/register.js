$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#phone").mask("+7(999) 999-99-99");
    /*$("#register").submit(function (e) {
        e.preventDefault();
        const data = {
            name: $("#name").val(),
            surname: $("#surname").val(),
            lastname: $("#lastname").val(),
            iin: $("#iin").val(),
            phone: $("#phone").val(),
            password: $("#password").val(),
            confirm: $("#password-confirm").val(),
        };
        /!*$.ajax({
            type: 'POST',
            url: '/register',
            data: data,
            success: function(res) {
                console.log(res);
                alert(res);
            },
            error: function(error) {
                alert('error');
            }
        });*!/
        $.post('/register', data, function (res) {
            alert(res);
        });
        console.log(data);
    });*/
});
