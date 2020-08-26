<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giriş Sayfası</title>
</head>
<body>

<style>
    input, select, textarea{
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        resize: vertical;
    }

    label {
        padding: 12px 12px 12px 0;
        display: inline-block;
    }

    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
    }

    .container {
        border-radius: 5px;
        background-color: white;
        padding: 20px;
    }

    .col-25 {
        float: left;
        width: 25%;
        margin-top: 6px;
    }

    .col-75 {
        float: left;
        width: 75%;
        margin-top: 6px;
    }

    .col-100 {
        float: left;
        width: 100%;
        margin-top: 6px;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    @media screen and (max-width: 600px) {
        .col-25, .col-75, input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
    }
</style>

<h1>Yemek Sipariş Programına Hoş Geldiniz</h1>

<div class="container">
    <form method="POST">

        <div class="row">
            <div class="col-25">
                <label for="kAdi">Kullanıcı Adı</label>
            </div>
            <div class="col-75">
                <input required type="text" id="kAdi" name="kullaniciAdi" placeholder="Kullanıcı Adı">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="kSifre">Şifre</label>
            </div>
            <div class="col-75">
                <input required type="password" id="kAdi" name="kullaniciSifre" placeholder="Şifre">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="kKart">Kart Numarası</label>
            </div>
            <div class="col-75">
                <input required type="text" id="kKart" name="kullaniciKart" placeholder="Kart Numarası">
            </div>
        </div>

        <div class="row">
            <div class="col-100">
                <button type="submit"> Giriş Yap</button>
            </div>
        </div>

    </form>
</div>

<?php

if($_POST) {
    session_start();

    $kullaniciAdi = $_POST["kullaniciAdi"];
    $kullaniciSifre = $_POST["kullaniciSifre"];
    $kullaniciKart = $_POST["kullaniciKart"];

    $myfile = fopen("hesaplar.txt", "r") or die("Unable to open file!");

    while (!feof($myfile)) {
        $hesaplarArr[] = fgets($myfile);
    }

    for ($i = 0; $i < count($hesaplarArr); $i++) {

        $satir = explode(" ", $hesaplarArr[$i]);

        if ($kullaniciAdi == $satir[0] && $kullaniciSifre == trim($satir[1])) {
            $preCheck = krediKartKontrol ($kullaniciKart);

            if($preCheck){
                $_SESSION["login"] == true;
                echo "Başarılı";
                header("Location: siparis.php");
            }else{
                $_SESSION["login"] == false;
                echo "Başarısız";
            }
        }
    }
    fclose($myfile);
}

function krediKartKontrol ($kullaniciKart){

    if(strlen($kullaniciKart) == 16){
        return true;
    }

    if(strlen($kullaniciKart) == 17){
        $tempCard = substr($kullaniciKart, 0, 9);
        if(substr($tempCard, -1) == "-"){
            return true;
        }
    }

    if(strlen($kullaniciKart) == 19){

        $tempCard = substr($kullaniciKart, 0, 5);

        if(substr($tempCard, -1) == "-"){
            $tempCard = substr($kullaniciKart, 6, 4);
            if(substr($tempCard, -1) == "-"){
                $tempCard = substr($kullaniciKart, 10, 5);
                if(substr($tempCard, -1) == "-"){
                    return true;
                }
            }
        }
    }

    /* Yanlış İse */

    if(strlen($kullaniciKart) == 19){

        $tempCard = substr($kullaniciKart, 0, 5);

        if(substr($tempCard, -1) == "."){
            $tempCard = substr($kullaniciKart, 6, 4);
            if(substr($tempCard, -1) == "."){
                $tempCard = substr($kullaniciKart, 10, 5);
                if(substr($tempCard, -1) == "."){
                    return false;
                }
            }
        }
    }

    if(strlen($kullaniciKart) == 17){
        $tempCard = substr($kullaniciKart, 0, 6);

        if(strpos($tempCard, "AsdAsd") == false){
            return false;
        }
    }

    if(strlen($kullaniciKart) == 20){

        $tempCard = substr($kullaniciKart, 0, 5);

        if(substr($tempCard, -1) == "-"){
            $tempCard = substr($kullaniciKart, 6, 4);
            if(substr($tempCard, -1) == "-"){
                $tempCard = substr($kullaniciKart, 10, 5);
                if(substr($tempCard, -1) == "-"){
                    $tempCard = substr($kullaniciKart, 15, 5);
                    if(substr($tempCard, -1) == "-"){
                        return false;
                    }
                }
            }
        }
    }

}

?>

</body>
</html>