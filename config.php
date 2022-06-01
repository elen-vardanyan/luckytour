<?php 

    $host = '127.0.0.1';
    $user = 'root';
    $pass = '';
    $db = 'lucky_tour';
    $port = 3306;
    try {
        $pdo = new PDO('mysql:host=' .$host.';port='.$port. ';charset=utf8;dbname=' .$db,$user,$pass);
    } catch(PDOException $e) {
        echo 'fail'.$e->getMessage();
    }

?>
