<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Миний бүртгэл</title>
        <link rel="stylesheet" href="asidebar.css">
        <link rel="stylesheet" href="dochome.css">
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
           
            <form action ="docsearchdata.php" method="post">
          
                <h4>Үйлчлүүлэгчийн өвчний түүх</h4>
                <input class="inp" type="text" name="register1" placeholder="Регистерийн дугаар">   
                <input class="inp" type="submit" name="haih" value="Хайх">                          

                

            </form>
                   
        </div>
        
     </body>
</html>