<?php 
/**
 * loaded in functions.php
 */

// Blockstudio editor
add_filter('blockstudio/editor/users', function () {
    return [1];
});

// Register Block Category (stolen from Blockstudio plugin's blockstudio.php)
if (version_compare(get_bloginfo('version'), '5.8.0', '>=')) {
add_filter(
    'block_categories_all',
    function ($categories, $post) {
        return array_merge($categories, [
            [
                'slug' => 'client-name-replace',
                'title' => __('client-name-replace', 'client-name-replace'),
            ],
        ]);
    },
    10,
    2
);
} else {
add_filter(
    'block_categories',
    function ($categories, $post) {
        return array_merge($categories, [
            [
                'slug' => 'client-name-replace',
                'title' => __('client-name-replace', 'client-name-replace'),
            ],
        ]);
    },
    10,
    2
);
}

// Custom path within your theme (https://blockstudio.dev/documentation/registration/)
add_filter('blockstudio/path', function () {
    return get_template_directory() . '/blocks';
});

?>