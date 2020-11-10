const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    variants: {},
    purge: {
        content: [
            './storage/framework/views/*.php',
            './resources/views/**/*.blade.php',
        ],
    },
    plugins: [
        require('@tailwindcss/ui'),
    ],
};
