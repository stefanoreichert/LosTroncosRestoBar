<?php
include 'include/header.php';
?>

<section id="inicio" class="section welcome-section" data-parallax="0.3">
    <div class="welcome-content">
        <h2>Bienvenidos</h2>
        <div class="welcome-grid">
            <div class="welcome-text">
                <div class="location-badge" data-tooltip="Ubicados en Puerto Rico, Misiones">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Puerto Rico, Misiones</span>
                </div>
                <div class="welcome-description">
                    <p><span class="highlight">Los Troncos Resto Bar</span> te invita a un viaje culinario donde la calidad y la pasión por la gastronomía se fusionan en un ambiente cálido y sofisticado. Cada plato es una obra de arte, preparada con ingredientes frescos y el toque único de nuestros chefs.</p>
                    <p>Disfruta de momentos memorables, desde almuerzos ejecutivos hasta cenas románticas, acompañados de nuestra selecta carta de bebidas.</p>
                </div>
                <div class="welcome-features">
                    <div class="feature" data-tooltip="Platos elaborados por chefs expertos">
                        <i class="fas fa-utensils"></i>
                        <span>Cocina Gourmet</span>
                    </div>
                    <div class="feature" data-tooltip="Ambiente acogedor y elegante">
                        <i class="fas fa-glass-cheers"></i>
                        <span>Lugar agradable</span>
                    </div>
                    <div class="feature" data-tooltip="Horario: Jueves a Domingo 20:00-00:00">
                        <i class="fas fa-clock"></i>
                        <span>Abierto de jueves a domingo</span>
                    </div>
                </div>
            </div>
            <div class="welcome-quote">
                <div class="quote-decoration">
                    <i class="fas fa-quote-left quote-icon"></i>
                </div>
                <blockquote class="professional-quote">
                    <span class="quote-text">Donde cada plato cuenta una historia y cada momento se convierte en un recuerdo especial</span>
                    <cite class="quote-author">Los Troncos Resto Bar</cite>
                </blockquote>
                <div class="quote-decoration">
                    <i class="fas fa-quote-right quote-icon"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="galeria-ambiente" class="section">
    <h2>Nuestro Ambiente</h2>
    <p>Un espacio diseñado para tu confort y disfrute, ideal para cualquier ocasión.</p>
    <div class="carousel-container" aria-label="Galería de imágenes del ambiente">
        <div id="carousel-img" 
             style="background-image: url('imagenes/IMAGENES_USADAS/IMG-20250920-WA0023.jpg');" 
             alt="Ambiente nocturno de Los Troncos Resto Bar" 
             class="carousel-image active"
             role="img"></div>
        
        <!-- Controles de navegación -->
        <button class="carousel-controls carousel-prev" 
                onclick="prevImage()" 
                aria-label="Imagen anterior"
                data-tooltip="Anterior">❮</button>
        <button class="carousel-controls carousel-next" 
                onclick="nextImage()" 
                aria-label="Siguiente imagen"
                data-tooltip="Siguiente">❯</button>
        
        <!-- Indicadores -->
        <div class="carousel-indicators" role="navigation" aria-label="Indicadores de imagen">
            <div class="carousel-indicator active" 
                 onclick="goToImage(0)" 
                 aria-label="Ir a imagen 1"
                 data-tooltip="Imagen 1"></div>
            <div class="carousel-indicator" 
                 onclick="goToImage(1)" 
                 aria-label="Ir a imagen 2"
                 data-tooltip="Imagen 2"></div>
            <div class="carousel-indicator" 
                 onclick="goToImage(2)" 
                 aria-label="Ir a imagen 3"
                 data-tooltip="Imagen 3"></div>
            <div class="carousel-indicator" 
                 onclick="goToImage(3)" 
                 aria-label="Ir a imagen 4"
                 data-tooltip="Imagen 4"></div>
            <div class="carousel-indicator" 
                 onclick="goToImage(4)" 
                 aria-label="Ir a imagen 5"
                 data-tooltip="Imagen 5"></div>
            <div class="carousel-indicator" 
                 onclick="goToImage(5)" 
                 aria-label="Ir a imagen 6"
                 data-tooltip="Imagen 6"></div>
        </div>
    </div>
    <p>Te invitamos a sumergirte en la atmósfera única de Los Troncos. Nuestro diseño interior combina lo rústico con lo moderno, creando un lugar perfecto para relajarse y compartir.</p>
</section>

