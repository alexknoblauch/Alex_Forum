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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
                  keyframes: {
                wobble: {
                    '0%, 100%': { transform: 'translateX(0%)' },
                    '15%': { transform: 'translateX(-1%) rotate(-1deg)' },
                    '30%': { transform: 'translateX(1%) rotate(1deg)' },
                    '45%': { transform: 'translateX(-1%) rotate(-1deg)' },
                    '60%': { transform: 'translateX(1%) rotate(1deg)' },
              
                },
            },
            animation: {
                wobble: 'wobble 0.6s ease-in-out',
            },
        },
    },

    plugins: [forms],
};


