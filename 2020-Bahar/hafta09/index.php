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
    <form action="" method="post">
        <table>
            <tr>
                <td>Ürün Numarası</td>
                <td><input type="number" name="no"></td>
            </tr>
            <tr>
                <td>Ürün Adı</td>
                <td><input type="text" name="isim"></td>
            </tr>
            <tr>
                <td>Ürün Türü</td>
                <td><input type="text" name="tur"></td>
            </tr>
            <tr>
                <td>Ürün Fiyatı</td>
                <td><input type="text"name="fiyat"></td>
            </tr>
            <tr>
                <td>Ürün Miktarı</td>
                <td><input type="number" name="miktar"></td>
            </tr>
            <tr>
                <td>Ürün Açıklaması</td>
                <td><textarea name="aciklama" column></textarea></td>
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
            $yapi = $vt->prepare("INSERT INTO stokTable VALUES(?,?,?,?,?,?)");
            $yapi->bind_param("issdis",$u_no,$u_isim,$u_tur,$u_fiyat, $u_miktar,$u_aciklama);
            $yapi->execute();
            echo $vt->affected_rows." kayıt eklendi <br>";
            $yapi->close();
        }
    }
    ?>
    </div>
    <table>

        <tr>
            <th>No</th>
            <th>Ad</th>
            <th>Tür</th>
            <th>Fiyat</th>
            <th>Miktar</th>
            <th>Hakkında Açıklama</th>
            <th></th>
            <th></th>
        </tr>

        <?php
        $sorgu = $vt->query('SELECT * FROM stoktable');
        while ($sonuc = $sorgu->fetch_assoc()) {
            $no = $sonuc['no'];
            $isim = $sonuc['isim'];
            $tur = $sonuc['tur'];
            $fiyat = $sonuc['fiyat'];
            $miktar = $sonuc['miktar'];
            $aciklama = $sonuc['aciklama'];
        ?>
            <tr>
                <td><?php echo $no;  ?></td>
                <td><?php echo $isim; ?></td>
                <td><?php echo $tur; ?></td>
                <td align="right"><?php echo $fiyat; ?>&#x20BA;</td>
                <td align="right"><?php echo $miktar; ?></td>
                <td><?php echo $aciklama; ?></td>
                <td><a href="duzenle.php?no=<?php echo $no; ?>">Düzenle</a></td>
                <td><a href="sil.php?no=<?php echo $no; ?>">Sil</a></td>
            </tr>
        <?php }  ?>
    </table>
    </div>
    </div>
</body>
</html>