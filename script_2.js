document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('.lista-videos a');
    const reproductor = document.getElementById('reproductor');
    const iframe = document.getElementById('video-frame');

    links.forEach(link => {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        const videoId = this.getAttribute('data-video-id');
        const embedUrl = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
        
        reproductor.style.display = 'block';
        iframe.src = embedUrl;
      });
    });
  });

  function cerrarReproductor() {
    const reproductor = document.getElementById('reproductor');
    const iframe = document.getElementById('video-frame');
    reproductor.style.display = 'none';
    iframe.src = '';
  }