<section id="platos-destacados" class="section">
    <h2>Nuestras Delicias Destacadas</h2>
    <p>Descubre una selección de nuestros platos más populares y visualmente atractivos, una invitación a saborear la calidad.</p>
    <div class="gallery">
        <div class="gallery-item" data-category="pizza">
            <img src="imagenes/IMAGENES_USADAS/IMG-20250905-WA0012.jpg" 
                 alt="Pizza Palo Rosa"
                 loading="lazy"
                 data-tooltip="Click para ver en grande">
            <h3>Pizza Palo Rosa</h3>
            <p>Nuestra pizza insignia, con una combinación única de ingredientes frescos, aceitunas, tomates cherry y un toque de pesto.</p>
        </div>
        <div class="gallery-item" data-category="carnes">
            <img src="imagenes/IMAGENES_USADAS/IMG-20250905-WA0014.jpg" 
                 alt="Lomo al Champiñón"
                 loading="lazy"
                 data-tooltip="Click para ver en grande">
            <h3>Lomo al Champiñón</h3>
            <p>Tiernos medallones de lomo en una rica salsa de champiñones, cebollita y crema, servidos con puré de calabaza.</p>
        </div>
        <div class="gallery-item" data-category="milanesas">
            <img src="imagenes/IMAGENES_USADAS/IMG-20250905-WA0011.jpg" 
                 alt="Milanesa napolitana"
                 loading="lazy"
                 data-tooltip="Click para ver en grande">
            <h3>Milanesa Napolitana</h3>
            <p>Milanesa napolitana es un plato clásico de la gastronomía rioplatense con raíces italianas, carne jugosa y crujiente, cubierta con jamón, tomate fresco y queso fundido gratinado al punto justo.</p>
        </div>
        <div class="gallery-item" data-category="milanesas">
            <img src="imagenes/IMAGENES_USADAS/IMG-20250905-WA0027.jpg" 
                 alt="Milanesa a la suiza"
                 loading="lazy"
                 data-tooltip="Click para ver en grande">
            <h3>Milanesa a la Suiza</h3>
            <p>Milanesa a la suizaes un plato clásico de la gastronomía rioplatense con raíces europeas, carne jugosa y crujiente, cubierta con salsa blanca, jamón y queso gratinado al punto justo.</p>
        </div>
        <div class="gallery-item" data-category="milanesas">
            <img src="imagenes/IMAGENES_USADAS/IMG-20250905-WA0026.jpg" 
                 alt="Milanesa a caballo"
                 loading="lazy"
                 data-tooltip="Click para ver en grande">
            <h3>Milanesa a Caballo</h3>
            <p>Clásica milanesa de ternera, crujiente y jugosa, coronada con un huevo frito, acompañada de guarnición a elección y un delicado toque de hierbas frescas que realza su sabor.</p>
        </div>
        <div class="gallery-item" data-category="carnes">
            <img src="imagenes/IMAGENES_USADAS/IMG-20250905-WA0032.jpg" 
                 alt="Bife de chorizo"
                 loading="lazy"
                 data-tooltip="Click para ver en grande">
            <h3>Bife de Chorizo</h3>
            <p>Bife de chorizo, jugoso y tierno, acompañado de papas aplastadas doradas y crujientes por fuera, con un toque de hierbas que realza su sabor.</p>
        </div>
        <div class="gallery-item" data-category="empanadas">
            <img src="imagenes/IMAGENES_USADAS/Imagen de WhatsApp 2025-09-14 a las 21.13.01_73d88657.jpg" 
                 alt="Empanadas Arabes"
                 loading="lazy"
                 data-tooltip="Click para ver en grande">
            <h3>Empanadas Árabes</h3>
            <p>Deliciosas empanadas árabes rellenas de carne especial, sazonadas con cebolla, morrón y un toque de limón.</p>
        </div>
        <div class="gallery-item" data-category="milanesas">
            <img src="imagenes/IMAGENES_USADAS/IMG-20250518-WA0016.jpg" 
                 alt="Milanesa Los Troncos"
                 loading="lazy"
                 data-tooltip="Click para ver en grande">
            <h3>Milanesa Los Troncos</h3>
            <p>Carne de ternera dorada, cubierta con mozzarella y cheddar fundidos, coronada con panceta crocante y huevo frito, acompañada de guarnición a elección.</p>
        </div>
            <div class="gallery-item" data-category="sandwiches">
            <img src="imagenes/IMAGENES_USADAS/IMG-20250905-WA0028.jpg" 
                 alt="Sandwich Ibirá"
                 loading="lazy"
                 data-tooltip="Click para ver en grande">
            <h3>Sandwich Ibirá</h3>
            <p>Pan árabe relleno de carne desmechada al vino tinto, cebolla y morrones salteados, con suave salsa de ajo y especias.</p>
        </div>
        <div class="gallery-item" data-category="pizza">
            <img src="imagenes/IMAGENES_USADAS/IMG-20250905-WA0019.jpg" 
                 alt="Pizza kurupi"
                 loading="lazy"
                 data-tooltip="Click para ver en grande">
            <h3>Pizza Kurupi</h3>
            <p>Deliciosa pizza con masa artesanal, salsa de tomate, queso mozzarella con carne de ternera picada a cuchillo y cebolla caramelizada.</p>
        </div>
        <div class="gallery-item" data-category="pizza">
            <img src="imagenes/IMAGENES_USADAS/IMG-20250905-WA0017.jpg" 
                 alt="Pizza Araticú"
                 loading="lazy"
                 data-tooltip="Click para ver en grande">
            <h3>Pizza Araticú</h3>
            <p>Exquisita pizza con masa artesanal, rellena de queso mozzarella, queso provolone, jamón, morrones asados y cubierta de cebolla, oliva y orégano.</p>
        </div>
        <div class="gallery-item" data-category="pizza">
            <img src="imagenes/IMAGENES_USADAS/Imagen de WhatsApp 2025-09-14 a las 22.01.29_07d60744.jpg" 
                 alt="Hambur Pizza"
                 loading="lazy"
                 data-tooltip="Click para ver en grande">
            <h3>Hambur Pizza</h3>
            <p>Deliciosa pizza con masa artesanal, salsa de tomate, queso mozarella, con cuatro medallones de carne, tomate y huevo frito .</p>
        </div>
                <div class="gallery-item" data-category="sandwiches">
            <img src="imagenes/IMAGENES_USADAS/IMG-20250905-WA0016.jpg" 
                 alt="Sandwich Loro negro"
                 loading="lazy"
                 data-tooltip="Click para ver en grande">
            <h3>Sandwich Loro negro</h3>
            <p>Delicioso sándwich con pan artesanal, con una milanesa de carne de la casa, lechuga, tomate, huevo frito, jamón y queso. Con guarnición.</p>
        </div>
                <div class="gallery-item" data-category="empanadas">
            <img src="imagenes/IMAGENES_USADAS/IMG-20250905-WA0023.jpg" 
                 alt="Empanadas capresse"
                 loading="lazy"
                 data-tooltip="Click para ver en grande">
            <h3>Empanadas Capresse</h3>
            <p>Deliciosas empanadas rellenas de mozzarella, tomate y albahaca, acompañadas de salsa de pesto.</p>
        </div>
                <div class="gallery-item" data-category="hamburguesas">
            <img src="imagenes/IMAGENES_USADAS/IMG-20250920-WA0015.jpg" 
                 alt="Hamburguesa Tacuarembó"
                 loading="lazy"
                 data-tooltip="Click para ver en grande">
            <h3>Hamburguesa Tacuarembó</h3>
            <p>Hamburguesa con doble medallón de carne, con cebolla caramelizada, queso cheddar y bacon, acompañada de papas fritas.</p>
        </div>
                <div class="gallery-item" data-category="hamburguesas">
            <img src="imagenes/IMAGENES_USADAS/IMG-20250920-WA0017.jpg" 
                 alt="Hamburguesa Cedro Misionero"
                 loading="lazy"
                 data-tooltip="Click para ver en grande">
            <h3>Hamburguesa Cedro Misionero</h3>
            <p>Hamburguesa con medallón de carne jamón, doble queso, panceta, lechuga, tomates cherry caramelizados y huevo frito. Acompañada de guarnición.</p>
        </div>
                <div class="gallery-item" data-category="otros">
            <img src="imagenes/IMAGENES_USADAS/IMG-20250518-WA0016.jpg" 
                 alt="Patel de papa"
                 loading="lazy"
                 data-tooltip="Click para ver en grande">
            <h3>Pastel de papa</h3>
            <p>Pastel de Papa Casero, Suave puré de papas cremoso, relleno con carne especiada y gratinado al horno, en una combinación cálida y reconfortante de sabor casero con un toque gourmet.</p>
        </div>
                <div class="gallery-item" data-category="empanadas">
            <img src="imagenes/IMAGENES_USADAS/Imagen de WhatsApp 2025-09-20 a las 12.19.15_8cf4c72e.jpg" 
                 alt="Empanadas de verduras"
                 loading="lazy"
                 data-tooltip="Click para ver en grande">
            <h3>Empanadas de verduras</h3>
            <p>Deliciosas empanadas de verduras y queso.</p>
        </div>
    </div>
