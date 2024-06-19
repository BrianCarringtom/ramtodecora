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

        .header {
            position: relative;
            height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: black;
            text-align: center;
            overflow: hidden;
            background-image: url('Fondopromo.jpg');
            background-size: cover;
            background-position: center;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-bottom-left-radius: 40px;
            border-bottom-right-radius: 40px;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
        }

        .header-content {
            display: flex;
            justify-content: flex-end;
            width: 100%;
            max-width: 1200px;
        }

        .title-subtitle {
            text-align: right;
            margin-bottom: 80px;
        }

        .title {
            font-size: 2.25rem;
            /* 36px */
            font-weight: bold;
            margin-bottom: 0;
        }

        .subtitle {
            font-size: 1.5rem;
            /* 24px */
            margin-top: 5px;
        }

        /* Media Queries para responsividad */
        @media (max-width: 1200px) {
            .title {
                font-size: 2rem;
                /* Ajusta el tamaño para pantallas más pequeñas */
            }

            .subtitle {
                font-size: 1.25rem;
            }
        }

        @media (max-width: 768px) {
            .title-subtitle {
                margin-bottom: 60px;
                /* Ajusta el margen para pantallas medianas */
            }

            .title {
                font-size: 1.75rem;
            }

            .subtitle {
                font-size: 1rem;
            }
        }

        @media (max-width: 480px) {
            .title-subtitle {
                margin-bottom: 40px;
                /* Ajusta el margen para pantallas pequeñas */
            }

            .title {
                font-size: 1.5rem;
            }

            .subtitle {
                font-size: 0.875rem;
                /* 14px */
            }
        }


        .section-title {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .promocion {
            border: 1px solid #000;
            /* Borde negro */
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
            /* Sombra */
            transition: all 0.3s ease;
            height: 100%;
        }

        .promocion:hover {
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .promocion img {
            width: 100%;
            height: auto;
        }

        .promocion h3 {
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .promocion p {
            margin-bottom: 10px;
        }

        .promocion .price {
            font-size: 18px;
        }

        .original-price {
            text-decoration: line-through;
            color: #999;
        }

        .discounted-price {
            color: #e60000;
            font-weight: bold;
            margin-left: 10px;
        }

        .ver-mas-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #515ae1;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .ver-mas-btn:hover {
            color: #fff;
            transition: background-color 0.3s ease;
            background-color: rgba(81, 90, 225, 1);
        }

        /* Estilos del Footer */
        .footer,
        .py-4 {
            background-color: #515ae1;
            /* Fondo oscuro */
            color: white;
            padding-top: 40px;
            padding-bottom: 20px;
            margin-top: 40px;
            /* Ajuste para separar del contenido anterior */
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
                            <a class="dropdown-item" href="../decoracion/cortinasypercianas.php">Cortinas y
                                Persianas</a>
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

    <header class="header">
        <div class="overlay">
            <div class="header-content">
                <div class="title-subtitle">
                    <h1 class="title">"Ofertas de Temporada: ¡No te las Pierdas!"</h1>
                    <h2 class="subtitle">"¡Aprovecha esta oferta única! Descuentos exclusivos"</h2>
                </div>
            </div>
        </div>
    </header>

    <!-- Promociones Section -->
    <section class="container mt-5">
        <h2 class="section-title">PROMOCIONES ESPECIALES</h2>
        <div class="row">
            <!-- Promoción 1 -->
            <div class="col-md-4">
                <div class="promocion">
                    <img src="../assets/promo1.png" alt="Promoción 1">
                    <h3>Descuento del 20% en Electrónica</h3>
                    <p class="price"><span class="original-price">$100.00</span>
                        <span class="discounted-price">$75.00</span>
                        <span class="discount-percentage">25%</span>
                    </p>
                    <p>Aprovecha un 20% de descuento en todos los productos electrónicos. ¡No te lo pierdas!.</p>
                    <a href="detalles.php?promoId=1" class="ver-mas-btn">Ver más</a>
                </div>
            </div>
            <!-- Promoción 2 -->
            <div class="col-md-4">
                <div class="promocion">
                    <img src="../assets/promo1.png" alt="Promoción 2">
                    <h3>2x1 en Ropa</h3>
                    <p class="price"><span class="original-price">$200.00</span>
                        <span class="discounted-price">$150.00</span>
                        <span class="discount-percentage">25%</span>
                    </p>
                    <p>Compra una prenda y llévate otra gratis. ¡Renueva tu armario hoy mismo!.</p>
                    <a href="detalles.php?promoId=2" class="ver-mas-btn">Ver más</a>
                </div>
            </div>
            <!-- Promoción 3 -->
            <div class="col-md-4">
                <div class="promocion">
                    <img src="../assets/promo1.png" alt="Promoción 3">
                    <h3>Envío Gratis en Compras Mayores a $50</h3>
                    <p class="price"><span class="original-price">$500.00</span>
                        <span class="discounted-price">$250.00</span>
                        <span class="discount-percentage">50%</span>
                    </p>
                    <p>Obtén envío gratis en todas tus compras superiores a $50. ¡Aprovecha ya!.</p>
                    <a href="detalles.php?promoId=3" class="ver-mas-btn">Ver más</a>
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
                    <p class="m-0">&copy; 2023 RAMTO Decoración. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>