<?php

session_start();
session_destroy();
echo "Cikis Yapıldı";
header("location: login.php");


