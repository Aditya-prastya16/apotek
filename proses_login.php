<?php
    include "koneksi.php";
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

   $query_login = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE username='$username' AND password='$password'");
   $data_user = mysqli_fetch_assoc($query_login);
   $cek = mysqli_num_rows($query_login);

   if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['leveluser'] = $data_user['leveluser'];
        echo "<script>alert('berhasil login');window.location.href='view/view_obat.php'</script>";
     }else{
          echo "<script>alert('gagal login');window.location.href='login.php'</script>";
     }
?>