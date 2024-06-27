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

function addToCart(event, id) {
    event.preventDefault();
    
    let cart = JSON.parse(Cookie.get('cart')) ?? [];
    cart.push(id);
    Cookie.set('cart', JSON.stringify(cart));
}

function removeFromCart(event, id) {
    event.preventDefault();

    let cart = JSON.parse(Cookie.get('cart')) ?? [];
    const index = cart.indexOf(id);
    if (index !== -1) {
        cart.splice(index, 1);
    }
    Cookie.set('cart', JSON.stringify(cart));
}

const cartCards = document.querySelectorAll('.shopping-cart-card');
for (const card of cartCards) {
    const productID = parseInt(card.getAttribute('product-id'));
    const removeButton = card.querySelector('.shopping-cart-card__content__quantity__remove');
    const addButton = card.querySelector('.shopping-cart-card__content__quantity__add');

    if (!productID || !removeButton || !addButton) continue;

    removeButton.onclick = function(event) {
        removeFromCart(event, productID);
        location.reload();
    }

    addButton.onclick = function(event) {
        addToCart(event, productID);
        location.reload();
    }
}