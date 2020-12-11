const defaultTheme = require('tailwindcss/defaultTheme');
// const colors = require('tailwindcss/colors');

module.exports = {
    darkMode: false,
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    variants: {
        extend: {
            opacity: ['disabled'],
        }
    },
    purge: {
        content: [
            './storage/framework/views/*.php',
            './resources/views/**/*.blade.php',
        ],
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
    ],
};
