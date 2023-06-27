function toggleCookiesBarOpen() { // jshint ignore:line
	var toggler = document.getElementById( 'contrast-mode-toggler' );

	if ( 'false' === toggler.getAttribute( 'aria-pressed' ) ) {
		toggler.setAttribute( 'aria-pressed', 'true' );
		window.localStorage.setItem( 'govbrCookiesBarOpen', 'yes' );
	} else {
		toggler.setAttribute( 'aria-pressed', 'false' );
		window.localStorage.setItem( 'govbrCookiesBarOpen', 'no' );
	}
}

function govbrIsCookiesBarOpen() {
	var isCookiesBarOpen = true;

	if ( 'yes' === window.localStorage.getItem( 'govbrCookiesBarOpen' ) )
		isCookiesBarOpen = true;
	else if ( 'no' === window.localStorage.getItem( 'govbrCookiesBarOpen' ) )
		isCookiesBarOpen = false;

	return isCookiesBarOpen;
}

function cookiesManagerInitialLoad() {
	var toggler = document.getElementById( 'cookies-manager-toggler' );

    if ( ! toggler ) 
        return;

	toggler.onclick = toggleCookiesBar;

	var isCookiesBarOpen = govbrIsCookiesBar();

	if ( toggler && isCookiesBarOpen )
		toggler.setAttribute( 'aria-pressed', 'true' );
}


cookiesManagerInitialLoad();