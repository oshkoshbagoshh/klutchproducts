<template>
  <div class="min-h-screen bg-gray-100">
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold text-gray-900">Welcome to Klutch Products</h1>
      <!-- Hero Section -->
      <section class="bg-[#231F20] text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Hero Content -->
            <div class="space-y-8">
              <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                Transform Your Business Analytics
              </h1>
              <p class="text-lg text-gray-300">
                Powerful insights, beautiful dashboards, and data-driven decisions all in one place.
              </p>
              <div class="flex space-x-4">
                <button class="bg-[#FC634A] hover:bg-[#e55a43] px-6 py-3 rounded-lg font-medium transition-colors">
                  Get Started
                </button>
                <button class="border border-[#276F90] hover:bg-[#276F90] px-6 py-3 rounded-lg font-medium transition-colors">
                  Learn More
                </button>
              </div>
            </div>

            <!-- Hero Image -->
            <div class="relative">
              <img
                src=""
                alt="Analytics Dashboard"
                class="rounded-lg shadow-2xl"
              />
              <div class="absolute -z-10 top-10 right-10 w-full h-full bg-[#ECC208] rounded-lg"></div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Home'
}
</script>
