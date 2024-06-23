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
            },  amountInQueue++ * 200);

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
    console.log(`Added product with id ${id} to the cart.`);
}