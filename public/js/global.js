const observer = new IntersectionObserver(entries => {
    for (const entry of entries) {
        if (entry.isIntersecting) {
            entry.target.classList.add('product-card--is-visible');
        }
    }
});

const items = document.querySelectorAll('.product-card');
for (const item of items) {
    observer.observe(item);
}

function addToCart(event, id) {
    event.preventDefault();
    console.log(`Added product with id ${id} to the cart.`);
}