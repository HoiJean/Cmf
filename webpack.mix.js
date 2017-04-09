const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('webroot/app/main.js', 'webroot/js')
   .sass('webroot/sass/main.scss', 'webroot/css');
    // .copy('node_modules/font-awesome/fonts', 'webroot/fonts');
