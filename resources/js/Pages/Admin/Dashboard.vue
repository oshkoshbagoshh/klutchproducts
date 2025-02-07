<template>
    <div class="min-h-screen bg-gray-100">
        <div class="container p-4 mx-auto">
            <h1 class="mb-6 text-3xl font-bold">Admin Dashboard</h1>
            <div class="grid grid-cols-2 gap-4">
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <h2 class="text-xl font-semibold">Total Users</h2>
                    <p class="text-gray-700">{{ stats.totalUsers }}</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <h2 class="text-xl font-semibold">Total Posts</h2>
                    <p class="text-gray-700">{{ stats.totalPosts }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "AdminDashboard",
    props: {
        stats: {
            type: Object,
            required: true,
        },
    },
};
</script>

<style scoped>
/* Add custom styles if needed */
</style>
