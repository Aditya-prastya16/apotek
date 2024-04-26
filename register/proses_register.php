<?php
    include "../koneksi.php";

    $idkaryawan = $_POST['idkaryawan'];
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $level      = $_POST['leveluser'];

   $query_username = mysqli_query($koneksi, "SELECT username FROM tb_login WHERE username='$username'");
   $cek = mysqli_num_rows($query_username);

   if($cek != 0){
    echo "<script>alert('username sudah ada');window.location.href='register.php';</script>";
   }else{
    // echo $test = "INSERT INTO tb_login VALUES('$username', '$password', '$level', '$idkaryawan')";
    $hasil = mysqli_query($koneksi, "INSERT INTO tb_login VALUES('$username', '$password', '$level', '$idkaryawan')");

    if(!$hasil){
        echo "Gagal register" . mysqli_error($koneksi);
    }else{
    //    echo "<script>location.href='view_obat.php'</script>";
        header('Location:../login.php');
        exit;
    }
   }

    
?>