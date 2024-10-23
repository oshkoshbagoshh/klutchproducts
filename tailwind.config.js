import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            colors: {
                'jonquil': '#f1c40f',
                'jonquil-dark': '#917508',
                'silver-lake-blue': '#748cab',
                'silver-lake-blue-dark': '#5a6d84',
                'snow': '#fffbfc',
                'melon': '#f7af9d',
            },
            fontFamily: {
                'base': ['Arial', 'sans-serif'],
            },
            fontSize: {
                'base': '16px',
            },
            lineHeight: {
                'base': '1.5',
            },
        },
    },
    variants: {},
    plugins: [forms],
};


