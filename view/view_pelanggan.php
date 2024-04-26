<?php
    include "../koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM tb_pelanggan ORDER BY idpelanggan DESC");
?>

        <br><br>
    <center><a href="dashboard.php?page=tambah_pelanggan" class="bg-[#193549] px-5 py-3 text-white rounded-lg  ">Tambah  +</a></center>
    <br>
        <table border="1" cellpadding="10" cellspacing="0" align="center" class="border-2 w-[80%] border-[#021323] rounded-lg">
            <tr>
                <th>NAMA LENGKAP</th>
                <th>ALAMAT</th>
                <th>TELP</th>
                <th>USIA</th>
                <th>BUKTI FOTO</th>
                <th colspan="2">AKSI</th>
            </tr>
            <?php
            while($baris = mysqli_fetch_assoc($data)){
        ?>
            <tr>
                <td><?=$baris['namalengkap']?></td>
                <td><?=$baris['alamat']?></td>
                <td><?=$baris['telp']?></td>
                <td><?=$baris['usia']?></td>
                <td><img src="../images/<?=$baris['buktifotoresep']?>" alt="" width="100" height="100"></td>
                <td class="flex flex-row justify-end"><a href="dashboard.php?page=edit_pelanggan&idpelanggan=<?=$baris['idpelanggan']?>">
                <img src="../image/edit.png" alt="" class="bg-[#2CDD00] p-2 rounded-lg">
                </a>

                <?php
                    $id_pelanggan_delete = $baris['idpelanggan'];
                    $hide_delete = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM tb_transaksi INNER JOIN tb_pelanggan USING(idpelanggan) WHERE idpelanggan = $id_pelanggan_delete");
                    $cek = mysqli_fetch_row($hide_delete)[0];

                    if($cek == 0){
                ?>
                    <a href="dashboard.php?page=delete_pelanggan&idpelanggan=<?=$baris['idpelanggan']?>">
                    <img src="../image/delete.png" alt="" class="bg-[#FF0404] p-2 rounded-lg ml-3">
                    </a></td>
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
 
</body>

</html>