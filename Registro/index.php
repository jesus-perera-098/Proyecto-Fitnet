<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Enlace al archivo CSS -->
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" href="images/logos/fithub6.png">

    <title>Inicio</title>
</head>

<body>
    <nav class="navbar navbar-light bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="http://localhost/registro/assets/images/fithub1.png" alt="" width="50" height="38">
                <span style="color: white; font-weight: 800">Fit</span> <span style="color: #77c5cc; font-weight: 800">Hub</span>
            </a>
            <form action= "php/siguiente_pagina.php" class="boton1">
                <button>Iniciar Sesion/Registrarse</button>

            </form>
        </div>
    </nav>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <video width="100%" height="900px"autoplay muted controls src="assets/Video_2.mp4"></video>
               <!--<img src="https://media.istockphoto.com/id/1126509424/es/foto/hombre-cauc%C3%A1sico-de-rodillas-y-palmas-de-las-manos-delante-de-%C3%A9l-con-barras-en-espejo-de-fondo.jpg?s=612x612&w=0&k=20&c=1vobOO-APt0gWs1sVy0akKV1NBFIAjOVidwjx4jZFpQ=" class="d-block w-100" alt="portada"> -->
            </div>
        </div>
    </div>

    <section class="d-flex flex-column justify-content-center align-items-center pt-5  text-center w-50 m-auto" id="intro">
        <h1 class="p-3 fs-2 border-top border-3">Comienza a crear tus rutinas y a <span class="text-primary">organizarte mejor <span /></h1>
        <p class="p-3  fs-4">
            <span class="text-primary">Fit Hub</span> es el lugar indicado. Aquí podrás conocer ejercicios, crear tus propias rutinas, calcular tu índice de masa corporal, todo desde un solo lugar.
        </p>
    </section>

    <footer class="bg-dark text-center text-white">
        <!-- Copyright -->
        <div class="text-center p-3 bg-dark">
            © 2023 Copyright:
            <a class="text-white" style="text-decoration: none;" href="https://mdbootstrap.com/">Fit Hub</a>
        </div>
        <!-- Copyright -->
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>