<!-- resources/js/Pages/ProductAnalytics/Index.vue -->
<template>
    <div class="min-h-screen bg-gray-100">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Category Analysis -->
                <div
                    class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 mb-6"
                >
                    <h2 class="text-2xl font-bold mb-4">Category Analysis</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <CategoryChart
                            :categories="categoryAnalysis"
                            class="h-96"
                        />
                    </div>
                </div>

                <!-- Top Products -->
                <div
                    class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 mb-6"
                >
                    <h2 class="text-2xl font-bold mb-4">
                        Top Performing Products
                    </h2>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 bg-gray-50 text-left">
                                        Product
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50 text-right">
                                        Revenue
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50 text-right">
                                        Profit Margin
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50 text-right">
                                        Rating
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr
                                    v-for="product in topProducts"
                                    :key="product.id"
                                >
                                    <td class="px-6 py-4">
                                        {{ product.title }}
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        {{
                                            formatCurrency(
                                                product.total_revenue,
                                            )
                                        }}
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        {{
                                            formatPercentage(
                                                product.profit_margin,
                                            )
                                        }}
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        {{ product.rating }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Pricing Trends -->
                <div
                    class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 mb-6"
                >
                    <h2 class="text-2xl font-bold mb-4">Pricing Trends</h2>
                    <PricingTrendChart :trends="pricingTrends" class="h-96" />
                </div>

                <!-- Sales Performance -->
                <div
                    class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6"
                >
                    <h2 class="text-2xl font-bold mb-4">Sales Performance</h2>
                    <SalesPerformanceChart
                        :performance="salesPerformance"
                        class="h-96"
                    />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { defineComponent } from "vue";
import CategoryChart from "../../Components/CategoryChart.vue";
import PricingTrendChart from "../../Components/AJ/PricingTrendChart.vue";
import SalesPerformanceChart from "../../Components/AJ/SalesPerformanceChart.vue";

export default defineComponent({
    components: {
        CategoryChart,
        PricingTrendChart,
        SalesPerformanceChart,
    },

    props: {
        categoryAnalysis: Array,
        topProducts: Array,
        pricingTrends: Array,
        salesPerformance: Array,
    },

    methods: {
        formatCurrency(value) {
            return new Intl.NumberFormat("en-US", {
                style: "currency",
                currency: "USD",
            }).format(value);
        },

        formatPercentage(value) {
            return `${(value * 100).toFixed(2)}%`;
        },
    },
});
</script>
