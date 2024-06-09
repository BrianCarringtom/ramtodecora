<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="RAMTO Decoración - Soluciones en decoración y tapicería.">
    <meta name="author" content="Devcrud">
    <title>Tapiceria</title>
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
        
        /* Estilos para el carrusel */
        #carrusel {
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: black; /* Cambia el color de las flechas */
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
            text-align: center;
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

        .search-bar {
            width: 50%;
            margin: 20px auto;
            text-align: center;
        }

        .search-bar input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
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
                        <a class="dropdown-item" href="cortinasypercianas.php">Cortinas y Persianas</a>
                        <a class="dropdown-item" href="acabados.php">Acabados</a>
                        <a class="dropdown-item" href="pisos.php">Pisos</a>
                        <a class="dropdown-item" href="pinturas.php">Pinturas</a>
                        <a class="dropdown-item" href="mantelerias.php">Manteleria</a>
                        <a class="dropdown-item" href="plantas.php">Plantas</a>
                        <a class="dropdown-item" href="exterior.php">Exterior</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="../tapiceria/tapiceria.php" id="navbarTapiceria" role="button">
                            TAPICERÍA
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarTapiceria">
                            <a class="dropdown-item" href="../tapiceria/alfombras.php">Alfombras</a>
                            <a class="dropdown-item" href="../tapiceria/viniles.php">Viniles</a>
                            <a class="dropdown-item" href="../tapiceria/tapiceria.php">Tapiceria</a>
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

    <!-- Carrusel de Imágenes -->
    <div id="carrusel" class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="fondo1.jpg" class="d-block w-50 mx-auto" alt="Imagen 1">
                </div>
                <div class="carousel-item">
                    <img src="fondo1.jpg" class="d-block w-50 mx-auto" alt="Imagen 2">
                </div>
                <div class="carousel-item">
                    <img src="fondo1.jpg" class="d-block w-50 mx-auto" alt="Imagen 3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>
    <!-- Fin del Carrusel de Imágenes -->

    <section class="container products">
        <h2 class="heading-1 text-center">Productos</h2>
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Buscar productos...">
        </div>
        <div class="container-products" id="productContainer">
            <div class="card-product">
                <div class="container1-img">
                    <img src="../assets/Alfombras2.jpg" alt="Cortinas prega inglesa" />
                </div>
                <div class="content-product">
                    <h3>Cortinas prega inglesa</h3>
                </div>
            </div>
            <div class="card-product">
                <div class="container1-img">
                    <img src="../assets/Alfombras2.jpg" alt="Persinas enrollables de cinta" />
                </div>
                <div class="content-product">
                    <h3>Persinas enrollables de cinta</h3>
                </div>
            </div>
            <div class="card-product">
                <div class="container1-img">
                    <img src="../assets/Alfombras2.jpg" alt="Patas decorativas" />
                </div>
                <div class="content-product">
                    <h3>Patas decorativas</h3>
                </div>
            </div>
            <div class="card-product">
                <div class="container1-img">
                    <img src="../assets/Alfombras2.jpg" alt="Tapiceria" />
                </div>
                <div class="content-product">
                    <h3>Tapiceria</h3>
                </div>
            </div>
            <div class="card-product">
                <div class="container1-img">
                    <img src="../assets/Alfombras2.jpg" alt="Tapete" />
                </div>
                <div class="content-product">
                    <h3>Tapete</h3>
                </div>
            </div>
            <div class="card-product">
                <div class="container1-img">
                    <img src="../assets/Alfombras2.jpg" alt="Pisos Antiderrantes" />
                </div>
                <div class="content-product">
                    <h3>Pisos Antiderrantes</h3>
                </div>
            </div>
            <div class="card-product">
                <div class="container1-img">
                    <img src="../assets/Alfombras2.jpg" alt="Captus" />
                </div>
                <div class="content-product">
                    <h3>Captus</h3>
                </div>
            </div>
            <div class="card-product">
                <div class="container1-img">
                    <img src="../assets/Alfombras2.jpg" alt="Cortinas Presillas" />
                </div>
                <div class="content-product">
                    <h3>Cortinas Presillas</h3>
                </div>
            </div>
            <div class="card-product">
                <div class="container1-img">
                    <img src="../assets/Alfombras2.jpg" alt="Pisos Antiderrantes" />
                </div>
                <div class="content-product">
                    <h3>Pisos Antiderrantes</h3>
                </div>
            </div>
            <div class="card-product">
                <div class="container1-img">
                    <img src="../assets/Alfombras2.jpg" alt="Persianas lisas" />
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
            </div>
        </div>
    </footer>
    <!-- End of Footer Section -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('searchInput').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const products = document.querySelectorAll('.card-product');

            products.forEach(function(product) {
                const title = product.querySelector('h3').textContent.toLowerCase();
                if (title.includes(searchTerm)) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
