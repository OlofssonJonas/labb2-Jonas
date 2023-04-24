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

//function to write a string above the image on singlepage
	// function metal() {
	// 	echo "Heavy metal for life";
	// };
	// add_action('woocommerce_before_single_product', 'metal');

 //remove cart button

	//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );

  
?>