<?php

/**
 * Updates "Posts" menu label within WP Admin
 */

if (!function_exists('change_menu_labels')) {

	function change_menu_labels() {
		global $menu;
		global $submenu;
		$menu[5][0] = 'Blog';
		$submenu['edit.php'][5][0] = 'Blog';
		$submenu['edit.php'][10][0] = 'Add Blog Article';
	}
	add_action('admin_menu', 'change_menu_labels');

} else {
	echo "Function Already Exists: change_menu_labels";
}

if (!function_exists('change_post_object_labels')) {

	function change_post_object_label() {
		global $wp_post_types;
		$labels = &$wp_post_types['post']->labels;
		$labels->name = 'Blog Article';
		$labels->singular_name = 'Blog Article';
		$labels->add_new = 'Add Blog Article';
		$labels->add_new_item = 'Add Blog Article';
		$labels->edit_item = 'Edit Blog Article';
		$labels->new_item = 'Blog Article';
		$labels->view_item = 'View Blog Article';
		$labels->search_items = 'Search Blog Articles';
		$labels->not_found = 'No Blog Articles found';
		$labels->not_found_in_trash = 'No Blog Articles found in Trash';
	}
	add_action('init', 'change_post_object_label');

} else {
	echo "Function Already Exists: change_post_object_labels";
}