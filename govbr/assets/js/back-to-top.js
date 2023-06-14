/**
 * File back-to-top.js.
 *
 * Logic for displaying and interacting with the back to top button
 */

const backTop = document.querySelector('.back-to-top');

const debounceFunction = (callback, wait) => {
	let timeoutId = null;
	return (...args) => {
		window.clearTimeout(timeoutId);
		timeoutId = window.setTimeout(() => {
			callback.apply(null, args);
		}, wait);
	};
}

const showBackToTop = debounceFunction(() => {
	if ( !backTop ) return;
	window.scrollY > 500
		? backTop.classList.add('active')
		: backTop.classList.remove('active');
}, 500);

if ( backTop ) {

	showBackToTop();

	window.addEventListener('scroll', () => {
		showBackToTop();
	});

	backTop.addEventListener('click', (event) => {
		event.preventDefault()
		scrollTo({ top: 0, behavior: 'smooth' });
	});
}