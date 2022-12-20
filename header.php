<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <meta name="description" content="<?php if ( is_single() ) { echo esc_html( wp_strip_all_tags( get_the_excerpt(), true ) ); } else { bloginfo( 'description' ); } ?>" />
        <meta name="keywords" content="<?php echo esc_html( implode( ', ', wp_get_post_tags( get_the_ID(), array( 'fields' => 'names' ) ) ) ); ?>" />
        <meta property="og:image" content="<?php if ( is_single() && has_post_thumbnail() ) { the_post_thumbnail_url( 'full' ); } elseif ( has_site_icon() ) { echo esc_url( get_site_icon_url() ); } ?>" />
        <meta name="twitter:card" content="photo" />
        <meta name="twitter:site" content="<?php bloginfo( 'name' ); ?>" />
        <meta name="twitter:title" content="<?php if ( is_single() ) { the_title(); } else { bloginfo( 'name' ); } ?>" />
        <meta name="twitter:description" content="<?php if ( is_single() ) { echo esc_html( wp_strip_all_tags( get_the_excerpt(), true ) ); } else { bloginfo( 'description' ); } ?>" />
        <meta name="twitter:image" content="<?php if ( is_single() && has_post_thumbnail() ) { the_post_thumbnail_url( 'full' ); } elseif ( has_site_icon() ) { echo esc_url( get_site_icon_url() ); } ?>" />
        <meta name="twitter:url" content="<?php if ( is_single() ) { esc_url( the_permalink() ); } else { echo esc_url( home_url() ) . '/'; } ?>" />
        <meta name="twitter:widgets:theme" content="light" />
        <meta name="twitter:widgets:link-color" content="#007acc" />
        <meta name="twitter:widgets:border-color" content="#fff" />
        <link rel="canonical" href="<?php echo esc_url( 'https://' . $_SERVER["HTTP_HOST"] . parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ) ); ?>" />
    </head>
    <body <?php body_class();?>>
    <div id="header" class="hfeed">
    <div class="container">

        <div class="logo-header">
                <div class="logo-div">
                    <a href="/">
                        <img class="header-logo" src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Craft Twinery Logo">
                    </a>
                    <button class="mobile-menu">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </button>
                </div>
              
        </div>
        <div class="menu-header">
            <div class="menu-top">
                <div class="phone-number"><a href="tel:01204897642"><span><img src="<?php bloginfo('template_url'); ?>/images/phone-icon.png" alt="Phone Icon">01204 897642</span></a></div>
                <span class="header-info">
                    <div class="basket"><a href="/basket"><span>VIEW BASKET<img src="<?php bloginfo('template_url'); ?>/images/basket.png" alt="Basket Icon"></span></a></div>
                    <div id="search">
                        <img class="search-icon" src="<?php bloginfo('template_url'); ?>/images/search.svg" alt="Search Icon">
                        <?php get_search_form(); ?>
                    </div>
                </span>
            </div>
            <div class="menu-bottom">
                <?php
                    wp_nav_menu( array( 
                        'theme_location' => 'main-menu',
                        'after'           => '<button class="dropdown-btn"></button>', 
                        'container_class' => 'main-menu' ) ); 
                ?>
            </div>
        </div>
    </div>
</div>

<?php if(is_shop() ) {
    include "shop-header.php";  
}
?>
<?php if(is_search()) { ?>
    <div class="hero-image" style="background-image: url('<?php bloginfo('template_url'); ?>/images/hero-image.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-12">			
                <h1 class="title">Search</h1>
            </div>
        </div>
    </div>	
</div>
<?php }?>

<main id="content" role="main">