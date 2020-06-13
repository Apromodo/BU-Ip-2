<?php 

    if ($_GET)
    {

        include("veritabanı.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz.

        $yapi = $vt->prepare("DELETE FROM stokTable WHERE no =?");
        $yapi->bind_param("i", $_GET['no']);
        $yapi->execute();
        echo $vt->affected_rows . " adet kayıt silindi<br>";
        $yapi->close();
        header("Refresh: 3; url=index.php");
        die('3 saniye sonra yönlendirileceksiniz. Beklememek için <a href="index.php">Tıklayın.</a>');
    }

?>