<?php
/**
 * Title: Rodapé com links
 * Slug: govbr/footer-links
 * Categories: footer
 * Block Types: core/template-part/footer
 * Inserter: false
 */

$image_placeholder_1 = esc_url( get_template_directory_uri() ) . '/assets/images/logo-negative.png';
$image_placeholder_2 = esc_url( get_template_directory_uri() ) . '/assets/images/logo-assign-negative.png';
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","right":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|scale-up-6","bottom":"var:preset|spacing|scale-up-4"}}},"className":"logo","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group logo" style="padding-top:var(--wp--preset--spacing--scale-up-6);padding-bottom:var(--wp--preset--spacing--scale-up-4)">
<!-- wp:image {"id":11552,"height":48,"sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo $image_placeholder_1 ?>" alt="" class="wp-image-11552" height="48"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":{"top":"0","left":"0"}}},"className":"br-list horizontal"} -->
<div class="wp-block-columns br-list horizontal" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%">

<!-- wp:govbr/collapse {"blockId":"fb6f2a37-b7b0-41b0-a3d2-ca727f650076"} -->
<div class="wp-block-govbr-collapse br-list"><!-- wp:govbr/collapse-label {"parentBlockId":"fb6f2a37-b7b0-41b0-a3d2-ca727f650076","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontSize":"scale-down-01"} -->
<div class="wp-block-govbr-collapse-label has-custom-font-size br-item has-scale-down-01-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase" data-toggle="collapse" data-breakpoint="true" data-target="brgov-collapse--fb6f2a37-b7b0-41b0-a3d2-ca727f650076"><div class="content"><div class="flex-fill"><?php _e('Uma lista de links', 'govbr' ) ?></div><div class="support"><i class="fas fa-angle-down" aria-hidden="true" aria-label="Expandir/Recolher"></i></div></div></div>
<!-- /wp:govbr/collapse-label -->

<!-- wp:govbr/collapse-content {"parentBlockId":"fb6f2a37-b7b0-41b0-a3d2-ca727f650076"} -->
<div id="brgov-collapse--fb6f2a37-b7b0-41b0-a3d2-ca727f650076" class="wp-block-govbr-collapse-content" hidden><div><!-- wp:list {"className":"is-style-govbr-list"} -->
<ul class="is-style-govbr-list"><!-- wp:list-item -->
<li><a href="https://www.gov.br"><?php _e('Item da lista', 'govbr' ) ?> 1</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://www.gov.br"><?php _e('Item da lista', 'govbr' ) ?> 2</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://www.gov.br"><?php _e('Item da lista', 'govbr' ) ?> 3</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://www.gov.br"><?php _e('Item da lista', 'govbr' ) ?> 4</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div></div>
<!-- /wp:govbr/collapse-content --></div>
<!-- /wp:govbr/collapse --></div>


<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:govbr/collapse {"blockId":"0f133070-2d9e-4601-a761-dc05fe8bbf61"} -->
<div class="wp-block-govbr-collapse br-list"><!-- wp:govbr/collapse-label {"parentBlockId":"0f133070-2d9e-4601-a761-dc05fe8bbf61","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontSize":"scale-down-01"} -->
<div class="wp-block-govbr-collapse-label has-custom-font-size br-item has-scale-down-01-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase" data-toggle="collapse" data-breakpoint="true" data-target="brgov-collapse--0f133070-2d9e-4601-a761-dc05fe8bbf61"><div class="content"><div class="flex-fill"><?php _e('Páginas do site', 'govbr' ) ?></div><div class="support"><i class="fas fa-angle-down" aria-hidden="true" aria-label="Expandir/Recolher"></i></div></div></div>
<!-- /wp:govbr/collapse-label -->

<!-- wp:govbr/collapse-content {"parentBlockId":"0f133070-2d9e-4601-a761-dc05fe8bbf61"} -->
<div id="brgov-collapse--0f133070-2d9e-4601-a761-dc05fe8bbf61" class="wp-block-govbr-collapse-content" hidden><div><!-- wp:page-list {"className":"is-style-govbr-list"} /--></div></div>
<!-- /wp:govbr/collapse-content --></div>
<!-- /wp:govbr/collapse --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:govbr/collapse {"blockId":"36c3487c-29d0-4df9-8cc7-cfdcb0398451"} -->
<div class="wp-block-govbr-collapse br-list"><!-- wp:govbr/collapse-label {"parentBlockId":"36c3487c-29d0-4df9-8cc7-cfdcb0398451","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontSize":"scale-down-01"} -->
<div class="wp-block-govbr-collapse-label has-custom-font-size br-item has-scale-down-01-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase" data-toggle="collapse" data-breakpoint="true" data-target="brgov-collapse--36c3487c-29d0-4df9-8cc7-cfdcb0398451"><div class="content"><div class="flex-fill"><?php _e('Categorias do site', 'govbr' ) ?></div><div class="support"><i class="fas fa-angle-down" aria-hidden="true" aria-label="Expandir/Recolher"></i></div></div></div>
<!-- /wp:govbr/collapse-label -->

<!-- wp:govbr/collapse-content {"parentBlockId":"36c3487c-29d0-4df9-8cc7-cfdcb0398451"} -->
<div id="brgov-collapse--36c3487c-29d0-4df9-8cc7-cfdcb0398451" class="wp-block-govbr-collapse-content" hidden><div><!-- wp:categories {"className":"is-style-govbr-list"} /--></div></div>
<!-- /wp:govbr/collapse-content --></div>
<!-- /wp:govbr/collapse --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:govbr/collapse {"blockId":"96a43978-6f4f-4936-8713-be599cd87254"} -->
<div class="wp-block-govbr-collapse br-list"><!-- wp:govbr/collapse-label {"parentBlockId":"96a43978-6f4f-4936-8713-be599cd87254","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontSize":"scale-down-01"} -->
<div class="wp-block-govbr-collapse-label has-custom-font-size br-item has-scale-down-01-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase" data-toggle="collapse" data-breakpoint="true" data-target="brgov-collapse--96a43978-6f4f-4936-8713-be599cd87254"><div class="content"><div class="flex-fill"><?php _e('Posts recentes', 'govbr' ) ?></div><div class="support"><i class="fas fa-angle-down" aria-hidden="true" aria-label="Expandir/Recolher"></i></div></div></div>
<!-- /wp:govbr/collapse-label -->

<!-- wp:govbr/collapse-content {"parentBlockId":"96a43978-6f4f-4936-8713-be599cd87254"} -->
<div id="brgov-collapse--96a43978-6f4f-4936-8713-be599cd87254" class="wp-block-govbr-collapse-content" hidden><div><!-- wp:latest-posts {"className":"is-style-govbr-list"} /--></div></div>
<!-- /wp:govbr/collapse-content --></div>
<!-- /wp:govbr/collapse --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|scale-up-4","bottom":"var:preset|spacing|scale-up-4","right":"0","left":"0"},"blockGap":"var:preset|spacing|scale-up-3"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--scale-up-4);padding-right:0;padding-bottom:var(--wp--preset--spacing--scale-up-4);padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|scale-up-2"}},"className":"social-network","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group social-network"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"800"}},"fontSize":"scale-base"} -->
<p class="has-scale-base-font-size" style="font-style:normal;font-weight:800;text-transform:uppercase"><?php _e('Redes sociais', 'govbr' ) ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"feedback-info-alternative","iconColorValue":"var(\u002d\u002dblue-warm-vivid-10, #D4E5FF)","customIconBackgroundColor":"#c5d4eb00","iconBackgroundColorValue":"#c5d4eb00","size":"has-normal-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|scale-base","left":"var:preset|spacing|scale-base"}},"layout":{"selfStretch":"fixed","flexSize":"48px"}},"className":"is-style-default"} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->

<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->

<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->

<!-- wp:social-link {"url":"https://telegram.com","service":"telegram"} /-->

<!-- wp:social-link {"url":"https://whatsapp.com","service":"whatsapp"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|scale-up-3"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group">

<!-- wp:image {"id":11588,"width":172,"sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium is-resized"><img src="<?php echo $image_placeholder_2 ?>" alt="" class="wp-image-11588" width="172" /></figure>
<!-- /wp:image -->

<!-- wp:image {"id":11588,"width":172,"sizeSlug":"medium","linkDestination":"none"} -->
<figure class="wp-block-image size-medium is-resized"><img src="<?php echo $image_placeholder_2 ?>" alt="" class="wp-image-11588" width="172" /></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->