const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                'sans': ['Open Sans', 'sans-serif'],
            },
            colors: {
                'lina': {
                    '50': '#fcf3f9',
                    '100': '#fbe8f4',
                    '200': '#f9d1eb',
                    '300': '#f4add9',
                    '400': '#ed79be',
                    '500': '#e351a3',
                    '600': '#d23686',
                    '700': '#b52169',
                    '800': '#951f56',
                    '900': '#7d1e4a',
                    '950': '#4c0b29',
                },
                'olu': {
                    '50': '#f4f9f7',
                    '100': '#d9eee3',
                    '200': '#b4dbca',
                    '300': '#84c1a7',
                    '400': '#5da488',
                    '500': '#43896e',
                    '600': '#346d59',
                    '700': '#2c5949',
                    '800': '#27483d',
                    '900': '#243d34',
                    '950': '#10231d',
                },
                'cookie': {
                    '50': '#fffde7',
                    '100': '#fffcc1',
                    '200': '#fff587',
                    '300': '#ffe842',
                    '400': '#ffd60f',
                    '500': '#fbc502',
                    '600': '#cf9100',
                    '700': '#a56703',
                    '800': '#88500b',
                    '900': '#74420f',
                    '950': '#442204',
                },
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}