<?php
    include "../koneksi.php";
    $data = mysqli_query($koneksi, "SELECT idkaryawan, namakaryawan, alamat, telp FROM tb_karyawan ORDER BY idkaryawan DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
</head>

<body>
    <!-- <div class="font_monospace"> -->
        <table border="1" cellpadding="10" cellspacing="0" align="center">
            <tr>
                <th>ID OBAT</th>
                <th>NAMA KARYAWAN</th>
                <th>ALAMAT</th>
                <th>NO TELP</th>
                <th colspan="2">AKSI</th>
            </tr>
            <?php
            while($baris = mysqli_fetch_assoc($data)){
        ?>
            <tr>
                <td><?=$baris['idkaryawan']?></td>
                <td><?=$baris['namakaryawan']?></td>
                <td><?=$baris['alamat']?></td>
                <td><?=$baris['telp']?></td>
                <td><a href="../edit/edit_karyawan.php?idkaryawan=<?=$baris['idkaryawan']?>">EDIT</a></td>

                <!-- <?php
                    $id_obat_delete = $baris['idkaryawan'];
                    $hide_delete = mysqli_query($koneksi, "SELECT * FROM tb_detail_transaksi INNER JOIN tb_obat ON tb_detail_transaksi.idobat = tb_obat.idobat WHERE tb_obat.idobat = $id_obat_delete");
                    $cek = mysqli_num_rows($hide_delete);

                    if($cek == 0){
                ?> -->
                    <td><a href="../delete/delete_karyawan.php?idkaryawan=<?=$baris['idkaryawan']?>">DELETE</a></td>
                <?php
                    }else{
                        echo "<td></td>";
                    }
                ?>

                
            </tr>
            <?php
            }
        ?>
        </table>
    <!-- </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script> -->
</body>

</html>