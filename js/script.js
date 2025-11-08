/**
 * Los Troncos Resto Bar - JavaScript Profesional e Interactivo
 * Funcionalidades avanzadas para una experiencia de usuario excepcional
 */

// ==================== UTILIDADES Y CONSTANTES ====================
const ANIMATION_DURATION = 300;
const CAROUSEL_INTERVAL = 5000;
const SCROLL_THRESHOLD = 100;

// ==================== CONFIGURACIÓN INICIAL ====================
document.addEventListener('DOMContentLoaded', function() {
    initializeAll();
});

function initializeAll() {
    initSmoothScroll();
    initNavigation();
    initCarousel();
    initGalleryInteractions();
    initScrollAnimations();
    initLazyLoading();
    initCounterAnimations();
    initServiceCards();
    initContactForms();
    initScrollToTop();
    initTypingEffect();
    initParallaxEffects();
    initTooltips();
    initMobileMenu();
    logWelcomeMessage();
}

// ==================== NAVEGACIÓN SUAVE ====================
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                const headerOffset = 80;
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });

                // Efecto de highlight en la sección
                targetElement.classList.add('section-highlight');
                setTimeout(() => {
                    targetElement.classList.remove('section-highlight');
                }, 2000);
            }
        });
    });
}

// ==================== NAVEGACIÓN STICKY CON EFECTOS ====================
function initNavigation() {
    const nav = document.querySelector('nav');
    const header = document.querySelector('header');
    let lastScroll = 0;

    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;
        
        // Efecto de transparencia en el nav
        if (currentScroll > SCROLL_THRESHOLD) {
            nav.classList.add('nav-scrolled');
        } else {
            nav.classList.remove('nav-scrolled');
        }

        // Auto-hide navigation en scroll down (móvil)
        if (window.innerWidth <= 768) {
            if (currentScroll > lastScroll && currentScroll > 200) {
                nav.style.transform = 'translateY(-100%)';
            } else {
                nav.style.transform = 'translateY(0)';
            }
        }
        
        lastScroll = currentScroll;

        // Active section highlighting
        highlightActiveSection();
    });
}

