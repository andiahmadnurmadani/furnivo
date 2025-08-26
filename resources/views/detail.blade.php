<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Detail</title>
  <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  <x-navbar></x-navbar>
  <div class="w-full h-20 bg-[#F9F1E7] flex items-center mb-[-400px]">
    <nav aria-label="Breadcrumb" class="ml-20">
      <ol class="flex items-center gap-1 text-sm text-gray-700">
        <li>
          <a href="{{route('shop')}}" class="block transition-colors hover:text-black text-[20px]"> Shop </a>
        </li>

        <li class="rtl:rotate-180">
          <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
              clip-rule="evenodd" />
          </svg>
        </li>

        <li>
          <a href="#" class="block transition-colors hover:text-black text-[20px] font-bold">Asgaard sofa </a>
        </li>
      </ol>
    </nav>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-8 p-10 bg-white mt-100">
    <!-- Gambar Produk -->
    <div class="flex flex-col md:flex-row gap-4">
      <!-- Thumbnail -->
      <div class="flex md:flex-col gap-2">
        <img src="storage/gallery/img2.jpg" alt="thumb1"
          class="w-16 h-16 object-cover rounded cursor-pointer border" />
        <img src="storage/gallery/img2.jpg" alt="thumb2"
          class="w-16 h-16 object-cover rounded cursor-pointer border" />
        <img src="storage/gallery/img2.jpg" alt="thumb3"
          class="w-16 h-16 object-cover rounded cursor-pointer border" />
        <img src="storage/gallery/img2.jpg" alt="thumb4"
          class="w-16 h-16 object-cover rounded cursor-pointer border" />
      </div>

      <!-- Gambar Utama -->
      <div class="flex-1">
        <img src="storage/gallery/img2.jpg" alt="Asgaard Sofa" class="w-full h-auto rounded-xl object-cover" />
      </div>
    </div>

    <!-- Detail Produk -->
    <div class="space-y-6">
      <!-- Nama & Harga -->
      <div>
        <h2 class="text-3xl font-semibold">Asgaard sofa</h2>
        <p class="text-xl text-gray-600 mt-1">Rs. 250,000.00</p>
      </div>

      <!-- Rating -->
      <div class="flex items-center space-x-2">
        <div class="flex text-yellow-400">
          ★★★★☆
        </div>
        <p class="text-sm text-gray-500">(5 Customer Review)</p>
      </div>

      <!-- Deskripsi -->
      <p class="text-gray-600">
        Setting the bar as one of the loudest speakers in its class, the Kilburn is a compact, stout-hearted hero with a
        well-balanced audio which boasts a clear midrange and extended highs for a sound.
      </p>

      <!-- Ukuran -->
      <div class="space-y-1">
        <p class="font-medium">Size</p>
        <div class="flex space-x-2">
          <button class="px-3 py-1 cursor-pointer rounded bg-[#B88E2F] text-white">L</button>
          <button class="px-3 py-1 cursor-pointer rounded bg-[#F9F1E7]">XL</button>
          <button class="px-3 py-1 cursor-pointer rounded bg-[#F9F1E7]">XS</button>
        </div>
      </div>

      <!-- Warna -->
      <div class="space-y-1">
        <p class="font-medium">Color</p>
        <div class="flex space-x-2">
          <div class="w-6 h-6 rounded-full bg-purple-600 border-2 border-gray-300 cursor-pointer"></div>
          <div class="w-6 h-6 rounded-full bg-black border-2 border-gray-300 cursor-pointer"></div>
          <div class="w-6 h-6 rounded-full bg-yellow-800 border-2 border-gray-300 cursor-pointer"></div>
        </div>
      </div>

      <!-- Quantity & Buttons -->
      <div class="flex items-center space-x-4">
        <div class="flex items-center border rounded">
          <button class="px-3 py-1 text-xl cursor-pointer hover:bg-gray-200">-</button>
          <span class="px-4">1</span>
          <button class="px-3 py-1 text-xl cursor-pointer hover:bg-gray-200">+</button>
        </div>
        <button class="bg-[#B88E2F] text-white px-6 py-2 rounded cursor-pointer">Add To Cart</button>
        <button class="border border-[#B88E2F] px-6 py-2 rounded hover:bg-gray-100 cursor-pointer">Compare</button>
      </div>

      <!-- Metadata -->
      <div class="text-sm text-gray-500 space-y-1">
        <p><strong>SKU:</strong> SS001</p>
        <p><strong>Category:</strong> Sofas</p>
        <p><strong>Tags:</strong> Sofa, Chair, Home, Shop</p>
        <p><strong>Share: <span class="inline">
              <a href=""><i class="fab fa-facebook mx-3 text-black text-[20px]"></i></a>
              <a href=""><i class="fab fa-instagram mx-3 text-black text-[20px]"></i></a>
              <a href=""><i class="fab fa-linkedin mx-3 text-black text-[20px]"></i></a>

            </span> </p>
      </div>

    </div>
  </div>

  <hr>

  <div class="mt-20 mb-20">
    <div>
      <ul class="flex justify-evenly mx-70 mb-10">
        <li class="font-bold text-xl"><a href="">Description</a></li>
        <li class="text-xl font-light"><a href="">Additional Information</a></li>
        <li class="text-xl font-light"><a href="">Reviews [5]</a></li>
      </ul>
    </div>
    <p class="mx-56 text-gray-500 font-light">Embodying the raw, wayward spirit of rock ‘n’ roll, the Kilburn portable active
      stereo speaker
      takes the
      unmistakable look and sound of Marshall, unplugs the chords, and takes the show on the road.</p>

    <p class="mx-56 mt-10 text-gray-500 font-light">Weighing in under 7 pounds, the Kilburn is a lightweight piece of vintage
      styled engineering. Setting the bar as
      one of the loudest speakers in its class, the Kilburn is a compact, stout-hearted hero with a well-balanced audio
      which boasts a clear midrange and extended highs for a sound that is both articulate and pronounced. The analogue
      knobs allow you to fine tune the controls to your personal preferences while the guitar-influenced leather strap
      enables easy and stylish travel.</p>

    <div class="flex mx-20 justify-center gap-5 mt-10">
      <img src="storage/gallery/img1.jpg" class="w-100 rounded-md" alt="">
      <img src="storage/gallery/img1.jpg" class="w-100 rounded-md" alt="">
    </div>
  </div>

  <hr>

  <div class="mt-10">
    <h1 class="text-center font-semibold text-3xl mb-10">Related Products</h1>
    <div class="flex justify-center gap-5">
      <a href="">
        <div style="background-color: #F4F5F7" class="w-[285px] h-[460px] relative">
          <div class="rounded-full absolute bg-emerald-500 p-2 right-0 text-white m-1">New</div>
          <img src="storage/img/products1.jpg" class="w-[285px] h-[301px]" height="301px" alt="">
          <section class="m-4 flex flex-col gap-2">
            <h1 class="text-xl font-semibold">Syltherine</h1>
            <p class="text-gray-400 ">Stylish cafe chair</p>
            <p class="font-bold text-xl">Rp 3.000.0000</p>
          </section>
        </div>
      </a>

      <a href="">
        <div style="background-color: #F4F5F7" class="w-[285px] h-[460px] relative">
          <div class="rounded-full absolute bg-emerald-500 p-2 right-0 text-white m-1">New</div>
          <img src="storage/img/products1.jpg" class="w-[285px] h-[301px]" height="301px" alt="">
          <section class="m-4 flex flex-col gap-2">
            <h1 class="text-xl font-semibold">Syltherine</h1>
            <p class="text-gray-400 ">Stylish cafe chair</p>
            <p class="font-bold text-xl">Rp 3.000.0000</p>
          </section>
        </div>
      </a>

      <a href="">
        <div style="background-color: #F4F5F7" class="w-[285px] h-[460px] relative">
          <div class="rounded-full absolute bg-red-500 p-2 right-0 text-white m-1">50%</div>
          <img src="storage/img/products5.jpg" class="w-[285px] h-[301px]" height="301px" alt="">
          <section class="m-4 flex flex-col gap-2">
            <h1 class="text-xl font-semibold">Grifo</h1>
            <p class="text-gray-400 ">Night lamp</p>
            <p class="font-bold text-xl items-center">Rp 1.500.0000</p>
            <p class="line-through text-gray-500">Rp 3.000.000</p>
          </section>
        </div>
      </a>

      <a href="">
        <div style="background-color: #F4F5F7" class="w-[285px] h-[460px] relative">
          <div class="rounded-full absolute bg-emerald-500 p-2 right-0 text-white m-1">New</div>
          <img src="storage/img/products1.jpg" class="w-[285px] h-[301px]" height="301px" alt="">
          <section class="m-4 flex flex-col gap-2">
            <h1 class="text-xl font-semibold">Syltherine</h1>
            <p class="text-gray-400 ">Stylish cafe chair</p>
            <p class="font-bold text-xl">Rp 3.000.0000</p>
          </section>
        </div>
      </a>
    </div>
  </div>

  <div class="flex w-full mb-[-300px] justify-center mt-10">
    <button style="border-color: #B88E2F; color : #B88E2F"
      class="p-2 w-80 cursor-pointer font-semibold text-xl border-2">Show More</button>
  </div>


  <x-footer></x-footer>
</body>

</html>
