<section class="diferenciais">
    <div class="diferenciais__wrapper" >
        <h2 class="diferenciais__title">diferenciais do taita</h2>
        <div class="diferenciais__posts">
            <?php
                $args = array(
                    'posts_per_page' => 7,  
                    'order' => 'ASC',
                    'post_type' => 'diferenciaistaita'
                );
                $wp_query = new WP_Query($args);
                if ($wp_query->have_posts()) {
                    while ($wp_query->have_posts()) {
                        $wp_query->the_post();
                ?>
                    <article class="diferenciais__post">
                        <figure class="diferenciais__post-img">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title();?>">
                            <figcaption><?php the_title();?></figcaption>
                        </figure>
                        <figure class="diferenciais__post-img diferenciais__post-img--mobile">
                            <img src="<?php the_field('imagem_mobile'); ?>" alt="<?php the_title();?>">
                            <figcaption><?php the_title();?></figcaption>
                        </figure>
                        <h2 class="diferenciais__post-title"><?php the_title();?></h2>
                        <div class="diferenciais__post-content"><?php the_content();?></div>
                    </article>
            <?php } } ?>
        </div>
    </div>
</section>