
<?php 
/**
 * Template Name: 404
 */
get_header();
 ?>



<div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
 
            <header class="page-header">
                <h1 class="Error 404 page"><?php _e( 'Not Found', 'TEAM-SIX-THEME' ); ?></h1>
            </header>
 
            <div class="page-wrapper">
                <div class="page-content">
                    <h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'TEAM-SIX-THEME' ); ?></h2>
                    <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'REAM-SIX-THEME' ); ?></p>
 
                    <?php get_search_form(); ?>
                </div><!-- .page-content -->
            </div><!-- .page-wrapper -->
 
        </div><!-- #content -->
    </div><!-- #primary -->


    <?php get_sidebar(); ?>
<?php get_footer(); ?>