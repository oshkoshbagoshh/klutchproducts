<template>
  <div>
    <div v-if="warning" class="alert alert-warning">
      {{ warning }}
    </div>
    <!-- Render trending tags and latest posts -->
    <div v-for="tag in trendingTags" :key="tag.id">
      {{ tag.name }} ({{ tag.blogposts_count }} posts)
    </div>
    <div v-for="post in latestPosts" :key="post.id">
      <h3>{{ post.title }}</h3>
      <p>{{ post.content }}</p>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    trendingTags: Array,
    latestPosts: Array,
    warning: String,
  },
};
</script>
