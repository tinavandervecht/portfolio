var gulp     = require('gulp'),
    elixir   = require('laravel-elixir');

require('laravel-elixir-sass-compass');
require('laravel-elixir-browserify-official');

elixir.config.imagePath = 'assets/images';
// elixir.config.images = {
//     folder: 'assets/images',
//     outputFolder: 'images'
// };

elixir(function (mix) {
    /* ----
    SCSS processing
    Requires sass-globbing Ruby
    ---- */
    mix.compass('app.scss', 'public/css', {
        require: ['sass-globbing'],
        sass: './assets/scss'
    });

    /* ----
    Scripts processing
    (with Browserify)
    ---- */
    mix.browserify('./assets/scripts/app.js', 'public/scripts');

    /* ----
    Image Minifying
    And Processing
    ---- */
    mix.copy('./assets/images', 'public/images');
});