</section>

<!-- Nueva sección de servicios -->
<section id="servicios" class="section services-section">
    <div class="services-header">
        <h2>Nuestros Servicios</h2>
        <p>Experiencias gastronómicas únicas adaptadas a tus necesidades</p>
    </div>
    
    <!-- Logo del restaurante -->
    <div class="services-logo">
        <div class="logo-container">
            <h1>Los Troncos</h1>
            <p>Resto Bar</p>
            <div class="logo-decoracion">
                <i class="fas fa-utensils"></i>
            </div>
        </div>
    </div>
    
    <div class="services-grid">
        <div class="service-card">
            <div class="service-icon">
                <i class="fas fa-utensils"></i>
            </div>
            <h3>Servicios de Catering</h3>
            <p>Llevamos la calidad de Los Troncos a tu evento especial. Servicio completo para cumpleaños, reuniones, celebraciones familiares, etc.</p>
            <div class="service-features">
                <span>• Menús personalizados</span>
                <span>• Servicio a domicilio</span>
                <span>• Personal especializado</span>
            </div>
        </div>
        
        <div class="service-card">
            <div class="service-icon">
                <i class="fas fa-pizza-slice"></i>
            </div>
            <h3>Rodizio de Pizza</h3>
            <p>Disfruta de una experiencia única con nuestro rodizio de pizzas artesanales. Variedades ilimitadas con ingredientes frescos y masa casera preparada diariamente.</p>
            <div class="service-features">
                <span>• Pizzas artesanales ilimitadas</span>
                <span>• Ingredientes premium</span>
                <span>• Masa casera fresca</span>
            </div>
        </div>
        
        <div class="service-card">
            <div class="service-icon">
                <i class="fas fa-hamburger"></i>
            </div>
            <h3>Rodizio de Empanadas</h3>
            <p>Degusta la tradición argentina con nuestro rodizio de empanadas. Variedad de sabores clásicos de la casa, todas horneadas y fritas con recetas familiares auténticas.</p>
            <div class="service-features">
                <span>• Empanadas ilimitadas</span>
                <span>• Sabores tradicionales y gourmet</span>
                <span>• Recetas familiares</span>
            </div>
        </div>
        
        <div class="service-card">
            <div class="service-icon">
                <i class="fas fa-bread-slice"></i>
            </div>
            <h3>Rodizio de Sandwiches</h3>
            <p>Experimenta nuestro rodizio de sandwiches. Combinaciones únicas con panes artesanales, carnes premium y ingredientes seleccionados especialmente.</p>
            <div class="service-features">
                <span>• Sandwiches gourmet ilimitados</span>
                <span>• Panes artesanales</span>
                <span>• Carnes premium</span>
            </div>
        </div>
    </div>
    
    <div class="services-cta">
        <a href="https://wa.me/5493743611895?text=Hola! Me interesa información sobre...." class="whatsapp-btn-main" target="_blank">
            <i class="fab fa-whatsapp"></i>
            Contactar por WhatsApp
        </a>
    </div>
