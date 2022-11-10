<section class="depoimentos">
    <div class="depoimentos__wrapper">
        <div class="depoimentos__posts">
            <?php
                $args = array(
                    'posts_per_page' => 99,  
                    'order' => 'ASC',
                    'post_type' => 'depoimentos'
                );
                $wp_query = new WP_Query($args);
                if ($wp_query->have_posts()) {
                    while ($wp_query->have_posts()) {
                        $wp_query->the_post();
                ?>
                    <article class="depoimentos__posts-item">

                        <div class="depoimentos__content">
                            <?php the_content(); ?>
                        </div>

                        <div class="depoimentos__footer">
                            <div class="depoimentos__excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                            <h2 class="depoimentos__author">
                                , <?php the_title(); ?>
                            </h2>
                        </div>

                        <div class="depoimentos__img">
                            <figure>
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                <figcaption><?php the_title(); ?></figcaption>
                            </figure>
                        </div>
                    </article>
            <?php } } ?>
        </div>
    </div>
</section>