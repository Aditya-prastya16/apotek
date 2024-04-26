<?php
$koneksi = mysqli_connect("localhost","root","","apotek");

if(!$koneksi){
    die("tidak terhubung" . mysqli_connect_error());
}
?>