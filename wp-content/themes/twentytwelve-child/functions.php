<?php



add_filter( 'pre_get_posts', 'my_get_posts' );

function my_get_posts( $query ) {

	if ( ( is_home() && $query->is_main_query() ) || is_feed() )
		$query->set( 'post_type', array( 'post', 'page', 'review', 'lesson' ) );

	return $query;
}





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
This sets up the custom post 'Lessons'*******/

function my_custom_post_lesson() {
	$labels = array(
		'name'               => _x( 'Lessons', 'lessons' ),
		'singular_name'      => _x( 'Lesson', 'lesson' ),
		'add_new'            => _x( 'Add New', 'Lesson' ),
		'add_new_item'       => __( 'Add New Lesson' ),
		'edit_item'          => __( 'Edit Lesson' ),
		'new_item'           => __( 'New Lesson' ),
		'all_items'          => __( 'All Lessons' ),
		'view_item'          => __( 'View Lesson' ),
		'search_items'       => __( 'Search Lessons' ),
		'not_found'          => __( 'No lessons found' ),
		'not_found_in_trash' => __( 'No lessons found in the Trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Lessons'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Every lesson you need for DC',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'   => true,
	);
	register_post_type( 'lesson', $args );	
	

}
add_action( 'init', 'my_custom_post_lesson' );






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





/************************************************************************************
*************************************************************************************
****************************    TAXONOMIES     **************************************
*************************************************************************************
************************************************************************************/





/****
***********
establish custom taxonomy
EVENTS for REVIEWS
*********************************************
******/

function events_init() {
	// create a new taxonomy
	register_taxonomy(
		'events',
		'review',
		array(
			'label' 		=> __( 'Events' ),
			'rewrite' 		=> array( 'slug' => 'event' ),
			'capabilities' 	=> array(
				
			)
		)
	);
}
add_action( 'init', 'events_init' );


/****
***********
establish custom taxonomy
RESTAURANTS for REVIEWS
*********************************************
******/

function restaurants_init() {
	// create a new taxonomy
	register_taxonomy(
		'restaurants',
		'review',
		array(
			'label' 		=> __( 'Restaurants' ),
			'rewrite' 		=> array( 'slug' => 'restaurant' ),
			'capabilities' 	=> array(
				
			)
		)
	);
}
add_action( 'init', 'restaurants_init' );



/****
***********
establish custom taxonomy
SHOWS for REVIEWS
*********************************************
******/

function shows_init() {
	// create a new taxonomy
	register_taxonomy(
		'shows',
		'review',
		array(
			'label' 		=> __( 'Shows' ),
			'rewrite' 		=> array( 'slug' => 'show' ),
			'capabilities' 	=> array(
				
			)
		)
	);
}
add_action( 'init', 'shows_init' );



/****
***********
establish custom taxonomy
POP CULTURE for REVIEWS
*********************************************
******/

function popCulture_init() {
	// create a new taxonomy
	register_taxonomy(
		'Pop Culture',
		'review',
		array(
			'label' 		=> __( 'Pop Culture' ),
			'rewrite' 		=> array( 'slug' => 'pop culture' ),
			'capabilities' 	=> array(
				
			)
		)
	);
}
add_action( 'init', 'popCulture_init' );









/****
***********
establish custom taxonomy
RECIPES for LESSONS
*********************************************
******/


function recipes_init() {
	// create a new taxonomy
	register_taxonomy(
		'recipes',
		'lesson',
		array(
			'label' => __( 'Recipes' ),
			'rewrite' => array( 'slug' => 'recipe' ),
			'capabilities' => array(
				
			)
		)
	);
}
add_action( 'init', 'recipes_init' );






























/*adds normal categories, etc to lessons
 
 
add_action('init', 'lesson_add_default_boxes');
 
function lesson_add_default_boxes() {
    register_taxonomy_for_object_type('category', 'lesson');
    register_taxonomy_for_object_type('post_tag', 'lesson');
}

*/



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