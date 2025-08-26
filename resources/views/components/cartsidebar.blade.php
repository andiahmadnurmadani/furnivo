<!-- Overlay -->
<div id="cartOverlay"
     onclick="toggleCart()"
     class="fixed inset-0 bg-[rgba(0,0,0,0.5)] z-40 hidden"></div>

<!-- Sidebar -->
<div id="cartSidebar"
  class="fixed top-0 right-0 w-[400px] h-full bg-white shadow-lg z-50 transform translate-x-full transition-transform duration-300 ease-in-out">
  <div class="p-6 flex justify-between items-center">
    <h2 class="text-xl font-semibold">Shopping Cart</h2>
    <button onclick="toggleCart()" class="text-gray-500 mt-2 cursor-pointer hover:text-black text-xl"><i
        class="fi fi-rr-store-slash"></i></button>
  </div>

  <div class="w-full h-0.5 bg-gray-500"></div>

  <div class="p-6 space-y-4 overflow-y-auto h-[70%]">
    <!-- Item List -->
    <div class="flex items-center justify-between">
      <img src="storage/gallery/img2.jpg" alt="Product 1" class="w-16 h-16 rounded object-cover">
      <div class="flex-1 ml-4">
        <h3 class="font-semibold">Asgaard sofa</h3>
        <p class="text-sm text-gray-600">1 x Rp 250,000.00</p>
      </div>
      <i class="fi fi-rr-cross-circle cursor-pointer text-xl"></i>
    </div>

    <div class="flex items-center justify-between">
      <img src="storage/gallery/img1.jpg" alt="Product 2" class="w-16 h-16 rounded object-cover">
      <div class="flex-1 ml-4">
        <h3 class="font-semibold">Casaliving Wood</h3>
        <p class="text-sm text-gray-600">1 x Rp 270,000.00</p>
      </div>
      <i class="fi fi-rr-cross-circle cursor-pointer text-xl"></i>
    </div>
  </div>

  <div class="flex justify-between  font-semibold text-lg mx-10">
    <span>Subtotal</span>
    <span class="text-[#B88E2F]">Rp 520,000.00</span>
  </div>

  <div class="p-6 mt-5 border-t">
    <div class=" flex justify-evenly">
      <a href="{{route('cart')}}" class="border text-center w-40 cursor-pointer py-2 rounded-full hover:bg-gray-100">Cart</a>
      <a href="{{route('checkout')}}" class="border text-center w-40 cursor-pointer py-2 rounded-full hover:bg-gray-100">Checkout</a>
    </div>
  </div>
</div>
