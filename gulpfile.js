var gulp     = require('gulp'),
    elixir   = require('laravel-elixir');

require('laravel-elixir-sass-compass');
require('laravel-elixir-imagemin');
require('laravel-elixir-vueify');
require('laravel-elixir-browserify-official');

var inProduction = elixir.config.production;
elixir.config.sourcemaps = false;
elixir.config.assetsPath = 'assets';

elixir(function (mix) {
    /* ----
    SCSS processing
    Requires sass-globbing Ruby
    ---- */
    mix.compass('app.scss', 'public/css', {
        require: ['sass-globbing'],
        style: inProduction ? "compressed" : ""
    });
    /* ----
    Scripts processing
    (with Browserify)
    ---- */
    mix.browserify('app.js');

    /* ----
    Image Minifying
    And Processing
    ---- */
    mix.imagemin();

    /* ----
    Copying file overs
    ---- */
    mix.copy('assets/audio', 'public/audio');
    mix.copy('assets/favicons', 'public');
    mix.copy('assets/game', 'public/game');
});
