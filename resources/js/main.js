// Select burger menu and dropdown menu
const burgerMenu = document.getElementById('burger-menu');
const navOptions = document.getElementById('nav-options');

// Toggle dropdown menu on click
burgerMenu.addEventListener('click', () => {
    navOptions.classList.toggle('active');
});
