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
            color: rgba(20, 180, 145, 1) !important;
            font-weight: bold;
        }


        .navbar-nav .nav-link:hover {
            color: white !important;
            border-radius: 20px;
            background: linear-gradient(90deg, rgba(93, 224, 201, 1) 0%, rgba(114, 202, 188, 1) 52%, rgba(20, 180, 145, 1) 100%);
        }

        .dropdown-item:hover {
            color: white !important;
            background: linear-gradient(90deg, rgba(93, 224, 201, 1) 0%, rgba(114, 202, 188, 1) 52%, rgba(20, 180, 145, 1) 100%);
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
            background-image: url('Fondopromo.avif');
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
            margin-bottom: 40px;
            display: flex;
            align-items: center;
        }

        .announcement-icon {
            font-size: 4rem;
            /* Ajusta el tamaño del ícono */
            margin-right: 20px;
            /* Espacio entre el ícono y el texto */
            color: rgba(0, 0, 0, 0.7);
            /* Color del ícono */
        }

        .text-content {
            text-align: left;
        }

        .title {
            font-size: 2.25rem;
            font-weight: bold;
            margin-bottom: 0;
        }

        .subtitle {
            font-size: 1.5rem;
            margin-top: 5px;
        }

        /* Media Queries para responsividad */
        @media (max-width: 1200px) {
            .title {
                font-size: 2rem;
            }

            .subtitle {
                font-size: 1.25rem;
            }
        }

        @media (max-width: 768px) {
            .title-subtitle {
                margin-bottom: 60px;
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
            }

            .title {
                font-size: 1.5rem;
            }

            .subtitle {
                font-size: 0.875rem;
            }
        }


        .section-title {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .container-products {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            /* Alineación centrada en pantallas grandes */
        }

        .card-product {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            width: 100%;
            max-width: 350px;
            /* Aumentado de 300px a 350px */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .card-product:hover {
            transform: translateY(-5px);
        }

        .container1-img {
            width: 100%;
            height: 300px;
            /* Ajusta la altura según tus necesidades */
            overflow: hidden;
        }

        .container1-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .content-product {
            padding: 15px;
        }

        .content-product h3 {
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .price {
            font-size: 1em;
            margin-bottom: 10px;
        }

        .original-price {
            text-decoration: line-through;
            color: #999;
        }

        .discounted-price {
            color: #e74c3c;
            font-weight: bold;
        }

        .discount-percentage {
            background: #27ae60;
            color: #fff;
            padding: 2px 5px;
            border-radius: 3px;
            font-size: 0.9em;
            margin-left: 10px;
        }

        .btn-comprar {
            background: linear-gradient(90deg, rgba(93, 224, 201, 1) 0%, rgba(114, 202, 188, 1) 52%, rgba(20, 180, 145, 1) 100%);
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-comprar:hover {
            background: linear-gradient(90deg, rgba(93, 224, 201, 1) 0%, rgba(114, 202, 188, 1) 52%, rgba(20, 180, 145, 1) 100%);
            color: #fff;
            transform: scale(1.1);
        }

        .validity-date {
            font-size: 0.9em;
            color: #555;
            margin-top: 10px;
        }

        /* Estilos del Footer */
        .footer,
        .py-4 {
            background: linear-gradient(90deg, rgba(93, 224, 201, 1) 0%, rgba(114, 202, 188, 1) 52%, rgba(20, 180, 145, 1) 100%);
            color: black;
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
            color: black;
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
                    <i class="fas fa-bullhorn announcement-icon"></i> <!-- Ícono de anuncio -->
                    <div class="text-content">
                        <h1 class="title">"Ofertas de Temporada: ¡No te las Pierdas!"</h1>
                        <h2 class="subtitle">"¡Aprovecha esta oferta única! Descuentos exclusivos"</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- Promociones Section -->
    <!-- Sección de Promociones -->
    <section class="container mt-5">
        <h2 class="section-title">PROMOCIONES ESPECIALES</h2>
        <div class="container-products">
            <!-- Promoción 1 -->
            <div class="card-product" data-name="Descuento del 20% en Electrónica" data-price="75.00" data-image="../assets/promo1.png">
                <div class="container1-img">
                    <img src="../assets/promo1.jpg" alt="Descuento del 20% en Electrónica">
                </div>
                <div class="content-product">
                    <h3>Descuento del 20% en Decoraciones</h3>
                    <p class="price">
                        <span class="original-price">$100.00</span>
                        <span class="discounted-price">$75.00</span>
                        <span class="discount-percentage">25%</span>
                    </p>
                    <p>Aprovecha un 25% de descuento en todos los productos domesticos. ¡No te lo pierdas!.</p>
                    <p class="validity-date">Válido hasta: 30/06/2024</p>
                    <button class="btn btn-comprar" onclick="addToCart('Descuento del 20% en Electrónica', 75.00, '../assets/promo1.png')">Comprar</button>
                </div>
            </div>
            <!-- Promoción 2 -->
            <div class="card-product" data-name="2x1 en Ropa" data-price="150.00" data-image="../assets/promo1.png">
                <div class="container1-img">
                    <img src="../assets/promo2.webp" alt="2x1 en Ropa">
                </div>
                <div class="content-product">
                    <h3>2x1 en Ropa</h3>
                    <p class="price">
                        <span class="original-price">$200.00</span>
                        <span class="discounted-price">$150.00</span>
                        <span class="discount-percentage">25%</span>
                    </p>
                    <p>Compra una prenda y llévate otra gratis. ¡Renueva tu armario hoy mismo!.</p>
                    <p class="validity-date">Válido hasta: 30/06/2024</p>
                    <button class="btn btn-comprar" onclick="addToCart('2x1 en Ropa', 150.00, '../assets/promo1.png')">Comprar</button>
                </div>
            </div>
            <!-- Promoción 3 -->
            <div class="card-product" data-name="Envío Gratis en Compras Mayores a $50" data-price="250.00" data-image="../assets/promo1.png">
                <div class="container1-img">
                    <img src="../assets/pormo3.jpg" alt="Envío Gratis en Compras Mayores a $50">
                </div>
                <div class="content-product">
                    <h3>Envío Gratis en Compras Mayores a $50</h3>
                    <p class="price">
                        <span class="original-price">$500.00</span>
                        <span class="discounted-price">$250.00</span>
                        <span class="discount-percentage">50%</span>
                    </p>
                    <p>Obtén envío gratis en todas tus compras superiores a $50. ¡Aprovecha ya!.</p>
                    <p class="validity-date">Válido hasta: 30/06/2024</p>
                    <button class="btn btn-comprar" onclick="addToCart('Envío Gratis en Compras Mayores a $50', 250.00, '../assets/promo1.png')">Comprar</button>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            renderCartItems();
        });

        function showAddedToCartMessage() {
            const message = document.createElement('div');
            message.textContent = 'Producto agregado al carrito';
            message.style.position = 'fixed';
            message.style.left = '50%';
            message.style.top = '50%';
            message.style.transform = 'translate(-50%, -50%)';
            message.style.background = 'linear-gradient(90deg, rgba(93, 224, 201, 1) 0%, rgba(114, 202, 188, 1) 52%, rgba(20, 180, 145, 1) 100%)';
            message.style.color = '#fff';
            message.style.padding = '10px 20px';
            message.style.borderRadius = '5px';
            message.style.boxShadow = '0 0 10px rgba(0, 0, 0, 0.1)';
            message.style.zIndex = '1000';
            message.style.textAlign = 'center';
            message.style.fontSize = '16px';

            document.body.appendChild(message);

            setTimeout(() => {
                message.remove();
            }, 1000);
        }

        function addToCart(productName, price) {
            const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
            let existingItem = cartItems.find(item => item.name === productName);

            const productImage = document.querySelector(`.card-product[data-name="${productName}"] img`).src;

            if (existingItem) {
                existingItem.quantity++;
                existingItem.totalPrice += price;
            } else {
                existingItem = {
                    name: productName,
                    price: price,
                    quantity: 1,
                    totalPrice: price,
                    image: productImage
                };
                cartItems.push(existingItem);
            }

            localStorage.setItem('cartItems', JSON.stringify(cartItems));
            renderCartItems();
            showAddedToCartMessage(); // Llama a la función para mostrar el mensaje
        }

        function renderCartItems() {
            const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
            const cartItemsContainer = document.getElementById('cart-items');
            if (cartItemsContainer) {
                cartItemsContainer.innerHTML = '';

                cartItems.forEach(function(item) {
                    const row = document.createElement('tr');
                    row.classList.add('cart-item');

                    ['name', 'price', 'quantity', 'totalPrice'].forEach(property => {
                        const cell = document.createElement('td');
                        if (property === 'price' || property === 'totalPrice') {
                            cell.textContent = '$' + item[property].toFixed(2);
                        } else {
                            cell.textContent = item[property];
                        }
                        row.appendChild(cell);
                    });

                    const actionsCell = document.createElement('td');
                    const incrementButton = createButton('+', 'btn-success', function() {
                        addToCart(item.name, item.price);
                    });

                    const decrementButton = createButton('-', 'btn-warning', function() {
                        removeFromCart(item.name, item.price);
                    });

                    actionsCell.appendChild(incrementButton);
                    actionsCell.appendChild(decrementButton);
                    row.appendChild(actionsCell);

                    cartItemsContainer.appendChild(row);
                });

                updateCartTotal(cartItems);
            }
        }

        function createButton(text, className, onClick) {
            const button = document.createElement('button');
            button.textContent = text;
            button.classList.add('btn', 'btn-sm', className);
            button.addEventListener('click', onClick);
            return button;
        }

        function removeFromCart(productName, price) {
            const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
            const existingItemIndex = cartItems.findIndex(item => item.name === productName);

            if (existingItemIndex !== -1) {
                const existingItem = cartItems[existingItemIndex];
                if (existingItem.quantity > 1) {
                    existingItem.quantity--;
                    existingItem.totalPrice -= price;
                } else {
                    cartItems.splice(existingItemIndex, 1);
                }
            }

            localStorage.setItem('cartItems', JSON.stringify(cartItems));
            renderCartItems();
        }

        function updateCartTotal(cartItems) {
            let totalPrice = 0;
            cartItems.forEach(function(item) {
                totalPrice += item.totalPrice;
            });

            document.getElementById('cart-total').innerText = totalPrice.toFixed(2);
        }

        document.addEventListener('DOMContentLoaded', function() {
            updateCart();
            renderCartItems();
        });

        document.getElementById('searchInput').addEventListener('input', function() {
            const searchTerm = this.value.trim().toLowerCase();
            const products = document.querySelectorAll('.card-product');

            products.forEach(function(product) {
                const title = product.querySelector('h3').textContent.trim().toLowerCase();
                if (title.includes(searchTerm)) {
                    product.classList.remove('filtered-out'); // Mostrar producto que coincide
                } else {
                    product.classList.add('filtered-out'); // Ocultar producto que no coincide
                }
            });

            // Recalcular el conteo de productos visibles
            updateProductCount();
        });

        function updateProductCount() {
            const visibleProducts = document.querySelectorAll('.card-product:not(.filtered-out)');
            const countElement = document.getElementById('product-count');
            countElement.textContent = `Productos encontrados: ${visibleProducts.length}`;
        }


        document.getElementById('sortOptions').addEventListener('change', function() {
            const sortBy = this.value;
            const products = Array.from(document.querySelectorAll('.card-product'));

            if (sortBy === 'price') {
                products.sort((a, b) => parseFloat(a.dataset.price) - parseFloat(b.dataset.price));
            } else if (sortBy === 'name') {
                products.sort((a, b) => a.dataset.name.localeCompare(b.dataset.name));
            }

            const container = document.querySelector('.container-products');
            container.innerHTML = '';
            products.forEach(product => container.appendChild(product));
        });

        function filterProducts(query) {
            const products = document.querySelectorAll('.card-product');
            products.forEach(product => {
                const title = product.querySelector('h3').innerText.toLowerCase();
                if (title.includes(query.toLowerCase())) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Obtener el contenedor de productos
            const container = document.querySelector('.container-products');
            // Obtener la lista de productos
            const products = container.querySelectorAll('.card-product');
            // Obtener el elemento donde se mostrará el conteo
            const countElement = document.getElementById('product-count');

            // Mostrar el número de productos encontrados
            countElement.textContent = `Productos encontrados: ${products.length}`;
        });
    </script>


</body>

</html>