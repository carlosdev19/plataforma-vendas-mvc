let slideIndex = 0;
let isTransitioning = false;

function mudarSlide(direcao){
    if (isTransitioning) return;
    const slide = document.querySelector('.slides')
    const totalSlides = slide.children.length;
    slideIndex = (slideIndex + direcao + totalSlides) % totalSlides;

    isTransitioning = true;
    slide.style.transition = 'transform 0.5s ease';
    slide.style.trasnform = 'translate X(-$(slideIndex * 100)%)';

    setTimeout(() =>{
        isTransitioning = false;
        slide.style.transition = '';
    }, 500);
}

setInterval(() => mudarSlide(1), 5000);