<section class="banner-migracao">
    <?php
        $args = array(
            'posts_per_page' => 1,  
            'order' => 'ASC',
            'post_type' => 'bannermigracao'
        );
        $wp_query = new WP_Query($args);
        if ($wp_query->have_posts()) {
            while ($wp_query->have_posts()) {
                $wp_query->the_post();
        ?>
            <div class="banner-migracao__bg" style="background: url('<?php the_post_thumbnail_url(); ?>')">
                <div class="banner-migracao__wrapper">
                    <div class="banner-migracao__text" >
                        <figure class="banner-migracao__icon">
                            <img src="<?php the_field('icone_migracao'); ?>" alt="<?php the_title(); ?>">
                            <figcaption><?php the_title(); ?></figcaption>
                        </figure>
                        <h1 class="banner-migracao__title"><?php the_title(); ?></h1>
                        <span class="banner-migracao__content"><?php the_content(); ?></span>
                        <a href="#" class="banner-migracao__link" title="PRIMEIRO CONTATO">Conheça nossa forma evoluir</a>
                    </div>
                </div>
            </div>
        <?php } } ?>
</section>