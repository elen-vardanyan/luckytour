<?php

        if (isset($_POST['register'])) {
        $host = "127.0.0.1";
        $username = "root";
        $password = "";
        $database = "lucky_tour";
        $conn = mysqli_connect($host, $username, $password, $database);
    
        if (mysqli_connect_errno($conn)) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $phone = mysqli_real_escape_string($conn,$_POST['phone']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $message = mysqli_real_escape_string($conn,$_POST['message']);
        $date = date("Y-m-d");
    
        $password = md5($password);
    
        $sql = "INSERT INTO `form` (name, phone, email, message, message_date) VALUES ('$name', '$phone', '$email', '$message', '$date')";
    
        if (!$conn) { //I change this from mysql_query($sql)
            die('Error: ' .mysqli_error());
        } else {
           echo "Entry added successfully";
    
           mysqli_close($conn); 
        }
        }
?>