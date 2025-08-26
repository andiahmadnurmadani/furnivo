<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cart</title>
  <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  <x-navbar></x-navbar>
  <div class="relative overflow-hidden">
    <img src="storage/img/shop.jpg" class="w-full object-cover blur-xs h-50" alt="">
    <div class="w-full h-50 opacity-50 bg-white absolute inset-0">
    </div>
    <div class=" w-full h-50 absolute top-20 left-165 ">
      <h1 class="text-5xl font-semibold ">Cart</h1>
    </div>
  </div>
  <div class="bg-white text-gray-800">

    <!-- Cart Table Section -->
    <div class="max-w-7xl mx-auto p-8 grid grid-cols-1 lg:grid-cols-3 gap-8">

      <!-- Cart Table (2/3 width) -->
      <div class="lg:col-span-2 w-full">
        <table class="w-full text-left border-collapse">
          <thead>
            <tr class="bg-[#F9F1E7] text-sm font-semibold text-black uppercase">
              <th class="py-4 px-6">Product</th>
              <th class="py-4 px-6">Price</th>
              <th class="py-4 px-6">Quantity</th>
              <th class="py-4 px-6">Subtotal</th>
              <th class="py-4 px-6"></th>
            </tr>
          </thead>
          <tbody class="text-sm">
            <tr class="hover:bg-gray-50 transition-all">
              <td class="flex items-center gap-4 py-4 px-6">
                <img src="storage/gallery/img2.jpg" class="w-16 h-16 object-cover rounded" alt="Asgaard sofa" />
                <span class="font-medium">Asgaard sofa</span>
              </td>
              <td class="py-4 px-6 text-gray-500">Rp 250,000.00</td>
              <td class="py-4 px-6">
                <input type="number" value="1" class="w-10 text-center border rounded p-1" />
              </td>
              <td class="py-4 px-6 font-medium">Rp 250,000.00</td>
              <td class="py-4 px-6 text-center">
                <button class="text-[#B88E2F] hover:text-red-600 cursor-pointer text-xl">
                  <i class="fi fi-rr-trash"></i>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Cart Totals (1/3 width) -->
      <div class="bg-[#F9F1E7] p-6 rounded-md h-fit">
        <h2 class="text-xl font-semibold mb-4">Cart Totals</h2>

        <div class="flex justify-between mb-2 text-sm">
          <span class="text-gray-700">Subtotal</span>
          <span class="text-gray-500">Rp 250,000.00</span>
        </div>

        <div class="flex justify-between mb-6 text-base font-semibold">
          <span>Total</span>
          <span class="text-[#B88E2F]">Rp 250,000.00</span>
        </div>

        <a href="{{route('checkout')}}" class="w-full block text-center font-semibold py-2 cursor-pointer rounded bg-[#B88E2F] text-white transition-all">
          Check Out
        </a>
      </div>

    </div>
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
