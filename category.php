<?php 
/**
 * Template Name: category
 */
    get_header(); 
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<?php if ( in_category( '3' ) ) : ?>
<div class="post">
	<?php else : ?>
	<div class="post">
		<?php endif; ?>

		<h2>
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>
		<small>
			<?php the_time('F jS, Y'); ?> by
			<?php the_author_posts_link(); ?>
		</small>

		<div class="entry">
			<?php the_content(); ?>
		</div>

	

	</div>

	<?php endwhile; else : ?>


	<p>
		<?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
	</p>


	<?php endif; ?>


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