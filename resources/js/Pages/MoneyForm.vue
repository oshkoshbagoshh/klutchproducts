<template>
    <div
        class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12"
    >
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div
                class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10"
            >
                <div class="max-w-md mx-auto">
                    <div class="divide-y divide-gray-200">
                        <div
                            class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7"
                        >
                            <h2
                                class="text-2xl font-bold mb-8 text-center text-gray-800"
                            >
                                Product Request Form
                            </h2>
                            <form
                                @submit.prevent="submitForm"
                                class="space-y-6"
                            >
                                <!-- Product Search Term -->
                                <div class="space-y-2">
                                    <label
                                        class="block text-sm font-medium text-gray-700"
                                    >
                                        Product Search Term *
                                        <span
                                            class="text-xs text-gray-500 block"
                                            >Write it exactly as you would put
                                            in the Amazon search bar</span
                                        >
                                    </label>
                                    <input
                                        type="text"
                                        v-model="formData.searchTerm"
                                        required
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                    />
                                </div>

                                <!-- Email Address -->
                                <div class="space-y-2">
                                    <label
                                        class="block text-sm font-medium text-gray-700"
                                    >
                                        Email Address *
                                    </label>
                                    <input
                                        type="email"
                                        v-model="formData.email"
                                        required
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                    />
                                </div>

                                <!-- Price Range -->
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="space-y-2">
                                        <label
                                            class="block text-sm font-medium text-gray-700"
                                        >
                                            Lowest Price (Optional)
                                        </label>
                                        <input
                                            type="number"
                                            v-model="formData.lowestPrice"
                                            min="0"
                                            step="0.01"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                        />
                                    </div>
                                    <div class="space-y-2">
                                        <label
                                            class="block text-sm font-medium text-gray-700"
                                        >
                                            Highest Price (Optional)
                                        </label>
                                        <input
                                            type="number"
                                            v-model="formData.highestPrice"
                                            min="0"
                                            step="0.01"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                        />
                                    </div>
                                </div>

                                <!-- Star Rating -->
                                <div class="space-y-2">
                                    <label
                                        class="block text-sm font-medium text-gray-700"
                                    >
                                        Lowest Star Rating (Optional)
                                    </label>
                                    <select
                                        v-model="formData.starRating"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                    >
                                        <option value="">Select rating</option>
                                        <option
                                            v-for="rating in ratings"
                                            :key="rating"
                                            :value="rating"
                                        >
                                            {{ rating }}
                                        </option>
                                    </select>
                                </div>

                                <!-- Order Date -->
                                <div class="space-y-2">
                                    <label
                                        class="block text-sm font-medium text-gray-700"
                                    >
                                        Plan to order it on (Optional)
                                        <span
                                            class="text-xs text-gray-500 block"
                                            >Must give at least 36 hours
                                            notice</span
                                        >
                                    </label>
                                    <input
                                        type="date"
                                        v-model="formData.orderDate"
                                        :min="minDate"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                    />
                                </div>

                                <!-- Submit Button -->
                                <div class="pt-4">
                                    <button
                                        type="submit"
                                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    >
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Response Display -->
            <div
                v-if="submittedData"
                class="mt-8 px-4 py-6 bg-white shadow rounded-lg"
            >
                <h3 class="text-lg font-medium text-gray-900 mb-4">
                    Submitted Data:
                </h3>
                <pre class="bg-gray-50 p-4 rounded-md overflow-auto">{{
                    JSON.stringify(submittedData, null, 2)
                }}</pre>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            ratings: [3, 3.5, 4, 4.1, 4.2, 4.3, 4.4, 4.5],
            formData: {
                searchTerm: "",
                email: "",
                lowestPrice: "",
                highestPrice: "",
                starRating: "",
                orderDate: "",
            },
            submittedData: null,
        };
    },
    computed: {
        minDate() {
            const date = new Date();
            date.setHours(date.getHours() + 36);
            return date.toISOString().split("T")[0];
        },
    },
    methods: {
        submitForm() {
            // Create a copy of the form data
            const formDataToSubmit = {
                ...this.formData,
                submissionDate: new Date().toISOString(),
            };

            // In a real application, you would send this to your backend
            // For now, we'll just store it in the component state
            this.submittedData = formDataToSubmit;

            // Log the data to console
            console.log("Form submitted:", formDataToSubmit);

            // Clear the form
            this.formData = {
                searchTerm: "",
                email: "",
                lowestPrice: "",
                highestPrice: "",
                starRating: "",
                orderDate: "",
            };
        },
    },
};
</script>
