<?php
$kategori       = @$_GET['kategori_pelanggan'];
$tanggal        = @$_POST['tanggal'];
$nama_pelanggan = @$_POST['nama_pelanggan'];
$id_pel          = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT idpelanggan FROM tb_pelanggan WHERE namalengkap='$nama_pelanggan'"));
$id_pelanggan   = $id_pel['idpelanggan'];
$id_karyawan    = $_SESSION['idkaryawan']; 


$hasil = mysqli_query($koneksi, "INSERT INTO tb_transaksi VALUES('','$id_pelanggan','$id_karyawan','$tanggal','$kategori', '0', '0', '0')");

if(!$hasil){
    echo "Gagal Menambahkan Data Transaksi" . mysqli_error($koneksi);
}else{
//    echo "<script>location.href='view_obat.php'</script>";
    header("Location:dashboard.php?page=transaksi_detail");
    exit;
}
?>