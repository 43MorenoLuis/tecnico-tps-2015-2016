<html>
	<head>
		<title>formulario_asignatura_php</title>
		<link href='../css/asi_formulario.css' rel='stylesheet' type='text/css' media='screen'/>
	</head>
	
	<body>
		<form action='recibir.php'  method='post' id='formulario' name='frm_formulario'>
		
			<div id='principal'>
				<h1>Formulario Asignatura</h1>
		
				<span>Asignatura: </span>
				<input type='text' name='txt_asignatura' id='txt_asignatura'>
				<br>
				<br>
	
				<span>Grupo: </span>
				<select name='sl_grupo' id='sl_grupo'>
					<option value='0'></option>
					<option value='1'>ciencias politicas</option>
					<option value='2'>ciencias humanas</option>
				</select>
				<br>
				<br>
				
				<input type='submit' name='btn_recibir' id='btn_recibir' value='Guardar'/>
			</div>
		</form>

	</body>
</html>