function highlightActiveSection() {
    const sections = document.querySelectorAll('.section[id]');
    const navLinks = document.querySelectorAll('nav a[href^="#"]');
    
    let currentSection = '';
    
    sections.forEach(section => {
        const sectionTop = section.offsetTop - 100;
        const sectionHeight = section.offsetHeight;
        
        if (window.pageYOffset >= sectionTop && 
            window.pageYOffset < sectionTop + sectionHeight) {
            currentSection = section.getAttribute('id');
        }
    });
    
    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${currentSection}`) {
            link.classList.add('active');
        }
    });
}

// ==================== CARRUSEL AVANZADO ====================
function initCarousel() {
    const carouselImages = [
        "imagenes/IMG-20250920-WA0023.jpg",
        "imagenes/IMG-20250920-WA0040.jpg",
        "imagenes/IMG-20250920-WA0031.jpg",
        "imagenes/IMG-20250920-WA0032.jpg",
        "imagenes/IMG-20250920-WA0035.jpg",
        "imagenes/IMG-20250920-WA0042.jpg"
    ];
    
    const carouselAltTexts = [
        "Ambiente nocturno de Los Troncos Resto Bar",
        "Vista interior del restaurante",
        "Decoración rústica con toques modernos",
        "Mesa preparada para una velada especial",
        "Ambiente cálido para disfrutar en familia",
        "Detalle de la decoración del local"
    ];
    
    let currentImageIndex = 0;
    const carouselImgElement = document.getElementById('carousel-img');
    let carouselInterval;
    let isUserInteracting = false;

    if (!carouselImgElement) return;

    // Precargar imágenes
    preloadImages(carouselImages);

    function updateCarouselImage(index, direction = 'next') {
        const indicators = document.querySelectorAll('.carousel-indicator');
        
        // Animación de salida
        carouselImgElement.classList.remove('active');
        carouselImgElement.classList.add(direction === 'next' ? 'slide-out-left' : 'slide-out-right');
        
        setTimeout(() => {
            currentImageIndex = index;
            carouselImgElement.style.backgroundImage = `url(${carouselImages[currentImageIndex]})`;
            carouselImgElement.setAttribute('alt', carouselAltTexts[currentImageIndex]);
            
            // Animación de entrada
            carouselImgElement.classList.remove('slide-out-left', 'slide-out-right');
            carouselImgElement.classList.add(direction === 'next' ? 'slide-in-right' : 'slide-in-left');
            carouselImgElement.classList.add('active');
            
            // Actualizar indicadores
            indicators.forEach((ind, i) => {
                ind.classList.toggle('active', i === currentImageIndex);
            });
            
            setTimeout(() => {
                carouselImgElement.classList.remove('slide-in-right', 'slide-in-left');
            }, 600);
        }, 300);
    }

    function changeCarouselImage(direction = 'next') {
        const nextIndex = direction === 'next' 
            ? (currentImageIndex + 1) % carouselImages.length
            : (currentImageIndex - 1 + carouselImages.length) % carouselImages.length;
        updateCarouselImage(nextIndex, direction);
    }

    function startCarouselInterval() {
        if (!isUserInteracting) {
            carouselInterval = setInterval(() => changeCarouselImage('next'), CAROUSEL_INTERVAL);
        }
    }

    function stopCarouselInterval() {
        clearInterval(carouselInterval);
    }

    // Controles globales
    window.nextImage = function() {
        isUserInteracting = true;
        stopCarouselInterval();
        changeCarouselImage('next');
        setTimeout(() => {
            isUserInteracting = false;
            startCarouselInterval();
        }, 3000);
    };

    window.prevImage = function() {
        isUserInteracting = true;
        stopCarouselInterval();
        changeCarouselImage('prev');
        setTimeout(() => {
            isUserInteracting = false;
            startCarouselInterval();
        }, 3000);
    };

    window.goToImage = function(index) {
        isUserInteracting = true;
        stopCarouselInterval();
        const direction = index > currentImageIndex ? 'next' : 'prev';
        updateCarouselImage(index, direction);
        setTimeout(() => {
            isUserInteracting = false;
            startCarouselInterval();
        }, 3000);
    };

    // Touch events para swipe en móvil
    let touchStartX = 0;
    let touchEndX = 0;

    const carouselContainer = document.querySelector('.carousel-container');
    if (carouselContainer) {
        carouselContainer.addEventListener('touchstart', e => {
            touchStartX = e.changedTouches[0].screenX;
        });

        carouselContainer.addEventListener('touchend', e => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        });

        carouselContainer.addEventListener('mouseenter', () => {
            isUserInteracting = true;
            stopCarouselInterval();
        });
        
        carouselContainer.addEventListener('mouseleave', () => {
            isUserInteracting = false;
            startCarouselInterval();
        });
    }

    function handleSwipe() {
        const swipeThreshold = 50;
        if (touchStartX - touchEndX > swipeThreshold) {
            window.nextImage();
        } else if (touchEndX - touchStartX > swipeThreshold) {
            window.prevImage();
        }
    }

    // Keyboard navigation
    document.addEventListener('keydown', e => {
        if (e.key === 'ArrowRight') window.nextImage();
        if (e.key === 'ArrowLeft') window.prevImage();
    });

    startCarouselInterval();
}

function preloadImages(imageArray) {
    imageArray.forEach(src => {
        const img = new Image();
        img.src = src;
    });
}

// ==================== GALERÍA INTERACTIVA ====================
function initGalleryInteractions() {
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    galleryItems.forEach(item => {
        const img = item.querySelector('img');
        
        // Efecto de zoom en hover
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
        });
        
        item.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });

        // Click para ver imagen completa (lightbox)
        img.addEventListener('click', function() {
            createLightbox(this.src, this.alt);
        });

        // Añadir efecto de carga
        img.addEventListener('load', function() {
            this.classList.add('img-loaded');
        });
    });
}

function createLightbox(imageSrc, imageAlt) {
    // Crear overlay
    const lightbox = document.createElement('div');
    lightbox.className = 'lightbox';
    lightbox.innerHTML = `
        <div class="lightbox-content">
            <span class="lightbox-close">&times;</span>
            <img src="${imageSrc}" alt="${imageAlt}" class="lightbox-image">
            <div class="lightbox-caption">${imageAlt}</div>
        </div>
    `;
    
    document.body.appendChild(lightbox);
    document.body.style.overflow = 'hidden';
    
    // Animación de entrada
    setTimeout(() => lightbox.classList.add('active'), 10);
    
    // Cerrar lightbox
    const closeBtn = lightbox.querySelector('.lightbox-close');
    closeBtn.addEventListener('click', () => closeLightbox(lightbox));
    
    lightbox.addEventListener('click', function(e) {
        if (e.target === this) closeLightbox(lightbox);
    });
    
    // ESC para cerrar
    document.addEventListener('keydown', function escHandler(e) {
        if (e.key === 'Escape') {
            closeLightbox(lightbox);
            document.removeEventListener('keydown', escHandler);
        }
    });
}

function closeLightbox(lightbox) {
    lightbox.classList.remove('active');
    setTimeout(() => {
        lightbox.remove();
        document.body.style.overflow = '';
    }, 300);
}

// ==================== ANIMACIONES AL SCROLL ====================
function initScrollAnimations() {
    const observerOptions = {
        threshold: 0.15,
        rootMargin: '0px 0px -100px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                
                // Animar elementos hijos con delay
                const children = entry.target.querySelectorAll('.gallery-item, .service-card, .feature, .about-item');
                children.forEach((child, index) => {
                    setTimeout(() => {
                        child.classList.add('animate-in');
                    }, index * 100);
                });
            }
        });
    }, observerOptions);
    
    // Observar todas las secciones
    document.querySelectorAll('.section').forEach(section => {
        observer.observe(section);
    });
    
    // Observar items individuales
    document.querySelectorAll('.gallery-item, .service-card, .about-item, .feature').forEach(item => {
        observer.observe(item);
    });
}

// ==================== LAZY LOADING DE IMÁGENES ====================
function initLazyLoading() {
    const lazyImages = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.add('lazy-loaded');
                observer.unobserve(img);
            }
        });
    });
    
    lazyImages.forEach(img => imageObserver.observe(img));
}

// ==================== ANIMACIÓN DE CONTADORES ====================
function initCounterAnimations() {
    const counters = document.querySelectorAll('.stat-number[data-target]');
    
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
                animateCounter(entry.target);
                entry.target.classList.add('counted');
            }
        });
    }, { threshold: 0.5 });
    
    counters.forEach(counter => counterObserver.observe(counter));
}

function animateCounter(element) {
    const target = parseInt(element.getAttribute('data-target'));
    const duration = 2000;
    const increment = target / (duration / 16);
    let current = 0;
    
    const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
            element.textContent = target + '+';
            clearInterval(timer);
        } else {
            element.textContent = Math.floor(current) + '+';
        }
    }, 16);
}

// ==================== TARJETAS DE SERVICIOS INTERACTIVAS ====================
function initServiceCards() {
    const serviceCards = document.querySelectorAll('.service-card');
    
    serviceCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-15px) scale(1.03)';
            
            // Efecto ripple
            const ripple = document.createElement('div');
            ripple.className = 'ripple-effect';
            this.appendChild(ripple);
            
            setTimeout(() => ripple.remove(), 600);
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });

        // Efecto tilt 3D
        card.addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const rotateX = (y - centerY) / 20;
            const rotateY = (centerX - x) / 20;
            
            this.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-15px)`;
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateY(0)';
        });
    });
}

