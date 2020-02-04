$(document).ready(function () {

    $('#lifeInsurance-sum, #accidentInsurance-sum').maskMoney({thousands: ' ', decimal: '.', allowZero: true, suffix: ' ₸'});

    $("#lifeInsurance-date, #lifeInsurance-birth, #accidentInsurance-date, #accidentInsurance-birth, #profile-givenDate, #profile-ExpirationDate").datetimepicker({format: 'd.m.Y'});

    insurance.life('lifeInsurance');
    $("#lifeInsurance-sum").bind('keyup', function () {
        insurance.life('lifeInsurance');
    });
    $("#lifeInsurance-birth, #lifeInsurance-sex").bind('change', function () {
        insurance.life('lifeInsurance');
    });

    insurance.life('accidentInsurance');
    $("#accidentInsurance-sum").bind('keyup', function () {
        insurance.life('accidentInsurance');
    });
    $("#accidentInsurance-birth, #accidentInsurance-sex").bind('change', function () {
        insurance.life('accidentInsurance');
    });

    $(".accidentInsurance").click(function() {
        let data = insurance.life('accidentInsurance');
        if (data) {
            $("#profile-img").replaceWith('<div class="product__img product__img__modal" id="profile-img"></div>');
            $("#profile-img").addClass($("#accidentInsurance-img").val());
            $("#insurance-type").val(2);
            $("#insurance-year").val(data.year);
            $("#insurance-start").val(data.start);
            $("#insurance-birth").val(data.birth);
            $("#insurance-sum").val(data.sum);
            $("#insurance-sex").val(data.sex);
            $("#profile-sum-view").html(data.sum+"  ₸");
            $("#insurance-prize").val(data.prize);
            $("#accidentInsurance").modal('toggle');
            $('#profile-rule, #profile-rule-1, #profile-rule-2, #profile-rule-3').attr('checked', false);
            setTimeout(function() {
                $("#profile").modal('toggle');
            },400);
        }

    });

    $(".lifeInsurance").click(function() {
        let data = insurance.life('lifeInsurance');
        if (data) {
            $("#profile-img").replaceWith('<div class="product__img product__img__modal" id="profile-img"></div>');
            $("#profile-img").addClass($("#accidentInsurance-img").val());
            $("#insurance-type").val(1);
            $("#insurance-year").val(data.year);
            $("#insurance-start").val(data.start);
            $("#insurance-birth").val(data.birth);
            $("#insurance-sum").val(data.sum);
            $("#insurance-sex").val(data.sex);
            $("#profile-sum-view").html(data.sum+"  ₸");
            $("#insurance-prize").val(data.prize);
            $("#lifeInsurance").modal('toggle');
            $('#profile-rule, #profile-rule-1, #profile-rule-2, #profile-rule-3').attr('checked', false);
            setTimeout(function() {
                $("#profile").modal('toggle');
            },400);
        }

    });
    var status = 'on';
    $("#profile-btn").bind('click', function() {
        if (status === 'off') {
            return;
        }
        let rule = $("#profile-rule");
        let rule_1 = $("#profile-rule-1");
        let rule_2 = $("#profile-rule-2");
        let rule_3 = $("#profile-rule-3");
        let type = $("#insurance-type").val();
        let start =  $("#insurance-start").val();
        let year = $("#insurance-year").val();
        let birth = $("#insurance-birth").val();
        let sum = $("#insurance-sum").val();
        let prize = $("#insurance-prize").val();
        let sex = $("#insurance-sex").val();
        if ($(rule).is(":checked")&&$(rule_1).is(":checked")&&$(rule_2).is(":checked")&&$(rule_3).is(":checked")) {
            let surname = $("#profile-surname");
            let name = $("#profile-name");
            let lastname = $("#profile-lastname");
            let iin = $("#profile-iin");
            let doctype = $("input[name='docType']:checked").val();
            let number = $("#profile-number");
            let givenby = $("#profile-givenBy");
            let givendate = $("#profile-givenDate");
            let expirationdate = $("#profile-ExpirationDate");
            let residence = $("input[name='profile-residence']:checked").val();
            let country = $("#profile-country");
            let ipdl = $("input[name='ipdl']:checked").val();
            let address = $("#profile-address");
            let addressFact = $("#profile-address-fact");
            let phone = $("#profile-phone");
            let email = $("#profile-email");
            let aim = $("input[name='profile-aim']:checked").val();
            if (surname.val().trim() === '') return surname.focus();
            if (name.val().trim() === '') return name.focus();
            if (iin.val().trim() === '') return iin.focus();
            if (number.val().trim() === '') return number.focus();
            if (givenby.val().trim() === '') return givenby.focus();
            if (givendate.val().trim() === '') return givendate.focus();
            if (expirationdate.val().trim() === '') return expirationdate.focus();
            if (address.val().trim() === '') return address.focus();
            if (addressFact.val().trim() === '') return addressFact.focus();

            let info = {
                'type': type,
                'year': year,
                'start': start,
                'birth': birth,
                'sum': sum,
                'prize': prize,
                'sex': sex,
                'surname': surname.val().trim(),
                'name': name.val().trim(),
                'lastname': lastname.val().trim(),
                'iin': iin.val().trim(),
                'doctype': doctype,
                'number': number.val().trim(),
                'givenby': givenby.val().trim(),
                'givendate': givendate.val().trim(),
                'expirationdate': expirationdate.val().trim(),
                'residence': residence,
                'country': country.val().trim(),
                'ipdl': ipdl,
                'address': address.val().trim(),
                'addressFact': addressFact.val().trim(),
                'phone': phone.val().trim(),
                'email': email.val().trim(),
                'aim': aim
            };

            status = 'off';
            $.ajax({
                type: "POST",
                url: '/home',
                data: info,
                success: function (response) {
                    $.notify(response.status,'success');
                    console.log(response.status);
                    window.location.href = '/my_insurance';
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    let mes = JSON.parse(XMLHttpRequest.responseText);
                    console.log(mes.status);
                    $.notify(mes.status, "error");
                    status = 'on';
                }
            });
        }
    });

    $('#profile-rule, #profile-rule-1, #profile-rule-2, #profile-rule-3').bind('change', function() {

        let rule = $("#profile-rule");
        let rule_1 = $("#profile-rule-1");
        let rule_2 = $("#profile-rule-2");
        let rule_3 = $("#profile-rule-3");

        if ($(rule).is(":checked")&&$(rule_1).is(":checked")&&$(rule_2).is(":checked")&&$(rule_3).is(":checked")) {
            $("#profile-btn").removeClass('disabled');
        } else {
            $("#profile-btn").addClass('disabled');
        }

    });
});

