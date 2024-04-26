<?php
$id = $_GET['idobat'];
include "../koneksi.php";

$query_obat = mysqli_query($koneksi, "SELECT * FROM tb_obat WHERE idobat='$id'");
$baris_obat = mysqli_fetch_assoc($query_obat);
?>




<h1 class="text-[#230202] font-bold text-[40px] mt-8 mb-4  text-center">Edit Obat <?=$baris_obat['namaobat']?></h1>
<div class="flex items-center justify-center  ">
<form action="dashboard.php?page=proses_edit_obat " method="POST" class=" flex flex-col  w-[50%] ">
<input type="text" hidden name="idobat" value="<?=$id?>">

<div>
    <label for="idsupplier" class="block mb-2 text-sm font-medium text-[16px] ml-1">First name</label>
    <select name="idsupplier" id="idsupplier" class="w-full bg-transparent border-2 rounded-lg p-3 border-[#000]" >
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
                            </select>
</div>

<div class="mt-4    ">
    <label for="namaobat" class="block mb-2 text-sm font-medium text-[16px] ml-1">Nama Obat</label>
    <input type="text" name="namaobat" class="w-full bg-transparent border-2 rounded-lg p-3 border-[#000]"  value="<?=$baris_obat['namaobat']?>">
</div>

<div class="mt-4    ">
    <label for="kategoriobat" class="block mb-2 text-sm font-medium text-[16px] ml-1">Kategori Obat</label>
    <input type="text" name="kategoriobat" class="w-full bg-transparent border-2 rounded-lg p-3 border-[#000]"  value="<?=$baris_obat['kategoriobat']?>">
</div>

<div class="mt-4    ">
    <label for="hargajual" class="block mb-2 text-sm font-medium text-[16px] ml-1">Harga Jual </label>
    <input type="text" name="hargajual" class="w-full bg-transparent border-2 rounded-lg p-3 border-[#000]"  value="<?=$baris_obat['hargajual']?>">
</div>

<div class="mt-4    ">
    <label for="hargabeli" class="block mb-2 text-sm font-medium text-[16px] ml-1">Harga Beli</label>
    <input type="text" name="hargabeli" class="w-full bg-transparent border-2 rounded-lg p-3 border-[#000]"  value="<?=$baris_obat['hargabeli']?>">
</div>

<div class="mt-4    ">
    <label for="stokobat    " class="block mb-2 text-sm font-medium text-[16px] ml-1">Stok</label>
    <input type="text" name="stokobat" class="w-full bg-transparent border-2 rounded-lg p-3 border-[#000]"  value="<?=$baris_obat['stokobat']?>">
</div>

<div class="mt-4    ">
    <label for="keterangan" class="block mb-2 text-sm font-medium text-[16px] ml-1">Keterangan</label>
    <input type="text" name="keterangan" class="w-full bg-transparent border-2 rounded-lg p-3 border-[#000]"  value="<?=$baris_obat['keterangan']?>">
</div>

<div class="mt-5 mb-20   ">

    <input type="submit" class="w-full font-semibold text-[16px]  text-white  border-2 rounded-xl p-3 bg-[#193549]" value="Simpan Data Obat"  >
</div>

</div>
</form>

