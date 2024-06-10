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
            background: #f5f5f1;
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

        /* Estilo para los elementos de navegación */
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

        .promociones,
        .detalle-promocion {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .promociones h2,
        .detalle-promocion h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .promocion-card {
            display: flex;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .promocion-card img {
            width: 220px;
            height: auto;
            object-fit: cover;
        }

        .promocion-info {
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .promocion-info h3 {
            margin: 0 0 10px;
            color: #333;
        }

        .promocion-info p {
            margin: 0 0 20px;
            color: #777;
        }

        .promocion-info .price {
            margin: 0;
            font-size: 18px;
            display: flex;
            align-items: center;
        }

        .promocion-info .original-price {
            text-decoration: line-through;
            color: #999;
            margin-right: 10px;
        }

        .promocion-info .discounted-price {
            color: #e60000;
            font-weight: bold;
            margin-right: 10px;
        }

        .promocion-info .discount-percentage {
            background-color: #ffeb3b;
            color: #000;
            padding: 2px 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
            font-size: 14px;
        }

        .promocion-btn,
        .volver-btn {
            align-self: flex-start;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .promocion-btn:hover,
        .volver-btn:hover {
            background-color: #0056b3;
        }

        .detalle-promocion img {
            width: 100%;
            max-width: 600px;
            height: auto;
            display: block;
            margin: 20px auto;
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

    <section class="promociones">
        <h2>Promociones Especiales</h2>
        <div class="promocion-card" id="promo1">
        <img src="images/promo1.png" alt="Promoción 1" class="img-fluid">
            <div class="promocion-info">
                <h3>Descuento del 20% en Electrónica</h3>
                <p class="description">Aprovecha un 20% de descuento en todos los productos electrónicos. ¡No te lo pierdas!</p>
                <p class="price"><span class="original-price">$500</span> <span class="discounted-price">$400</span> <span class="discount-percentage">20%</span></p>
                <p class="current-date"></p>
                <a href="detalles.php" class="promocion-btn">Ver más</a>
            </div>
        </div>
        <div class="promocion-card" id="promo2">
        <img src="images/promo1.png" alt="Promoción 2" class="img-fluid">
            <div class="promocion-info">
                <h3>2x1 en Ropa</h3>
                <p class="description">Compra una prenda y llévate otra gratis. ¡Renueva tu armario hoy mismo!</p>
                <p class="price"><span class="original-price">$80</span> <span class="discounted-price">$40</span> <span class="discount-percentage">50%</span></p>
                <p class="current-date"></p>
                <a href="detalles.php?id=promo2" class="promocion-btn">Ver más</a>
            </div>
        </div>
        <div class="promocion-card" id="promo3">
        <img src="images/promo1.png" alt="Promoción 3" class="img-fluid">
            <div class="promocion-info">
                <h3>Envío Gratis en Compras Mayores a $50</h3>
                <p class="description">Obtén envío gratis en todas tus compras superiores a $50. ¡Aprovecha ya!</p>
                <p class="price"><span class="original-price">$60</span> <span class="discounted-price">$50</span> <span class="discount-percentage">16%</span></p>
                <p class="current-date"></p>
                <a href="detalles.php?id=promo3" class="promocion-btn">Ver más</a>
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
    <script>
            const urlParams = new URLSearchParams(window.location.search);
            const promoId = urlParams.get('id'); 

            if (promoId && promociones[promoId]) {
                const promo = promociones[promoId];
                const {
                    title,
                    image,
                    description,
                    originalPrice,
                    discountedPrice,
                    discountPercentage,
                    validity
                } = promo;

                if (window.location.pathname.includes("detalles.html")) {
                    document.getElementById("promo-title").textContent = title;
                    document.getElementById("promo-image").src = image;
                    document.getElementById("promo-description").textContent = description;
                    document.getElementById("original-price").textContent = originalPrice;
                    document.getElementById("discounted-price").textContent = discountedPrice;
                    document.getElementById("discount-percentage").textContent = discountPercentage;
                    document.getElementById("promo-validity").textContent = validity;
                } else {
                    const promoCard = document.getElementById(promoId);
                    promoCard.querySelector(".description").textContent = description;
                    promoCard.querySelector(".original-price").textContent = originalPrice;
                    promoCard.querySelector(".discounted-price").textContent = discountedPrice;
                    promoCard.querySelector(".discount-percentage").textContent = discountPercentage;
                }
            }

            const currentDateElements = document.querySelectorAll(".current-date");
            const currentDate = new Date().toLocaleDateString();
            currentDateElements.forEach(element => element.textContent = `Fecha actual: ${currentDate}`);
    </script>
</body>

</html>