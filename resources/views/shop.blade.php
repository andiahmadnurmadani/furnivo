<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Shop</title>
  <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  <x-navbar></x-navbar>
  <div class="relative overflow-hidden">
    <img src="storage/img/shop.jpg" class="w-full object-cover blur-xs h-50" alt="">
    <div class="w-full h-50 opacity-50 bg-white absolute inset-0">
    </div>
    <div class=" w-full h-50 absolute top-20 left-180 ">
      <h1 class="text-5xl font-semibold ">Shop</h1>
    </div>
  </div>

  <div class="w-full h-30 bg-[#FFF3E3] flex justify-evenly">
    <div class="flex gap-10 items-center">
      <section class="flex gap-3 relative top-1">
        <i class="fi fi-rr-settings-sliders text-2xl"></i>
        <p class="text-2xl font-semibold relative bottom-1">Filter</p>
      </section>

      <section class="flex gap-10">
        <i class="fi fi-rr-apps text-2xl relative top-1.5"></i>
        <i class="fi fi-rr-rectangle-list relative top-1.5 text-2xl"></i>
        <div class="w-0.5 h-10 relative bottom-0.5 bg-gray-400 opacity-60 items-center"></div>
        <p class="relative top-2">Showing 1–16 of 32 results</p>
      </section>
    </div>

    <div class="flex items-center gap-4">
      <p>Show</p>
      <section class="">
        <p class="text-gray-500 px-4 py-3 bg-white text-center">16</p>
      </section>

      <p>Sort by </p>
      <section>
        <p class="text-gray-500 py-3 px-7 bg-white text-center">Default</p>
      </section>
    </div>
  </div>

  <div class="mt-10 grid grid-cols-4 gap-10 mx-40">
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
      <div style="background-color: #F4F5F7" class="w-[285px] h-[460px]">
        <img src="storage/img/products2.jpg" class="w-[285px] h-[301px]" height="301px" alt="">
        <section class="m-4 flex flex-col gap-2">
          <h1 class="text-xl font-semibold">Leviosa</h1>
          <p class="text-gray-400 ">Stylish cafe chair</p>
          <p class="font-bold text-xl">Rp 2.500.0000</p>
        </section>
      </div>
    </a>

    <a href="">
      <div style="background-color: #F4F5F7" class="w-[285px] h-[460px]">
        <img src="storage/img/products3.jpg" class="w-[285px] h-[301px]" height="301px" alt="">
        <section class="m-4 flex flex-col gap-2">
          <h1 class="text-xl font-semibold">Lolito</h1>
          <p class="text-gray-400 ">Luxury big sofa</p>
          <p class="font-bold text-xl">Rp 7.000.0000</p>
        </section>
      </div>
    </a>

    <a href="">
      <div style="background-color: #F4F5F7" class="w-[285px] h-[460px] relative">
        <div class="rounded-full absolute bg-emerald-500 p-2 right-0 text-white m-1">New</div>
        <img src="storage/img/products4.jpg" class="w-[285px] h-[301px]" height="301px" alt="">
        <section class="m-4 flex flex-col gap-2">
          <h1 class="text-xl font-semibold">Respira</h1>
          <p class="text-gray-400 ">Outdoor bar table and stool</p>
          <p class="font-bold text-xl">Rp 700.000</p>
          <p class="line-through text-gray-500">Rp 1.400.000</p>
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
      <div style="background-color: #F4F5F7" class="w-[285px] h-[460px]">
        <img src="storage/img/products6.jpg" class="w-[285px] h-[301px]" height="301px" alt="">
        <section class="m-4 flex flex-col gap-2">
          <h1 class="text-xl font-semibold">Muggo</h1>
          <p class="text-gray-400 ">Small mug</p>
          <p class="font-bold text-xl">Rp 150.0000</p>
        </section>
      </div>
    </a>

    <a href="">
      <div style="background-color: #F4F5F7" class="w-[285px] h-[460px]">
        <img src="storage/img/products7.jpg" class="w-[285px] h-[301px]" height="301px" alt="">
        <section class="m-4 flex flex-col gap-2">
          <h1 class="text-xl font-semibold">Pingky</h1>
          <p class="text-gray-400 ">Cute bed set</p>
          <p class="font-bold text-xl">Rp 7.000.0000</p>
        </section>
      </div>
    </a>

    <a href="">
      <div style="background-color: #F4F5F7" class="w-[285px] h-[460px] relative">
        <div class="rounded-full text-center absolute bg-red-500 p-2 right-0 text-white m-1">50%</div>
        <img src="storage/img/products8.jpg" class="w-[285px] h-[301px]" height="301px" alt="">
        <section class="m-4 flex flex-col gap-2">
          <h1 class="text-xl font-semibold">Poty</h1>
          <p class="text-gray-400 ">Minimalist flower pot</p>
          <p class="font-bold text-xl">Rp 400.0000</p>
          <p class="line-through text-gray-500">Rp 800.000</p>
        </section>
      </div>
    </a>
  </div>


  <div class="flex gap-5 justify-center mt-20">
    @for ($i = 1; $i < $jumlah; $i++)
      <a href="{{ route('shop', $i) }}"
        class="{{ request()->route('page') == $i || (is_null(request()->route('page')) && $i == 1) ? 'bg-[#B88E2F] text-white' : 'bg-[#F9F1E7] text-black' }} px-2 py-2 w-10 text-center text-xl rounded-md">
        {{ $i }}
      </a>
    @endfor
  </div>

  <div class="w-full h-30 mt-20 bg-[#F9F1E7] flex justify-evenly items-center mb-[-400px]">

    <div class="flex items-center gap-3">
      <i class="fi fi-rr-trophy-star text-4xl"></i>
      <section class="items-center">
        <h1 class="font-semibold text-xl">High Quality</h1>
        <h1>Crafted from top materials</h1>
      </section>
    </div>

    <div class="flex items-center gap-3">
      <i class="fi fi-rr-badge-check text-4xl"></i>
      <section class="items-center">
        <h1 class="font-semibold text-xl">Warranty Protection</h1>
        <h1>Over 2 years</h1>
      </section>
    </div>

    <div class="flex items-center gap-3">
      <i class="fi fi-rr-box-open-full text-4xl"></i>

      <section class="items-center">
        <h1 class="font-semibold text-xl">Free Shipping</h1>
        <h1>Order over 150 $</h1>
      </section>
    </div>

    <div class="flex items-center gap-3">
      <i class="fi fi-rr-comment text-4xl"></i>
      <section class="items-center">
        <h1 class="font-semibold text-xl">24 / 7 Support</h1>
        <h1>Dedicated support</h1>
      </section>
    </div>
  </div>

  <x-footer></x-footer>
</body>

</html>
