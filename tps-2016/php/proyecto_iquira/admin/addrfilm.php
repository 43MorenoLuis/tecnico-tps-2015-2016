<?php
	session_start();
	include("db/conexion.php");
	$persona_nombreapellidos=$_SESSION['nombre_persona'];

	$vid_codigo_m="";
	$vid_descripcion="";
	$vid_url="";
	$vid_contenido="";
	$vid_item="";
	$vid_titulo="";
	$con_codigo_m="";
	$ite_codigo_m="";

if(isset($_REQUEST['codigo_video'])){
$codigo_video=$_REQUEST['codigo_video'];

$sql_video="SELECT	vid_codigo,
										vid_descripcion,
										vid_url,
										vid_contenido,
										vid_item,
										vid_titulo
								FROM video
								WHERE vid_codigo=$codigo_video;";

$query_video=pg_query($conn, $sql_video);

$datos_video=pg_fetch_array($query_video);
	$vid_codigo_m=$datos_video['vid_codigo'];
	$vid_descripcion=$datos_video['vid_descripcion'];
	$vid_url=$datos_video['vid_url'];
	$vid_contenido=$datos_video['vid_contenido'];
	$vid_item=$datos_video['vid_item'];
	$vid_titulo=$datos_video['vid_titulo'];
}

	$sql_item="SELECT
								ite_codigo,
								ite_referencia
			FROM item;";
	$query_item=pg_query($conn, $sql_item);
	$datos_item=pg_fetch_array($query_item);
		$ite_codigo_m=$datos_item['ite_codigo'];
		$ite_referencia=$datos_item['ite_referencia'];

		$sql_contenido="SELECT
									con_codigo,
									con_titulo
				FROM contenido;";
	$query_contenido=pg_query($conn, $sql_contenido);
	$datos_contenido=pg_fetch_array($query_contenido);
			$con_codigo_m=$datos_contenido['con_codigo'];
			$con_titulo=$datos_contenido['con_titulo'];
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
            <div><a href="inicio">Inicio</a> &nbsp;/&nbsp;  <a href='video'> Video</a>&nbsp;/&nbsp; Agregar Video</div>
            <a href="#" class="reg"><span class="im"> </span><span class="tx">Regresar</span></a>
        </div>

        <h1><img src="iconos/video.png" /> Agregar Video</h1>

        <div class="bloque">
            <form name='frm_procsfilm' action='procsfilm.php' method='post'>
            <span class="botonera">
                <div>
                    <input type="submit" value="Guardar" class="left save" />
				</div>

            </span>

        	<div class="scroll">
                <article class="cont">
									<span>
										<input type="hidden" name="txt_codigo" id="txt_codigo" value="<?php echo $vid_codigo_m;?>" required />
									</span>
									<span>
										<label>Titulo</label>
										<input type="text" name="txt_title" id="txt_title" placeholder="Ingrese Titulo" value="<?php echo $vid_titulo;?>" required />
									</span>
									<span>
										<label>Descripcion</label>
										<input type="text" name="txt_descpcn" id="txt_descpcn" placeholder="Ingrese Descripcion" value="<?php echo $vid_descripcion;?>" required />
									</span>
									<span>
										<label>Direccion</label>
										<input type="txt" name="txt_direccion" id="txt_direccion" placeholder="Digite Direccion" value="<?php echo $vid_url;?>" required />
									</span>
									<span>
											<label>Contenido</label>
											<select name="sel_contenido" id="sel_contenido" value="<?php echo $con_codigo;?>" required>
													<option value="0">Seleccione...</option>
									<?php
										while($data_contenido=pg_fetch_array($query_contenido)){
											$con_codigo=$data_contenido['con_codigo'];
											$con_titulo=$data_contenido['con_titulo'];

											if($con_codigo_m==$con_codigo){
												$selected="selected";
											}
											else{
												$selected="";
											}

											echo "<option value='$con_codigo'>$con_titulo</option>";
										}
									?>
											</select>
									</span>
									<span>
											<label>Item</label>
											<select name="sel_item" id="sel_item" value="<?php echo $ite_codigo;?>" required>
													<option value="0">Seleccione...</option>
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
