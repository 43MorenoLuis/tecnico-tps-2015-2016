<?php
	session_start();
	include("db/conexion.php");
	$persona_nombreapellidos=$_SESSION['nombre_persona'];

  $ite_codigo="";
  $ite_referencia="";
  $ite_tipo="";
  $ite_jerarquia="";

			if(isset($_REQUEST['codigo_item'])){
				$codigo_item=$_REQUEST['codigo_item'];

				$sql_item="SELECT ite_codigo,
                          ite_referencia,
                          ite_tipo,
                          ite_jerarquia
													FROM item
													WHERE ite_codigo=$codigo_item;";

				$query_item=pg_query($conn, $sql_item);

				$datos_item=pg_fetch_array($query_item);
        $ite_codigo=$datos_item['ite_codigo'];
        $ite_referencia=$datos_item['ite_referencia'];
        $ite_tipo=$datos_item['ite_tipo'];
        $ite_jerarquia=$datos_item['ite_jerarquia'];
			}

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
            <div><a href="inicio">Inicio</a> &nbsp;/&nbsp;  <a href='item'> Item</a>&nbsp;/&nbsp; Adicionar Item</div>
            <a href="#" class="reg"><span class="im"> </span><span class="tx">Regresar</span></a>
        </div>

        <h1><img src="iconos/item.png" /> Adicionar Item</h1>

        <div class="bloque">
            <form name='frm_procsitem' action='procsitem.php' method='post' >
            <span class="botonera">
                <div>
                    <input type="submit" value="Guardar" class="left save" />
				</div>
						</span>

        	<div class="scroll">
                <article class="cont">
					<span>
							<input type="hidden" name="txt_codigo" id="txt_codigo" value="<?php echo $ite_codigo;?>" required />
					</span>
					<span>
						<label>Referencia</label>
						<input type="text" name="txt_referncia" id="txt_referncia" placeholder="Escriba Aqui." value="<?php echo $ite_referencia;?>" required />
					</span>
          <span>
              <label>Tipo</label>
              <input type="number" name="num_tipo" id="num_tipo" min="0" max="10" value="<?php echo $ite_tipo;?>" required />
          </span>
          <span>
              <label>Jerarquia</label>
              <input type="number" name="num_jerarquia" id="num_jerarquia" min="0" max="10" value="<?php echo $ite_jerarquia;?>" required />
          </span>

                </article>
        	</div>
            </form>
        </div>

    </div>
</section>
</body>
</html>
