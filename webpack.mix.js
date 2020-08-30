const mix = require('laravel-mix');

mix.copy('node_modules/chart.js/dist/Chart.js', 'public/js/chart.js');

mix.js('resources/assets/admin/js/admin.js', 'public/js')
    .extract([
        'bootstrap',
        'admin-lte'
    ]);

mix.sass('resources/assets/admin/sass/admin.scss', 'public/css');

if(mix.inProduction()) {
    mix.version();
}

mix.browserSync('http://localhost:8000');
mix.disableSuccessNotifications();
