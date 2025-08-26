<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Furnivo - About</title>
  <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  <x-navbar></x-navbar>
  <div class="relative overflow-hidden mb-[-30px]">
    <img src="storage/img/shop.jpg" class="w-full object-cover blur-xs h-50" alt="">
    <div class="w-full h-50 opacity-50 bg-white absolute inset-0">
    </div>
    <div class=" w-full h-50 absolute top-20 left-180 ">
      <h1 class="text-5xl font-semibold ">About</h1>
    </div>
  </div>

  <div class="antialiased bg-white text-slate-700 mb-[-300px]">
    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
      <!-- Heading -->
      <div class="text-center mb-12">
        <p class="mt-3 max-w-2xl mx-auto text-sm sm:text-base text-slate-500">
          Explore the world’s best & largest bidding marketplace with our beautiful products.
          We want to be part of your smile, success, and future growth.
        </p>
      </div>

      <!-- Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card -->
        <div class="relative rounded-2xl border border-slate-200 bg-[#FFF3E3] p-6 hover:shadow-lg transition-shadow">
          <!-- watermark number -->
          <!-- icon -->
          <div
            class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-xl bg-[#B88E2F]  ring-1 ring-slate-200">
            <!-- Palette icon (Heroicons) -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M21 12a9 9 0 10-9 9 3 3 0 003-3 3 3 0 013-3h1.5A3.5 3.5 0 0121 18.5V12z" />
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-slate-900">High Quality Products</h3>
          <p class="mt-2 text-sm text-slate-500">Voluptate aut blanditiis accusantium officiis expedita dolorem
            inventore.</p>
        </div>

        <!-- Card -->
        <div class="relative rounded-2xl border border-slate-200 bg-[#FFF3E3] p-6 hover:shadow-lg transition-shadow">
          <div
            class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-xl bg-[#B88E2F]  ring-1 ring-slate-200">
            <!-- Sparkles icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M9.813 15.904L12 21l2.187-5.096L21 12l-6.813-3.904L12 3 9.813 8.096 3 12l6.813 3.904z" />
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-slate-900">Creator’s Royalty</h3>
          <p class="mt-2 text-sm text-slate-500">Voluptate aut blanditiis accusantium officiis expedita dolorem
            inventore.</p>
        </div>

        <!-- Card -->
        <div class="relative rounded-2xl border border-slate-200 bg-[#FFF3E3] p-6 hover:shadow-lg transition-shadow">
          <div
            class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-xl bg-[#B88E2F]  ring-1 ring-slate-200">
            <!-- Tag icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M20.59 13.41l-7.17 7.17a2 2 0 01-2.83 0L3 13.99V7a2 2 0 012-2h6.99l7.6 7.6a2 2 0 010 2.83zM7 7h.01" />
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-slate-900">Top Class Product Price</h3>
          <p class="mt-2 text-sm text-slate-500">Voluptate aut blanditiis accusantium officiis expedita dolorem
            inventore.</p>
        </div>

        <!-- Card -->
        <div class="relative rounded-2xl border border-slate-200 bg-[#FFF3E3] p-6 hover:shadow-lg transition-shadow">
          <div
            class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-xl bg-[#B88E2F]  ring-1 ring-slate-200">
            <!-- Currency icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M12 8c-3.866 0-7 1.79-7 4s3.134 4 7 4 7-1.79 7-4m-14 0v6c0 2.21 3.134 4 7 4s7-1.79 7-4v-6M5 8c0-2.21 3.134-4 7-4s7 1.79 7 4" />
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-slate-900">Support Multiple Currency</h3>
          <p class="mt-2 text-sm text-slate-500">Voluptate aut blanditiis accusantium officiis expedita dolorem
            inventore.</p>
        </div>

        <!-- Card -->
        <div class="relative rounded-2xl border border-slate-200 bg-[#FFF3E3] p-6 hover:shadow-lg transition-shadow">
          <div
            class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-xl bg-[#B88E2F] ring-1 ring-slate-200">
            <!-- Users icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M17 20a4 4 0 00-8 0M12 12a4 4 0 100-8 4 4 0 000 8zm7 8v-1a4 4 0 00-3-3.87M5 20v-1a4 4 0 013-3.87" />
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-slate-900">Show All Bidders History</h3>
          <p class="mt-2 text-sm text-slate-500">Voluptate aut blanditiis accusantium officiis expedita dolorem
            inventore.</p>
        </div>

        <!-- Card -->
        <div class="relative rounded-2xl border border-slate-200 bg-[#FFF3E3] p-6 hover:shadow-lg transition-shadow">
          <div
            class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-xl bg-[#B88E2F] ring-1 ring-slate-200">
            <!-- Shield-check icon -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                d="M12 3l7 4v5a9 9 0 11-14 0V7l7-4zm-2 9l2 2 4-4" />
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-slate-900">100% Happy Customer</h3>
          <p class="mt-2 text-sm text-slate-500">Voluptate aut blanditiis accusantium officiis expedita dolorem
            inventore.</p>
        </div>
      </div>
    </section>
  </div>

  <x-footer></x-footer>
</body>

</html>
