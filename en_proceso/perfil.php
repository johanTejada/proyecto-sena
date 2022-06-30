<?php
include 'conexion1.php';
session_start();

$idusuario = $_SESSION['usuario'];
$session = $pdo->prepare("SELECT * FROM usuario WHERE correo='$idusuario' AND estado = '1'");
$session->execute();
$session_usuario = $session->fecthALL(PDO::FETCH_ASSOC);  
foreach ($session_usuario as $session_usuarios){
    $id_usuario = $session_usuarios['id_usuario'];
    $nombre = $session_usuarios['nombre'];
    $apellido = $session_usuarios['apellido'];
    $correo = $session_usuarios['correo'];
    $telefono = $session_usuarios['telefono'];



}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home3.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body>
  <div>
  <thead>
    <table class="table">
        <thead>
          <tr>
            <!-- <th scope="col">id_usuario</th> -->
            <th scope="col">nombre</th>
            <th scope="col">apellido</th>
            <th scope="col">correo</th>
            <th scope="col">telefono</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <th><?php echo $id_usuario ?></th>
            <td><?php?></td>
            <td><?php?></td>
            <td><?php?></td>
          </tr>
        </tbody>
      </table>
  </thead>  
  </div>
</body>
</html>