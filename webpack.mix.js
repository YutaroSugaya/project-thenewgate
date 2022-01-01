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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/mypage.js', 'public/js')
    .js('resources/js/buy.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/buy.scss', 'public/css')
    .sass('resources/sass/content.scss', 'public/css')
    .sass('resources/sass/auth.scss', 'public/css')
    .sourceMaps()
    .vue()
    .autoload({
      "jquery": ['$', 'window.jQuery'],
    });

mix.webpackConfig({
  plugins: [],
  target: 'node',
});


