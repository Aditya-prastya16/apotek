<?php
$id = $_GET['idpelanggan'];
include "../koneksi.php";

$query_pelanggan = mysqli_query($koneksi, "SELECT * FROM tb_pelanggan WHERE idpelanggan='$id'");
$baris = mysqli_fetch_assoc($query_pelanggan);
?>




<h1 class="text-[#230202] font-bold text-[40px] mt-8 mb-4  text-center">Edit Pelanggan</h1>
<div class="flex items-center justify-center  ">
<form action="dashboard.php?page=proses_edit_pelanggan " method="POST" enctype="multipart/form-data" class=" flex flex-col  w-[50%] ">
<input type="text" hidden name="idpelanggan" value="<?=$id?>">

<div class="mt-4    ">
    <label for="namalengkap" class="block mb-2 text-sm font-medium text-[16px] ml-1">Nama Lengkap</label>
    <input type="text" name="namalengkap" class="w-full bg-transparent border-2 rounded-lg p-3 border-[#000]" value="<?=$baris['namalengkap']?>">
</div>

<div class="mt-4    ">
    <label for="alamat" class="block mb-2 text-sm font-medium text-[16px] ml-1">Alamat</label>
    <input type="text" name="alamat" class="w-full bg-transparent border-2 rounded-lg p-3 border-[#000]" value="<?=$baris['alamat']?>">
</div>

<div class="mt-4    ">
    <label for="telp" class="block mb-2 text-sm font-medium text-[16px] ml-1">No Telepon </label>
    <input type="text" name="telp" class="w-full bg-transparent border-2 rounded-lg p-3 border-[#000]" value="<?=$baris['telp']?>">
</div>

<div class="mt-4    ">
    <label for="usia" class="block mb-2 text-sm font-medium text-[16px] ml-1">Usia</label>
    <input type="text" name="usia" class="w-full bg-transparent border-2 rounded-lg p-3 border-[#000]" value="<?=$baris['usia']?>">
</div>

<div class="mt-4    ">
    <label for="buktifotoresep" class="block mb-2 text-sm font-medium text-[16px] ml-1">Bukti Foto Resep</label>
    <img src="../images/<?=$baris['buktifotoresep']?>" alt="" width="100" height="100">
    <input type="file" name="buktifotoresep" class="w-full bg-transparent border-2 rounded-lg p-3 border-[#000]" >
</div>

<div class="mt-5 mb-20   ">

    <input type="submit" class="w-full font-semibold text-[16px]  text-white  border-2 rounded-xl p-3 bg-[#193549]" value="Simpan "  >
</div>

</div>
</form>

