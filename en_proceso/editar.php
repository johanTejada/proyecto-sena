<?php

include 'conexion1.php';

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar</title>
</head>
<body>
<div>
  <thead>
    <table class="table">
   <?php
   $id = $_GET["id"];
   $consulta = "SELECT * FROM usuario WHERE id_usuario='$id'";
   $resultado = mysqli_query($conexion, $consulta);
   while($mostrar=mysqli_fetch_array($resultado)){
   ?>
       <form action="proceso_editar.php" method="POST">
        <input type="hidden" value="<?php echo $mostrar['id_usuario'];?>" name="id">
        <p>nombre</p>
        <input type="text" value="<?php echo $mostrar['nombre'];?>" name="nombre">
        <p>apellido</p>
        <input type="text" value="<?php echo $mostrar['apellido'];?>" name="apellido">
        <p>correo</p>
        <input type="text" value="<?php echo $mostrar['correo'];?>" name="correo">
        <p>telefono</p>
        <input type="text" value="<?php echo $mostrar['telefono'];?>" name="telefono">
    <?php
      } 
      ?>
      <input type="submit" value="actualizar">
      </form>
      </table>
  </thead>  
  </div>
</body>
</html>