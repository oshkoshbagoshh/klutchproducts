<script setup>
import {ref} from 'vue';
import {Head, Link} from '@inertiajs/vue3';
import Navbar from "@/Components/Navbar.vue";
import Footer from "@/Components/Footer.vue";


</script>

<template>
    <Navbar/>
    <div class="home">
        <Head title="Home"/>
        <h1>Welcome to Our Website</h1>
        <p>This is the home page of our awesome Vue.js application.</p>
        <section class="features">
            <h2>Our Features</h2>
            <ul>
                <li v-for="feature in features" :key="feature.id">
                    {{ feature.name }}
                </li>
            </ul>
        </section>
        <button @click="incrementCounter" class="btn">
            Clicked {{ counter }} times
        </button>
    </div>


    <Footer />
</template>

<style scoped lang="scss">
.home {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;

    h1 {
        //color:
        //color: #18181b;
        margin-bottom: 20px;
    }

    p {
        font-size: 18px;
        line-height: 1.6;
    }

    .features {
        margin-top: 40px;

        h2 {
            //color: #748cab;
        }

        ul {
            list-style-type: none;
            padding: 0;

            li {
                margin-bottom: 10px;
                font-size: 16px;
            }
        }
    }

    .btn {
        //@include button-style;
        margin-top: 20px;
    }
}
</style>
