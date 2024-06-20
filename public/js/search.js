const searchBar = document.querySelector('.search__bar');
const results = document.querySelector('.main__results');
let lastTimeout;

searchBar.oninput = function() {
    const query = this.value.trim();
    if (query.length === 0) {
        results.innerHTML = '';
        return;
    }

    if (lastTimeout) {
        clearTimeout(lastTimeout);
    }

    lastTimeout = setTimeout(async () => {
        const params = new URLSearchParams({ query });
        const response = await fetch('?' + params);
    
        results.innerHTML = await response.text();
    }, 200);
}

searchBar.oninput();