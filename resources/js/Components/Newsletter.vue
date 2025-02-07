<template>
    <div class="px-4 py-12 mx-auto mt-8 max-w-7xl sm:px-6 lg:px-8 bg-gray-50">
      <div class="text-center">
        <h2 class="text-3xl font-bold text-gray-800">Subscribe to Our Newsletter</h2>
        <p class="mt-4 text-gray-600">Get the latest updates and articles delivered straight to your inbox.</p>
        <div class="flex justify-center mt-6">
          <input type="email" placeholder="Enter your email" class="w-64 px-4 py-2 border rounded-l-lg focus:outline-none">
          <!-- TODO: add icons form coreutils UI -->
          <button class="px-6 py-2 text-white bg-indigo-500 rounded-r-lg hover:bg-indigo-600">Subscribe</button>
        </div>
      </div>
    </div>
  </template>

  <script>
  export default {
    name: 'Newsletter',
  };
  </script>
