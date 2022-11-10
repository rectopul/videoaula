<section class="servicos">
    <div class="servicos__wrapper" >
        <h2 class="servicos__title">nossos serviços</h2>
        <div class="servicos__posts">
            <?php
                $args = array(
                    'posts_per_page' => 7,  
                    'order' => 'ASC',
                    'post_type' => 'servicos'
                );
                $wp_query = new WP_Query($args);
                if ($wp_query->have_posts()) {
                    while ($wp_query->have_posts()) {
                        $wp_query->the_post();
                ?>
                    <article class="servicos__post">
                        <figure class="servicos__post-img">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title();?>">
                            <figcaption><?php the_title();?></figcaption>
                        </figure>
                        <h2 class="servicos__post-title"><?php the_title();?></h2>
                        <div class="servicos__post-content"><?php the_content();?></div>
                    </article>
            <?php } } ?>
        </div>
    </div>
</section>