<?php get_header(); ?>


	<div class="fixd-menu">
		
		<?php wp_nav_menu( 
	array(
		'theme_location' => 'main-menu',
		
	)
 ); ?>

	</div>


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="container">
			<?php the_content( ); ?> 	
		</div>

	<?php endwhile; endif; ?>


<?php get_footer(); ?>