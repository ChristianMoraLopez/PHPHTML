document.addEventListener("DOMContentLoaded", function () {
  // Define las animaciones con Anime.js
  var formAnimation = anime({
      targets: 'form',
      translateY: [-50, 0],
      opacity: [0, 1],
      duration: 800,
      easing: 'easeOutQuad',
  });

  var alertAnimation = anime({
      targets: '.alert',
      translateX: [50, 0],
      opacity: [0, 1],
      duration: 800,
      easing: 'easeOutQuad',
      delay: 400,
  });

  var labelAnimation = anime({
      targets: 'label',
      translateY: [-20, 0],
      opacity: [0, 1],
      duration: 600,
      easing: 'easeOutQuad',
  });

  // Puedes agregar más animaciones según sea necesario

  // Reinicia las animaciones al enviar el formulario
  document.querySelector('form').addEventListener('submit', function () {
      formAnimation.restart();
      alertAnimation.restart();
      labelAnimation.restart();
  });
});
