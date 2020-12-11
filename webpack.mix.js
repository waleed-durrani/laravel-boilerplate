const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css/app.css")
    .extract([
        'alpinejs',
        'jquery',
        'sweetalert2'
    ])
    .options({
        processCssUrls: false,
        postCss: [
            tailwindcss('./tailwind.config.js'),
        ],
    })
    .sourceMaps();

if (mix.inProduction()) {
    mix.version();
}
