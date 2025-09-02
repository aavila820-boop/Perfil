<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras - Tu Tienda Online</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .header {
            background: linear-gradient(135deg, #ff6b6b, #ee5a24);
            color: white;
            padding: 25px;
            border-radius: 15px;
            margin-bottom: 30px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(238, 90, 36, 0.3);
        }

        .header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .breadcrumb {
            margin-bottom: 20px;
            color: #636e72;
            font-size: 0.95rem;
        }

        .breadcrumb a {
            color: #0984e3;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .breadcrumb a:hover {
            color: #74b9ff;
        }

        .cart-layout {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
        }

        .cart-items {
            background: rgba(116, 185, 255, 0.1);
            padding: 25px;
            border-radius: 15px;
            border-left: 5px solid #74b9ff;
        }

        .cart-summary {
            background: rgba(0, 184, 148, 0.1);
            padding: 25px;
            border-radius: 15px;
            border-left: 5px solid #00b894;
            height: fit-content;
            position: sticky;
            top: 20px;
        }

        .section-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #2d3436;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .cart-item {
            background: white;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            animation: slideIn 0.5s ease forwards;
        }

        .cart-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .item-content {
            display: grid;
            grid-template-columns: 100px 1fr auto;
            gap: 20px;
            align-items: center;
        }

        .item-image {
            width: 100px;
            height: 80px;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
        }

        .item-details h4 {
            color: #2d3436;
            margin-bottom: 8px;
            font-size: 1.1rem;
        }

        .item-details p {
            color: #636e72;
            font-size: 0.9rem;
            margin-bottom: 5px;
        }

        .item-price {
            font-size: 1.3rem;
            font-weight: 700;
            color: #00b894;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 10px;
        }

        .qty-btn {
            width: 35px;
            height: 35px;
            border: none;
            border-radius: 8px;
            background: linear-gradient(135deg, #74b9ff, #0984e3);
            color: white;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .qty-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 5px 15px rgba(116, 185, 255, 0.4);
        }

        .qty-input {
            width: 60px;
            height: 35px;
            border: 2px solid #ddd;
            border-radius: 8px;
            text-align: center;
            font-size: 1rem;
            font-weight: 600;
        }

        .remove-btn {
            background: linear-gradient(135deg, #ff6b6b, #ee5a24);
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            margin-left: 15px;
        }

        .remove-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(255, 107, 107, 0.4);
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .summary-row.total {
            border-bottom: none;
            border-top: 2px solid #00b894;
            font-size: 1.3rem;
            font-weight: 700;
            color: #00b894;
            margin-top: 15px;
            padding-top: 15px;
        }

        .checkout-btn {
            width: 100%;
            padding: 18px;
            background: linear-gradient(135deg, #00b894, #00a085);
            color: white;
            border: none;
            border-radius: 25px;
            font-size: 1.2rem;
            font-weight: 700;
            cursor: pointer;
            margin-top: 25px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 25px rgba(0, 184, 148, 0.4);
        }

        .checkout-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(0, 184, 148, 0.6);
        }

        .continue-shopping {
            text-align: center;
            margin-top: 20px;
        }

        .continue-shopping a {
            color: #0984e3;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .continue-shopping a:hover {
            color: #74b9ff;
        }

        .empty-cart {
            text-align: center;
            padding: 60px 20px;
            color: #636e72;
        }

        .empty-cart-icon {
            font-size: 5rem;
            margin-bottom: 20px;
            opacity: 0.5;
        }

        .promo-code {
            background: rgba(253, 121, 168, 0.1);
            padding: 20px;
            border-radius: 12px;
            margin-top: 20px;
            border-left: 4px solid #fd79a8;
        }

        .promo-input {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .promo-input input {
            flex: 1;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
        }

        .promo-input button {
            padding: 12px 20px;
            background: linear-gradient(135deg, #fd79a8, #fdcb6e);
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .promo-input button:hover {
            transform: scale(1.05);
        }

        .security-badges {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
            opacity: 0.7;
        }

        .badge {
            padding: 8px 15px;
            background: linear-gradient(135deg, #636e72, #2d3436);
            color: white;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .savings-highlight {
            background: linear-gradient(135deg, #fd79a8, #fdcb6e);
            color: white;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 20px;
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(253, 121, 168, 0.3);
        }

        @media (max-width: 768px) {
            .cart-layout {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .item-content {
                grid-template-columns: 80px 1fr;
                grid-template-rows: auto auto;
                gap: 15px;
            }

            .item-image {
                width: 80px;
                height: 60px;
                font-size: 1.5rem;
            }

            .quantity-controls {
                grid-column: 1 / -1;
                justify-content: space-between;
                margin-top: 15px;
            }

            .header h1 {
                font-size: 2rem;
            }

            .container {
                margin: 10px;
                padding: 15px;
            }
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .pulse-animation {
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.02); }
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>🛒 Tu Carrito de Compras</h1>
            <p>Revisa tus productos antes de finalizar la compra</p>
        </header>

        <div class="breadcrumb">
            <a href="#" onclick="goBack()">🏠 Inicio</a> / 
            <a href="#" onclick="goBack()">📱 Electrónicos</a> / 
            <a href="#" onclick="goBack()">🖥️ Monitores</a> / 
            <strong>Carrito de Compras</strong>
        </div>

        <div class="cart-layout">
            <div class="cart-items">
                <h2 class="section-title">
                    🛍️ Productos en tu Carrito
                    <span id="itemCount" style="font-size: 1rem; background: #ff6b6b; color: white; padding: 5px 12px; border-radius: 20px; margin-left: 10px;">3</span>
                </h2>

                <div id="cartItemsContainer">
                    <!-- Los productos se cargarán dinámicamente con JavaScript -->
                </div>

                <div class="continue-shopping">
                    <a href="#" onclick="continueShopping()">← Continuar Comprando</a>
                </div>
            </div>

            <div class="cart-summary">
                <h3 class="section-title">💰 Resumen de Compra</h3>

                <div class="savings-highlight pulse-animation">
                    🎉 ¡Ahorras $275.00 en tu compra!
                </div>

                <div class="summary-row">
                    <span>Subtotal (<span id="totalItems">3</span> productos):</span>
                    <span id="subtotal">$1,249.97</span>
                </div>

                <div class="summary-row">
                    <span>Descuentos:</span>
                    <span style="color: #00b894;" id="discounts">-$275.00</span>
                </div>

                <div class="summary-row">
                    <span>Envío:</span>
                    <span style="color: #00b894;">GRATIS 🚚</span>
                </div>

                <div class="summary-row">
                    <span>IVA (19%):</span>
                    <span id="tax">$185.24</span>
                </div>

                <div class="summary-row total">
                    <span>Total:</span>
                    <span id="total">$1,160.21</span>
                </div>

                <div class="promo-code">
                    <h4>🏷️ Código Promocional</h4>
                    <div class="promo-input">
                        <input type="text" placeholder="Ingresa tu código" id="promoInput">
                        <button onclick="applyPromo()">Aplicar</button>
                    </div>
                </div>

                <button class="checkout-btn" onclick="proceedToCheckout()">
                    🔒 Proceder al Pago Seguro
                </button>

                <div class="security-badges">
                    <div class="badge">🔐 SSL</div>
                    <div class="badge">💳 PayPal</div>
                    <div class="badge">✅ Seguro</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Datos de ejemplo del carrito
        let cartItems = [
            {
                id: 1,
                name: "Monitor Gaming ASUS ROG Strix XG27AQ 27\"",
                description: "WQHD 170Hz IPS G-SYNC Compatible",
                price: 599.99,
                originalPrice: 799.99,
                quantity: 1,
                icon: "🖥️",
                inStock: true
            },
            {
                id: 2,
                name: "Teclado Mecánico Razer BlackWidow V3",
                description: "RGB Switches Green Clicky",
                price: 149.99,
                originalPrice: 199.99,
                quantity: 1,
                icon: "⌨️",
                inStock: true
            },
            {
                id: 3,
                name: "Mouse Gaming Logitech G Pro X Superlight",
                description: "Wireless 25K DPI",
                price: 149.99,
                originalPrice: 179.99,
                quantity: 2,
                icon: "🖱️",
                inStock: true
            }
        ];

        function renderCartItems() {
            const container = document.getElementById('cartItemsContainer');
            
            if (cartItems.length === 0) {
                container.innerHTML = `
                    <div class="empty-cart">
                        <div class="empty-cart-icon">🛒</div>
                        <h3>Tu carrito está vacío</h3>
                        <p>¡Agrega algunos productos increíbles!</p>
                        <button class="checkout-btn" style="max-width: 300px; margin-top: 20px;" onclick="continueShopping()">
                            🛍️ Ir de Compras
                        </button>
                    </div>
                `;
                return;
            }

            container.innerHTML = cartItems.map(item => `
                <div class="cart-item" data-id="${item.id}">
                    <div class="item-content">
                        <div class="item-image">
                            ${item.icon}
                        </div>
                        
                        <div class="item-details">
                            <h4>${item.name}</h4>
                            <p>${item.description}</p>
                            <p style="color: #00b894; font-weight: 600;">
                                ${item.inStock ? '✅ En Stock' : '❌ Agotado'}
                            </p>
                            <div class="quantity-controls">
                                <button class="qty-btn" onclick="updateQuantity(${item.id}, ${item.quantity - 1})">-</button>
                                <input type="number" class="qty-input" value="${item.quantity}" min="1" max="10" 
                                       onchange="updateQuantity(${item.id}, this.value)">
                                <button class="qty-btn" onclick="updateQuantity(${item.id}, ${item.quantity + 1})">+</button>
                                <button class="remove-btn" onclick="removeItem(${item.id})">🗑️ Eliminar</button>
                            </div>
                        </div>
                        
                        <div style="text-align: right;">
                            <div class="item-price">$${(item.price * item.quantity).toFixed(2)}</div>
                            ${item.originalPrice > item.price ? `
                                <div style="text-decoration: line-through; color: #999; font-size: 0.9rem;">
                                    $${(item.originalPrice * item.quantity).toFixed(2)}
                                </div>
                            ` : ''}
                        </div>
                    </div>
                </div>
            `).join('');
        }

        function updateQuantity(itemId, newQuantity) {
            newQuantity = Math.max(1, Math.min(10, parseInt(newQuantity)));
            
            const itemIndex = cartItems.findIndex(item => item.id === itemId);
            if (itemIndex !== -1) {
                cartItems[itemIndex].quantity = newQuantity;
                renderCartItems();
                updateSummary();
                
                // Animación de actualización
                const itemElement = document.querySelector(`[data-id="${itemId}"]`);
                itemElement.style.background = 'rgba(0, 184, 148, 0.2)';
                setTimeout(() => {
                    itemElement.style.background = 'white';
                }, 500);
            }
        }

        function removeItem(itemId) {
            const itemName = cartItems.find(item => item.id === itemId)?.name;
            
            if (confirm(`¿Estás seguro de que quieres eliminar "${itemName}" del carrito?`)) {
                const itemElement = document.querySelector(`[data-id="${itemId}"]`);
                
                // Animación de eliminación
                itemElement.style.transform = 'translateX(-100%)';
                itemElement.style.opacity = '0';
                
                setTimeout(() => {
                    cartItems = cartItems.filter(item => item.id !== itemId);
                    renderCartItems();
                    updateSummary();
                }, 300);
            }
        }

        function updateSummary() {
            const subtotal = cartItems.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            const originalTotal = cartItems.reduce((sum, item) => sum + (item.originalPrice * item.quantity), 0);
            const discounts = originalTotal - subtotal;
            const tax = subtotal * 0.19;
            const total = subtotal + tax;
            const itemCount = cartItems.reduce((sum, item) => sum + item.quantity, 0);

            document.getElementById('subtotal').textContent = `$${subtotal.toFixed(2)}`;
            document.getElementById('discounts').textContent = `-$${discounts.toFixed(2)}`;
            document.getElementById('tax').textContent = `$${tax.toFixed(2)}`;
            document.getElementById('total').textContent = `$${total.toFixed(2)}`;
            document.getElementById('totalItems').textContent = itemCount;
            document.getElementById('itemCount').textContent = itemCount;

            // Actualizar savings highlight
            document.querySelector('.savings-highlight').innerHTML = 
                `🎉 ¡Ahorras $${discounts.toFixed(2)} en tu compra!`;
        }

        function applyPromo() {
            const promoCode = document.getElementById('promoInput').value.toUpperCase();
            const validCodes = {
                'DESCUENTO10': 0.10,
                'GAMING20': 0.20,
                'NUEVOCLIENTE': 0.15
            };

            if (validCodes[promoCode]) {
                const discount = validCodes[promoCode];
                alert(`🎉 ¡Código aplicado!\n\nDescuento adicional del ${(discount * 100)}% aplicado exitosamente.`);
                
                // Aplicar descuento (simulado)
                const currentSubtotal = parseFloat(document.getElementById('subtotal').textContent.replace('$', ''));
                const newDiscount = currentSubtotal * discount;
                const currentDiscounts = parseFloat(document.getElementById('discounts').textContent.replace('-$', ''));
                
                document.getElementById('discounts').textContent = `-$${(currentDiscounts + newDiscount).toFixed(2)}`;
                
                // Recalcular total
                const tax = parseFloat(document.getElementById('tax').textContent.replace('$', ''));
                const newTotal = currentSubtotal - (currentDiscounts + newDiscount) + tax;
                document.getElementById('total').textContent = `$${newTotal.toFixed(2)}`;
                
                document.getElementById('promoInput').value = '';
                document.getElementById('promoInput').style.borderColor = '#00b894';
            } else {
                alert('❌ Código promocional no válido.\n\nCódigos disponibles: DESCUENTO10, GAMING20, NUEVOCLIENTE');
                document.getElementById('promoInput').style.borderColor = '#ff6b6b';
            }
        }

        function proceedToCheckout() {
            const total = document.getElementById('total').textContent;
            const itemCount = document.getElementById('itemCount').textContent;
            
            alert(`🔒 Procediendo al checkout...\n\nTotal: ${total}\nProductos: ${itemCount}\n\n¡Serás redirigido al pago seguro!`);
        }

        function continueShopping() {
            alert('🛍️ Redirigiendo a la tienda...\n\n¡Encuentra más productos increíbles!');
        }

        function goBack() {
            alert('🔙 Navegando hacia atrás...');
        }

        // Simular agregar producto desde la página anterior
        function addProductFromDetail() {
            const newProduct = {
                id: Date.now(),
                name: "Monitor Gaming ASUS ROG Strix XG27AQ 27\"",
                description: "WQHD 170Hz IPS G-SYNC Compatible",
                price: 599.99,
                originalPrice: 799.99,
                quantity: 1,
                icon: "🖥️",
                inStock: true
            };
            
            cartItems.push(newProduct);
            renderCartItems();
            updateSummary();
        }

        // Inicializar la página
        document.addEventListener('DOMContentLoaded', function() {
            renderCartItems();
            updateSummary();
            
            // Animación de entrada
            document.body.style.opacity = '0';
            document.body.style.transform = 'translateY(20px)';
            document.body.style.transition = 'all 0.6s ease';
            
            setTimeout(() => {
                document.body.style.opacity = '1';
                document.body.style.transform = 'translateY(0)';
            }, 100);
        });

        // Permitir Enter en el campo de código promocional
        document.addEventListener('DOMContentLoaded', function() {
            const promoInput = document.getElementById('promoInput');
            promoInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    applyPromo();
                }
            });
        });

        // Función para simular la carga de productos guardados
        function loadSavedCart() {
            // En una aplicación real, esto cargaría desde localStorage o base de datos
            console.log('Cargando carrito guardado...');
        }

        // Auto-save del carrito (simulado)
        setInterval(() => {
            console.log('Guardando carrito automáticamente...');
        }, 30000);
    </script>
</body>
</html>