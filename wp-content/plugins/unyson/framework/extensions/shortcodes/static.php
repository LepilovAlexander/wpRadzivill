<?php if (!defined('FW')) die('Forbidden');

if (! is_admin()) {
	wp_register_style(
		'font-awesome.css',
		fw_get_framework_directory_uri('/static/libs/font-awesome.css/css/font-awesome.css.min.css'),
		array(),
		fw()->manifest->get_version()
	);
}

