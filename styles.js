$(document).ready(function() {
  // Función para aplicar estilos adicionales a la página
  function personalizarPagina() {
    // Estilos para el encabezado
    $('header').css({
      'background-color': '#333',
      'color': '#fff'
    });

    // Estilos para los destinos destacados
    $('#destacados').css('background-color', '#f1f1f1');
    $('.destino').css({
      'border': '2px solid #333',
      'box-shadow': '0 0 5px rgba(0, 0, 0, 0.3)',
      'transition': 'border-color 0.3s ease, box-shadow 0.3s ease'
    });

    // Estilos para los tours populares
    $('#tours').css('background-color', '#f1f1f1');
    $('.tour').css({
      'border': '2px solid #333',
      'box-shadow': '0 0 5px rgba(0, 0, 0, 0.3)',
      'transition': 'border-color 0.3s ease, box-shadow 0.3s ease'
    });

    // Estilos para el pie de página
    $('footer').css({
      'background-color': '#333',
      'color': '#fff'
    });
  }

  // Llama a la función para aplicar los estilos adicionales
  personalizarPagina();
});
