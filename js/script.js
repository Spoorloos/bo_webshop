const darkmodeToggle = document.querySelector('#darkmode-toggle');

darkmodeToggle.addEventListener('click', () => {
    document.documentElement.classList.toggle('darkmode');
});

const menuToggle = document.querySelector('.bottom-header__account__menu');

menuToggle.addEventListener('click', () => {
    document.documentElement.classList.toggle('menu-open');
});