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
<header style='background: url("<?php echo $heroImage['url'] ?>") center center no-repeat; background-size: cover;'>

	<nav class="mainNav container" id='mainNav'>
		<div class='row'>
			<h5 class='three columns'><?php the_field('business_name'); ?></h5>
			<?php wp_nav_menu( array(
			    'container' => true,
			    'theme_location' => 'primary'
			)); ?>
		</div>
	</nav>
	<section class='heroText'>
		<h1 class=''><?php the_field('header_hero_text'); ?></h1>
		<h3 class=''><?php the_field('header_tagline'); ?></h3>
	</section>
</header>

<section class='about container' id='about'>
	<h2><?php the_field('about_title'); ?></h2>
	<?php 
		$aboutImage = get_field('about_background_image');
	?>
	<section class='aboutContainer row' style='background: radial-gradient(ellipse at center, rgba(135,170,175,0) 0%,rgba(114,168,176,0) 20%,rgba(30,159,180,1) 100%), url("<?php echo $aboutImage['url'] ?>") center center no-repeat; background-size: cover;'>
		<div class='six columns'>
			<h3><?php the_field('about_tagline'); ?></h3>
			<p><?php the_field('about_content'); ?></p>
		</div>
	</section>
	
</section>

<section class='services container' id='services'> 
	<h2><?php the_field('services_title'); ?></h2>
	<section class='servicesContainer row'> 
		<div class='servicesContent three columns'>
			<p><?php the_field('service_1_icon'); ?></p>
			<h5><?php the_field('service_1_title'); ?></h5>
			<p><?php the_field('service_1_description'); ?></p>
		</div>
		<div class='servicesContent three columns'>
			<p><?php the_field('service_2_icon'); ?></p>
			<h5><?php the_field('service_2_title'); ?></h5>
			<p><?php the_field('service_2_description'); ?></p>
		</div>
		<div class='servicesContent three columns'>
			<p><?php the_field('service_3_icon'); ?></p>
			<h5><?php the_field('service_3_title'); ?></h5>
			<p><?php the_field('service_3_description'); ?></p>
		</div>
		<div class='servicesContent three columns'>
			<p><?php the_field('service_4_icon'); ?></p>
			<h5><?php the_field('service_4_title'); ?></h5>
			<p><?php the_field('service_4_description'); ?></p>
		</div>
	</section>
</section>

<section class='portfolio container' id='portfolio'>
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

<section class='team container' id='team'>
	<h2><?php the_field('team_title'); ?></h2>
	<section class='teamContainer row'> 
		<div class='teamContent three columns'>
			<?php 
			$teamMember1 = get_field('team_member_1_photo');
			?>
			<img src="<?php echo $teamMember1['url']?>" />
			<h5><?php the_field('team_member_1_name'); ?></h5>
			<p><?php the_field('team_member_1_title'); ?></p>
			<span>
				<a href=" <?php the_field('team_member_1_social_link_1'); ?> "> <?php the_field('team_member_1_social_icon_1'); ?></a>
			</span>
			<span>
				<a href=" <?php the_field('team_member_1_social_link_2'); ?> "> <?php the_field('team_member_1_social_icon_2'); ?></a>
			</span>
			<span>
				<a href=" <?php the_field('team_member_1_social_link_3'); ?> "> <?php the_field('team_member_1_social_icon_3'); ?></a>
			</span>
		</div>
		<div class='teamContent three columns'>
			<?php 
			$teamMember2 = get_field('team_member_2_photo');
			?>
			<img src="<?php echo $teamMember2['url']?>" />
			<h5><?php the_field('team_member_2_name'); ?></h5>
			<p><?php the_field('team_member_2_title'); ?></p>
			<span>
				<a href=" <?php the_field('team_member_2_social_link_1'); ?> "> <?php the_field('team_member_2_social_icon_1'); ?></a>
			</span>
			<span>
				<a href=" <?php the_field('team_member_2_social_link_2'); ?> "> <?php the_field('team_member_2_social_icon_2'); ?></a>
			</span>
			<span>
				<a href=" <?php the_field('team_member_2_social_link_3'); ?> "> <?php the_field('team_member_2_social_icon_3'); ?></a>
			</span>
		</div>
		<div class='teamContent three columns'>
			<?php 
			$teamMember3 = get_field('team_member_3_photo');
			?>
			<img src="<?php echo $teamMember3['url']?>" />
			<h5><?php the_field('team_member_3_name'); ?></h5>
			<p><?php the_field('team_member_3_title'); ?></p>
			<span>
				<a href=" <?php the_field('team_member_3_social_link_1'); ?> "> <?php the_field('team_member_3_social_icon_1'); ?></a>
			</span>
			<span>
				<a href=" <?php the_field('team_member_3_social_link_2'); ?> "> <?php the_field('team_member_3_social_icon_2'); ?></a>
			</span>
			<span>
				<a href=" <?php the_field('team_member_3_social_link_3'); ?> "> <?php the_field('team_member_3_social_icon_3'); ?></a>
			</span>
		</div>
		<div class='teamContent three columns'>
			<?php 
			$teamMember4 = get_field('team_member_4_photo');
			?>
			<img src="<?php echo $teamMember4['url']?>" />
			<h5><?php the_field('team_member_4_name'); ?></h5>
			<p><?php the_field('team_member_4_title'); ?></p>
			<span>
				<a href=" <?php the_field('team_member_4_social_link_1'); ?> "> <?php the_field('team_member_4_social_icon_1'); ?></a>
			</span>
			<span>
				<a href=" <?php the_field('team_member_4_social_link_2'); ?> "> <?php the_field('team_member_4_social_icon_2'); ?></a>
			</span>
			<span>
				<a href=" <?php the_field('team_member_4_social_link_3'); ?> "> <?php the_field('team_member_4_social_icon_3'); ?></a>
			</span>
		</div>
	</section>
