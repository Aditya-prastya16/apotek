<?php
$id = $_GET['idkaryawan'];
include "../koneksi.php";

$query_karyawan = mysqli_query($koneksi, "SELECT * FROM tb_karyawan WHERE idkaryawan='$id'");
$baris_karyawan = mysqli_fetch_assoc($query_karyawan);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT KARYAWAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <center>
        <h1>Edit Karyawan</h1>
        <form action="" method="POST">
            <div class="font_monospace">
                <table cellpadding="5">
                    <tr>
                        <td>Nama Perusahaan</td>
                        <td><select name="idsupplier" id="" style="width:178px">
                                <?php
                                    $id_supplier = $baris_obat['idsupplier'];
                                    $query_supplier = mysqli_query($koneksi, "SELECT idsupplier, perusahaan FROM tb_supplier WHERE idsupplier=$id_supplier");
                                    $data_supplier = mysqli_fetch_assoc($query_supplier);
                                    
                                    $query="SELECT * FROM tb_supplier";
                                    $data = mysqli_query($koneksi, $query);
                                    while($baris = mysqli_fetch_assoc($data)){
                                ?>
                                <option <?php if($data_supplier['idsupplier']==$baris['idsupplier']){echo "selected";} ?> value="<?=$baris['idsupplier'];?>"><?=$baris['perusahaan'];?></option>
                                <?php
                                    }
                                ?>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Nama Obat</td>
                        <td><input type="text" name="namaobat" value="<?=$baris_obat['namaobat']?>"></td>
                    </tr>
                    <tr>
                        <td>Kategori obat</td>
                        <td><input type="text" name="kategoriobat" value="<?=$baris_obat['kategoriobat']?>"></td>
                    </tr>
                    <tr>
                        <td>Harga Jual</td>
                        <td><input type="text" name="hargajual" value="<?=$baris_obat['hargajual']?>"></td>
                    </tr>
                    <tr>
                        <td>Harga Beli</td>
                        <td><input type="text" name="hargabeli" value="<?=$baris_obat['hargabeli']?>"></td>
                    </tr>
                    <tr>
                        <td>Stok Obat</td>
                        <td><input type="text" name="stokobat" value="<?=$baris_obat['stokobat']?>"></td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td><input type="text" name="keterangan" value="<?=$baris_obat['keterangan']?>"></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" value="Simpan Data Obat"></td>
                    </tr>
                </table>
            </div>
        </form>

    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>