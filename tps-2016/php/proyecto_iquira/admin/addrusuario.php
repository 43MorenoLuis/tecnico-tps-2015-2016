<?php
	include("db/conexion.php");

	$log_codigo=date('YmdHis');
	$log_persona="$log_codigo";
	$log_user="";
	$log_passward="";
	$per_codigo="$log_persona";
	$per_nombre="";
	$per_apellido="";

	$sql_newuser="SELECT log_codigo,
											log_persona,
											log_user,
											log_passward,
											per_nombre,
											per_apellido,
											per_codigo
							FROM login, persona
							WHERE persona.per_codigo=login.log_persona; ";

	$query_newuser=pg_query($conn,$sql_newuser);

	$data_newuser=pg_fetch_array($query_newuser);
	$per_nombre=$data_newuser['per_nombre'];
	$per_apellido=$data_newuser['per_apellido'];
	$per_codigo=$data_newuser['log_persona'];
	$log_codigo=$data_newuser['log_codigo'];
	$log_persona=$data_newuser['log_persona'];
	$log_user=$data_newuser['log_user'];
	$log_password=$data_newuser['log_passward'];
?>

<!doctype html>
<html>
<head>

	<?php include('hdiquira.php'); ?>

</head>

<body>
<!--  LATERAL ----------------------------------------------  -->
<header>

</header>
<!--  MODULOS ----------------------------------------------  -->
<!--  CUERPO ----------------------------------------------  -->
<section  class="cuerpo">
    <div id="inter">
        <h1><img src="iconos/adir_user.png" /> Crear Usuario</h1>
        <div  id="bloque">
            <form name='login' action='procsnewuser.php' method='post' >
            <span class="botonera">
	                <div>
	                    <input type="submit" value="Guardar" class="left save" />
					</div>
						</span>
                <article class="cont">
					<span>
						<label>Nombres</label>
						<input type="text" name="txt_nombre" id="txt_nombre" placeholder="Nombres" value="" required />
					</span>					
					<span>
						<label>Apellidos</label>
						<input type="text" name="txt_apellido" id="txt_apellido" placeholder="Apellidos" value="" required />
					</span>
					<span>
              			<label>Usuario</label>
              			<input type="txt" name="txt_user" id="txt_user" placeholder="Eje: moreno" value="" required />
          			</span>
          			<span>
              			<label>Contraseña</label>
						<input name='password' id='password' type='password' min="0" max="100" value="" placeholder='Contraseña' required/>
          			</span>
                </article>
            </form>
        </div>
    </div>
</section>
</body>
</html>