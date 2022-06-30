<?php
include 'conexion1.php';

    $ID=$_POST['id'];
    $NOMBRE=$_POST['nombre'];
    $APELLIDO=$_POST['apellido'];
    $CORREO=$_POST['correo'];
    $TELEFONO=$_POST['telefono'];

  mysqli_query($conexion, "UPDATE `usuario` SET `nombre` = '$NOMBRE', `apellido` = '$APELLIDO',
   `correo` = '$CORREO', `telefono` = ' $TELEFONO' WHERE `usuario`.`id_usuario` = '$ID'");

  mysqli_close($conexion);
  header("location:clientes.php");
?>