<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
function theme_enqueue_scripts() {
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
