<?php
/*
Team-Six Theme
Template Name: Search Page
*/
?>
<?php
    get_header(); 
?>
<div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php get_search_form(); ?>
        
        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();

?>
<?php
/*
To link this search-page template, we can use the page ID:
    Option A:     <a href="index.php?page_id=17" title="Search Page">Search Page</a>
    Option B:     <a href="<php echo home_url(); ?>/wordpress/search-page/" title="Search-Page">Search Page</a>


Or using the page slug: 
    Option A:     <a href="/wordpress/search-page/" title="Search Page">Search Page</a>
    Option B:     <a href="<?php echo home_url(); ?>/wordpress/search-page/" title="Search Page">Search Page</a>
*/