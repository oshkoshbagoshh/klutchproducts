<template>
    <div class="px-4 mx-auto mt-8 max-w-7xl sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
            <div
                v-for="post in posts"
                :key="post.id"
                class="overflow-hidden bg-white rounded-lg shadow-lg"
            >
                <img
                    class="object-cover w-full h-48"
                    :src="post.image"
                    :alt="post.title"
                />
                <div class="p-6">
                    <a
                        href="#"
                        class="block mt-1 text-lg font-medium leading-tight text-black hover:underline"
                        >{{ post.title }}</a
                    >
                    <p class="mt-2 text-gray-500">{{ post.description }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "BlogGrid",
    props: {
        posts: {
            type: Array,
            required: true,
        },
    },
};
</script>
