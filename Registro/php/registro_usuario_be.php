<?php

   include 'conexion_be.php';

   $nombre_completo = $_POST['nombre_completo'];
   $correo = $_POST['correo'];
   $usuario = $_POST['usuario'];
   $clave = $_POST['clave'];
   $clave = hash('sha512', $clave);
   

   $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, clave) 
             VALUES('$nombre_completo', '$correo', '$usuario', '$clave')";

  
   $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' ");

   if(mysqli_num_rows($verificar_correo) > 0){
      echo '
          <script>
          
             alert("este correo ya ha sido registrado, intenta con otro diferente");
             window.location = "../index.php"; 
          </script>      
      ';
      exit();
   }


   $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' ");

   if(mysqli_num_rows($verificar_usuario) > 0){
      echo '
          <script>
          
             alert("este usuario ya ha sido registrado, intenta con otro diferente");
             window.location = "../index.php"; 
          </script>      
      ';
      exit();
   }

   $ejecutar = mysqli_query($conexion, $query);

   if($ejecutar){

      echo '
        <script>
        
            alert("usuario almacenado exitosamente");
            window.location = "../index.php";

        </script>
      
      ';
   }else{
      echo '
         <script>
            alert("usuario no almacenado intentelo una vez más");
            window.location = "../index.php";
         
         </script>
      
      ';
   }
   
?>