</section>

<!-- Nueva sección de Carta/Menú -->
<section id="nuestra-carta" class="section menu-section">
    <div class="menu-header">
        <h2>Nuestra Carta</h2>
        <p>Descubre nuestra completa selección de platos, bebidas y especialidades</p>
    </div>
    
    <div class="menu-content">
        <div class="menu-info">
            <div class="menu-icon">
                <i class="fas fa-book-open"></i>
            </div>
            <h3>Explora Nuestro Menú Completo</h3>
            <p>Descarga o visualiza nuestra carta completa con todas nuestras especialidades, pizzas artesanales, carnes premium, bebidas y mucho más.</p>
            
            <div class="menu-features">
                <div class="menu-feature">
                    <i class="fas fa-pizza-slice"></i>
                    <span>Pizzas Artesanales</span>
                </div>
                <div class="menu-feature">
                    <i class="fas fa-hamburger"></i>
                    <span>Hamburguesas Gourmet</span>
                </div>
                <div class="menu-feature">
                    <i class="fas fa-drumstick-bite"></i>
                    <span>Carnes Premium</span>
                </div>
                <div class="menu-feature">
                    <i class="fas fa-cocktail"></i>
                    <span>Bebidas & Tragos</span>
                </div>
            </div>
        </div>
        
        <div class="menu-pdf-container">
            <div class="pdf-preview">
                <iframe src="documentos/carta.pdf" 
                        width="100%" 
                        height="600" 
                        frameborder="0"
                        title="Carta de Los Troncos Resto Bar"
                        loading="lazy">
                </iframe>
            </div>
            
            <div class="menu-actions">
                <a href="documentos/carta.pdf" 
                   class="btn-menu btn-view" 
                   target="_blank"
                   data-tooltip="Ver en pantalla completa">
                    <i class="fas fa-expand"></i>
                    Ver Carta Completa
                </a>
                <a href="documentos/carta.pdf" 
                   class="btn-menu btn-download" 
                   download="Carta_Los_Troncos_RestoBar.pdf"
                   data-tooltip="Descargar en tu dispositivo">
                    <i class="fas fa-download"></i>
                    Descargar PDF
                </a>
            </div>
        </div>
    </div>
    
    <div class="menu-note">
        <i class="fas fa-info-circle"></i>
        <p>Los precios y disponibilidad pueden variar. Para información actualizada, consultá con nuestro personal.</p>
    </div>
