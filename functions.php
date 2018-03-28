<?php
function teamSixScripts() {

    //Google Fonts
    wp_register_style('googleFonts',
        'https://fonts.googleapis.com/css?family=Crimson+Text:400,400i|Open+Sans:400,600,700,800');
    wp_enqueue_style('googleFonts');

    //Normalize.css
    wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/assets/css/normalize.css' );

    //Bootstrap.css
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    /*global $wp_scripts;*/ // Je pense que cette ligne est obsolète...

    //Main CSS
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/assets/css/main.css' );

    //Bootstrap JS
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js' );



}


?>