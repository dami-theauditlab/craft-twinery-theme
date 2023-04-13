<?php get_header(); ?>

<?php
/**
* A Simple Category Template
* @version 3.4.0
*/
 
$current_cat = get_queried_object();
get_header(); ?> 
 
<section id="primary" class="site-content">
	<div id="content" role="main">
		<div class="hero-image" style="background-image: url('<?php bloginfo('template_url'); ?>/images/cat-hero-image.jpg')">
			<div class="container">
				<div class="row">
					<div class="col-12">			
					<?php if(is_shop() ) {?>
						<h1>Shop</h1>
					<?php }else { ?>
						<h1> <?php echo $current_cat->name; ?></h1>
					<?php }?> 
					</div>
				</div>
			</div>	
		</div>
	<div class="container">
		<div class="category">
			<?php 
			// Check if there are any posts to display
			if ( have_posts() ) : ?>
			
			<?php if($current_cat->parent) { ?>
				<div class="container description">
					<?php echo category_description($current_cat->ID); ?>
					<a href="<?php echo get_category_link(39); ?>"><div class="cat-button">SEE THE ENTIRE <?php echo get_the_category_by_ID($current_cat->parent); ?> RANGE</div></a>
				</div>
			<?php } ?>
			
			
			<?php
			// Display optional category description
			if ( category_description() ) : ?>
			<div class="archive-meta"><?php echo category_description(); ?></div>
			<?php endif; ?>
			</header>
			
			<?php
			
			// The Loop
			while ( have_posts() ) : the_post(); ?>
			<div class="post">
				<div class="image">
					<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>"></a>
				</div>
				<div class="info">
			
					<?php 
					
			/**
			 * Hook: woocommerce_single_product_summary.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 * @hooked woocommerce_template_single_excerpt - 20
			 * 
			 */
			do_action( 'woocommerce_single_product_summary' );
					?>
				</div>
			</div>
			
			<?php endwhile; 
			
			else: ?>
			<p>Sorry, no posts matched your criteria.</p>
			
			
			<?php endif; ?>
				
			</div>
			<div class="pagination">
				<span>
					<div class="alignleft"><?php previous_posts_link('&laquo; Previous') ?></div>
					<div class="alignright"><?php next_posts_link('Next &raquo;') ?></div>
				</span>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
