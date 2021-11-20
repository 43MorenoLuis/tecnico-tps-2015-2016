<!doctype html>
<html>
<head>
	<?php include('hdnotas.php'); ?>
</head>

<body>


<!--  LATERAL ----------------------------------------------  -->
<header id="lateral">
	<div class="logo">
    	<img src="interfaz/cobra.png" alt="Cobra - Sistema para el Control de Obra" title="Cobra - Sistema para el Control de Obra" />
    	<p>Sistema para el Control de Obra</p>
        <img src="interfaz/escudo_iquira.png" alt="Letingel" title="Letingel" />
    </div>
	<div class="usuario">
        <img src="interfaz/usuario.png" alt="Nombre de Usuario" title="Nombre de Usuario" />
        Nombre de Usuario
    </div>
    <div id="firstpane" class="menu_list">
        <a class="menu_head"><img src="iconos/home.png" /> Inicio</a>

        <a class="menu_head"><img src="iconos/licitacion.png" /> Licitación</a>

        <p class="menu_head"><img src="iconos/aiu.png" /> AIU</p>
        <div class="menu_body">
            <a href="#"><img src="iconos/aiuAdmin.png" /> Administración</a>
            <a href="#"><img src="iconos/auiIncon.png" /> Inconvenientes</a>
            <a href="#"><img src="iconos/aiuUtil.png" /> Utilidad</a>
        </div>

        <a class="menu_head"><img src="iconos/hseq.png" /> HSEQ</a>
        <a class="menu_head"><img src="iconos/power.png" /> SALIR</a>
    </div>
</header>



<!--  MODULOS ----------------------------------------------  -->
<!--div id="modulos">
	<div class="conte">
    	<h1>Módulos</h1>
        <a class="closeMo">X</a>
        <ul>
        	<li><a href="#"><img src="iconos/almacen.png" /><p>Almacén</p></a></li>
        	<li><a href="#"><img src="iconos/licitacion.png" /><p>Licitación</p></a></li>
        	<li><a href="#"><img src="iconos/hseq.png" /><p>HSEQ</p></a></li>
        	<li><a href="#"><img src="iconos/recuersoHumano.png" /><p>Recurso Humano</p></a></li>

        	<li><a href="#"><img src="iconos/manoObra.png" /><p>Mano de obra</p></a></li>
        	<li><a href="#"><img src="iconos/cargaArchivo.png" /><p>Cargar archivo</p></a></li>
        	<li><a href="#"><img src="iconos/perfil.png" /><p>Perfiles</p></a></li>
        	<li><a href="#"><img src="iconos/herramienta.png" /><p>Herramientas</p></a></li>

        	<li><a href="#"><img src="iconos/contrato.png" /><p>Contrato</p></a></li>
        	<li><a href="#"><img src="iconos/centroCosto.png" /><p>Centro de Costo</p></a></li>
        	<li><a href="#"><img src="iconos/aiu.png" /><p>AIU</p></a></li>
        	<li><a href="#"><img src="iconos/aiuAdmin.png" /><p>AUI - Administración</p></a></li>

        	<li><a href="#"><img src="iconos/auiIncon.png" /><p>AUI - Inconvenientes</p></a></li>
        	<li><a href="#"><img src="iconos/aiuUtil.png" /><p>AUI - Utilidad</p></a></li>
        	<li><a href="#"><img src="iconos/apu.png" /><p>APU</p></a></li>
        	<li><a href="#"><img src="iconos/controlObra.png" /><p>Control de Obra</p></a></li>

        	<li><a href="#"><img src="iconos/calidad.png" /><p>Calidad</p></a></li>
        	<li><a href="#"><img src="iconos/importarArchivo.png" /><p>Importar archivo</p></a></li>
        	<li><a href="#"><img src="iconos/excel.png" /><p>Excel</p></a></li>
        	<li><a href="#"><img src="iconos/pdf.png" /><p>PDF</p></a></li>

        	<li><a href="#"><img src="iconos/informe.png" /><p>Informe</p></a></li>
        	<li><a href="#"><img src="iconos/grafico.png" /><p>Gráficas Estadísticas</p></a></li>
        </ul>
    </div>
</div>


< CUERPO  >
<section id="cuerpo">
    <div class="inter">
        <div class="miga">
            <div><a href="#">Inicio</a> &nbsp;/&nbsp;  <a href="#">Expediente</a>  &nbsp;/&nbsp;  Nombre del Expediente</div>
            <a href="#" class="reg"><span class="im"> </span><span class="tx">Regresar</span></a>
        </div>

        <h1><img src="iconos/licitacion.png" /> Licitación</h1>

        <div class="bloque">
            <form>
            <span class="botonera">
                <div>
                    <input type="submit" value="Guardar" class="left save" />
                    <input type="submit" value="Modificar" class="left edit" />
                    <input type="button" value="Agregar" class="left mas" />
                    <input type="button" value="Eliminar" class="left del" />
                    <input type="button" value="Imprimir" class="left print">
                </div>
            </span>

        	<div class="scroll">
                <article class="cont">
                        <span>
                            <label>Input texto</label>
                            <input type="text" name="" id="" placeholder="Escriba el texto" value="" required />
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
                        </span-->
                </article>
        	</div>
            <form>
        </div>

    </div>
</section>






</body>
</html>
