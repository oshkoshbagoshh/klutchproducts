<script setup>
import { Head } from '@inertiajs/vue3';
import Layout from '@/Layouts/MainLayout.vue';
</script>

<template>
    <Head title="Unauthorized" />

    <Layout>
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <h1 class="text-2xl font-bold text-center text-gray-900 mb-4">
                    Unauthorized Access
                </h1>
                <p class="text-gray-600 text-center mb-4">
                    You don't have permission to access this area.
                </p>
                <div class="flex justify-center">
                    <a
                        href="/"
                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                    >
                        Return Home
                    </a>
                </div>
            </div>
        </div>
    </Layout>
</template>