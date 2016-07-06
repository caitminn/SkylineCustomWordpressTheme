<?php /* Template Name: Main Page */ ?>
<?php get_header(); ?>


<?php 
if(have_posts()) {
	while(have_posts()) {
		the_post();
?>

		<?php 
		$heroImage = get_field('hero_image');
		?>
<header style='background: linear-gradient(45deg, rgba(173, 133, 181, 0.65) 23%,rgba(181, 99, 159, 0.65) 77%), url("<?php echo $heroImage['url'] ?>") center center no-repeat; background-size: cover;'>

	<nav class="mainNav" id='mainNav'>
		<div class="fa fa-bars fa-2x"></div>
		<h3><?php the_field('nav_name'); ?></h3>
		<?php wp_nav_menu( array(
		    'container' => true,
		    'theme_location' => 'primary'
		)); ?>
	</nav>
	<section class='heroText'>
		<h1 class='animated fadeIn'><?php the_field('hero_text'); ?></h1>
		<h3 class='animated fadeIn'><?php the_field('job_title'); ?></h3>
	</section>
</header>

<section class='about' id='about'>
	<h2><?php the_field('about_title'); ?></h2>
	<section class='aboutContainer wrapper'>
		<aside class='headshot'>
			<?php 
			$headshot = get_field('about_image');
			?>
			<img src="<?php echo $headshot['url']?>" />
		</aside>
		<article class='aboutDesc'>
			<h3><?php the_field('about_tagline'); ?></h3>
			<p><?php the_field('about'); ?></p>
		</article>
	</section>
	
</section>

<section class='portfolio wrapper' id='portfolio'>
	<h2><?php the_field('portfolio_title'); ?></h2>
	<section class='portfolioContainer'>
		<?php 
			$portfolioArgs = array(
				'post_type' => 'portfolio',
				'posts_per_page' => -1,
				'order' => 'DESC',
				// 'orderby' => 'title'
			);
			$portfolioQuery = new WP_Query($portfolioArgs);
				if( $portfolioQuery -> have_posts() ) {
					while( $portfolioQuery -> have_posts() ) {
						$portfolioQuery -> the_post();
		?>
		<section class='portfolioItem'>
			<figure>
				<?php 
				$portfolioImage = get_field('portfolio_image');
				?>
				<img src='<?php echo $portfolioImage["url"]?>' />
			</figure>
			<div class='portfolioContent'>
				<h3><?php the_title(); ?></h3>
				<p><?php the_field('portfolio_description'); ?></p>
				<ul>
					<?php
						while(has_sub_field('portfolio_tags')) {
					?>
					<li><?php the_sub_field('tags')?></li>
					<?php
					}
					?>
			</ul>
			<a href='<?php the_field("portfolio_item_link"); ?>' target="_"><button> View Live</button></a>
			</div>
		</section>

		<?php
					}
				}
			wp_reset_postdata();
		?>
	</section>
</section>

<section class='skills' id='skills'>
	<h2><?php the_field('skills_title'); ?></h2>
	<section class='skillContainer wrapper'>
		<div class='skill'>
			<span><?php the_field('skill1_icon'); ?></span>
			<h4><?php the_field('skill1_title'); ?><h4>
		</div>
		<div class='skill'>
			<span><?php the_field('skill2_icon'); ?></span>
			<h4><?php the_field('skill2_title'); ?><h4>
		</div>
		<div class='skill'>
			<span><?php the_field('skill3_icon'); ?></span>
			<h4><?php the_field('skill3_title'); ?><h4>
		</div>
		<div class='skill'>
			<span><?php the_field('skill4_icon'); ?></span>
			<h4><?php the_field('skill4_title'); ?><h4>
		</div>
		<div class='skill'>
			<span><?php the_field('skill5_icon'); ?></span>
			<h4><?php the_field('skill5_title'); ?><h4>
		</div>
		<div class='skill'>
			<span><?php the_field('skill6_icon'); ?></span>
			<h4><?php the_field('skill6_title'); ?><h4>
		</div>
		<div class='skill'>
			<span><?php the_field('skill7_icon'); ?></span>
			<h4><?php the_field('skill7_title'); ?><h4>
		</div>
		<div class='skill'>
			<span><?php the_field('skill8_icon'); ?></span>
			<h4><?php the_field('skill8_title'); ?><h4>
		</div>
		<div class='skill'>
			<span><?php the_field('skill9_icon'); ?></span>
			<h4><?php the_field('skill9_title'); ?><h4>
		</div>
	</section>
</section>

<section class='contact' id='contact'>
	<h2><?php the_field('contact_title'); ?></h2>
	<section class='contactContainer wrapper'>
		<aside class='contactInfo'>
			<h3><?php the_field('contact_info'); ?></h3>
			<span>
				<div class='icon'><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i></div>
				<p><?php the_field('address'); ?></p>
			</span>
			<span>
				<div class='icon'><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></div>
				<p><?php the_field('email_address'); ?></p>
			</span>
			<span>
				<div class='icon'><i class="fa fa-arrow-down" aria-hidden="true"></i></i></div>
				
				<p><a href="http://itscaitlinlucy.com/wp-content/themes/hackeryou_theme/images/CaitlinMacMinn.pdf" target="_">Download My Resume</a></p>
			</span>
		</aside>
		<section class='contactForm'>
			<h3><?php the_field('contact_form_title'); ?></h3>
			<form action="http://www.focuspocus.io/magic/72feebeb74fc2c5eba3f55941579214a" method="POST">
			<div class='formInputs'>
				<input type="text" name="Name" placeholder="Name">
				<input type="email" name="Email Address" placeholder="Email">
			</div>
			<div class="formMessage"> 
				<textarea cols="30" rows="10" name="Message" placeholder="Please enter your message here..."></textarea>
				<input type="submit" value="Send">
			</div>
			</form>
		</section>
	</section>
</section>

<section class='socialFooter'>
	<div class='wrapper'>
		<?php wp_nav_menu( array(
			'container' => false,
			'theme_location' => 'footer'
		)); ?>
	</div>
	
</section>

<?php
	} //End while 
} //End if
?>


<?php get_footer(); ?>