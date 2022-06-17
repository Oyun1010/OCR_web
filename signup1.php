<?php
    include 'connection.php';
    $lastname =  $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $register = $_POST['register'];
    $phone = $_POST['phone'];
    $password1 = $_POST['password1'];

    $checkusername = mysqli_query($con, "SELECT * from custom WHERE register ='$register'");
     if(mysqli_num_rows($checkusername) == 1) {
        echo '<script>alert("Бүртгэлтэй хэрэглэгч байна.");</script>';
        echo '<script>location.href = "home.html"</script>';
    }
    else {
        $register = mysqli_query($con, "INSERT INTO custom
        VALUES('', '$lastname', '$firstname', '$register',' ', ' ', '$phone',' ', ' ', '$password1', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ');");
        if($register) {
            echo '<script>alert("Амжилтай бүртгэгдлээ.");</script>';
            echo '<script>location.href = "login.html"</script>';
        }
        else {
            echo '<script>alert("Алдаа гарлаа. Дахин оролдоно уу.");</script>';
            echo '<script>location.href = "signup.html"</script>';
        }

    }
?>