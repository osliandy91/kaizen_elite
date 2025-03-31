
$(document).ready(function(){

    $("#sendEmail").on('submit',(function(e)
    {
        e.preventDefault();

        var service_id;
        var template_id;
        var user_id;

        $.ajax('includes/get_constants.php',{
            type: 'GET',
            dataType: 'json',
            async: false
        }).done(function (constants) {
            service_id = constants.service_id;
            template_id = constants.template_id_quote;
            user_id = constants.user_id;
        })

        var response = grecaptcha.getResponse();

        if (response.length === 0) {
            alert("Please, Complete the reCAPTCHA.");
            return;
        }

        $("#g-recaptcha-response").val(response)
        var data = {
            'service_id': service_id,
            'template_id': template_id,
            'user_id': user_id,
            'template_params': {
                'type': 'Quote',
                'name' : $("#name").val(),
                'email' : $("#email").val(),
                'phone' : $("#phone").val(),
                'address' : $("#address").val(),
                'city' : $("#city").val(),
                'message' : $("#message").val(),
                'g-recaptcha-response': response
            }

        };

        $.ajax('https://api.emailjs.com/api/v1.0/email/send', {
            type: 'POST',
            data: JSON.stringify(data),
            contentType: 'application/json'
        }).done(function() {
            alert('Your mail is sent!');
            location.reload();
        }).fail(function(error) {
            alert('Oops... ' + JSON.stringify(error));
        });

    }));
});
