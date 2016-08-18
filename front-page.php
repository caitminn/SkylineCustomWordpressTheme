<?php /* Template Name: Main Page */ ?>
<?php get_header(); ?>


<?php 
if(have_posts()) {
	while(have_posts()) {
		the_post();
?>

<header id='home'>
	<nav class='mainNav' id='mainNav'>
		<div class="fa fa-bars fa-2x"></div>
		<section class='container'>
			<div class='row'>
				<div class='three columns'>
					<h3><?php the_field('menu_business_name'); ?></h3>
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
				<h1>We Are <span><?php the_field('hero_business_name'); ?></span></h1>
				<h4>A Full Service Creative Digital Agency</h4>
				<div class='buttonContainer'>
					<?php $url = site_url('/#about', 'http'); ?>
					<a href='<?php echo $url; ?>'><button>Learn More</button></a>
				</div>
			</div>
		</section>
	</section>
</header>

<!-- ABOUT SECTION -->
<section class='about' id='about'>
	<section class='container'>
		<div class='sectionTitle'>
			<h2>About Us</h2>
			<hr>
		</div>
		<section class='aboutContainer row'>
			<div class='six columns'>
				<h3>We Love to Create Beautiful Digital Experiences</h3>
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
			<h2>Our Services</h2>
			<hr>
		</div>
		<section class='servicesContainer row'> 
			<div class='servicesContent three columns'>
				<span><?php the_field('service:_design_icon'); ?></span>
				<h4>Design</h4>
				<p><?php the_field('service:_design_description'); ?></p>
			</div>
			<div class='servicesContent three columns'>
				<span><?php the_field('service:_development_icon'); ?></span>
				<h4>Development</h4>
				<p><?php the_field('service:_development_description'); ?></p>
			</div>
			<div class='servicesContent three columns'>
				<span><?php the_field('service:_ecommerce_icon'); ?></span>
				<h4>Ecommerce</h4>
				<p><?php the_field('service:_ecommerce_description'); ?></p>
			</div>
			<div class='servicesContent three columns'>
				<span><?php the_field('service:_branding_icon'); ?></span>
				<h4>Branding</h4>
				<p><?php the_field('service:_branding_description'); ?></p>
			</div>
		</section> <!-- close .servicesContainer -->
	</section> <!-- close .container -->
</section> <!-- close .services -->
<!-- SERVICES ENDS -->

<!-- PORTFOLIO SECTION -->
<section class='portfolio' id='portfolio'>
	<section class='container'>
		<div class='sectionTitle'>
			<h2>Our Portfolio</h2>
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
			<h2>Our Team</h2>
			<hr>
		</div>
		<section class='teamContainer row'> 
			<?php 
				$teamArgs = array(
					'post_type' => 'teammembers',
					'posts_per_page' => 4,
					'order' => 'ASC'
				);
				$teamQuery = new WP_Query($teamArgs);
					if( $teamQuery -> have_posts() ) {
						while( $teamQuery -> have_posts() ) {
							$teamQuery -> the_post();
			?>
			<div class='teamContent three columns'>
				<?php $teamMemberImage = get_field('image'); ?>
				<img src=" <?php echo $teamMemberImage['url']?> "/>
				<h5><?php the_field('name'); ?></h5>
				<p><?php the_field('job_title'); ?></p>
				<div class='socialIcons'>
					<span>
						<a href=" <?php the_field('social_media_link_1'); ?> "> <?php the_field('social_media_icon_1'); ?></a>
					</span>
					<span>
						<a href=" <?php the_field('social_media_link_2'); ?> "> <?php the_field('social_media_icon_2'); ?></a>
					</span>
					<span>
						<a href=" <?php the_field('social_media_link_3'); ?> "> <?php the_field('social_media_icon_3'); ?></a>
					</span>
				</div>
			</div>
					<?php
				}
			}
			wp_reset_postdata();
        ?>
		</section> <!-- close .teamContainer -->
	</section> <!-- close .container -->
</section> <!-- close .team -->
<!-- TEAM ENDS -->

<!-- COUNTER SECTION -->
<section class='achievements'> 
	<section class='container'>
		<section class='row'> 
			<div class='achievementsContent three columns'>
				<span><?php the_field('achievement:_number_of_happy_clients'); ?></span>
				<h4>Happy Clients</h4>
			</div>
			<div class='achievementsContent three columns'>
				<span><?php the_field('achievement:_number_of_completed_projects'); ?></span>
				<h4>Projects Completed</h4>
			</div>
			<div class='achievementsContent three columns'>
				<span><?php the_field('achievement:_number_of_awards_won'); ?></span>
				<h4>Awards Won</h4>
			</div>
			<div class='achievementsContent three columns'>
				<span><?php the_field('achievement:_years_of_experience'); ?></span>
				<h4>Years Experience</h4>
			</div>
		</section> <!-- close .counterContainer -->
	</section> <!-- close .container -->
</section> <!-- close .counter -->
<!-- COUNTER ENDS -->

<!-- TESTIMONIALS SECTION -->
<section class='testimonials' id='testimonials'>
	<section class='container'>
		<div class='sectionTitle'>
			<h2>Testimonials</h2>
			<hr>
		</div>
		<section class='testimonialsContainer row'> 
			<?php 
				$testimonialArgs = array(
					'post_type' => 'testimonials',
					'posts_per_page' => 3,
					'order' => 'ASC'
				);
				$testimonialQuery = new WP_Query($testimonialArgs);
					if( $testimonialQuery -> have_posts() ) {
						while( $testimonialQuery -> have_posts() ) {
							$testimonialQuery -> the_post();
			?>
			<div class='testimonialsContent four columns'>
				<blockquote><p><?php the_field('testimonial_content'); ?></p></blockquote>
				<?php $endorser = get_field('endorser_image'); ?>
				<div class='endorserContent'>
					<img class='endorser' src="<?php echo $endorser['url']?>" />
					<div class='content'>
						<h6><?php the_field('endorser_name'); ?></h6>
						<p><?php the_field('endorser_job_title'); ?></p>
					</div>
				</div>
			</div>
					<?php
				}
			}
			wp_reset_postdata();
        ?>
		</section> <!-- close .testimonialsContainer -->
	</section> <!-- close .container -->
</section> <!-- close .testimonials -->
<!-- TESTIMONIALS ENDS -->

<!-- CONTACT SECTION -->
<section class='contact' id='contact'>
	<section class='container'>
		<div class='sectionTitle'>
			<h2>Contact Us</h2>
			<hr>
		</div>
		<section class='contactContainer row'>
			<aside class='contactInfo four columns'>
				<h3>Contact Info</h3>
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
				<h3>Send Us A Message</h3>
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