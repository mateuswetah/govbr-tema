/**
 * File back-to-top.js.
 *
 * Logic for displaying and interacting with the back to top button
 */

const showBackToTop = () => {
	var backTop = document.querySelector('.back-to-top');

	if ( !backTop ) return;

	window.scrollY > 500
		? backTop.classList.add('active')
		: backTop.classList.remove('active');
}

showBackToTop();

window.addEventListener('scroll', () => {
	showBackToTop();
});

var backTop = document.querySelector('.back-to-top');
if ( backTop ) {
	backTop.addEventListener('click', (event) => {
		event.preventDefault()
		scrollTo({ top: 0, behavior: 'smooth' });
	});
}