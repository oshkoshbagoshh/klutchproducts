<template>
    <div class="px-4 mx-auto mt-8 max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white rounded-lg shadow-lg">
            <div class="md:flex">
                <div class="md:flex-shrink-0">
                    <img
                        class="object-cover w-full h-48 md:w-48"
                        :src="featuredPost.image"
                        :alt="featuredPost.title"
                    />
                </div>
                <div class="p-8">
                    <div
                        class="text-sm font-semibold tracking-wide text-indigo-500 uppercase"
                    >
                        Featured
                    </div>
                    <a
                        href="#"
                        class="block mt-1 text-lg font-medium leading-tight text-black hover:underline"
                        >{{ featuredPost.title }}</a
                    >
                    <p class="mt-2 text-gray-500">
                        {{ featuredPost.description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "FeaturedPost",
    props: {
        featuredPost: {
            type: Object,
            required: true,
        },
    },
};
</script>
