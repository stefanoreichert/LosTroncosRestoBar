</div> <!-- cierra container -->
<footer>
    <p>&copy; 2024 Los Troncos Resto Bar. Todos los derechos reservados.</p>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const accordionHeaders = document.querySelectorAll('.accordion-header');

    accordionHeaders.forEach(header => {
        header.addEventListener('click', function() {
            const currentContent = this.nextElementSibling;
            accordionHeaders.forEach(otherHeader => {
                const otherContent = otherHeader.nextElementSibling;
                if (otherContent !== currentContent && otherContent.classList.contains('show')) {
                    otherContent.classList.remove('show');
                    otherHeader.classList.remove('active');
                }
            });
            this.classList.toggle('active');
            currentContent.classList.toggle('show');
        });
    });

    const carouselImages = [
    "imagenes/IMG-20250905-WA0005.jpg"
    ,"imagenes/IMG-20250905-WA0008.jpg"
    ,"imagenes/IMG-20250905-WA0010.jpg"
    ,"imagenes/IMG-20250905-WA0006.jpg"
    ,"imagenes/IMG-20250905-WA0007.jpg"
    ,"imagenes/IMG-20250905-WA0013.jpg"];
    const carouselAltTexts = [
        "Exterior de Los Troncos Resto Bar de noche",
        "Detalle de luces colgantes Edison en Los Troncos",
        "Decoración de cava de vinos en la pared de Los Troncos"
    ];
    let currentImageIndex = 0;
    const carouselImgElement = document.getElementById('carousel-img');

    function changeCarouselImage() {
        carouselImgElement.classList.remove('active');
        setTimeout(() => {
            currentImageIndex = (currentImageIndex + 1) % carouselImages.length;
            carouselImgElement.src = carouselImages[currentImageIndex];
            carouselImgElement.alt = carouselAltTexts[currentImageIndex];
            carouselImgElement.classList.add('active');
        }, 500);
    }

    setInterval(changeCarouselImage, 4000);
});
</script>

