<?php if (!defined('ABSPATH')) die('Forbidden');

if (!defined('FW')) {
	function framework_plugin_directory_uri() {
    	return get_template_directory_uri() . '/framework';
    }

    add_filter('fw_framework_directory_uri', 'framework_plugin_directory_uri');

    load_theme_textdomain('fw', get_template_directory() . '/languages');

    require dirname(__FILE__) .'/framework/bootstrap.php';
}

require get_template_directory() . '/library/theme-init.php';

require get_template_directory() . '/library/theme-functions.php';

require get_template_directory() . '/library/theme-helpers.php';