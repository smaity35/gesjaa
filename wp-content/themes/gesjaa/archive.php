<?php get_header(); ?>

<div class="post-container">
	<div class="page-title"><h1 data-text="<?php single_cat_title();  ?>"><?php single_cat_title();  ?></h1></div>
	<div class="container">
		
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="card">
			<h3><?php //the_title(); ?></h3>
			<?php the_excerpt(); ?> 	
		
			<img src="<?php echo get_the_post_thumbnail_url(); ?>">	
			</div>
		<?php endwhile; endif; ?>		

	</div>

</div>
<?php get_footer(); ?>