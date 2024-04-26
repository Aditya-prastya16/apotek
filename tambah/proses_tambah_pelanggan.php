<?php
    include "../koneksi.php";

    $nama_lengkap = $_POST['namalengkap'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $usia = $_POST['usia'];
    $bukti_foto = $_FILES['buktifotoresep']['name'];

    move_uploaded_file($_FILES['buktifotoresep']['tmp_name'],"../images/" . $bukti_foto);

    $hasil = mysqli_query($koneksi, "INSERT INTO tb_pelanggan VALUES(NULL, '$nama_lengkap', '$alamat', '$telp', '$usia', '$bukti_foto')");


    if(!$hasil){
        echo "Gagal memasukkan data pelanggan" . mysqli_error($koneksi);
    }else{
    //    echo "<script>location.href='view_obat.php'</script>";
        header("Location:dashboard.php?page=pelanggan");
        exit;
    }
?>