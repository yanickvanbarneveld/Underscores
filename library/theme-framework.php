<?php if (!defined('ABSPATH')) die('Forbidden');

if (!defined('FW')) {
	// Loads the plugin framework
	function framework_plugin_directory_uri() {
    	return get_template_directory_uri() . '/framework';
    }

    add_filter('fw_framework_directory_uri', 'framework_plugin_directory_uri');

    // Loads the plugin framework languages
    load_theme_textdomain('fw', get_template_directory() . '/languages');

    // Loads the plugin framework customizations
    function framework_customizations($rel_path) {
        return '/library/customizations';
    }

    add_filter('fw_framework_customizations_dir_rel_path', 'framework_customizations');

	// Requires the framework
    require get_template_directory() .'/framework/bootstrap.php';
}