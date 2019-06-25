const mix = require('laravel-mix');

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

mix.scripts([
   'resources/js/vue.js',
   'resources/js/axios.js',
   'resources/js/jquery.min.js',
   'resources/js/popper.min.js',
   'resources/js/all.js',
   'resources/js/bootstrap.min.js',
],'public/js/app.js').styles([
   'resources/css/bootstrap.min.css',
   'resources/css/all.css'
],'public/css/app.css');
