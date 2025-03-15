document.addEventListener('DOMContentLoaded', () => {
    const reseach = document.querySelector('input');
    const listeCategories = document.querySelectorAll('.category');

    reseach.addEventListener('input', () => {
        listeCategories.forEach((category) => {
            let hideParent = true;
            category.querySelectorAll('.liste-tutoriels .tutoriel a').forEach((tutoriel) => {
                if (!tutoriel.innerText.toLowerCase().includes(reseach.value.toLowerCase())) {
                    tutoriel.parentElement.style.display = 'none'
                } else {
                    if (tutoriel.parentElement.style.display === 'none') {
                        tutoriel.parentElement.style.display = 'block';
                    }
                }

                if (tutoriel.parentElement.style.display === 'flex') {
                    hideParent = false;
                }
            })
            if (hideParent) {
                category.style.display = 'none';
            } else {
                if (category.style.display === 'none') {
                    category.style.display = 'flex';
                }
            }

            if (category.querySelector('p').innerText.toLowerCase().includes(reseach.value.toLowerCase())
                && category.style.display === 'none') {
                category.style.display = 'flex';
                category.querySelectorAll('.liste-tutoriels .tutoriel').forEach((tutoriel) => {
                    if (tutoriel.style.display === 'none') {
                        tutoriel.style.display = 'flex';
                    }
                })
            }
        })
    })
})