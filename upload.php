<style>
    .up {
        background-color:aqua;
    }
</style>
<?php
if(isset($_FILES['image'])){
$file_name = $_FILES['image']['name'];
$file_tmp =$_FILES['image']['tmp_name'];
move_uploaded_file($file_tmp,"".$file_name);
echo "<h4 class='upload'>Image Upload Success</h3>";
echo '<img src="'.$file_name.'" style="width:180px">';
shell_exec('"D:\\Program Files (x86)\\Tesseract-OCR\\tesseract" "'.$file_name.'" out');

echo "<h4 class='upload'>OCR after reading</h3><pre class='up'>";

$myfile = fopen("out.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("out.txt"));
fclose($myfile);
echo "</pre>";
}
?>