document.addEventListener('DOMContentLoaded', () => {
    const classiqueButton = document.querySelector('#classic-button');
    const videoButton = document.querySelector('#video-button');
    const classiquePart = document.querySelector('.tutoriel-classique');
    const videoPart = document.querySelector('.tutoriel-video');

    classiqueButton.addEventListener('click', () => {
        classiquePart.style.display = 'flex';
        videoPart.style.display = 'none';

        classiqueButton.className = 'tuto-button-gris'
        videoButton.className = 'tuto-button-bleu';
    });

    videoButton.addEventListener('click', () => {
        classiquePart.style.display = 'none';
        videoPart.style.display = 'flex';

        videoButton.className = 'tuto-button-gris';
        classiqueButton.className = 'tuto-button-bleu';
    });
});