<html>
<head>
    <title>Lab07</title>
    <meta charset="UTF-8">
</head>
<body>

    <?php
    session_start();
        //eğer oturum oluşturularak bu sayfaya gelinmişse
        if(isset($_SESSION["eposta"])){
            echo "Sinema Sayfasına Hoşgeldiniz.";
            echo "<br> <a href='logout.php'>Oturumu Sonlandır.</a>";
        }else{// oturum oluşturulmadan sinema sayfası çalıştırılırsa
            echo "<a href='login.php'> Oturum oluşturmak için Giriş Sayfasına Git</a>";
        }
    ?>

</body>
</html>
