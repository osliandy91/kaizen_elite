function send() {
    let name = $('#name').val();
    let email = $('#email').val();
    let phone = $('#phone').val();
    let message = $('#message').val();
    let recaptchaResponse = grecaptcha.getResponse(); // Obtener el token de reCAPTCHA

    if (!recaptchaResponse) {
        alert('Por favor, verifica el reCAPTCHA.');
        return;
    }

    let data = {
        'name': name,
        'email': email,
        'phone': phone,
        'message': message,
        'g-recaptcha-response': recaptchaResponse // Se envía el token al backend
    };

    $.ajax({
        data: data,
        url: 'services/send_email.php',
        type: 'post',
        dataType: 'json',
        success: function (response) {
            console.log('response', response);
        },
        error: function (e) {
            alert('Error sending mail');
        }
    });
}
