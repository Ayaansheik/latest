<?php

// autoload.php @generated by Composer

if (PHP_VERSION_ID < 50600) {
    if (!headers_sent()) {
        header('HTTP/1.1 500 Internal Server Error');
    }
    $err = 'Composer 2.3.0 dropped support for autoloading on PHP <5.6 and you are running '.PHP_VERSION.', please upgrade PHP or use Composer 2.2 LTS via "composer self-update --2.2". Aborting.'.PHP_EOL;
    if (!ini_get('display_errors')) {
        if (PHP_SAPI === 'cli' || PHP_SAPI === 'phpdbg') {
            fwrite(STDERR, $err);
        } elseif (!headers_sent()) {
            echo $err;
        }
    }
    trigger_error(
        $err,
        E_USER_ERROR
    );
}

require_once __DIR__ . '/composer/autoload_real.php';

return ComposerAutoloaderInitb0c97daaa6dd54fd7192e2ad979f9733::getLoader();

// $randomOTP = rand(1111, 9999);
//             //    echo $randomOTP;

//             //Create an instance; passing `true` enables exceptions
//             $mail = new PHPMailer(true);

//             try {
//                 //Server settings
//                 $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
//                 $mail->isSMTP(); //Send using SMTP
//                 $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
//                 $mail->SMTPAuth = true; //Enable SMTP authentication
//                 $mail->Username = 'syedazeemhah0987@gmail.com'; //SMTP username
//                 $mail->Password = 'rqtj eumv pqzh hgcd'; //SMTP password
//                 $mail->SMTPSecure = "tls"; //Enable implicit TLS encryption
//                 $mail->Port = 587; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//                 //Recipients
//                 $mail->setFrom('syedazeemhah0987@gmail.com', 'Courier Management');
//                 $mail->addAddress($email, 'Courier Management'); //Add a recipient
//                 // $mail->addAddress('ellen@example.com');               //Name is optional
//                 $mail->addReplyTo($email, 'Information');
//                 // $mail->addCC('cc@example.com');
//                 // $mail->addBCC('bcc@example.com');

//                 //Attachments
//                 // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//                 // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

//                 //Content
//                 $mail->isHTML(true); //Set email format to HTML
//                 $mail->Subject = 'OTP for Registration of Courier Management System';
//                 $mail->Body = "To verify, please enter the verification code: <b>$randomOTP</b> <p>Kindly do not share your OTP with anyone else and once you are done with registration,</p>";
//                 // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//                 $mail->send();
//                 echo 'Message has been sent';
//             } catch (Exception $e) {
//                 echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//             }