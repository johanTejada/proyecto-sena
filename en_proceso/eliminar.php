<?php
 include 'conexion1.php';


 $ID=$_POST['texid'];
 mysqli_query($conexion, "DELETE FROM usuario where id_usuario='$ID'");
 mysqli_close($conexion);
 
 header("location:clientes.php");



?>