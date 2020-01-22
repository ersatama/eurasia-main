$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".code-input > div > input").inputFilter(function(value) {
        return /^\d*$/.test(value);    // Allow digits only, using a RegExp
    });

    $(".code-input > div > input").bind('keyup', function(event) {
        if (event.keyCode !== 8 && event.keyCode !== 46) {
            let list = $(".code-input > div > input");
            let size = list.length;
            let status = true;
            let code = [];
            for (let i =0;i<size; i++) {
                if (list.eq(i).val().trim() === '') {
                    list.eq(i).focus();
                    status = false;
                    break
                } else {
                    code.push(list.eq(i).val().trim());
                }
            }
            let msg;
            if (status) {
                code = code.join('');
                $(".code-input > div > input").attr('disabled','true');
                $.post('/verify_sms', {code: code}).done(function(msg){
                    if (msg.status === 200) {
                        window.location.reload();
                    } else {
                        $.notify(msg.message, "error");
                        $(".code-input > div > input").val('').removeAttr('disabled').eq(0).focus();
                    }
                }).fail(function(xhr, status, error) {
                    let response = JSON.parse(xhr.responseText);
                    $.notify(response.status, "error");
                    $(".code-input > div > input").val('').removeAttr('disabled').eq(0).focus();
                });
            }

        }
    });



});
(function($) {
    $.fn.inputFilter = function(inputFilter) {
        return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
            if (inputFilter(this.value)) {
                this.oldValue = this.value;
                this.oldSelectionStart = this.selectionStart;
                this.oldSelectionEnd = this.selectionEnd;
            } else if (this.hasOwnProperty("oldValue")) {
                this.value = this.oldValue;
                this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
            } else {
                this.value = "";
            }
        });
    };
}(jQuery));
