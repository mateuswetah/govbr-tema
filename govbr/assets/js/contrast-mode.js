function toggleContrastMode() { // jshint ignore:line
	var toggler = document.getElementById( 'contrast-mode-toggler' );

	if ( 'false' === toggler.getAttribute( 'aria-pressed' ) ) {
		toggler.setAttribute( 'aria-pressed', 'true' );
		document.documentElement.classList.add( 'is-contrast-mode' );
		document.body.classList.add( 'is-contrast-mode' );
		window.localStorage.setItem( 'govbrContrastMode', 'yes' );
	} else {
		toggler.setAttribute( 'aria-pressed', 'false' );
		document.documentElement.classList.remove( 'is-contrast-mode' );
		document.body.classList.remove( 'is-contrast-mode' );
		window.localStorage.setItem( 'govbrContrastMode', 'no' );
	}
}

function govbrIsContrastMode() {
	var isContrastMode = window.matchMedia( '(prefers-contrast: more)' ).matches;

	if ( 'yes' === window.localStorage.getItem( 'govbrContrastMode' ) )
		isContrastMode = true;
	else if ( 'no' === window.localStorage.getItem( 'govbrContrastMode' ) )
		isContrastMode = false;

	return isContrastMode;
}

function contrastModeInitialLoad() {
	var toggler = document.getElementById( 'contrast-mode-toggler' );
	toggler.onclick = toggleContrastMode;

	var isContrastMode = govbrIsContrastMode();

	if ( isContrastMode ) {
		document.documentElement.classList.add( 'is-contrast-mode' );
		document.body.classList.add( 'is-contrast-mode' );
	} else {
		document.documentElement.classList.remove( 'is-contrast-mode' );
		document.body.classList.remove( 'is-contrast-mode' );
	}

	if ( toggler && isContrastMode ) {
		toggler.setAttribute( 'aria-pressed', 'true' );
	}
}


contrastModeInitialLoad();
