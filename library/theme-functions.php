<?php 

/**
 * This function removes the image link from images.
 * 
 * @return null
 */
function remove_image_link() {
	$image_set = get_option('image_default_link_type');

	if ($image_set !== 'none') {
		update_option('image_default_link_type', 'none');
	}
}

/**
 * This function removes file versions from the URL.
 * 
 * @param  string $src
 * @return string
 */
function remove_file_version($src) {
    if(strpos($src, '?ver=')) {
        $src = remove_query_arg('ver', $src);
    }

    return $src;
}

function add_scripts() {
	wp_enqueue_style('_s-style', get_stylesheet_uri());

	wp_enqueue_script('jquery');
	wp_enqueue_script('customplugins', get_template_directory_uri() . '/assets/scripts/plugins.js', array('jquery'), NULL, true);
	wp_enqueue_script('customscripts', get_template_directory_uri() . '/assets/scripts/main.js', array('jquery'), NULL, true);
}