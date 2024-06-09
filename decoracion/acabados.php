<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="RAMTO Decoración - Soluciones en decoración y tapicería.">
    <meta name="author" content="Devcrud">
    <title>Acabados</title>
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
                    </div>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carrusel de Imágenes -->
    <div id="carrusel" class="container">
    <h2 class="text-center">ACABADOS</h2>
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
    <div class="card-product" data-name="Acabados 1" data-price="100">
        <div class="container1-img">
            <img src="../assets/alfombras2.jpg" alt="Acabados 1">
        </div>
        <div class="content-product">
            <h3>Acabados 1</h3>
            <p>Precio: $100</p>
            <button class="btn btn-comprar" onclick="addToCart('Acabados 1', 100)">Comprar</button>
        </div>
    </div>
</div>

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

    <!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
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

let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

function saveCart() {
    localStorage.setItem('cartItems', JSON.stringify(cartItems));
}

function addToCart(productName, price) {
    const existingItem = cartItems.find(item => item.name === productName);

    if (existingItem) {
        existingItem.quantity++;
        existingItem.totalPrice += price;
    } else {
        cartItems.push({ name: productName, price: price, quantity: 1, totalPrice: price });
    }

    updateCart();
    saveCart();
    alert(productName + ' ha sido añadido al carrito.');
}

function removeFromCart(productName, price) {
    const existingItem = cartItems.find(item => item.name === productName);

    if (existingItem) {
        if (existingItem.quantity > 1) {
            existingItem.quantity--;
            existingItem.totalPrice -= price;
        } else {
            cartItems = cartItems.filter(item => item.name !== productName);
        }
    }

    updateCart();
    saveCart();
}

function updateCart() {
    const cartItemsContainer = document.getElementById('cart-items');
    cartItemsContainer.innerHTML = '';

    let totalPrice = 0;
    let totalQuantity = 0;

    cartItems.forEach(function(item) {
        const row = document.createElement('tr');
        row.classList.add('cart-item');

        const nameCell = document.createElement('td');
        nameCell.textContent = item.name;
        row.appendChild(nameCell);

        const priceCell = document.createElement('td');
        priceCell.textContent = '$' + item.price.toFixed(2);
        row.appendChild(priceCell);

        const quantityCell = document.createElement('td');
        quantityCell.textContent = item.quantity;
        row.appendChild(quantityCell);

        const totalCell = document.createElement('td');
        totalCell.textContent = '$' + item.totalPrice.toFixed(2);
        row.appendChild(totalCell);

        const actionsCell = document.createElement('td');
        
        const incrementButton = document.createElement('button');
        incrementButton.textContent = '+';
        incrementButton.classList.add('btn', 'btn-sm', 'btn-success', 'mr-1');
        incrementButton.addEventListener('click', function() {
            addToCart(item.name, item.price);
        });

        const decrementButton = document.createElement('button');
        decrementButton.textContent = '-';
        decrementButton.classList.add('btn', 'btn-sm', 'btn-warning');
        decrementButton.addEventListener('click', function() {
            removeFromCart(item.name, item.price);
        });

        actionsCell.appendChild(incrementButton);
        actionsCell.appendChild(decrementButton);
        row.appendChild(actionsCell);

        cartItemsContainer.appendChild(row);

        totalPrice += item.totalPrice;
        totalQuantity += item.quantity;
    });

    document.getElementById('cart-total').innerText = totalPrice.toFixed(2);
    document.getElementById('cart-count').innerText = totalQuantity;
}

// Update cart on page load
document.addEventListener('DOMContentLoaded', function() {
    updateCart();
});
</script>
</body>
</html>
