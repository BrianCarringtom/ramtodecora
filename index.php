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
            font-family: 'Roboto', Arial, sans-serif;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
            background: #f5f5f1;
            padding-top: 56px;
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
            background-color: rgba(0, 0, 0, 0.7); /* Fondo semi-transparente */
            padding: 10px 0;
        }

        .nav-second {
            background-color: rgba(0, 0, 0, 0.9); /* Fondo más oscuro */
        }

        .navbar-brand img {
            max-height: 40px;
        }

        .navbar-nav .nav-link {
            color: white !important;
        }

        .navbar-nav .nav-link:hover {
            color: red !important; /* Cambia el color al pasar el cursor sobre el enlace */
        }

        .dropdown-item:hover {
            background-color: rgba(255, 255, 255, 0.1); /* Cambia el color de fondo al pasar el cursor sobre el elemento */
            color: red !important; /* Cambia el color del texto al pasar el cursor sobre el elemento */
        }

        /* Estilos de Header */
        .header {
            position: relative;
            height: 100vh;
            background: url('assets/fondo1.jpg') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Fondo semi-transparente */
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
            transition: transform 0.3s ease; /* Animación de transición en la propiedad transform */
        }

        .card-product:hover {
            transform: translateY(-5px); /* Aplicar una ligera elevación al pasar el cursor sobre el elemento */
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
            border-radius: 0 25px 25px 25px; /* Establece el radio de borde para cada esquina */
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
            font-weight: 400; /* Elimina la negrita */
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
        .footer, .py-4 {
            background-color: #343a40; /* Fondo oscuro */
            color: white;
            padding-top: 40px;
            padding-bottom: 20px;
        }

        .social-link {
            color: white;
            margin-right: 15px;
            text-decoration: none;
            margin-left: 20px; /* Add some spacing between links */
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
    </style>
    
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="56">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="assets/ramto2.png" alt="Logo de RAMTO">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#quienes-somos">Quienes Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#servicios">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#productos">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#catalogo">Catálogo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contacto">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#footer">Síguenos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Más
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#testimonios">Testimonios</a>
                        <a class="dropdown-item" href="#blog">Blog</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header Section -->
<header class="header">
    <div class="overlay">
        <img src="assets/ramto2.png" alt="Logo de RAMTO Decoración" class="logo">
        <h1 class="title">RAMTO DECORACION</h1>
        <p class="subtitle">Soluciones en decoración y tapicería</p>
        <a href="#productos" class="btn-primary">Ver productos</a>
    </div>
</header>

<!-- Sección de Quiénes Somos -->
<section id="quienes-somos" class="container section-content">
    <h2 class="section-title">Quiénes Somos</h2>
    <p>RAMTO Decoración es una empresa dedicada a ofrecer las mejores soluciones en decoración y tapicería...</p>
</section>

<!-- Sección de Servicios -->
<section id="servicios" class="container section-content">
    <h2 class="section-title">Servicios</h2>
    <p>Ofrecemos una amplia gama de servicios para decorar y renovar tus espacios...</p>
</section>

<!-- Sección de Productos -->
<section id="productos" class="container section-content">
    <h2 class="section-title">Nuestros Productos</h2>
    <div class="container-products">
        <div class="card-product">
            <div class="container1-img">
                <img src="assets/producto1.jpg" alt="Producto 1">
            </div>
            <div class="content-product">
                <h3>Producto 1</h3>
            </div>
        </div>
        <div class="card-product">
            <div class="container1-img">
                <img src="assets/producto2.jpg" alt="Producto 2">
            </div>
            <div class="content-product">
                <h3>Producto 2</h3>
            </div>
        </div>
        <div class="card-product">
            <div class="container1-img">
                <img src="assets/producto3.jpg" alt="Producto 3">
            </div>
            <div class="content-product">
                <h3>Producto 3</h3>
            </div>
        </div>
        <div class="card-product">
            <div class="container1-img">
                <img src="assets/producto4.jpg" alt="Producto 4">
            </div>
            <div class="content-product">
                <h3>Producto 4</h3>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Catálogo -->
<section id="catalogo" class="container section-content">
    <h2 class="section-title">Catálogo</h2>
    <div class="container-category">
        <div class="card-category">
            <div class="container-img">
                <img src="assets/catalogo1.jpg" alt="Categoría 1">
            </div>
            <div class="content-card-category">
                <h3>Categoría 1</h3>
                <a href="#" class="btn-view-more">Ver más</a>
            </div>
        </div>
        <div class="card-category">
            <div class="container-img">
                <img src="assets/catalogo2.jpg" alt="Categoría 2">
            </div>
            <div class="content-card-category">
                <h3>Categoría 2</h3>
                <a href="#" class="btn-view-more">Ver más</a>
            </div>
        </div>
        <div class="card-category">
            <div class="container-img">
                <img src="assets/catalogo3.jpg" alt="Categoría 3">
            </div>
            <div class="content-card-category">
                <h3>Categoría 3</h3>
                <a href="#" class="btn-view-more">Ver más</a>
            </div>
        </div>
        <div class="card-category">
            <div class="container-img">
                <img src="assets/catalogo4.jpg" alt="Categoría 4">
            </div>
            <div class="content-card-category">
                <h3>Categoría 4</h3>
                <a href="#" class="btn-view-more">Ver más</a>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Contacto -->
<section id="contacto" class="container section-content">
    <h2 class="section-title">Contacto</h2>
    <p>Puedes ponerte en contacto con nosotros a través de...</p>
</section>

<!-- Footer -->
<footer id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4>Sobre Nosotros</h4>
                <p>RAMTO Decoración es una empresa líder en soluciones de decoración y tapicería...</p>
            </div>
            <div class="col-md-4">
                <h4>Enlaces Rápidos</h4>
                <ul>
                    <li><a href="#quienes-somos">Quiénes Somos</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#productos">Productos</a></li>
                    <li><a href="#catalogo">Catálogo</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </div>
            <div class="col-md-4 text-right">
                <h4>Síguenos</h4>
                <a href="#" class="social-link"><i class="fab fa-facebook-f"></i>Facebook</a>
                <a href="#" class="social-link"><i class="fab fa-twitter"></i>Twitter</a>
                <a href="#" class="social-link"><i class="fab fa-instagram"></i>Instagram</a>
                <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i>LinkedIn</a>
            </div>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
