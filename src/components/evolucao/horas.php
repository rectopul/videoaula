<section class="horas">
    <div class="horas__wrapper">
        <h2 class="horas__title">Quer saber o que fazer com as suas horas?</h2>
        <div class="horas__posts">
            <?php
                $args = array(
                    'posts_per_page' => 99,  
                    'order' => 'ASC',
                    'post_type' => 'horascliente'
                );
                $wp_query = new WP_Query($args);
                if ($wp_query->have_posts()) {
                    while ($wp_query->have_posts()) {
                        $wp_query->the_post();
                ?>
                    
                    <article class="horas__post">
                        <figure class="horas__post-image">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            <figcaption><?php the_title(); ?></figcaption>
                        </figure>
                        <h2 class="horas__post-title"><?php the_title(); ?></h2>
                    </article>
                    
            <?php } } ?>
        </div>
    </div>
</section>