<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>

    <div class="container">
        <?php include("header.php"); ?>
        <section>
            <h2>Comentarios</h2>
        </section>

        <div class="detalle">
			<p>En este ejemplo se utiliza PHP fopen date para agregar los datos del formulario a un archivo de texto, luego procesar esa informacion en un array y presentar en un parrafo los indices definidos de este array   </p>
		</div>


        <div class="form">
            <form  class="formulario" action="comentarios.php" method="post" enctype="multipart/form-data">
                <label>Nombre</label>

                <input type="text" name="nombre" size="20" maxlength="100" required>

                <label>Apellido</label>
                <input type="text" name="apellido" size="20" maxlength="100" required>

                <label>Correo Electronico</label>
                <input type="email" name="correo" maxlength="50" required>

                <label>Comentario</label>

                <textarea name="comentario" rows="5" cols="40"></textarea>

                <input type="submit" value="Enviar">

            </form>
        </div>

        <div class="datos-container">

            <div class="comentarios">

                <div class="box-comentario">

                    <?php
                    $archivo = fopen('comentarios.txt', 'r');

                    $vector = file('comentarios.txt');
                    //  for($i=0; $i<count($vector); $i++) {
                    // 	 echo "<p>"."Comentario numero $i: $vector[$i]</p>";

                    // 	 echo $vector[$i=2];

                    //  }


                    while ($row = fgets($archivo)) {
                        $num = explode("...", $row);
                        $nombre = $num[0];
                        $apellido = $num[1];
                        $email =  $num[2];
                        $fecha =  $num[3];
                        $hora =  $num[4];
                        $comentariox = $num[5];
                        echo "<p>$nombre dice: $comentariox<br>
									$fecha a las $hora</p>";
                    }



                    fclose($archivo);

                    ?>

                </div>

            </div>


        </div>




    </div>


    <?php include("footer.php"); ?>


</body>



</html>