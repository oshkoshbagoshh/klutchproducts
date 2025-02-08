<template>
  <div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md">
    <!-- Title -->
    <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ title }}</h1>

    <!-- Subtitle -->
    <h2 class="text-xl font-semibold text-gray-700 mb-4">{{ subtitle }}</h2>

    <!-- Description -->
    <p class="text-gray-600 mb-6">{{ description }}</p>

    <!-- Author -->
    <div class="flex items-center">
      <span class="text-sm font-medium text-gray-500">Author:</span>
      <span class="ml-2 text-sm font-semibold text-blue-600">{{ author }}</span>
    </div>
  </div>
</template>

<script setup>
// Destructure props passed from the controller
const { title, subtitle, description, author } = defineProps([
  'title',
  'subtitle',
  'description',
  'author',
]);
</script>

<style scoped>
/* Add custom styles here if needed */
</style>
