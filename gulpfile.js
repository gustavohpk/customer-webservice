var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass([
        'app.scss',
        'custom.scss'
    ], 'resources/assets/css/all.css', 'resources/assets/css');
    mix.styles([
         'all.css'
      ])
      .version('public/css/all.css');

    mix.sass([
        'app.scss'
    ], 'resources/assets/css/admin.css', 'resources/assets/css');

    mix.styles([
         // Bootstrap Material
         'material-fullpalette.min.css',
         'ripples.min.css',
         'roboto.min.css'
      ], 'public/css/admin.css')
      .version('public/css/admin.css');

    mix.scripts([
        'jquery-1.11.3.js'], 'resources/assets/js/jquery.js')
    .scripts([
        'jquery.js',
        'bootstrap.min.js',
        'all.js'
    ]);
    mix.version([
        'public/css/all.css',
        'public/js/all.js'
    ]);
});

