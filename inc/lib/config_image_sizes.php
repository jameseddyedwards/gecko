<?php

/**
 * Configure image sizes used across the site
 */

if (!function_exists('site_has_multiple_categories')) {

	function config_image_sizes($sizes) {

		// Add custom image sizes for the whole site
		add_image_size('feature-image', 1400, 300, true);
		
		$myimgsizes = array(
			"feature-image" => __("Feature Image")
		);
		$newimgsizes = array_merge($sizes, $myimgsizes);
		
		return $newimgsizes;
	}
	add_filter('image_size_names_choose', 'config_image_sizes');

} else {
	echo "Function Already Exists: config_image_sizes";
}
