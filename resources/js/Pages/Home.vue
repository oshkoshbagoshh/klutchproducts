<template>
  <div>
    <h1>{{ title }}</h1>
    <h2>{{ subtitle }}</h2>
    <div v-if="user">
      <p>Welcome back, {{ user.name }}!</p>
    </div>
    <div v-else>
      <p>Please log in to access more features.</p>
    </div>
    <h3>Featured Posts</h3>
    <ul>
      <li v-for="post in featuredPosts" :key="post.id">
        <h4>{{ post.title }}</h4>
        <p>{{ post.excerpt }}</p>
      </li>
    </ul>
  </div>
</template>

<script setup>
// Destructure props passed from the controller
const { title, subtitle, featuredPosts, user } = defineProps([
  'title',
  'subtitle',
  'featuredPosts',
  'user',
]);
</script>

<style scoped>
/* Add your Tailwind CSS or custom styles here */
</style>
