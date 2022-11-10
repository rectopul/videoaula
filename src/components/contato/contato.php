<section class="contato" style="background-image: url('<?php bloginfo('template_directory'); ?>/img/bg-contact-page.png')">
    <div class="contato__wrapper">
        <div class="contato__header">
            <h2 class="contato__title">Vamos tomar um café?</h2>
            <div class="contato__subtitle">
                <span>Adoramos café! Que tal combinarmos uma tarde para tomarmos uma xícara e conversar sobre o seu projeto.</span>
            </div>
        </div>
        <div class="contato__form">
            <div class="contato__left">
                <h3 class="contato__left-title">Mande uma mensagem para nós</h3>
                <div class="contato__left-subtitle">
                    <span>Preencha o formulário e em breve um especialista entrará em contato com você</span>
                </div>
                <div class="contato__left-contact">
                    <?php echo do_shortcode('[contact-form-7 id="298" title="Contact Form"]'); ?>
                </div>
            </div>
            <div class="contato__right">
                <h3 class="contato__right-title">Informações de contato</h3>
                <div class="contato__right-subtitle">
                    <span>Escolha a melhor forma e entre em contato.</span>
                </div>
                <div class="contato__right-address">
                    <div class="contato__right-address-icon"></div>
                    <div class="contato__right-address-content">
                        <address class="contato__right-link">
                            <?php echo get_theme_mod( 'endereco' ); ?>
                        </address>
                    </div>
                </div>
                <div class="contato__right-phone">
                    <div class="contato__right-phone-icon"></div>
                    <div class="contato__right-phone-content">
                        <a class="contato__right-link" href="tel:<?php echo get_theme_mod( 'telefone' ); ?>" title="<?php echo get_theme_mod( 'telefone' ); ?>">
                            <?php echo get_theme_mod( 'telefone' ); ?>
                        </a>
                    </div>
                </div>
                <div class="contato__right-email">
                    <div class="contato__right-email-icon"></div>
                    <div class="contato__right-email-content">
                        <a class="contato__right-link" href="mailto:<?php echo get_theme_mod( 'email2' ); ?>" target="_blank" title="<?php echo get_theme_mod( 'email2' ); ?>">
                            <?php echo get_theme_mod( 'email2' ); ?>
                        </a>
                    </div>
                </div>
                <div class="contato__right-social">
                    <h4 class="contato__right-social-title">se liga na auaha</h4>
                    <ul class="contato__right-social-list">
                        <li class="contato__right-social-item">
                            <a class="contato__right-social-link contato__right-social-link--facebook" href="<?php echo get_theme_mod( 'facebook' ); ?>" target="_blank" title="Curta nossa página"></a>
                        </li>
                        <li class="contato__right-social-item">
                            <a class="contato__right-social-link contato__right-social-link--youtube" href="<?php echo get_theme_mod( 'youtube' ); ?>" target="_blank" title="Acompanhe nossos vídeos"></a>
                        </li>
                        <li class="contato__right-social-item">
                            <a class="contato__right-social-link contato__right-social-link--instagram" href="<?php echo get_theme_mod( 'instagram' ); ?>" target="_blank" title="Siga nosso perfil"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>