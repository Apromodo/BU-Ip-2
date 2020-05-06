<?php
session_start();
if($_SESSION["login"] == true){
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE HTML>
<html>
<body>

<h1>İftar Kampanyası</h1>
<br>
<form method="POST">
    <input type="text" name="pide">   Pide x  17.50TL <br>
    <input type="text" name="tatli">  Tatlı x 4.00 TL<br>

    <p><b>Teslimat</b></p>

        <input required type="radio" id="gun" name="teslimat" value="7">
        <label for="gun">Gün İçinde (7TL)</label><br>

        <input required type="radio" id="30dk" name="teslimat">
        <label for="30dk">İftardan 30 Dakika Önce</label>

    <br><br>

    <input type="checkbox" id="5tl" name="bahsis" value="5">
    <label for="5TL Bahşiş Bırakıyorum">Bahşiş Bırakıyorum</label><br><br>
    <button type="Submit">Satın Al</button>
</form>

<?php

if($_POST){
    $pide = $_POST["pide"];
    $tatli = $_POST["tatli"];
    $teslimat =  $_POST["teslimat"];

    $bahsis = 0;
    $tatliFiyati = 4.00;
    $pideFiyati  = 17.50;

    if(isset($_POST["bahsis"])){
        $bahsis = $_POST["bahsis"];
    }

    echo "<h1> Siparişiniz </h1> </br>";

    if($pide > 0){
        echo "Pide Sayısı : ". $pide . "</br>";
    }
    if($tatli >0){
        echo "Tatlı Sayısı : ". $tatli . "</br>";
    }

    echo "Sipariş Tarihi : " . date("h:i:s") . " - " . date("d/m/yy"). "</br>";

    if($pide > 0){
        for($i = 0; $i<$pide; $i++){
            echo '<img src="pide.png">';
        }
    }

    if($tatli>0){
        for($i = 0; $i<$tatli; $i++){
            echo '<img src="tatli.png">';
        }
    }

    if($pide > 0 && $tatli > 0){
        $pideFiyat = $pide * $pideFiyati;
        $tatliFiyat = $tatli * $tatliFiyati;

        $toplamBorc = $pideFiyat + $tatliFiyat;

        if($bahsis > 0){
            $toplamBorc += 5;
        }
        if($teslimat > 0){
            $toplamBorc += $teslimat;
        }

        echo '</br></br> Toplam : <b>'.$toplamBorc.'</b> TL';
    }

    if($bahsis == 5){
        echo " </br> Bahşiş İçin Çok Teşekkür Ederiz!";
    }

}

?>

</body>
</html>
