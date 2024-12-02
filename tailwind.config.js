import defaultTheme from 'tailwindcss/defaultTheme'
import forms from '@tailwindcss/forms'

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    darkMode: 'class',

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                red: {
                    50: '#ffefef',
                    100: '#ffdcdc',
                    200: '#ffbfc0',
                    300: '#ff9293',
                    400: '#ff5456',
                    500: '#ff1f21',
                    600: '#ff0003',
                    700: '#db0002',
                    800: '#be0002',
                    900: '#940809',
                    950: '#520001',
                },
                yellow: {
                    50: '#fffeea',
                    100: '#fff9c5',
                    200: '#fff385',
                    300: '#ffe746',
                    400: '#ffd61b',
                    500: '#ffb600',
                    600: '#e28b00',
                    700: '#bb6202',
                    800: '#984b08',
                    900: '#7c3e0b',
                    950: '#481f00',
                },
            },
            transitionDuration: {
                DEFAULT: '100ms',
            },
        },
    },

    plugins: [forms],
}

