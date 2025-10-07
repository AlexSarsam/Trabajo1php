document.addEventListener('DOMContentLoaded', () => {
  const enlaces = document.querySelectorAll('.tab-link');
  const secciones = document.querySelectorAll('.section');

  function mostrar(objetivo) {
    secciones.forEach(s => s.hidden = s.id !== objetivo);
    enlaces.forEach(en => en.classList.toggle('active', en.dataset.target === objetivo));
    location.hash = '#' + objetivo;
  }

  enlaces.forEach(enlace =>
    enlace.addEventListener('click', e => {
      e.preventDefault();
      mostrar(enlace.dataset.target);
    })
  );

  mostrar(location.hash.slice(1) || 'profile');
});
