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
    .js('resources/js/contact.js', 'public/js')
    .js('resources/js/contact-company.js', 'public/js')
    .js('resources/js/dashboard/sb-admin-2.js', 'public/dashboard/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/sections/home.scss', 'public/css')
    .sass('resources/sass/sections/services.scss', 'public/css')
    .sass('resources/sass/sections/blog.scss', 'public/css')
    .sass('resources/sass/sections/allies.scss', 'public/css')
    .sass('resources/sass/sections/us.scss', 'public/css')
    .sass('resources/sass/sections/contact.scss', 'public/css')
    .sass('resources/sass/sections/support.scss', 'public/css')
    .sass('resources/sass/sections/solutions-it.scss', 'public/css')
    .sass('resources/sass/sections/solutions-it-brand.scss', 'public/css')

    // blog
    .sass('resources/sass/blogs-events/base-blog.scss', 'public/css')
    .sass('resources/sass/blogs-events/base-event.scss', 'public/css')
    .js('resources/js/dashboard/blog.js', 'public/js')

    // services
    .sass('resources/sass/services/base-services.scss', 'public/css')

    // Admin Dashboard
    .sass('resources/sass/dashboard/sb-admin-2.scss', 'public/dashboard/css');
