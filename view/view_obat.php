
    <br>    
    <center><a href="dashboard.php?page=tambah_obat" class="bg-[#193549] px-5 py-3 text-white rounded-lg  " > Tambah  +</a></center>
        <br>
        <table  cellpadding="10" align="center" " class="border-2 w-[90%] border-[#021323] rounded-lg">
            <tr>
                <th>ID OBAT</th>
                <th>PERUSAHAAN</th>
                <th>NAMA OBAT</th>
                <th>KATREGORI</th>
                <th>HARGA JUAL</th>
                <th>HARGA BELI</th>
                <th>STOK OBAT</th>
                <th>KETERANGAN</th>
                <th colspan="2">AKSI</th>
            </tr>
            <?php
            while($baris = mysqli_fetch_assoc($data)){
        ?>
            <tr>
                <td><?=$baris['idobat']?></td>
                <td><?=$baris['perusahaan']?></td>
                <td><?=$baris['namaobat']?></td>
                <td><?=$baris['kategoriobat']?></td>
                <td><?=$baris['hargajual']?></td>
                <td><?=$baris['hargabeli']?></td>
                <td><?=$baris['stokobat']?></td>
                <td><?=$baris['keterangan']?></td>
                <!-- edit -->
                <td><a href="dashboard.php?page=edit_obat&idobat=<?=$baris['idobat']?>" >
                <img src="../image/edit.png" alt="" class="bg-[#2CDD00] p-2 rounded-lg">
                </a></td>

                <?php
                    $id_obat_delete = $baris['idobat'];
                    $hide_delete = mysqli_query($koneksi, "SELECT * FROM tb_detail_transaksi INNER JOIN tb_obat ON tb_detail_transaksi.idobat = tb_obat.idobat WHERE tb_obat.idobat = $id_obat_delete");
                    $cek = mysqli_num_rows($hide_delete);

                    if($cek == 0){
                ?>
                    <td><a href="dashboard.php?page=delete_obat&idobat=<?=$baris['idobat']?>">
                    <img src="../image/delete.png" alt="" class="bg-[#FF0404] p-2 rounded-lg">
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

        



