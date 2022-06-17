<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Image to Text Converter</title>
	<link rel="stylesheet" href="style.css">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

 <!--  tesseract cdn -->
  <script src='https://unpkg.com/tesseract.js@v2.1.0/dist/tesseract.min.js'></script>
</head>
<body>

  <div class="content">
     <div class="choose_image">

     <div class="choose_image">

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