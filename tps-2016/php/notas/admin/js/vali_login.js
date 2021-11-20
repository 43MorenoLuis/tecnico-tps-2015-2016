//validar del login

function validar_login(){

  var username=$('#txt_usuario').val();
  var passwrd=$('#password').val();

  if(username==''){
    //alert('error usuario');
  
    $('#respuesta_usuario').fadeint(600);
    return false;
  }

  if(passwrd==''){
    //alert('error usuario');
    $('#respuesta_usuario').fadeOut(600);
    $('#respuesta_password').fadeint(600);
    return false;
  }
};
$(document).ready(function(){
    $('#registrar').toggle(
        /*Primer click.Función que descubre un panel ocultoy cambia el texto del botón.*/
        function(e){
            $('#pnladdruser').fadeIn(1000)
            e.preventDefault();
        }, // Separamos las dos funciones con una coma/*  Segundo click.Función que oculta el panely vuelve a cambiar el texto del botón.  */
        function(e){
            $('#pnladdruser').slideUp(1000);
            e.preventDefault();
        }
    );
});

  $(".modal").click(function(){
    $("#modulos").slideDown("slow");
  });
  $("#modulos .conte .closeMo").click(function(){
    $("#modulos").slideUp("slow");
  });
