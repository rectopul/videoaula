<div class="formulario__wrapper" >
    <div class="formulario__left">
        <h3 class="formulario__left-title">vamos conversar?</h3>
        <div class="formulario__left-text">
            <span>Preencha o nosso formulário de contato e em breve um analista comercial entrará em contato para sanar todas as suas dúvidas.</span>
        </div>
        <div class="formulario__left-text-2">
            <span>Se preferir pode nos ligar ou enviar um e-mail</span>
        </div>
        <div class="formulario__left-fone">
            <a href="tel:<?php echo get_theme_mod( 'telefone' ); ?>" title="<?php echo get_theme_mod( 'telefone' ); ?>">
                <?php echo get_theme_mod( 'telefone' ); ?>
            </a>
        </div>
        <div class="formulario__left-email">
            <a href="mailto:<?php echo get_theme_mod( 'email2' ); ?>" title="<?php echo get_theme_mod( 'email2' ); ?>">
                <?php echo get_theme_mod( 'email2' ); ?>
            </a>
        </div>
    </div>
    <div class="formulario__right">
        <?php echo do_shortcode('[contact-form-7 id="121" title="Formulário de contato 1"]'); ?>
    </div>
</div>