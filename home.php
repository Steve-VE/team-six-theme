<?php 
/**
 * Template Name: Home
 */
    get_header(); 
?>
<main>

    <section class="home">
        <?php
            $postnum=1;
            $args = array( 'numberposts' => 5, 'order'=> 'ASC', 'orderby' => 'title' );
            $postslist = get_posts( $args );

            foreach ($postslist as $post) :  
                setup_postdata($post);
                
                // Premier article...
                if($postnum==1): ?>
                   <div class="main_article">

                        <?php if(has_post_thumbnail()){
                            the_post_thumbnail();
                        } ?>

                        <div class="category"><?php the_category(' '); ?></div>
                        <?php the_title('<h2>', '</h2>'); ?>
                    
                    </div>
                    <div class="secondary_articles">
                <?php

                // Articles secondaires...
                else: ?>
                    <div>
                        <?php if(has_post_thumbnail()){
                            the_post_thumbnail();
                        } ?>

                        <?php the_title('<h3>', '</h3>'); ?>
                        
                    </div>
                <?php
                endif;
                $postnum++;
                
            endforeach; ?>

        </div>
    </section>
</main>
<?php 
    // get_sidebar();
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