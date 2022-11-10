<?php get_header(); ?>
<div class="opacity"></div>
<main>
    <!-- MSG Credito -->
    <div class="container-fluid message-credit">

        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="message-credit-title"><?php echo nl2br(get_theme_mod('message_credit')); ?></h1>
                </div>

                
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="score-button-default">QUERO UMA CONSULTORIA!</a>
                </div>
            </div>
        </div>
        
    </div>
    <!-- End Timeline -->

    <!-- Contratação -->

    <div class="container contraction">
        <div class="row">
            <div class="col-12 contraction_title text-center">
                <h4><?php echo nl2br(get_theme_mod('contraction_title')); ?></h4>
            </div>
        </div>

        <div class="row">
            <div class="col-12 contraction_text text-center">
                <h2><?php echo nl2br(get_theme_mod('contraction_text')); ?></h2>
            </div>
        </div>

        <div class="row contraction_content">
            <div class="col-6 d-flex justify-content-center flex-column">
                <h6 class="contract_title_content">
                    <?php echo nl2br(get_theme_mod('contract_title_content', 'AUMENTE SEU SCORE E TENHA CRÉDITO PESSOAL!')); ?>
                </h6>
                <p>
                    <?php echo nl2br(get_theme_mod('contraction_content', 'Todo mundo, em algum momento da vida, precisa de crédito. Seja para fazer um cartão em uma loja ou para financiar um imóvel ou veículo, a pontuação é essencial para movimentar a economia, possibilitando compras e vendas de diversos valores. Realizamos consultoria para melhorar, através de uma nova reavaliação com finalidade de aumentar seu SCORE.')); ?>
                </p>
            </div>

            <div class="col-md-offset-1 col-md-5 contraction_image">
                <?php echo wp_get_attachment_image(get_theme_mod('contraction_image'), 'view_large'); ?>
            </div>
        </div>
    </div>
    

    <div class="container advice">
        <div class="row">
            <div class="col-12 advice_subtitle text-center">
                <h6><?php echo nl2br(get_theme_mod('advice_subtitle', 'VENHA COM A GENTE E TENHA CRÉDITO FÁCIL E RÁPIDO')); ?></h6>
            </div>
        </div>

        <div class="row">
            <div class="col-12 advice_title text-center">
                <h2>
                    <?php echo nl2br(get_theme_mod('advice_title', 'Por que a assessoria da Alto Score 990 é diferente?')); ?>
                </h2>
            </div>
        </div>

        <div class="row">
            <div class="col-6 d-flex flex-column justify-content-center">
                <div class="row">
                    <div class="col-12 advice_content_1_title">
                        <h6><?php echo nl2br(get_theme_mod('advice_content_1_title', 'AUMENTE SEU SCORE CONOSCO')); ?></h6>

                        <p><?php echo nl2br(get_theme_mod('advice_content_1', 'A Alto score 990 apresenta a solução para as reavaliações de score que você precisa para voltar a ter crédito no mercado ou realizar financiamentos. Por meio da nossa consultoria você aumenta o seu score com sucesso!')); ?></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 advice_content_2_title">
                        <h6><?php echo nl2br(get_theme_mod('advice_content_2_title', 'COMO SE MEDE O SCORE?')); ?></h6>

                        <p><?php echo nl2br(get_theme_mod('advice_content_2', '- de 0 a 300 pontos: alto risco de inadimplência pelos próximos 12 meses; - de 301 a 700 pontos: riscos médio de inadimplência pelos próximos 12 meses;
- 701 a 1000 pontos: baixo risco de inadimplência pelos próximos 12 meses;')); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <figure class="advice_image"><?php echo wp_get_attachment_image(get_theme_mod('advice_image'), 'view_large'); ?></figure>
            </div>
        </div>

        <div class="row advice-button">
            <div class="col-12 text-center">
                <a href="https://wa.me/55<?php echo nl2br(get_theme_mod('whats')); ?>" class="score-button-default">
                <i class="fab fa-whatsapp"></i> QUERO UMA CONSULTORIA!
                </a>
            </div>
        </div>
    </div>

    <div class="container clients">
        <div class="row">
            <div class="col-12 text-center clients_title">
                <h6><?php echo nl2br(get_theme_mod('clients_subtitle')); ?></h6>
                <h2><?php echo nl2br(get_theme_mod('clients_title')); ?></h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12 clients_carousel">

            </div>
        </div>
    </div>

    <!-- Marcas -->
    <div class="container-fluid marcs">
        <div class="container-auaha marcs__container">
            <header class="marcs__title">
                <h3 class="marcs__title_text"><?php echo nl2br(get_theme_mod('marcs__title')); ?></h3>
            </header>
            <article class="marcs__content">
                <?php
                $marcs = json_decode(get_theme_mod('partner'));

                foreach ($marcs as $value) {
                    # code...
                    echo '<div class="marcs__item"><figure><img src="' . $value->full->url . '" alt/></figure></div>';
                }
                ?>

            </article>
        </div>
    </div>

    <!-- Parceiros -->
    <div class="container-fluid parceiros">
        <div class="parceiros__container container-auaha">
            <header class="parceiros__title">
                <h2>Parceiros</h2>
            </header>
            <!-- Paginação -->
            <div class="parceiros__pagination">
                <div class="rmb-arrow-green PCprev" tabindex="0" role="button" aria-label="Previous slide"></div>
                <div class="rmb-arrow-green PCnext" tabindex="0" role="button" aria-label="Next slide"></div>
            </div>
            <article class="parceiros__content">
                <div class="swiper-wrapper">
                    <?php
                    $parcItens = json_decode(get_theme_mod('parceiros'));

                    if ($parcItens) {
                        foreach ($parcItens as $key => $parceiro) {
                            printf('<div class="swiper-slide"><img src="%s" alt /></div>', $parceiro->full->url);
                        }
                    } else {
                        echo 'Não há parceiros cadastrados no momento!';
                    }
                    ?>
                </div>
            </article>
        </div>
    </div>
</main>

<?php get_footer(); ?>