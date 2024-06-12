<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        @media (max-width: 768px) {
            .table-responsive {
                overflow-x: auto;
            }

            .table th,
            .table td {
                white-space: nowrap;
            }
        }

        .btn-separator {
            margin-left: 5px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h6>Productos en el carrito</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
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
                </div>
                <div class="dropdown-divider"></div>
                <div class="dropdown-item-text">Total: $<span id="cart-total">0.00</span></div>
                <div class="d-flex justify-content-between align-items-center mr-3">
                    <button class="btn btn-primary" id="back-btn">Regresar</button>
                    <button class="btn btn-primary" id="checkout-btn">Pagar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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

                decrementButton.classList.add('btn-separator');

                actionsCell.appendChild(incrementButton);
                actionsCell.appendChild(decrementButton);
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

        function addToCart(productName, price) {
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
                    totalPrice: price
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

        // Botón de regreso
        document.getElementById('back-btn').addEventListener('click', function() {
            history.back();
        });

        // Botón de pago
        document.getElementById('checkout-btn').addEventListener('click', function() {
            // Guarda la
            // Guarda la URL actual en el historial del navegador
            history.pushState(null, '', window.location.href);

            // Abre el modal de opciones de pago
            $('#paymentModal').modal('show');
        });
    </script>
</body>

</html>
