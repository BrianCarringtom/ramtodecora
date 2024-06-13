<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="RAMTO Decoración - Soluciones en decoración y tapicería.">
    <meta name="author" content="Devcrud">
    <title>Nosotros</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            padding-top: 56px;
            background: linear-gradient(to bottom, #b3e0ff, #ffffff);
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

        /* Estilos del Footer */
        .footer,
        .py-4 {
            background-color: #343a40;
            /* Fondo oscuro */
            color: white;
            padding-top: 40px;
            padding-bottom: 20px;
        }

        .logo {
            max-width: 200px;
            margin-bottom: 20px;
        }

        .social-link {
            color: white;
            margin-right: 15px;
            text-decoration: none;
            margin-left: 20px;
            /* Add some spacing between links */
        }

        .social-link i {
            margin-right: 5px;
        }

        .navbar-nav:hover {
            background-color: #343a40;
            /* Color de fondo al hacer hover */
        }

        .navbar-nav .nav-item .nav-link {
            transition: color 0.3s;
        }

        .navbar-nav .nav-item .nav-link:hover {
            color: #FF0000;
            /* Color de texto al hacer hover */
        }

        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
            /* Cambia el color de fondo al pasar el cursor sobre el elemento */
            color: red !important;
            /* Cambia el color del texto al pasar el cursor sobre el elemento */
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
                            <a class="dropdown-item" href="../decoracion/cortinasypercianas.php">Cortinas y Persianas</a>
                            <a class="dropdown-item" href="../decoracion/acabados.php">Acabados</a>
                            <a class="dropdown-item" href="../decoracion/pisos.php">Pisos</a>
                            <a class="dropdown-item" href="../decoracion/pinturas.php">Pinturas</a>
                            <a class="dropdown-item" href="../decoracion/mantelerias.php">Mantelería</a>
                            <a class="dropdown-item" href="../decoracion/plantas.php">Plantas</a>
                            <a class="dropdown-item" href="../decoracion/exterior.php">Exterior</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="../tapiceria/tapiceria.php" id="navbarTapiceria" role="button">
                            TAPICERÍA
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarTapiceria">
                            <a class="dropdown-item" href="../tapiceria/alfombras.php">Alfombras</a>
                            <a class="dropdown-item" href="../tapiceria/viniles.php">Viniles</a>
                            <a class="dropdown-item" href="../tapiceria/tapiceria.php">Tapicería</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../promociones/promociones.php">PROMOCIONES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../nosotros/nosotros.php">NOSOTROS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../carrito.php">
                            <i class="fas fa-shopping-cart"></i> CARRITO
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Mission Section -->
    <section id="mision" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center section-title">
                    <h2><i class="fas fa-user"></i> Misión</h2>
                </div>
                <div class="col-md-12 section-content">
                    <p class="text-center">Te brindamos soluciones de decoración con nuestra amplia variedad de cortinas, telas decorativas, tapices, alfombras, tapetes y accesorios decorativos.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Mission Section -->

    <!-- Visión Section -->
    <section id="vision" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center section-title">
                    <h2><i class="fas fa-eye"></i> Visión</h2>
                </div>
                <div class="col-md-12 section-content">
                    <p class="text-center">Somos una empresa comercializadora, diseñadora y productora de artículos de decoración entre los que destacan textiles decorativos para uso interior y exterior. Contamos con un sistema integral de servicios que complementan nuestros productos, como la limpieza y el recubrimiento de teflón para el cuidado de los tapices.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Vision Section -->

    <!-- Horarios Section -->
    <section id="horarios" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center section-title">
                    <h2><i class="far fa-clock"></i> Horarios</h2>
                </div>
                <div class="col-md-12 section-content">
                    <p class="text-center"><strong>Lunes a Viernes:</strong> 8:30 - 14:00 y 16:00 - 19:00</p>
                    <p class="text-center"><strong>Sábados:</strong> 8:30 - 14:00</p>
                    <p class="text-center"><strong>Domingos:</strong> Cerrado</p>
                    <div id="reloj" class="text-center"></div> <!-- Aquí se mostrará el reloj -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of Horarios Section -->


    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4">
                    <h5>Contacto</h5>
                    <ul class="list-unstyled">
                        <li>Email: ramtosadecv@gmail.com</li>
                        <li>Tel: 961-613-8465</li>
                        <li>Dirección: 7 A. Pte. Nte. 646 Col. Centro, Colón 29000 Tuxtla Gutierrez, Chis.</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Redes Sociales</h5>
                    <a href="https://www.facebook.com/ramtodecora" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/ramtodecora/" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.twitter.com/ramtodecora/" class="social-link"><i class="fab fa-twitter"></i></a>
                    <img src="../assets/Logo.png" alt="Logo" class="logo mt-4">
                </div>
                <div class="col-md-4">
                    <h5>Descripcion</h5>
                    <p>Somos una empresa comercializadora, diseñadora y productora de artículos de decoración, limpieza y el recubrimiento de teflón para el cuidado de los tapices.</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <p class="m-0">&copy; 2023 RAMTO Decoración. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Función para obtener la fecha y hora actualizada
        function actualizarReloj() {
            var fechaHora = new Date();
            var horas = fechaHora.getHours();
            var minutos = fechaHora.getMinutes();
            var segundos = fechaHora.getSeconds();

            // Formateo para asegurar que siempre haya dos dígitos
            horas = (horas < 10) ? "0" + horas : horas;
            minutos = (minutos < 10) ? "0" + minutos : minutos;
            segundos = (segundos < 10) ? "0" + segundos : segundos;

            // Construir el string con la hora
            var horaActual = horas + ":" + minutos + ":" + segundos;

            // Actualizar el contenido del elemento con id "reloj"
            document.getElementById("reloj").innerHTML = "<strong>Fecha y Hora:</strong> " + fechaHora.toLocaleDateString() + " " + horaActual;

            // Llamar a esta función nuevamente cada segundo para actualizar el reloj
            setTimeout(actualizarReloj, 1000);
        }

        // Llamar a la función para que comience a actualizar el reloj
        actualizarReloj();
    </script>

</body>

</html>