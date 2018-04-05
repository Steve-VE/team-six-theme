<?php
/*
Template Name: Archives
*/
get_header(); ?>
<main>


<!-- template archiche.php de base proposé par la doc wordpress -->
<div id="container">
	<div id="content" role="main">
       
		<h2>Tu es dans archive.php</h2>
		<?php the_post(); ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		
		<?php get_search_form(); ?>
		
		<h2>Archives by Month:</h2>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
		
		<h2>Archives by Subject:</h2>
		<ul>
			 <?php wp_list_categories(); ?>
		</ul>
        
	</div><!-- #content -->
</div><!-- #container -->



</main>
<?php get_sidebar(); ?>


<?php
get_footer();
?>