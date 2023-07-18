=== BlankSlate ===

Contributors: tidythemes, bhadaway
Donate link: https://calmestghost.com/donate
Theme link: https://github.com/tidythemes/blankslate
Tags: accessibility-ready, one-column, two-columns, custom-menu, featured-images, microformats, sticky-post, threaded-comments, translation-ready
Requires at least: 5.2
Tested up to: 6.1
Stable tag: trunk
License: GNU General Public License v3 or Later
License URI: https://www.gnu.org/licenses/gpl.html

== Description ==

YOU MAY DELETE THIS FILE AND ANY OTHER FILE(S) BEFORE STARTING YOUR PROJECT

BlankSlate is the definitive WordPress boilerplate starter theme. We've carefully constructed the most clean and minimalist theme possible for designers and developers to use as a base to build websites for clients or to build completely custom themes from scratch. Clean, simple, unstyled, semi-minified, unformatted, and valid code, SEO-friendly, jQuery-enabled, no programmer comments, standardized and as white label as possible, and most importantly, the CSS is reset for cross-browser-compatability and no intrusive visual CSS styles have been added whatsoever. A perfect skeleton theme. For support and suggestions, go to: https://github.com/tidythemes/blankslate/issues. Thank you.

If you're creating your own theme or client project, open up all files and do a "Find and Replace All in All Files" on the word "blankslate" with your own slug and prefix.

=== License ===

In its unchanged and original state:

BlankSlate WordPress Theme © 2011-2023 TidyThemes
BlankSlate is distributed under the terms of the GNU GPL

The BlankSlate theme package and all files contained within are distributed under the terms of the GNU GPL v3 or Later (https://www.gnu.org/licenses/gpl.html).

Once you've significantly changed the theme to build your own unique project, either for yourself or for a client under a different theme name (as is encouraged), you're entirely welcome to copyright and license that project as you see fit.

-----terranean updates:-----
- enqueued scripts.js in functions.php
- commented out search form in header.php
- commented out sidebar.php
- added blocks, css, inc, and js folders
- added functions-blockstudio.php in inc and required it in functions.php
- added previous work to functions-blockstudio.php
- installed tailwind (https://tailwindcss.com/docs/installation)
- added style.css to css folder and added tailwind directives to files
- added file paths to tailwind.config.js
- installed laravel mix (https://laravel-mix.com/docs/6.0/installation)
- had to run npm init afterward due to no package.json OR node_modules folder created
- reran install commands for tailwind and laravel mix
- ran git init and added .gitignore + node_modules to the file
- added frontend.js to 
- added webpack.mix.js and populated it from previous work
- tested 'npx mix --production' (seems to be working)
- added blankslate's original style.css into css folder as blankslate-style.css
- added concatenation to webpack.mix.js to concat all css files in css folder to concatenated.css (tested-working)
- added terranean branded "screenshot.png"

-----terranean notes:-----
- run 'npx mix --production' to concatenate, compile, treeshake, and minify css/js