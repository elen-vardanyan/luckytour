<?php
require('config.php');
require('./functions.php');

// Get Tables
$tables = get_tables($con);
if (!$tables) die("No table found");
$selected_table = (isset($_GET['table']) && in_array($_GET['table'], $tables)) ? $_GET['table'] : $tables[0];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pid = isset($_GET['id']) ? $_GET['id'] : null;
    if (isset($_POST['id'])) {
        $pid = $_POST['id'];
    }
    echo $pid;
    if ($pid) {
        $sql = "DELETE FROM $selected_table WHERE `id`=$pid";
        $res = mysqli_query($con, $sql);
        if ($res) {
            // Redirecting back
            header("Location: read.php?table=$selected_table");
            exit;
        } else {
            die("Error while deleting user.");
        }
    }
}
