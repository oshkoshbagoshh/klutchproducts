<script setup>
import { ref, onMounted } from 'vue';
import { Head } from '@inertiajs/vue3';

const photos = ref([]);
const loading = ref(true);
const currentPhotoIndex = ref(0);

const fetchPhotos = async () => {
    try {
        const response = await fetch('https://api.pexels.com/v1/search?query=product+photography&per_page=5', {
            headers: {
                Authorization: import.meta.env.VITE_PEXELS_API_KEY
            }
        });
        const data = await response.json();
        photos.value = data.photos;
        loading.value = false;

        // Start slideshow
        setInterval(() => {
            currentPhotoIndex.value = (currentPhotoIndex.value + 1) % photos.value.length;
        }, 5000);
    } catch (error) {
        console.error('Error fetching photos:', error);
        loading.value = false;
    }
};

onMounted(() => {
    fetchPhotos();
});
</script>

<template>
    <Head title="Welcome" />

    <div class="min-h-screen bg-gray-50">
        <!-- Navigation -->
        <nav class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <span class="text-2xl font-bold text-indigo-600">Klutch</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="/login" class="text-gray-600 hover:text-gray-900">Login</a>
                        <a href="/register"
                           class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="relative overflow-hidden">
            <!-- Background Image Slideshow -->
            <div class="absolute inset-0 z-0">
                <template v-if="!loading && photos.length > 0">
                    <transition-group name="fade">
                        <div
                            v-for="(photo, index) in photos"
                            :key="photo.id"
                            v-show="index === currentPhotoIndex"
                            class="absolute inset-0"
                        >
                            <img
                                :src="photo.src.landscape"
                                :alt="photo.photographer"
                                class="w-full h-full object-cover"
                            />
                            <div class="absolute inset-0 bg-black opacity-50"></div>
                        </div>
                    </transition-group>
</template>
            </div>

            <!-- Content -->
            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="pt-32 pb-40"></div>
                    <div class="text-center">
                        <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl">
                            <span class="block">Transform Your</span>
                            <span class="block text-indigo-400">Product Management</span>
                        </h1>
                        <p class="mt-3 max-w-md mx-auto text-base text-gray-300 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                            Streamline your product lifecycle, boost efficiency, and drive growth with our comprehensive management solution.
                        </p>
                        <div class="mt-10 max-w-md mx-auto sm:flex sm:justify-center md:mt-12">
                            <div class="rounded-md shadow">
                                <a href="/register"
                                   class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                    Get started
                                </a>
                            </div>
                            <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                                <a href="#features"
                                   class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10">
                                    Learn more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div id="features" class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                        Everything you need to manage your products
                    </h2>
                    <p class="mt-4 text-lg text-gray-500">
                        Our platform provides all the tools you need to succeed
                    </p>
                </div>

                <div class="mt-20">
                    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                        <!-- Feature 1 -->
                        <div class="pt-6">
                            <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                                <div class="-mt-6">
                                    <div>
                                        <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium text-gray-900">Analytics</h3>
                                    <p class="mt-5 text-base text-gray-500">
                                        Get detailed insights into your product performance and customer behavior.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 2 -->
                        <div class="pt-6">
                            <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                                <div class="-mt-6">
                                    <div>
                                        <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium text-gray-900">Real-time Updates</h3>
                                    <p class="mt-5 text-base text-gray-500">
                                        Stay updated with real-time inventory and sales tracking.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 3 -->
                        <div class="pt-6">
                            <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                                <div class="-mt-6">
                                    <div>
                                        <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                            </svg>
                                        </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium text-gray-900">Automation</h3>
                                    <p class="mt-5 text-base text-gray-500">
                                        Automate routine tasks and focus on growing your business.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</template>

<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 1s ease;
}

.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}
</style>
