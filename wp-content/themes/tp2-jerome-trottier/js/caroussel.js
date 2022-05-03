(function () {
    const modal = document.querySelector('.boite__modal');

    const images = document.querySelectorAll('.galerie img');
    const btnFermerModal = document.querySelector('.boite__modale__fermer');
    const modalTexte = document.querySelector('.boite__modal__texte');
    for (const image of images) {
        image.addEventListener('mousedown', () => {
            if (modal.classList.contains('ouvert')) {
                modalTexte.querySelector('img').remove();
            }
            let newImg = document.createElement('img');
            newImg.setAttribute('src', image.getAttribute('src'));
            modalTexte.appendChild(newImg);
            modal.classList.add('ouvert');
        });
    }
    btnFermerModal.addEventListener('mousedown', () => {
        modal.classList.remove('ouvert');
        const imgASupprimer = modalTexte.querySelector('img');
        imgASupprimer.remove();
    });
})()