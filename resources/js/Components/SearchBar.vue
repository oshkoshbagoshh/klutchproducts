<!-- resources/js/Components/SearchBar.vue -->
<script setup>
import { ref } from 'vue';

const searchQuery = ref('');

const search = () => {
    //TODO: Implement search functionality
    console.log('Searching for:', searchQuery.value);
};
</script>

<template>
    <div class="search-bar mb-4">
        <input
            type="text"
            v-model="searchQuery"
            placeholder="Search products..."
            class="w-full p-2 border rounded-l"
        >
        <button
            @click="search"
            class="bg-orange-500 text-white px-4 py-2 rounded-r"
        >
            Go
        </button>
    </div>
</template>
