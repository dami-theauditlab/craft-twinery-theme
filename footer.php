</main>
<?php get_sidebar(); ?>
<?php if (is_product()) {  
    include "template-blocks/account-block.php"; 
} ?>
<footer id="footer">
    <div class="container">
        <div class="top-footer">
            <a href="/" class="logo-div">
                <img class="footer-logo" src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Craft Twinery Logo">
            </a>
            <div class="social-icons">
                <a href="https://www.facebook.com/crafttwinery/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/facebook.png" alt="Facebook Icon"></a>
                <a href="https://twitter.com/CraftTwinery" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/twitter.png" alt="Twitter Icon"></a>
            </div>
            <div class="contact">
                <div class="phone-number"><a href="tel:01204897642"><span><img src="<?php bloginfo('template_url'); ?>/images/phone-icon.png" alt="Phone Icon">01204 897642</span></a></div>
                <div class="email"><a href="mailto:info@crafttwinery.co.uk"><span><img src="<?php bloginfo('template_url'); ?>/images/email.png" alt="Email Icon">info@crafttwinery.co.uk</span></a></div>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="menu"><p><strong class="title">STORE INFORMATION</strong>
                <?php
                        wp_nav_menu( array( 
                            'theme_location' => 'main-footer-menu', 
                            'container_class' => 'main-footer-menu' ) ); 
                ?>
            </div>
            <div class="copyright">
                <p>2022 © Rope Source Limited, Registered Company Number <br>08441149 - Website built by The Audit Lab</p>
                <div class="image">
                    <img class="near" src="<?php bloginfo('template_url'); ?>/images/near.png" alt="Near logo">
                    <img class="cards" src="<?php bloginfo('template_url'); ?>/images/cards.png" alt="Card Options">
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>