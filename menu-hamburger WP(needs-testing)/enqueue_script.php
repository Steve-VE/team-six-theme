<?php
function wpmu_burger_menu_scripts() {
	
	wp_enqueue_script( 'burger-menu-script', get_stylesheet_directory_uri() . '/scripts/burger-menu.js', array( 'jquery' ) );
 
}
add_action( 'wp_enqueue_scripts', 'wpmu_burger_menu_scripts' );