</section>

<section class='counter container'> 
	<section class='row'> 
		<div class='counterContent three columns'>
			<span><?php the_field('counter_1_number'); ?></span>
			<h6><?php the_field('counter_1_title'); ?></h6>
		</div>
		<div class='counterContent three columns'>
			<span><?php the_field('counter_2_number'); ?></span>
			<h6><?php the_field('counter_2_title'); ?></h6>
		</div>
		<div class='counterContent three columns'>
			<span><?php the_field('counter_3_number'); ?></span>
			<h6><?php the_field('counter_3_title'); ?></h6>
		</div>
		<div class='counterContent three columns'>
			<span><?php the_field('counter_4_number'); ?></span>
			<h6><?php the_field('counter_4_title'); ?></h6>
		</div>
	</section>
</section>

<section class='testimonials container' id='testimonials'>
	<h2><?php the_field('testimonials_title'); ?></h2>
	<section class='testimonialsContainer row'> 
		<div class='testimonialsContent four columns'>
			<div class='endorserContent'>
				<p><?php the_field('testimonial_1_content'); ?></p>
			</div>
			<?php 
			$endorser1 = get_field('testimonial_1_endorser_image');
			?>
			<img src="<?php echo $endorser1['url']?>" />
			<h6><?php the_field('testimonial_1_endorser_name'); ?></h6>
			<p><?php the_field('testimonial_1_endorser_job_title'); ?></p>
		</div>
		<div class='testimonialsContent four columns'>
			<div class='endorserContent'>
				<p><?php the_field('testimonial_2_content'); ?></p>
			</div>
			<?php 
			$endorser2 = get_field('testimonial_2_endorser_image');
			?>
			<img src="<?php echo $endorser2['url']?>" />
			<h6><?php the_field('testimonial_2_endorser_name'); ?></h6>
			<p><?php the_field('testimonial_2_endorser_job_title'); ?></p>
		</div>
		<div class='testimonialsContent four columns'>
			<div class='endorserContent'>
				<p><?php the_field('testimonial_3_content'); ?></p>
			</div>
			<?php 
			$endorser3 = get_field('testimonial_3_endorser_image');
			?>
			<img src="<?php echo $endorser3['url']?>" />
			<h6><?php the_field('testimonial_3_endorser_name'); ?></h6>
			<p><?php the_field('testimonial_3_endorser_job_title'); ?></p>
		</div>
	</section>
</section> 

<section class='contact container' id='contact'>
	<h2><?php the_field('contact_title'); ?></h2>
	<section class='contactContainer row'>
		<aside class='contactInfo four columns'>
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
		<section class='contactForm eight columns'>
			<h3><?php the_field('contact_form_title'); ?></h3>
			<form action="http://www.focuspocus.io/magic/72feebeb74fc2c5eba3f55941579214a" method="POST">
			<div class='formInputs'>
				<input type="text" name="Name" placeholder="Name">
				<input type="email" name="Email Address" placeholder="Email">
			</div>
			<div class="formMessage"> 
				<textarea cols="30" rows="10" name="Message" placeholder="Message"></textarea>
				<input type="submit" value="Send">
			</div>
			</form>
		</section>
	</section>
</section>

<section class='socialFooter container'>
	<div class='row'>
		<?php wp_nav_menu( array(
			'container' => false,
			'theme_location' => 'secondary'
		)); ?>
	</div>
	
</section>

<?php
	} //End while 
} //End if
?>


<?php get_footer(); ?>