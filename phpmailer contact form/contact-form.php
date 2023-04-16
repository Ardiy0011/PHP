<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;


    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

    if(isset($_POST['submit']))
    {

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host ='smtp.gmail.com';

    $mail->Username = '3code.tech@gmail.com';
    $mail->Password = "thrvfhxgdpvcjcuf";

    $mail->SMTPSecure = 'ssl';
    $mail->Port =465;

    $mail->setFrom('3code.tech@gmail.com');
    $mail->addAddress($_POST["email"]);



    $mail->isHTML(true);
    $mail->Subject = $_POST["subject"];
    $mail->message = $_POST["message"];

    $mail->send();

    echo
    "
    <script>
    alert('email successfully sent!');
    document.location.href = 'contact-form.php';
    </script>
    ";

}
?>