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
This sets up the custom post 'Instructional'*******/

function my_custom_post_instructional() {
	$labels = array(
		'name'               => _x( 'Instructionals', 'instructionals' ),
		'singular_name'      => _x( 'Instructional', 'instructional' ),
		'add_new'            => _x( 'Add New', 'instructional' ),
		'add_new_item'       => __( 'Add New Instructional' ),
		'edit_item'          => __( 'Edit Instructional' ),
		'new_item'           => __( 'New Instructional' ),
		'all_items'          => __( 'All Instructionals' ),
		'view_item'          => __( 'View Instructional' ),
		'search_items'       => __( 'Search Instructionals' ),
		'not_found'          => __( 'No instructionals found' ),
		'not_found_in_trash' => __( 'No instructionals found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Instructionals'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Everything you need to know how to do in DC',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'   => true,
	);
	register_post_type( 'instructional', $args );	
}
add_action( 'init', 'my_custom_post_instructional' );


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




/* Replaces the excerpt "more" text by a link*/


function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');










?>