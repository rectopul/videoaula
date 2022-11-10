<ul class="cases__posts">
    <?php
        $args = array(
            'posts_per_page' => 6,  
            'order' => 'ASC',
            'post_type' => 'cases'
        );
        $wp_query = new WP_Query($args);
        if ($wp_query->have_posts()) {
            while ($wp_query->have_posts()) {
                $wp_query->the_post();
        ?>
            <li class="cases__posts-item">
                <a class="cases__link" href="<?php the_field('link_case'); ?>" target="_blank">
                    <div class="cases__img-wrapper">
                        <figure class="cases__img-1">
                            <img src="<?php the_field('case_foto_1'); ?>" alt="<?php the_title(); ?>">
                            <figcaption><?php the_title(); ?></figcaption>
                        </figure>
                        <div class="cases__img-wrapper-2">
                            <figure class="cases__img-2">
                                <img src="<?php the_field('case_foto_2'); ?>" alt="<?php the_title(); ?>">
                                <figcaption><?php the_title(); ?></figcaption>
                            </figure>
                        </div>
                    </div>
                </a>
            </li>
    <?php } } ?>
</ul>