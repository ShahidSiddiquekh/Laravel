const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .styles([
       'node_modules/bootstrap/dist/css/bootstrap.min.css'
   ], 'public/css/all.css')
   .scripts([
       'node_modules/jquery/dist/jquery.min.js',
       'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js',
   ], 'public/js/all.js');