// ==================== FORMULARIOS DE CONTACTO ====================
function initContactForms() {
    const whatsappButtons = document.querySelectorAll('.whatsapp-btn, .whatsapp-btn-main, .btn-primary');
    
    whatsappButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            // Efecto de pulso
            this.classList.add('button-pulse');
            setTimeout(() => this.classList.remove('button-pulse'), 600);
            
            // Analytics (si está configurado)
            if (typeof gtag !== 'undefined') {
                gtag('event', 'whatsapp_click', {
                    'event_category': 'contact',
                    'event_label': this.textContent.trim()
                });
            }
        });
    });
}

// ==================== BOTÓN SCROLL TO TOP ====================
function initScrollToTop() {
    // Crear botón
    const scrollBtn = document.createElement('button');
    scrollBtn.className = 'scroll-to-top';
    scrollBtn.innerHTML = '<i class="fas fa-arrow-up"></i>';
    scrollBtn.setAttribute('aria-label', 'Volver arriba');
    document.body.appendChild(scrollBtn);
    
    // Mostrar/ocultar según scroll
    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            scrollBtn.classList.add('visible');
        } else {
            scrollBtn.classList.remove('visible');
        }
    });
    
    // Funcionalidad
    scrollBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// ==================== EFECTO DE ESCRITURA ====================
