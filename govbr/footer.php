<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @since 0.1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php block_template_part( 'footer' ); ?>

	<!-- Função de voltar ao topo -->
	<nav class="back-to-top active" aria-label="<?php _e( 'Voltar ao topo da página', 'govbr'); ?>">
		<a class="br-button primary circle">
			<span class="fa fa-chevron-up"></span>
			<span class="sr-only"><?php _e( 'Voltar ao topo da página', 'govbr'); ?></span>
		</a>
	</nav>

	<!-- Gestão de Cookies -->
	<?php if ( get_theme_mod('enable_feature_cookies_manager', true) ) : ?>
		<div class="br-cookiebar default d-none" tabindex="-1"></div>
	<?php endif; ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
