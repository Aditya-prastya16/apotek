<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../dist/output.css" rel="stylesheet">
</head>
<body>
<section class="h-screen">
  <div class="h-full ">
    <div
      class="g-6 flex h-full flex-wrap items-center justify-center lg:justify-between ">
      <div
        class="shrink-1  h-full grow-0 basis-auto md:mb-0 md:w-9/12 md:shrink-0 lg:w-6/12 xl:w-6/12 bg-[#021323]  ">
        <img
          src="../image/Medical prescription-pana 1.png"
          class="mt-10 ml-10"
          alt="Sample image" />
      </div>

      <div class="mb-12 mr-10 md:mb-0 md:w-8/12 lg:w-5/12 xl:w-5/12">
      <form action="proses_register_enkripsi.php" method="POST">
          <div
            class="flex flex-row items-center justify-center ">
            <p class="mb-2 mr-4 text-lg text-[30px] font-bold">Register</p>
          </div>

          <div
            class="my-4 flex items-center before:mt-0.5 before:flex-1 before:border-t before:border-neutral-300 after:mt-0.5 after:flex-1 after:border-t after:border-neutral-300">
            <p
              class="mx-4 mb-0 text-center font-semibold ">
              Or
            </p>
          </div>

          <div class="relative mb-6" data-te-input-wrapper-init>

<select
  type=""
  class="peer block min-h-[auto] w-full rounded-lg border-2 bg-transparent px-3  py-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none  [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
  id="exampleFormControlInput3"
  name="idkaryawan"  />
  <?php
                                include "../koneksi.php";
                                $query="SELECT * FROM tb_karyawan WHERE idkaryawan NOT IN (SELECT idkaryawan FROM tb_login)";
                                $data = mysqli_query($koneksi, $query);
                                $cek = mysqli_num_rows($data);

                                if($cek > 0){

                                
                                while($baris = mysqli_fetch_assoc($data)){
                            ?>
                                <option value="<?=$baris['idkaryawan'];?>"><?=$baris['namakaryawan'];?></option>
                                <?php
                             }
                             }else{
                                ?>
                                    <option value="">Semua karyawan sudah register</option>
                                <?php
                             }
                             ?>
</select>

</div>

          <div class="relative mb-6" data-te-input-wrapper-init>

            <input
              type="text"
              class="peer block min-h-[auto] w-full rounded-lg border-2 bg-transparent px-3  py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none  [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
              id="exampleFormControlInput2"
              name="username" />
            <label
              for="exampleFormControlInput2"
              class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15]  transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none "
              >Username
            </label>
          </div>

          <div class="relative mb-6" data-te-input-wrapper-init>
            <input
              type="password"
              class="peer block min-h-[auto] w-full rounded-lg border-2 bg-transparent px-3 py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none  [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
              id="exampleFormControlInput22"
              placeholder="Password" 
              name="password"/>
            <label
              for="exampleFormControlInput22"
              class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15]  transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none "
              >Password
            </label>
          </div>

          <select
  type=""
  class="peer block min-h-[auto] w-full rounded-lg border-2 bg-transparent px-3  py-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none  [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
  id="exampleFormControlInput3"
  name="leveluser"  />
  <option value="karyawan">karyawan</option>
    <option value="admin">admin</option>
</select>

          <div class="mb-6 flex items-center justify-between">

            <div class="mb-[0.125rem] block min-h-[1.5rem] ">
            <p class="mb-0 mt-4 pt-1 text-sm ">
              No have account?
              <a
                href="../login.php"
                class="text-danger transition duration-150 font-bold ease-in-out hover:text-danger-600 focus:text-danger-600 active:text-danger-700"
                >Login</a
              >
            </p>
            </div>

          </div>

          <div class="text-center lg:text-left">
            <button
              type="submit"
              class="inline-block rounded-lg bg-[#193549]  w-full font-bold py-3  text-sm  uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] "
              data-te-ripple-init
              data-te-ripple-color="light">
              Register
            </button>


          </div>
        </form>
      </div>
    </div>
  </div>
</section>
</body>
</html>