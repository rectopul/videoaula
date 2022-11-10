<section class="banner-mkt">
    <?php
        $args = array(
            'posts_per_page' => 1,  
            'order' => 'ASC',
            'post_type' => 'bannermkt'
        );
        $wp_query = new WP_Query($args);
        if ($wp_query->have_posts()) {
            while ($wp_query->have_posts()) {
                $wp_query->the_post();
        ?>
            <div class="banner-mkt__wrapper" style="background: url('<?php the_post_thumbnail_url(); ?>')" >
                <div class="banner-mkt__text" >
                    <h2 class="banner-mkt__excerpt"><?php the_excerpt(); ?></h2>
                    <h1 class="banner-mkt__title"><?php the_title(); ?></h1>
                    <span class="banner-mkt__content"><?php the_content(); ?></span>
                </div>
            </div>
        <?php } } ?>
</section>