function initTypingEffect() {
    const typingElements = document.querySelectorAll('[data-typing]');
    
    typingElements.forEach(element => {
        const text = element.textContent;
        const speed = parseInt(element.getAttribute('data-typing-speed')) || 50;
        element.textContent = '';
        element.style.opacity = '1';
        
        let index = 0;
        const typeWriter = () => {
            if (index < text.length) {
                element.textContent += text.charAt(index);
                index++;
                setTimeout(typeWriter, speed);
            }
        };
        
        // Iniciar cuando sea visible
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    typeWriter();
                    observer.unobserve(entry.target);
                }
            });
        });
        
        observer.observe(element);
    });
}

// ==================== EFECTOS PARALLAX ====================
function initParallaxEffects() {
    const parallaxElements = document.querySelectorAll('[data-parallax]');
    
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        
        parallaxElements.forEach(element => {
            const speed = element.getAttribute('data-parallax') || 0.5;
            const yPos = -(scrolled * speed);
            element.style.transform = `translateY(${yPos}px)`;
        });
    });
}

// ==================== TOOLTIPS PERSONALIZADOS ====================
function initTooltips() {
    const tooltipElements = document.querySelectorAll('[data-tooltip]');
    
    tooltipElements.forEach(element => {
        element.addEventListener('mouseenter', function(e) {
            const tooltipText = this.getAttribute('data-tooltip');
            const tooltip = document.createElement('div');
            tooltip.className = 'custom-tooltip';
            tooltip.textContent = tooltipText;
            document.body.appendChild(tooltip);
            
            const rect = this.getBoundingClientRect();
            tooltip.style.left = rect.left + (rect.width / 2) - (tooltip.offsetWidth / 2) + 'px';
            tooltip.style.top = rect.top - tooltip.offsetHeight - 10 + 'px';
            
            setTimeout(() => tooltip.classList.add('visible'), 10);
            
            this.addEventListener('mouseleave', function handler() {
                tooltip.classList.remove('visible');
                setTimeout(() => tooltip.remove(), 300);
                this.removeEventListener('mouseleave', handler);
            });
        });
    });
}

// ==================== MENÚ MÓVIL ====================
function initMobileMenu() {
    const nav = document.querySelector('nav');
    const navLinks = nav.querySelectorAll('a');
    
    // Cerrar menú al hacer click en un link (en móvil)
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth <= 768) {
                // Smooth close animation
                nav.style.transition = 'transform 0.3s ease';
            }
        });
    });
    
    // Touch gesture para abrir/cerrar menú
    let touchStartY = 0;
    let touchEndY = 0;
    
    document.addEventListener('touchstart', e => {
        touchStartY = e.changedTouches[0].screenY;
    });
    
    document.addEventListener('touchend', e => {
        touchEndY = e.changedTouches[0].screenY;
        handleMenuSwipe();
    });
    
    function handleMenuSwipe() {
        if (window.pageYOffset === 0 && touchEndY > touchStartY + 50) {
            // Swipe down desde arriba - refresh gesture natural
        }
    }
}

// ==================== MENSAJE DE BIENVENIDA ====================
function logWelcomeMessage() {
    console.log('%c🍽️ Los Troncos Resto Bar', 'color: #5C7C8A; font-size: 24px; font-weight: bold;');
    console.log('%c✨ Sitio web diseñado con amor y pasión por la gastronomía', 'color: #A86443; font-size: 14px;');
    console.log('%c📱 Contáctanos: https://wa.me/5493743611895', 'color: #25D366; font-size: 12px;');
}

// ==================== PERFORMANCE MONITORING ====================
window.addEventListener('load', () => {
    // Medir performance
    const perfData = performance.timing;
    const pageLoadTime = perfData.loadEventEnd - perfData.navigationStart;
    
    if (pageLoadTime < 3000) {
        console.log('%c⚡ Carga rápida: ' + (pageLoadTime / 1000).toFixed(2) + 's', 'color: green; font-weight: bold;');
    }
    
    // Añadir clase de 'loaded' al body
    document.body.classList.add('page-loaded');
});

// ==================== MANEJO DE ERRORES ====================
window.addEventListener('error', (e) => {
    console.error('Error detectado:', e.error);
});

// ==================== EXPORT PARA TESTING ====================
if (typeof module !== 'undefined' && module.exports) {
    module.exports = {
        initSmoothScroll,
        initCarousel,
        initGalleryInteractions,
        animateCounter
    };
}
