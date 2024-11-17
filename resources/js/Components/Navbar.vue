<script>
import { ref } from "vue";

const isMenuOpen = ref(false);
const searchQuery = ref("");

const toggleMenu = () => {
    isMenuOpen.value = !isMenuOpen.value;
};

const handleSearch = (e) => {
    e.preventDefault();
    // TODO: Implement search functionality
    console.log("Searching for:", searchQuery.value);
};
</script>

<template>
    <nav class="bg-gray-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <Link href="/public" class="flex-shrink-0">
                        <img
                            class="h-8 w-auto overflow-auto"
                            src="../../../public/img/brand/klutch-products-logo.png"
                            alt="Logo"
                        />
                    </Link>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <Link
                                href="/public"
                                class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700"
                                >Home</Link
                            >
                            <Link
                                href="/products"
                                class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700"
                                >Products</Link
                            >
                            <Link
                                href="/about"
                                class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700"
                                >About</Link
                            >
                            <Link
                                href="/contact"
                                class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700"
                                >Contact</Link
                            >
                            <Link
                                href="/product-analytics"
                                class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700"
                                >Product Reports
                            </Link>
                        </div>
                    </div>
                </div>

                <!-- Search Bar -->
                <div class="hidden md:block flex-1 max-w-lg mx-4">
                    <form @submit="handleSearch" class="relative">
                        <input
                            v-model="searchQuery"
                            type="search"
                            placeholder="Search products..."
                            class="w-full bg-gray-700 text-white rounded-md py-2 px-4 pl-10 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        />
                        <div
                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"
                        >
                            <svg
                                class="h-5 w-5 text-gray-400"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </div>
                    </form>
                </div>

                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <!-- Auth Buttons -->
                        <Link
                            href="/login"
                            class="px-4 py-2 text-sm font-medium text-white hover:bg-gray-700 rounded-md mr-2"
                        >
                            Login
                        </Link>
                        <Link
                            href="/register"
                            class="px-4 py-2 text-sm font-medium bg-blue-600 text-white rounded-md hover:bg-blue-700"
                        >
                            Register
                        </Link>

                        <!-- Notification Button -->
                        <button
                            class="ml-4 bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                        >
                            <span class="sr-only">View notifications</span>
                            <svg
                                class="h-6 w-6"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                                />
                            </svg>
                        </button>

                        <!-- Cart Button -->
                        <Link
                            href="/cart"
                            class="ml-3 bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                        >
                            <span class="sr-only">View cart</span>
                            <svg
                                class="h-6 w-6"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
                                />
                            </svg>
                        </Link>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="-mr-2 flex md:hidden">
                    <button
                        @click="toggleMenu"
                        type="button"
                        class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                        aria-controls="mobile-menu"
                        :aria-expanded="isMenuOpen"
                    >
                        <span class="sr-only">Open main menu</span>
                        <svg
                            :class="{ hidden: isMenuOpen, block: !isMenuOpen }"
                            class="h-6 w-6"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"
                            />
                        </svg>
                        <svg
                            :class="{ block: isMenuOpen, hidden: !isMenuOpen }"
                            class="h-6 w-6"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"
                            />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div
            :class="{ block: isMenuOpen, hidden: !isMenuOpen }"
            class="md:hidden"
            id="mobile-menu"
        >
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <!-- Mobile Search -->
                <div class="px-2 py-2">
                    <form @submit="handleSearch" class="relative">
                        <input
                            v-model="searchQuery"
                            type="search"
                            placeholder="Search products..."
                            class="w-full bg-gray-700 text-white rounded-md py-2 px-4 pl-10 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        />
                        <div
                            class="absolute inset-y-0 left-0 pl-5 flex items-center pointer-events-none"
                        >
                            <svg
                                class="h-5 w-5 text-gray-400"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </div>
                    </form>
                </div>

                <Link
                    href="/public"
                    class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700"
                    >Home</Link
                >
                <Link
                    href="/products"
                    class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700"
                    >Products
                </Link>
                <Link
                    href="/about"
                    class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700"
                    >About</Link
                >
                <Link
                    href="/contact"
                    class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700"
                    >Contact</Link
                >
                <Link
                    href="/product-analytics"
                    class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700"
                >
                    Product Reports
                </Link>

                <!-- Mobile Auth Buttons -->
                <div class="pt-4 pb-3 border-t border-gray-700">
                    <div class="px-2 space-y-1">
                        <Link
                            href="/login"
                            class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700"
                        >
                            Login
                        </Link>
                        <Link
                            href="/register"
                            class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700"
                        >
                            Register
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>
