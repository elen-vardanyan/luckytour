<?php
    include('../config.php');
    




    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = "INSERT INTO `message` (Message_ID, name, phone, email, message, Message_Date) VALUES (NULL, '$name', '$phone', '$email', '$message', NOW())";

    $msg = $pdo->prepare($query);
    header("Location: contact_us.php"); 

    // $query = "INSERT INTO `message` (`Message_ID`, `name`, `phone`, `email`, `message`, `Message_Date`) VALUES (NULL, 'name', 'phone', 'email', 'message', NOW())";
    // $msg = $pdo->prepare($query);
    // $msg->execute(['name'=>$_POST['name']]);
    // $msg->execute(['phone'=>$_POST['phone']]);
    // $msg->execute(['email'=>$_POST['email']]);
    // $msg->execute(['message'=>$_POST['message']]);


    // header("Location: contact_us.php"); 
    // if(isset($_POST['name']) && isset($_POST['email'])){
 
    //     $name=$_POST['name'];
    //     $email = $_POST['email'];
    //     echo "Ваш логин: $name <br> Ваш пароль: $email"; }
?>