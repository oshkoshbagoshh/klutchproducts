<script setup>
import Layout from "../Layouts/AppLayout.vue";
import { Head } from "@inertiajs/vue3";
import { cilHome, cilUser, cilBell, cilEnvelopeClosed } from "@coreui/icons";
import CIcon from "@coreui/icons-vue";

defineProps({
    title: String,
    viewData: Object,
});
</script>

<template>
    <Layout>
        <Head :title="title" />

        <!-- Hero Section -->
        <div class="relative bg-lapis_lazuli-500">
            <div class="px-4 py-24 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="text-center">
                    <h1
                        class="text-4xl font-bold tracking-tight text-white sm:text-5xl md:text-6xl"
                    >
                        {{ title }}
                    </h1>
                    <p
                        class="max-w-md mx-auto mt-3 text-base text-columbia_blue-200 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl"
                    >
                        Transform your product experience with our innovative
                        solutions
                    </p>
                    <div
                        class="max-w-md mx-auto mt-5 sm:flex sm:justify-center md:mt-8"
                    >
                        <div class="rounded-md shadow">
                            <a
                                href="#"
                                class="flex items-center justify-center w-full px-8 py-3 text-base font-medium border border-transparent rounded-md text-raisin_black-500 bg-jonquil-500 hover:bg-jonquil-600 md:py-4 md:text-lg md:px-10"
                            >
                                Get started
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="py-12 bg-white">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3"
                >
                    <!-- Feature 1 -->
                    <div class="p-6 rounded-lg bg-columbia_blue-50">
                        <div class="mb-4 text-coral-500">
                            <CIcon :icon="cilHome" size="xl" />
                        </div>
                        <h3 class="text-xl font-semibold text-raisin_black-500">
                            Easy Integration
                        </h3>
                        <p class="mt-2 text-lapis_lazuli-600">
                            Seamlessly integrate our solutions into your
                            existing workflow.
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="p-6 rounded-lg bg-columbia_blue-50">
                        <div class="mb-4 text-coral-500">
                            <CIcon :icon="cilUser" size="xl" />
                        </div>
                        <h3 class="text-xl font-semibold text-raisin_black-500">
                            User-Friendly
                        </h3>
                        <p class="mt-2 text-lapis_lazuli-600">
                            Intuitive interface designed for the best user
                            experience.
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="p-6 rounded-lg bg-columbia_blue-50">
                        <div class="mb-4 text-coral-500">
                            <CIcon :icon="cilBell" size="xl" />
                        </div>
                        <h3 class="text-xl font-semibold text-raisin_black-500">
                            Real-time Updates
                        </h3>
                        <p class="mt-2 text-lapis_lazuli-600">
                            Stay informed with instant notifications and
                            updates.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Newsletter Section -->
        <div class="py-16 bg-lapis_lazuli-600">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-3xl font-bold text-white">
                        Subscribe to our newsletter
                    </h2>
                    <p class="mt-4 text-lg text-columbia_blue-200">
                        Stay updated with our latest products and features
                    </p>
                    <div class="flex justify-center mt-8">
                        <div class="inline-flex rounded-md shadow">
                            <div class="flex max-w-sm">
                                <input
                                    type="email"
                                    class="min-w-0 flex-auto rounded-md border-0 px-3.5 py-2 text-raisin_black-500 shadow-sm ring-1 ring-inset ring-columbia_blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-jonquil-500"
                                    placeholder="Enter your email"
                                />
                                <button
                                    type="submit"
                                    class="flex items-center justify-center rounded-md bg-jonquil-500 px-3.5 py-2.5 text-sm font-semibold text-raisin_black-500 shadow-sm hover:bg-jonquil-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-jonquil-500 ml-4"
                                >
                                    <CIcon
                                        :icon="cilEnvelopeClosed"
                                        class="mr-2"
                                    />
                                    Subscribe
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>

<style scoped>
/* Add any additional component-specific styles here */
</style>
