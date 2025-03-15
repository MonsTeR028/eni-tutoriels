document.addEventListener('DOMContentLoaded', () => {
    const scrollToTopBtn = document.getElementById('scrollToTop');
    const scrollContainer = document.querySelector('.tutoriel-classique');

    if (!scrollContainer) return;

    // Afficher/Masquer le bouton au scroll
    scrollContainer.addEventListener('scroll', () => {
        if (scrollContainer.scrollTop > 300) {
            scrollToTopBtn.classList.add('show');
        } else {
            scrollToTopBtn.classList.remove('show');
        }
    });

    // Remonter en haut au clic
    scrollToTopBtn.addEventListener('click', () => {
        scrollContainer.scrollTo({ top: 0, behavior: 'smooth' });
    });
});