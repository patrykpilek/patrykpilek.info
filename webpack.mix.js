const mix = require('laravel-mix');

mix.sass('resources/sass/app.scss', 'public/css');
mix.react('resources/js/app.js', 'public/js');

// mix.copy('node_modules/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.css', 'public/css/tempusdominus-bootstrap-4.css');
// mix.copy('node_modules/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.js', 'public/js/tempusdominus-bootstrap-4.js');
//
// mix.copy('node_modules/jasny-bootstrap/dist/css/jasny-bootstrap.css', 'public/css/jasny-bootstrap.css');
// mix.copy('node_modules/jasny-bootstrap/dist/js/jasny-bootstrap.js', 'public/js/jasny-bootstrap.js');
//
// mix.copy('node_modules/moment/min/moment-with-locales.js', 'public/js/moment-with-locales.js');

mix.styles([
    'public/css/app.css',
    'node_modules/jasny-bootstrap/dist/css/jasny-bootstrap.css',
    // 'resources/plugins/jasnyBootstrap/jasny-bootstrap.min.css',
    'node_modules/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.css'
], 'public/css/app.css');

mix.scripts([
    'public/js/app.js',
    'node_modules/jasny-bootstrap/dist/js/jasny-bootstrap.js',
    // 'resources/plugins/jasnyBootstrap/jasny-bootstrap.min.js',
    'node_modules/moment/min/moment-with-locales.js',
    'node_modules/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.js'
], 'public/js/app.js');

if (mix.inProduction()) {
    mix.version();
}
