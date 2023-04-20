<?php 
/*
Plugin Name: Jonas plugin
*/ 
 
function skrivUt() {

    echo 'hej från Jonas plugin';
};
add_action ('wp_footer', 'skrivUt');

add_action('init', 'registerBook');

function registerBook() {
$book_args = [
    "public" => true,
    "label" => "bok",
    "show_in_rest" => true,
];

register_post_type('book', $book_args);
}

add_action('the_title', 'censur');

function censur ($content) {
    $words = str_replace('o', '🤘', $content);
    return $words;
}

 echo get_option('home');


    ?>
   