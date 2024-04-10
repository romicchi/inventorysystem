// Image Modal
const imageModal = document.getElementById('imageModal');
document.querySelectorAll('.imageModalOpener').forEach(image => {
    image.addEventListener('click', () => {
        document.getElementById('modalImage').src = image.src;
        imageModal.classList.remove('hidden');
    });
});

// Close Image Modal when clicking outside the image
imageModal.addEventListener('click', (e) => {
    if (e.target === imageModal) {
        imageModal.classList.add('hidden');
    }
});