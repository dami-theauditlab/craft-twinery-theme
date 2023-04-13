<section id="search-page">
    <div class="container">
        <div class="row">
				<div class="col-12">
					<h2>Search our store</h2>
                    <?php get_search_form(); ?>
				</div>
			</div>
        <?php
        if ( have_posts() ) {
            while(have_posts()){
                the_post(); ?>
                <a class="card" href="<?php the_permalink(); ?>">
                    <div class="card-header">
                        <div class="card-img">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="card__image" class="card__image" width="600">
                        </div>
                        <div class="card-text">
                            <h2 class="product-title"><?php the_title(); ?></h2>
                            <p><?php the_excerpt(); ?></p>
                            <?php 
                                global $product;
                                $price = $product->get_price_html();
                                $including_vat = $product->price*1.2;
                                ?>
                                <p class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>">Price <?php echo $product->get_price_html(); ?></p>
                                <small class="incl-vat">(£<?php echo(round($including_vat, 2));?>  Incl. VAT)</small>
                        </div>
                    </div>
                </a>
            <?php }
        } else {
            echo "<h2>No Products Found</h2>";
        }
        ?>
    </div>
    <div class="pagination">
        <span>
            <div class="alignleft"><?php previous_posts_link('&laquo; Previous') ?></div>
            <div class="alignright"><?php next_posts_link('Next &raquo;') ?></div>
        </span>
    </div>
</section>