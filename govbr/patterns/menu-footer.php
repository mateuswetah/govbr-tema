
<?php
/**
 * Title: Parte inferior do menu lateral
 * Slug: govbr/menu-footer
 * Categories: header
 * Block Types: core/group
 * Inserter: false
 * Viewport Width: 964
 */

$image_placeholder_1 = esc_url( get_template_directory_uri() ) . '/assets/images/logo-positive.png';
?>

<!-- wp:group {"style":{"layout":{"selfStretch":"fill"},"border":{"bottom":{"color":"var:preset|color|border-light","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|scale-base","bottom":"var:preset|spacing|scale-base","right":"var:preset|spacing|scale-up-5","left":"var:preset|spacing|scale-up-5"},"blockGap":"var:preset|spacing|scale-up-2"}},"className":"menu-logos","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group menu-logos" style="border-bottom-color:var(--wp--preset--color--border-light);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--scale-base);padding-right:var(--wp--preset--spacing--scale-up-5);padding-bottom:var(--wp--preset--spacing--scale-base);padding-left:var(--wp--preset--spacing--scale-up-5)"><!-- wp:image {"id":11587,"height":40,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo $image_placeholder_1; ?>" alt="" class="wp-image-11587" height="40"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":11587,"height":40,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo $image_placeholder_1; ?>" alt="" class="wp-image-11587" height="40"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"selfStretch":"fill"},"border":{"bottom":{"color":"var:preset|color|border-light","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|scale-up-2","bottom":"var:preset|spacing|scale-up-2","right":"var:preset|spacing|scale-up-5","left":"var:preset|spacing|scale-up-5"},"blockGap":"var:preset|spacing|scale-up-2"}},"className":"menu-links","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group menu-links" style="border-bottom-color:var(--wp--preset--color--border-light);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--scale-up-2);padding-right:var(--wp--preset--spacing--scale-up-5);padding-bottom:var(--wp--preset--spacing--scale-up-2);padding-left:var(--wp--preset--spacing--scale-up-5)"><!-- wp:paragraph {"fontSize":"scale-base"} -->
<p class="has-scale-base-font-size"><a href="https://www.gov.br/ds/components/menu" target="_blank" rel="noreferrer noopener"><?php echo __( 'Link externo', 'govbr' ); ?> 1</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"scale-base"} -->
<p class="has-scale-base-font-size"><a href="https://www.gov.br/ds/components/menu" target="_blank" rel="noreferrer noopener"><?php echo __( 'Link externo', 'govbr' ); ?> 2</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"selfStretch":"fill"},"border":{"bottom":{"color":"var:preset|color|border-light","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|scale-base","bottom":"var:preset|spacing|scale-base","right":"var:preset|spacing|scale-up-5","left":"var:preset|spacing|scale-up-5"}}},"className":"social-network","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group social-network" style="border-bottom-color:var(--wp--preset--color--border-light);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--scale-base);padding-right:var(--wp--preset--spacing--scale-up-5);padding-bottom:var(--wp--preset--spacing--scale-base);padding-left:var(--wp--preset--spacing--scale-up-5)"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"scale-base"} -->
<p class="has-scale-base-font-size" style="font-style:normal;font-weight:600"><?php echo __( 'Redes sociais', 'govbr' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"feedback-info","iconColorValue":"var(\u002d\u002dblue-warm-vivid-60, #155BCB)","size":"has-small-icon-size","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->

<!-- wp:social-link {"url":"https://youtube.com","service":"youtube"} /-->

<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->

<!-- wp:social-link {"url":"https://telegram.com","service":"telegram"} /-->

<!-- wp:social-link {"url":"https://whatsapp.com","service":"whatsapp"} /-->

<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"selfStretch":"fill"},"spacing":{"padding":{"top":"var:preset|spacing|scale-up-2","right":"var:preset|spacing|scale-up-2","bottom":"var:preset|spacing|scale-up-2","left":"var:preset|spacing|scale-up-2"}}},"className":"menu-info","layout":{"type":"constrained"}} -->
<div class="wp-block-group menu-info" style="padding-top:var(--wp--preset--spacing--scale-up-2);padding-right:var(--wp--preset--spacing--scale-up-2);padding-bottom:var(--wp--preset--spacing--scale-up-2);padding-left:var(--wp--preset--spacing--scale-up-2)"><!-- wp:paragraph {"align":"center","fontSize":"scale-down-01"} -->
<p class="has-text-align-center has-scale-down-01-font-size"><?php echo __( 'Todo o conteúdo deste site está publicado sob a licença <strong>Creative Commons Atribuição-SemDerivações 3.0</strong>', 'govbr' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->