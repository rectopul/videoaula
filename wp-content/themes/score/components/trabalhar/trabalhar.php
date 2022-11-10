<section class="trabalhar" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/bg-trabalhe-conosco.png')">
    <div class="trabalhar__wrapper">
        <div class="trabalhar__header">
            <h2 class="trabalhar__title">Quer trabalhar conosco?</h2>
            <div class="trabalhar__subtitle">
                <span>Envie-nos seu currículo e assim que surgir uma vaga, entraremos um contato.</span>
            </div>
        </div>
        <div class="trabalhar__form">
            <div class="trabalhar__left">
                <h3 class="trabalhar__left-title">Mande uma mensagem para nós</h3>
                <div class="trabalhar__left-subtitle">
                    <span>Preencha o formulário e em breve um especialista entrará em trabalhar com você</span>
                </div>
                <div class="trabalhar__left-contact">
                    <?php echo do_shortcode('[contact-form-7 id="301" title="Trabalhe Conosco"]'); ?>
                </div>
            </div>
            <div class="trabalhar__right">
                <h3 class="trabalhar__right-title">Vagas abertas no momento</h3>
                <?php
                    $args = array(
                        'posts_per_page' => 99,  
                        'order' => 'ASC',
                        'post_type' => 'vagas'
                    );
                    $wp_query = new WP_Query($args);
                    if ($wp_query->have_posts()) {
                        while ($wp_query->have_posts()) {
                            $wp_query->the_post();
                    ?>
                        <figure class="trabalhar__right-image">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            <figcaption><?php the_title(); ?></figcaption>
                        </figure>
                <?php } } ?>
            </div>
        </div>
    </div>
</section>