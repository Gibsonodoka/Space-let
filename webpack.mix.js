const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/bootstrap.js', 'public/js') // Ensure this line
    .sass('resources/sass/app.scss', 'public/css');
