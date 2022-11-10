<?php
/**
 * Insert all Customizes Panels in one function
 */
function rmb_customize_panels($wp_customize)
{
    $wp_customize->add_panel('score_theme_options', array(
        'priority'       => 40,
        'capability'     => 'edit_theme_options',
        'title'          => 'Opções tema Score',
        'description'    => 'Edite e altere informações do tema score',
    ));
}
add_action('customize_register', 'rmb_customize_panels');

/**
 * Insert all Customizes Sections in one function
 */
function rmb_customize_sections($wp_customize)
{
    $wp_customize->add_section('section_message_credit', array(
        'title'    => __('Mensagem de crédito', 'score'),
        'capability' => 'edit_theme_options',
        'description' => __('Edite os conteúdos da homepage'),
        'priority' => 1,
        'panel'            => 'score_theme_options'
    ));

	$wp_customize->add_section('phone_whats', array(
        'title'    => __('Telefone e Whatsapp', 'score'),
        'capability' => 'edit_theme_options',
        'description' => __('Altere o número de telefone e whatsapp do tema'),
        'priority' => 1,
        'panel'            => 'score_theme_options'
    ));

	$wp_customize->add_section('contraction', array(
        'title'    => __('Contratação', 'score'),
        'capability' => 'edit_theme_options',
        'description' => __('Altere os campos do bloco contratação'),
        'priority' => 1,
        'panel'            => 'score_theme_options'
    ));

	//advice
	$wp_customize->add_section('advice', array(
        'title'    => __('Assessoria', 'score'),
        'capability' => 'edit_theme_options',
        'description' => __('Altere os campos do bloco assessoria'),
        'priority' => 1,
        'panel'            => 'score_theme_options'
    ));
}
add_action('customize_register', 'rmb_customize_sections');

/**
 * Insert all Customizes Settings in one function
 */
