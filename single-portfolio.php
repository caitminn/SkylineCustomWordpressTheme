<?php get_header(); ?>

<section>
	<?php 
		if(have_posts()) {
			while(have_posts()) {
				the_post();
	?> 
	<section class='container'>
		<section class='portfolioSingleItem'>
			<h2><?php the_title(); ?></h2>
			<p><?php the_field('tagline'); ?></p>
			<?php $portfolioImage = get_field('image'); ?>
			<img src="<?php echo $portfolioImage['url']?>" />
			<p><?php the_field('description'); ?></p>
			<div class='buttonContainer'>
				<?php $url = site_url('/#portfolio', 'http'); ?>
				<a href='<?php echo $url; ?>'><button><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</button></a>
			</div>
						<?php
					}
				}
			?>
		</section>
	</section>
</section>	

<?php get_footer(); ?>