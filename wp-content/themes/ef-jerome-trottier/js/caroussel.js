(function () {
    console.log("Vive le caroussel");
    console.log("gmmm");
    const carrousel = document.getElementById('boite__carrousel');
    const images = document.querySelectorAll('.galerie img');
    const btnFermerCarrousel = document.querySelector('.boite__carrousel__fermer');
    const navigation = document.querySelector('.boite__carrousel__navigation');
    let indexBtns = 0;
    let indexImgs = 0;
    const imgContainer = document.createElement('div');
    imgContainer.classList.add('boite__carrousel__img');
    carrousel.appendChild(imgContainer);

    for (const image of images) {

        const img = document.createElement('img');
        img.dataset.index = indexImgs++;
        imgContainer.append(img);
        img.setAttribute('src', image.getAttribute('src'));

        imgContainer.style.width = `${images.length * 100}%`;
        img.style.width = `${100 / images.length}%`;

        const btn = document.createElement('button');
        btn.dataset.index = indexBtns++;
        navigation.append(btn);
        btn.addEventListener('mousedown', () => {
            clearInterval();
            let tailleImg = img.offsetWidth;
            console.log(tailleImg);
            let positionImages = img.dataset.index * tailleImg;
            imgContainer.style.transform = `translateX(-${positionImages}px)`;
        });

        image.addEventListener('mousedown', () => {
            carrousel.classList.add('ouvert');
            let tailleImg = img.offsetWidth;
            let positionImages = img.dataset.index * tailleImg;
            imgContainer.style.transform = `translateX(-${positionImages}px)`;
        });
    }
    btnFermerCarrousel.addEventListener('mousedown', () => {
        carrousel.classList.remove('ouvert');
    });
})()