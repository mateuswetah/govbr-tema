<?php
/**
 * Class for custom menu walker
 *
 * This file is used to define a custom menu walker, with custom css classes.
 *
 * @link https://developer.wordpress.org/reference/classes/walker_nav_menu/
 *
 * @since 0.1.0
 */

if ( ! class_exists( 'Gov_BR_Walker_Institutional_Menu' ) ) {
	/**
	 * Class for custom menu walker.
	 *
	 * This class is used to define a custom menu walker, with custom css classes.
	 *
	 * @since 0.1.0
	 */
	class Gov_BR_Walker_Institutional_Menu extends \Walker_Nav_Menu {


        /**
	     * Starts the element output.
         *
         * The $args parameter holds additional values that may be used with the child
         * class methods. Also includes the element output.
         *
         * @since 0.1.0
         *
         * @param string $output            Used to append additional content (passed by reference).
         * @param object $data_object       The data object.
         * @param int    $depth             Depth of the item.
         * @param array  $args              An array of additional arguments.
         * @param int    $current_object_id Optional. ID of the current item. Default 0.
         */
		public function start_el( &$output, $data_object, $depth = 0, $args = array(), $current_object_id = 0 ) {
            $item_link = $data_object->url ? $data_object->url : 'javascript: void(0)';
            $output .= '<a class="br-item" href="' . $item_link . '">' . $data_object->title;
		}


        /**
         * Ends the element output, if needed.
         *
         * The $args parameter holds additional values that may be used with the child class methods.
         *
         * @since 0.1.0
         *
         * @param string $output      Used to append additional content (passed by reference).
         * @param object $data_object The data object.
         * @param int    $depth       Depth of the item.
         * @param array  $args        An array of additional arguments.
         */
        public function end_el( &$output, $data_object, $depth = 0, $args = array() ) {
            $output .= '</a>';      
        }
	}
}
