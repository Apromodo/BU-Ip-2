<?php
include("veritabanı.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz.
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Veritabanı İşlemleri</title>
</head>
<body>
    <?php
    $yapi = $vt->prepare("SELECT * FROM stokTable WHERE no =?");
    $yapi->bind_param("i", $_GET["no"]);
    $yapi->execute();
    $sonuc = $yapi->get_result();
    $veriler = $sonuc->fetch_assoc();
    ?>

    <form action="" method="post">
        <table>
            <tr>
                <td>Ürün Numarası</td>
                <td><input type="number" name="no" readonly value="<?php echo $veriler["no"]; ?>"></td>
            </tr>
            <tr>
                <td>Ürün Adı</td>
                <td><input type="text" name="isim" value="<?php echo $veriler["isim"]; ?>"></td>
            </tr>
            <tr>
                <td>Ürün Türü</td>
                <td><input type="text" name="tur" value="<?php echo $veriler["tur"]; ?>"></td>
            </tr>
            <tr>
                <td>Ürün Fiyatı</td>
                <td><input type="text" name="fiyat" value="<?php echo $veriler["fiyat"]; ?>"></td>
            </tr>
            <tr>
                <td>Ürün Miktarı</td>
                <td><input type="number" name="miktar" value="<?php echo $veriler["miktar"]; ?>"></td>
            </tr>
            <tr>
                <td>Ürün Açıklaması</td>
                <td><textarea name="aciklama"> <?php echo $veriler["aciklama"]; ?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Kaydet"></td>
            </tr>
        </table>
    </form>
    <?php
    if ($_POST) { // post ile gelen veri
        $u_no = $_POST['no'];
        $u_isim = $_POST['isim'];
        $u_tur = $_POST['tur'];
        $u_fiyat = $_POST['fiyat'];
        $u_miktar = $_POST['miktar'];
        $u_aciklama = $_POST['aciklama'];
        if ($u_no <> "") {
            $yapi = $vt->prepare("UPDATE stokTable SET isim = ?, tur = ?, fiyat = ? , miktar = ?, aciklama = ? WHERE no =?");
            $yapi->bind_param("ssdisi", $u_isim, $u_tur, $u_fiyat, $u_miktar, $u_aciklama, $u_no);
            $yapi->execute();
            echo $vt->affected_rows . " güncellendi<br>";
            $yapi->close();
            header("Refresh: 3; url=index.php");
            die('3 saniye sonra yönlendirileceksiniz. Beklememek için <a href="index.php">Tıklayın.</a>');
        }
    }
    ?>
</body>
</html>