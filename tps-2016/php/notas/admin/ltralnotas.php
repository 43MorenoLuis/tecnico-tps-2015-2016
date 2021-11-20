<?php
	include("db/conexion.php");

	$log_foto='';

	$sql_foto="SELECT 
									log_foto										
							FROM login; ";

	$query_foto=pg_query($conn,$sql_foto);

	$data_foto=pg_fetch_array($query_foto);
	$foto=$data_foto['log_foto'];
?>

<div class="logo">
    <img src="interfaz/escdoiquira.png" alt="Iquira-Huila" title="Iquira-Huila" />
    <p>Notas INEMAUXI</p>
      <img src="interfaz/iquira.png" alt="Iquira-Huila" title="Iquira-Huila"/>
  </div>
<div class="usuario">
      <img src="<?php echo $foto;?>" alt="Imagen de Usuario" title="Nombre de Usuario" id='imguser'/>
      <?php echo $persona_nombreapellidos; ?>
  </div>
  <div id="firstpane" class="menu_list">
			<a href='inicio' class="menu_head"><img src="iconos/home_q.png" /> Inicio</a>

			<a href='persona' class="menu_head"><img src="iconos/persona.png" /> Personas</a>

			<!--p href='grado' class="menu_head"><img src="iconos/grado.png" /> Grados</p>
    		<div class="menu_body">
    			<a href="diezone"><img src="iconos/aiuAdmin.png" /> 10-01</a>
    			<a href="dieztwo"><img src="iconos/auiIncon.png" /> 10-02</a>
    			<a href="onceone"><img src="iconos/aiuUtil.png" /> 11-01</a>
    			<a href="oncetwo"><img src="iconos/aiuUtil.png" /> 11-02</a>
    		</div-->
    <a href='estudiante' class="menu_head"><img src="iconos/estudiante.png" /> Estudiantes</a>
		<a href='docente' class="menu_head"><img src="iconos/docente.png" /> Docentes</a>
		<a href='asignatura' class="menu_head"><img src="iconos/asignatura.png" /> Asignaturas</a>
		<a href='Inicia_Sesion' class="menu_head"><img src="iconos/power.png" /> Salir</a>
	</div>
