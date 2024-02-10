import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                meddon: ['Meddon', 'sans-serif'],
                playfair:['PlayFair Display','sans-serif'],
                montserrat:['Montserrat','sans-serif'],
                ridley:['Ridley Grotesk']
            },
        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            'white': '#ffffff',
            'black': '#000000',
            'gz-brown-100': '#5a3c22',
            'gz-brown-200': '#a77b56',
            'gz-brown-300': '#d9c0a2',
            'gz-brown-400': '#fbf9f6',
            'gz-brown-500': '#f7f2ec',
            'gz-brown-600': '#d7a584',
            'gz-black-200': '#2b2620',
            'gz-black-300': '#413a31',
        }
    },

    plugins: [forms, typography],
};
