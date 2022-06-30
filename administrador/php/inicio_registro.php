<?php

 include 'conexion1.php';

    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $contraseña=$_POST['contraseña'];
    $confirme_contraseña= $_POST['confirme_contraseña'];

   //  $contraseña_hash = hash ("sha256", $contraseña); // Encriptamos la contraseña.

    $query="INSERT INTO  usuario ( nombre, apellido, correo, telefono, contraseña)
    VALUE ('$nombre' , '$apellido' , '$correo', '$telefono' , '$contraseña')";

  //verifivamos que el correo no se repita

  $verificar_correo= mysqli_query($conexion, "SELECT * FROM usuario WHERE correo='$correo' ");

  if(mysqli_num_rows($verificar_correo) > 0){
      
    echo '
    <script>
    alert("este correo ya esta registrado, intenta con otro diferente");    
    window.location ="/pagina/administrador/registro.php";
    </script> 
    ';  
    exit();

  }else if($contraseña != $confirme_contraseña){ // Si las contraseñas no coinciden, mostramos un mensaje de error.
    echo '
        <script>
            window.location = "/pagina/administrador/registro.php";
            alert("Las contraseñas no coinciden, intenta de nuevo.");
        </script>
    ';
    exit();
 }
//  else{

//   header("location: /pagina/administrador/php/home2.php");
//  }
 $ejecutar = mysqli_query($conexion, $query); //ejecute la consulta//
 
 if($ejecutar){
  echo '
    <script>
    alert("datos almacenados exitosamente, ahora debes loguearte");
    window.location ="/pagina/administrador/login.php";
    </script>
  ';
 }
// mysqli_close($conexion);

?>