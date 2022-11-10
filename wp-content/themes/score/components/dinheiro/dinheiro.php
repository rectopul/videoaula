<?php $upload_dir = wp_upload_dir(); ?>
<section class="topBanner" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/bg-top-dinheiro.png')">
    <div class="topBanner__wrapper">
        <div class="topBanner__text">
            <h1 class="topBanner__content">Ganhar dinheiro no e-commerce não é fácil.</h1>
            <h2 class="topBanner__title">mas com a nossa ajuda, também não fica tão difícil!</h2>
            <a href="#bot-section" class="topBanner__link">VEJA COMO</a>
        </div>
        <figure class="topBanner__img">
            <img src="<?php bloginfo('template_directory'); ?>/img/img-dinheiro-lp.png" alt="Dinheiro fácil não existe!">
        </figure>
    </div>
</section>
<section id="bot-section" class="sectionForm" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/right-paint-bg.png')">
    <div class="sectionForm__wrapper">
        <div class="sectionForm__left">
            <h2 class="sectionForm__title">saiba porque a auaha é<br> a agência certa para você</h2>
            <div class="sectionForm__text">
                <div class="sectionForm__item">
                    <h3>+ de 500 lojas</h3>
                    <p>somos especialistas em usabilidade</p>
                </div>
                <div class="sectionForm__item">
                    <h3>+ 200%<span>*</span> de conversão</h3>
                    <p>aumento de venda comprovado em inumeros cases</p>
                </div>
                <div class="sectionForm__item">
                    <h3>atuação especializada</h3>
                    <p>nos principais seguimentos do mercado</p>
                </div>
                <div class="sectionForm__item">
                    <h3>+R$5 mi em rendimentos</h3>
                    <p>dos nossos clientes de marketing</p>
                </div>
            </div>
        </div>
        <div class="sectionForm__right">
            <div class="sectionForm__form">
                <?php echo do_shortcode('[contact-form-7 id="411" title="form lp dinheiro"]'); ?>
            </div>
            <div class="sectionForm__footer">
                <footer class="footer">
                        <div class="footer__column">
                            <h4 class="footer__title">
                                entre em contato
                            </h4>
                            <p class="footer__text">+55 (14) 3434-1290</p>
                            <p class="footer__text">contato@auaha.com.br</p>
                            <ul class="footer__list">
                                <li class="footer__item">
                                    <a class="footer__link footer__link--facebook" href="<?php echo get_theme_mod( 'facebook' ); ?>" target="_blank" title="Curta nossa página">
                                    </a>
                                </li>
                                <li class="footer__item">
                                    <a class="footer__link footer__link--instagram" href="<?php echo get_theme_mod( 'instagram' ); ?>" target="_blank" title="Siga nosso perfil">
                                    </a>
                                </li>
                                <li class="footer__item">
                                    <a class="footer__link footer__link--youtube" href="<?php echo get_theme_mod( 'youtube' ); ?>" target="_blank" title="Acompanhe nossos vídeos">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer__column">
                            <figure>
                                <img class="footer__mask" src="<?php bloginfo('template_directory'); ?>/img/auaha-mask-rodape.png" alt="Auaha Mask">
                                <figcaption>Auaha Mask</figcaption>
                            </figure>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</section>