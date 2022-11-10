<section class="seguindo">
    <?php
        $args = array(
            'posts_per_page' => 1,  
            'order' => 'ASC',
            'post_type' => 'seguindoviagem'
        );
        $wp_query = new WP_Query($args);
        if ($wp_query->have_posts()) {
            while ($wp_query->have_posts()) {
                $wp_query->the_post();
        ?>
            <div class="seguindo__wrapper">
                <div class="seguindo__text" >
                    <h2 class="seguindo__title"><?php the_title(); ?></h2>
                    <span class="seguindo__content"><?php the_content(); ?></span>
                    <figure class="seguindo__image">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <figcaption><?php the_title(); ?></figcaption>
                    </figure>
                    <span class="seguindo__excerpt"><?php the_excerpt(); ?></span>
                </div>
            </div>
        <?php } } ?>
        <img class="seguindo__spaceship" src="<?php bloginfo('template_directory'); ?>/img/spaceship.png" alt="">
</section>