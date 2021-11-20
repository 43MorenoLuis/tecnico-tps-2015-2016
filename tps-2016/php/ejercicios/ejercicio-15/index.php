<html>
	<head>
		<title>Notas</title>
				<link href='css/style.css'rel='stylesheet' type='text/css' media='screen'/> 
	</head>
	<body>
        <div id='principal'>
			<form action='calcular.php'  method='post' id='notas' name='frm_notas'>
				
				<h1>Formulario Notas</h1>
				
				<span>Nombres :</span>
				<input type='text' name='txt_nombre' id='txt_nombre'/>
				<br>
				<br>
				
				<span>Apellidos :</span>
				<input type='text' name='txt_apellido' id='txt_apellido'/>
				<br>
				<br>
				<span>Identificacion :</span>
				<input type='text' name='txt_identificacion' id='txt_identificacion'/>
				<br>
				<br>
				
				<span>Grado :</span>
				<input type='text' name='txt_grado' id='txt_grado'/>
				<br>
				<br>


				<span>Asignaturas</span>
				<br>
				<br>
				<span>Ciencias</span>
				<br>
				<span>Nota 1:</span>
				<input type='text' name='txt_cienciasnotauno' id='txt_cienciasnotauno'/>
				<span>Nota 2:</span>
				<input type='text' name='txt_cienciasnotados' id='txt_cienciasnotados'/>
				<span>Nota 3:</span>
				<input type='text' name='txt_cienciasnotatres' id='txt_cienciasnotatres'/>
				<br>
				<br>
		
				<span>Matematicas</span>
				<br>
				<span>Nota 1:</span>
				<input type='text' name='txt_matematicanotauno' id='txt_matematicanotauno'/>
				<span>Nota 2:</span>
				<input type='text' name='txt_matematicanotados' id='txt_matematicanotados'/>
				<span>Nota 3:</span>
				<input type='text' name='txt_matematicanotatres' id='txt_matematicanotatres'/>
				<br>
				<br>
				
				<span>Comprension Lectora</span>
				<br>
				<span>Nota 1:</span>
				<input type='text' name='txt_clnotauno' id='txt_clnotauno'/>
				<span>Nota 2:</span>
				<input type='text' name='txt_clnotados' id='txt_clnotados'/>
				<span>Nota 3:</span>
				<input type='text' name='txt_clnotatres' id='txt_clnotatres'/>
				<br>
				<br>

				<input type='submit' name='btn_calcular' id='btn_calcular' value='Calcular'/>
			</form>
		</div>
	</body>
</html>