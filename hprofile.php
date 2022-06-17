<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Миний бүртгэл</title>
        <link rel="stylesheet" href="sidebar.css">
        <link rel="stylesheet" href="hprofile.css">
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
                    <a href="calendar.html">
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
        <div id="prohome">
            <form>
                <div class="fmedeelel">   
                    <p>Хувийн мэдээлэл</p>
                    <input type="text" name="lastname" placeholder="Овог" value="">
                    <input type="text" name="firstname" placeholder="Нэр" value="">
                    <input type="text" name="register" placeholder="Регистр" value="">
                    <input type="text" name="phone" placeholder="Утас" value="">
                    <input type="email" name="email" placeholder="Имэйл" value="">
                    <input type="text" name="homephone" placeholder="Гэрийн утас" value="">
                    <input type="text" name="sex" placeholder="Хүйс">
                    <input type="date" name="date" placeholder="Төрсөн огноо">
                

                </div>
                <div class="address"> 
                   <P>Хаяг</p>  
                    <input type="text" name="country" placeholder="Улс">
                    <input type="text" name="city" placeholder="Хот">
                    <input type="text" name="duureg" placeholder="Дүүрэг">
                    <input type="number" name="horoo" placeholder="Хороо">
                    <input type="text" name="horoolol" placeholder="Хороолол">
                    <input type="text" name="gudamj" placeholder="Гудамж">
                    <input type="text" name="bair" placeholder="Байр">
                    <input type="number" name="toot" placeholder="Тоот">

                </div>
                <input type="submit">
               

              

                

            </form>

        </div>
     </body>
</html>