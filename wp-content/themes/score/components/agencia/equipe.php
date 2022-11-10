<section class="equipe">
    <div class="equipe__wrapper">
        <div class="equipe__images">
            <h2 class="equipe__title">
                nossa equipe
            </h2>
            <ul class="equipe__posts">
                <?php
                    $args = array(
                        'posts_per_page' => 99,  
                        'order' => 'ASC',
                        'post_type' => 'equipe'
                    );
                    $wp_query = new WP_Query($args);
                    if ($wp_query->have_posts()) {
                        while ($wp_query->have_posts()) {
                            $wp_query->the_post();
                    ?>
                        <li class="equipe__posts-item">
                            <a class="equipe__link" href="<?php the_field('link_case'); ?>" target="_blank">
                                <div class="equipe__img-wrapper">
                                    <figure class="equipe__img-1">
                                        <img src="<?php the_field('foto_1'); ?>" alt="<?php the_title(); ?>">
                                        <figcaption><?php the_title(); ?></figcaption>
                                    </figure>
                                    <div class="equipe__img-wrapper-2">
                                        <figure class="equipe__img-2">
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