let insurance = {
    life: function (id) {

        let sum = $("#"+id+"-sum").val().replace(/[^0-9\.]/g, '');
        let birth = $("#"+id+"-birth").val();
        let sex = parseInt($("#"+id+"-sex").val())+1;
        let start = $("#"+id+"-date").val();
        let year = insurance.dateDiff(birth);

        $("#"+id+"-year").html(insurance.text(year));
        if (year >= 18 && year <= 65) {
            let prize = insurance.prize(sum, year, sex);
            $("#"+id+"-prize").html(((parseInt(prize * 100)) / 100) + ' ₸');
            if (prize !== 0) {
                $("."+id).removeClass("disabled");
                return {
                    sum: sum,
                    prize: prize,
                    start: start,
                    year: year,
                    birth: birth,
                    sex: sex
                };
            } else {
                $("."+id).addClass("disabled");
            }
        } else {
            $("#"+id+"-prize").html('0.00 ₸');
            $("."+id).addClass("disabled");
        }
        return false;
    },
    prize: function (sum, year, sex) {
        let data = JSON.parse($("#data").val());
        let prize = '0,00 ₸';
        for (let i in data) {
            if (data[i].year == year) {
                if (sex == 0) {
                    prize = (sum / 100) * data[i].male.replace(',', '.');
                } else {
                    prize = (sum / 100) * data[i].female.replace(',', '.');
                }
            }
        }
        return prize;
    },
    text: function (year) {
        if (year < 18 || year > 65) {
            return '<span style="color: red;">' + year + '</span>';
        }
        return '<span>' + year + '</span>';
    },
    dateDiff: function (date) {
        date = date.split('.');
        let dateold = new Date(date[2], date[1], date[0]);
        let datenew = new Date();
        let ynew = datenew.getFullYear();
        let mnew = datenew.getMonth();
        let dnew = datenew.getDate();
        let yold = dateold.getFullYear();
        let mold = dateold.getMonth();
        let dold = dateold.getDate();
        let diff = ynew - yold;
        if (mold > mnew) diff--;
        else if (mold == mnew) {
            if (dold > dnew) diff--;
        }
        return diff;
    }
}
