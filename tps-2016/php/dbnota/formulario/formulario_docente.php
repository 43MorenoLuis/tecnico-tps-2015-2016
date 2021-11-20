<html>
	<head>
		<title>formulario_docente_php</title>
		<link href='../css/doc_formulario.css' rel='stylesheet' type='text/css' media='screen'/>
	</head>
	
	<body>
		<form action='recibir.php'  method='post' id='formulario' name='frm_formulario'>
		
			<div id='principal'>
				<h1>Formulario Docente</h1>
		
				<span>Docente: </span>
				<input type='text' name='txt_docente' id='txt_docente'>
				<br>
				<br>
	
				<span>Materia: </span>
				<select name='sl_materia' id='sl_materia'>
					<option value='0'></option>
					<option value='1'>ciencias politicas</option>
					<option value='2'>Matematicas</option>
					<option value='3'>Biologia</option>
					<option value='4'>Quimica</option>
					<option value='5'>Ingles</option>
				</select>
				<br>
				<br>
				
				<input type='submit' name='btn_recibir' id='btn_recibir' value='Guardar'/>
			</div>
		</form>

	</body>
</html>