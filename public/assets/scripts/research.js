document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('searchInput');
    const searchIcon = document.querySelector('.search-icon');
    const clearIcon = document.querySelector('.clear-icon');
    const listeCategories = document.querySelectorAll('.category');

    searchInput.addEventListener('input', () => {
        if (searchInput.value.length > 0) {
            clearIcon.style.display = 'block';
            searchIcon.style.display = 'none';
        } else {
            clearIcon.style.display = 'none';
            searchIcon.style.display = 'block';
        }

        listeCategories.forEach((category) => {
            let hideParent = true;
            category.querySelectorAll('.liste-tutoriels .tutoriel a').forEach((tutoriel) => {
                if (!tutoriel.innerText.toLowerCase().includes(searchInput.value.toLowerCase())) {
                    tutoriel.parentElement.style.display = 'none';
                } else {
                    tutoriel.parentElement.style.display = 'block';
                    hideParent = false;
                }
            });

            category.style.display = hideParent ? 'none' : 'flex';
        });
    });

    clearIcon.addEventListener('click', () => {
        searchInput.value = '';
        clearIcon.style.display = 'none';
        searchIcon.style.display = 'block';

        listeCategories.forEach((category) => {
            category.style.display = 'flex';
            category.querySelectorAll('.liste-tutoriels .tutoriel').forEach((tutoriel) => {
                tutoriel.style.display = 'block';
            });
        });
    });
});