mix
    .js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'resources/css/app.css', {
        sassOptions: {
          quietDeps: true,
        },
     }
    .copy(
        'node_modules/@fortawesome/fontawesome-free/webfonts',
        '../webfonts'
    )
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ]);