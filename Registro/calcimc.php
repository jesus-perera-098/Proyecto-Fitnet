<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu inicio</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .calculator {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            margin: 0 auto;
            margin-top: 50px;
        }
    </style>
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
                                    <a href="calcimc.php" class="nav-link px-0"> <span class="d-none d-sm-inline" style="color: #77c5cc">Calculadora de IMC</span></a>
                                </li>
                                <li class="w-101">
                                    <form action="php/siguiente_pagina4.php">
                                        <button>Ejercicios</button>
                                    </form>
                                    
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">Usuario</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">Perfil</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <form action="php/cerrar_sesion.php">
                              <button>Cerrar sesion</button>
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col py-3">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="calculator">
                                <h2 class="text-center mb-4">Calculadora de IMC</h2>
                                <div class="mb-3">
                                    <label for="weight" class="form-label">Peso (kg):</label>
                                    <input type="number" class="form-control" id="weight">
                                </div>
                                <div class="mb-3">
                                    <label for="height" class="form-label">Altura (cm):</label>
                                    <input type="number" class="form-control" id="height">
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary" onclick="calculateBMI()">Calcular</button>
                                </div>
                                <div class="mt-4">
                                    <h5 class="text-center mb-3">Resultado</h5>
                                    <div class="alert alert-primary" role="alert" id="result" style="display: none;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function calculateBMI() {
            var weight = parseFloat(document.getElementById('weight').value);
            var height = parseFloat(document.getElementById('height').value) / 100; // Convertir a metros
            var bmi = weight / (height * height);
            var result = '';

            if (isNaN(bmi)) {
                result = 'Por favor, ingrese un peso y una altura válidos.';
            } else {
                if (bmi < 18.5) {
                    result = 'Bajo peso';
                } else if (bmi >= 18.5 && bmi < 24.9) {
                    result = 'Peso normal';
                } else if (bmi >= 25 && bmi < 29.9) {
                    result = 'Sobrepeso';
                } else {
                    result = 'Obesidad';
                }

                result += ': ' + bmi.toFixed(2);
            }

            document.getElementById('result').textContent = result;
            document.getElementById('result').style.display = 'block';
        }
    </script>
</body>
</html>