<?php /* Template Name: Order Status Page*/ ?>
<?php get_header(); ?>

<?php 
	$order_status 	= get_field('order_status');

	$order_status_hero_section 	= get_field('order_status_hero_section');
	$order_status_hero_image 	= get_field('order_status_hero_image');
	$order_status_hero_title 	= get_field('order_status_hero_title');
	$orderId = $_GET['orderId']; 
	$email = $_GET['email']; 
?>

	<section id="order-status">
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
                            <input type="text" id="orderId" name="orderId" placeholder="ORDER ID" required><br><br>
                            <input type="email" id="email" name="email" placeholder="EMAIL" required><br><br>
                            <input type="submit" id="orderSubmit" value="VIEW ORDER STATUS">
                        </form>
                    </div>
						<?php  $orderq   = wc_get_order($orderId);?>
						<?php if (!empty($orderq)) { ?>
							<div class="order">
								<?php $order = wc_get_order( $orderId); ?>
								<div class="order-bar">
									<?php if($order->status === "processing") { ?>
										<span>Pending Payment</span>
										<span>Processing</span>
									<?php } ?>
									<?php if($order->status === "completed") { ?>
										<span>Pending Payment</span>
										<span>Processing</span>
										<span>Completed</span>
									<?php } ?>
									<h2><?php echo($order->status); ?>
								</div>
							</div>
						<?php } else { ?>
							<div> Sorry Your Order Number is Invalid </div>
						<?php } ?>
				</div>
			</div>
		</div>
	</section>
	

<?php get_footer(); ?>