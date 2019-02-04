let mix = require('laravel-mix');

mix.sass('resources/sass/style.sass', 'style.css')
    .js('resources/js/main.js', 'assets/main.js')
    .options({
        uglify: {
            uglifyOptions: {
                compress: {
                    drop_console: true
                }
            }
        }
    })
    .sourceMaps()