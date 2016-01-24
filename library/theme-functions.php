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