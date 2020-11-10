const mix = require('laravel-mix');

mix.js("resources/js/app.js", "public/js")
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
    ])
    .extract([
        'alpinejs',
        'jquery',
        'sweetalert2'
    ])
    .sourceMaps();

if (mix.inProduction()) {
    mix.version();
}
