$(document).ready(function () {

    $('#lifeInsurance-sum, #accidentInsurance-sum').maskMoney({thousands: ' ', decimal: '.', allowZero: true, suffix: ' ₸'});

    $("#lifeInsurance-date, #lifeInsurance-birth, #accidentInsurance-date, #accidentInsurance-birth").datetimepicker({format: 'd.m.Y'});

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
        $("#profile").modal('show');
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
        let sex = $("#"+id+"-sex").val();
        let year = insurance.dateDiff(birth);

        $("#"+id+"-year").html(insurance.text(year));
        if (year >= 18 && year <= 65) {
            let prize = insurance.prize(sum, year, sex);
            $("#"+id+"-prize").html(((parseInt(prize * 100)) / 100) + ' ₸');
        } else {
            $("#"+id+"-prize").html('0.00 ₸');
        }
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
