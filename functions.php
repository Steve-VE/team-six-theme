<?php
//TEAM SIX - Scripts - loading css, js, ...
function teamSixScripts() {

    //Google Fonts
    wp_register_style('googleFonts',
        'https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Open+Sans:400,600,700,800');
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

// TEAM SIX - Theme supports activation
//laisse wordpress generer les balises title
add_theme_support( 'title-tag' );
//active les widgets
add_theme_support( 'customize-selective-refresh-widgets' );
//active les menus
add_theme_support( 'menus' );
//active les thumbnails pour les posts
add_theme_support( 'post-thumbnails');

//TEAM SIX - WIDGETS INIT
function team_six_widgets_init() {
    register_sidebar( array(
		'name'          => esc_html__( 'social-plus-ad', 'team-six-theme' ),
		'id'            => 'social-plus-ad',
		'description'   => esc_html__( 'Social Media buttons plus advertising', 'team-six-theme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="widget-title"><h3>',
		'after_title'   => '</h3></div>',
    ) );
}
add_action( 'widgets_init', 'team_six_widgets_init' );

?>