<section class="banner-criacao">
    <?php
        $args = array(
            'posts_per_page' => 1,  
            'order' => 'ASC',
            'post_type' => 'bannercriacao'
        );
        $wp_query = new WP_Query($args);
        if ($wp_query->have_posts()) {
            while ($wp_query->have_posts()) {
                $wp_query->the_post();
        ?>
            <div class="banner-criacao__bg" style="background: url('<?php the_post_thumbnail_url(); ?>')">
                <div class="banner-criacao__wrapper">
                    <div class="banner-criacao__text" >
                        <figure class="banner-criacao__icon">
                            <img src="<?php the_field('icone_criacao'); ?>" alt="<?php the_title(); ?>">
                            <figcaption><?php the_title(); ?></figcaption>
                        </figure>
                        <h1 class="banner-criacao__title"><?php the_title(); ?></h1>
                        <span class="banner-criacao__content"><?php the_content(); ?></span>
                        <a href="#" class="banner-criacao__link" title="PRIMEIRO CONTATO">Conheça nossa forma de criar</a>
                    </div>
                </div>
            </div>
        <?php } } ?>
</section>