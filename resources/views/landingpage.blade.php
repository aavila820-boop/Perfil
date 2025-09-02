<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUXE - Moda Premium</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .logo {
            font-size: 2rem;
            font-weight: bold;
            letter-spacing: 2px;
            background: linear-gradient(45deg, #ff6b6b, #feca57);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-links a:hover {
            color: #feca57;
            transform: translateY(-2px);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: #feca57;
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #ff6b6b 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.1"/><circle cx="50" cy="10" r="0.5" fill="white" opacity="0.05"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            animation: float 20s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(2deg); }
        }

        .hero-content {
            max-width: 800px;
            z-index: 2;
            position: relative;
        }

        .hero h1 {
            font-size: 4rem;
            margin-bottom: 1rem;
            animation: slideInUp 1s ease-out;
            background: linear-gradient(45deg, #fff, #feca57, #ff6b6b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            animation: slideInUp 1s ease-out 0.2s both;
            opacity: 0.9;
        }

        .cta-button {
            display: inline-block;
            padding: 1rem 2rem;
            background: linear-gradient(45deg, #ff6b6b, #feca57);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            transition: all 0.3s ease;
            animation: slideInUp 1s ease-out 0.4s both;
            box-shadow: 0 10px 30px rgba(255, 107, 107, 0.3);
        }

        .cta-button:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(255, 107, 107, 0.4);
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Products Section */
        .products {
            padding: 5rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            font-size: 3rem;
            margin-bottom: 3rem;
            background: linear-gradient(45deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .product-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        }

        .product-image {
            height: 250px;
            background: linear-gradient(45deg, #ff9a9e, #fecfef, #fecfef);
            position: relative;
            overflow: hidden;
        }

        .product-image::before {
            content: '👕';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 4rem;
            opacity: 0.7;
        }

        .product-card:nth-child(2) .product-image::before {
            content: '👗';
        }

        .product-card:nth-child(3) .product-image::before {
            content: '👟';
        }

        .product-info {
            padding: 1.5rem;
        }

        .product-title {
            font-size: 1.3rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .product-price {
            font-size: 1.5rem;
            color: #ff6b6b;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .product-description {
            color: #666;
            margin-bottom: 1rem;
        }

        .add-to-cart {
            width: 100%;
            padding: 0.8rem;
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            border: none;
            border-radius: 10px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .add-to-cart:hover {
            background: linear-gradient(45deg, #764ba2, #667eea);
            transform: translateY(-2px);
        }

        /* Features Section */
        .features {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            padding: 5rem 2rem;
            color: white;
        }

        .features-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .feature-card {
            text-align: center;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.15);
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            display: block;
        }

        .feature-title {
            font-size: 1.3rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        /* Newsletter Section */
        .newsletter {
            background: #1a1a2e;
            color: white;
            padding: 4rem 2rem;
            text-align: center;
        }

        .newsletter-container {
            max-width: 600px;
            margin: 0 auto;
        }

        .newsletter h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, #feca57, #ff6b6b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .newsletter-form {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .newsletter-input {
            flex: 1;
            min-width: 250px;
            padding: 1rem;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .newsletter-input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .newsletter-button {
            padding: 1rem 2rem;
            background: linear-gradient(45deg, #ff6b6b, #feca57);
            color: white;
            border: none;
            border-radius: 25px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .newsletter-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(255, 107, 107, 0.3);
        }

        /* Footer */
        .footer {
            background: #0f0f0f;
            color: white;
            padding: 3rem 2rem 1rem;
            text-align: center;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            margin-bottom: 1rem;
            color: #feca57;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #feca57;
        }

        .footer-bottom {
            border-top: 1px solid #333;
            padding-top: 1rem;
            color: #666;
        }

        /* Floating Elements */
        .floating-shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: floatAround 15s ease-in-out infinite;
        }

        .shape1 {
            width: 100px;
            height: 100px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .shape2 {
            width: 150px;
            height: 150px;
            top: 60%;
            right: 10%;
            animation-delay: 5s;
        }

        .shape3 {
            width: 80px;
            height: 80px;
            top: 80%;
            left: 20%;
            animation-delay: 10s;
        }

        @keyframes floatAround {
            0%, 100% {
                transform: translate(0, 0) rotate(0deg);
            }
            25% {
                transform: translate(30px, -30px) rotate(90deg);
            }
            50% {
                transform: translate(-20px, 20px) rotate(180deg);
            }
            75% {
                transform: translate(20px, -10px) rotate(270deg);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .newsletter-form {
                flex-direction: column;
                align-items: center;
            }

            .newsletter-input {
                width: 100%;
                max-width: 400px;
            }
        }

        /* Scroll Animation */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Pulse Animation for CTA */
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 107, 107, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(255, 107, 107, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(255, 107, 107, 0);
            }
        }

        .cta-button {
            animation: pulse 2s infinite;
        }

        /* Glassmorphism effect */
        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="nav">
            <div class="logo">LUXE</div>
            <ul class="nav-links">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#productos">Productos</a></li>
                <li><a href="#ofertas">Ofertas</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="inicio">
        <div class="floating-shape shape1"></div>
        <div class="floating-shape shape2"></div>
        <div class="floating-shape shape3"></div>
        
        <div class="hero-content">
            <h1>Moda que Inspira</h1>
            <p>Descubre nuestra colección exclusiva de prendas premium que reflejan tu estilo único y sofisticado</p>
            <a href="#productos" class="cta-button">Explorar Colección</a>
        </div>
    </section>

    <!-- Products Section -->
    <section class="products" id="productos">
        <h2 class="section-title fade-in">Productos Destacados</h2>
        
        <div class="products-grid">
            <div class="product-card fade-in">
                <div class="product-image"></div>
                <div class="product-info">
                    <h3 class="product-title">Camisa Premium</h3>
                    <div class="product-price">$89.99</div>
                    <p class="product-description">Elegante camisa de algodón 100% con corte moderno y acabados de lujo.</p>
                    <button class="add-to-cart">Agregar al Carrito</button>
                </div>
            </div>

            <div class="product-card fade-in">
                <div class="product-image"></div>
                <div class="product-info">
                    <h3 class="product-title">Vestido Elegante</h3>
                    <div class="product-price">$129.99</div>
                    <p class="product-description">Vestido sofisticado perfecto para ocasiones especiales y eventos formales.</p>
                    <button class="add-to-cart">Agregar al Carrito</button>
                </div>
            </div>

            <div class="product-card fade-in">
                <div class="product-image"></div>
                <div class="product-info">
                    <h3 class="product-title">Zapatos de Lujo</h3>
                    <div class="product-price">$199.99</div>
                    <p class="product-description">Calzado artesanal de cuero genuino con diseño contemporáneo y comodidad excepcional.</p>
                    <button class="add-to-cart">Agregar al Carrito</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="features-container">
            <h2 class="section-title">¿Por qué elegir LUXE?</h2>
            
            <div class="features-grid">
                <div class="feature-card glass fade-in">
                    <span class="feature-icon">🚚</span>
                    <h3 class="feature-title">Envío Gratis</h3>
                    <p>Entrega gratuita en pedidos superiores a $50. Recibe tus productos en 24-48 horas.</p>
                </div>

                <div class="feature-card glass fade-in">
                    <span class="feature-icon">🔄</span>
                    <h3 class="feature-title">Devoluciones Fáciles</h3>
                    <p>30 días para devolver cualquier producto. Proceso simple y sin complicaciones.</p>
                </div>

                <div class="feature-card glass fade-in">
                    <span class="feature-icon">⭐</span>
                    <h3 class="feature-title">Calidad Premium</h3>
                    <p>Materiales de la más alta calidad seleccionados cuidadosamente por nuestros expertos.</p>
                </div>

                <div class="feature-card glass fade-in">
                    <span class="feature-icon">🛡️</span>
                    <h3 class="feature-title">Compra Segura</h3>
                    <p>Transacciones 100% seguras con encriptación SSL y múltiples métodos de pago.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter">
        <div class="newsletter-container fade-in">
            <h2>Mantente al Día</h2>
            <p>Suscríbete a nuestro newsletter y recibe ofertas exclusivas, nuevos lanzamientos y tips de moda</p>
            
            <form class="newsletter-form">
                <input type="email" class="newsletter-input" placeholder="tu@email.com" required>
                <button type="submit" class="newsletter-button">Suscribirse</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>LUXE</h3>
                <p>Moda premium que define tu estilo único y sofisticado.</p>
            </div>
            
            <div class="footer-section">
                <h3>Enlaces Rápidos</h3>
                <ul class="footer-links">
                    <li><a href="#productos">Productos</a></li>
                    <li><a href="#ofertas">Ofertas</a></li>
                    <li><a href="#about">Nosotros</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Servicio al Cliente</h3>
                <ul class="footer-links">
                    <li><a href="#envios">Envíos</a></li>
                    <li><a href="#devoluciones">Devoluciones</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#soporte">Soporte</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Síguenos</h3>
                <ul class="footer-links">
                    <li><a href="#instagram">Instagram</a></li>
                    <li><a href="#facebook">Facebook</a></li>
                    <li><a href="#twitter">Twitter</a></li>
                    <li><a href="#pinterest">Pinterest</a></li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2025 LUXE. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Fade in animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // Header background change on scroll
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(102, 126, 234, 0.95)';
                header.style.backdropFilter = 'blur(20px)';
            } else {
                header.style.background = 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)';
                header.style.backdropFilter = 'blur(10px)';
            }
        });

        // Newsletter form handling
        document.querySelector('.newsletter-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('.newsletter-input').value;
            const button = this.querySelector('.newsletter-button');
            
            button.textContent = '¡Suscrito!';
            button.style.background = 'linear-gradient(45deg, #48bb78, #38a169)';
            
            setTimeout(() => {
                button.textContent = 'Suscribirse';
                button.style.background = 'linear-gradient(45deg, #ff6b6b, #feca57)';
                this.querySelector('.newsletter-input').value = '';
            }, 2000);
        });

        // Add to cart button animation
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function() {
                this.textContent = '¡Agregado!';
                this.style.background = 'linear-gradient(45deg, #48bb78, #38a169)';
                
                setTimeout(() => {
                    this.textContent = 'Agregar al Carrito';
                    this.style.background = 'linear-gradient(45deg, #667eea, #764ba2)';
                }, 1500);
            });
        });
    </script>
</body>
</html>