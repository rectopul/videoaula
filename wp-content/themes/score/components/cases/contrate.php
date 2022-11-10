<section class="contrate">
    <div class="contrate__bg">
        <div class="contrate__wrapper">
            <h2 class="contrate__title">
                contrate a auaha
            </h2>
            <div class="contrate__list">
                <?php
                    $args = array(
                        'posts_per_page' => 3,  
                        'order' => 'ASC',
                        'post_type' => 'fazemos'
                    );
                    $wp_query = new WP_Query($args);
                    if ($wp_query->have_posts()) {
                        while ($wp_query->have_posts()) {
                            $wp_query->the_post();
                    ?>
                        <article class="contrate__item">
                            <figure>
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="Icone">
                                <figcaption>Icone</figcaption>
                            </figure>
                            <h1><?php the_title(); ?></h1>
                            <div class="contrate__content">
                                <div class="contrate__text">
                                    <?php the_content(); ?>
                                </div>
                                <div class="contrate__link">
                                    <a href="<?php the_field('link_da_pagina'); ?>" title="VAMOS CONVERSAR?"><?php the_field('texto_do_link'); ?></a>
                                </div>
                            </div>
                        </article>
                <?php } } ?>
            </div>
        </div>
    </div>
</section>