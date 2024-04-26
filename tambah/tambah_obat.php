

<h1 class="text-[#230202] font-bold text-[40px] mt-8 mb-4  text-center">Tambah Obat</h1>
<div class="flex items-center justify-center  ">
<form action="dashboard.php?page=proses_tambah_obat " method="POST" class=" flex flex-col  w-[50%] ">


<div>
    <label for="idsupplier" class="block mb-2 text-sm font-medium text-[16px] ml-1">First name</label>
    <select name="idsupplier" id="idsupplier" class="w-full bg-transparent border-2 rounded-lg p-3 border-[#000]" >
                                <?php
                                include "../koneksi.php";
                                $query="SELECT * FROM tb_supplier";
                                $data = mysqli_query($koneksi, $query);
                                while($baris = mysqli_fetch_assoc($data)){
                            ?>
                                <option value="<?=$baris['idsupplier'];?>"><?=$baris['perusahaan'];?></option>
                                <?php
                             }
                             ?>
                            </select>
</div>

<div class="mt-4    ">
    <label for="namaobat" class="block mb-2 text-sm font-medium text-[16px] ml-1">Nama Obat</label>
    <input type="text" name="namaobat" class="w-full bg-transparent border-2 rounded-lg p-3 border-[#000]">
</div>

<div class="mt-4    ">
    <label for="kategoriobat" class="block mb-2 text-sm font-medium text-[16px] ml-1">Kategori Obat</label>
    <input type="text" name="kategoriobat" class="w-full bg-transparent border-2 rounded-lg p-3 border-[#000]">
</div>

<div class="mt-4    ">
    <label for="hargajual" class="block mb-2 text-sm font-medium text-[16px] ml-1">Harga Jual </label>
    <input type="text" name="hargajual" class="w-full bg-transparent border-2 rounded-lg p-3 border-[#000]">
</div>

<div class="mt-4    ">
    <label for="hargabeli" class="block mb-2 text-sm font-medium text-[16px] ml-1">Harga Beli</label>
    <input type="text" name="hargabeli" class="w-full bg-transparent border-2 rounded-lg p-3 border-[#000]">
</div>

<div class="mt-4    ">
    <label for="stokobat    " class="block mb-2 text-sm font-medium text-[16px] ml-1">Stok</label>
    <input type="text" name="stokobat" class="w-full bg-transparent border-2 rounded-lg p-3 border-[#000]">
</div>

<div class="mt-4    ">
    <label for="keterangan" class="block mb-2 text-sm font-medium text-[16px] ml-1">Keterangan</label>
    <input type="text" name="keterangan" class="w-full bg-transparent border-2 rounded-lg p-3 border-[#000]">
</div>

<div class="mt-5 mb-20   ">

    <input type="submit" class="w-full font-semibold text-[16px]  text-white  border-2 rounded-xl p-3 bg-[#193549]" value="Simpan Data Obat"  >
</div>

</div>
</form>

