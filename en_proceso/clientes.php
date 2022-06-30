<?php

include 'conexion1.php';

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
  <thead>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id_usuario</th>
            <th scope="col">nombre</th>
            <th scope="col">apellido</th>
            <th scope="col">correo</th>
            <th scope="col">telefono</th>
            <th scope="col">acciones</th>

          </tr>
        </thead>
   <?php
   
   $consulta = "SELECT * FROM usuario";
   $resultado = mysqli_query($conexion, $consulta);
   while($mostrar=mysqli_fetch_array($resultado)){
   ?>
        <tbody>
          <tr>
            <th><?php echo $mostrar['id_usuario'];?></th>
            <td><?php echo $mostrar['nombre'];?></td>
            <td><?php echo $mostrar['apellido'];?></td>
            <td><?php echo $mostrar['correo'];?></td>
            <td><?php echo $mostrar['telefono'];?></td>
            <td>
            <!-- eliminar   -->
             <form action="eliminar.php" method="POST">
              <input type="hidden" value="<?php echo $mostrar['id_usuario'];?>" name="texid"readonly>
              <td><input type="submit" value="eliminar" name="btneliminar"></td>
             </form>
          </td>
            <td><a href="editar.php?id=<?php echo $mostrar['id_usuario'];?>"><button type="submite">editar</button></a></td>
          </tr>
        </tbody>
    <?php
      } 
      ?>
      </table>
  </thead>  
  </div>
</body>
</html>