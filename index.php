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
            background: #f5f5f5;
            padding-top: 56px;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 0 20px;
        }

        .bg-custom {
            background:linear-gradient(30deg, royalblue, red);
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
                    <li class="nav-item">
                        <a class="nav-link" href="#decoracion">DECORACIÓN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tapiceria">TAPICERÍA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#promociones">PROMOCIONES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nosotros/nosotros.php">NOSOTROS</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

      <!-- Page Header -->
  <header class="header">
    <div class="overlay">
        <img src="assets/Logo.png" alt="Logo" class="logo">
        <h1 class="subtitle">La mejor decoracion para tu HOGAR</h1>
        <h1 class="title">BIENVENIDO A REMTO DECORACION</h1> 
        <a class="btn btn-primary mt-3" href="#about">INICIO</a> 
    </div>      
</header>

<section class="container-category">
        <!-- Producto 1 -->
        <div class="card-category">
            <div class="container-img">
                <img src="assets/Plantas.jpg" alt="Plantas"/>
            </div>
            <div class="content-card-category">
                <h3>Plantas</h3>
                <a class="btn-view-more" href="./Plantas.html">Ver más..</a>
            </div>
        </div>

        <!-- Producto 2 -->
        <div class="card-category">
            <div class="container-img">
                <img src="assets/Cortinas.jpg" alt="Cortinas y Persianas"/>
            </div>
            <div class="content-card-category">
                <h3>Cortinas y Persianas</h3>
                <a class="btn-view-more" href="./Cortinas_y_persianas.html">Ver más..</a>
            </div>
        </div>

        <!-- Producto 3 -->
        <div class="card-category">
            <div class="container-img">
                <img src="assets/Alfombras.jpg" alt="Alfombras"/>
            </div>
            <div class="content-card-category">
                <h3>Alfombras</h3>
                <a class="btn-view-more" href="./Alfombras.html">Ver más..</a>
            </div>
        </div>

        <!-- Producto 4 -->
        <div class="card-category">
            <div class="container-img">
                <img src="assets/Exterior.jpg" alt="Exterior"/>
            </div>
            <div class="content-card-category">
                <h3>Exterior</h3>
                <a class="btn-view-more" href="./Exterior.html">Ver más..</a>
            </div>
        </div>
    </section>

    <section class="container products">
    <h2 class="heading-1">Productos</h2>
    <div class="container-products">
        <div class="card-product">
            <div class="container1-img">
                <img src="assets/Alfombras2.jpg" alt="" />
            </div>
            <div class="content-product">
                <h3>Cortinas prega inglesa</h3>
            </div>
        </div>
        <div class="card-product">
            <div class="container1-img">
                <img src="assets/Alfombras2.jpg" alt="" />
            </div>
            <div class="content-product">
                <h3>Persinas enrollables de cinta</h3>
            </div>
        </div>
        <div class="card-product">
            <div class="container1-img">
                <img src="assets/Alfombras2.jpg" alt="" />
            </div>
            <div class="content-product">
                <h3>Patas decorativas</h3>
            </div>
        </div>
        <div class="card-product">
            <div class="container1-img">
                <img src="assets/Alfombras2.jpg" alt="" />
            </div>
            <div class="content-product">
                <h3>Tapiceria</h3>
            </div>
        </div>
        <div class="card-product">
            <div class="container1-img">
                <img src="assets/Alfombras2.jpg" alt="" />
            </div>
            <div class="content-product">
                <h3>Tapete</h3>
            </div>
        </div>
        <div class="card-product">
            <div class="container1-img">
                <img src="assets/Alfombras2.jpg" alt="" />
            </div>
            <div class="content-product">
                <h3>Pisos Antiderrantes</h3>
            </div>
        </div>
        <div class="card-product">
            <div class="container1-img">
                <img src="assets/Alfombras2.jpg" alt="" />
            </div>
            <div class="content-product">
                <h3>Captus</h3>
            </div>
        </div>
        <div class="card-product">
            <div class="container1-img">
                <img src="assets/Alfombras2.jpg" alt="" />
            </div>
            <div class="content-product">
                <h3>Cortinas Presillas</h3>
            </div>
        </div>
        <div class="card-product">
            <div class="container1-img">
                <img src="assets/Alfombras2.jpg" alt="" />
            </div>
            <div class="content-product">
                <h3>Pisos Antiderrantes</h3>
            </div>
        </div>
        <div class="card-product">
            <div class="container1-img">
                <img src="assets/Alfombras2.jpg" alt="" />
            </div>
            <div class="content-product">
                <h3>Persianas lisas</h3>
            </div>
        </div>
    </div>
</section>

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
</footer>
<!-- End of Footer Section -->



</body>
</html>