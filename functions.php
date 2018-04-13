<?php
//TEAM SIX - Tools
class Sixtools {
    
    public function printr($a) {
        echo '<pre>';
        print_r($a);
        echo '</pre>';
    }
    public function vdump($a) {
        echo '<pre>';
        var_dump($a);
        echo '</pre>';
    }
}
global $tools;
$tools = new Sixtools(); 


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

    // Script custom
    wp_enqueue_script( 'foodog_js', get_template_directory_uri() . '/assets/js/foodog.js' );
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
    register_sidebar( array(
        'name'          => esc_html__( 'instagram', 'team-six-theme' ),
		'id'            => 'instagram',
        'description'   => esc_html__( 'instagram feed plugin integration', 'team-six-theme' ),
        'before_widget' => '<aside>',
		'after_widget'  => '</aside>'
    ));
}
add_action( 'widgets_init', 'team_six_widgets_init' );


/** 
* Create numeric pagination in WordPress
*/
function wp_numeric_pagination($container_class = ''){
    if( is_singular() ){
        return;
    }
 
    global $wp_query;
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 ){
        return;
    }
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<div class="'. $container_class .'"><ul>';
 
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>', get_previous_posts_link('<') );
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a href="%s">%s</a></li>', $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li>-</li>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        if($paged == $link){
            printf( '<li class="active">%s</a></li>', $link );
        }
        else{
            printf( '<li><a href="%s">%s</a></li>', esc_url( get_pagenum_link( $link ) ), $link );
        }
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) ){
            echo '<li>-</li>';
        }
 
        $class = ($paged == $max) ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>', $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>', get_next_posts_link('>') );
 
    echo '</ul></div>';
}

//show popular posts without plugin (wp-snippets.com)
function count_post_visits() {
    if( is_single() ) {
        global $post;
        $views = get_post_meta( $post->ID, 'my_post_viewed', true );
        if( $views == '' ) {
        update_post_meta( $post->ID, 'my_post_viewed', '1' ); 
        }else {
        $views_no = intval( $views );
        update_post_meta( $post->ID, 'my_post_viewed', ++$views_no );
        }
    }
}
add_action( 'wp_head', 'count_post_visits' );


// Fonction pour partager un article
// Source : https://www.gavick.com/blog/wordpress-social-media-share-buttons-without-plugin
// (modifier à ma sauce pour correspondre à ce dont on a besoin)
function gk_social_buttons($content, $enable_facebook = false, $enable_twitter = false, $enable_google_plus = false) {
    global $post;
    $permalink = get_permalink($post->ID);
    $title = get_the_title();
    // if(!is_feed() && !is_home() && !is_page()) {
    if(true) {
        // <a href="" class="share"><i class="fa fa-share"></i> share</a> -->
        $content = '<div class="share"><i class="fa fa-share"></i>' . $content;
        // $content .= '<div class="share">';
        
        if($enable_facebook){
            $content .= '<a class="gk-social-buttons fa fa-facebook" href="https://www.facebook.com/sharer/sharer.php?u='.$permalink.'"
            onclick="window.open(this.href, \'facebook-share\',\'width=580,height=296\');return false;">';
            // $content .= <span>Facebook</span>
            $content .= '</a>';

            http://www.facebook.com/sharer.php?u=http%3A%2F%2Fdigest.thefarmersdog.com%2Ftruth-about-table-scraps-for-dogs%2F
        }

        if($enable_twitter){
            $content .= '<a class="gk-social-buttons fa fa-twitter" href="http://twitter.com/share?text='.$title.'&amp;url='.$permalink.'"
            onclick="window.open(this.href, \'twitter-share\', \'width=550,height=235\');return false;">';
            // $content .= <span>Twitter</span>
            $content .= '</a>';
        }
              
        if($enable_google_plus){
            $content .= '<a class="gk-social-buttons fa fa-google-plus" href="https://plus.google.com/share?url='.$permalink.'"
            onclick="window.open(this.href, \'google-plus-share\', \'width=490,height=530\');return false;">';
            // $content .= <span>Instagram</span>
            $content .= '</a>';
        }

        $content .= '</div>';
    }
    return $content;
}

function the_share_button($content = "share", $enable_facebook = true, $enable_twitter = true, $enable_google_plus = true){
    echo gk_social_buttons($content, $enable_facebook, $enable_twitter, $enable_google_plus);
}
// add_filter('the_content', 'gk_social_buttons');
// add_filter( 'the_share_button', 'gk_social_buttons' );
