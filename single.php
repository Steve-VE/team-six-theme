<?php
/**
 * Template Name: Single Page
 */

if(have_posts()){
    while (have_posts()){
        the_post();?>

        <div class="post">
            <h2 class="title">
                <?php  the_title(); ?>
            </h2>
            <?php the_post_thumbnail('shop_single'); ?>
        </div>
        
        <div class="content">
            <?php the_content(); ?>
        </div>
        <div class="post-comments">
            <?php comments_template(); ?>
        </div>

        <?php
    }
}

get_footer();
?>