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