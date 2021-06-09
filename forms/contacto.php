<?php

  include("conexion.php");

  $nombre = $_POST['name'];
  $correo = $_POST['email'];
  $asunto = $_POST['subject'];
  $mensaje = $_POST['message'];

  
  if(mysqli_query($conexion, "INSERT INTO correo (nombre,correo,asunto,mensaje) values ('$nombre','$correo','$asunto','$mensaje')")){
    //echo "Se insertaron Correctamente";
    echo '<script>alert("El envío del formulario ha concluído exitosamente")</script>';
    //echo '<script> window.history.back(); <script>';
    header('Location: index.html');
    exit();
  }
  else{
    echo "Hubo un error.";
  }

  include("conexion.php");

?>
