<?php
    include 'connection.php';

    session_start();
    $staffID = $_POST['code'];
    $firstname = $_POST['firstname'];
    $password1 = $_POST['password'];
    $firstname = mysqli_real_escape_string($con, $firstname);
    $staffID = mysqli_real_escape_string($con, $staffID);
    $password1 = mysqli_real_escape_string($con, $password1);
    $firstname= mysqli_query($con, "SELECT firstname FROM staff WHERE staffID='$staffID' AND password1='$password1'");
    $staffID = mysqli_query($con, "SELECT staffID FROM staff WHERE staffID='$staffID' AND password1='$password1'"); 
 
    $count = mysqli_num_rows($staffID);   
    
   
    if($count == 1) { 

        $_SESSION['user_name'] = $firstname;        
       
        echo "<script>location.href='dochome.php'</script>";
    }
    else {
        echo "<script>alert('Нэвтрэх нэр эсвэл нууц үг буруу байна.')</script>'";
        echo "<script>location.href='login.html'</script>";
        
    }
?>