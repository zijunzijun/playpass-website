const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        "./index.html",
        "./resources/**/*.blade.php",
        "./resources/**/*.{vue,js,ts,jsx,tsx}",
    ],
    theme: {
        extend: {
            fontFamily: {
                'sans': ['Open Sans', 'sans-serif'],
            },
            fontSize: {
                '2.5xl': ['1.75rem', { lineHeight: '2rem' }],
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
                'duffy': {
                    '50': '#fffbf7',
                    '100': '#ebeadc',
                    '200': '#d4d1b3',
                    '300': '#bdb98c',
                    '400': '#aea571',
                    '500': '#a1915f',
                    '600': '#8d7a52',
                    '700': '#776246',
                    '800': '#63503d',
                    '900': '#524335',
                    '950': '#2d231b',
                },
            },
            translate: {
                '-2/5': '-40%',
                '-55/100': '-55%',
            },
            scale: {
                '375': '3.75',
            },
            padding: {
                "1/2": "50%",
                "2/3": "66.666667%",
                full: "100%",
            },
            height: {
                "1/2": "50%",
            },
            borderRadius: {
                "1/2": "50%",
            },
            borderWidth: {
                12: '12px',
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
