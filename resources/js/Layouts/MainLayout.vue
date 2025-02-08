<template>
    <div>
        <Navigation />
        <FeaturedPost :featuredPost="featuredPost" />
        <BlogGrid :posts="posts" />
        <Newsletter />
        <Footer />
    </div>
</template>

<script>
import Navigation from "@/Components/Navigation.vue";
import FeaturedPost from "@/Components/FeaturedPost.vue";
import BlogGrid from "@/Components/BlogGrid.vue";
import Newsletter from "@/Components/Newsletter.vue";
import Footer from "@/Components/Footer.vue";
export default {
    name: "MainLayout",
    components: {
        Navigation,
        FeaturedPost,
        BlogGrid,
        Newsletter,
        Footer,
    },
    data() {
        return {
            featuredPost: {
                id: 1,
                title: "Finding Success in Web Development: A Journey",
                description:
                    "Get insights into the world of modern web development and learn about the latest trends and best practices.",
                image: "https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3",
            },
            posts: [
                {
                    id: 2,
                    title: "Top 10 Tips for Learning Vue.js",
                    description:
                        "Discover the best practices for mastering Vue.js in 2024.",
                    image: "https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixlib=rb-4.0.3",
                },
                // Add more posts here
                {
                    id: 3,
                    title: "How to use Dumps in Laravel like a Pro",
                    description:
                        "Debugging with PHP can be tricky, but dumps are here to save the day.",
                    image: "https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixlib=rb-4.0.3",
                },
            ],
        };
    },
};
</script>
