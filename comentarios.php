<?php

   $comentario = $_POST['comentario'];
   $archivo = fopen('comentarios.txt', 'a');
//    fputs($archivo, $comentario);
   $comentarios="comentarios.txt";
   $fecha = date("d/m/y",filemtime($comentarios));
//    fputs($archivo, $fecha);
   $hora = date("h:i:sa");

   $correo = $_POST['correo'];
   
   $contenido = $_POST['nombre']."...".$_POST['apellido'].'...'.$correo.'...'.$fecha.'...'.$hora.'...'.$comentario."\n";
   
   fputs($archivo, $contenido);

   fclose($archivo);

   echo "<p> Se ha guardado tu comentario  </p> ";




   header("Location: agregar_comentarios.php");

    $prueba = "este es string de prueba";
   
?>