let mix = require('laravel-mix');

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

mix.js('resources/assets/js/muldev/cms/cms.js',
    'public/js/muldev/cms')
    .js('resources/assets/js/muldev/cms/normal-site.js',
        'public/js/muldev/cms')
    .sass('resources/assets/sass/muldev/cms/muldevcms.scss',
       'public/css/muldev/cms');
