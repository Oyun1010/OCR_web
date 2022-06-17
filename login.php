<?php
    include 'connection.php';

    session_start();
    $phone = $_POST['phone'];
    $password1 = $_POST['password'];

    $phone = mysqli_real_escape_string($con, $phone);
    $password1 = mysqli_real_escape_string($con, $password1);

    $fnamesql= mysqli_query($con, "SELECT firstname FROM custom WHERE phone = '$phone' AND password1 = '$password1' LIMIT 1 ");
    $result = mysqli_query($con, "SELECT * FROM custom WHERE phone = '$phone' AND password1 = '$password1'");   
  
    $count = mysqli_num_rows($result);   
    $fname1=mysqli_fetch_array($fnamesql, MYSQLI_ASSOC);   

    
   
    if($count == 1) { 
        $emlist = mysqli_query($con, "SELECT e.ename FROM elist e,custom c where c.register=e.register and c.phone='$phone' and c.password1='$password1'");
        
        $register1 = mysqli_query($con, "SELECT register FROM custom WHERE phone = '$phone' AND password1 = '$password1'");   
        $register2 = mysqli_fetch_array($register1, MYSQLI_ASSOC);
    
        $list = mysqli_fetch_array($emlist, MYSQLI_ASSOC);
        $_SESSION['user_name'] = $fname1;  
        $_SESSION['data_list']  = $list;   
        $_SESSION['usregister'] = $register2;
        echo "<script>location.href='userhome.php'</script>";
    }
    else {
        echo "<script>alert('Нэвтрэх нэр эсвэл нууц үг буруу байна.')</script>'";
        echo "<script>location.href='login.html'</script>";
        
    }
?>