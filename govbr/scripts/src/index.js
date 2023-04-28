// GOVBR INITILIZATIONS SCRIPT
// This file holds the logic initializing components that rely on the DSGov.br scripts
import * as core from '@govbr-ds/core/dist/core.min.js';

/**
 * This routine checks if the page document is loaded.
 * We do this to be able to make sure elements are already
 * present in DOM.
 *
 * @param {Function} callback
 */
const performWhenDocumentIsLoaded = ( callback ) => {
	if ( /comp|inter|loaded/.test( document.readyState ) ) callback();
	else document.addEventListener( 'DOMContentLoaded', callback, false );
};

/**
 * Looks for header components to initialize them
 */
function setupHeader() {
	document.querySelectorAll('.br-header')
		.forEach((headerElement) => {
			new core.BRHeader('br-header', headerElement)
		});
}

/**
 * Looks for menu components to initialize them
 */
function setupMenu() {
	document.querySelectorAll('.br-menu')
		.forEach((menuElement) => {
			new core.BRMenu('br-menu', menuElement)
		});
}

/**
 * Looks for collapses components to initialize them
 */
function setupCollapses() {
	document.querySelectorAll('[data-toggle="collapse"]')
		.forEach((trigger) => {
			const config = {
				iconToHide: 'fa-chevron-up',
				iconToShow: 'fa-chevron-down',
				trigger,
				useIcons: true,
			}
			const collapse = new core.Collapse(config);
			collapse.setBehavior();
		});
}

/*
 * Waiting the page to be loaded to initialize things
 */
performWhenDocumentIsLoaded( () => {
	setupHeader();
	setupMenu();
	setupCollapses();
} );
