<?php
/*
Template Name: Category
page qui s'affiche quand on clique sur un lien du menu
*/
get_header(); ?>


<h2><?php single_cat_title(); ?></h2>

<section class="primary">

<?php
$postnum=1;
$args = array( 'numberposts' => 5, 'order'=> 'ASC', 'orderby' => 'title' );
$postslist = get_posts( $args );
foreach ($postslist as $post) :  setup_postdata($post); ?> 
<?php if($postnum==1){
    echo '<div class="main_article">';
}
if ($postnum!=1){
    echo '<div>';
}
?>
		<?php the_title(); ?>
        <?php 
            if(has_post_thumbnail()){
                the_post_thumbnail();
            }
            ?>
        <?php the_excerpt(); ?>
        <?php the_date(); ?>
        <?php the_category(); ?>
        <?php if($postnum==1){
            echo '</div>';      
            echo '<div class="secondary_articles">';
        }
        if ($postnum!=1){
            echo '</div>';
        }
        $postnum++;
?>
<?php endforeach; ?>  
</div>
</section>







<?php get_sidebar(); ?>
<?php
get_footer();
?>




