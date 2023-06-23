<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gov_BR
 * @since 0.1.0 0.1.0
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

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
