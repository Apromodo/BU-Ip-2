<?php

$dosya = fopen("atasozlerii.txt","r");

while($satir = fgets($dosya))
    $veri[] = $satir;

fclose($dosya);



?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

<div class="alert alert-success" role="alert" style="width: 1500px;    margin-left: 50px;    margin-top: 400px;">
    <h4 class="alert-heading">Günün Atasözü</h4>
    <hr>
    <p><?php echo $veri[rand(0,9)]?></p>
</div>


</body>



</html>