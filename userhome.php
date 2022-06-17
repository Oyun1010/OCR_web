<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Хэрэглэгчийн нүүр</title>
        <link rel="stylesheet" href="userhome.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="sidebar.css">
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

 <!--  tesseract cdn -->
  <script src='https://unpkg.com/tesseract.js@v2.1.0/dist/tesseract.min.js'></script>
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
        <<div class="username">
            
            <?php                    
                foreach ($_SESSION['user_name'] as $value) {
                    echo "<h3 class='wel'>Welcome $value</h3>";
                };
            ?>                          
            <!--<form action="userhome3.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="image" />
                    <input type="submit"/>
                    </form>-->
           
            <div id="up"></div>
        </div>
        <div class="content">
        <div class="choose_image">
   		<div class="upload_img_box">
                 		<div class="upload_img_box">

              <i class='bx bx-images' ></i>
              <div class="hint_text">
                <p id="hint">Choose Image</p>
                <p id="supported_format_text">( png or jpeg )</p>
            </div>

      		</div>
 
    	</div>
        <div class="image_holder">
            <img src="" alt="img" id="image">
            <button id="refresh_icon" onclick="refresh_page()"><i class='bx bx-refresh'></i></button>
        </div>
        <div class="show_text_box">
          <textarea id="converted_text"></textarea>
        </div>
        <!-- loading box -->
        <div class="loading_box">
          <p>Converting</p>
          <i class='bx bx-scan'></i>
        </div>
      </div>
      <form enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
          <input type="file" name="selectedImage" id="selectedImage" accept="image/jpeg, image/png">
          <input type="submit" name="submit" value="convert" id="convert_btn">
      </form>
      </div>
    <script src="main.js"></script>
    <?php
           if(isset($_POST['submit'])){
            ?>
                <script>
                let show_text_box = document.querySelector('.show_text_box');
                let converted_text = document.querySelector('#converted_text');
                let loading_box = document.querySelector('.loading_box');
                image_holder.style.display = "none";
                show_text_box.style.zIndex = "110";
                </script>

    <!-- upload image (Temporary) -->
    <?php
      if(isset($_FILES['selectedImage'])){

      $file_name = $_FILES['selectedImage']['name'];
      $file_tmp = $_FILES['selectedImage']['tmp_name'];

    move_uploaded_file($file_tmp, "Images/".$file_name);
?>

<script>
  var ifOnline = window.navigator.onLine;

  /*check user network status*/
  if (ifOnline) {

  loading_box.style.zIndex = "200";

  Tesseract.recognize(
     "<?php echo $file_name ?>",
     'eng',

    )
  .catch (err => {
    console.error(err);
  }).then(({ data: { text } }) => {

      loading_box.style.zIndex = "5";
      converted_text.innerHTML = text;
      
      /*delete image*/
      <?php echo unlink("Images/".$file_name); ?>
      
    })

}else {
  alert('Internet Connection Required');
  converted_text.innerHTML = "Opps !! failed to load";
}
</script>

<?php

  }
}

?> 
    </body>
</html>