<?php
/**
 * Template Name: Single Page
 */
get_header();

$post_thumbnail_param = array (
    'class' => "img-fluid", //image responsive - Bootstrap
    'alt'   => '<?php the_title_attribute(); ?>',
    'title' => '<?php the_title_attribute(); ?>'
)
?>

<main>
    <section class="single-content">
    <?php
    if(have_posts()){
        while (have_posts()){
            the_post();?>
            <div class="single-category-container">
            <?php 
            $postCat = get_the_category();
            foreach ($postCat as $cat) {
                echo '<span class="single-category">' . $cat->name . '</span>';
            }
            ?>
            </div>

            <div class="post">

                <h1>
                    <?php  the_title(); ?>
                </h1>

                <?php the_post_thumbnail('large', $post_thumbnail_param); ?>
                <div class="author-bar">

                    <div class="orange-circle"><p><?php bloginfo('title'); ?></p></div>

                    <p class="post-author"><span class="by">by :</span> <?php the_author_posts_link(); ?></p>
                    <a href="#"><button class="comment-button"><i class="fa fa-comment"></i>Comment</button></a>

                </div>
            </div>

            <div class="content">
                <?php the_content(); ?>
            </div>
            <aside class="newletter">
                <h5>Subscribe to The FooDog Newletter</h5>
                <h6>Get health and wellness tips about your dog delivered to your inbox.</h6>
                <input type="text" name="newletter_register_mail" placeholder="Your email"><a href="#"><button type="submit" value="newletter_register_submit">Sign up</button></a>
            </aside>
            <div class="post-comments">
                <?php comments_template(); ?>
            </div>

            <?php
        }
    }
    ?>
    </section>
</main>
<?php 
get_footer(); 
?>