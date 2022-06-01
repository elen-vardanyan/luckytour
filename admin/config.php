<?php
$dbhost = "localhost"; // Host
$dbuser = "root"; // User
$dbpassword = ""; // Password
$dbname = "lucky_tour"; // Database


$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname) or die("Connection failed: " . mysqli_connect_error());
