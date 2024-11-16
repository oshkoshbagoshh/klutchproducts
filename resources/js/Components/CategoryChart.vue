<!-- resources/js/Pages/ProductAnalytics/Components/CategoryChart.vue -->
<template>
    <div class="relative">
        <canvas ref="chartCanvas"></canvas>
    </div>
</template>

<script>
import {defineComponent} from 'vue'
import Chart from 'chart.js/auto'

export default defineComponent({
    props: {
        categories: Array
    },

    mounted() {
        this.createChart()
    },

    methods: {
        createChart() {
            const ctx = this.$refs.chartCanvas.getContext('2d')
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: this.categories.map(c => c.name),
                    datasets: [{
                        label: 'Revenue',
                        data: this.categories.map(c => c.products_sum_total_revenue),
                        backgroundColor: 'rgba(59, 130, 246, 0.5)'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            })
        }
    }
})
</script>
