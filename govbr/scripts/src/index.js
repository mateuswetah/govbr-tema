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
				iconToHide: 'fa-angle-up',
				iconToShow: 'fa-angle-down',
				trigger,
				useIcons: true,
			}
			const collapse = new core.Collapse(config);
			collapse.setBehavior();
		});
}

/**
 * Looks for the Avatar dropdown component to initialize it
 */
function setupAvatarDropdown() {
	const avatarDropdown = document.getElementById('avatar-dropdown-trigger');
	if ( avatarDropdown ) {
		const config = {
			iconToHide: 'fa-caret-up',
			iconToShow: 'fa-caret-down',
			trigger: avatarDropdown,
			useIcons: true,
		}
		const dropdown = new core.Dropdown(config);
		dropdown.setBehavior();
	}
}

/**
 * Looks for breadcrumb components to initialize them
 */
function setupBreadcrumbs() {
	document.querySelectorAll('.br-breadcrumb')
		.forEach((breadcrubmElement) => {
			new core.BRBreadcrumb('br-breadcrumb', breadcrubmElement)
		});
}


/**
 * Looks for cookiebar components to initialize them
 */
export function setupCookiesBar() {
	let cookiesManagerSettings = [];
	cookiesManagerSettings[0] = {
		'lang': 'pt-br',
		'cookieGroups': [],
		'noteList': [],
		'links': [],
		...tema_govbr_cookies_manager,
	}
	console.log(cookiesManagerSettings)
	document.querySelectorAll('.br-cookiebar')
		.forEach((cookiebarElement) => {
			const params = {
				name: 'br-cookiebar',
				component: cookiebarElement,
				json: JSON.stringify(cookiesManagerSettings),
				// json: `[
				// 	{
				// 	  "lang": "pt-br",
				// 	  "allOptOut": true,
				// 	  "acceptButton": "",
				// 	  "optInButton": "Sim, eu aceito os cookies",
				// 	  "optOutButton": "",
				// 	  "infoText": "",
				// 	  "mainTitle": "",
				// 	  "lastUpdate": "",
				// 	  "entryText": "",
				// 	  "selectAll": false,
				// 	  "allAlertMessage": "",
				// 	  "closeLabel": "",
				// 	  "lastUpdateLabel": "",
				// 	  "cookieGroupsLabel": "",
				// 	  "selectAllLabel": "",
				// 	  "unselectAllLabel": "",
				// 	  "selectAllGroupLabel": "",
				// 	  "unselectAllGroupLabel": "",
				// 	  "onLabel": "",
				// 	  "offLabel": "",
				// 	  "alwaysActiveLabel": "",
				// 	  "cookieNameLabel": "",
				// 	  "expiresLabel": "",
				// 	  "domainLabel": "",
				// 	  "enterpriseLabel": "",
				// 	  "purposeLabel": "",
				// 	  "descriptionLabel": "",
				// 	  "cookieGroups": [
				// 		{
				// 		  "groupId": "",
				// 		  "groupName": "",
				// 		  "groupOptOut": false,
				// 		  "groupSelected": false,
				// 		  "groupAlertMessage": "",
				// 		  "groupText": "",
				// 		  "cookieList": [
				// 			{
				// 			  "cookieId": "",
				// 			  "cookieOptOut": false,
				// 			  "cookieSelected": false,
				// 			  "alertMessage": "",
				// 			  "cookieName": "",
				// 			  "expires": "",
				// 			  "domain": "s",
				// 			  "entreprise": "",
				// 			  "purpose": "",
				// 			  "description": ""
				// 			}
				// 		  ]
				// 		}
				// 	  ],
				// 	  "noteTitle": "",
				// 	  "noteList": [
				// 		{
				// 		  "question": "",
				// 		  "answer": ""
				// 		}
				// 	  ],
				// 	  "links": [
				// 		{
				// 		  "name": "",
				// 		  "url": ""
				// 		}
				// 	  ]
				// 	}
				//   ]`,
				lang: 'pt-br',
				mode: 'default',
				callback: (jsonSaída) => {
					console.log(jsonSaída)
				},
			}
			new core.BRCookiebar(params)
		});
}

/*
 * Waiting the page to be loaded to initialize things
 */
performWhenDocumentIsLoaded( () => {
	setupAvatarDropdown();
	setupHeader();
	setupMenu();
	setupCollapses();
	setupBreadcrumbs();
	setupCookiesBar();
} );
