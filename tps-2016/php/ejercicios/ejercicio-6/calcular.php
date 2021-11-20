<html>
	<head>
		<title>Lista Estudiantes Calcular Edad</title>
		<link href='css/calcular.css' rel='stylesheet' type='text/css' media='screen'/> 
	</head>
	<body>
		<?php
			$nombre1=$_REQUEST['txt_nombre1'];
			$nombre2=$_REQUEST['txt_nombre2'];
			$nombre3=$_REQUEST['txt_nombre3'];
			$nombre4=$_REQUEST['txt_nombre4'];
			$nombre5=$_REQUEST['txt_nombre5'];
			$nombre6=$_REQUEST['txt_nombre6'];
			$nombre7=$_REQUEST['txt_nombre7'];
			$nombre8=$_REQUEST['txt_nombre8'];
			$nombre9=$_REQUEST['txt_nombre9'];
			$nombre10=$_REQUEST['txt_nombre10'];
			$nombre11=$_REQUEST['txt_nombre11'];
			$nombre12=$_REQUEST['txt_nombre12'];
			$nombre13=$_REQUEST['txt_nombre13'];
			$nombre14=$_REQUEST['txt_nombre14'];
			$nombre15=$_REQUEST['txt_nombre15'];
			
			$apellido1=$_REQUEST['txt_apellido1'];
			$apellido2=$_REQUEST['txt_apellido2'];
			$apellido3=$_REQUEST['txt_apellido3'];
			$apellido4=$_REQUEST['txt_apellido4'];
			$apellido5=$_REQUEST['txt_apellido5'];
			$apellido6=$_REQUEST['txt_apellido6'];
			$apellido7=$_REQUEST['txt_apellido7'];
			$apellido8=$_REQUEST['txt_apellido8'];
			$apellido9=$_REQUEST['txt_apellido9'];
			$apellido10=$_REQUEST['txt_apellido10'];
			$apellido11=$_REQUEST['txt_apellido11'];
			$apellido12=$_REQUEST['txt_apellido12'];
			$apellido13=$_REQUEST['txt_apellido13'];
			$apellido14=$_REQUEST['txt_apellido14'];
			$apellido15=$_REQUEST['txt_apellido15'];
			
			$year1=$_REQUEST['txt_year1'];
			$year2=$_REQUEST['txt_year2'];
			$year3=$_REQUEST['txt_year3'];
			$year4=$_REQUEST['txt_year4'];
			$year5=$_REQUEST['txt_year5'];
			$year6=$_REQUEST['txt_year6'];
			$year7=$_REQUEST['txt_year7'];
			$year8=$_REQUEST['txt_year8'];
			$year9=$_REQUEST['txt_year9'];
			$year10=$_REQUEST['txt_year10'];
			$year11=$_REQUEST['txt_year11'];
			$year12=$_REQUEST['txt_year12'];
			$year13=$_REQUEST['txt_year13'];
			$year14=$_REQUEST['txt_year14'];
			$year15=$_REQUEST['txt_year15'];
			
			$mes1=$_REQUEST['txt_mes1'];
			$mes2=$_REQUEST['txt_mes2'];
			$mes3=$_REQUEST['txt_mes3'];
			$mes4=$_REQUEST['txt_mes4'];
			$mes5=$_REQUEST['txt_mes5'];
			$mes6=$_REQUEST['txt_mes6'];
			$mes7=$_REQUEST['txt_mes7'];
			$mes8=$_REQUEST['txt_mes8'];
			$mes9=$_REQUEST['txt_mes9'];
			$mes10=$_REQUEST['txt_mes10'];
			$mes11=$_REQUEST['txt_mes11'];
			$mes12=$_REQUEST['txt_mes12'];
			$mes13=$_REQUEST['txt_mes13'];
			$mes14=$_REQUEST['txt_mes14'];
			$mes15=$_REQUEST['txt_mes15'];
			
			$dia1=$_REQUEST['txt_dia1'];
			$dia2=$_REQUEST['txt_dia2'];
			$dia3=$_REQUEST['txt_dia3'];
			$dia4=$_REQUEST['txt_dia4'];
			$dia5=$_REQUEST['txt_dia5'];
			$dia6=$_REQUEST['txt_dia6'];
			$dia7=$_REQUEST['txt_dia7'];
			$dia8=$_REQUEST['txt_dia8'];
			$dia9=$_REQUEST['txt_dia9'];
			$dia10=$_REQUEST['txt_dia10'];
			$dia11=$_REQUEST['txt_dia11'];
			$dia12=$_REQUEST['txt_dia12'];
			$dia13=$_REQUEST['txt_dia13'];
			$dia14=$_REQUEST['txt_dia14'];
			$dia15=$_REQUEST['txt_dia15'];
			$dia15=$_REQUEST['txt_dia15'];
			
			$year=2016;
			
				$edad1=$year-$year1;
				$edad2=$year-$year2;
				$edad3=$year-$year3;
				$edad4=$year-$year4;
				$edad5=$year-$year5;
				$edad6=$year-$year6;
				$edad7=$year-$year7;
				$edad8=$year-$year8;
				$edad9=$year-$year9;
				$edad10=$year-$year10;
				$edad11=$year-$year11;
				$edad12=$year-$year12;
				$edad13=$year-$year13;
				$edad14=$year-$year14;
				$edad15=$year-$year15;
				
			echo "<div class='principal'>";
	
					echo "<h1>Lista De Estudiantes y Calculo De Edad</h1>";
						
				echo "<div id='titulo'>";
					echo "<div id='numero' class='numero'>";
					echo "Numero";
					echo "</div>";
					
					echo "<div id='nombre' class='nombre'>";
					echo "Nombres";
					echo "</div>";
					
					echo "<div id='apellido' class='apellido'>";
					echo "Apellidos";
					echo "</div>";
					
					echo "<div id='edad' class='edad'>";
					echo "Edad";
					echo "</div>";
				echo "</div>";
					
						echo "<span>1</span>";
						echo "<input id='name'.$nombre1/>";
						echo "<input id='surname'.$apellido1/>";
						echo "<input id='age' $edad1/>";
						echo "<br>";
					
						echo "<span>2</span>";
						echo "<input $nombre2 id='name'>";
						echo "<input $apellido2 id='surname'>";
						echo "<input $edad2 id='age'>";
						echo "<br>";
					
						echo "<span>3</span>";
						echo "<input $nombre3 id='name'>";
						echo "<input $apellido3 id='surname'>";
						echo "<input $edad3 id='age'>";
						echo "<br>";
					
					echo "<span>4</span>";
						echo "<input $nombre4 id='name'>";
						echo "<input $apellido4 id='surname'>";
						echo "<input $edad4 id='age'>";
					echo "<br>";
					
					echo "<span>5</span>";
						echo "<input $nombre5 id='name'>";
						echo "<input $apellido5 id='surname'>";
						echo "<input $edad5 id='age'>";
					echo "<br>";
					
					echo "<span>6</span>";
						echo "<input $nombre6 id='name'>";
						echo "<input $apellido6 id='surname'>";
						echo "<input $edad6 id='age'>";
					echo "<br>";
					
					echo "<span>7</span>";
						echo "<input $nombre7 id='name'>";
						echo "<input $apellido7 id='surname'>";
						echo "<input $edad7 id='age'>";
					echo "<br>";
					
					echo "<span>8</span>";
						echo "<input $nombre8 id='name'>";
						echo "<input $apellido8 id='surname'>";
						echo "<input $edad8 id='age'>";
					echo "<br>";
					
					echo "<span>9</span>";
						echo "<input $nombre9 id='name'>";
						echo "<input $apellido9 id='surname'>";
						echo "<input $edad9 id='age'>";
					echo "<br>";
					
					echo "<span>10</span>";
						echo "<input $nombre10 id='name'>";
						echo "<input $apellido10 id='surname'>";
						echo "<input $edad10 id='age'>";
					echo "<br>";
					
					echo "<span>11</span>";
						echo "<input $nombre11 id='name'>";
						echo "<input $apellido11 id='surname'>";
						echo "<input $edad11 id='age'>";
					echo "<br>";
					
						echo "<span>12</span>";
						echo "<input $nombre12 id='name'>";
						echo "<input $apellido12 id='surname'>";
						echo "<input $edad12 id='age'>";
					echo "<br>";
					
					echo "<span>13</span>";
						echo "<input $nombre13 id='name'>";
						echo "<input $apellido13 id='surname'>";
						echo "<input $edad13 id='age'>";
					echo "<br>";
					
					echo "<span>14</span>";
						echo "<input $nombre14 id='name'>";
						echo "<input $apellido14 id='surname'>";
						echo "<input $edad14 id='age'>";
						echo "<br>";
					
					echo "<span>15</span>";
						echo "<input $nombre15 id='name'>";
						echo "<input $apellido15 id='surname'>";
						echo "<input $edad15 id='age'>";
						echo "<br>";			
			echo "</div>";
	
		?>
	</body>
</html>
