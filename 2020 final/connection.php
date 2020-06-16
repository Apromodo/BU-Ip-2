<?php
$mysqli = new mysqli("localhost","root","","final");

if ($mysqli -> connect_errno) {
    echo "SQL Bağlantı Hatası: " . $mysqli -> connect_error;
    exit();
}
