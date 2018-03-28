<?php
if(have_posts()){
    while (have_posts()){
        the_post();?>

        <div class="post">
            <h2 class="post-title">
                <?php  the_title(); ?>
            </h2>
            <?php the_post_thumbnail('shop_single'); ?>
        </div>

        <?php
    }
}
?>