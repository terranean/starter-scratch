// https://laravel-mix.com/docs/6.0/installation

let mix = require('laravel-mix');

mix.js('js/frontend.js', 'scripts.js')
    .styles('css/*.css', 'css/concatenated.css')
    .postCss("css/concatenated.css", "style.css", [
    require("tailwindcss"),
    ])

// concatenation (the .styles() command) may not be necessary, could combine tailwind.css and blankslate-style.css, but i am keeping it here as a note for how to handle sass when we get there