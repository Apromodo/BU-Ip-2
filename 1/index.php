<?php

    $sayiArray = array();

    for($i = 0; $i<=19; $i++){ // 0+19 ile birlikte 20 karater oluyor bunun yerine 1 den 20 de denebiirdi
        $rastgeleSayi = rand(0,100);

            array_push($sayiArray,$rastgeleSayi);

    }

    echo 'Rastgele sayilar:';

    for($u = 0;$u<=19; $u++){

        echo " ",'-'.$sayiArray[$u]," ";

    }
        echo '<br>';


    echo 'Sıralanmış sayılar :';

    for($k = 0; $k<=19;$k++){

        sort($sayiArray);

        echo " ",'-'.$sayiArray[$k]," ";
    }
    
?>
