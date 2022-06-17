<?php
    include 'connection.php';
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Миний бүртгэл</title>
        <link rel="stylesheet" href="asidebar.css">
        <link rel="stylesheet" href="dochome0.css">
        <script scr="https://kit.fontawesome.com/a076d05399.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
     </head>
     <body>
        <div class="sidebar">
            <img src="image/doc.png" alt="" width="170px">
            <ul>
                <li>
                    <a href="dochome.php">
                        <ion-icon name="apps-outline" class="icon"></ion-icon>
                        <span class="title">Нүүр хуудаc</span>
                    </a>
                </li>
                <li>
                    <a href="aprofile.php">
                      <ion-icon name="person-outline" class="icon"></ion-icon>
                      <span class="title">Миний бүртгэл</span>  
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
        <div id="prohome">
            <form action = "docsearchdata.php" method = "post">
                <h4>Үйлчлүүлэгчийн өвчний түүх</h4>
                <input class="inp" type="text" name="register1" placeholder="Регистерийн дугаар">   
                <input class="inp" type="submit" name="haih" value="Хайх">    
                                            
            </from>                
        </div>
        <from method="post">
            <div class="emlist">
            <h5>Эмийн жагсаалт/заавар</h5></h4>
            <input class = "inp1" type="text" name="emiinner" placeholder="Эмийн нэр">
            <input class = "inp1" type="submit" name="add1" value="Нэмэх">
            <div class="list">
            <?php 
                $user_reg = $_SESSION['register1'];
                $ses_sql = mysqli_query($con,"SELECT  ename from elist where register= '$user_reg' ");
                                                        
                while($row = mysqli_fetch_array($ses_sql)){?>
                    <li class='emlistname'><?php echo $row['ename'];?></li>
                    <?php
                }
            ?>  
            </div>
            </div>         
        
        <div id="aside1">
            <img src="image/4043260-avatar-male-man-portrait_113269.png" alt="" width="170px" height="170pxs">
        </div>
        <from class="sidecontent" action = "docsearchdata.php" method = "post">
            <?php
                $user_check = $_SESSION['register1'];
                $ses_sql = mysqli_query($con,"SELECT  * from custom where register= '$user_check' "); 
                while($row = mysqli_fetch_array($ses_sql)){?>
                <ul>
                    <li>Овог: <?php echo $row['lastname'];?></li>
                    <li>Нэр: <?php echo $row['firstname'];?></li>
                    <li>Төрсөн огноо: <?php echo $row['birthday'];?></li>
                    <li>Регистерийн дугаар: <?php echo $row['register'];?></li>
                    <li>Утасны дугаар: <?php echo $row['phone'];?></li>
                </ul>
                <?php
                }
                
            ?>   
        </from>
        <form method="post">                
            <div class="titlehis">Эмчилгээний түүх харах</div>
            <div class="tuuh">
                <input type="date" class="date1" name="date1">
                <input type="date" class="date2" name="date2">
                <input type="submit" class="haih1" name= sub value="OK">
                <input type="text" class = "text1" name="sub">
            </div>
        </from>
        </form> 
        <div class="emtuuh">
            <h5>Эмчилгээний түүх</h5>         
            <a href="docpopup.php"><button class="show-btn">Нэмэх</button></a>
            
            </div>    
        </form>
    </body>
</html>