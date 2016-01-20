<?php if (!defined('ABSPATH')) die('Forbidden');

function setup() {
	// Let's first clean up the WordPress Header!
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
	remove_action('wp_head', 'print_emoji_detection_script', 7);

	remove_action('wp_print_styles', 'print_emoji_styles');

	// Ouch, we still see those ugly file versions in the string, lets remove those.
	add_action('script_loader_src', 'remove_file_version', 10, 2);
	add_action('style_loader_src', 'remove_file_version', 10, 2);

	// After we cleaned up the WordPress Header it is smart to use some handy stuff for our theme.
	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');

	// Oh, in the backend there is still some ugly shit we need to clean up...
	add_action('admin_init', 'remove_image_link', 10);
	add_theme_support('post-thumbnails');

	// So the final step is to use the navigation menu and then we can play!
	register_nav_menus(array(
		'primary' => __('Primary Menu', '_s'),
		'secondary' => __('Secondary Menu', '_s')
	));
}

add_action('after_setup_theme', 'setup');