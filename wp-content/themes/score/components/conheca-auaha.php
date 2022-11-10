<div class="container-fluid" id="solutions">
    <div class="container-auaha cont-solutions">
        <main class="row">
            <div class="col-sm-12 col-md-6 col-xl-6">
                <div class="image-services">
                    <figure class="img-services">
                        <img src="<?php echo get_theme_mod('auaha_solucoes_image_settings'); ?>" alt="">
                    </figure>
                </div>
            </div>

            <div class="col-xl-6">
                <h1 class="title-solutions"><?php echo nl2br(get_theme_mod('auaha_solucoes_title_settings')); ?></h1>
                <h5 class="desc-solutions"><?php echo nl2br(get_theme_mod('auaha_solucoes_desc_settings')); ?></h5>
                <div class="carrousel-services">
                    <div class="services-pagination">
                        <div class="swiper-button-prev ServPrev SWfprev">

                        </div>
                        <div class="swiper-button-next ServNext SWfnext">

                        </div>
                    </div>
                    <div class="swiper-wrapper">
                        <?php
                        $args = array(
                            'post_type' => 'solutions',
                            'post_status' => 'publish',
                            'posts_per_page' => 3,
                            'orderby' => 'date',
                            'order' => 'ASC',
                        );

                        $posts_title = new WP_Query($args);
                        $c_post = 0;
                        if ($posts_title->have_posts()) {
                            while ($posts_title->have_posts()) {
                                $posts_title->the_post();
                                $c_post++; ?>
                                <div class="swiper-slide circ" style="<?php echo $c_post > 1 ?  'content: \' url(' . get_template_directory_uri() . '/img/plusred.svg)\';' : ''; ?>"><?php the_post_thumbnail(); ?><h3><?php the_title(); ?></h3>
                                    <article><?php the_content(); ?></article>
                                </div>
                        <?php }
                        }
                        wp_reset_query();
                        ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>