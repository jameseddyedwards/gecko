<?php

// Creates a new post type for News Articles
if (!function_exists('create_post_types')) {

	function create_post_types() {

		// News
		register_post_type('news',
			array(
				'labels' => array(
					'name' => __( 'News' ),
					'singular_name' => __('News Article')
				),
				'public' => true,
				'has_archive' => true,
				'menu_position' => 5,
				'taxonomies' => array('category'),
				'supports' => array(
					'title',
					'editor',
					'author',
					'thumbnail',
					'excerpt',
					'trackbacks',
					'custom-fields',
					'comments',
					'revisions'
				)
			)
		);

		// Team
		register_post_type('trainers',
			array(
				'labels' => array(
					'name' 				 => 'Trainers',
					'singular_name' 	 => 'Trainer',
				    'add_new'            => 'Add New',
				    'add_new_item'       => 'Add New Trainer',
				    'edit_item'          => 'Edit Trainer',
				    'new_item'           => 'New Trainer',
				    'all_items'          => 'All Trainers',
				    'view_item'          => 'View Trainer',
				    'search_items'       => 'Search Trainers',
				    'not_found'          => 'No Trainer found',
				    'not_found_in_trash' => 'No Trainer found in Trash',
				    'parent_item_colon'  => '',
				    'menu_name'          => 'Trainers'
				),
				'public' => true,
				'has_archive' => true,
				'menu_position' => 6,
				'supports' => array(
					'title',
					'editor'
				)
			)
		);

		// Exercises
		register_post_type('exercises',
			array(
				'labels' => array(
					'name' 				 => 'Exercises',
					'singular_name' 	 => 'Exercise',
				    'add_new'            => 'Add New',
				    'add_new_item'       => 'Add New Exercise',
				    'edit_item'          => 'Edit Exercise',
				    'new_item'           => 'New Exercise',
				    'all_items'          => 'All Exercises',
				    'view_item'          => 'View Exercise',
				    'search_items'       => 'Search Exercises',
				    'not_found'          => 'No exercises found',
				    'not_found_in_trash' => 'No exercises found in Trash',
				    'parent_item_colon'  => '',
				    'menu_name'          => 'Exercises'
				),
				'public' => true,
				'has_archive' => false,
				'menu_position' => 7,
				'supports' => array(
					'title',
					'editor',
					'comments',
				)
			)
		);

		// Programmes
		register_post_type('programmes',
			array(
				'labels' => array(
					'name' 				 => 'Programmes',
					'singular_name' 	 => 'Programme',
				    'add_new'            => 'Add New',
				    'add_new_item'       => 'Add New Programme',
				    'edit_item'          => 'Edit Programme',
				    'new_item'           => 'New Programme',
				    'all_items'          => 'All Programmes',
				    'view_item'          => 'View Programme',
				    'search_items'       => 'Search Programmes',
				    'not_found'          => 'No programmes found',
				    'not_found_in_trash' => 'No programmes found in Trash',
				    'parent_item_colon'  => '',
				    'menu_name'          => 'Programmes'
				),
				'public' => true,
				'has_archive' => false,
				'menu_position' => 8,
				'supports' => array(
					'title',
					'editor',
					'comments',
				)
			)
		);

	}
	add_action('init', 'create_post_types');

} else {
	echo "Function Already Exists: create_post_types";
}