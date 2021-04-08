<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "suno";
$ket_noi = mysqli_connect($host, $user, $password, $database);
mysqli_set_charset($ket_noi, 'UTF8');
if (mysqli_connect_error()){
    echo "Connection Fail: ".mysqli_connect_error();exit;
}