<section class="newsletter">
    <img class="newsletter__img-bg" src="<?php bloginfo('template_directory'); ?>/img/maori-newsletter.png" alt="">
    <div class="newsletter__wrapper">
        <div class="newsletter__left">
            <h2 class="newsletter__title">
                conhecimento nunca é demais
            </h2>
            <div class="newsletter__sec-title">
                receba conteúdo em primeira mão
            </div>
            <div class="newsletter__subtitle">
                seja o primeiro a receber dicas e matérias sobre o mundo digital
            </div>
            <div class="newsletter__form">
                <?php echo do_shortcode('[wysija_form id="1"]'); ?>
            </div>
        </div>
        
        <div class="newsletter__right">
            <!-- <div class="newsletter__title-guia">
                baixe nosso guia
            </div> -->
            <a href="<?php echo get_theme_mod( 'urlguia' ); ?>" class="newsletter__guia-button">
                <?php echo get_theme_mod( 'textoguia' ); ?>
            </a>
        </div>

        <div data-component="blog-plugin" class="blogplugin"></div>
    </div>
</section>