<template>
    <MainLayout>
        <div class="min-h-screen bg-gray-100">
            <div class="container p-4 mx-auto">
                <h1 class="mb-6 text-3xl font-bold">Blog</h1>
                <div class="space-y-4">
                    <div
                        v-for="post in posts"
                        :key="post.id"
                        class="p-6 bg-white rounded-lg shadow-lg"
                    >
                        <h2 class="text-xl font-semibold">{{ post.title }}</h2>
                        <p class="text-gray-700">{{ post.content }}</p>
                    </div>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";
export default {
    name: "Blog",
  components: {MainLayout},
    props: {
        posts: {
            type: Array,
            required: true,
        },
    },
};
</script>

<style scoped>
/* Add custom styles if needed */
</style>
