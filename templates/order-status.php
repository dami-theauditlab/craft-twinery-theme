<?php /* Template Name: Order Status Page*/ ?>
<?php get_header(); ?>

<?php 
	$order_status 	= get_field('order_status');

	$order_status_hero_section 	= get_field('order_status_hero_section');
	$order_status_hero_image 	= get_field('order_status_hero_image');
	$order_status_hero_title 	= get_field('order_status_hero_title');
?>

	<section id="order_status">
		<?php if ( $order_status_hero_section === 'yes') { ?>
			<div class="hero-image" style="background-image: url('<?php echo $order_status_hero_image['url']; ?>')">
				<div class="container">
					<div class="row">
						<div class="col-12">			
							<h1 class="title"><?php echo $order_status_hero_title; ?></h1>
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
                    <div class="verification">
                        <h2>View Order Status</h2>
                        <p>Please enter your order id and the email address used on the order.</p>
                        <form>
                            <input type="text" id="orderId" name="orderId" placeholder="Order ID"><br><br>
                            <input type="email" id="email" name="email"><br><br>
                            <input type="submit" id="orderSubmit">
                        </form>
                    </div>
                        <div>
                            
                            <?php 
                            $value = $_GET['orderId']; 
                            $order = wc_get_order( $value);
                                // var_dump($order);
                                echo($order->status);
                                echo($order->get_billing_email());
                            ?>
                        </div>
				</div>
			</div>
		</div>
	</section>
	

<?php get_footer(); ?>