$(document).ready(function() {
    // Función para agregar animaciones a los elementos
    function agregarAnimaciones() {
      // Animación al cargar la página
      $('.destino, .tour').each(function(index) {
        $(this).css('animation-delay', index * 0.2 + 's');
        $(this).addClass('animate');
      });
  
      // Animación al hacer clic en un destino
      $('.destino').on('click', function() {
        $(this).addClass('animate-rubberBand');
        setTimeout(function() {
          $(this).removeClass('animate-rubberBand');
        }.bind(this), 1000);
      });
    }
  
    // Llama a la función para agregar las animaciones
    agregarAnimaciones();
  });
  