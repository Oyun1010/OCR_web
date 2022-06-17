<?php
    session_start();
    include 'connection.php';
    if(isset($_POST['date']) && isset($_POST['hosname']) && isset($_POST['tasag']) && isset($_POST['file1'])) {
        $date = $_POST['date'];
        $hosname = $_POST['hosname'];
        $tasag = $_POST['tasag'];
        $file1 = $_POST['file1'];
        foreach($_SESSION['register'] as $val) {
            $sql = ($con, "INSERT INTO ehistory VALUES (' ', '$date', '$hosname', '$tasag', '$file', '$val' )")
        }
        
        
    }
?>