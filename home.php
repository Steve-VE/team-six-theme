<?php get_header(); ?>
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
<?php
get_footer();
//
// ================================== Version - 0.1.3 ========================================
// ======= Starting - 26/03/18 =========================== Ending - 11/04/18 =================
// ====================================== Author : ===========================================
//
//  MMP""MM""YMM `7MM"""YMM        db      `7MMM.     ,MMF'      .M"""bgd `7MMF'`YMM'   `MP' 
//  P'   MM   `7   MM    `7       ;MM:       MMMb    dPMM       ,MI    "Y   MM    VMb.  ,P   
//       MM        MM   d        ,V^MM.      M YM   ,M MM       `MMb.       MM     `MM.M'    
//       MM        MMmmMM       ,M  `MM      M  Mb  M' MM         `YMMNq.   MM       MMb     
//       MM        MM   Y  ,    AbmmmqMA     M  YM.P'  MM mmmmm .     `MM   MM     ,M'`Mb.   
//       MM        MM     ,M   A'     VML    M  `YM'   MM       Mb     dM   MM    ,P   `MM.  
//     .JMML.    .JMMmmmmMMM .AMA.   .AMMA..JML. `'  .JMML.     P"Ybmmd"  .JMML..MM:.  .:MMa.
?>