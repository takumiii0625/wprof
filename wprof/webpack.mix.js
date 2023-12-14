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

    //ここから追加
    .sass('resources/sass/member.scss', 'public/css/member.css')
    .sass('resources/sass/reset.scss', 'public/css/reset.css')
    .sass('resources/sass/admin.scss', 'public/css/admin.css')
    .sass('resources/sass/memberRegister.scss', 'public/css/memberRegister.css')
    .sass('resources/sass/show.scss', 'public/css/show.css')
    .sass('resources/sass/header.scss', 'public/css/header.css')
    .sass('resources/sass/footer.scss', 'public/css/footer.css')
    .sass('resources/sass/privacy.scss', 'public/css/privacy.css')

    //ここまで追加
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ]);
