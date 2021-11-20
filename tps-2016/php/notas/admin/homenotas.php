<?php
	session_start();
	$persona_nombreapellidos=$_SESSION['nombre_persona'];
?>

<!doctype html>
<html>
<head>

	<?php include('hdnotas.php'); ?>

</head>

<body>


<!--  LATERAL ------------------------------------------------>
<header id="lateral">
	<?php include('ltralnotas.php'); ?>
</header>


<!--  CUERPO ------------------------------------------------>
<section id="cuerpo">
    <div class="inter">
        <div class="miga">
            <div><a href="#">Inicio</a></div>
            <a href="#" class="reg"><span class="im"> </span><span class="tx" onClick="history.go(-1)">Regresar</span></a>
        </div>

        <h1><img src="iconos/home_q.png" /> Inicio</h1>
       
        <div class="bloque">
            <form id='testform'>
                <!--span class="botonera">
                <div>
                    <!--input type="submit" value="Guardar" class="left save" />
                    <input type="submit" value="Modificar" class="left edit" />
                    <input type="button" value="Agregar" class="left mas" />
                    <input type="button" value="Eliminar" class="left del" />
                    <input type="button" value="Imprimir" class="left print">
                </div>
            </span-->

        	<div class="scroll">
                <article class="cont">             
                       <span>
                            <label>Input texto</label>
                            <input type="text" name="txt_eje" id="txt_eje" placeholder="Escriba el texto" required />                            
                            <input type="button" onClick="eje()" value="Eje" />
                        </span>

                        <span>
                            <label>Archivo</label>
                            <div class="fileSubir">
                                <input type="file" name="fileToUpload" id="fileToUpload" onChange="fileSelected();" />
                                Buscar archivo
                            </div>
                            <input type="button" onClick="uploadFile()" value="Subir" class="left upload" />
                       </span>

                        <span>
                            <label>Email</label>
                            <input type="email" name="" id="" placeholder="Escriba el correo" value="" required />
                        </span>

                        <span>
                            <label for='edad'>Edad</label>
                            <input type='range' max='100' min='0' id='edad' name='edad'  value='25' required />
                        </span>
                        <span>
                            <label>Fecha</label>
                            <input type="date" name="" id="" value="1996-12-19" required />
                        </span>

                        <span>
                            <label>Hora</label>
                            <input type="time" name="" id="" value="23:15:00" required />
                        </span>

                        <span>
                            <label>Mes</label>
                            <input type="month" name="" id="" value="1996-12" required />
                        </span>

                        <span>
                            <label>Número</label>
                            <input type="number" name="" id="" min="0" max="10" value="0" required />
                        </span>

                        <span>
                            <label>Teléfono</label>
                            <input type="tel" name="" id="" placeholder="Escriba el teléfono" value="" required />
                        </span>

                        <span>
                            <label>Combo</label>
                            <select name="" id="" required="required">
                                <option value="">Seleccione</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </span>

                        <span>
                            <label>Radio</label>
                            <input type="radio" name="RadioGroup1" value="radio1" /> <label>Etiqueta</label>
                            <input type="radio" name="RadioGroup1" value="radio2" checked /> <label>Etiqueta</label>
                        </span>

                        <span>
                            <label>Check</label>
                            <input type="checkbox" name="" value="" /> <label>Etiqueta</label>
                            <input type="checkbox" name="" value="" checked /> <label>Etiqueta</label>
                        </span>

                        <span>
                            <label>Área de texto</label>
                            <textarea placeholder="texto colocar" maxlength="6" rows="5" required></textarea>
                        </span>



                        <span class="doble">
                            <label>Input texto</label>
                            <input type="text" name="" id="" placeholder="Escriba el texto" value="" required />
                        </span>

                        <span class="doble">
                            <label>Input texto</label>
                            <input type="text" name="" id="" placeholder="Escriba el texto" value="" required />
                        </span>



                        <span class="triple">
                            <label>Input texto</label>
                            <input type="text" name="" id="" placeholder="Escriba el texto" value="" required />
                        </span>

                        <span class="triple">
                            <label>Input texto</label>
                            <input type="text" name="" id="" placeholder="Escriba el texto" value="" required />
                        </span>

                        <span class="triple">
                            <label>Input texto</label>
                            <input type="text" name="" id="" placeholder="Escriba el texto" value="" required />
                        </span>



                        <span>
                            <label>Input texto</label>
                            <input type="text" name="" id="" placeholder="t20" value="" class="ml t20" required />
                            <input type="text" name="" id="" placeholder="t30" value="" class="ml t30" required />
                            <input type="text" name="" id="" placeholder="t40" value="" class="ml t40" required />
                            <input type="text" name="" id="" placeholder="t50" value="" class="ml t50" required />
                            <input type="text" name="" id="" placeholder="t60" value="" class="ml t60" required />
                            <input type="text" name="" id="" placeholder="t70" value="" class="ml t70" required />
                            <input type="text" name="" id="" placeholder="t80" value="" class="ml t80" required />
                            <input type="text" name="" id="" placeholder="t90" value="" class="ml t90" required />
                            <input type="text" name="" id="" placeholder="t100" value="" class="ml t100" required />
                            <input type="text" name="" id="" placeholder="t110" value="" class="ml t110" required />
                            <input type="text" name="" id="" placeholder="t120" value="" class="ml t120" required />
                            <input type="text" name="" id="" placeholder="t130" value="" class="ml t130" required />
                        </span>

                        <span class="end">
                            <input type="submit" value="Guardar" class="left save" />
                            <input type="submit" value="Modificar" class="left edit" />
                            <input type="button" value="Guardar" class="left save" />
                            <input type="button" value="Imprimir" class="left print">
                        </span>                        
                </article>
        	</div-->

            </form>
        </div>

    </div>
</section>
</body>
</html>