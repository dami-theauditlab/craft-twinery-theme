<section id="search-page">
    <div class="container">
        <?php
            while(have_posts()){
                the_post(); ?>
                <a class="card" href="<?php the_permalink(); ?>">
                    <div >
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="card__image" class="card__image" width="600">
                        <div class="card-text">
                            <h4><?php the_title(); ?></h4>
                        </div>
                    </div>
                </a>
            <?php }
            else {
                echo 'ww';
            }?>
    </div>
    <div class="pagination">
        <div class="alignleft"><?php previous_posts_link('&laquo; Previous') ?></div>
        <div class="alignright"><?php next_posts_link('Next &raquo;') ?></div>
    </div>
</section>