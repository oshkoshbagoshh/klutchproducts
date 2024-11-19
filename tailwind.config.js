/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                raisin_black: {
                    DEFAULT: '#231f20',
                    100: '#070606',
                    200: '#0e0c0d',
                    300: '#151313',
                    400: '#1c191a',
                    500: '#231f20',
                    600: '#52494b',
                    700: '#817376',
                    800: '#aca1a4',
                    900: '#d5d0d1',
                },
                lapis_lazuli: {
                    DEFAULT: '#376996',
                    100: '#0b151e',
                    200: '#162a3c',
                    300: '#213f59',
                    400: '#2c5477',
                    500: '#376996',
                    600: '#4c88bd',
                    700: '#79a6cd',
                    800: '#a6c4de',
                    900: '#d2e1ee',
                },
                jonquil: {
                    DEFAULT: '#ecc30b',
                    100: '#2f2702',
                    200: '#5e4d04',
                    300: '#8c7407',
                    400: '#bb9a09',
                    500: '#ecc30b',
                    600: '#f5d234',
                    700: '#f8dd67',
                    800: '#fae99a',
                    900: '#fdf4cc',
                },
                columbia_blue: {
                    DEFAULT: '#b9d6f2',
                    100: '#0d2c48',
                    200: '#1b5891',
                    300: '#2983d8',
                    400: '#72ade5',
                    500: '#b9d6f2',
                    600: '#c8dff5',
                    700: '#d6e7f7',
                    800: '#e3effa',
                    900: '#f1f7fc',
                },
                coral: {
                    DEFAULT: '#fc814a',
                    100: '#401501',
                    200: '#812a02',
                    300: '#c13f03',
                    400: '#fb560a',
                    500: '#fc814a',
                    600: '#fd9b6e',
                    700: '#fdb492',
                    800: '#fecdb7',
                    900: '#fee6db',
                },
            },
        },
    },
    plugins: [],
}
