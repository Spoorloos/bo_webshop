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
    menuToggle.innerHTML = isOpened ?
        '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path></svg>' :
        '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 -960 960 960" fill="currentColor"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"></path></svg>';
});

if (localStorage.getItem('darkmode') === 'true') {
    darkmodeToggle.innerText = 'Lightmode';
}