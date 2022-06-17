<?php   
    session_start();
    require('connection.php');
    if(isset($_POST['haih']) && isset($_POST['register1'])){
      $register = $_POST['register1']; 
      $register = mysqli_real_escape_string($con, $register);
      $query = "SELECT register FROM custom WHERE register='$register'"; 
      $result = mysqli_query($con, $query) or die(mysqli_error($con));
      $count = mysqli_num_rows($result); 
      if($count == 1) {
        $_SESSION['register1']=$register;
        echo '<script>location.href="dochome0.php"</script>';
      }    
      else {
        echo '<script>alert("Хэрэглэгч бүртгэлгүй байна.");</script>';
        echo '<script>location.href="dochome.php"</script>';
      }         
    } 
    else if(isset($_POST['add1']) && isset($_POST['emiinner']) ) {
      $user_reg = $_SESSION['register1'];
      $count = mysqli_query($con, "SELECT COUNT(ename) from elist where register= '$user_reg'");
      $ename= $_POST['emiinner'];
      $sqlin =mysqli_query($con, "INSERT INTO elist VALUES (' ', '$ename','$user_reg');"); 
      $count2 = mysqli_query($con, "SELECT COUNT(ename) from elist where register= '$user_reg'");
      if($count < $count2) {
          echo '<script>alert("Амжилтгүй");</script>';
          echo '<script>location.href="dochome0.php"</script>';
      }
      else {
          echo '<script>alert("Амжилтай нэмлээ");</script>';
          echo '<script>location.href="dochome0.php"</script>';
      }
      mysqli_close($con);
  }
  else if(isset($_POST['popadd']) && isset($_POST['date']) && isset($_POST['hosname']) && isset($_POST['tasag']) && isset($_POST['file1'])) {
    $user_reg = $_SESSION['register1'];
    $date = $_POST['date'];
    $hosname = $_POST['hosname'];
    $tasag = $_POST['tasag'];
    $file1 = $_POST['file1'];
    $sql = mysqli_query($con, "INSERT INTO ehistory VALUES (' ', '$date', '$hosname', '$tasag', '$file', '$user_reg' )");
    $count2 = mysqli_query($con, "SELECT COUNT(eID) from ehistory");
    if($count < $count2) {
        echo '<script>alert("Амжилтай нэмлээ");</script>';
        echo '<script>location.href="dochome0.php"</script>';
    }
    else {
        echo '<script>alert("Амжилтгүй");</script>';
        echo '<script>location.href="dochome0.php"</script>';
    }
    mysqli_close($con);
  }
  /*else if($_REQUEST['sub'] === "OK" && )
  if(isset($_SESSION['register1'])) {
    $register = $_SESSION['register1'];
    echo '<script>location.href="dochome0.php"</script>';
  }*/

 ?>