<section class="container-fluid sobre">
    <div class="container-auaha">
        <div class="row sobre-wraper">
            <div class="col-sm-12 col-xl-6 sobre-content">
                <div class="repre_navigator">
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev SobPrev SWfprev"></div>
                    <div class="swiper-button-next SobNext SWfnext"></div>
                </div>
                <div class="swiper-wrapper">                
                    <?php
                        $args = array(
                            'post_type' => 'Representantes',
                            'post_status' => 'publish',
                            'posts_per_page' => -1,
                            'orderby' => 'date',
                            'order' => 'ASC',
                        );

                        $FuncQuery = new WP_Query( $args );
                        if( $FuncQuery->have_posts() ):
                            while ( $FuncQuery -> have_posts() ):  $FuncQuery->the_post(); ?>
                                <div class="repre swiper-slide">
                                    <div class="representante">
                                        <header>
                                            <!-- Image -->
                                            <figure><?php the_post_thumbnail('perfil'); ?></figure>                                    
                                        </header>
                                        <!-- Title -->
                                        <article class="title-1"><?php the_title(); ?></article>
                                        <!-- Content -->                
                                        <footer class="content-repres"><?php the_excerpt(); ?></footer>
                                    </div>
                                </div>
                            <?php endwhile;
                        endif;
                    ?>
                </div>

                <?php wp_reset_query(); ?>
            </div>

            <div class="sobre-tags">
                <!-- Tags -->
               <h1 class="sob-title"><?php echo get_theme_mod('auaha_sobre_settings'); ?></h1>
               <p class="sob-content"><?php echo nl2br(get_theme_mod('auaha_sobre_content_settings')); ?></p>
            </div>  
        </div>
    </div>
    <div class="divider-sobre"></div>
</section>