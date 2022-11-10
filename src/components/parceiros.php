<section class="parceiros">
    <div class="parceiros__wrapper">
        <h3 class="parceiros__title">
            nada se conquista sozinho
        </h3>
        <h4 class="parceiros__subtitle">
            É impossível levantar voo com uma só asa, por isso investimos em parcerias e estudos nas melhores plataformas do mercado.
            Confira alguns de nossos parceiros:
        </h4>
        <div class="parceiros__posts">
            <?php
                $args = array(
                    'posts_per_page' => 99,  
                    'order' => 'ASC',
                    'post_type' => 'parceiros'
                );
                $wp_query = new WP_Query($args);
                if ($wp_query->have_posts()) {
                    while ($wp_query->have_posts()) {
                        $wp_query->the_post();
                ?>
                    <figure>
                        <a href="<?php the_field('link_parceiro'); ?>">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        </a>
                        <figcaption><?php the_title(); ?></figcaption>
                    </figure>
            <?php } } ?>
        </div>
    </div>
</section>