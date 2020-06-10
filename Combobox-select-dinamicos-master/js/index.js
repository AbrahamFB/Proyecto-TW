$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: 'php/cargar_perfiles.php'
  })
  .done(function(listas_per){
    $('#lista_perfiles').html(listas_per)
  })
  .fail(function(){
    alert('Hubo un errror al cargar las listas_per')
  })

  $('#lista_perfiles').on('change', function(){
    var id = $('#lista_perfiles').val()
    $.ajax({
      type: 'POST',
      url: 'php/cargar_avatares.php',
      data: {'id': id}
    })
    .done(function(listas_per){
      $('#perfiles').html(listas_per)
    })
    .fail(function(){
      alert('Hubo un errror al cargar los avatares')
    })
  })

  $('#enviar').on('click', function(){
    var resultado = 'Lista de perfiles: ' + $('#lista_perfiles option:selected').text() +
    ' Avatar elegido: ' + $('#videos option:selected').text()

    $('#resultado1').html(resultado)
  })

})