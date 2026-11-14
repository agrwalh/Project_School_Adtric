import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', 'Nunito', 'Figtree', ...defaultTheme.fontFamily.sans],
                display: ['Outfit', 'Cabinet Grotesk', 'sans-serif'],
            },
            colors: {
                brand: {
                    pink: '#e60067',
                    'pink-hover': '#c90059',
                    'pink-light': '#fdf2f7',
                    'pink-border': '#fbcfe8',
                    navy: '#0c2340',
                    'navy-dark': '#061324',
                    'navy-light': '#183860',
                    cream: '#fdfbf7',
                    sand: '#f7f4ed',
                    yellow: '#f59e0b',
                },
            },
        },
    },

    plugins: [forms],
};
