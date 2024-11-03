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
                ridley:['Ridley Grotesk'],
                chewy: ['Chewy', 'sans-serif'],
                roboto:['Roboto','sans-serif'],
                archivo:['Archivo']
             
            },
        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            'white': '#ffffff',
            'gz-brown-100': '#5a3c22',
            'gz-brown-200': '#a77b56',
            'gz-brown-300': '#d9c0a2',
            'gz-brown-400': '#fbf9f6',
            'gz-brown-500': '#f7f2ec',
            'gz-brown-600': '#d7a584',
            
            'black': '#000000',
            'gz-black-200': '#2b2620',
            'gz-black-300': '#413a31',
            'gz-black-500': '#555555',
            'gz-black-600': '#666666',
            'gz-black-700': '#777777',
            'gz-grey-100':'#f5f5f5',

            'gz-danger':'#D82424',
            'gz-danger-bg':'#FFC1CB',
            'gz-success':'#6CBC72',
            'gz-success-bg':'#E5FDE2',
            'gz-black-900':'#efefef',
            'gz-warning':'#17C8EE',
            'gz-warning-bg':'#D7F5FC',
        }
    },

    plugins: [
        forms, 
        typography,
        require('@tailwindcss/aspect-ratio'),
    ],
};

