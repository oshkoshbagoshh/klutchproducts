<!-- resources/js/Components/Sidebar.vue -->
<script setup>
defineProps({
    categories: {
        type: Array,
        required: true
    }
});
</script>

<template>
    <aside class="sidebar w-64 mr-8">
        <h2 class="text-xl font-bold mb-4">Categories</h2>
        <ul>
            <li v-for="category in categories" :key="category" class="mb-2">
                {{ category }}
            </li>
        </ul>
    </aside>
</template>