</section>

<section id="Sobre-Nosotros" class="section about-section">
    <div class="about-hero">
        <div class="about-hero-content">
            <h2>Nuestra Historia</h2>
            <p class="about-intro">Más de dos décadas creando experiencias gastronómicas únicas en el corazón de Puerto Rico, Misiones.</p>
        </div>
        <div class="about-hero-image">
            <img src="imagenes/IMAGENES_USADAS/IMG-20250920-WA0031.jpg" alt="Interior de Los Troncos Resto Bar">
        </div>
    </div>
    
    <div class="about-grid">
        <div class="about-content">
            <div class="about-item">
                <div class="about-icon-wrapper">
                    <i class="fas fa-heart"></i>
                    <div class="icon-pulse"></div>
                </div>
                <div class="about-text">
                    <h3>Nuestra Pasión</h3>
                    <p>En Los Troncos Resto Bar, nos apasiona ofrecer una experiencia gastronómica única. Nuestro equipo está dedicado a seleccionar los mejores ingredientes y crear platos que deleiten todos los sentidos.</p>
                    <div class="about-highlight">Ingredientes Premium</div>
                </div>
            </div>
            <div class="about-item">
                <div class="about-icon-wrapper">
                    <i class="fas fa-star"></i>
                    <div class="icon-pulse"></div>
                </div>
                <div class="about-text">
                    <h3>Experiencia y Calidad</h3>
                    <p>Con más de 20 años de experiencia en el rubro, te garantizamos una experiencia culinaria excepcional. Cada plato es preparado con dedicación y maestría.</p>
                    <div class="about-highlight">Tradición Culinaria</div>
                </div>
            </div>
            <div class="about-item">
                <div class="about-icon-wrapper">
                    <i class="fas fa-users"></i>
                    <div class="icon-pulse"></div>
                </div>
                <div class="about-text">
                    <h3>Atención Personalizada</h3>
                    <p>Desde nuestro ambiente acogedor hasta la atención personalizada, cada detalle está pensado para que disfrutes de una velada inolvidable junto a tus seres queridos.</p>
                    <div class="about-highlight">Servicio Excepcional</div>
                </div>
            </div>
        </div>
        
        <div class="about-values">
            <h3>Nuestros Valores</h3>
            <div class="values-grid">
                <div class="value-item">
                    <span class="value-emoji">🌟</span>
                    <span class="value-text">Excelencia</span>
                </div>
                <div class="value-item">
                    <span class="value-emoji">🤝</span>
                    <span class="value-text">Compromiso</span>
                </div>
                <div class="value-item">
                    <span class="value-emoji">💫</span>
                    <span class="value-text">Innovación</span>
                </div>
                <div class="value-item">
                    <span class="value-emoji">🏠</span>
                    <span class="value-text">Calidez</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="section">
    <div style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;">
  <iframe 
    src="https://www.google.com/maps/embed?pb=!4v1757124712289!6m8!1m7!1sn9FWSzuXCifhc0sHCf1EDQ!2m2!1d-26.81954272288686!2d-55.02713959320141!3f295.40597963125384!4f-14.06306939271245!5f0.7820865974627469" 
    style="position:absolute;top:0;left:0;width:100%;height:100%;border:0;" 
    allowfullscreen="" 
    loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>

</section>

<?php
include 'include/footer.php';
?>
