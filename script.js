document.addEventListener('DOMContentLoaded', () => {
    const noticias = document.querySelectorAll('.noticia');
    const dots = document.querySelectorAll('.dot');
    let currentIndex = 0;
    
    function showNoticia(index) {
        noticias.forEach(noticia => {
            noticia.classList.remove('active');
            noticia.style.transform = 'translateX(100%)';
        });
        
        dots.forEach(dot => dot.classList.remove('active'));
        
        noticias[index].classList.add('active');
        noticias[index].style.transform = 'translateX(0)';
        dots[index].classList.add('active');
    }
    
    function nextNoticia() {
        currentIndex = (currentIndex + 1) % noticias.length;
        showNoticia(currentIndex);
    }
    
    // Cambio automático cada 5 segundos
    setInterval(nextNoticia, 5000);
    
    // Manejo de clicks en los dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentIndex = index;
            showNoticia(currentIndex);
        });
    });
});