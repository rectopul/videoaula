<section class="porque-auaha">
    <div class="porque-auaha__wrapper" >
        <h2 class="porque-auaha__title">porque escolher a auaha?</h2>
        <div class="porque-auaha__posts">
            <?php
                $args = array(
                    'posts_per_page' => 7,  
                    'order' => 'ASC',
                    'post_type' => 'porqueauaha'
                );
                $wp_query = new WP_Query($args);
                if ($wp_query->have_posts()) {
                    while ($wp_query->have_posts()) {
                        $wp_query->the_post();
                ?>
                    <article class="porque-auaha__post">
                        <figure class="porque-auaha__post-img">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title();?>">
                            <figcaption><?php the_title();?></figcaption>
                        </figure>
                        <h2 class="porque-auaha__post-title"><?php the_title();?></h2>
                        <div class="porque-auaha__post-content"><?php the_content();?></div>
                    </article>
            <?php } } ?>
        </div>
    </div>
    <img class="porque-auaha__img-tinta" src="<?php bloginfo('template_directory'); ?>/img/tinta-preta-criacao.png" alt="">
</section>