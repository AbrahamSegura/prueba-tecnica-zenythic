import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                'vibrant-pink': '#ff308a', 
                'back-dark': '#0a0e12',
                'orange': '#ff3030',
                'banner-color': '#172029',
                'footer-color': '#06090d'
            },  
            animation:{
                Hbounce: 'Hbounce .4s infinite',
            },
            keyframes:{
                Hbounce: {
                    '0% , 100%' :{
                        transform: 'translateX(-5px)',
                        animationTimingFunction: 'cubic-bezier(0.8, 0, 1, 1)'
                      },
                      '50%': {
                        transform: 'translateX(5px)',
                        animationTimingFunction: 'cubic-bezier(0, 0, 0.2, 1)'
                      }
                }
            }
        },
    },
    plugins: [],
};
