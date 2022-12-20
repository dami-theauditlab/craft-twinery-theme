<?php /* Template Name: Search Page*/ ?>
<?php get_header(); ?>

<?php 
	$search_page 	= get_field('search_page');

	$search_page_hero_section 	= get_field('search_page_hero_section');
	$search_page_hero_image 	= get_field('search_page_hero_image');
	$search_page_hero_title 	= get_field('search_page_hero_title');
?>

	<section id="search_page">
		<?php if ( $search_page_hero_section === 'yes') { ?>
			<div class="hero-image" style="background-image: url('<?php echo $search_page_hero_image['url']; ?>')">
				<div class="container">
					<div class="row">
						<div class="col-12">			
							<h1 class="title"><?php echo $search_page_hero_title; ?></h1>
						</div>
					</div>
				</div>	
			</div>
		<?php
            } 
        ?> 
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>Search our store</h2>
                    <?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</section>
	

<?php get_footer(); ?>