<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./dist/output.css" rel="stylesheet">
</head>

<body >
<section class="h-screen">
  <div class="h-full ">
    <div
      class="g-6 flex h-full flex-wrap items-center justify-center lg:justify-between ">
      <div
        class="shrink-1  h-full grow-0 basis-auto md:mb-0 md:w-9/12 md:shrink-0 lg:w-6/12 xl:w-6/12 bg-[#021323]  ">
        <img
          src="./image/Medical prescription-pana 1.png"
          class="mt-10 ml-10"
          alt="Sample image" />
      </div>

      <div class="mb-12 mr-10 md:mb-0 md:w-8/12 lg:w-5/12 xl:w-5/12">
      <form action="proses_login_dekripsi.php" method="POST">
          <div
            class="flex flex-row items-center justify-center ">
            <p class="mb-2 mr-4 text-lg text-[30px] font-bold">Login</p>
          </div>

          <div
            class="my-4 flex items-center before:mt-0.5 before:flex-1 before:border-t before:border-neutral-300 after:mt-0.5 after:flex-1 after:border-t after:border-neutral-300">
            <p
              class="mx-4 mb-0 text-center font-semibold ">
              Or
            </p>
          </div>

          <div class="relative mb-6" data-te-input-wrapper-init>

            <input
              type="text"
              class="peer block min-h-[auto] w-full rounded-lg border-2 bg-transparent px-3  py-[0.32rem] leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none  [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
              id="exampleFormControlInput2"
              placeholder="Email address"
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

          <div class="mb-6 flex items-center justify-between">

            <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
              <input
                class="relative float-left -ml-[1.5rem] mr-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none 
                rounded-[0.25rem] border-[0.125rem] border-solid  outline-none before:pointer-events-none 
                before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full 
                before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] 
                checked:border-primary  checked:before:opacity-[0.16] checked:after:absolute 
                checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] 
                checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 
                checked:after:border-t-0 checked:after:border-solid checked:after:border-black checked:after:bg-transparent 
                checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04]
                hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s]
                focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] 
                focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] 
                focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] 
                focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]
                checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px 
                checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] 
                checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] 
                checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid
                checked:focus:after:border-black checked:focus:after:bg-transparent "
                    
                type="checkbox"
                id="exampleCheck2" />
              <label
                class="inline-block pl-[0.15rem] hover:cursor-pointer"
                for="exampleCheck2">
                Remember me
              </label>
            </div>

          </div>

          <div class="text-center lg:text-left">
            <button
              type="submit"
              class="inline-block rounded-lg bg-[#193549]  w-full font-bold py-3  text-sm  uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] "
              data-te-ripple-init
              data-te-ripple-color="light">
              Login
            </button>

            <p class="mb-0 mt-4 pt-1 text-sm ">
              No have account?
              <a
                href="./register/register.php"
                class="text-danger transition duration-150 font-bold ease-in-out hover:text-danger-600 focus:text-danger-600 active:text-danger-700"
                >Register</a
              >
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

</body>
</html>