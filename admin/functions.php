<?php

function get_tables($con)
{
    // $sql = "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE' AND TABLE_SCHEMA='dbName' ";
    $sql = "SHOW tables";
    $res = mysqli_query($con, $sql);
    // print_r($res);
    if ($res && mysqli_num_rows($res) > 0) {
        $tables = array();
        while ($row = mysqli_fetch_array($res)) {
            array_push($tables, $row[0]);
        }
        return $tables;
    }
    return null;
}
