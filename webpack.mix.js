const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require("tailwindcss"),
    ]);
mix.postCss('resources/css/plugins.css', 'public/css');
mix.scripts([
    'node_modules/feather-icons/dist/feather.js',
    'node_modules/venobox/dist/venobox.min.js',
], 'public/js/plugins.js');
