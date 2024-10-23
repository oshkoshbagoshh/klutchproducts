<!-- resources/js/Components/ProductCard.vue -->
<script setup>
defineProps({
    product: {
        type: Object,
        required: true
    }
});
</script>

<template>
    <div class="product-card border rounded p-4 text-center">
        <div class="product-image bg-gray-200 h-40 mb-4"></div>
        <h3 class="text-lg font-semibold">{{ product.name }}</h3>
        <p class="text-gray-600">${{ product.price.toFixed(2) }}</p>
        <div class="rating text-yellow-400">
            <span v-for="star in 5" :key="star" :class="{ 'text-yellow-400': star <= Math.round(product.rating), 'text-gray-300': star > Math.round(product.rating) }">★</span>
        </div>
    </div>
</template>
