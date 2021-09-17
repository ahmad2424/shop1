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
    .js( 'resources/component/include/landing/landing.js' , 'public/js/metronic/landing')
    .js( 'resources/js/tab.js' , 'public/js/tab1')


    .postCss('resources/css/app.css', 'public/css', [
        //
    ])
    .version()
;

/*mix.browserSync('http://127.0.0.1:8000/');*/
