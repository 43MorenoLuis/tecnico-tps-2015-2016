<?php
	session_start();
	include("db/conexion.php");
	$persona_nombreapellidos=$_SESSION['nombre_persona'];

							$con_codigo_m="";
							$con_titulo="";
							$con_introduccion="";
							$con_text="";
							$ite_codigo="";
							$ite_referencia="";
						 	$con_imgprincipal="";
       				$ite_codigo_m="";

				if(isset($_REQUEST['codigo_contenido'])){
					$codigo_contenido=$_REQUEST['codigo_contenido'];

					$sql_contenido="SELECT
															con_titulo,
															con_introduccion,
															con_text,
															con_imgprincipal,
															con_codigo
														FROM contenido
														WHERE con_codigo=$codigo_contenido;";

					$query_contenido=pg_query($conn, $sql_contenido);

					$datos_contenido=pg_fetch_array($query_contenido);
							$con_codigo_m=$datos_contenido['con_codigo'];
							$con_titulo=$datos_contenido['con_titulo'];
							$con_introduccion=$datos_contenido['con_introduccion'];
							$con_imgprincipal=$datos_contenido['con_imgprincipal'];
							$con_text=$datos_contenido['con_text'];
				}

						$sql_item="SELECT
													ite_codigo,
													ite_referencia
								FROM item;";
					$query_item=pg_query($conn,$sql_item);

					$datos_item=pg_fetch_array($query_item);
							$ite_codigo_m=$datos_item['ite_codigo'];
							$ite_referencia=$datos_item['ite_referencia'];


?>

<!doctype html>
<html>
<head>

	<?php include('hdiquira.php'); ?>

</head>

<body>

<!--  LATERAL ----------------------------------------------  -->
<header id="lateral">
	<?php include('ltraliquira.php'); ?>
</header>

<!--  MODULOS ----------------------------------------------  -->

<!--  CUERPO ----------------------------------------------  -->
<section id="cuerpo">
    <div class="inter">
        <div class="miga">
            <div><a href="inicio">Inicio</a> &nbsp;/&nbsp;  <a href='Contenido'>Contenido</a>&nbsp;/&nbsp; Adicionar Contenido</div>
            <a href="#" class="reg"><span class="im"> </span><span class="tx">Regresar</span></a>
        </div>

        <h1><img src="iconos/contenido.png" /> Adicionar Contenido</h1>

        <div class="bloque">
            <form name='frm_procscontenido' action='procscontenido.php' method='post' >
            <span class="botonera">
                <div>
                    <input type="submit" value="Guardar" class="left save" />
				</div>

            </span>

        	<div class="scroll">
                <article class="cont">
					<span>
						<input type="hidden" name="txt_codigo" id="txt_codigo" value="<?php echo $con_codigo_m;?>" required />
					</span>
					<span>
						<label>Titulo</label>
						<input type="text" name="txt_title" id="txt_title" placeholder="Ingrese Titulo" value="<?php echo $con_titulo;?>" required />
					</span>
					<span>
						<label>Introduccion</label>
						<input type="text" name="txt_itro" id="txt_itro" placeholder="Ingrese Introduccion" value="<?php echo $con_introduccion;?>" required />
					</span>
					<span>
						<label>Contenido Imagen</label>
						<input type="text" name="txt_contimg" id="txt_contimg" placeholder="Ingrese Contenido Imagen" value="<?php echo $con_imgprincipal;?>" required />
					</span>
					<span>
						<label>texto</label>
						<textarea  placeholder="texto colocar" name="txt_contenido" id="txt_contenido" value="<?php echo $con_text;?>" required ></textarea>
					</span>
					<span>
							<label>Item</label>
							<select name="sel_item" id="sel_item" required>
									<option value="0">Seleccione ?</option>
					<?php
						while($data_item=pg_fetch_array($query_item)){
							$ite_codigo=$data_item['ite_codigo'];
							$ite_referencia=$data_item['ite_referencia'];

							if($ite_codigo_m==$ite_codigo){
								$selected="selected";
							}
							else{
								$selected="";
							}

							echo "<option value='$ite_codigo'>$ite_referencia</option>";
						}
					?>
							</select>
					</span>
                </article>
        	</div>
            </form>
        </div>

    </div>
</section>
</body>
</html>
