let mix = require('laravel-mix');

mix.sass('resources/sass/app.sass', 'style.css')
    .js('resources/js/main.js', 'assets/main.js')
    .options({
        processCssUrls: false,
        uglify: {
            uglifyOptions: {
                compress: {
                    drop_console: true
                }
            }
        }
    })
    .sourceMaps()