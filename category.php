<?php
/*
Template Name: Category
page qui s'affiche quand on clique sur un lien du menu
*/
get_header(); ?>


<div class="content">
    <h2><?php single_cat_title(); ?></h2>
    <?php if (have_posts()):while (have_posts()):the_post();?>
        <article class="post" id="post-<?php the_ID();?>">
            <p><a href="<?php the_permalink();?>"><?php the_title();?><?php the_content();?></a></p>
        </article>
    <?php endwhile;else: ?>
        <p> Sorry, there is no post in the categoriy</p>
    <?php endif; ?>
</div>

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



