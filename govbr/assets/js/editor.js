/* global setTimeout */
wp.domReady( function() {

	// Unregister "Wide" Separator Style.
	wp.blocks.unregisterBlockStyle( 'core/separator', 'wide' );

	// Other block styles may be unregistered here if they were registeres in hte js side...

} );
