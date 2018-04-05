<?php
/**
 * Template Name: Single Page
 */
get_header();

$post_thumbnail_param = array (
    'class' => "img-fluid", //bootstrap
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
            </div>

            <div class="author-bar">
                <div class="orange-circle"><p><?php bloginfo('title'); ?></p></div>
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
    ?>
    </section>
</main>
<?php 
get_footer(); 
?>