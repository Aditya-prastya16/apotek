<?php
    include "koneksi.php";
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

   $query_login = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE username='$username'");
   $data_user = mysqli_fetch_assoc($query_login);

   $cek = password_verify($password, $data_user['password']);

   if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['leveluser'] = $data_user['leveluser'];
        $_SESSION['idkaryawan'] = $data_user['idkaryawan'];
        echo "<script>alert('berhasil login');window.location.href='view/dashboard.php?page=dashboard'</script>";
     }else{
          echo "<script>alert('gagal login');window.location.href='login.php'</script>";
     }
?>