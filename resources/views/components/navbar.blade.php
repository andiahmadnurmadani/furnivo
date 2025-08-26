<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Navbar</title>
  <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
</head>

<body>
  <div class="flex items-center justify-between mx-10 py-5">
    <a href="{{ route('home') }}" class="flex gap-0.5 items-center cursor-pointer">
      <img src="storage/logo/logo.png" width="50px" alt="">
      <h1 class="font-semibold text-3xl">Furnivo</h1>
    </a>

    <section>
      <ul class="flex gap-10">
        <li><a href="{{ route('home') }}"
            class="text-xl w-full p-2 {{ Route::is('home') ? 'underline decoration-2 underline-offset-10 font-semibold decoration-[#B88E2Fed]' : '' }}">Home</a>
        </li>
        <li><a href="{{ route('shop') }}"
            class="text-xl w-full p-2 {{ Route::is('shop') ? 'underline decoration-2 underline-offset-10 font-semibold decoration-[#B88E2Fed]' : '' }}">Shop</a>
        </li>
        <li><a href="{{ route('about') }}"
            class="text-xl w-full p-2 {{ Route::is('about') ? 'underline decoration-2 underline-offset-10 font-semibold decoration-[#B88E2Fed]' : '' }}">About</a>
        </li>
        <li><a href="{{ route('contact') }}"
            class="text-xl w-full p-2 {{ Route::is('contact') ? 'underline decoration-2 underline-offset-10 font-semibold decoration-[#B88E2Fed]' : '' }}">Contact</a>
        </li>
      </ul>
    </section>

    <section class="flex gap-10 items-center">
      <a href=""><i class="fi fi-rr-user text-[22px]"></i></a>
      <a href=""><i class="fi fi-rr-search text-[22px]"></i></a>
      <a href=""><i class="fi fi-rr-heart text-[22px]"></i></a>
      <button onclick="toggleCart()"><i class="fi fi-rr-shopping-cart text-[22px]"></i></button>
    </section>
  </div>

  <x-cartsidebar></x-cartsidebar>

  <script src="https://kit.fontawesome.com/325464f2ae.js" crossorigin="anonymous"></script>
<script>
  function toggleCart() {
    const cart = document.getElementById('cartSidebar');
    const overlay = document.getElementById('cartOverlay');

    const isOpen = !cart.classList.contains('translate-x-full');

    if (isOpen) {
      // Tutup cart
      cart.classList.add('translate-x-full');
      overlay.classList.add('hidden');
    } else {
      // Buka cart
      cart.classList.remove('translate-x-full');
      overlay.classList.remove('hidden');
    }
  }
</script>
</body>

</html>
