<?php
    session_start();
    include('db/conexion.php');
    $persona_nombreapellidos=$_SESSION['nombre_persona'];

$sql_img=" SELECT img_codigo,
                    img_titulo,
                    img_descripcion,
                    img_url
                FROM imagen;";
$query_img=pg_query($conn,$sql_img);
?>

<!doctype html>
<html>
<head>

    <?php include('hdiquira.php');
    ?>

</head>

<body>

<!--  LATERAL ----------------------------------------------  -->
<header id="lateral">
	<?php include('ltraliquira.php');
    ?>
</header>

<!--  CUERPO ----------------------------------------------  -->
<section id="cuerpo">
    <div class="inter">
        <div class="miga">
            <div><a href="inicio"> Inicio</a></div>
            <!--a href="#" class="reg"><span class="im"> </span><span class="tx">Regresar</span></a-->
        </div>

        <h1><img src="iconos/home.png" /> Inicio</h1>

        <div class="bloq1">

                <h1>Iquira Ciudad Luz Del Huila</h1>
                        <?php
                            $numero_registro=1;
                            while($data_imgn=pg_fetch_array($query_img)){
                                $img_codigo=$data_imgn['img_codigo'];
                                $img_titulo=$data_imgn['img_titulo'];
                                $img_descripcion=$data_imgn['img_descripcion'];
                                $img_url=$data_imgn['img_url'];

                            echo "<img src='$img_url'/>";
                                echo "<div>";
                                    echo "<h3>$img_titulo</h3>";
                                     echo "<span>$img_descripcion</span>";
                                echo "</div>";

                            }
                        ?>
        </div>

          

</div>
</section>
</body>
</html>
