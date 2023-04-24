<?php
/*
Plugin Name: Jonas plugin
*/ 
 
add_action('the_title', 'censur');

function censur ($title) {
    $words = str_replace('o', '🤘', $title);
    return $words;
}

    ?>
   