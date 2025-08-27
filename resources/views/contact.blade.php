<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact</title>
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
      <h1 class="text-5xl font-semibold ">Contact</h1>
    </div>
  </div>

  <div class="bg-white text-gray-800 mb-[-350px]">

  <div class="max-w-6xl my-10 mx-auto px-6 py-16">
    <h2 class="text-3xl font-bold text-center mb-2">Get In Touch With Us</h2>
    <p class="text-center text-gray-500 mb-20 max-w-xl mx-auto text-sm leading-relaxed">
      For More Information About Our Product & Services. Please Feel Free To Drop Us An Email. Our Staff Always Be There To Help You Out. Do Not Hesitate!
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

      <!-- Contact Info -->
      <div class="space-y-8 text-sm">

        <div class="flex items-start gap-4">
          <div class="text-xl mt-1"><i class="fi fi-rr-marker"></i></div>
          <div>
            <h3 class="font-semibold text-lg mb-1">Address</h3>
            <p>236 5th SE Avenue, New York NY10000, United States</p>
          </div>
        </div>

        <div class="flex items-start gap-4">
          <div class="text-xl mt-1"><i class="fi fi-rr-phone-call"></i></div>
          <div>
            <h3 class="font-semibold text-lg mb-1">Phone</h3>
            <p>Mobile: +(84) 546-6789<br>Hotline: +(84) 456-6789</p>
          </div>
        </div>

        <div class="flex items-start gap-4">
          <div class="text-xl mt-1"><i class="fi fi-rr-alarm-clock"></i></div>
          <div>
            <h3 class="font-semibold text-lg mb-1">Working Time</h3>
            <p>Monday-Friday: 9:00 - 22:00<br>Saturday-Sunday: 9:00 - 21:00</p>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <form class="space-y-5">
        <div>
          <label class="block text-sm mb-1">Your name</label>
          <input type="text" placeholder="Abc" class="w-full border rounded p-2" required />
        </div>

        <div>
          <label class="block text-sm mb-1">Email address</label>
          <input type="email" placeholder="Abc@def.com" class="w-full border rounded p-2" required />
        </div>

        <div>
          <label class="block text-sm mb-1">Subject</label>
          <input type="text" placeholder="This is an optional" class="w-full border rounded p-2" />
        </div>

        <div>
          <label class="block text-sm mb-1">Message</label>
          <textarea rows="4" placeholder="Hi! I'd like to ask about" class="w-full border rounded p-2"></textarea>
        </div>

        <button type="submit" class="bg-[#B88E2F] cursor-pointer hover:bg-[#a57f25] text-white px-6 py-2 rounded transition-all">
          Submit
        </button>
      </form>
    </div>
  </div>

</div>
<x-footer></x-footer>
</body>

</html>
