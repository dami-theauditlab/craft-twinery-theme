<?php /* Template Name: Contact Us*/ ?>
<?php get_header(); ?>

<?php 
	$contact_hero_image 	= get_field('contact_hero_image');
	$contact_hero_title 	= get_field('contact_hero_title');

	$contact_text			= get_field('contact_text');

	$contact_icon_1			= get_field('contact_icon_1');
	$contact_icon_1_text	= get_field('contact_icon_1_text');
	$contact_icon_2			= get_field('contact_icon_2');
	$contact_icon_2_text	= get_field('contact_icon_2_text');
	$contact_icon_3			= get_field('contact_icon_3');
	$contact_icon_3_text	= get_field('contact_icon_3_text');
	$contact_icon_bg 		= get_field('contact_icon_bg');
?>

	<section id="contact-page">
		<div class="hero-image" style="background-image: url('<?php echo $contact_hero_image['url']; ?>')">
			<div class="container">
				<div class="row">
					<div class="col-12">			
						<h1 class="title"><?php echo $contact_hero_title; ?><h1>
					</div>
				</div>
			</div>	
		</div>
		<div>
			<div class="container">
				<div class="three-section-div">
					<div><img class="address" src="<?php bloginfo('template_url'); ?>/images/address.png" alt="Address logo"></div>
					<div>
						<h3>Address</h3>
						<div class="text">
							<p>
								Unit 19,
								<br> 
								Morris Green Business Park
								<br>
								Prescott Street
								<br>
								Bolton
								<br>
								BL3 3PE
							</p>
						</div>
					</div>
				</div>
				<div class="three-section-div">
					<div><img class="phone"  src="<?php bloginfo('template_url'); ?>/images/phone-icon.png" alt="Phone logo"></div>
					<div>
						<h3>Telephone</h3>
						<div>
							<p>
								<span>01204 897642</span>
								<br>
								Lines open Monday - Friday <br>
								8:00 - 18:00
							</p>
						</div>
					</div>
				</div>
				<div class="three-section-div">
					<div><img class="email" src="<?php bloginfo('template_url'); ?>/images/email.png" alt="Email logo"></div>
					<div>
						<h3>Email</h3>
						<div>
							info@crafttwinery.co.uk <br>
							contact us via email 24/7
						</div>
				</div>
				</div>
			</div>
			<div class="form-section">
				<div class="container">
					<h2 class="form-title">Have a question? Drop us a line</h2>
					<div class="form">
						<?php echo do_shortcode('[contact-form-7 id="96" title="Contact Form"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>