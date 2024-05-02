<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <img src="http://localhost/registro/assets/images/fithub1.png" alt="logo" width="80" height="62">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="calcimc.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Calculadora de IMC</span> 1 </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Ejercicios</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="http://localhost/registro/assets/images/fithub1.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">Usuario</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">Perfil</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <form action="php/cerrar_sesion.php">
                              <button>cerrar sesion</button>
                            </form>
                    </div>
                </div>
            </div>
            <div class="col py-3">
                <div class="container">
                    <h1 class="display-4">Catálogo de Ejercicios</h1>
                    <div class="d-flex justify-content-start mb-3">
                        <button class="btn btn-primary" onclick="mostrarEjercicios('casa')">Ejercicios en Casa</button>
                        <button class="btn btn-primary ms-2" onclick="mostrarEjercicios('gym')">Ejercicios de Gimnasio</button>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3 g-4" id="ejerciciosContainer">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Función para cambiar entre ejercicios en casa y de gimnasio
        function mostrarEjercicios(tipo) {
            const ejerciciosContainer = document.getElementById('ejerciciosContainer');
            ejerciciosContainer.innerHTML = ''; // Limpiar el contenido anterior

            // Agregar tarjetas de ejercicios según el tipo seleccionado
            if (tipo === 'casa') {
                agregarEjercicio('Pull ups / Dominadas', 'Este ejercicio se centra principalemtne en los dorsales', 'assets/images/ejercicio_casa1.png', 'https://www.youtube.com/watch?v=J1r9UtnaY5c');
                agregarEjercicio('Push ups / Felxiones', 'Este ejercicio se centra principalemtne en el pecho y los triceps', 'assets/images/push_ups.jpg', 'https://www.youtube.com/watch?v=7NslRnaeo48');
                agregarEjercicio('Squats / Sentadillas', 'Este ejercicio se centra principalemtne en los cuadriceps y gluteos', 'assets/images/squats.jpg', 'https://www.youtube.com/watch?v=qsAkuNORgmk');
                
                // Agregar más ejercicios en casa aquí según sea necesario
            } else if (tipo === 'gym') {
                agregarEjercicio('Press banca', 'Este ejercicio se centra principalemtne en el pecho y hombros', 'assets/images/Press_banca.jpg', 'https://www.youtube.com/watch?v=jlFl7WJ1TzI');
                agregarEjercicio('Pull down', 'Este ejercicio se centra principalemtne en los dorsales', 'assets/images/pull_down.jpg', 'https://www.youtube.com/watch?v=72q0tKij5uU');
                agregarEjercicio('Prensa', 'Este ejercicio se centra principalemtne en los cuadriceps', 'assets/images/prensa.jpg', 'https://www.youtube.com/watch?v=xvCynwyNoP4');   
                // Agregar más ejercicios de gimnasio aquí según sea necesario
            }
        }

        // Función para agregar una tarjeta de ejercicio al contenedor
        function agregarEjercicio(titulo, descripcion, imagen, videoEnlace) {
            const ejerciciosContainer = document.getElementById('ejerciciosContainer');
            const ejercicioCard = document.createElement('div');
            ejercicioCard.classList.add('col');
            ejercicioCard.innerHTML = `
                <div class="card h-100">
                    <img src="${imagen}" class="card-img-top" alt="${titulo}">
                    <div class="card-body">
                        <h5 class="card-title">${titulo}</h5>
                        <p class="card-text">${descripcion}</p>
                        <a href="${videoEnlace}" target="_blank" class="btn btn-primary">Ver Video</a>
                    </div>
                </div>
            `;
            ejerciciosContainer.appendChild(ejercicioCard);
        }

        // Mostrar inicialmente ejercicios en casa al cargar la página
        window.onload = function() {
            mostrarEjercicios('casa');
        };
    </script>
</body>
</html>
