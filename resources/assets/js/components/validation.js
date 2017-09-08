'use strict';

exports.init = init;

function init() {
    $('form').on('submit', function(e) {
        e.preventDefault();
        var submitButton = $('button[type="submit"]');
        submitButton.prop('disabled', true);
        submitButton.text('Processing...');

        $('.input', this).removeClass('error-invalid');
        $('.input', this).removeClass('error-empty');

        var firstName = $('#first-name', this);
        var lastName = $('#last-name', this);
        var email = $('#email', this);
        var website = $('#website', this);
        var message = $('#message', this);

        var noFirstName = !$('input[name="first_name"]', firstName).val();
        var noLastName = !$('input[name="last_name"]', lastName).val();
        var noEmail = !$('input[name="email"]', email).val();
        var noMessage = !$('textarea[name="message"]', message).val();
        var noWebsite = !$('input[name="website"]', website).val();

        var invalidEmail = !validateEmail($('input[name="email"]', email).val());

        if (noFirstName) {
            firstName.addClass('error-empty');
        }

        if (noLastName) {
            lastName.addClass('error-empty');
        }

        if (noEmail) {
            email.addClass('error-empty');
        } else if (invalidEmail) {
            email.addClass('error-invalid');
        }

        if (noMessage) {
            message.addClass('error-empty');
        }

        if (noFirstName || noLastName || noEmail || noMessage || !noWebsite || invalidEmail) {
            submitButton.text('Send Message');
            submitButton.prop('disabled', false);
            return false;
        } else {
            $(this).unbind().submit();
        }
    })
}

function validateEmail($email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test( $email );
}
