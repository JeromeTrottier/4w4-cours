(function () {
    const modal = document.querySelector('.boite__modal');

    const btnsSuite = document.querySelectorAll('.cours__desc__suite');

    const btnFermerModal = document.querySelector('.boite__modale__fermer');
    const modalTexte = document.querySelector('.boite__modal__texte');
    for (const btn of btnsSuite) {
        btn.addEventListener('mousedown', () => {
            modalTexte.innerHTML = btn.parentNode.parentNode.querySelector('.cours__desc__full').innerHTML;
            modal.classList.add('ouvert');
        });
    }
    btnFermerModal.addEventListener('mousedown', () => modal.classList.remove('ouvert'));
})()