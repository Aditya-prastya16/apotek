<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <center>
        <h1>Tambah Karyawan</h1>
        <form action="../tambah/proses_tambah_karyawan.php" method="POST">
            <div class="font_monospace">
                <table cellpadding="5">
                    <tr>
                        <td>Id Karyawan</td>
                        <td><select name="idkaryawan" id="" style="width:178px">
                                <?php
                                include "../koneksi.php";
                                $query="SELECT * FROM tb_karyawan";
                                $data = mysqli_query($koneksi, $query);
                                while($baris = mysqli_fetch_assoc($data)){
                            ?>
                                <option value="<?=$baris['idkaryawan'];?>"><?=$baris['namakaryawan'];?></option>
                                <?php
                             }
                             ?>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Nama Karyawan</td>
                        <td><input type="text" name="namakaryawan"></td>
                    </tr>
                    <tr>
                        <td>Alamat Karyawan</td>
                        <td><input type="text" name="alamat"></td>
                    </tr>
                    <tr>
                        <td>No Telp</td>
                        <td><input type="text" name="telp"></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" value="Simpan Data karyawan"></td>
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