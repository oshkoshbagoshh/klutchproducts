<script setup>
import { Head } from "@inertiajs/vue3";
import Navbar2 from "@/Components/AJ/Navbar2";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
});

function handleImageError() {
    document.getElementById("screenshot-container")?.classList.add("!hidden");
    document.getElementById("docs-card")?.classList.add("!row-span-1");
    document.getElementById("docs-card-content")?.classList.add("!flex-row");
    document.getElementById("background")?.classList.add("!hidden");
}
</script>

<template>
    <Head title="Welcome - " />
    <!--  NAVBAR -->
    <Navbar2 />

    <!-- Dummy Content   -->
    <div class="container">
        <h1>Welcome to Klutch Products</h1>
    </div>
    <p>Be one.</p>
</template>
