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
This sets up the custom post 'How Tos'*******/

function my_custom_post_howTos() {
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
		'description'   => 'How Tos from the greater DC area',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'   => true,
	);
	register_post_type( 'how to', $args );	
}
add_action( 'init', 'my_custom_post_howTo' );



?>