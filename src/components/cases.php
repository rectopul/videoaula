<div class="container-fluid bg-black ct-cases" id="cases-anchor">
    <div class="container-auaha container-cases">
        <div class="row">
            <h1 class="title_cases"><?php echo get_theme_mod('auaha_cases_title'); ?></h1>
            <h5 class="desc_cases"><?php echo get_theme_mod('auaha_cases_desc'); ?></h5>
        </div>

        <div class="row cont-cases-slides">
            <div class="cases_carrousel swiper-container">
                <div class="swiper-wrapper">                
                    <?php
                        $args = array(
                            'post_type' => 'cases',
                            'post_status' => 'publish',
                            'posts_per_page' => 3,
                            'orderby' => 'date',
                            'order' => 'ASC',
                        );

                        $cases = new WP_Query( $args );
                        if ( $cases -> have_posts() ) {
                            while ( $cases -> have_posts() ) {  $cases->the_post(); ?>                        
                                <div class="swiper-slide">
                                    <div class="cases-row">
                                        <div class="thumb-cases">
                                            <figure>
                                                <?php the_post_thumbnail('case', 'thum-img'); ?>
                                            </figure>
                                        </div>

                                        <div class="cases_text">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>

                            <?php }
                        }
                        wp_reset_query();
                    ?>  
                </div>                
            </div> 
            <!-- Add Pagination -->
            <div class="swiper-pagination cases-pagination"></div>           
        </div>
    </div>
</div>