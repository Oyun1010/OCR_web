<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Хэрэглэгчийн нүүр</title>
        <link rel="stylesheet" href="userhome.css">
        <link rel="stylesheet" href="sidebar.css">
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script type="text/javascript" src="userhome.js"></script>
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
        <style>
                .mcss {
                    color : green;
                    position: fixed;
                    top:480px;
                    right:160px;
                    border: 1px;
                    border-radius: 15px;
                    width: 150px;
                    height: 25px;
                    text-align: center;
                    background-image: linear-gradient(to bottom right, rgb(167, 236, 207), rgb(247, 253, 251));
                }
                .wel {
                    position: fixed;
                    top:30px;
                    display: inline-block;
                }
            </style>
        <div class="aside">
            <img  class = "simg" src="image/usimage.png" alt="" width="320px" height="335px">
      
            <form action="login.php" method="post">
                <span class = "ls">Эмийн жагсаалт</div>  
                
                <?php
                  session_start();
                  if($_SESSION['data_list'] != NULL) {
                      foreach ($_SESSION['data_list'] as $value) {
                      echo "<p class='mcss'>$value</p>";
                  }
                  }
                  else {
                      
                  } 
                   
                
                ?>
                
            </form>
                  
        </div>
        <div class="content">
            
            <?php                    
                foreach ($_SESSION['user_name'] as $value) {
                    echo "<p class='wel'>Welcome $value</p>";
                };
            ?>                          
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="image" />
                    <input type="submit" name="uploadsubmit"/>
                    </form>
           
            <div id="up">
                <style>
                    .ul {
                         border-style: solid inset;
                        width: 300px;
                        height: 300px;
                        background-color: rgb(216, 239, 231);
                    }
                    </style>
           
                <?php
                    $i=0;
                    if(isset($_FILES['image'])){
                        $file_name = $_FILES['image']['name'];
                        $file_tmp =$_FILES['image']['tmp_name'];
                        move_uploaded_file($file_tmp,"".$file_name);
                        echo "<h3>Image Upload Success</h3>";
                        echo '<img src="'.$file_name.'" style="width:200px">';
                        shell_exec('"D:\\Program Files (x86)\\Tesseract-OCR\\tesseract" "'.$file_name.'" out');
                        echo "<h3>OCR after reading</h3><pre>";
                        $myfile = fopen("out.txt", "r") or die("Unable to open file!");
                        echo fread($myfile,filesize("out.txt"));
                        fclose($myfile);
                        echo "</pre>";
                        $i++;
                    }
                    if(isset($_POST['uploadsubmit']) && $i>1) {
                        echo "<script>location.href='userhome.php';</script>";
                    }
                 
                ?>
            </div>
        </div>
    </body>
</html>