const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',

    ],

    theme: {
        extend: {
            spacing: {
                '36': '9rem',
                '35': '220px',
                '128': '32rem',
                '129': '36rem',
            },

        },
        colors: {
            primary: 'var(--color-primary)',
            secondary: 'var(--color-secondary)',
            third: 'var(--color-third)',
            btn: 'var(--color-btn)',

        }
    },



};
