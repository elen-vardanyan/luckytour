<?php

    require 'includes/PHPMailer.php';
    require 'includes/SMTP.php';
    require 'includes/Exception.php';

    use PHPMAILER\PHPMAILER\PHPMailer;
    use PHPMAILER\PHPMAILER\SMTP;
    use PHPMAILER\PHPMAILER\Exception;

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $name = htmlspecialchars($name);
    $phone = htmlspecialchars($phone);
    $email = htmlspecialchars($email);
    $message = htmlspecialchars($message);

    $name = urldecode($name);
    $phone = urldecode($phone);
    $email = urldecode($email);
    $message = urldecode($message);

    $name = trim($name);
    $phone = trim($phone);
    $email = trim($email);
    $message = trim($message);

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = "true";
    $mail->SMTPSecure = "tls";
    $mail->Port = "587";
    $mail->Username = "luckytour0@gmail.com";
    $mail->Password = "lkfuiyyopjsdumuk";
    $mail->Subject = "Lucky Tour";
    $mail->setFrom("luckytour0@gmail.com");
    $mail->isHTML(true);
    $mail->Body = "<tr><td>Անուն</td><td> - $name</td></tr>
                    <tr><td>Հեռախոսահամար</td><td> - $phone</td></tr>
                    <tr><td>Էլեկտրոնային հասցե</td><td> - $email</td></tr>
                    <tr><td>Հաղորդագրություն</td><td> - $message</td></tr>";
    $mail->addAddress("luckytour0@gmail.com");
    if ($mail->Send() ) {
        echo "email sent!";
    } else {
        echo "error";
    }

    $mail->smtpClose();

?>