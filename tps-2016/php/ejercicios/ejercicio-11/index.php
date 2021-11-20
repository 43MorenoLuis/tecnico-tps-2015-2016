<html>
	<head>
		<title>Formulario</title>
	</head>
	<body>
	
	<form action='recibir.php'  method='post' id='frm_formulario' name='frm_formulario'>
		<span>Nombre y Apellidos:</span>
		<input type='text' name='txt_nombre' id='txt_nombre'/>
		<br>
		<br>
		
		<span>Fecha Nacimiento:</span>
		<input type='text' name='txt_fechanacimiento' id='txt_fechanacimiento'/>
		<br>
		<br>
		
		<span>Genero:</span>
		<span>M</span>
		<input type='radio' name='rd_genero' id='rd_genero' value='M'/>
		<span>F</span>
		<input type='radio' name='rd_genero' id='rd_genero' value='F'/>
		<br>
		<br>

		<input type='submit' name='btn_recibir' id='btn_recibir'/>
		</form>

	</body>
</html>