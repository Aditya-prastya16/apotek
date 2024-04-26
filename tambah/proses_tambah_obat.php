<?php
    include "../koneksi.php";

    $idsupplier = $_POST['idsupplier'];
    $namaobat = $_POST['namaobat'];
    $kategoriobat = $_POST['kategoriobat'];
    $hargajual = $_POST['hargajual'];
    $hargabeli = $_POST['hargabeli'];
    $stokobat = $_POST['stokobat'];
    $keterangan = $_POST['keterangan'];

    $hasil = mysqli_query($koneksi, "INSERT INTO tb_obat VALUES(0, '$idsupplier', '$namaobat', '$kategoriobat', '$hargajual', '$hargabeli', '$stokobat', '$keterangan')");

    if(!$hasil){
        echo "Gagal memasukkan data obat" . mysqli_error($koneksi);
    }else{
    //    echo "<script>location.href='view_obat.php'</script>";
        header("Location:dashboard.php?page=obat");
        exit;
    }
?>