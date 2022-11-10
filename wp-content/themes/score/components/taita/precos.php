<section class="precos">
    <div class="precos__wrapper" >
        <h2 class="precos__title">pacotes e serviços</h2>
        <div class="precos__posts">
            <?php
                $args = array(
                    'posts_per_page' => 4,  
                    'order' => 'ASC',
                    'post_type' => 'precostaita'
                );
                $wp_query = new WP_Query($args);
                if ($wp_query->have_posts()) {
                    while ($wp_query->have_posts()) {
                        $wp_query->the_post();
                ?>
                    <article class="precos__post">
                        <div class="precos__post-header">
                            <figure class="precos__post-img">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title();?>">
                                <figcaption><?php the_title();?></figcaption>
                            </figure>
                            <h2 class="precos__post-title"><?php the_title();?></h2>
                        </div>
                        <ul class="precos__post-list">
                            <?php
                                if( have_rows('linha_tabela') ):
                                    while ( have_rows('linha_tabela') ) : the_row();
                                        echo '<li class="precos__post-item">';
                                            the_sub_field('texto_da_linha');
                                        echo '</li>';
                                    endwhile;
                                endif;
                            ?>
                        </ul>
                        <div class="precos__post-link">
                            <a href="<?php the_field('url_do_link_do_plano');?>"><?php the_field('texto_do_link_do_plano');?></a>
                        </div>
                    </article>
            <?php } } ?>
        </div>
    </div>
</section>