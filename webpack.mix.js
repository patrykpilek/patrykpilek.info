const mix = require('laravel-mix');

mix.sass('resources/sass/app.scss', 'public/css');
mix.react('resources/js/app.js', 'public/js');

mix.styles([
    'public/css/app.css',
    'node_modules/jasny-bootstrap/dist/css/jasny-bootstrap.css',
    'node_modules/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.css'
], 'public/css/app.css');

mix.scripts([
    'public/js/app.js',
    'node_modules/jasny-bootstrap/dist/js/jasny-bootstrap.js',
    'node_modules/moment/min/moment-with-locales.js',
    'node_modules/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.js'
], 'public/js/app.js');

if (mix.inProduction()) {
    mix.version();
}
