<!DOCTYPE html>
<html lang="es">

<head>

  <?php
    include('headiquira.php');
  ?>
 
</head>
 
<body>

<div class="in">
    <figure>
        <img src="interfaz/iquira.png" alt='Iquira-Huila' title="Iquira-Huila" />
        &nbsp;&nbsp;<img src="interfaz/escdoiquira.png" alt="Iquira-Huila" title="Iquira-Huila" />
    </figure>
    <p>Cuidad Luz Del Huila</p>

	<form name="frm_login" onSubmit="return validar_login();" action="acceso" method="post">

        <input name='txt_usuario' id='txt_usuario' type='text' placeholder='Usuario'/>
        <div id='respuesta_usuario' style='display: none;'> Usuario Incorrecto</div>

        <input name='password' id='password' type='password' placeholder='Password' onKeyup='checkpassword()'/>
        <div id='respuesta_password' style='display: none;'> Contraseña Incorrecta</div>
        <?php

          if($varerror=='falloacceso'){
        ?>
          <div id="respuesta_password" style="display: block;">Error Usuario Y contraseña incorrecta</div>
        <?php
          }
          else{
            echo "";
          }
        ?>
       	<input type='submit' name='submit' value='Iniciar Sesion' class='boton' />
	</form>
     <input  type='submit' id='boton' class='modal' value='Registrese' name='submit'/>
</div>

  <div id="modulos">
    <div class="conte">
      <h1>Bienvenido</h1>
        <a class="closeMo">X</a>
          <?php
              include('addrusuario.php');
           ?>
    </div>
  </div>
</div>
</body>
</html>
