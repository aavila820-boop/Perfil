/* public/css/detalle.css */

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    color: #333;
    background: #f8f9fa;
}

/* Header igual que landing */
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

/* Breadcrumb */
.breadcrumb {
    background: white;
    padding: 1rem 0;
    margin-top: 80px;
    border-bottom: 1px solid #eee;
}

.breadcrumb-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
}

.breadcrumb-nav {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: #666;
}

.breadcrumb-nav a {
    color: #667eea;
    text-decoration: none;
    transition: color 0.3s ease;
}

.breadcrumb-nav a:hover {
    color: #764ba2;
}

.breadcrumb-separator {
    color: #ccc;
}

/* Main Product Section */
.product-detail {
    max-width: 1200px;
    margin: 2rem auto;
    padding: 0 2rem;
}

.product-container {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 0;
    min-height: 600px;
}

/* Product Images */
.product-images {
    position: relative;
    background: linear-gradient(135deg, #ff9a9e, #fecfef);
    overflow: hidden;
}

.main-image {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 8rem;
    color: rgba(255, 255, 255, 0.8);
    position: relative;
    min-height: 600px;
}

.image-gallery {
    position: absolute;
    bottom: 1rem;
    left: 1rem;
    right: 1rem;
    display: flex;
    gap: 0.5rem;
    justify-content: center;
}

.gallery-thumb {
    width: 60px;
    height: 60px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    cursor: pointer;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
    border: 2px solid transparent;
}

.gallery-thumb:hover,
.gallery-thumb.active {
    background: rgba(255, 255, 255, 0.3);
    border-color: white;
    transform: scale(1.1);
}

/* Product Info */
.product-info {
    padding: 3rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.product-badge {
    display: inline-block;
    background: linear-gradient(45deg, #ff6b6b, #feca57);
    color: white;
    padding: 0.3rem 1rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: bold;
    margin-bottom: 1rem;
    width: fit-content;
}

.product-title {
    font-size: 2.5rem;
    font-weight: bold;
    margin-bottom: 1rem;
    background: linear-gradient(45deg, #667eea, #764ba2);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.product-price {
    font-size: 2rem;
    color: #ff6b6b;
    font-weight: bold;
    margin-bottom: 1rem;
}

.price-original {
    text-decoration: line-through;
    color: #999;
    font-size: 1.2rem;
    margin-left: 1rem;
}

.product-rating {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 1.5rem;
}

.stars {
    color: #feca57;
    font-size: 1.2rem;
}

.rating-text {
    color: #666;
    font-size: 0.9rem;
}

.product-description {
    font-size: 1.1rem;
    color: #666;
    margin-bottom: 2rem;
    line-height: 1.8;
}

/* Product Options */
.product-options {
    margin-bottom: 2rem;
}

.option-group {
    margin-bottom: 1.5rem;
}

.option-label {
    font-weight: bold;
    margin-bottom: 0.5rem;
    display: block;
    color: #333;
}

.size-options,
.color-options {
    display: flex;
    gap: 0.5rem;
    flex-wrap: wrap;
}

.size-option,
.color-option {
    padding: 0.5rem 1rem;
    border: 2px solid #eee;
    border-radius: 10px;
    background: white;
    cursor: pointer;
    transition: all 0.3s ease;
    font-weight: 500;
}

.size-option:hover,
.size-option.selected {
    border-color: #667eea;
    background: linear-gradient(45deg, #667eea, #764ba2);
    color: white;
    transform: translateY(-2px);
}

.color-option {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    position: relative;
}

.color-option.red { background: #ff6b6b; }
.color-option.blue { background: #4ecdc4; }
.color-option.black { background: #2c3e50; }
.color-option.white { background: #ecf0f1; }

.color-option.selected::after {
    content: '✓';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-weight: bold;
}

.color-option.white.selected::after {
    color: #333;
}

/* Quantity Selector */
.quantity-selector {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 2rem;
}

.quantity-label {
    font-weight: bold;
}

.quantity-controls {
    display: flex;
    align-items: center;
    border: 2px solid #eee;
    border-radius: 10px;
    overflow: hidden;
    background: white;
}

.quantity-btn {
    background: #f8f9fa;
    border: none;
    padding: 0.5rem 1rem;
    cursor: pointer;
    font-size: 1.2rem;
    font-weight: bold;
    transition: all 0.3s ease;
}

.quantity-btn:hover {
    background: #667eea;
    color: white;
}

.quantity-input {
    border: none;
    padding: 0.5rem;
    text-align: center;
    width: 60px;
    font-weight: bold;
    background: white;
}

/* Action Buttons */
.action-buttons {
    display: flex;
    gap: 1rem;
    margin-bottom: 2rem;
}

.btn-primary {
    flex: 2;
    padding: 1rem 2rem;
    background: linear-gradient(45deg, #ff6b6b, #feca57);
    color: white;
    border: none;
    border-radius: 15px;
    font-weight: bold;
    font-size: 1.1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 10px 30px rgba(255, 107, 107, 0.3);
}

.btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 40px rgba(255, 107, 107, 0.4);
}

.btn-secondary {
    flex: 1;
    padding: 1rem;
    background: transparent;
    color: #667eea;
    border: 2px solid #667eea;
    border-radius: 15px;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease;
}

.btn-secondary:hover {
    background: #667eea;
    color: white;
    transform: translateY(-3px);
}

/* Product Features */
.product-features {
    list-style: none;
    margin-bottom: 2rem;
}

.product-features li {
    padding: 0.5rem 0;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: #666;
}

.product-features li::before {
    content: '✓';
    color: #48bb78;
    font-weight: bold;
    width: 20px;
}

/* Tabs Section */
.product-tabs {
    margin-top: 3rem;
    background: white;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.tab-navigation {
    display: flex;
    border-bottom: 1px solid #eee;
    background: #f8f9fa;
}

.tab-btn {
    flex: 1;
    padding: 1rem 2rem;
    background: transparent;
    border: none;
    cursor: pointer;
    font-weight: bold;
    transition: all 0.3s ease;
    color: #666;
}

.tab-btn.active,
.tab-btn:hover {
    background: linear-gradient(45deg, #667eea, #764ba2);
    color: white;
}

.tab-content {
    padding: 2rem;
    display: none;
}

.tab-content.active {
    display: block;
    animation: fadeInTab 0.3s ease;
}

@keyframes fadeInTab {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Specifications Table */
.specs-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 1rem;
}

.specs-table th,
.specs-table td {
    padding: 1rem;
    text-align: left;
    border-bottom: 1px solid #eee;
}

.specs-table th {
    background: #f8f9fa;
    font-weight: bold;
    color: #333;
}

.specs-table tr:hover {
    background: #f8f9fa;
}

/* Reviews */
.review-item {
    border-bottom: 1px solid #eee;
    padding: 1.5rem 0;
}

.review-item:last-child {
    border-bottom: none;
}

.review-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 0.5rem;
}

.reviewer-name {
    font-weight: bold;
    color: #333;
}

.review-date {
    color: #999;
    font-size: 0.9rem;
}

.review-stars {
    color: #feca57;
    margin-bottom: 0.5rem;
}

.review-text {
    color: #666;
    line-height: 1.6;
}

/* Related Products */
.related-products {
    margin-top: 4rem;
    padding: 3rem 2rem;
    background: white;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.related-title {
    text-align: center;
    font-size: 2rem;
    margin-bottom: 2rem;
    background: linear-gradient(45deg, #667eea, #764ba2);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.related-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
}

.related-item {
    background: #f8f9fa;
    border-radius: 15px;
    padding: 1.5rem;
    text-align: center;
    transition: all 0.3s ease;
    cursor: pointer;
}

.related-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
    background: white;
}

.related-image {
    width: 80px;
    height: 80px;
    background: linear-gradient(45deg, #ff9a9e, #fecfef);
    border-radius: 50%;
    margin: 0 auto 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
}

.related-name {
    font-weight: bold;
    margin-bottom: 0.5rem;
    color: #333;
}

.related-price {
    color: #ff6b6b;
    font-weight: bold;
}

/* Floating Add to Cart */
.floating-cart {
    position: fixed;
    bottom: 2rem;
    right: 2rem;
    background: linear-gradient(45deg, #ff6b6b, #feca57);
    color: white;
    border: none;
    border-radius: 50px;
    padding: 1rem 2rem;
    font-weight: bold;
    cursor: pointer;
    box-shadow: 0 10px 30px rgba(255, 107, 107, 0.4);
    transition: all 0.3s ease;
    z-index: 999;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.floating-cart:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(255, 107, 107, 0.6);
}

/* Product Zoom Effect */
.zoom-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.9);
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 9999;
    cursor: pointer;
}

.zoom-overlay.active {
    display: flex;
    animation: fadeIn 0.3s ease;
}

.zoomed-image {
    max-width: 90%;
    max-height: 90%;
    border-radius: 15px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

/* Quantity in Stock */
.stock-info {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 1rem;
    padding: 0.5rem 1rem;
    background: #e8f5e8;
    border-radius: 10px;
    width: fit-content;
}

.stock-indicator {
    width: 10px;
    height: 10px;
    background: #48bb78;
    border-radius: 50%;
    animation: pulse-stock 2s infinite;
}

@keyframes pulse-stock {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.5; }
}

.stock-text {
    color: #48bb78;
    font-weight: bold;
    font-size: 0.9rem;
}

/* Responsive Design */
@media (max-width: 768px) {
    .product-container {
        grid-template-columns: 1fr;
        gap: 0;
    }
    
    .main-image {
        min-height: 400px;
        font-size: 6rem;
    }
    
    .product-info {
        padding: 2rem;
    }
    
    .product-title {
        font-size: 2rem;
    }
    
    .action-buttons {
        flex-direction: column;
    }
    
    .floating-cart {
        bottom: 1rem;
        right: 1rem;
        left: 1rem;
        border-radius: 15px;
        justify-content: center;
    }
    
    .nav-links {
        display: none;
    }
    
    .breadcrumb-container {
        padding: 0 1rem;
    }
    
    .product-detail {
        padding: 0 1rem;
    }
}

@media (max-width: 480px) {
    .size-options,
    .color-options {
        justify-content: center;
    }
    
    .quantity-selector {
        justify-content: center;
    }
    
    .product-tabs {
        margin: 2rem 0;
    }
    
    .tab-navigation {
        flex-wrap: wrap;
    }
    
    .tab-btn {
        min-width: 120px;
    }
}

/* Loading States */
.loading {
    opacity: 0.6;
    pointer-events: none;
    position: relative;
}

.loading::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 20px;
    height: 20px;
    border: 2px solid #667eea;
    border-top: 2px solid transparent;
    border-radius: 50%;
    animation: spin 1s linear infinite;
    transform: translate(-50%, -50%);
}

@keyframes spin {
    0% { transform: translate(-50%, -50%) rotate(0deg); }
    100% { transform: translate(-50%, -50%) rotate(360deg); }
}

/* Success Messages */
.success-message {
    background: linear-gradient(45deg, #48bb78, #38a169);
    color: white;
    padding: 1rem;
    border-radius: 10px;
    margin-bottom: 1rem;
    text-align: center;
    animation: slideDown 0.5s ease;
}

@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Product Gallery Carousel */
.image-carousel {
    position: relative;
    width: 100%;
    height: 100%;
}

.carousel-container {
    width: 100%;
    height: 100%;
    overflow: hidden;
    position: relative;
}

.carousel-slide {
    width: 100%;
    height: 100%;
    display: none;
    align-items: center;
    justify-content: center;
    font-size: 8rem;
    color: rgba(255, 255, 255, 0.8);
}

.carousel-slide.active {
    display: flex;
}

.carousel-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255, 255, 255, 0.2);
    border: none;
    color: white;
    font-size: 1.5rem;
    padding: 1rem;
    border-radius: 50%;
    cursor: pointer;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}

.carousel-nav:hover {
    background: rgba(255, 255, 255, 0.3);
    transform: translateY(-50%) scale(1.1);
}

.carousel-prev {
    left: 1rem;
}

.carousel-next {
    right: 1rem;
}

/* Product Tags */
.product-tags {
    display: flex;
    gap: 0.5rem;
    flex-wrap: wrap;
    margin-bottom: 1.5rem;
}

.product-tag {
    background: rgba(102, 126, 234, 0.1);
    color: #667eea;
    padding: 0.3rem 0.8rem;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 500;
}

/* Wishlist Button */
.wishlist-btn {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: rgba(255, 255, 255, 0.2);
    border: none;
    color: white;
    font-size: 1.5rem;
    padding: 0.8rem;
    border-radius: 50%;
    cursor: pointer;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}

.wishlist-btn:hover,
.wishlist-btn.active {
    background: #ff6b6b;
    color: white;
    transform: scale(1.1);
}

/* Social Share */
.social-share {
    display: flex;
    gap: 0.5rem;
    margin-top: 1rem;
}

.share-btn {
    background: #f8f9fa;
    border: 1px solid #eee;
    color: #666;
    padding: 0.5rem;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 1.2rem;
}

.share-btn:hover {
    background: #667eea;
    color: white;
    transform: translateY(-2px);
}