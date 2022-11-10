<section class="bannertaita" style="background: url('<?php bloginfo('template_directory'); ?>/img/bg-banner-taita.jpg')">
    <?php
        $args = array(
            'posts_per_page' => 1,  
            'order' => 'ASC',
            'post_type' => 'bannertaita'
        );
        $wp_query = new WP_Query($args);
        if ($wp_query->have_posts()) {
            while ($wp_query->have_posts()) {
                $wp_query->the_post();
        ?>
            <div class="bannertaita__wrapper" >
                <div class="bannertaita__img">
                    <img src="<?php the_field('imagem_central_do_banner'); ?>" alt="<?php the_title();?>">
                </div>
                <div class="bannertaita__text" >
                    <h1 class="bannertaita__title"><?php the_title();?></h1>
                    <img src="<?php the_field('imagem_central_do_banner_mobile'); ?>" alt="<?php the_title();?>">
                    <h2 class="bannertaita__content">
                        <span class="bannertaita__color"><?php the_field('subtitle_parte_1'); ?></span>
                        <?php the_field('subtitle_parte_2'); ?></h2>
                    <span class="bannertaita__excerpt"><?php the_field('descricao'); ?></span>
                    <a href="#" class="bannertaita__link" title="DIFERENCIAIS DO TAITA" >DIFERENCIAIS TAITA TRAY</a>
                    <figure class="bannertaita__logomarca-tray">
                        <img src="<?php bloginfo('template_directory'); ?>/img/tray.png" alt="Tray">
                        <figcaption>Tray</figcaption>
                    </figure>
                </div>
            </div>
        <?php } } ?>
        <img class="bannertaita__tinta-2" src="<?php bloginfo('template_directory'); ?>/img/tinta-preta-taita.png" alt="">
        <img class="bannertaita__tinta-1" src="<?php bloginfo('template_directory'); ?>/img/tinta-amarela-taita.png" alt="">
</section>