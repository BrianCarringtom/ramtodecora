<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="RAMTO Decoración - Soluciones en decoración y tapicería.">
    <meta name="author" content="Devcrud">
    <title>Detalles de la Promoción</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            padding-top: 56px;
            background: white;
        }

        .navbar-brand img {
            max-height: 40px;
        }

        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
        }

        .navbar-nav .nav-link {
            color: #515ae1 !important;
            font-weight: bold;
        }

        .navbar-nav .nav-link:hover {
            color: white !important;
            border-radius: 20px;
            background-color: #515ae1;
            /* Cambia el color al pasar el cursor sobre el enlace */
        }

        .dropdown-item:hover {
            color: white !important;
            background-color: #515ae1;
        }

        /* Estilos para el botón de navegación en dispositivos móviles */
        @media (max-width: 991.98px) {
            .navbar-dark .navbar-toggler {
                background-color: rgba(0, 0, 0, 0.5);
                /* Fondo semi-transparente en modo oscuro */
            }

            .navbar-dark .navbar-toggler-icon {
                color: #515ae1;
                /* Color del ícono del botón */
            }
        }

        .section-title {
            margin-top: 60px;
            margin-bottom: 30px;
        }

        .detalle-promocion {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
            border-radius: 8px;
        }

        .detalle-promocion img {
            max-width: 100%;
            /* Hacer que la imagen ocupe el máximo ancho disponible */
            max-height: 300px;
            /* Limitar la altura máxima de la imagen */
            height: auto;
            /* Ajustar automáticamente la altura */
            display: block;
            margin: 20px auto;
            /* Centrar la imagen dentro del contenedor */
        }

        .detalle-promocion h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .price {
            margin: 0;
            font-size: 18px;
            display: flex;
            align-items: center;
        }

        .original-price {
            text-decoration: line-through;
            color: #999;
            margin-right: 10px;
        }

        .discounted-price {
            color: #e60000;
            font-weight: bold;
            margin-right: 10px;
        }

        .discount-percentage {
            background-color: #ffeb3b;
            color: #000;
            padding: 2px 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
            font-size: 14px;
        }

        .volver-btn {
            align-self: flex-start;
            padding: 10px 20px;
            background-color: #515ae1;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .volver-btn:hover {
            background-color: rgba(0, 86, 179, 0.7);
            color: #fff;
        }

        .footer {
            background-color: #515ae1;
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
        }

        .social-link i {
            margin-right: 5px;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="56">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top">
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

    <section class="detalle-promocion">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <h2 id="promo-title">Título de la Promoción</h2>
                    <p id="promo-description">Descripción de la Promoción</p>
                    <p class="price">
                        <span id="original-price" class="original-price"></span>
                        <span id="discounted-price" class="discounted-price"></span>
                        <span id="discount-percentage" class="discount-percentage"></span>
                    </p>
                    <p id="promo-validity">Fecha de validez</p>
                    <p class="current-date"></p>
                    <a href="promociones.php" class="volver-btn">Volver a las promociones</a>
                </div>
                <div class="col-md-6 order-md-1">
                    <img id="promo-image" src="" alt="Imagen de la Promoción" class="img-fluid">
                </div>
            </div>
        </div>
    </section>


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
                    <p class="text-center">© 2023 RAMTO Decoración. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Obtener parámetros de la URL
        const urlParams = new URLSearchParams(window.location.search);
        const promoId = urlParams.get('promoId');

        // Datos simulados de promociones
        const promociones = {
            1: {
                title: 'Descuento del 20% en Electrónica',
                image: '../assets/promo1.png',
                description: 'Aprovecha un 20% de descuento en todos los productos electrónicos. ¡No te lo pierdas!.',
                originalPrice: '$100.00',
                discountedPrice: '$75.00',
                discountPercentage: '25%',
                validity: 'Válido hasta el 30 de junio de 2024.'
            },
            2: {
                title: '2x1 en Ropa',
                image: '../assets/promo1.png',
                description: 'Compra una prenda y llévate otra gratis. ¡Renueva tu armario hoy mismo!.',
                originalPrice: '$200.00',
                discountedPrice: '$150.00',
                discountPercentage: '25%',
                validity: 'Válido hasta el 30 de junio de 2024.'
            },
            3: {
                title: 'Envío Gratis en Compras Mayores a $50',
                image: '../assets/promo1.png',
                description: 'Obtén envío gratis en todas tus compras superiores a $50. ¡Aprovecha ya.',
                originalPrice: '$500.00',
                discountedPrice: '$250.00',
                discountPercentage: '50%',
                validity: 'Válido hasta el 30 de junio de 2024.'
            },
            // Agregar más promociones según sea necesario
        };

        // Mostrar la promoción correspondiente
        if (promociones[promoId]) {
            const promo = promociones[promoId];
            document.getElementById('promo-title').innerText = promo.title;
            document.getElementById('promo-image').src = promo.image;
            document.getElementById('promo-description').innerText = promo.description;
            document.getElementById('original-price').innerText = promo.originalPrice;
            document.getElementById('discounted-price').innerText = promo.discountedPrice;
            document.getElementById('discount-percentage').innerText = promo.discountPercentage;
            document.getElementById('promo-validity').innerText = promo.validity;
        } else {
            document.getElementById('promo-title').innerText = 'Promoción no encontrada';
        }

        // Función para mostrar la fecha actual
        function mostrarFechaActual() {
            const currentDate = new Date();
            const options = {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            const formattedDate = currentDate.toLocaleDateString('es-ES', options);
            document.querySelector('.current-date').innerText = `Fecha actual: ${formattedDate}`;
        }

        // Mostrar la fecha actual
        mostrarFechaActual();
    </script>
</body>

</html>