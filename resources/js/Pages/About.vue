<template>
  <div class="bg-white">
    <!-- Hero Section -->
    <section class="bg-[#231F20] text-white py-20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold text-center mb-6">Welcome to Klutch Products</h1>
        <p class="text-xl text-center text-gray-300 max-w-3xl mx-auto">
          Innovation isn't just a buzzword—it's the cornerstone of everything we do.
        </p>
      </div>
    </section>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
      <!-- Innovation Section -->
      <section class="mb-20">
        <div class="grid md:grid-cols-2 gap-12 items-center">
          <div class="space-y-6">
            <h2 class="text-3xl font-bold text-[#231F20]">Innovation Meets Excellence</h2>
            <p class="text-gray-600">
              As a proud offshoot of Klutch Media and a key player in the 101 Data Creations family, 
              we're on a mission to redefine excellence in consumer information. Our legacy? 
              A rich history of data-driven success.
            </p>
          </div>
          <div class="bg-[#276F90] rounded-lg p-8 text-white">
            <h3 class="text-2xl font-bold mb-4">Empowering Your Choices</h3>
            <p>
              Our ambition is simple yet profound: to place the power of informed decision-making 
              into your hands through advanced machine learning and AI.
            </p>
          </div>
        </div>
      </section>

      <!-- Process Section -->
      <section class="mb-20">
        <h2 class="text-3xl font-bold text-center mb-12">Our Process</h2>
        <div class="grid md:grid-cols-3 gap-8">
          <div class="bg-gray-50 p-6 rounded-lg">
            <div class="text-[#ECC208] text-4xl font-bold mb-4">01</div>
            <h3 class="text-xl font-bold mb-3">Beyond the Surface</h3>
            <p class="text-gray-600">
              When a product catches the public eye, our team of experts dives into meticulous research, 
              dissecting every feature, benefit, and potential downside.
            </p>
          </div>
          <div class="bg-gray-50 p-6 rounded-lg">
            <div class="text-[#FC634A] text-4xl font-bold mb-4">02</div>
            <h3 class="text-xl font-bold mb-3">A Collective Voice</h3>
            <p class="text-gray-600">
              We gather reviews from across the web, synthesizing them into a comprehensive 
              mean score for each product.
            </p>
          </div>
          <div class="bg-gray-50 p-6 rounded-lg">
            <div class="text-[#276F90] text-4xl font-bold mb-4">03</div>
            <h3 class="text-xl font-bold mb-3">Quality Assurance</h3>
            <p class="text-gray-600">
              Every product undergoes rigorous verification to ensure only the best 
              recommendations reach our community.
            </p>
          </div>
        </div>
      </section>

      <!-- Community Section -->
      <section class="bg-[#231F20] text-white rounded-lg p-12 mb-20">
        <div class="text-center max-w-3xl mx-auto">
          <h2 class="text-3xl font-bold mb-6">Join Our Community</h2>
          <p class="mb-8">
            Opting for Klutch Products means joining a community of discerning shoppers 
            who value authenticity and quality above all.
          </p>
          <button class="bg-[#FC634A] hover:bg-[#e55a43] px-8 py-3 rounded-lg font-medium transition-colors">
            Get Started
          </button>
        </div>
      </section>

      <!-- Contact Section -->
      <section class="text-center">
        <h2 class="text-3xl font-bold mb-6">Get in Touch</h2>
        <p class="mb-8 text-gray-600">
          Have questions? We're here to help you make informed decisions.
        </p>
        <div class="flex justify-center space-x-4">
          <a href="mailto:contact@klutchproducts.com" 
             class="text-[#276F90] hover:text-[#1d5670] transition-colors">
            contact@klutchproducts.com
          </a>
        </div>
      </section>
    </div>
  </div>
</template>

<script>
export default {
  name: 'About',
  metaInfo: {
    title: 'About Us - Klutch Products'
  }
}
</script>

<style scoped>
/* Add any custom styles here */
</style>