<section class="sobre-agencia">
    <div class="sobre-agencia__wrapper">
        <?php
            $args = array(
                'posts_per_page' => 1,  
                'order' => 'ASC',
                'post_type' => 'sobreauahamkt'
            );
            $wp_query = new WP_Query($args);
            if ($wp_query->have_posts()) {
                while ($wp_query->have_posts()) {
                    $wp_query->the_post();
            ?>
                <div class="sobre-agencia__content">
                    <?php the_content(); ?>
                </div>
                <div class="sobre-agencia__galeria">
                    <div class="sobre-agencia__galeria-1">
                        <figure class="sobre-agencia__foto-1">
                            <img src="<?php the_field('foto_1'); ?>" alt="Foto Agencia Auaha">
                            <figcaption>Foto Agencia Auaha</figcaption>
                        </figure>
                    </div>
                    <div class="sobre-agencia__galeria-2">
                        <div class="sobre-agencia__galeria-3">
                            <figure class="sobre-agencia__foto-2">
                                <img src="<?php the_field('foto_2'); ?>" alt="Foto Agencia Auaha">
                                <figcaption>Foto Agencia Auaha</figcaption>
                            </figure>
                        </div>
                        <div class="sobre-agencia__galeria-4">
                            <figure class="sobre-agencia__foto-3">
                                <img src="<?php the_field('foto_3'); ?>" alt="Foto Agencia Auaha">
                                <figcaption>Foto Agencia Auaha</figcaption>
                            </figure>
                            <figure class="sobre-agencia__foto-4">
                                <img src="<?php the_field('foto_4'); ?>" alt="Foto Agencia Auaha">
                                <figcaption>Foto Agencia Auaha</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="sobre-agencia__excerpt">
                    <?php the_excerpt(); ?>
                </div>
        <?php } } ?>
    </div>
</section>