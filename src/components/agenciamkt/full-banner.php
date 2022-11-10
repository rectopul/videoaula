<section class="banner-agenciamkt">
    <?php
        $args = array(
            'posts_per_page' => 1,  
            'order' => 'ASC',
            'post_type' => 'banneragenciamkt'
        );
        $wp_query = new WP_Query($args);
        if ($wp_query->have_posts()) {
            while ($wp_query->have_posts()) {
                $wp_query->the_post();
        ?>
            <div class="banner-agenciamkt__bg" style="background: url('<?php the_post_thumbnail_url(); ?>')">
                <div class="banner-agenciamkt__wrapper">
                    <div class="banner-agenciamkt__text" >
                        <h1 class="banner-agenciamkt__title">
                            <?php the_field('titulo_parte_1'); ?>
                            <span><?php the_field('titulo_parte_2'); ?></span>
                        </h1>
                        <span class="banner-agenciamkt__content"><?php the_content(); ?></span>
                    </div>
                </div>
            </div>
        <?php } } ?>
        <img src="<?php bloginfo('template_directory'); ?>/img/cloud-agencia.png" alt="" class="banner-agencia__cloud-1">
        <img src="<?php bloginfo('template_directory'); ?>/img/cloud-agencia.png" alt="" class="banner-agencia__cloud-2">
</section>