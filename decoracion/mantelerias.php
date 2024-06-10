<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="RAMTO Decoración - Soluciones en decoración y tapicería.">
    <meta name="author" content="Devcrud">
    <title>Mantelerias</title>
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

        .btn-comprar:hover {
            background-color: #218838;
            color: #ffffff;
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
        }

        .navbar-nav .nav-item .nav-link {
            transition: color 0.3s;
        }

        .navbar-nav .nav-item .nav-link:hover {
            color: #FF0000;
        }

        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: red !important;
        }

        #carrusel {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: black;
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
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
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

        .btn-comprar {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="cart" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-shopping-cart"></i> Carrito (<span id="cart-count">0</span>)
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="cart">
                            <h6 class="dropdown-header">Productos en el carrito</h6>
                            <table class="table" id="cart-items-table">
                                <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>Total</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="cart-items"></tbody>
                            </table>
                            <div class="dropdown-divider"></div>
                            <div class="dropdown-item-text">Total: $<span id="cart-total">0.00</span></div>
                            <div class="d-flex justify-content-end mr-3">
                                <button class="btn btn-primary ml-auto" id="checkout-btn">Pagar</button>
                            </div>
                            <div class="pagination-controls text-center mt-3">
                                <button class="btn btn-secondary btn-sm" id="prev-page">Anterior</button>
                                <span id="page-info">Página 1</span>
                                <button class="btn btn-secondary btn-sm" id="next-page">Siguiente</button>
                            </div>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carrusel de Imágenes -->
    <div id="carrusel" class="container">
        <h2 class="text-center">MANTELERIAS</h2>
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

    <!-- Barra de búsqueda -->
    <div class="search-bar">
        <input type="text" id="searchInput" placeholder="Buscar...">
    </div>

    <!-- Sección de Productos -->
    <div class="container-products">
        <div class="card-product" data-name="Mantelerias 1" data-price="100">
            <div class="container1-img">
                <img src="../assets/alfombras2.jpg" alt="Mantelerias 1">
            </div>
            <div class="content-product">
                <h3>Mantelerias 1</h3>
                <p>Precio: $100</p>
                <button class="btn btn-comprar" onclick="addToCart('Mantelerias 1', 100)">Comprar</button>
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
            updateCart();
            renderCartItems();
        });

        document.getElementById('searchInput').addEventListener('input', function() {
            const searchTerm = this.value.trim().toLowerCase();
            const products = document.querySelectorAll('.card-product');

            products.forEach(function(product) {
                const title = product.querySelector('h3').textContent.trim().toLowerCase();
                product.style.display = title.includes(searchTerm) ? 'block' : 'none';
            });
        });

        let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
        let currentPage = 1;
        const itemsPerPage = 4;

        function saveCart() {
            localStorage.setItem('cartItems', JSON.stringify(cartItems));
        }

        function addToCart(productName, price) {
            let existingItem = cartItems.find(item => item.name === productName);

            if (existingItem) {
                existingItem.quantity++;
                existingItem.totalPrice += price;
            } else {
                existingItem = {
                    name: productName,
                    price: price,
                    quantity: 1,
                    totalPrice: price
                };
                cartItems.push(existingItem);
            }

            updateCart();
            saveCart();
            alert(productName + ' ha sido añadido al carrito.');
        }

        function removeFromCart(productName, price) {
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

            updateCart();
            saveCart();
        }

        function renderCartItem(item) {
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

            return row;
        }

        function createButton(text, className, onClick) {
            const button = document.createElement('button');
            button.textContent = text;
            button.classList.add('btn', 'btn-sm', className);
            button.addEventListener('click', onClick);
            return button;
        }

        function renderCartItems() {
            const cartItemsContainer = document.getElementById('cart-items');
            cartItemsContainer.innerHTML = '';

            const start = (currentPage - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            const paginatedItems = cartItems.slice(start, end);

            paginatedItems.forEach(function(item) {
                cartItemsContainer.appendChild(renderCartItem(item));
            });

            document.getElementById('page-info').innerText = `Página ${currentPage}`;
        }

        function updateCartTotal() {
            let totalPrice = 0;
            let totalQuantity = 0;

            cartItems.forEach(function(item) {
                totalPrice += item.totalPrice;
                totalQuantity += item.quantity;
            });

            document.getElementById('cart-total').innerText = totalPrice.toFixed(2);
            document.getElementById('cart-count').innerText = totalQuantity;
        }

        function updateCart() {
            renderCartItems();
            updateCartTotal();
            saveCart();
        }

        document.getElementById('prev-page').addEventListener('click', function() {
            if (currentPage > 1) {
                currentPage--;
                renderCartItems();
            }
        });

        document.getElementById('next-page').addEventListener('click', function() {
            const totalPages = Math.ceil(cartItems.length / itemsPerPage);
            if (currentPage < totalPages) {
                currentPage++;
                renderCartItems();
            }
        });
    </script>
    <!-- Modal de opciones de pago -->
    <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentModalLabel">Opciones de Pago</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Seleccione su método de pago preferido:</p>
                    <ul>
                        <li><a href="https://www.santander.com.mx/" target="_blank">Pagar con Banco Santander</a></li>
                        <li><a href="https://www.banorte.com/" target="_blank">Pagar con Banorte</a></li>
                        <li><a href="https://www.bancomer.com/" target="_blank">Pagar con Bancomer</a></li>
                        <!-- Agrega más opciones de pago según sea necesario -->
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        // Agrega un evento click al botón de pago para abrir el modal de opciones de pago
        document.getElementById('checkout-btn').addEventListener('click', function() {
            $('#paymentModal').modal('show'); // Abre el modal usando jQuery
        });
    </script>
</body>

</html>