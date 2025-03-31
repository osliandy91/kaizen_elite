
$(document).ready(function(){

    $("#review_our_services").on('submit',(function(e)
    {
        e.preventDefault();

        var service_id;
        var template_id;
        var user_id;

        const activeStars = document.querySelectorAll(".stars .fa-star.active");
        const starCount = activeStars.length;


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
                'type': 'Review',
                'name' : $("#name").val(),
                'city' : $("#city").val(),
                'rating' : starCount,
                'date_service' : $("#date_service").val(),
                'message' : $("#message").val(),
                'g-recaptcha-response': response
            }

        };

        $.ajax('https://api.emailjs.com/api/v1.0/email/send', {
            type: 'POST',
            data: JSON.stringify(data),
            contentType: 'application/json'
        }).done(function() {
            $.ajax({
                type: "POST",
                url: "includes/save_review.php",
                data: data,
                dataType: 'json',
                async: false,
                success: function(response) {
                    console.log('response', response)
                    alert('Your mail is sent!');
                    location.reload();
                }
            });
        }).fail(function(error) {
            alert('Oops... ' + JSON.stringify(error));
        });

    }));
});
