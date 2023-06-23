<?php
/**
 * Class for adding a Signature field to the settings page
 *
 * @link https://developer.wordpress.org/reference/functions/add_settings_field/
 *
 * @since 0.1.0
 */

if ( ! class_exists( 'Gov_BR_Signature_Field' ) ) {

    class Gov_BR_Signature_Field {

        public function __construct() {
            add_action( 'admin_init', array( $this, 'initialize_fields' ) );
        }

        function initialize_fields() {

            register_setting(
                'general',
                'govbr-signature-field__text',
                array(
                    'type' => 'string',
                    'show_in_rest' => array(
                        'name' => 'govbr-signature-field__text',
                    ),
                    'default' => __( 'Ministério ou Instituição Superior do Orgão do Site', 'govbr' )
                )
            );
            
            register_setting(
                'general',
                'govbr-signature-field__url',
                array(
                    'type' => 'string',
                    'show_in_rest' => array(
                        'name' => 'govbr-signature-field__url',
                    ),
                    'default' => __( 'https://www.gov.br/', 'govbr' )
                )
            );

            add_settings_field(
                'govbr-signature-field__text',
                __( 'Título da Assinatura', 'govbr' ),
                array( $this, 'render_text_field' ),
                'general',
                'default',
                array( 'label_for' => 'govbr-signature-field__text' ),
            );

            add_settings_field(
                'govbr-signature-field__url',
                __( 'Link da Assinatura', 'govbr' ),
                array( $this, 'render_url_field' ),
                'general',
                'default',
                array( 'label_for' => 'govbr-signature-field__url' ),
            );
        }

        function render_text_field( $args ) {
            echo '<input type="text" id="govbr-signature-field__text" name="govbr-signature-field__text" value="' . esc_attr( get_option('govbr-signature-field__text') ) . '" />';
        }

        function render_url_field( $args ) {
            echo '<input type="url" id="govbr-signature-field__url" name="govbr-signature-field__url" value="' . esc_url( get_option('govbr-signature-field__url') ) . '" />';
        }

    }
}