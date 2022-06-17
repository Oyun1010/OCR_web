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
        <link rel="stylesheet" href="docpopup.css">
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
        <div class="emtuuh">
            <form action="docsearchdata.php" method="post">
                <div id="emhistory">
                    <!--<div class="close">+</div>-->
                    <label for="show" class="close-btn fas fa-times" title="close"></label>
                    <h4>Эмчилгээний түүх нэмэх</h4>
                    <table class='table' border="1px">
                        <tr>
                            <td>Он сар өдөр</td>
                            <td>Үйлчлүүлсэн эмнэлэгийн нэр</td>
                            <td>Тасаг</td>
                            <td>Тэмдэглэл</td>
                        </tr>
                        <tr>
                            <td><input type="date" name='date'></td>
                            <td><input type="text" name='hosname'></td>
                            <td><input type="text" name='tasag'></td>
                            <td><input type="file" name='file1'></td>
                        </tr> 
                    </table>
                    <input class="add" type="submit" name='popadd' value="Нэмэх">  
                </div>    
            </form>
        </div>

    </body>
</html>