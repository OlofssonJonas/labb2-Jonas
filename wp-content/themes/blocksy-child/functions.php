<?php
if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
});

 add_action( 'wp_enqueue_scripts', function () {
 	wp_enqueue_style('blocksy-child-style', get_stylesheet_uri());

});

add_action('woocommerce_after_add_to_cart_button', 'BANAN');

function BANAN() {
	echo "banan";
};

// function remove_cart_button() {
//     remove_action( 'woocommerce_after_add_to_cart_button', 'woocommerce_template_loop_add_to_cart', 10 );
// }
// add_action( 'init', 'remove_cart_button' );



?>
