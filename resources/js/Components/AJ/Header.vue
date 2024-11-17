<script>
import { Link } from "@inertiajs/vue3";
import Footer from "@/Components/Footer.vue";
import NavLink from "@/Components/NavLink.vue";

export default {
    name: "Header",
    components: { NavLink, Footer, Link },
};
</script>

<template>
    <!--    MAKE it's own header / top -->
    <div class="min-h-screen flex flex-col">
        <header class="bg-gray-800 text-white p-4">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-2xl font-bold">Klutch Products Reviews</h1>
                <div>
                    <NavLink
                        class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded mr-2"
                        href="/login"
                        >Login
                    </NavLink>
                    <NavLink
                        class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded"
                        href="/register"
                        >Sign Up
                    </NavLink>
                </div>
            </div>
        </header>
    </div>
</template>

<style scoped></style>
