var slideIndex = 0;

showSlides();

function 
showSlides() {
    var i;
    
    const slides = document.getElementsByClassName("formas");
    const iconos = document.getElementsByClassName("icono");
    
    l = slides.length;
    for (i = 0; i < l; i++) {
        slides[i].style.display = "none";
        iconos[i].style.display = "none";
    }

    slideIndex++;
    
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    
    slides[slideIndex - 1].style.display = "block";
    iconos[slideIndex - 1].style.display = "block";
    
    setTimeout(showSlides, 4000);
}