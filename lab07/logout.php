<html>
<head>
    <title>Lab07</title>
    <meta charset="UTF-8">
</head>
<body>

    <?php
        session_start();
        if(isset($_SESSION["eposta"])){ // oturum açıkken kapatmak için

            unset($_SESSION["eposta"]);
            echo "<br>Oturum Sonlandırıldı.";
        }else {// oturum açılmamış fakat bu adrese gelmiş

            echo "Oturum açmak için <a href='login.php'> login sayfasına </a>gidiniz";
        }
    ?>

</body>
</html>
