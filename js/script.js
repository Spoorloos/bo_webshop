const darkmodeToggle = document.querySelector('#darkmode-toggle');

darkmodeToggle.addEventListener('click', () => {
    document.documentElement.classList.toggle('darkmode');
});

const menuToggle = document.querySelector('.bottom-header__account__menu');
const nav = document.querySelector('.bottom-header__nav');

menuToggle.addEventListener('click', () => {
    nav.classList.toggle('bottom-header__nav--menu');
});