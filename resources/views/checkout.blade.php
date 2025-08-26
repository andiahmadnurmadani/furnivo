<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Check Out</title>
  <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  <x-navbar></x-navbar>
  <div class="relative overflow-hidden">
    <img src="storage/img/shop.jpg" class="w-full object-cover blur-xs h-50" alt="">
    <div class="w-full h-50 opacity-50 bg-white absolute inset-0">
    </div>
    <div class=" w-full h-50 absolute top-20 left-155 ">
      <h1 class="text-5xl font-semibold ">Checkout</h1>
    </div>
  </div>

  <div class="bg-white text-gray-800">

    <div class="max-w-7xl mx-auto p-10 grid grid-cols-1 lg:grid-cols-2 gap-30">

      <!-- Billing Details -->
      <div>
        <h2 class="text-2xl font-bold mb-6">Billing details</h2>
        <form class="space-y-5">

          <div class="grid grid-cols-2 gap-4">
            <div>
              <label class="block mb-1">First Name</label>
              <input type="text" class="w-full border rounded p-2" />
            </div>
            <div>
              <label class="block mb-1">Last Name</label>
              <input type="text" class="w-full border rounded p-2" />
            </div>
          </div>

          <div>
            <label class="block mb-1">Company Name (Optional)</label>
            <input type="text" class="w-full border rounded p-2" />
          </div>

          <div>
            <label class="block mb-1">Country / Region</label>
            <select class="w-full border rounded p-2">
              <option>Indonesia</option>
              <option>Sri Lanka</option>
              <option>Malaysia</option>
            </select>
          </div>

          <div>
            <label class="block mb-1">Street address</label>
            <input type="text" class="w-full border rounded p-2" />
          </div>

          <div>
            <label class="block mb-1">Town / City</label>
            <input type="text" class="w-full border rounded p-2" />
          </div>

          <div>
            <label class="block mb-1">Province</label>
            <select class="w-full border rounded p-2">
              <option>Western Province</option>
              <option>Central Province</option>
            </select>
          </div>

          <div>
            <label class="block mb-1">ZIP code</label>
            <input type="text" class="w-full border rounded p-2" />
          </div>

          <div>
            <label class="block mb-1">Phone</label>
            <input type="text" class="w-full border rounded p-2" />
          </div>

          <div>
            <label class="block mb-1">Email address</label>
            <input type="email" class="w-full border rounded p-2" />
          </div>

          <div>
            <label class="block mb-1">Additional information</label>
            <textarea class="w-full border rounded p-2" rows="3"></textarea>
          </div>

        </form>
      </div>

      <!-- Order Summary -->
      <div>
        <div class="bg-[#F9F1E7] p-6 rounded-md">
          <div class="flex justify-between font-bold text-xl mb-6">
            <span>Product</span>
            <span>Subtotal</span>
          </div>

          <div class="flex justify-between mb-2 text-sm">
            <span>Asgaard sofa × 1</span>
            <span>Rp 250,000.00</span>
          </div>

          <div class="flex justify-between mt-4 mb-2 text-sm">
            <span>Subtotal</span>
            <span>Rp 250,000.00</span>
          </div>

          <div class="flex justify-between font-bold text-lg mb-4">
            <span>Total</span>
            <span class="text-[#B88E2F]">Rp 250,000.00</span>
          </div>

          <hr class="my-4" />

          <div class="space-y-4 text-sm text-gray-700">
            <div>
              <label class="flex items-center space-x-2">
                <input type="radio" name="payment" checked />
                <span class="font-semibold">Direct Bank Transfer</span>
              </label>
              <p class="ml-6 mt-1 text-gray-500 text-xs">
                Make your payment directly into our bank account. Please use your Order ID as the payment reference.
                Your order will not be shipped until the funds have cleared in our account.
              </p>
            </div>

            <div>
              <label class="flex items-center space-x-2 opacity-50 cursor-not-allowed">
                <input type="radio" name="payment" disabled />
                <span>Direct Bank Transfer</span>
              </label>
            </div>

            <div>
              <label class="flex items-center space-x-2 opacity-50 cursor-not-allowed">
                <input type="radio" name="payment" disabled />
                <span>Cash On Delivery</span>
              </label>
            </div>

            <p class="text-xs mt-4 text-gray-600">
              Your personal data will be used to support your experience throughout this website, to manage access to
              your account, and for other purposes described in our
              <a href="#" class="font-semibold underline">privacy policy</a>.
            </p>
          </div>

          <button class="w-full mt-6 py-2 cursor-pointer font-semibold bg-[#B88E2F] text-white transition-all">
            Place order
          </button>
        </div>
      </div>
    </div>

  </div>

  <div class="w-full h-30 mt-10 bg-[#F9F1E7] flex justify-evenly items-center mb-[-400px]">

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
