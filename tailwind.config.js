const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors:{
                gray: colors.gray,
                blue: {
                    100: '#17d984',
                    200: '#15c377',
                    300: '#12ae6a',
                    400: '#10985c',
                    500: '#0e824f',
                    600: '#0c6d42',
                    700: '#095735',
                    800: '#052b1a',
                    900: '#02160d',
                },
                indigo: colors.indigo,
                slate: {
                    100: '#17d984',
                    200: '#2edd90',
                    300: '#45e19d',
                    400: '#5de4a9',
                    500: '#74e8b5',
                    600: '#8becc2',
                    700: '#a2f0ce',
                    800: '#b9f4da',
                    900: '#d1f7e6',
                },
                white: colors.white,
                black: '#10985c',
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