function rmb_customize_settings($wp_customize)
{
	 /**
     * Home page title
     * section: home_title
     */
    $wp_customize->add_setting('message_credit', array(
        'default'           => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_setting('phone', array(
        'default'           => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('whats', array(
        'default'           => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('contraction_title', array(
        'default'           => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_setting('contraction_text', array(
        'default'           => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('contract_title_content', array(
        'default'           => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_setting('contraction_content', array(
        'default'           => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_setting('contraction_image', array(
        'default'           => '',
        'transport' => 'postMessage',
    ));

	//Assessoria
    $wp_customize->add_setting('advice_subtitle', array(
        'default'           => '',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_setting('advice_title', array(
        'default'           => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_setting('advice_content_1_title', array(
        'default'           => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_setting('advice_content_1', array(
        'default'           => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_setting('advice_content_2_title', array(
        'default'           => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_setting('advice_content_2', array(
        'default'           => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_setting('advice_image', array(
        'default'           => '',
        'transport' => 'postMessage',
    ));
}

add_action('customize_register', 'rmb_customize_settings');

function rmb_custom_controls($wp_customize)
{
		
	$wp_customize->add_control('advice_subtitle', array(
        'type' => 'text',
        'section' => 'advice', // // Add a default or your own section
        'label' => __('Subtítulo'),
        'description' => __('Altere o subtítulo do bloco assessoria.'),
    ));

	$wp_customize->add_control('advice_title', array(
        'type' => 'text',
        'section' => 'advice', // // Add a default or your own section
        'label' => __('Subtítulo'),
        'description' => __('Altere o Título do bloco assessoria.'),
    ));


	$wp_customize->add_control('advice_content_1_title', array(
        'type' => 'text',
        'section' => 'advice', // // Add a default or your own section
        'label' => __('Titulo Primeiro Conteúdo'),
        'description' => __('Altere o Título do primeiro conteúdo de assessoria.'),
    ));

	$wp_customize->add_control('advice_content_1', array(
        'type' => 'textarea',
        'section' => 'advice', // // Add a default or your own section
        'label' => __('Primeiro conteúdo'),
        'description' => __('Altere o Primeiro conteúdo de assessoria.'),
    ));

	$wp_customize->add_control('advice_content_2_title', array(
        'type' => 'text',
        'section' => 'advice', // // Add a default or your own section
        'label' => __('Titulo Segundo Conteúdo'),
        'description' => __('Altere o Título do Segundo conteúdo de assessoria.'),
    ));

	$wp_customize->add_control('advice_content_2', array(
        'type' => 'textarea',
        'section' => 'advice', // // Add a default or your own section
        'label' => __('Segundo conteúdo'),
        'description' => __('Altere o Segundo conteúdo de assessoria.'),
    ));

	$wp_customize->add_control( 
		new WP_Customize_Media_Control( 
		  $wp_customize, 'advice_image', 
		  	[
				'label' => __( 'Imagem destaque', 'theme_textdomain' ), 
				'section' => 'advice', 
				'mime_type' => 'image', // other options, e.g. audio 
			]
	) );

	$wp_customize->add_control('message_credit', array(
        'type' => 'textarea',
        'section' => 'section_message_credit', // // Add a default or your own section
        'label' => __('Mensagem de crédito'),
        'description' => __('Altere o texto da informação de crédito chamativa.'),
    ));

	//Contratação
	$wp_customize->add_control('contraction_title', array(
        'type' => 'text',
        'section' => 'contraction', // // Add a default or your own section
        'label' => __('Titulo Contratação'),
        'description' => __('Altere o texto do titulo da contratação.'),
    ));

	$wp_customize->add_control('contraction_text', array(
        'type' => 'textarea',
        'section' => 'contraction', // // Add a default or your own section
        'label' => __('Texto Contratação'),
        'description' => __('Altere o texto do bloco de contratação.'),
    ));

	$wp_customize->add_control('contract_title_content', array(
        'type' => 'text',
        'section' => 'contraction', // // Add a default or your own section
        'label' => __('Titulo Conteúdo Contratação'),
        'description' => __('Altere o texto do titulo do conteúdo do bloco de contratação.'),
    ));
	$wp_customize->add_control('contraction_content', array(
        'type' => 'textarea',
        'section' => 'contraction', // // Add a default or your own section
        'label' => __('Conteúdo Contratação'),
        'description' => __('Altere o texto do conteúdo do bloco de contratação.'),
    ));

	$wp_customize->add_control( 
		new WP_Customize_Media_Control( 
		  $wp_customize, 'contraction_image', 
		  	[
				'label' => __( 'Imagem destaque', 'theme_textdomain' ), 
				'section' => 'contraction', 
				'mime_type' => 'image', // other options, e.g. audio 
			]
	) );

	//Phone and Whats
	$wp_customize->add_control('phone', array(
        'type' => 'text',
        'section' => 'phone_whats', // // Add a default or your own section
        'label' => __('Telefone para contato'),
        'description' => __('Altere o número de telefone para contato.'),
    ));
	//Phone and Whats
	$wp_customize->add_control('whats', array(
        'type' => 'text',
        'section' => 'phone_whats', // // Add a default or your own section
        'label' => __('Número de whatsapp'),
        'description' => __('Altere o número de whatsapp para contato.'),
    ));
}

add_action('customize_register', 'rmb_custom_controls');

function rmb_custom_partials($wp_customize)
{
	//Message credit
	$wp_customize->selective_refresh->add_partial(
        'message_credit',
        [
            'selector' => '.message-credit-title',
            'render_callback' => 'theme_customize_message_score',
            'container_inclusive' => false,
            'fallback_refresh' => false
        ]
    );
	//Message credit
	$wp_customize->selective_refresh->add_partial(
        'contraction_title',
        [
            'selector' => '.contraction_title > h4',
            'render_callback' => 'theme_customize_contraction_title',
            'container_inclusive' => false,
            'fallback_refresh' => false
        ]
    );
	$wp_customize->selective_refresh->add_partial(
        'contraction_text',
        [
            'selector' => '.contraction_text > h2',
            'render_callback' => 'theme_customize_contraction_text',
            'container_inclusive' => false,
            'fallback_refresh' => false
        ]
    );

	$wp_customize->selective_refresh->add_partial(
        'contraction_image',
        [
            'selector' => '.contraction_image',
            'render_callback' => 'theme_customize_contraction_image',
            'container_inclusive' => false,
            'fallback_refresh' => false
        ]
    );

	$wp_customize->selective_refresh->add_partial(
        'contraction_content',
        [
            'selector' => '.contraction_content p',
            'render_callback' => 'theme_customize_contraction_content',
            'container_inclusive' => false,
            'fallback_refresh' => false
        ]
    );
	$wp_customize->selective_refresh->add_partial(
        'contract_title_content',
        [
            'selector' => '.contract_title_content',
            'render_callback' => 'theme_customize_contraction_title_content',
            'container_inclusive' => false,
            'fallback_refresh' => false
        ]
    );

	$wp_customize->selective_refresh->add_partial(
        'advice_subtitle',
        [
            'selector' => '.advice_subtitle > h6',
            'render_callback' => 'theme_customize_advice_subtitle',
            'container_inclusive' => false,
            'fallback_refresh' => false
        ]
    );
	$wp_customize->selective_refresh->add_partial(
        'advice_title',
        [
            'selector' => '.advice_title > h6',
            'render_callback' => 'theme_customize_advice_title',
            'container_inclusive' => false,
            'fallback_refresh' => false
        ]
    );

	$wp_customize->selective_refresh->add_partial(
        'advice_content_1_title',
        [
            'selector' => '.advice_content_1_title > h6',
            'render_callback' => 'theme_customize_advice_content_1_title',
            'container_inclusive' => false,
            'fallback_refresh' => false
        ]
    );
	$wp_customize->selective_refresh->add_partial(
        'advice_content_1',
        [
            'selector' => '.advice_content_1_title > p',
            'render_callback' => 'theme_customize_advice_content_1',
            'container_inclusive' => false,
            'fallback_refresh' => false
        ]
    );

	$wp_customize->selective_refresh->add_partial(
        'advice_content_2_title',
        [
            'selector' => '.advice_content_2_title > h6',
            'render_callback' => 'theme_customize_advice_content_2_title',
            'container_inclusive' => false,
            'fallback_refresh' => false
        ]
    );
	$wp_customize->selective_refresh->add_partial(
        'advice_content_2',
        [
            'selector' => '.advice_content_2_title > p',
            'render_callback' => 'theme_customize_advice_content_2',
            'container_inclusive' => false,
            'fallback_refresh' => false
        ]
    );
}

add_action('customize_register', 'rmb_custom_partials');



function theme_customize_advice_content_1() {
	echo nl2br(get_theme_mod('advice_content_1'));
}
function theme_customize_advice_content_1_title() {
	echo nl2br(get_theme_mod('advice_content_1_title'));
}
function theme_customize_advice_content_2() {
	echo nl2br(get_theme_mod('advice_content_2'));
}
function theme_customize_advice_content_2_title() {
	echo nl2br(get_theme_mod('advice_content_2_title'));
}

function theme_customize_advice_subtitle() {
	echo nl2br(get_theme_mod('advice_subtitle'));
}

function theme_customize_advice_title() {
	echo nl2br(get_theme_mod('advice_title'));
}

function theme_customize_contraction_image() {
	echo wp_get_attachment_image(get_theme_mod('contraction_image'), 'view_large');
}

function theme_customize_contraction_title_content() {
	echo nl2br(get_theme_mod('contract_title_content'));
}
function theme_customize_contraction_content() {
	echo nl2br(get_theme_mod('contraction_content'));
}

function theme_customize_message_score() {
	echo nl2br(get_theme_mod('message_credit'));
}

function theme_customize_contraction_title() {
	echo nl2br(get_theme_mod('contraction_title'));
}
function theme_customize_contraction_text() {
	echo nl2br(get_theme_mod('contraction_text'));
}

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function auaha_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function auaha_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function auaha_customize_preview_js() {
	wp_enqueue_script( 'auaha_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'auaha_customize_preview_js' );
