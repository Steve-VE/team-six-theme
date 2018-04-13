<?php 
/**
 * Template Name: category
 */
    get_header(); 
?>
<main>
	<div class="single-box"><h2 class="single"><?php single_cat_title(); ?></h2></div>
	<section class="featured">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



		<div class="post">
			<div class="image-container">
				<a href="<?php echo get_permalink($post)?>">
            	<?php if(has_post_thumbnail()){
            		the_post_thumbnail();
        		 } ?>
                </a>
			</div>

			<div class="content">
		
				<div class="category"><?php the_category(' '); ?></div>

					<h3 class="title">
					<?php the_title(); ?>
					</h3>
		
				</div>	
		
				<?php 
				$text = get_the_excerpt($post);
				$text = wp_trim_words( $text, 22, "..." ); 
				echo $text;
				?>
    
				<a href="" class="share"><i class="fa fa-share"></i> share</a>

			</div>
		</div>

		<?php endwhile; else : ?>


		<p>
			<?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
		</p>


		<?php endif; ?>
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
