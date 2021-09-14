const showSignup = document.getElementById('open-signup');
const signup = document.querySelector('.max-height');

showSignup.addEventListener('click', () => {
	signup.classList.toggle('show-signup');
	showSignup.classList.toggle('rotate-btn');
});