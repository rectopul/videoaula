<section class="metodologia">
    <div class="metodologia__wrapper" >
        <h2 class="metodologia__title">entenda nossa metodologia</h2>
        <div class="metodologia__posts">
            <?php
                $count = 0;
                $args = array(
                    'posts_per_page' => 5,  
                    'order' => 'ASC',
                    'post_type' => 'metodologia'
                );
                $wp_query = new WP_Query($args);
                if ($wp_query->have_posts()) {
                    while ($wp_query->have_posts()) {
                        $wp_query->the_post();
                        $count = $count + 1;
                ?>
                    <article class="metodologia__post metodologia__post-<?php echo $count; ?>">
                        <figure class="metodologia__post-img">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title();?>">
                            <figcaption><?php the_title();?></figcaption>
                        </figure>
                        <figure class="metodologia__post-number">
                            <img src="<?php the_field('imagem_numero'); ?>" alt="<?php the_title();?>">
                            <figcaption><?php the_title();?></figcaption>
                        </figure>
                        <div class="metodologia__post-text">
                            <h2 class="metodologia__post-title"><?php the_title();?></h2>
                            <div class="metodologia__post-content"><?php the_content();?></div>
                        </div>
                    </article>
            <?php } } ?>
            <img class="metodologia__line" src="<?php bloginfo('template_directory'); ?>/img/line-meto.png" alt="">
        </div>
    </div>
    <img class="metodologia__img-tinta" src="<?php bloginfo('template_directory'); ?>/img/tinta-preta-criacao.png" alt="">
</section>