<?php
/**
 * Title: Footer links
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

<!-- wp:columns {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"br-list horizontal"} -->
<div class="wp-block-columns br-list horizontal" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:govbr/collapse {"blockId":"f4514252-a046-4a11-b15e-ad948a053776"} -->
<div class="wp-block-govbr-collapse br-list"><!-- wp:govbr/collapse-label {"parentBlockId":"f4514252-a046-4a11-b15e-ad948a053776"} -->
<div class="wp-block-govbr-collapse-label br-item header" data-toggle="collapse" data-target="brgov-collapse--f4514252-a046-4a11-b15e-ad948a053776"><div class="content"><div class="flex-fill"><?php _e('A list of links', 'govbr') ?></div><div class="support"><i class="fas fa-angle-down" aria-hidden="true" aria-label="Expand/Collapse"></i></div></div></div>
<!-- /wp:govbr/collapse-label -->

<!-- wp:govbr/collapse-content {"parentBlockId":"f4514252-a046-4a11-b15e-ad948a053776"} -->
<div id="brgov-collapse--f4514252-a046-4a11-b15e-ad948a053776" class="wp-block-govbr-collapse-content"><div><!-- wp:list {"className":"is-style-govbr-list"} -->
<ul class="is-style-govbr-list"><!-- wp:list-item -->
<li><a href="https://www.gov.br/ds"><?php _e('Item of the list', 'govbr') ?> 1</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://www.gov.br/ds"><?php _e('Item of the list', 'govbr') ?> 2</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://www.gov.br/ds"><?php _e('Item of the list', 'govbr') ?> 3</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="https://www.gov.br/ds"><?php _e('Item of the list', 'govbr') ?> 4</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div></div>
<!-- /wp:govbr/collapse-content --></div>
<!-- /wp:govbr/collapse --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:govbr/collapse {"blockId":"d40ef1a4-bc02-4d5c-ad3d-5dffe3831350"} -->
<div class="wp-block-govbr-collapse br-list"><!-- wp:govbr/collapse-label {"parentBlockId":"d40ef1a4-bc02-4d5c-ad3d-5dffe3831350"} -->
<div class="wp-block-govbr-collapse-label br-item header" data-toggle="collapse" data-target="brgov-collapse--d40ef1a4-bc02-4d5c-ad3d-5dffe3831350"><div class="content"><div class="flex-fill"><?php _e('Website pages', 'govbr') ?></div><div class="support"><i class="fas fa-angle-down" aria-hidden="true" aria-label="Expand/Collapse"></i></div></div></div>
<!-- /wp:govbr/collapse-label -->

<!-- wp:govbr/collapse-content {"parentBlockId":"d40ef1a4-bc02-4d5c-ad3d-5dffe3831350"} -->
<div id="brgov-collapse--d40ef1a4-bc02-4d5c-ad3d-5dffe3831350" class="wp-block-govbr-collapse-content"><div><!-- wp:page-list {"className":"is-style-govbr-list"} /--></div></div>
<!-- /wp:govbr/collapse-content --></div>
<!-- /wp:govbr/collapse --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:govbr/collapse {"blockId":"9d03aef0-9cb5-40cb-b8c2-de64a658e2d0"} -->
<div class="wp-block-govbr-collapse br-list"><!-- wp:govbr/collapse-label {"parentBlockId":"9d03aef0-9cb5-40cb-b8c2-de64a658e2d0"} -->
<div class="wp-block-govbr-collapse-label br-item header" data-toggle="collapse" data-target="brgov-collapse--9d03aef0-9cb5-40cb-b8c2-de64a658e2d0"><div class="content"><div class="flex-fill"><?php _e('Website categories', 'govbr') ?></div><div class="support"><i class="fas fa-angle-down" aria-hidden="true" aria-label="Expand/Collapse"></i></div></div></div>
<!-- /wp:govbr/collapse-label -->

<!-- wp:govbr/collapse-content {"parentBlockId":"9d03aef0-9cb5-40cb-b8c2-de64a658e2d0"} -->
<div id="brgov-collapse--9d03aef0-9cb5-40cb-b8c2-de64a658e2d0" class="wp-block-govbr-collapse-content"><div><!-- wp:categories {"className":"is-style-govbr-list"} /--></div></div>
<!-- /wp:govbr/collapse-content --></div>
<!-- /wp:govbr/collapse --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:govbr/collapse {"blockId":"262fdfc9-e2aa-4bce-87e6-cd73515c0737"} -->
<div class="wp-block-govbr-collapse br-list"><!-- wp:govbr/collapse-label {"parentBlockId":"262fdfc9-e2aa-4bce-87e6-cd73515c0737"} -->
<div class="wp-block-govbr-collapse-label br-item header" data-toggle="collapse" data-target="brgov-collapse--262fdfc9-e2aa-4bce-87e6-cd73515c0737"><div class="content"><div class="flex-fill"><?php _e('Latest posts', 'govbr') ?></div><div class="support"><i class="fas fa-angle-down" aria-hidden="true" aria-label="Expand/Collapse"></i></div></div></div>
<!-- /wp:govbr/collapse-label -->

<!-- wp:govbr/collapse-content {"parentBlockId":"262fdfc9-e2aa-4bce-87e6-cd73515c0737"} -->
<div id="brgov-collapse--262fdfc9-e2aa-4bce-87e6-cd73515c0737" class="wp-block-govbr-collapse-content"><div><!-- wp:latest-posts {"className":"is-style-govbr-list"} /--></div></div>
<!-- /wp:govbr/collapse-content --></div>
<!-- /wp:govbr/collapse --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|scale-up-4","bottom":"var:preset|spacing|scale-up-4","right":"0","left":"0"},"blockGap":"var:preset|spacing|scale-up-3"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--scale-up-4);padding-right:0;padding-bottom:var(--wp--preset--spacing--scale-up-4);padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|scale-up-2"}},"className":"social-network","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group social-network"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"800"}},"fontSize":"scale-base"} -->
<p class="has-scale-base-font-size" style="font-style:normal;font-weight:800;text-transform:uppercase"><?php _e('Social networks', 'govbr') ?></p>
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