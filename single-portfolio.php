<?php get_header(); ?>

<section class=''>
	<?php 
		if(have_posts()) {
			while(have_posts()) {
				the_post();
	?> 
	<section class='container'>
		<section class='portfolioItem row'>
			<h2><?php the_title(); ?></h2>
			<p><?php the_field('tagline'); ?></p>
			<?php $portfolioImage = get_field('image'); ?>
			<img src="<?php echo $portfolioImage['url']?>" />
			<p><?php the_field('description'); ?></p>
						<?php
					}
				}
			?>
		</section>
	</section>
</section>	

<?php get_footer(); ?>