const rootElement = document.documentElement;
const darkmodeToggle = document.querySelector('.top-header__nav__darkmode');
const menuToggle = document.querySelector('.bottom-header__account__menu-wrapper');
const heroImage = document.querySelector('#hero-image');

darkmodeToggle.addEventListener('click', () => {
    const isDarkmode = rootElement.classList.toggle('darkmode');
    localStorage.setItem('darkmode', isDarkmode);
    darkmodeToggle.innerText = isDarkmode ? 'Lightmode' : 'Darkmode';
});

menuToggle.addEventListener('click', () => {
    const isOpened = rootElement.classList.toggle('menu-open');
    menuToggle.children[0].src = `assets/${isOpened ? 'close' : 'menu'}.svg`;
});

if (localStorage.getItem('darkmode') === 'true') {
    darkmodeToggle.innerText = 'Lightmode';
}

function addToCart(event, id) {
    event.preventDefault();
    console.log(id);
}