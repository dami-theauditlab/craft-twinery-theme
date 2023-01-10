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
		<div class="container order-container">
			<div class="row">
				<div class="col-12">

				<?php  $orderq   = wc_get_order($orderId);?>
				<?php if ($email && $orderId) { ?>
					<div class="order">
					<?php if (!empty($orderq)) { ?>
							<?php $order = wc_get_order( $orderId); ?>
							<div class="order-bar">
								<?php if($order->status === "processing") { ?>
									<div class="order-step">
										<span class="circle"></span><p>Pending Payment</p>
										<span class="line"></span>
									</div>
									<div class="order-step">
										<span class="circle"></span><p> Processing</p></span>
										<span class="line hide"></span>
									</div>
									<div class="order-step"><span class="circle"></span><p>Completed</p></span></div>
								<?php } ?>
								<?php if($order->status === "completed") { ?>
									<div class="order-step">
										<span class="circle"></span><p>Pending Payment</p>
										<span class="line"></span>
									</div>
									<div class="order-step">
										<span class="circle"></span><p> Processing</p></span>
										<span class="line"></span>
									</div>
									<div class="order-step"><span class="circle"></span><p>Completed</p></span></div>
								<?php } ?>
					<?php } else { ?>
						<div><h2>Invalid Order Number / Email Address</h2></div>
					<?php } ?>
				</div>

				<?php } ?>
					</div>
                    <div class="verification">
                        <h2>View Order Status</h2>
                        <p>Please enter your order id and the email address used on the order.</p>
                        <form>
                            <input type="text" id="orderId" name="orderId" placeholder="ORDER ID" required><br><br>
                            <input type="email" id="email" name="email" placeholder="EMAIL" required><br><br>
                            <input type="submit" id="orderSubmit" name="submit" value="VIEW ORDER STATUS">
                        </form>
                    </div>
					
			</div>
		</div>
	</section>
	

<?php get_footer(); ?>