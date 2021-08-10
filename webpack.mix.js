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
   .js('resources/js/subject_view.js', 'public/js')
   .js('resources/js/exam_take.js', 'public/js')
   .js('resources/js/auth_view.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/home.scss', 'public/css')
   .sass('resources/sass/auth_change.scss', 'public/css')
   .sass('resources/sass/auth_login.scss', 'public/css')
   .sass('resources/sass/auth_register.scss', 'public/css')
   .sass('resources/sass/auth_view.scss', 'public/css')
   .sass('resources/sass/exam_take.scss', 'public/css')
   .sass('resources/sass/exam_view.scss', 'public/css')
   .sass('resources/sass/subject_view.scss', 'public/css');
