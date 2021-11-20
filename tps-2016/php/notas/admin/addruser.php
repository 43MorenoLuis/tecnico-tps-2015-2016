<?php
	include("db/conexion.php");

	$log_codigo=date('YmdHis');
	$log_persona="$log_codigo";
	$per_codigo="$log_persona";

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

	<?php include('hdnotas.php'); ?>

</head>

<body>
<!--  LATERAL ------------------------------------------------>
<header>

</header>
<!--  MODULOS ------------------------------------------------>

<!--  CUERPO ------------------------------------------------>
<section  class="cuerpo">
    <div id="inter">

        <h1><img src="iconos/addruser.png" /> Añadir Usuario</h1>

        <div  id="bloque">

            <form name='frm_newlogin' id='frm_newlogin' action='procsuser.php'  method='post' >
            <span class="botonera">
	                <div>
	                    <input type="submit" value="Guardar" onclick="adicionar_user" class="left save" />
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
              			<label>PassWord</label>
						<input name='password' id='password' type='password'   min="0" max="100" value="" placeholder='Contraseña' />
          			</span>
					<span>
                            <label>Ubicacion de la Imagen De Usuario</label>
                            <input name='img_user' id='img_user' value='interfaz/' require/>
                    </span>
          			
                </article>

            </form>
        </div>

    </div>
</section>
</body>
</html>
