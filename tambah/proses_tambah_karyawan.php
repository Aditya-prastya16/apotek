<?php
    include "../koneksi.php";

    $idkaryawan = $_POST['idkaryawan'];
    $namakaryawan = $_POST['namakaryawan'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];

    $hasil = mysqli_query($koneksi, "INSERT INTO tb_karyawan VALUES(NULL, '$idkaryawan', '$namakaryawan', '$alamat', '$telp')");

    if(!$hasil){
        echo "Gagal memasukkan data obat" . mysqli_error($koneksi);
    }else{
    //    echo "<script>location.href='view_obat.php'</script>";
        header('Location:../view/view_karyawan.php');
        exit;
    }
?>