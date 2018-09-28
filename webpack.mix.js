const mix = require('laravel-mix');

mix.sass('resources/sass/app_style.sass', 'public/css/').version();

mix.sass('node_modules/bootstrap/scss/bootstrap.scss', 'public/css/').version();

mix.js('node_modules/bootstrap/dist/js/bootstrap.js', 'public/js/bootstrap.js')

mix.js('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/js/bundle.js')

mix.js('node_modules/jquery/dist/jquery.slim.js', 'public/js/jQuery_slim.js')

mix.styles('node_modules/lightbox2/dist/css/lightbox.css', 'public/css/lightbox.css')

mix.js('node_modules/lightbox2/dist/js/lightbox.js', 'public/js/lightbox.js')

mix.copyDirectory('node_modules/lightbox2/dist/images', 'public/images')

mix.styles('node_modules/icons/style.css', 'public/css/icons/app.css')

mix.copyDirectory('node_modules/icons/fonts', 'public/css/icons/fonts/')

mix.js('resources/js/jMask.input.js', 'public/js/jMask.js')

mix.js('resources/js/jQuery.Validate.js', 'public/js/validate.js')


