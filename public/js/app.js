$(document).ready(function () {
    jQuery(function ($) {
        // $(".date").mask("99.99.9999");
        $(".phone").mask("+7(999) 999-9999");
    });

    jQuery.datetimepicker.setLocale('ru');

    jQuery('.datetimepicker').datetimepicker({
        timepicker:false,
        format:'d.m.Y',
        minDate:'1900/01/01'
    });

    var form = $('#registerForm'),
        closeBtn = $(".modal-close"),
        modalContainer = $(".modal-container");

    form.submit(function () {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: form.attr('action'),
            data: form.serialize(),
            success: function (response) {
                modalContainer.fadeIn(300);
                // console.log(response);
                if (response == 'succes') {
                    setTimeout("location = \"https://ost.eurasia-life.com/\";", 3000);
                } else {
                    $(".modal-container-content .row").text('Ошибка при отправке, попробуйте еще раз');
                }
            }
        });
    });

    closeBtn.click(function () {
        modalContainer.fadeOut(300);
    })

    $('.typeIIN').keyup(function () {
        $(this).val($(this).val().replace(/[^-0-9]/gim, ''));
    })
    $('.typeIIN').focus(function () {
        $(this).css("color", "#495057");
    })
    $('.typeIIN').blur(function () {
        if ($(this).val().length < 12) {
            $(this).css("color", "red");
        } else {
            $(this).css("color", "#495057");
        }
    })
});
