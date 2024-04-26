<?php
    session_start();

    if(!@$_SESSION['username']){
        header('Location:../login.php');
    }else if(@$_SESSION['leveluser']=='karyawan'){
        echo "<script>alert('anda karyawan');window.location.href='../login.php';</script>";
    }
    // if(!@$_COOKIE['username']){
    //     echo "<script>alert('login terlebih dahulu');window.location.href='../login.php'</script>";
    // }elseif(@$_COOKIE['level']=='karyawan'){
    //     echo "<script>alert('anda karyawan, silakan login menggubnakan akun lain');window.location.href='../login.php'</script>";
    // }
    // else{
    include "../koneksi.php";
    $data = mysqli_query($koneksi, "SELECT idobat, perusahaan, namaobat, kategoriobat, hargajual, hargabeli, stokobat, tb_obat.keterangan FROM tb_obat INNER JOIN tb_supplier ON tb_obat.idsupplier = tb_supplier.idsupplier ORDER BY idobat DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>data obat</title>
  </head>
  <link href="../dist/output.css" rel="stylesheet">
  

<body>
    <!-- <?php
        echo $_SESSION['username'];
    ?> -->