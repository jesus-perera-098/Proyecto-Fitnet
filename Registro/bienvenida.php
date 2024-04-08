<?php

   session_start();

   if(!isset($_SESSION['usuario'])){

    echo'
    
      <script>
      
         alert("Por favor debes iniciar sesion");
         window.location = "index.php";
      </script>
    ';
    //header("location: index.php");
    session_destroy();
    die();
   }

   


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilos_cobro.css">
</head>
<body>
    <div class= ".contenedor__general">

      

      <nav class="cabeza">
      
          <div class="contenedor_18">

            

          
            
            <h2>Pago en línea</h2>

             <form action="php/cerrar_sesion.php" class ="Cerrar_sesion">
                <button >Cerrar Sesion</button>
            </form>
              <a class="logo_cobro" href="#">
                
                <img src="assets/images/fithub1.png" alt="" width="60" height="40" >
                
              </a>
              <a class="logo_cobro_1" href="#">
                
                
                <span style="color: white; font-weight: 900">Fit</span> <span style="color: #77c5cc; font-weight: 900">Hub</span>
              </a>
          
          
            
          
    </nav>

      </div>
      
      <div class = "contenedor__cobro">

        <form action="php/siguiente_pagina.php"  class="cobro">

            <h2>¡Suscribete para disfrutar de nuestro contenido exclusivo!</h2>
            <input type="text" placeholder="Nùmero de tarjeta" name ="tarjeta">
            <img src="assets/images/mastercard.png" alt="" width="38" height="21" >
            <input type="date" placeholder="Vencimiento" name ="vigencia">
            <input type="text" placeholder="Nombre del titular de la tarjeta" name ="vigencia">
            <input type="password" placeholder="CSC" name ="seguridad">
            <button >Finalizar Pago</button>
            
           
        </form>

        <div class ="logos_tarjetas">

         <img class ="image1" src="assets/images/tarjeta2.png" alt="" width="150" height="100" >
         <img class ="image2" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRXQ-EAw8y32fqBTYiLJn1ic7J10tipwuspYGeUo0q&s" alt="" width="150" height="100" >
        </div>

        

      </div> 

      

    </div> 
    
        
    
    

</body>
</html>