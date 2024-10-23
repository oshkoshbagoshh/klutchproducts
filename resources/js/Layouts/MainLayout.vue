<!-- resources/js/Layouts/MainLayout.vue -->
<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
  <div class="min-h-screen flex flex-col">
    <header class="bg-gray-800 text-white p-4">
      <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl font-bold">Product Review Site</h1>
        <div>
          <Link class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded mr-2" href="/login">Login</Link>
          <Link class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded" href="/register">Sign Up</Link>
        </div>
      </div>
    </header>

    <main class="flex-grow">
      <slot></slot>
    </main>

    <footer class="bg-gray-800 text-white p-4 text-center">
      <p>&copy; {{ new Date().getFullYear() }} Product Review Site. All rights reserved.</p>
    </footer>
  </div>
</template>
