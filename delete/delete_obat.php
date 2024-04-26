<?php
   include "../koneksi.php";
   $id = $_GET['idobat'];

   $query = mysqli_query($koneksi, "DELETE FROM tb_obat WHERE idobat='$id'");

   if(!$query){
        echo "Gagal Menghapus Data Obat" . mysqli_error($koneksi);
   }else{
        header("Location:dashboard.php?page=obat");
        exit;
   }
?>