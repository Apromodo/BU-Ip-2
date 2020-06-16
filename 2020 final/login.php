<?php
if($_POST["sicil"] && $_POST["sifre"])
{

    include "connection.php";

    $sicil  = $_POST["sicil"];
    $sifre  = $_POST["sifre"];

    $sql = "SELECT * FROM calisanlar WHERE sicil='$sicil' && sifre='$sifre' LIMIT 1";
    if ($result=mysqli_query($mysqli,$sql))
    {

        $rowcount=mysqli_num_rows($result);
        if($rowcount == 1){
            $sql = "SELECT * FROM calisanlar WHERE unvan='Yönetici'"; $result2 = mysqli_query($mysqli, $sql); $rowCount2 = mysqli_num_rows($result2);
            if($rowCount2 > 0){ header("location: index_yontici.php"); } else{
                header("location: index_calısan.php");
            }
            printf("Başarsız");

        }

    }
    exit();
}
?>

<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>final</title>
</head>
<body>

<form method="post">
    <label>Giriş Yap</label>
    <div>
        <label>Sicil No:</label>
        <input type="text" name="sicil">
    </div>

    <div>
        <label>Şifre:    </label>
        <input type="text" name="sifre">
    </div>

    <div style="margin-left: 300px; margin-top: 10px">
        <button type="submit">Giriş Yap</button>
    </div>
</form>

</body>
</html>

