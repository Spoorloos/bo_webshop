const imageModal = document.querySelector('.product__image-modal');

function openModal() {
    imageModal.showModal();
}

function closeModal(event) {
    if (event && !event.target.contains(imageModal)) return;
    imageModal.close();
}

document.body.addEventListener('click', closeModal);