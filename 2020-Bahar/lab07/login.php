<html>
    <head>
        <title>Lab07</title>
        <meta charset="UTF-8">
    </head>

    <body>
        <?php
            session_start();
            if(isset($_SESSION["eposta"])){ // oturum oluşturulmuşsa

                echo "<a href='sinema.php'>Sinema </a> Sayfasını Bağlanabilirsin";
                echo "<a href='logout.php'>Oturumu Sonlandır </a>";

            }else{// oturumun açılmadığı durum

                $eposta;
                $sifre;

                    if($_POST){
                            //formdan verileri aldık
                        $eposta = $_POST["eposta"]; //formun metodu = POST
                        $sifre =  $_POST["sifre"];

                            if($eposta && $sifre){

                                $kullanıcılar = file("personel.txt");

                                    for($i = 0; $i < count($kullanıcılar);$i++){
                                        //" " boşluğa göre böl diziye ata
                                        $satır = explode(" ", $kullanıcılar[$i] );
                                            //boşlukları temizler
                                            if($eposta ==$satır[0] && $sifre == trim($satır[1])){//karşılaştır

                                                $_SESSION["eposta"] = $eposta;
                                            }
                                    }
                            }

                    }

                    if(isset($_SESSION["eposta"])){

                        echo "Merhaba ".$_SESSION["eposta"]. "<br> <a href='sinema.php'>Sinema</a> Sayfasına git";

                    }else{

                        if($_POST && isset($i)){

                            echo "<p>Kullanıcı Bulunamadı</p>";
                        }
        ?>


                    <h1> Üye Giriş Formu</h1>

                        <form action="" autocomplete="on" method="post">
                            <table>
                                <tr>
                                    <td>E-posta:</td>
                                    <td><input type="email" name="eposta" size="40"></td>
                                </tr>
                                <tr>
                                    <td>Şifre</td>
                                    <td><input type="password" name="sifre" size="40"></td>
                                </tr>
                                <tr>
                                    <td><input type="reset" name="Temizle"></td>
                                    <td><input type="submit" value="Giriş Yap"></td>
                                </tr>
                            </table>
                        </form>
        <?php
                    }
            }
        ?>

    </body>

</html>