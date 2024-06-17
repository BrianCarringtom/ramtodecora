<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="RAMTO Decoración - Soluciones en decoración y tapicería.">
    <meta name="author" content="Devcrud">
    <title>RAMTO DECORACION</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        /* Estilos Generales */
        body {
            background: radial-gradient(circle, #ffffff, #00008B);
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 0 20px;
        }

        .bg-custom {
            background: linear-gradient(30deg, royalblue, red);
        }

        /* Estilos de Navegación */
        .nav-first {
            background-color: rgba(0, 0, 0, 0.7);
            /* Fondo semi-transparente */
            padding: 10px 0;
        }

        .nav-second {
            background-color: rgba(0, 0, 0, 0.9);
            /* Fondo más oscuro */
        }

        .navbar-brand img {
            max-height: 40px;
        }

        .navbar-nav .nav-link {
            color: white !important;
        }

        .navbar-nav .nav-link:hover {
            color: red !important;
            /* Cambia el color al pasar el cursor sobre el enlace */
        }

        .dropdown-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
            /* Cambia el color de fondo al pasar el cursor sobre el elemento */
            color: red !important;
            /* Cambia el color del texto al pasar el cursor sobre el elemento */
        }

        /* Ajustar el CSS para el carrusel */
        .header {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            overflow: hidden;
            /* Oculta cualquier contenido desbordado */
        }

        .carousel-item {
            height: 100vh;
            width: 100vw;
            background-size: cover;
            background-position: center;
        }

        .carousel-item img {
            height: 100vh;
            object-fit: cover;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .logo {
            max-width: 200px;
            margin-bottom: 20px;
        }

        .title {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .subtitle {
            font-size: 24px;
            margin-bottom: 30px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 18px;
            border-radius: 5px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        /* Estilos de Secciones */
        .section-title {
            margin-top: 60px;
            margin-bottom: 30px;
        }

        .section-content {
            margin-bottom: 60px;
        }

        /* Estilos de Productos */
        .container-products {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
            margin: 50px;
        }

        @media (max-width: 1200px) {
            .container-products {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 900px) {
            .container-products {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .container-products {
                grid-template-columns: 1fr;
            }
        }

        .products {
            display: flex;
            flex-direction: column;
            gap: 4rem;
            padding-top: 60px;

        }

        .card-product {
            width: 14rem;
            height: 11rem;
            justify-self: center;
            align-items: center;
            display: flex;
            flex-direction: column;
            background: #fff;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            /* Animación de transición en la propiedad transform */
        }

        .card-product:hover {
            transform: translateY(-5px);
            /* Aplicar una ligera elevación al pasar el cursor sobre el elemento */
        }

        .card-product .container1-img {
            border: 1px solid #c7b3b3;
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 100%;
        }

        .card-product .container1-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top;
        }

        .content-product h3 {
            padding: 0.1rem;
            font-size: 0.9rem;
            color: var(--dark-color);
            font-weight: 300;
        }

        .container-category {
            display: flex;
            flex-wrap: wrap;
            gap: 100px;
            justify-content: center;
        }

        .card-category {
            background: #fff;
            border-radius: 0 25px 25px 25px;
            /* Establece el radio de borde para cada esquina */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 200px;
            text-align: center;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 20px;
            margin-top: 100px;
        }

        .card-category:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .container-img img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 0% 0% 150% 0%;
            transition: transform 0.3s;
        }

        .card-category:hover .container-img img {
            transform: scale(1.05);
        }

        .content-card-category {
            padding: 1rem;
        }

        .content-card-category h3 {
            margin: 0 0 10px;
            font-size: 18px;
            color: #000000;
            font-weight: 400;
            /* Elimina la negrita */
        }

        .btn-view-more {
            display: inline-block;
            background: linear-gradient(90deg, rgba(93, 224, 201, 1) 0%, rgba(114, 202, 188, 1) 52%, rgba(20, 180, 145, 1) 100%);
            border: none;
            color: white;
            padding: 8px 30px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
            margin-top: 10px;
            transition: background 0.3s, transform 0.3s;
        }

        .btn-view-more:hover {
            background: #000000;
            transform: scale(1.1);
        }

        .heading-1 {
            text-align: center;
            font-weight: 500;
            font-size: 2rem;
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

        .text-right {
            text-align: right;
        }

        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
        }

        /* Estilos del ícono de WhatsApp */
        .whatsapp-icon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25d366;
            color: white;
            border-radius: 50%;
            padding: 15px;
            font-size: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .whatsapp-icon:hover {
            transform: scale(1.1);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .whatsapp-icon i {
            font-size: 24px;
        }

        /* Animación burbujeante */
        .whatsapp-icon.bounce {
            animation: bounce 2s infinite;
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .animated {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .animated-visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="56">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/Logo.png" alt="Logo de RAMTO Decoración">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">INICIO</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="decoracion/decoracion.php" id="navbarDecoracion" role="button">
                            DECORACIÓN
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDecoracion">
                            <a class="dropdown-item" href="decoracion/cortinasypercianas.php">Cortinas y Persianas</a>
                            <a class="dropdown-item" href="decoracion/acabados.php">Acabados</a>
                            <a class="dropdown-item" href="decoracion/pisos.php">Pisos</a>
                            <a class="dropdown-item" href="decoracion/pinturas.php">Pinturas</a>
                            <a class="dropdown-item" href="decoracion/mantelerias.php">Manteleria</a>
                            <a class="dropdown-item" href="decoracion/plantas.php">Plantas</a>
                            <a class="dropdown-item" href="decoracion/exterior.php">Exterior</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="tapiceria/tapiceria.php" id="navbarTapiceria" role="button">
                            TAPICERÍA
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarTapiceria">
                            <a class="dropdown-item" href="tapiceria/alfombras.php">Alfombras</a>
                            <a class="dropdown-item" href="tapiceria/viniles.php">Viniles</a>
                            <a class="dropdown-item" href="tapiceria/tapiceria.php">Tapiceria</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="promociones/promociones.php">PROMOCIONES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nosotros/nosotros.php">NOSOTROS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="carrito.php">
                            <i class="fas fa-shopping-cart"></i> CARRITO
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <header class="header">
        <div id="headerCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/fondo1.avif" class="d-block w-100" alt="Imagen 1">
                </div>
                <div class="carousel-item">
                    <img src="assets/fondo2.jpg" class="d-block w-100" alt="Imagen 2">
                </div>
                <div class="carousel-item">
                    <img src="assets/fondo4.avif" class="d-block w-100" alt="Imagen 3">
                </div>
            </div>
        </div>
        <div class="overlay">
            <img src="assets/Logo.png" alt="Logo" class="logo">
            <h1 class="subtitle">La mejor decoración para tu HOGAR</h1>
            <h1 class="title">BIENVENIDO A REMTO DECORACIÓN</h1>
            <a class="btn btn-primary mt-3" href="#about">INICIO</a>
        </div>
    </header>


    <section id="about" class="container-category">
        <!-- Producto 1 -->
        <div class="card-category animated">
            <div class="container-img">
                <img src="assets/Plantas.jpg" alt="Plantas" />
            </div>
            <div class="content-card-category">
                <h3>Plantas</h3>
                <a class="btn-view-more" href="decoracion/plantas.php">Ver más..</a>
            </div>
        </div>

        <!-- Producto 2 -->
        <div class="card-category animated">
            <div class="container-img">
                <img src="assets/Cortinas.jpg" alt="Cortinas y Persianas" />
            </div>
            <div class="content-card-category">
                <h3>Cortinas y Persianas</h3>
                <a class="btn-view-more" href="decoracion/cortinasypercianas.php">Ver más..</a>
            </div>
        </div>

        <!-- Producto 3 -->
        <div class="card-category animated">
            <div class="container-img">
                <img src="assets/Alfombras.jpg" alt="Alfombras" />
            </div>
            <div class="content-card-category">
                <h3>Alfombras</h3>
                <a class="btn-view-more" href="tapiceria/alfombras.php">Ver más..</a>
            </div>
        </div>

        <!-- Producto 4 -->
        <div class="card-category animated">
            <div class="container-img">
                <img src="assets/Exterior.jpg" alt="Exterior" />
            </div>
            <div class="content-card-category">
                <h3>Exterior</h3>
                <a class="btn-view-more" href="decoracion/exterior.php">Ver más..</a>
            </div>
        </div>
    </section>

    <section class="container products">
        <h2 class="heading-1" style="font-weight: bold;">Productos</h2>
        <div class="container-products">
            <div class="card-product animated">
                <div class="container1-img">
                    <img src="assets/Alfombras2.jpg" alt="" />
                </div>
                <div class="content-product">
                    <h3>Cortinas prega inglesa</h3>
                </div>
            </div>
            <div class="card-product animated">
                <div class="container1-img">
                    <img src="assets/Alfombras2.jpg" alt="" />
                </div>
                <div class="content-product">
                    <h3>Persinas enrollables de cinta</h3>
                </div>
            </div>
            <div class="card-product animated">
                <div class="container1-img">
                    <img src="assets/Alfombras2.jpg" alt="" />
                </div>
                <div class="content-product">
                    <h3>Patas decorativas</h3>
                </div>
            </div>
            <div class="card-product animated">
                <div class="container1-img">
                    <img src="assets/Alfombras2.jpg" alt="" />
                </div>
                <div class="content-product">
                    <h3>Tapiceria</h3>
                </div>
            </div>
            <div class="card-product animated">
                <div class="container1-img">
                    <img src="assets/Alfombras2.jpg" alt="" />
                </div>
                <div class="content-product">
                    <h3>Tapete</h3>
                </div>
            </div>
            <div class="card-product animated">
                <div class="container1-img">
                    <img src="assets/Alfombras2.jpg" alt="" />
                </div>
                <div class="content-product">
                    <h3>Pisos Antiderrantes</h3>
                </div>
            </div>
            <div class="card-product animated">
                <div class="container1-img">
                    <img src="assets/Alfombras2.jpg" alt="" />
                </div>
                <div class="content-product">
                    <h3>Captus</h3>
                </div>
            </div>
            <div class="card-product animated">
                <div class="container1-img">
                    <img src="assets/Alfombras2.jpg" alt="" />
                </div>
                <div class="content-product">
                    <h3>Cortinas Presillas</h3>
                </div>
            </div>
            <div class="card-product animated">
                <div class="container1-img">
                    <img src="assets/Alfombras2.jpg" alt="" />
                </div>
                <div class="content-product">
                    <h3>Pisos Antiderrantes</h3>
                </div>
            </div>
            <div class="card-product animated">
                <div class="container1-img">
                    <img src="assets/Alfombras2.jpg" alt="" />
                </div>
                <div class="content-product">
                    <h3>Persianas lisas</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Ícono de WhatsApp -->
    <a href="https://wa.me/529616138465" class="whatsapp-icon bounce" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>


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
                    <img src="assets/Logo.png" alt="Logo" class="logo mt-4">
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
        $(document).ready(function() {
            $('#headerCarousel').carousel({
                interval: 3000 // Cambia la imagen cada 3 segundos
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            let animatedElements = document.querySelectorAll(".animated");

            let observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("animated-visible");
                    }
                });
            });

            animatedElements.forEach(element => {
                observer.observe(element);
            });
        });
    </script>



</body>

</html>