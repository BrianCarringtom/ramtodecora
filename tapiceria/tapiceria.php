<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="RAMTO Decoración - Soluciones en decoración y tapicería.">
    <meta name="author" content="Devcrud">
    <title>TAPICERIA</title>
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
            /* Ajusta este color al que mejor se vea */
        }


        .navbar-nav .nav-link:hover {
            color: white !important;
            border-radius: 20px;
            background: linear-gradient(90deg, rgba(93, 224, 201, 1) 0%, rgba(114, 202, 188, 1) 52%, rgba(20, 180, 145, 1) 100%);
            ;
            /* Cambia el color al pasar el cursor sobre el enlace */
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

        .section-title {
            margin-top: 60px;
            margin-bottom: 30px;
        }

        .section-content {
            margin-bottom: 60px;
        }

        .btn-comprar:hover {
            background-color: #218838;
            color: #ffffff;
        }

        /* Estilos del Footer */
        .footer,
        .py-4 {
            background: linear-gradient(90deg, rgba(93, 224, 201, 1) 0%, rgba(114, 202, 188, 1) 52%, rgba(20, 180, 145, 1) 100%);
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

        .carrusel-titulo {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            /* Cambia el color del texto según sea necesario */
            z-index: 1;
            background-color: rgba(0, 0, 0, 0.5);
            /* Fondo semitransparente para mejorar la legibilidad */
            padding: 10px 20px;
            border-radius: 10px;
        }

        /* Ajustes para el carrusel */
        #carrusel {
            margin-top: 20px;
            margin-bottom: 20px;
            max-height: 200px;
            /* Reducimos la altura máxima del carrusel */
            overflow: hidden;
            /* Ocultamos el contenido que exceda la altura máxima */
        }

        #carouselExampleControls .carousel-item img {
            max-height: 200px;
            /* Ajustamos la altura máxima de las imágenes del carrusel */
            width: auto;
            /* Permitimos que el ancho se ajuste automáticamente */
        }

        /* Si deseas ajustar el ancho del carrusel en dispositivos más pequeños, puedes agregar media queries aquí */

        @media (max-width: 768px) {
            #carrusel {
                max-height: 300px;
                /* Reducción de la altura en dispositivos más pequeños si es necesario */
            }
        }


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
            width: 16rem;
            height: 20rem;
            justify-self: center;
            align-items: center;
            display: flex;
            flex-direction: column;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 30px;
        }

        .card-product:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .card-product .container1-img {
            border: 1px solid #c7b3b3;
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 60%;
            border-radius: 20px 20px 0 0;
        }

        .card-product .container1-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top;
        }

        .card-product.filtered-out {
            display: none;
        }

        .content-product {
            padding: 10px;
            width: 100%;
            text-align: center;
        }

        .content-product h3 {
            font-size: 1rem;
            color: var(--dark-color);
            font-weight: 500;
            margin-bottom: 10px;
        }

        .product-count-container {
            display: flex;
            align-items: center;
            margin-right: 10px;
            /* Ajusta el margen derecho según sea necesario */
        }

        #product-count {
            margin-right: 10px;
            /* Espacio entre el contador y el campo de búsqueda */
            color: rgba(0, 0, 0, 0.5);
            /* Color negro semi-transparente */
        }

        .search-sort-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px;
        }

        .search-bar {
            position: relative;
            display: flex;
            align-items: center;
        }

        .search-bar input {
            padding: 10px 20px 10px 10px;
            font-size: 16px;
            width: 300px;
            border-radius: 25px;
            border: 1px solid #ccc;
        }

        .search-bar i {
            position: absolute;
            right: 10px;
            font-size: 20px;
            color: #aaa;
        }

        .sort-menu {
            display: flex;
            align-items: center;
            margin-left: 20px;
        }

        .sort-menu label {
            margin-right: 10px;
        }

        .sort-menu select {
            padding: 10px;
            font-size: 16px;
        }

        @media (max-width: 991.98px) {
            .search-sort-container {
                flex-direction: column;
                /* Apilamiento en dispositivos móviles */
                align-items: stretch;
                /* Estirar los elementos para ocupar el ancho completo */
            }

            .sort-menu {
                margin-left: 0;
                /* Elimina el margen izquierdo en móviles */
                margin-top: 10px;
                /* Agrega un poco de margen superior */
            }
        }

        .btn-comprar {
            background: linear-gradient(90deg, rgba(93, 224, 201, 1) 0%, rgba(114, 202, 188, 1) 52%, rgba(20, 180, 145, 1) 100%);
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn-comprar:hover {
            background-color: #515ae1;
            color: #fff;
            box-shadow: 0 0 10px rgba(81, 90, 225, 0.7);
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
                            <a class="dropdown-item" href="../decoracion/mantelerias.php">Manteleria</a>
                            <a class="dropdown-item" href="../decoracion/plantas.php">Plantas</a>
                            <a class="dropdown-item" href="../decoracion/exterior.php">Exterior</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="../tapiceria/tapiceria.php" id="navbarTapiceria" role="button">
                            TAPICERÍA
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarTapiceria">
                            <a class="dropdown-item" href="alfombras.php">Alfombras</a>
                            <a class="dropdown-item" href="viniles.php">Viniles</a>
                            <a class="dropdown-item" href="tapiceria.php">Tapiceria</a>
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

    <!-- Carrusel de Imágenes -->
    <div id="carrusel" class="container-fluid position-relative">
        <h2 class="text-center carrusel-titulo">TAPICERIA</h2>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="fondopro.jpg" class="d-block w-100 mx-auto" alt="Imagen 1">
                </div>
                <div class="carousel-item">
                    <img src="fondopro.jpg" class="d-block w-100 mx-auto" alt="Imagen 2">
                </div>
                <div class="carousel-item">
                    <img src="fondopro.jpg" class="d-block w-100 mx-auto" alt="Imagen 3">
                </div>
            </div>
        </div>
    </div>

    <div class="search-sort-container">

        <div class="product-count-container">
            <span id="product-count"></span>
        </div>

        <!-- Barra de búsqueda -->
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Buscar...">
            <i class="fas fa-search"></i>
        </div>

        <!-- Menú de ordenamiento -->
        <div class="sort-menu">
            <label for="sortOptions">Ordenar por:</label>
            <select id="sortOptions">
                <option value="default">Seleccionar</option>
                <option value="price">Precio</option>
                <option value="name">Nombre</option>
            </select>
        </div>
    </div>

    <!-- Sección de Productos -->
    <div class="container-products">
        <div class="card-product" data-name="Tapete 1" data-price="100" data-image="../assets/alfombras2.jpg">
            <div class="container1-img">
                <img src="../assets/alfombras2.jpg" alt="Tapete 1">
            </div>
            <div class="content-product">
                <h3>Tapete 1</h3>
                <p>Precio: $100</p>
                <button class="btn btn-comprar" onclick="addToCart('Tapete 1', 100, '../assets/alfombras2.jpg')">Comprar</button>
            </div>
        </div>
        <div class="card-product" data-name="Tapete 2" data-price="200" data-image="../assets/alfombras2.jpg">
            <div class="container1-img">
                <img src="../assets/alfombras2.jpg" alt="Tapete 2">
            </div>
            <div class="content-product">
                <h3>Tapete 2</h3>
                <p>Precio: $200</p>
                <button class="btn btn-comprar" onclick="addToCart('Tapete 2', 200, '../assets/alfombras2.jpg')">Comprar</button>
            </div>
        </div>
        <div class="card-product" data-name="Tapete 3" data-price="100" data-image="../assets/alfombras2.jpg">
            <div class="container1-img">
                <img src="../assets/alfombras2.jpg" alt="Tapete 3">
            </div>
            <div class="content-product">
                <h3>Tapete 3</h3>
                <p>Precio: $100</p>
                <button class="btn btn-comprar" onclick="addToCart('Tapete 3', 100, '../assets/alfombras2.jpg')">Comprar</button>
            </div>
        </div>
        <div class="card-product" data-name="Tapete 4" data-price="200">
            <div class="container1-img">
                <img src="../assets/alfombras2.jpg" alt="Tapete 4">
            </div>
            <div class="content-product">
                <h3>Tapete 4</h3>
                <p>Precio: $200</p>
                <button class="btn btn-comprar" onclick="addToCart('Tapete 4', 200)">Comprar</button>
            </div>
        </div>
    </div>

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

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
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