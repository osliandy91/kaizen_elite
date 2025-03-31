<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once '../plugins/php-mailer/src/Exception.php';
require_once '../plugins/php-mailer/src/PHPMailer.php';
require_once '../plugins/php-mailer/src/SMTP.php';


$secret = "6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe";  // Clave secreta de prueba
$response = $_POST['g-recaptcha-response'];

$url = "https://www.google.com/recaptcha/api/siteverify";
$data = [
    'secret' => $secret,
    'response' => $response,
];

$options = [
    'http' => [
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    ]
];
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$responseData = json_decode($result);

if (!$responseData->success) {
    echo "Error en la verificación del reCAPTCHA.";
    return;
}


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['phone'];


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_CLIENT;                      //Enable verbose debug output
    $mail->isSMTP();
    $mail->Host = 'sandbox.smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Port = 2525;
    $mail->Username = '223c3445b5be73';
    $mail->Password = 'f8eeafd908c48c';


    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('pegasuswoodwork1@gmail.com', 'Pegasus Wood Work');     //Add a recipient
    $mail->addReplyTo($email, $name);

//    //Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Info';
    $mail->Body    = '<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
        }
        p {
            font-size: 16px;
            color: #555;
        }
        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Nuevo mensaje de contacto</h2>
        <p><strong>Nombre:</strong> '.htmlspecialchars($name).'</p>
        <p><strong>Email:</strong> '.htmlspecialchars($email).'</p>
        <p><strong>Teléfono:</strong> '.htmlspecialchars($phone).'</p>
        <p><strong>Mensaje:</strong></p>
        <p>'.nl2br(htmlspecialchars($message)).'</p>
        <div class="footer">Este correo fue enviado automáticamente desde el formulario de contacto.</div>
    </div>
</body>';
    $mail->AltBody = $message;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}