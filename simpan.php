<?php
$id = $_GET['idpelanggan'];
include "../koneksi.php";

$query_pelanggan = mysqli_query($koneksi, "SELECT * FROM tb_pelanggan WHERE idpelanggan='$id'");
$baris = mysqli_fetch_assoc($query_pelanggan);
?>





    <center>
        <h1>Edit Obat</h1>
        <form action="dashboard.php?page=proses_edit_pelanggan" method="POST" enctype="multipart/form-data">
            <input type="text" hidden name="idpelanggan" value="<?=$id?>">
            <div class="font_monospace">
                <table cellpadding="5">
                <tr>
                        <td>Nama Lengkap</td>
                        <td><input type="text" name="namalengkap" value="<?=$baris['namalengkap']?>"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="alamat" value="<?=$baris['alamat']?>"></td>
                    </tr>
                    <tr>
                        <td>Telp</td>
                        <td><input type="text" name="telp" value="<?=$baris['telp']?>"></td>
                    </tr>
                    <tr>
                        <td>Usia</td>
                        <td><input type="text" name="usia" value="<?=$baris['usia']?>"></td>
                    </tr>
                    <tr>
                        <td>Bukti Foto Resep</td>
                        <td><input type="file" name="buktifotoresep" id=""></td>
                        <td><img src="../images/<?=$baris['buktifotoresep']?>" alt="" width="100" height="100"></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" value="Simpan"></td>
                    </tr>
                </table>
            </div>
        </form>

