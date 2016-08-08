/**
 * Created by VIZI-BILL PH on Aug-8-2016.
 */
//	added table sorter
$.noConflict();//avoid $ confilct to other scripts
$(document).ready(function () {

    //activate table sorter
    $("#UserTable").tablesorter();


    //bootbox feature - add user - validate forms
    $('.add-user').click(function () {
        var $sErrorPassword,
            $bErrorStatus,
            $dUserForm = $('#user-form').serialize();
            $sUsernameData = $('#username'),
            $sEmailData = $('#email'),
            $sPasswordData = $('#password'),
            $sPasswordData_c = $('#password_c'),
            $sUsername = ($sUsernameData.val()) ? $sUsernameData.val() : null,
            $sPassword = ($sPasswordData.val()) ? $sPasswordData.val() : null,
            $sPassword_c = ($sPasswordData_c.val()) ? $sPasswordData_c.val() : null,
            $sEmail = ($sEmailData.val()) ? $sEmailData.val() : null,
            $bPassword = ($sPassword == $sPassword_c);


        if(($sUsername)&&($sPassword)&&($sEmail)){

            //$.ajax({
            //    type: "POST",
            //    url: "/wordpress/addusers/",
            //    data: $dUserForm,
            //    dataType: "json",
            //    success: function(data) {
            //        //var obj = jQuery.parseJSON(data); if the dataType is not specified as json uncomment this
            //        // do what ever you want with the server response
            //    },
            //    error: function() {
            //        alert('error handing here');
            //    }
            //});
            //document.getElementById("user-form").reset();
            //$('#myModal').modal('hide');
            //$('.modal-backdrop').remove();
            //console.log('passed',$sUsername,$sPassword,$sEmail);
        }

        //check username
        if (!$sUsername) {
            var $sErrorUsername;
            $sErrorUsername = 'Username field should not be empty.';
            $('.username-bx').addClass('has-error');
            $('#helpBlock-username').text($sErrorUsername);
            $sUsernameData.focus();
            $('.icon-bx-username').hide();
            $('.bg-checkbx-username').css("background-color", "#f2dede").append('<i class="fa fa-times icon-bx-username" aria-hidden="true"></i>');
        } else {
            $sErrorUsername = '';
            $('.username-bx').removeClass('has-error').addClass('has-success');
            $('#helpBlock-username').text($sErrorUsername);
            $('.icon-bx-username').hide();
            $('.bg-checkbx-username').css("background-color", "#dff0d8").append('<i class="fa fa-check icon-bx-username" aria-hidden="true"></i>');
        }

        //check email if invalid or valid
        function validateEmail(email) {
            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }
        var $bEmail = validateEmail($sEmail);
        if (!$sEmail || (!$bEmail)) {
            var $sErrorEmail;
            $sErrorEmail = 'Email field should not be empty or Invalid.';
            $('.email-bx').addClass('has-error');
            $('#helpBlock-email').text($sErrorEmail);
            $sEmailData.focus();
            $('.icon-bx-email').hide();
            $('.bg-checkbx-email').css("background-color", "#f2dede").append('<i class="fa fa-times icon-bx-email" aria-hidden="true"></i>');

        } else {
            $sErrorEmail = '';
            $('.email-bx').removeClass('has-error').addClass('has-success');
            $('#helpBlock-email').text($sErrorUsername);
            $('.icon-bx-email').hide();
            $('.bg-checkbx-email').css("background-color", "#dff0d8").append('<i class="fa fa-check icon-bx-username" aria-hidden="true"></i>');

        }

        //check password if both fields are empty
        if (!$sPassword || (!$sPassword_c)) {
            $sErrorPassword = 'Password fields should not be empty.';
            $bErrorStatus = false;
            errorPassword($sErrorPassword, $bErrorStatus);

            //check password if both fields are the same in value
        } else if (!$bPassword) {
            $sErrorPassword = 'Password fields are no equal value.';
            $bErrorStatus = false;
            errorPassword($sErrorPassword);
        } else {
            $sErrorPassword = '';
            $bErrorStatus = true;
            errorPassword($sErrorPassword, $bErrorStatus)
        }

        function errorPassword($sErrorPassword, $bErrorStatus) {
            if (!$bErrorStatus) {
                $('.password-bx').addClass('has-error');
                $('.password_c-bx').addClass('has-error');
                $('#helpBlock-password').text($sErrorPassword);
                $('#helpBlock-password_c').text($sErrorPassword);
                $sPasswordData.focus();
                $('.icon-bx-password').hide();
                $('.icon-bx-password_c').hide();
                $('.bg-checkbx-password').css("background-color", "#f2dede").append('<i class="fa fa-times icon-bx-password" aria-hidden="true"></i>');
                $('.bg-checkbx-password_c').css("background-color", "#f2dede").append('<i class="fa fa-times icon-bx-password_c" aria-hidden="true"></i>');

            }else{
                $('.password-bx').addClass('has-success').removeClass('has-error');
                $('.password_c-bx').addClass('has-success').removeClass('has-error');
                $('#helpBlock-password').text($sErrorPassword);
                $('#helpBlock-password_c').text($sErrorPassword);
                $('.icon-bx-password').hide();
                $('.icon-bx-password_c').hide();
                $('.bg-checkbx-password').css("background-color", "#dff0d8").append('<i class="fa fa-check icon-bx-password" aria-hidden="true"></i>');
                $('.bg-checkbx-password_c').css("background-color", "#dff0d8").append('<i class="fa fa-check icon-bx-password_c" aria-hidden="true"></i>');
            }
        }




        //$('#myModal').modal('hide');
        //$('.modal-backdrop').remove();
        //alert('aws');
    });

});
