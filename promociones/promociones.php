<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="RAMTO Decoración - Soluciones en decoración y tapicería.">
    <meta name="author" content="Devcrud">
    <title>Promociones</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            padding-top: 56px;
        }
        .navbar-brand img {
            max-height: 40px;
        }
        .section-title {
            margin-top: 60px;
            margin-bottom: 30px;
        }
        .section-content {
            margin-bottom: 60px;
        }
        .footer {
            background-color: #343a40;
            color: white;
            padding-top: 40px;
            padding-bottom: 20px;
        }
        .social-link {
            color: white;
            margin-right: 15px;
        }
        .navbar-nav:hover {
            background-color: #343a40; /* Color de fondo al hacer hover */
        }

        /* Estilo para los elementos de navegación */
        .navbar-nav .nav-item .nav-link {
            transition: color 0.3s;
        }

        .navbar-nav .nav-item .nav-link:hover {
            color: #FF0000; /* Color de texto al hacer hover */
        }

        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
        }
        .dropdown-item:hover {
            background-color: rgba(255, 255, 255, 0.1); /* Cambia el color de fondo al pasar el cursor sobre el elemento */
            color: red !important; /* Cambia el color del texto al pasar el cursor sobre el elemento */
        }
    </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="56">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="../assets/Logo.png" alt="Logo de RAMTO Decoración">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">INICIO</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="../decoracion/decoracion.php" id="navbarDecoracion" role="button">
                        DECORACIÓN
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDecoracion">
                        <a class="dropdown-item" href="../decoracion/decoracion.php">Cortinas y Persianas</a>
                        <a class="dropdown-item" href="../decoracion/decoracion.php">Acabados</a>
                        <a class="dropdown-item" href="../decoracion/decoracion.php">Pisos</a>
                        <a class="dropdown-item" href="../decoracion/decoracion.php">Pinturas</a>
                        <a class="dropdown-item" href="../decoracion/decoracion.php">Mantelería</a>
                        <a class="dropdown-item" href="../decoracion/decoracion.php">Plantas</a>
                        <a class="dropdown-item" href="../decoracion/decoracion.php">Exterior</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="../tapiceria/tapiceria.php" id="navbarTapiceria" role="button">
                        TAPICERÍA
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarTapiceria">
                        <a class="dropdown-item" href="../tapiceria/tapiceria.php">Alfombras</a>
                        <a class="dropdown-item" href="../tapiceria/tapiceria.php">Vinilos</a>
                        <a class="dropdown-item" href="../tapiceria/tapiceria.php">Tapicería</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../promociones/promociones.php">PROMOCIONES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../nosotros/nosotros.php">NOSOTROS</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Footer Section -->
<footer class="footer">
    <div class="container">
        <div class="row justify-content-between align-items-center text-center">
            <div class="col-md-3 mb-3 mb-md-0">
                <img src="../assets/Logo.png" width="100" alt="Logo de RAMTO Decoración">
            </div>
            <div class="col-md-9">
                <div class="row justify-content-center">
                    <div class="col-md-4 mb-3">
                        <h5 class="font-weight-bold">Nuestra Empresa</h5>
                        <p>Somos una empresa comercializadora, diseñadora y productora de artículos de decoración, limpieza y recubrimiento de teflón para el cuidado de los tapices.</p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <h5 class="font-weight-bold">Dirección</h5>
                        <p>7 A. Pte. Nte. 646 Col. Centro, Colón 29000 Tuxtla Gutiérrez, Chiapas.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <hr class="bg-white">
                <p class="mb-0 text-center">Síguenos en:</p>
                <div class="text-center">
                    <a href="https://www.facebook.com" class="social-link"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="https://www.instagram.com" class="social-link"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="mailto:tucorreo@example.com" class="social-link"><i class="fas fa-envelope fa-2x"></i></a>
                    <a href="tel:+1234567890" class="social-link text-white"><i class="fas fa-phone fa-2x"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End of Footer Section -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>