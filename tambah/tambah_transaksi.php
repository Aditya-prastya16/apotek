<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4 mt-5">

            <form action="" method="post">
                <select name="kategori_pelanggan" class="form-select" aria-label="Default select example">
                    <option selected>Pilih Kategori Pelanggan</option>
                    <option value="Umum">Umum</option>
                    <option value="Khusus">Khusus</option>
                </select>
                <input type="submit" class="btn btn-success mt-3" value="Selanjutnya">
            </form>




            <?php
            if (@$_POST['kategori_pelanggan']=='Khusus') {
            ?>

            <form action="dashboard.php?page=proses_tambah_transaksi&kategori_pelanggan=Khusus" method="post">
                <div class="input-group mb-3 mt-4">
                    <span class="input-group-text" id="basic-addon1">Tanggal Transaksi</span>
                    <input type="text" value="<?=date("Y-m-d")?>" class="form-control" name="tanggal"
                        aria-label="Username" aria-describedby="basic-addon1" readonly>
                </div>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">Nama Pelanggan</span>
                    <input type="text" list="pelanggan" class="form-control" name="nama_pelanggan" aria-label="Username"
                        aria-describedby="basic-addon1">
                </div>

                <datalist id="pelanggan">
                    <option value="Ini Nama 1"></option>
                    <?php
      $query = "SELECT namalengkap FROM tb_pelanggan";
      $result = mysqli_query($koneksi, $query);
      while($row = mysqli_fetch_assoc($result)){
      ?>
                    <option value="<?=$row['namalengkap'];?>"></option>
                    <?php
      }
      ?>
                </datalist>
                <input type="submit" class="btn btn-success mt-3" value="Selanjutnya">
            </form>

            <?php
             }elseif (@$_POST['kategori_pelanggan']=='Umum') {
                    header('Location:dashboard.php?page=proses_tambah_transaksi&kategori_pelanggan=Umum');
             }
            ?>

        </div>
        <div class="col-4"></div>


    </div>
</div>