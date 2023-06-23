<?php
/**
 * Gov BR Starter Content
 *
 * @link https://make.wordpress.org/core/2016/11/30/starter-content-for-themes-in-4-7/
 *
 * @since 0.1.0
 */

/**
 * Function to return the array of starter content for the theme.
 *
 * Passes it through the `gov_br_starter_content` filter before returning.
 *
 * @since 0.1.0
 *
 * @return array A filtered array of args for the starter_content.
 */
function gov_br_get_starter_content() {

	$starter_content_image_person = esc_url( get_template_directory_uri() ) . '/assets/images/starter_person.png';
	$starter_content_image_screenshot = esc_url( get_template_directory_uri() ) . '/assets/images/starter_screenshot.png';
	$starter_content_image_object = esc_url( get_template_directory_uri() ) . '/assets/images/starter_object.png';

	// Define and register starter content to showcase the theme on new sites.
	$starter_content = array(

		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		'posts'     => array(
			'front' => array(
				'post_type'    => 'page',
				'post_title'   => esc_html_x( 'Bem vindo ao tema do DS Gov', 'Theme starter content', 'govbr' ),
				'post_content' => '
					<!-- wp:media-text {"mediaPosition":"right","mediaId":12380,"mediaLink":"' . $starter_content_image_person . '","mediaType":"image","mediaWidth":31} -->
					<div class="wp-block-media-text has-media-on-the-right is-stacked-on-mobile" style="grid-template-columns:auto 31%"><div class="wp-block-media-text__content"><!-- wp:paragraph {"align":"left","placeholder":"Escreva o título...","fontSize":"scale-up-03"} -->
					<p class="has-text-align-left has-scale-up-03-font-size"><strong>Comunique-se com o cidadão brasileiro</strong> usando a linguagem visual pensada pelo <a href="https://www.gov.br/ds"><em>Design System</em> do Governo</a>.</p>
					<!-- /wp:paragraph -->
					
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"reading-light","fontSize":"scale-up-01"} -->
					<p class="has-reading-light-color has-text-color has-scale-up-01-font-size" style="font-style:normal;font-weight:500">E o melhor, sem sair do <a href="http://br.wordpress.org/" data-type="URL" data-id="br.wordpress.org/">WordPress</a>!</p>
					<!-- /wp:paragraph -->
					
					<!-- wp:spacer {"height":"39px"} -->
					<div style="height:39px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://www.gov.br/ds/introducao/sobre">O que é o DS Gov?</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div><figure class="wp-block-media-text__media"><img src="' . $starter_content_image_person . '" alt="' . esc_html_x( 'Ilustração de um homem sorrindo segurando um livro.', 'Theme starter content', 'govbr' ) . '" class="wp-image-12380 size-full"/></figure></div>
					<!-- /wp:media-text -->
					
					<!-- wp:cover {"overlayColor":"surface-light-alternative","align":"full","layout":{"type":"constrained"}} -->
					<div class="wp-block-cover alignfull"><span aria-hidden="true" class="wp-block-cover__background has-surface-light-alternative-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:media-text {"mediaPosition":"right","mediaId":12382,"mediaType":"image","mediaWidth":29} -->
					<div class="wp-block-media-text has-media-on-the-right is-stacked-on-mobile" style="grid-template-columns:auto 29%"><div class="wp-block-media-text__content"><!-- wp:heading -->
					<h2 class="wp-block-heading">O que é?</h2>
					<!-- /wp:heading -->
					
					<!-- wp:paragraph {"align":"left","placeholder":"Escreva o título...","fontSize":"scale-base"} -->
					<p class="has-text-align-left has-scale-base-font-size">Com o tema do DS Gov para WordPress, você pode criar sites que respeitem a nova identidade visual de forma fácil e intuitiva. O tema é um projeto de código aberto desenvolvido por uma comunidade de desenvolvedores interessada em oferecer opções para instituições que querem seguir o padrão do DS Gov mas que não mantém sua infraestrutura no portal Gov BR (onde é usado o CMS Plone). Este tema usa das tecnologias mais modernas do WordPress e pode ser facilmente estendido e customizado por quem já tem experiência com o CMS mais usado no mundo.</p>
					<!-- /wp:paragraph -->
					
					<!-- wp:paragraph -->
					<p>Basta ativá-lo, acessar o menu Personalizar e você já terá diversas opções em mãos para adaptar o conteúdo à realidade de sua instituição.</p>
					<!-- /wp:paragraph --></div><figure class="wp-block-media-text__media"><img src="' . $starter_content_image_screenshot . '" alt="' . esc_html_x( 'Captura de tela mostrando a página de selecionar temas do WordPress com o menu Personalizar ao lado.', 'Theme starter content', 'govbr' ) . '" class="wp-image-12382 size-full"/></figure></div>
					<!-- /wp:media-text --></div></div>
					<!-- /wp:cover -->
					
					<!-- wp:pattern {"slug":"govbr/banner-numbers"} /-->

					<!-- wp:pattern {"slug":"govbr/banner-cards-icons"} /-->
					
					<!-- wp:media-text {"mediaId":12384,"mediaType":"image","mediaWidth":26} -->
					<div class="wp-block-media-text is-stacked-on-mobile" style="grid-template-columns:26% auto"><figure class="wp-block-media-text__media"><img src="' . $starter_content_image_object . '" alt="' . esc_html_x( 'Ilustração representando uma página de buscas de um site.', 'Theme starter content', 'govbr' ) . '" class="wp-image-12384 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"placeholder":"Conteúdo..."} -->
					<p>Tire proveito da rica extensibilidade do WordPress e do seu repositório de plugins para prover recursos de navegação, busca e organização de conteúdos. Use elementos visuais para deixar seu site mais atrativo sem fugir da estética esperada de um site institucional vinculado ao Governo:</p>
					<!-- /wp:paragraph -->
					
					<!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
					<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button">Botão primário</a></div>
					<!-- /wp:button -->
					
					<!-- wp:button {"className":"is-style-outline"} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Botão Secundário</a></div>
					<!-- /wp:button -->
					
					<!-- wp:button {"className":"is-style-tertiary"} -->
					<div class="wp-block-button is-style-tertiary"><a class="wp-block-button__link wp-element-button">Botão Tertiário</a></div>
					<!-- /wp:button -->
					
					<!-- wp:button {"className":"is-style-highlight is-style-magic"} -->
					<div class="wp-block-button is-style-highlight is-style-magic"><a class="wp-block-button__link wp-element-button">Mágica!</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div></div>
					<!-- /wp:media-text -->',
			),
			'about',
			'contact',
			'blog',
		),

		// Default to a static front page and assign the front and posts pages.
		'options'   => array(
			'show_on_front'  => 'page',
			'page_on_front'  => '{{front}}',
			'page_for_posts' => '{{blog}}',
		),

		// Set up nav menus for each of the two areas registered in the theme.
		'nav_menus' => array(
			// Assign a menu to the "primary" location.
			'primary' => array(
				'name'  => esc_html__( 'Menu principal', 'govbr' ),
				'items' => array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_contact',
				),
			),
			// Assign a menu to the "primary" location.
			'institutional' => array(
				'name'  => esc_html__( 'Links institucionais', 'govbr' ),
				'items' => array(
					'link_instiutional_1'   =>  array(
						'title' =>  _x( 'Órgãos do Governo', 'Theme starter content', 'govbr' ),
						'url'   =>  'https://www.gov.br/pt-br/orgaos-do-governo',
					),
					'link_instiutional_2'   =>  array(
						'title' =>  _x( 'Acesso à Informação', 'Theme starter content', 'govbr' ),
						'url'   =>  'https://www.gov.br/acessoainformacao/pt-br',
					),
					'link_instiutional_3'   =>  array(
						'title' =>  _x( 'Legislação', 'Theme starter content', 'govbr' ),
						'url'   =>  'http://www4.planalto.gov.br/legislacao',
					),
					'link_instiutional_4'   =>  array(
						'title' =>  _x( 'Acessibilidade', 'Theme starter content', 'govbr' ),
						'url'   =>  'https://www.gov.br/governodigital/pt-br/acessibilidade-digital',
					),
				),
			)
		),
	);

	/**
	 * Filters the array of starter content.
	 *
	 * @since 0.1.0
	 *
	 * @param array $starter_content Array of starter content.
	 */
	return apply_filters( 'gov_br_starter_content', $starter_content );
}
