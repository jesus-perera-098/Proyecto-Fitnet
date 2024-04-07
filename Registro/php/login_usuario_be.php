<?php

    
    session_start();

    include 'conexion_be.php';

    $clave = $_POST['clave'];
    $correo = $_POST['correo'];
    $clave = hash('sha512', $clave );


    $verificar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE  correo ='$correo' ");


    if(mysqli_num_rows($verificar_login) > 0){
        $_SESSION['usuario'] = $correo;
        header("location: ../bienvenida.php");
        
    }else{
        echo '
           <script>
              alert("Usuario no existente, por favor verifique los datos introducidos");
              window.location = "../index.php";
           </script>
         
        ';

        exit;
    }
    


?>