<?php /* Template Name: Main Page */ ?>
<?php get_header(); ?>


<?php 
if(have_posts()) {
	while(have_posts()) {
		the_post();
?>

<?php $heroImage = get_field('hero_image'); ?>
<header id='home' style='background: linear-gradient(45deg, rgba(30,159,180,0.15) 0%,rgba(30,159,180,0.25) 100%), url("<?php echo $heroImage['url'] ?>") center center no-repeat; background-size: cover;'>

	<nav class='mainNav' id='mainNav'>
		<div class="fa fa-bars fa-2x"></div>
		<section class='container'>
			<div class='row'>
				<div class='three columns'>
					<h3><?php the_field('business_name'); ?></h3>
				</div>
				<div class='nine columns'>
					<?php wp_nav_menu( array(
					    'container' => true,
					    'theme_location' => 'primary'
					)); ?>
				</div>
			</div>
		</section>
	</nav>
	<section class='heroText'>
		<section class='container'>
			<div class='row'>
				<h1 class=''><?php the_field('header_hero_text'); ?></h1>
				<h4 class=''><?php the_field('header_tagline'); ?></h4>
				<div class='buttonContainer'>
					<?php $url = site_url('/#about', 'http'); ?>
					<a href='<?php echo $url; ?>'><button><?php the_field('button_content'); ?></button></a>
				</div>
			</div>
		</section>
	</section>
</header>

<!-- ABOUT SECTION -->
<?php $aboutImage = get_field('about_background_image'); ?>
<section class='about' id='about' style='background: radial-gradient(circle at 65%,rgba(135,170,175,0.7) 15%,rgba(114,168,176,0.9) 30%,#1e9fb4 60%), url("<?php echo $aboutImage['url'] ?>") center center no-repeat; background-size: cover;'>
	<section class='container'>
		<div class='sectionTitle'>
			<h2><?php the_field('about_title'); ?></h2>
			<hr>
		</div>
		<section class='aboutContainer row'>
			<div class='six columns'>
				<h3><?php the_field('about_tagline'); ?></h3>
				<p><?php the_field('about_content'); ?></p>
			</div>
		</section> <!-- close .aboutContainer -->
	</section> <!-- close .container -->
</section> <!-- close .about -->
<!-- ABOUT ENDS -->

<!-- SERVICES SECTION -->
<section class='services' id='services'> 
	<section class='container'> 
		<div class='sectionTitle'>
			<h2><?php the_field('services_title'); ?></h2>
			<hr>
		</div>
		<section class='servicesContainer row'> 
			<div class='servicesContent three columns'>
				<span><?php the_field('service_1_icon'); ?></span>
				<h4><?php the_field('service_1_title'); ?></h4>
				<p><?php the_field('service_1_description'); ?></p>
			</div>
			<div class='servicesContent three columns'>
				<span><?php the_field('service_2_icon'); ?></span>
				<h4><?php the_field('service_2_title'); ?></h4>
				<p><?php the_field('service_2_description'); ?></p>
			</div>
			<div class='servicesContent three columns'>
				<span><?php the_field('service_3_icon'); ?></span>
				<h4><?php the_field('service_3_title'); ?></h4>
				<p><?php the_field('service_3_description'); ?></p>
			</div>
			<div class='servicesContent three columns'>
				<span><?php the_field('service_4_icon'); ?></span>
				<h4><?php the_field('service_4_title'); ?></h4>
				<p><?php the_field('service_4_description'); ?></p>
			</div>
		</section> <!-- close .servicesContainer -->
	</section> <!-- close .container -->
</section> <!-- close .services -->
<!-- SERVICES ENDS -->

<!-- PORTFOLIO SECTION -->
<section class='portfolio' id='portfolio'>
	<section class='container'>
		<div class='sectionTitle'>
			<h2><?php the_field('portfolio_title'); ?></h2>
			<hr>
		</div>
		<section class='portfolioContainer row'>
			<?php 
				$portfolioArgs = array(
					'post_type' => 'portfolio',
					'posts_per_page' => -1,
					'order' => 'ASC'
				);
				$portfolioQuery = new WP_Query($portfolioArgs);
					if( $portfolioQuery -> have_posts() ) {
						while( $portfolioQuery -> have_posts() ) {
							$portfolioQuery-> the_post();
			?>
				<section class='portfolioItem three columns'>
					<?php $portfolioImage = get_field('image'); ?>
					<figure class='portfolioImage'>
						<a href="<?php the_permalink() ?>">
							<img src="<?php echo $portfolioImage['url']?>" />
							<figcaption><h4><?php the_title(); ?></h4></figcaption>
						</a>							
					</figure>
				</section>
					<?php
				}
			}
			wp_reset_postdata();
        ?>
		</section> <!-- close .portfolioContainer -->
	</section> <!-- close .container -->
</section> <!-- close .portfolio -->
<!-- PORTFOLIO ENDS -->

<!-- TEAM SECTION -->
<section class='team' id='team'>
	<section class='container'>
		<div class='sectionTitle'>
			<h2><?php the_field('team_title'); ?></h2>
			<hr>
		</div>
		<section class='teamContainer row'> 
			<div class='teamContent three columns'>
				<?php $teamMember1 = get_field('team_member_1_photo'); ?>
				<img src="<?php echo $teamMember1['url']?> "/>
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
				<?php $teamMember2 = get_field('team_member_2_photo'); ?>
				<img src=" <?php echo $teamMember2['url']?> "/>
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
				<?php $teamMember3 = get_field('team_member_3_photo'); ?>
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
				<?php $teamMember4 = get_field('team_member_4_photo'); ?>
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
		</section> <!-- close .teamContainer -->
	</section> <!-- close .container -->
</section> <!-- close .team -->
<!-- TEAM ENDS -->

<!-- COUNTER SECTION -->
<section class='counter'> 
	<section class='container'>
		<section class='row'> 
			<div class='counterContent three columns'>
				<span><?php the_field('counter_1_number'); ?></span>
				<h4><?php the_field('counter_1_title'); ?></h4>
			</div>
			<div class='counterContent three columns'>
				<span><?php the_field('counter_2_number'); ?></span>
				<h4><?php the_field('counter_2_title'); ?></h4>
			</div>
			<div class='counterContent three columns'>
				<span><?php the_field('counter_3_number'); ?></span>
				<h4><?php the_field('counter_3_title'); ?></h4>
			</div>
			<div class='counterContent three columns'>
				<span><?php the_field('counter_4_number'); ?></span>
				<h4><?php the_field('counter_4_title'); ?></h4>
			</div>
		</section> <!-- close .counterContainer -->
	</section> <!-- close .container -->
</section> <!-- close .counter -->
<!-- COUNTER ENDS -->

<!-- TESTIMONIALS SECTION -->
<section class='testimonials' id='testimonials'>
	<section class='container'>
		<div class='sectionTitle'>
			<h2><?php the_field('testimonials_title'); ?></h2>
			<hr>
		</div>
		<section class='testimonialsContainer row'> 
			<div class='testimonialsContent four columns'>
				<blockquote><p><?php the_field('testimonial_1_content'); ?></p></blockquote>
				<?php $endorser1 = get_field('testimonial_1_endorser_image'); ?>
				<div class='endorserContent'>
					<img src="<?php echo $endorser1['url']?>" />
					<h6><?php the_field('testimonial_1_endorser_name'); ?></h6>
					<p><?php the_field('testimonial_1_endorser_job_title'); ?></p>
				</div>
			</div>
			<div class='testimonialsContent four columns'>
				<blockquote><p><?php the_field('testimonial_2_content'); ?></p></blockquote>
				<?php $endorser2 = get_field('testimonial_2_endorser_image'); ?>
				<div class='endorserContent'>
					<img src="<?php echo $endorser2['url']?>" />
					<h6><?php the_field('testimonial_2_endorser_name'); ?></h6>
					<p><?php the_field('testimonial_2_endorser_job_title'); ?></p>
				</div>
			</div>
			<div class='testimonialsContent four columns'>
				<blockquote><p><?php the_field('testimonial_3_content'); ?></p></blockquote>
				<?php $endorser3 = get_field('testimonial_3_endorser_image'); ?>
				<div class='endorserContent'>
					<img src="<?php echo $endorser3['url']?>" />
					<h6><?php the_field('testimonial_3_endorser_name'); ?></h6>
					<p><?php the_field('testimonial_3_endorser_job_title'); ?></p>
				</div>
			</div>
		</section> <!-- close .testimonialsContainer -->
	</section> <!-- close .container -->
</section> <!-- close .testimonials -->
<!-- TESTIMONIALS ENDS -->

<!-- CONTACT SECTION -->
<section class='contact' id='contact'>
	<section class='container'>
		<div class='sectionTitle'>
			<h2><?php the_field('contact_title'); ?></h2>
			<hr>
		</div>
		<section class='contactContainer row'>
			<aside class='contactInfo four columns'>
				<h3><?php the_field('contact_info_title'); ?></h3>
				<div class=''>
					<span>
						<div class='icon'><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i></div>
						<p><?php the_field('address'); ?></p>
					</span>
					<span>
						<div class='icon'><i class="fa fa-envelope fa-2x" aria-hidden="true"></i></div>
						<p><a href='mailto:<?php the_field("email_address"); ?>'><?php the_field("email_address"); ?></a></p>
					</span>
					<span>
						<div class='icon'><i class="fa fa-phone fa-2x" aria-hidden="true"></i></div>
						<p><?php the_field('phone_number'); ?></p>
					</span>
				</div>
			</aside>
			<section class='contactForm eight columns'>
				<h3><?php the_field('contact_form_title'); ?></h3>
				<form action="http://www.focuspocus.io/magic/72feebeb74fc2c5eba3f55941579214a" method="POST">
				<div class='formInputs row'>
					<div class='six columns'>
						<input type="text" name="Name" placeholder="Name">
					</div>
					<div class='six columns'>
						<input type="email" name="Email Address" placeholder="Email">
					</div>
				</div>
				<div class="formMessage row"> 
					<textarea cols="30" rows="4" name="Message" placeholder="Message"></textarea>
					<input type="submit" value="Send Message">
				</div>
				</form>
			</section>
		</section> <!-- close .contactContainer -->
	</section> <!-- close .container -->
</section> <!-- close .contact -->
<!-- CONTACT ENDS -->

<!-- SOCIAL SECTION -->
<section class='socialFooter'>
	<section class='container'>
		<section class='row'>
			<?php wp_nav_menu( array(
				'container' => false,
				'theme_location' => 'secondary'
			)); ?>
		</section>
	</section>
</section>

<?php
	} //End while 
} //End if
?>


<?php get_footer(); ?>