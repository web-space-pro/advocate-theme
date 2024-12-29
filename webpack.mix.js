const mix = require('laravel-mix');

mix
    .js('assets/src/js/app.js', 'assets/dist/js')
    .sass('assets/src/scss/app.scss', 'assets/dist/css')
    .copy('assets/src/js/plugins', 'assets/dist/js/plugins')
    .options({
        processCssUrls: false,
        postCss: [require('tailwindcss')],

    })