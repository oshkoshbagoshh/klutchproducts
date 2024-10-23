<!-- Navbar.vue -->
<script setup>
import {ref} from 'vue';
import {Link} from '@inertiajs/vue3';

const isMenuOpen = ref(false);

const toggleMenu = () => {
    isMenuOpen.value = !isMenuOpen.value;
};
</script>

<template>
    <nav class="bg-gray-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <Link href="/" class="flex-shrink-0">
                        <img class="h-8 w-8" src="../../../public/img/brand/klutch-products-logo.png" alt="Logo">
                    </Link>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <Link href="/" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700">Home
                            </Link>
                            <Link href="/products" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700">
                                Products
                            </Link>
                            <Link href="/about" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700">
                                About
                            </Link>
                            <Link href="/contact" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700">
                                Contact
                            </Link>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <button
                            class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                            <span class="sr-only">View notifications</span>
                            <!-- Heroicon name: bell -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                            </svg>
                        </button>
                        <Link href="/cart"
                              class="ml-3 bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                            <span class="sr-only">View cart</span>
                            <!-- Heroicon name: shopping-cart -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </Link>
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <button @click="toggleMenu" type="button"
                            class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                            aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div :class="{ 'block': isMenuOpen, 'hidden': !isMenuOpen }" class="md:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <Link href="/" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700">Home</Link>
                <Link href="/products" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700">
                    Products
                </Link>
                <Link href="/about" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700">About
                </Link>
                <Link href="/contact" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700">
                    Contact
                </Link>

            </div>
        </div>
    </nav>
</template>
