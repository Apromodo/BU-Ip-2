<?php

$ilkArray = array();
$ikinciArray = array();
$ucuncuArray = array();
$dorduncuArray = array();
$besinciArray = array();
for($i = 0 ; $i<=5; $i++){

    $randomSayi = rand(1,49);
    array_push($ilkArray,$randomSayi);

    $randomSayi = rand(1,49);
    array_push($ikinciArray,$randomSayi);

    $randomSayi = rand(1,49);
    array_push($ucuncuArray,$randomSayi);

    $randomSayi = rand(1,49);
    array_push($dorduncuArray,$randomSayi);

    $randomSayi = rand(1,49);
    array_push($besinciArray,$randomSayi);

}


 //YARDIM ALARAK YAPTIM internet üzerinden araştırarak


?>


<head>

</head>

<body>

<style>
    table,tr,td{
        border:1px solid #000;
    }

</style>
<table>
    <tr>
        <?php
        for($bir = 0; $bir <= 5;$bir++){
            sort($ilkArray);
            echo '<td>'.$ilkArray[$bir].'</td>';
        }
        ?>
    </tr>

    <tr>
        <?php
        for($iki = 0; $iki <= 5;$iki++){
            sort($ikinciArray);
            echo '<td>'.$ikinciArray[$iki].'</td>';
        }
        ?>
    </tr>

    <tr>
        <?php
        for($uc = 0; $uc <= 5;$uc++){
            sort($ucuncuArray);
            echo '<td>'.$ucuncuArray[$uc].'</td>';
        }
        ?>
    </tr>

    <tr>
        <?php
        for($dort = 0; $dort <= 5;$dort++){
            sort($dorduncuArray);
            echo '<td>'.$dorduncuArray[$dort].'</td>';
        }
        ?>
    </tr>

    <tr>
        <?php
        for($bes = 0; $bes <= 5;$bes++){
            sort($besinciArray);
            echo '<td>'.$besinciArray[$bes].'</td>';
        }
        ?>
    </tr>


</table>


</body>

</html>



