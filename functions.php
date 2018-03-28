<?php


//Team six - Daniel - Ajout des fonts utilisées par Foodog (Crimson et Open sans) la function est appelle dans header.php
function load_fonts() {

wp_register_style('googleFonts',
'https://fonts.googleapis.com/css?family=Crimson+Text:400,400i|Open+Sans:400,600,700,800');
wp_enqueue_style('googleFonts');

}

//Team six - Daniel - Intégration Bootstrap css (la function est apellee dans header.php
function theme_styles() {
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
}



//Team six - Daniel - Intégration Bootstrap js (la function est apellee dans header.php
function theme_js() {

    global $wp_scripts;

    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js' );
}
?>