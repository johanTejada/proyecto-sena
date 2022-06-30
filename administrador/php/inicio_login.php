<?php

    session_start();
    include 'conexion1.php';

    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
   //  $contrasena_hash = hash ("sha256", $contrasena); // Desencriptamos la contraseña.
   
   $validar_login = mysqli_query ($conexion, "SELECT * FROM usuario WHERE correo='$correo' 
   
   and contraseña='$contraseña'"); 

   if(mysqli_num_rows($validar_login) > 0){
      $_SESSION['usuario'] = $correo;
      header("location: /pagina/administrador/php/home2.php");
      exit(); 
   
   }else{

    echo '
    <script>
    alert("el correo o contraseña estan incorrecta, intenta nuevamente");    
       window.location ="/pagina/administrador/login.php";
    </script> 
    ';  
    exit();
   }





?>