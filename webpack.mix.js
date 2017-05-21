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
var resource_path = 'resources/assets/';
var resource_path_sass = resource_path+'sass/';
var public_path = 'public/build/';
var public_path_sass = public_path+'css/';
mix.sass(resource_path_sass+'all.scss', public_path_sass)
    .sass(resource_path_sass+'inline.scss', public_path_sass)
    .options({
        processCssUrls: false
    })
    .version();
