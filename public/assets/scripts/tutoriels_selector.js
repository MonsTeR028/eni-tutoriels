document.addEventListener('DOMContentLoaded', () => {
    const classiqueButton = document.querySelector('#classic-button');
    const videoButton = document.querySelector('#video-button');
    const classiquePart = document.querySelector('.tutoriel-classique');
    const videoPart = document.querySelector('.tutoriel-video');

    classiqueButton.addEventListener('click', () => {
        classiquePart.style.display = 'block';
        videoPart.style.display = 'none';
    })

    videoButton.addEventListener('click', () => {
        classiquePart.style.display = 'none';
        videoPart.style.display = 'block';
    })
})