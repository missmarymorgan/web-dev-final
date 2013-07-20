<?php



/**********
This sets up the custom post 'Reviews'*******/

function my_custom_post_review() {
	$labels = array(
		'name'               => _x( 'Reviews', 'reviews' ),
		'singular_name'      => _x( 'Review', 'review' ),
		'add_new'            => _x( 'Add New', 'review' ),
		'add_new_item'       => __( 'Add New Review' ),
		'edit_item'          => __( 'Edit Review' ),
		'new_item'           => __( 'New Review' ),
		'all_items'          => __( 'All Reviews' ),
		'view_item'          => __( 'View Review' ),
		'search_items'       => __( 'Search Reviews' ),
		'not_found'          => __( 'No reviews found' ),
		'not_found_in_trash' => __( 'No reviews found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Reviews'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Reviews from the greater DC area',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'   => true,
	);
	register_post_type( 'review', $args );	
}
add_action( 'init', 'my_custom_post_review' );









/**********
This sets up the custom post 'How To'*******/

function my_custom_post_howTo() {
	$labels = array(
		'name'               => _x( 'How Tos', 'how tos' ),
		'singular_name'      => _x( 'How To', 'how to' ),
		'add_new'            => _x( 'Add New', 'how to' ),
		'add_new_item'       => __( 'Add New How To' ),
		'edit_item'          => __( 'Edit How To' ),
		'new_item'           => __( 'New How To' ),
		'all_items'          => __( 'All How Tos' ),
		'view_item'          => __( 'View How To' ),
		'search_items'       => __( 'Search How Tos' ),
		'not_found'          => __( 'No how tos found' ),
		'not_found_in_trash' => __( 'No how tos found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'How Tos'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Everything you need to know how to do in DC',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'   => true,
	);
	register_post_type( 'how to', $args );	
}
add_action( 'init', 'my_custom_post_howTo' );




/**********
This sets up the categories for 'Reviews' post type*******/


function add_console_taxonomies() {

	register_taxonomy('console', 'review', array(
		// Hierarchical taxonomy (like categories)
		'hierarchical' => true,
		// This array of options controls the labels displayed in the WordPress Admin UI
		'labels' => array(
			'name' => _x( 'Review Category', 'taxonomy general name' ),
			'singular_name' => _x( 'Review-Category', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search Review-Categories' ),
			'all_items' => __( 'All Review-Categories' ),
			'parent_item' => __( 'Parent Review-Category' ),
			'parent_item_colon' => __( 'Parent Review-Category:' ),
			'edit_item' => __( 'Edit Review-Category' ),
			'update_item' => __( 'Update Review-Category' ),
			'add_new_item' => __( 'Add New Review-Category' ),
			'new_item_name' => __( 'New Review-Category Name' ),
			'menu_name' => __( 'Review Categories' ),
		),

		// Control the slugs used for this taxonomy
		'rewrite' => array(
			'slug' => 'console', // This controls the base slug that will display before each term
			'with_front' => false, // Don't display the category base before "/locations/"
			'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
		),
	));
}
add_action( 'init', 'add_console_taxonomies', 0 );




/****trying to establish custom taxonomy******/

function events_init() {
	// create a new taxonomy
	register_taxonomy(
		'events',
		'review',
		array(
			'label' => __( 'Events' ),
			'rewrite' => array( 'slug' => 'event' ),
			'capabilities' => array(
				'assign_terms' => 'edit_guides',
				'edit_terms' => 'publish_guides'
			)
		)
	);
}
add_action( 'init', 'events_init' );




/****************************
 Replaces the excerpt "more" text by a link*************************
 ********************
 *****************/


function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');







?>