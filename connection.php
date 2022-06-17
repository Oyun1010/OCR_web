<?php 
    $host = "localhost";
    $user = "root";
    $password = '';
    $db_name = "ocr_db";
    $con = mysqli_connect($host, $user, $password, $db_name);
    if(mysqli_connect_errno()) {
        die("Failed to connect with MySql:" .mysqli_connect_error());
    };
    $con -> set_charset("utf8");
?>