<template>
  <div>
    <h1>{{ title }}</h1>
    <h2>{{ subtitle }}</h2>
    <p>{{ description }}</p>
    <p>Author: {{ author }}</p>
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
/* Add your Tailwind CSS or custom styles here */
</style>
