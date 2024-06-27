<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background: #fff;
            min-height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            padding-top: 80px;
            /* Ajusta el padding-top para dar espacio al navbar */
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

        .container-custom {
            width: 100%;
            max-width: 1200px;
            padding: 15px;
            margin-top: 20px;
            /* Margen superior adicional para separarlo del navbar */
        }

        @media (max-width: 768px) {
            .table-responsive {
                overflow-x: auto;
            }

            .table th,
            .table td {
                white-space: nowrap;
            }

            .inner-border {
                width: 100% !important;
                margin-bottom: 0 !important;
            }

            .price-container {
                width: 100% !important;
                margin: 0 !important;
                margin-top: 15px !important;
            }
        }

        .btn-separator {
            margin-left: 5px;
        }

        .cart-title {
            font-size: 1.5em;
            font-weight: bold;
        }

        /* Añadir estilos para la tabla */
        .table {
            border-collapse: collapse;
            width: 100%;
            /* Ajustar al ancho deseado */
        }

        .table th,
        .table td {
            border: none !important;
            color: #666;
            /* Color del texto a gris */
            padding: 8px;
            /* Ajustar padding de las celdas */
        }

        /* Estilo de las filas alternas */
        .table tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
            /* Fondo blanco para filas impares */
        }

        /* Fijar la tabla y su contenedor */
        .table-responsive {
            overflow-x: auto;
            /* Permitir scroll horizontal si es necesario */
            max-height: 500px;
            /* Ajustar altura máxima para scroll vertical */
        }

        /* Estilo para la cabecera de la tabla */
        .table thead th {
            position: sticky;
            top: 0;
            background-color: #ffffff;
            /* Fondo blanco para la cabecera */
            z-index: 1;
            /* Asegurar que la cabecera esté sobre el contenido al hacer scroll */
        }

        /* Estilo para las celdas de imagen */
        .table td:first-child img {
            max-width: 50px;
            /* Ajustar tamaño máximo de las imágenes */
            height: auto;
            /* Mantener proporción */
            display: block;
            /* Evitar espacios extra alrededor de las imágenes */
            margin: 0 auto;
            /* Centrar las imágenes */
        }

        /* Ajustar ancho de las columnas */
        .table th:nth-child(2),
        .table td:nth-child(2) {
            width: 40%;
            /* Ancho mayor para la columna "Producto" */
        }

        .table th:not(:nth-child(2)),
        .table td:not(:nth-child(2)) {
            width: 12%;
            /* Ancho menor para las demás columnas */
        }

        /* Estilo para el contorno interno */
        .card-body {
            padding: 15px;
            position: relative;
        }

        .inner-border {
            border: 1px solid #ccc;
            border-radius: .25rem;
            padding: 15px;
            margin-bottom: 15px;
            display: inline-block;
            vertical-align: top;
            width: calc(100% - 220px);
            /* Ajusta el ancho del inner-border */
        }

        .price-container {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: .25rem;
            padding: 15px;
            width: 200px;
            /* Ajusta el ancho del price-container */
            text-align: center;
            display: inline-block;
            vertical-align: top;
            margin-left: 15px;
            /* Espacio entre inner-border y price-container */
        }

        .price-container h5 {
            margin: 0;
        }

        #cart-total {
            display: inline-block;
            /* Asegura que el span se muestre en línea */
            margin-left: 5px;
            /* Ajusta el margen izquierdo del valor total */
        }

        #cart-total::before {
            content: "$";
            /* Añade el signo de peso como contenido antes del valor */
            margin-right: 3px;
            /* Ajusta el margen derecho entre el signo de peso y el valor */
        }

        .card-images {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .card-images img {
            width: 40px;
            height: 30px;
            object-fit: cover;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .separator-line-below-images {
            border-top: 1px solid #ccc;
            margin-top: 10px;
            padding-top: 5px;
            margin-bottom: 10px;
        }

        .separator-line {
            border-top: 1px solid #ccc;
            margin-top: 10px;
            padding-top: 5px;
        }

        .cart-count-label {
            font-size: 1em;
            /* Ajuste del tamaño de fuente */
            color: black;
            /* Color del texto */
            margin-right: 5px;
        }

        #cart-count {
            font-weight: bold;
            background-color: #f8f9fa;
            color: black;
            /* Asegura que el número sea negro */
            border: 1px solid #dee2e6;
            /* Borde gris claro */
        }

        /* Estilos personalizados */
        .btn-custom {
            background: linear-gradient(90deg, rgba(93, 224, 201, 1) 0%, rgba(114, 202, 188, 1) 52%, rgba(20, 180, 145, 1) 100%);
            /* Cambia el color de fondo a verde (ejemplo) */
            border-color: #fff;
            /* Cambia el color del borde */
            color: #fff;
            /* Cambia el color del texto a blanco */
        }
    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="56">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top">
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
                        <a class="nav-link" href="index.php">INICIO /</a>
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

    <div class="container-custom">
        <div class="card">
            <div class="card-header">
                <h3 class="cart-title">Productos en el carrito</h3>
                <span class="cart-count-label">Productos en el carrito: </span>
                <span id="cart-count" class="badge badge-pill badge-secondary">0</span>
            </div>
            <div class="card-body">
                <div class="inner-border">
                    <div class="table-responsive">
                        <table class="table" id="cart-items-table">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Total</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="cart-items"></tbody>
                        </table>
                    </div>
                    <div class="separator-line"></div>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <button class="btn btn-custom" id="back-btn">
                            <i class="fas fa-arrow-left"></i> Regresar
                        </button>
                    </div>
                </div>
                <div class="price-container">
                    <h5>Total: <span id="cart-total">$0.00</span></h5>
                    <div class="separator-line-below-images"></div>
                    <div class="card-images">
                        <img src="assets/visa.png" alt="">
                        <img src="assets/expres.png" alt="">
                        <img src="assets/paypal.png" alt="">
                        <img src="assets/mastercard.png" alt="">
                    </div>
                    <div class="separator-line"></div>
                    <div id="paypal-button-container"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://www.paypal.com/sdk/js?client-id=sb"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            updateCart();

            paypal.Buttons({
                createOrder: function(data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: document.getElementById('cart-total').textContent.replace('$', '')
                            }
                        }]
                    });
                },
                onApprove: function(data, actions) {
                    return actions.order.capture().then(function(details) {
                        alert('Pago completado por ' + details.payer.name.given_name);
                    });
                }
            }).render('#paypal-button-container');
        });

        function updateCart() {
            const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
            const cartItemsContainer = document.getElementById('cart-items');
            cartItemsContainer.innerHTML = '';

            // Actualizar el conteo de productos en el carrito
            document.getElementById('cart-count').textContent = cartItems.length;

            if (cartItems.length === 0) {
                // Mostrar mensaje de carrito vacío
                cartItemsContainer.innerHTML = '<tr><td colspan="5">No hay productos en el carrito</td></tr>';
                document.getElementById('cart-total').innerText = '0.00'; // Reiniciar total a $0.00
            } else {
                cartItems.forEach(function(item) {
                    const row = document.createElement('tr');
                    row.classList.add('cart-item');

                    // Agregar imagen al producto
                    const imageCell = document.createElement('td');
                    const image = document.createElement('img');
                    image.src = item.image;
                    image.style.width = '50px';
                    image.style.height = '50px';
                    image.style.objectFit = 'cover';
                    imageCell.appendChild(image);
                    row.appendChild(imageCell);

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
                        addToCart(item.name, item.price, item.image);
                    });

                    const decrementButton = createButton('-', 'btn-warning', function() {
                        removeFromCart(item.name, item.price);
                    });

                    const deleteButton = createButton('x', 'btn-danger', function() {
                        deleteFromCart(item.name);
                    });

                    decrementButton.classList.add('btn-separator');
                    deleteButton.classList.add('btn-separator');

                    actionsCell.appendChild(incrementButton);
                    actionsCell.appendChild(decrementButton);
                    actionsCell.appendChild(deleteButton);
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

        function updateCartTotal(cartItems) {
            let totalPrice = 0;
            cartItems.forEach(function(item) {
                totalPrice += item.totalPrice;
            });

            document.getElementById('cart-total').innerText = totalPrice.toFixed(2);
        }

        function addToCart(productName, price, image) {
            const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
            let existingItem = cartItems.find(item => item.name === productName);

            if (existingItem) {
                existingItem.quantity++;
                existingItem.totalPrice += price;
            } else {
                existingItem = {
                    name: productName,
                    price: price,
                    quantity: 1,
                    totalPrice: price,
                    image: image
                };
                cartItems.push(existingItem);
            }

            localStorage.setItem('cartItems', JSON.stringify(cartItems));
            updateCart();
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
            updateCart();
        }

        function deleteFromCart(productName) {
            const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
            const newCartItems = cartItems.filter(item => item.name !== productName);

            localStorage.setItem('cartItems', JSON.stringify(newCartItems));
            updateCart();
        }
    </script>
</body>

</html>