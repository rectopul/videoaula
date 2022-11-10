<section class="equipemkt">
    <div class="equipemkt__wrapper">
        <div class="equipemkt__images">
            <h2 class="equipemkt__title">
                nossa equipe
            </h2>
            <ul class="equipemkt__posts">
                <?php
                    $args = array(
                        'posts_per_page' => 99,  
                        'order' => 'ASC',
                        'post_type' => 'equipemkt'
                    );
                    $wp_query = new WP_Query($args);
                    if ($wp_query->have_posts()) {
                        while ($wp_query->have_posts()) {
                            $wp_query->the_post();
                    ?>
                        <li class="equipemkt__posts-item">
                            <a class="equipemkt__link" href="<?php the_field('link_case'); ?>" target="_blank">
                                <div class="equipemkt__img-wrapper">
                                    <figure class="equipemkt__img-1">
                                        <img src="<?php the_field('foto_1'); ?>" alt="<?php the_title(); ?>">
                                        <figcaption><?php the_title(); ?></figcaption>
                                    </figure>
                                    <div class="equipemkt__img-wrapper-2">
                                        <figure class="equipemkt__img-2">
                                            <img src="<?php the_field('foto_2'); ?>" alt="<?php the_title(); ?>">
                                            <figcaption><?php the_title(); ?></figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </a>
                        </li>
                <?php } } ?>
            </ul>
        </div>
    </div>
</section>