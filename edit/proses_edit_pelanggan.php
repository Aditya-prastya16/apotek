<?php
    include "../koneksi.php";

    $id = $_POST['idpelanggan'];
    $nama_lengkap = $_POST['namalengkap'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $usia = $_POST['usia'];
    $bukti_foto = $_FILES['buktifotoresep']['name'];

    move_uploaded_file($_FILES['buktifotoresep']['tmp_name'],"../images/" . $bukti_foto);

    $hasil = mysqli_query($koneksi, "UPDATE tb_pelanggan SET namalengkap='$nama_lengkap', alamat='$alamat', telp='$telp', usia='$usia', buktifotoresep='$bukti_foto' WHERE idpelanggan='$id'");


    if(!$hasil){
        echo "Gagal mengedit data pelanggan" . mysqli_error($koneksi);
    }else{
    //    echo "<script>location.href='view_obat.php'</script>";
        header('Location:dashboard.php?page=pelanggan');
        exit;
    }
?>