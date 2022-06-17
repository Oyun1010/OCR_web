<?php
    include 'connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Эмчилгээний түүх</title>
        <link rel="stylesheet" href="sidebar.css">
        <link rel="stylesheet" href="ehistory.css">
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
       
        
    </head>
    <body>
        <div class="sidebar">
            <img src="image/humanicon.png" alt="" width="170px" height="170px">
            <ul>
                <li>
                    <a href="userhome.php">
                        <ion-icon name="apps-outline" class="icon"></ion-icon>
                        <span class="title">Нүүр хуудаc</span>
                    </a>
                </li>
                <li>
                    <a href="calendar.php">
                        <ion-icon name="calendar-outline" class="icon"></ion-icon>
                        <span class="title">Календар</span>
                    </a>
                </li>
                <li>
                    <a href="hprofile.php">
                      <ion-icon name="person-outline" class="icon"></ion-icon>
                      <span class="title">Миний бүртгэл</span>  
                    </a>
                </li>
                <li>
                    <a href="ehistory.php">
                        <ion-icon name="medkit-outline" class="icon"></ion-icon>
                        <span class="title" >Эмчилгээний түүх</span>
                    </a>
                </li>
                <li>
                    <a href="index.html">
                        <ion-icon name="log-out-outline" class="icon"></ion-icon>
                        <span class="title" >Гарах</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="content">
            <h3>Эмчилгээний түүх</h3>
            <form action = "login.php" method ="post">
            <?php
                session_start();
                if($_SESSION['usregister'] != NULL) {
                        foreach ($_SESSION['usregister'] as $value) {
                            $userreg = $value;
                    }
                    }
                    else {
                       
                    }
                $ses_sql = mysqli_query($con, "SELECT * from ehistory where register = '$userreg'");
                ?>
                <table class='tab' border="1px">
                    <tr>
                        <td>Он сар өдөр</td>
                        <td>Үйлчлүүлсэн эмнэлэгийн нэр</td>
                        <td>Тасаг</td>
                        <td>Тэмдэглэл</td>
                     </tr>
                     <?php
                    while($row = mysqli_fetch_array($ses_sql)){?>
                
                     <tr>
                        <td><?php echo $row['date1'];?></td>
                        <td><?php echo $row['hospital_name'];?></td>
                        <td><?php echo $row['tasag'];?></td>
                        <td><?php echo $row['temdeglel'];?></td>
                     </tr>
                     <?php
                    }
                    ?>
                </table>

            </from>
           
        </div>
    </body>
</html>