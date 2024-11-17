<!-- resources/js/Pages/ProductReview.vue -->
<script setup>
import { ref } from "vue";
import { Head } from "@inertiajs/vue3";
import Layout from "@/Layouts/MainLayout.vue";
import SearchBar from "@/Components/SearchBar.vue";
import Sidebar from "@/Components/Sidebar.vue";
import ProductGrid from "@/Components/AJ/ProductGrid.vue";
import Navbar from "@/Components/Navbar.vue";

// change this to get from database
const products = ref([
    { id: 1, name: "ProductSeeder Name", price: 99.99, rating: 3.5 },
    { id: 2, name: "ProductSeeder Name", price: 79.99, rating: 5 },
    { id: 3, name: "ProductSeeder Name", price: 129.99, rating: 4 },
]);

// change this to get from database
const categories = ref(["Electronics", "Books", "Clothing", "Home & Garden"]);
</script>

<template>
    <!--    make dynamic -->
    <Head title="Product Review Site" />

    <Layout>
        <Navbar> </Navbar>

        <div class="main-content">
            <SearchBar />
            <div class="content-wrapper">
                <Sidebar :categories="categories" />
                <ProductGrid :products="products" />
            </div>
        </div>
    </Layout>
</template>

<style scoped>
.main-content {
    padding: 20px;
}

.content-wrapper {
    display: flex;
    margin-top: 20px;
}
</style>
