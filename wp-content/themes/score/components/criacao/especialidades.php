<section class="especialidades">
    <div class="especialidades__wrapper">
        <h3 class="especialidades__title">
            nossas especialidades
        </h3>
        <div class="especialidades__posts">
            <?php
                $args = array(
                    'posts_per_page' => -1,  
                    'order' => 'ASC',
                    'post_type' => 'parceiros'
                );
                $wp_query = new WP_Query($args);
                if ($wp_query->have_posts()) {
                    while ($wp_query->have_posts()) {
                        $wp_query->the_post();
                ?>
                    <figure class="especialidades__post">
                        <a href="<?php the_field('link_parceiro'); ?>">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        </a>
                        <figcaption><?php the_title(); ?></figcaption>
                    </figure>
            <?php } } ?>
        </div>
    </div>
</section>