<!-- Contenedor flotante de redes -->
<!-- Contenedor flotante de redes -->
<div style="position:fixed;bottom:20px;right:20px;display:flex;flex-direction:column;gap:15px;z-index:1000;">
        
    <div class="social-icons">

        <!-- WhatsApp -->
        <a href="https://wa.me/5493743611895" target="_blank" style="display:block;">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                <g>
                    <circle cx="25" cy="25" r="25" fill="#25D366"/>
                    <path d="M39.8,23.4A14.64,14.64,0,0,1,25.1,38A15.25,15.25,0,0,1,18,36.2L9.8,38.8,12.5,31a14.84,14.84,0,0,1-2.1-7.5,14.7,14.7,0,0,1,29.4-.1ZM25.1,11.2A12.38,12.38,0,0,0,12.7,23.5a12,12,0,0,0,2.4,7.2l-1.5,4.6,4.8-1.5A12.44,12.44,0,0,0,37.6,23.5,12.53,12.53,0,0,0,25.1,11.2Zm7.4,15.6a3.22,3.22,0,0,0-.7-.4l-2.5-1.2c-.3-.1-.6-.2-.8.2a8.54,8.54,0,0,1-1.1,1.4.59.59,0,0,1-.8.1,11,11,0,0,1-2.9-1.8,9.88,9.88,0,0,1-2-2.5.46.46,0,0,1,.2-.7,2.65,2.65,0,0,0,.5-.6c.2-.2.2-.4.4-.6a.64.64,0,0,0,0-.6c-.1-.2-.8-1.9-1.1-2.7s-.6-.6-.8-.6h-.7a1.85,1.85,0,0,0-1,.4,4.16,4.16,0,0,0-1.3,3,6.45,6.45,0,0,0,1.5,3.7c.2.2,2.5,4,6.2,5.4s3.7,1,4.3.9a3.74,3.74,0,0,0,2.4-1.7A2.82,2.82,0,0,0,32.5,26.8Z" fill="#fff"/>
                </g>
            </svg>
        </a>
        
        <!-- Instagram -->
        <a href="https://www.instagram.com/lostroncos_restobar" target="_blank" style="display:block;">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                <defs>
                    <linearGradient id="instaGradient" x1="0" y1="0" x2="1" y2="1">
                        <stop offset="0%" stop-color="#feda75"/>
                        <stop offset="50%" stop-color="#d62976"/>
                        <stop offset="100%" stop-color="#4f5bd5"/>
                    </linearGradient>
                </defs>
                <circle cx="25" cy="25" r="25" fill="url(#instaGradient)"/>
                <path d="M25 13.5c3.8 0 4.2 0 5.7.1 1.4.1 2.1.3 2.6.4.7.3 1.1.6 1.6 1.1s.9 1 1.1 1.6c.2.5.4 1.2.4 2.6.1 1.5.1 1.9.1 5.7s0 4.2-.1 5.7c-.1 1.4-.3 2.1-.4 2.6-.3.7-.6 1.1-1.1 1.6s-1 .9-1.6 1.1c-.5.2-1.2.4-2.6.4-1.5.1-1.9.1-5.7.1s-4.2 0-5.7-.1c-1.4-.1-2.1-.3-2.6-.4-.7-.3-1.1-.6-1.6-1.1s-.9-1-1.1-1.6c-.2-.5-.4-1.2-.4-2.6-.1-1.5-.1-1.9-.1-5.7s0-4.2.1-5.7c.1-1.4.3-2.1.4-2.6.3-.7.6-1.1 1.1-1.6s1-.9 1.6-1.1c.5-.2 1.2-.4 2.6-.4 1.5-.1 1.9-.1 5.7-.1zM25 11c-3.9 0-4.4 0-5.9.1-1.5.1-2.5.3-3.4.6-.9.4-1.7.9-2.4 1.6-.8.8-1.3 1.5-1.6 2.4-.3.9-.5 1.9-.6 3.4-.1 1.5-.1 2-.1 5.9s0 4.4.1 5.9c.1 1.5.3 2.5.6 3.4.4.9.9 1.7 1.6 2.4.8.8 1.5 1.3 2.4 1.6.9.3 1.9.5 3.4.6 1.5.1 2 .1 5.9.1s4.4 0 5.9-.1c1.5-.1 2.5-.3 3.4-.6.9-.4 1.7-.9 2.4-1.6.8-.8 1.3-1.5 1.6-2.4.3-.9.5-1.9.6-3.4.1-1.5.1-2 .1-5.9s0-4.4-.1-5.9c-.1-1.5-.3-2.5-.6-3.4-.4-.9-.9-1.7-1.6-2.4-.8-.8-1.5-1.3-2.4-1.6-.9-.3-1.9-.5-3.4-.6-1.5-.1-2-.1-5.9-.1z" fill="#fff"/>
                <path d="M25 18.9c-3.4 0-6.1 2.7-6.1 6.1s2.7 6.1 6.1 6.1 6.1-2.7 6.1-6.1-2.7-6.1-6.1-6.1zm0 10c-2.2 0-3.9-1.8-3.9-3.9s1.8-3.9 3.9-3.9 3.9 1.8 3.9 3.9-1.8 3.9-3.9 3.9z" fill="#fff"/>
                <circle cx="31.4" cy="18.6" r="1.4" fill="#fff"/>
            </svg>
        </a>
        
        <!-- Facebook -->
        <a href="https://www.facebook.com/lostroncos.restobar.2025?locale=es_LA" target="_blank" style="display:block;">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                <circle cx="25" cy="25" r="25" fill="#1877F2"/>
                <path d="M30.9 16.8v-3.7c0-1.5.6-2.3 2.5-2.3h2.1V5.6h-3.4c-4.8 0-7.9 2.9-7.9 8.2v3h-3.6v5.1h3.6v14.7h6.9V21.9h4.6l.6-5.1h-5.2z" fill="#fff"/>
            </svg>
        </a>
    </div>

</body>
</html>
