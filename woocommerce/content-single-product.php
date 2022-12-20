<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

?>
<section id="productSingleTemplateCs">
	<div class="hero-image" style="background-image: url('<?php bloginfo('template_url'); ?>/images/hero-image.jpg')">
		<div class="container">
			<div class="row">
				<div class="col-12">			
					<h1 class="title">Product Details</h1>
				</div>
			</div>
		</div>	
	</div>
	<div class="container">
		<?php

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<div class="product-info">
		<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
		?>
		<div class="summary entry-summary">
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

</div>
	</div>
    <section id="account-block">
    <div class="container">
        <div class="cart-div">
            <span class="title">
                <img src="<?php bloginfo('template_url'); ?>/images/basket.png" alt="Basket Icon">
                <h2>Your Cart</h2>
            </span>
            <p><?php echo count(WC()->cart->get_cart()); ?> Products in cart</p>
            <p>Total <strong>£<?php echo WC()->cart->get_cart_contents_total(); ?></strong></p>
            <a href="/basket"><div class="button">CHECKOUT</div></a>
        </div>
        <div class="account-div">
            <span class="title">
                <img src="<?php bloginfo('template_url'); ?>/images/lock.png" alt="Lock Icon">
                <h2>Your Account</h2>
            </span>
            <?php if(is_user_logged_in()) { ?>
                <p>Logged in</p>
                <a href="/my-account/"><div class="button">MY ACCOUNT</div></a>
            <?php } ?>
            <?php if(!is_user_logged_in()) { ?>
                <p>Not logged in</p>
                <a href="/my-account/"><div class="button">LOGIN</div></a>
            <?php } ?>
        </div>
    </div>
</section>
</section>
<?php do_action( 'woocommerce_after_single_product' ); ?>


