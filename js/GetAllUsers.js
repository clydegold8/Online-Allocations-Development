/**
 * Created by VIZI-BILL PH on Aug-8-2016.
 */

//	added table sorter

$(document).ready(function () {

    var $ = jQuery;
    $('#user-form').submit(function (e) {
        e.preventDefault();
        var $sErrorPassword,
            $bErrorStatus,
            $sUsernameData = $('#username'),
            $sEmailData = $('#email'),
            $sPasswordData = $('#password'),
            $sPasswordData_c = $('#password_c'),
            $submit = $('.user-form #submit'),
            $sUsername = (this.username.value) ? this.username.value : null,
            $sPassword = (this.password.value) ? this.password.value : 'empty',
            $sPassword_c = (this.password_c.value) ? this.password_c.value : 'empty_c',
            $sEmail = (this.email.value) ? this.email.value : null,
            $bPassword = ($sPassword == $sPassword_c),
            data = {
                action: 'user_registration',
                nonce: this.rs_user_registration_nonce.value,
                username: $sUsername,
                password: $sPassword,
                role: this.user_roles.value,
                email: $sEmail
            };


        // disable button onsubmit to avoid double submision
        //$submit.attr("disabled", "disabled").addClass('disabled');

        //check email if invalid or valid
        function validateEmail(email) {
            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }

        var $bEmail = validateEmail($sEmail);

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

        //check email
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
        if (($sPassword == 'empty') || ($sPassword_c == "empty_c")) {
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

            } else {
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

        if (($sUsername) && ($bPassword) && ($sEmail)) {

            $.post(theme_ajax.url, data, function (response) {

                // check response data
                if (1 == response) {
                    // redirect to home page

                    AfterSubmit();

                    $('#helpBlock-status').append("<p class='text-success'> <b>User Successfully Added!.</b></p>");
                    //location.reload();
                } else {
                    $('#helpBlock-status').append(response);
                    // display return data
                }
            });
        }
        document.getElementById("user-form").reset();
        function AfterSubmit(){
            $('.form-group').removeClass('has-error has-success').addClass('has-default');
            $('.help-block').text("");
            $('.icon-bx-password').hide();
            $('.icon-bx-password_c').hide();
            $('.icon-bx-email').hide();
            $('.icon-bx-username').hide();
            $('.bg-checkbx-password').css("background-color", "#dff0d8").append('<i class="fa fa-asterisk icon-bx-password" aria-hidden="true"></i>');
            $('.bg-checkbx-password_c').css("background-color", "#dff0d8").append('<i class="fa fa-asterisk icon-bx-password_c" aria-hidden="true"></i>');
            $('.bg-checkbx-email').css("background-color", "#dff0d8").append('<i class="fa fa-asterisk icon-bx-username" aria-hidden="true"></i>');
            $('.bg-checkbx-username').css("background-color", "#dff0d8").append('<i class="fa fa-asterisk icon-bx-username" aria-hidden="true"></i>');
        }
        return false;
    });

});
