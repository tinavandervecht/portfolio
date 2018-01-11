var gulp     = require('gulp'),
    elixir   = require('laravel-elixir');

require('laravel-elixir-sass-compass');
require('laravel-elixir-imagemin');
require('laravel-elixir-vueify');
require('laravel-elixir-browserify-official');

var inProduction = elixir.config.production;

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
    mix.copy('resources/assets/audio', 'public/audio');
    mix.copy('resources/views', 'public');
    mix.copy('resources/favicons', 'public');
    mix.copy('resources/assets/game', 'public/game');
});
