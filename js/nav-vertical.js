$(function() {
  $('#ocultar').on('click', function() {
    $('#lateral, #contenido').toggleClass('active');
  });
  $('#login, #logout').on('click',function(){
    $('#login, #register, #logout').toggleClass('oculto')
  })
});