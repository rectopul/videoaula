<section class="comentarios">
    <div class="comentarios__wrapper" >
        <h2 class="comentarios__title">O que dizem nossos clientes</h2>
        <div class="comentarios__posts">
            <?php
                $args = array(
                    'posts_per_page' => 20,  
                    'order' => 'ASC',
                    'post_type' => 'comentarios'
                );
                $wp_query = new WP_Query($args);
                if ($wp_query->have_posts()) {
                    while ($wp_query->have_posts()) {
                        $wp_query->the_post();
                ?>
                    <article class="comentarios__post">
                        <div class="comentarios__post-content">
                            <span><?php the_field('comentario');?></span>
                        </div>
                        <h2 class="comentarios__post-title"><?php the_field('nome');?></h2>
                        <h4 class="comentarios__post-sub"><?php the_field('cargo');?></h4>
                        <figure class="comentarios__post-img">
                            <img src="<?php the_field('foto');?>" alt="<?php the_field('nome');?>">
                            <figcaption><?php the_field('nome');?></figcaption>
                        </figure>
                        <div class="comentarios__post-link">
                            <a href="<?php the_field('link');?>" title="<?php the_field('nome');?>"><?php the_field('texto_link');?></a>
                        </div>
                    </article>
            <?php } } ?>
        </div>
        <div class="comentarios__link">
            <a href="/contato/" title="VAMOS FALAR SOBRE SEU SONHO?">VAMOS FALAR SOBRE SEU SONHO?</a>
        </div>
    </div>
</section>