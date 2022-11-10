<section class="customizado">
    <?php
        $args = array(
            'posts_per_page' => 1,  
            'order' => 'ASC',
            'post_type' => 'mktcustomizado'
        );
        $wp_query = new WP_Query($args);
        if ($wp_query->have_posts()) {
            while ($wp_query->have_posts()) {
                $wp_query->the_post();
        ?>
            <div class="customizado__wrapper" >
                <div class="customizado__posts">
                    <article class="customizado__post">
                        <h2 class="customizado__post-title">
                            <span class="customizado__post-title-1"><?php the_field('titulo_parte_1'); ?></span>
                            <span class="customizado__post-title-2"><?php the_field('titulo_parte_2'); ?></span>
                        </h2>
                        <div class="customizado__post-content">
                            <div class="customizado__post-content-1"><?php the_field('primeira_parte_do_conteudo'); ?></div>
                            <div class="customizado__post-content-2"><?php the_field('segunda_parte_do_conteudo'); ?></div>
                        </div>
                    </article>
                </div>
            </div>
            <img src="<?php the_field('imagem_de_fundo'); ?>" alt="<?php the_title();?>">
    <?php } } ?>
</section>