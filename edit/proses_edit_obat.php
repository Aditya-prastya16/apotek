<?php
    include "../koneksi.php";

    $idobat = $_POST['idobat'];
    $idsupplier = $_POST['idsupplier'];
    $namaobat = $_POST['namaobat'];
    $kategoriobat = $_POST['kategoriobat'];
    $hargajual = $_POST['hargajual'];
    $hargabeli = $_POST['hargabeli'];
    $stokobat = $_POST['stokobat'];
    $keterangan = $_POST['keterangan'];

    $hasil = mysqli_query($koneksi, "UPDATE tb_obat SET idsupplier='$idsupplier', namaobat='$namaobat', kategoriobat='$kategoriobat', hargajual='$hargajual', hargabeli='$hargabeli', stokobat='$stokobat', keterangan='$keterangan' WHERE idobat='$idobat'");

    if(!$hasil){
        echo "Gagal memasukkan data obat" . mysqli_error($koneksi);
    }else{
    //    echo "<script>location.href='view_obat.php'</script>";
        header('Location:dashboard.php?page=obat');
        exit;
    }
?>