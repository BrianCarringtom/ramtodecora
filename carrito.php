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
            background: #515ae1;
            min-height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container-custom {
            width: 100%;
            max-width: 1200px;
            padding: 15px;
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

        /* Quitar todas las líneas */
        .table {
            border-collapse: collapse;
        }

        .table th,
        .table td {
            border: none !important;
            color: #666;
            /* Cambiar color del texto a gris */
        }

        .table tr {
            border: none !important;
        }

        .table thead th {
            border-bottom: none !important;
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
    </style>
</head>

<body>
    <div class="container-custom">
        <div class="card">
            <div class="card-header">
                <h3 class="cart-title">Productos en el carrito</h3>
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
                        <button class="btn btn-primary" id="back-btn">
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
                    <button class="btn btn-primary mt-3" id="checkout-btn">
                        Pagar <i class="fas fa-credit-card"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" async defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" async defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            updateCart();
        });

        function updateCart() {
            const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
            const cartItemsContainer = document.getElementById('cart-items');
            cartItemsContainer.innerHTML = '';

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
            const updatedCartItems = cartItems.filter(item => item.name !== productName);
            localStorage.setItem('cartItems', JSON.stringify(updatedCartItems));
            updateCart();
        }

        // Botón de regreso
        document.getElementById('back-btn').addEventListener('click', function() {
            history.back();
        });

        // Botón de pago
        document.getElementById('checkout-btn').addEventListener('click', function() {
            history.pushState(null, '', window.location.href);
            $('#paymentModal').modal('show');
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
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>