let amountInQueue = 0;
let cards = new Set(document.querySelectorAll('.product-card'));

function updateCards() {
    const scrollPosition = window.scrollY + window.innerHeight;
    for (const card of cards) {
        if (scrollPosition >= card.offsetTop) {
            // Animate the card in order
            setTimeout(() => {
                card.classList.add('product-card--is-visible');
                amountInQueue--;
            },  amountInQueue++ * 100);

            // Remove it from the list
            cards.delete(card);
        }
    }

    // Clean up if there's no more cards left
    if (cards.size === 0) {
        window.removeEventListener('scroll', updateCards);
        window.removeEventListener('load', updateCards);
    }
}

window.addEventListener('scroll', updateCards);
window.addEventListener('load', updateCards);

function showModal(title, content) {
    const popup = document.createElement('dialog');
    popup.className = 'popup-modal';
    popup.innerHTML = `
        <h2>${title}</h2>
        <p>${content}</p>
    `;
    popup.show();
    setTimeout(() => popup.remove(), 4000);
    document.body.appendChild(popup);
}

function addToCart(id) {
    let cart = JSON.parse(Cookie.get('cart')) ?? [];
    cart.push(id);
    Cookie.set('cart', JSON.stringify(cart));
}

function removeFromCart(id) {
    let cart = JSON.parse(Cookie.get('cart')) ?? [];
    const index = cart.indexOf(id);
    if (index !== -1) {
        cart.splice(index, 1);
    }
    Cookie.set('cart', JSON.stringify(cart));
}

function addToCartButton(event, id) {
    event.preventDefault();
    addToCart(id);
    showModal('Added to cart', 'The product was added to the cart');
}

const cartCards = document.querySelectorAll('.shopping-cart-card');
for (const card of cartCards) {
    const productID = parseInt(card.getAttribute('product-id'));
    const removeButton = card.querySelector('.shopping-cart-card__content__quantity__remove');
    const addButton = card.querySelector('.shopping-cart-card__content__quantity__add');

    if (!productID || !removeButton || !addButton) continue;

    removeButton.onclick = function(event) {
        event.preventDefault();
        removeFromCart(productID);
        location.reload();
    }

    addButton.onclick = function(event) {
        event.preventDefault();
        addToCart(productID);
        location.reload();
    }
}