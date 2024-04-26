<?php
   include "../koneksi.php";
   $id = $_GET['idpelanggan'];


   $query_select = mysqli_query($koneksi, "SELECT buktifotoresep FROM tb_pelanggan WHERE idpelanggan='$id'");
   $baris = mysqli_fetch_assoc($query_select);
   $delete_gambar = unlink("../images/".$baris['buktifotoresep']);

   $query = mysqli_query($koneksi, "DELETE FROM tb_pelanggan WHERE idpelanggan='$id'");

   if(!$query){
        echo "gagal menghapus data obat" . mysqli_error($koneksi);
   }elseif(!$baris){
     echo "gagal menghapus gambar" . mysqli_error($koneksi);  
   }else{
        header("Location:dashboard.php?page=pelanggan");
        exit;
   }
?>