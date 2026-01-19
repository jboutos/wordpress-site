<?php 

/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );



// load css into the website's front-end
function mytheme_enqueue_style() {
	wp_enqueue_style( 'mytheme-style', get_stylesheet_uri()); 
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_style' );



// Register a taxonomy for Featured Albums
function register_album_visibility_taxonomy() {
    $labels = [
        'name' => 'Album Visibility',
        'singular_name' => 'Album Visibility',
        'menu_name' => 'Album Visibility',
        'all_items' => 'All Visibility Options',
        'edit_item' => 'Edit Visibility',
        'add_new_item' => 'Add New Visibility',
        'new_item_name' => 'New Visibility Name',
        'search_items' => 'Search Visibility',
    ];

    $args = [
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true, // Gutenberg / REST API support
        'hierarchical' => false, // like tags
    ];

    register_taxonomy('album_visibility', 'albums', $args);
}
add_action('init', 'register_album_visibility_taxonomy');



function register_my_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );



function getFile($path) {
	return dirname(__FILE__) . '/' . $path;
}

?>