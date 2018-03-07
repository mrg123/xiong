$(function () {
    $("#cvvImage").mouseout(function () {
        $(this).attr("src", "../images/card.png");
    });
    $("#cvvImage").mouseover(function () {
        $(this).attr("src", "../images/card1.jpg");
    });
    

    $('#ddlMonth, #ddlYear').change(function () {
        var x = $('#ddlYear').val().substring(2, 4) + pad($('#ddlMonth').val(), 2);
        // and update the hidden input's value
        $('#Hidden1').val(x);

    });


    $.validator.addMethod('CCExp', function (value, element, params) {
        var minMonth = new Date().getMonth() + 1;
        var minYear = new Date().getFullYear();
        var month = parseInt($(params.month).val(), 10);
        var year = parseInt($(params.year).val(), 10);
        return (year > minYear || (year === minYear && month >= minMonth));
    }, 'Your Credit Card Expiration date is invalid.');

    // 2013/03/05   add code sunshan
    $.validator.addMethod('checkNum', function () {
        var re = /\d/gi;
        if (re.test($("#txtCName").val())) {
            return false;
        } else {
            return true;
        }
    }, 'Name cannot contain Numbers.');

    // 2014/09/23   GLM
    $.validator.addMethod('card', function () {

        var re = /^[0-9]*[1-9][0-9]*$/;

        var CardNo = $("#txtCardNo").val().replace(/\s+/g, "");
        if (!re.test(CardNo)) {
            return false;
        } else {
            return true;
        }
    }, '');
    //2012/11/12 Add code yuanyuncai
    $.validator.addMethod('check', function () {
        var v_al = $("#txtCardNo").val().substring(0, 1);
        var CardType = $("input[name='CardType']:checked").val();
        if ((v_al == "4" && CardType == "V") ||
					      (v_al == "5" && CardType == "M") ||
						  (v_al == "3" && CardType == "A") ||
						  (v_al == "3" && CardType == "J")
						  ) {
            return true;

        }
        else {

            return false;
        }

    }, ''
                );

    $('body form').validate({
        rules: {
            CardType: { required: true, check: true },
            CName: { required: true, checkNum: true },   //add checkNum:true code  2013/03/05
            //2012/11/12 Add code yuanyuncai

            CardPAN: { required: true, card: true, rangelength: [13, 19], check: true
            },
            Issuer: { required: true },
            CVV2: { required: true, digits: true, rangelength: [3, 4] },
            IssCountry: { required: true },
            BAddress: { required: true },
            BPostCode: { required: false, digits: false, rangelength: [3, 9] },
            BCity: { required: true },
            Email: { required: true, email: true },
            ExpYear: {
                CCExp: {
                    month: '#ddlMonth',
                    year: '#ddlYear'
                }
            },
            IssuerBank: { required: true },
            IssuerBank2: { required: function () {
                if ($('#ddlIssuer').val() == "Other") {
                    return true;
                }
                else {
                    return false;
                }
            }
            }

        }, messages: {
            CardType: { required: "Please select card type" },
            CName: { required: "Please enter Cardholder Name" },
            //2012/11/12 Add code yuanyuncai
            CardPAN: { required: "Please enter Card Number", card: "Please enter digits only", rangelength: "Invalid Length", check: 'Card number and card type does not match.' },
            Issuer: { required: "Please enter Card Issuing Bank" },
            CVV2: { required: "Please enter CVV2", digits: "Please enter digits only", rangelength: "Required Length :3-4" },
            IssCountry: { required: "Please sekect Card Issuing Country" },
            BAddress: { required: "Please enter Billing Address" },
            BPostCode: { required: "Please enter Post Code", digits: "Please enter digits only", rangelength: "Invalid Length" },
            BCity: { required: "Please enter City" },
            Email: { required: "Please enter Email", email: "Invalid email format." },
            IssuerBank: { required: "Please select Issuing Bank" },
            IssuerBank2: { required: "Please enter Issuing Bank" }
        }, errorPlacement: function (error, element) {
            error.appendTo(element.next());
        }
    });

    $('#Submit').click(function () {
        var x = $('#ddlYear').val().substring(2, 4) + pad($('#ddlMonth').val(), 2);
        // and update the hidden input's value

        $('#Hidden1').val(x);

        if ($('#txtIssuer').is(':disabled'))
            $('#Hidden2').val($('#ddlIssuer').val());
        else
            $('#Hidden2').val($('#txtIssuer').val());
    });

    $('#ddlIssuer').change(function () {
        if ($('#ddlIssuer').val() == 'Other') {
            $('#txtIssuer').removeAttr('disabled');
        } else {
            $('#txtIssuer').removeClass("error");
            $('#txtIssuer').parent().next().empty();
            $('#txtIssuer').attr('disabled', 'disabled').val('');
        }

    }).trigger('change');
});

function pad(number, length) {

    var str = '' + number;
    while (str.length < length) {
        str = '0' + str;
    }

    return str;
}