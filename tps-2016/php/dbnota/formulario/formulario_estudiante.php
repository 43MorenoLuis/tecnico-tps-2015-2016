<html>
	<head>
		<title>formulario_estudiante_php</title>
		<link href='../css/est_formulario.css' rel='stylesheet' type='text/css' media='screen'/>
	</head>
	
	<body>
		<form action='recibir.php'  method='post' id='formulario' name='frm_formulario'>
		
			<div id='principal'>
				<h1>Formulario Estudiante</h1>
		
				<span>Estudiante: </span>
				<input type='text' name='txt_nombre' id='txt_nombre'>
				<br>
				<br>
	
				<span>Tipo Identificacion: </span>
				<select name='sl_tipoidentificacion' id='sl_tipoidentificacion'>
					<option value='0'></option>
					<option value='1'>RC</option>
					<option value='2'>TI</option>
					<option value='3'>CC</option>
					<option value='4'>PT</option>
				</select>
				<br>
				<br>
				
				<span>Identificacion :</span>
				<input type='text' name='txt_identificacion' id='txt_identificacion'>
				<br>
				<br>
				
				<span>Genero: </span>
				<select name='sl_genero' id='sl_genero'>
					<option value='0'></option>
					<option value='1'>M</option>
					<option value='2'>F</option>
				</select>
				<br>
				<br>
				
				<input type='submit' name='btn_recibir' id='btn_recibir' value='Guardar'/>
			</div>
		</form>

	</body>
</html>