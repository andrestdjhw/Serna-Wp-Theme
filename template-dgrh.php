<?php
/**
 * Template Name: DGRH Template
 * Template Post Type: page
 */

get_header(); ?>

<div class="dgrh-page">
    <!-- hero section  -->
    <section class="relative py-24 overflow-hidden">
        <!-- Gradient Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-[#00903b] via-[#5ca54c] to-[#7dbb5c]"></div>
        
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-0 -left-4 w-72 h-72 bg-[#87cede] rounded-full mix-blend-multiply filter blur-xl animate-pulse"></div>
            <div class="absolute bottom-0 right-0 w-72 h-72 bg-[#87cede] rounded-full mix-blend-multiply filter blur-xl animate-pulse" style="animation-delay: 3s;"></div>
            <div class="absolute -bottom-8 left-20 w-72 h-72 bg-[#7dbb5c] rounded-full mix-blend-multiply filter blur-xl animate-pulse" style="animation-delay: 5s;"></div>
        </div>
        
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')"></div>
        
        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 bg-clip-text text-transparent bg-gradient-to-r from-white via-[#87cede] to-white animate-gradient">
                    Direccion General de Recursos Hidricos
                </h1>
                <p class="text-xl md:text-2xl text-white max-w-3xl mx-auto leading-relaxed opacity-90">
                    Gestión sostenible de los recursos hídricos para un futuro mejor
                </p>
                <div class="mt-8">
                    <div class="inline-flex items-center justify-center w-16 h-1 bg-[#87cede] rounded-full"></div>
                </div>
            </div>
        </div>
        
        <!-- Wave Background -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="w-full h-12 md:h-20">
                <path d="M0 0L60 10C120 20 240 40 360 46.7C480 53 600 47 720 43.3C840 40 960 40 1080 43.3C1200 47 1320 53 1380 56.7L1440 60V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0V0Z" fill="white"/>
            </svg>
        </div>
    </section>

    <!-- DGRH Story Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="lg:w-1/2 mb-12 lg:mb-0 lg:pr-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-[#00903b] mb-6"><span class="bg-clip-text text-transparent bg-gradient-to-r from-[#00903b] to-[#7dbb5c]">Nuestra Historia</span></h2>
                    <div class="h-1 w-20 bg-[#87cede] mb-8"></div>
                    <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                        La Direccion General de Recursos Hidricos (DGRH), fue creada por Decreto No. 716 del 28 de diciembre de 1978, es responsable de la gestion de los recursos hidricos, incluyendo su medicion, evaluacion y conservacion. 
                    </p>
                    <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                        <strong>Su Mision: </strong>Es normar, regular, administrar, planificar, conservar y controlar los recursos hidricos, mediante la formulacion de politicas en torno del recurso, recoleccion y analisis de informacion hidroclimatica para la toma de decisiones oportunas que aseguren la calidad, cantidad y perpetuidad del agua en el tiempo.
                    </p>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        Nuestra institución se ha convertido en un pilar fundamental para el desarrollo nacional, asegurando que los beneficios de nuestros recursos naturales lleguen a todos los ciudadanos.
                    </p>
                </div>
                <div class="lg:w-1/2">
                    <div class="bg-gradient-to-r from-[#00903b] to-[#7dbb5c] rounded-2xl overflow-hidden shadow-xl transform rotate-1 hover:rotate-0 transition-transform duration-300">
                        <img src="/wp-content/uploads/2025/06/DJI_0134.jpg" alt="Banner DGRH" class="w-full h-auto object-cover opacity-90 hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="py-16 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-2">
                <h2 class="text-3xl font-bold text-[#00903b]"><span class="bg-clip-text text-transparent bg-gradient-to-r from-[#00903b] to-[#7dbb5c]">Logros Recientes</span></h2>
                <div class="h-1 w-24 bg-[#87cede] mx-auto mt-2 mb-12 rounded-full"></div>
            </div>
            
            <!-- Timeline Container -->
            <div class="relative">
                <!-- Vertical Line -->
                <div class="absolute left-8 md:left-11 top-0 bottom-0 w-1 bg-gradient-to-b from-[#00903b] via-[#5ca54c] to-[#7dbb5c]"></div>
                
                <!-- Timeline Items Container -->
                <div class="space-y-12">
                    <!-- Timeline Item 1 -->
                    <div class="relative pl-20 md:pl-24">
                        <!-- Number Circle -->
                        <div class="absolute left-0 top-6 z-10">
                            <div class="w-16 h-16 bg-gradient-to-r from-[#00903b] to-[#7dbb5c] rounded-full flex items-center justify-center border-4 border-white shadow-md">
                                <span class="text-white text-2xl font-bold">1</span>
                            </div>
                        </div>
                        
                        <!-- Card Content -->
                        <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-transform hover:translate-y-[-5px]">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-[#00903b] mb-2">Cuatro (4) planes de acción Hídrica</h3>
                                <p class="text-sm text-[#5ca54c] mb-3">Enero 2025</p>
                                <p class="text-gray-600">
                                    De las cuencas priorizadas del corredor seco: Choluteca, Goascorán, Sampile, Nacaome.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Timeline Item 2 -->
                    <div class="relative pl-20 md:pl-24">
                        <!-- Number Circle -->
                        <div class="absolute left-0 top-6 z-10">
                            <div class="w-16 h-16 bg-gradient-to-r from-[#00903b] to-[#7dbb5c] rounded-full flex items-center justify-center border-4 border-white shadow-md">
                                <span class="text-white text-2xl font-bold">2</span>
                            </div>
                        </div>
                        
                        <!-- Card Content -->
                        <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-transform hover:translate-y-[-5px]">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-[#5ca54c] mb-2">Veinticinco Planes de acción Hídrica</h3>
                                <p class="text-sm text-[#5ca54c] mb-3">Marzo 2025</p>
                                <p class="text-gray-600">
                                    A las microcuencas que conforman la Cuenca Goascorán.
                                </p>
                                <div class="mt-4">
                                    <a href="https://corredorseco.ihcantabria.com/" class="text-[#5ca54c] inline-flex items-center hover:underline">
                                        ¡Ver aqui! 
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Timeline Item 3 -->
                    <div class="relative pl-20 md:pl-24">
                        <!-- Number Circle -->
                        <div class="absolute left-0 top-6 z-10">
                            <div class="w-16 h-16 bg-gradient-to-r from-[#00903b] to-[#7dbb5c] rounded-full flex items-center justify-center border-4 border-white shadow-md">
                                <span class="text-white text-2xl font-bold">3</span>
                            </div>
                        </div>
                        
                        <!-- Card Content -->
                        <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-transform hover:translate-y-[-5px]">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-[#7dbb5c] mb-2">Reconocidos 30 Consejos de Microcuencas y 5 Consejos de Subcuencas </h3>
                                <p class="text-sm text-[#5ca54c] mb-3">Mayo 2025</p>
                                <p class="text-gray-600">
                                    Para la gestión de la gobernanza hídrica en su ámbito territorial con resoluciones administrativas otorgadas por SERNA.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Timeline Item 4 -->
                    <div class="relative pl-20 md:pl-24">
                        <!-- Number Circle -->
                        <div class="absolute left-0 top-6 z-10">
                            <div class="w-16 h-16 bg-gradient-to-r from-[#00903b] to-[#7dbb5c] rounded-full flex items-center justify-center border-4 border-white shadow-md">
                                <span class="text-white text-2xl font-bold">4</span>
                            </div>
                        </div>
                        
                        <!-- Card Content -->
                        <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-transform hover:translate-y-[-5px]">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-[#00903b] mb-2">Fortalecimiento de la Gobernanza Hídrica</h3>
                                <p class="text-sm text-[#5ca54c] mb-3">Enero 2025</p>
                                <p class="text-gray-600">
                                    A través de la conformación de 119 Organismos de cuenca a nivel de cuenca, microcuenca y subcuenca.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Timeline Item 5 -->
                    <div class="relative pl-20 md:pl-24">
                        <!-- Number Circle -->
                        <div class="absolute left-0 top-6 z-10">
                            <div class="w-16 h-16 bg-gradient-to-r from-[#00903b] to-[#7dbb5c] rounded-full flex items-center justify-center border-4 border-white shadow-md">
                                <span class="text-white text-2xl font-bold">5</span>
                            </div>
                        </div>
                        
                        <!-- Card Content -->
                        <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-transform hover:translate-y-[-5px]">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-[#5ca54c] mb-2">110 estaciones Hidrometeorológicas</h3>
                                <p class="text-sm text-[#5ca54c] mb-3">Marzo 2025</p>
                                <p class="text-gray-600">
                                    Distribuidas en 16 cuencas en el país generando información para la toma de decisiones en alerta temprana.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Timeline Item 6 -->
                    <div class="relative pl-20 md:pl-24">
                        <!-- Number Circle -->
                        <div class="absolute left-0 top-6 z-10">
                            <div class="w-16 h-16 bg-gradient-to-r from-[#00903b] to-[#7dbb5c] rounded-full flex items-center justify-center border-4 border-white shadow-md">
                                <span class="text-white text-2xl font-bold">6</span>
                            </div>
                        </div>
                        
                        <!-- Card Content -->
                        <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-transform hover:translate-y-[-5px]">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-[#7dbb5c] mb-2">Plataforma Agua de Honduras:</h3>
                                <p class="text-sm text-[#5ca54c] mb-3">Mayo 2025</p>
                                <p class="text-gray-600">
                                    Plataforma de información sobre el recurso hídrico de fácil acceso y públicamente disponible en la web:
                                </p>
                                <p class="text-gray-600">
                                Ofrece gratuitamente información obtenida de análisis hidrológicos y los combina con información de escenarios sobre el clima presente y futuro, coberturas vegetales y demanda hídrica.
                                </p>
                                <div class="mt-4">
                                    <a href="https://aguadehonduras.gob.hn/" class="text-[#5ca54c] inline-flex items-center hover:underline">
                                        ¡Ver aqui! 
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Image Gallery Carousel Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-[#00903b] mb-6">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#00903b] to-[#7dbb5c]">Galería de Proyectos</span>
                </h2>
                <div class="h-1 w-24 bg-[#87cede] mx-auto mb-8 rounded-full"></div>
                <!-- <p class="text-lg text-gray-700 max-w-3xl mx-auto">
                    Descubre nuestras iniciativas y proyectos en la gestión sostenible de los recursos hídricos de Honduras
                </p> -->
            </div>

            <!-- Carousel Container -->
            <div class="relative">
                <div class="carousel-container overflow-hidden rounded-2xl shadow-xl">
                    <div class="carousel-track flex transition-transform duration-500 ease-in-out" id="carouselTrack">
                        <!-- Slide 1 -->
                        <div class="carousel-slide w-full flex-shrink-0 relative">
                            <div class="bg-gradient-to-r from-[#7dbb5c] to-[#87cede] h-96 md:h-[500px] flex items-center justify-center relative overflow-hidden">
                                <div class="absolute inset-0 bg-black opacity-20"></div>
                                <div class="relative z-10 text-center text-white px-8">
                                    <h3 class="text-2xl md:text-3xl font-bold mb-4">Estaciones Hidrometeorólogicas</h3>
                                    <p class="text-lg md:text-xl max-w-2xl mx-auto">
                                        Red de monitoreo distribuida en 16 cuencas para generar información crucial en la toma de decisiones
                                    </p>
                                </div>
                                <!-- Placeholder for actual image -->
                                <img src="/wp-content/uploads/2025/06/DJI_0125.jpg" alt="Estaciones Hidrometeorólogicas" class="absolute inset-0 w-full h-full object-cover opacity-80" >
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="carousel-slide w-full flex-shrink-0 relative">
                            <div class="bg-gradient-to-r from-[#7dbb5c] to-[#87cede] h-96 md:h-[500px] flex items-center justify-center relative overflow-hidden">
                                <div class="absolute inset-0 bg-black opacity-20"></div>
                                <div class="relative z-10 text-center text-white px-8">
                                    <h3 class="text-2xl md:text-3xl font-bold mb-4">Consejos de Cuencas</h3>
                                    <p class="text-lg md:text-xl max-w-2xl mx-auto">
                                        Fortalecimiento de la gobernanza hídrica a través de 119 organismos de cuenca
                                    </p>
                                </div>
                                <!-- Placeholder for actual image -->
                                <img src="/wp-content/uploads/2025/06/DJI_0138.jpg" alt="Consejos de Cuencas" class="absolute inset-0 w-full h-full object-cover opacity-80" >
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="carousel-slide w-full flex-shrink-0 relative">
                            <div class="bg-gradient-to-r from-[#7dbb5c] to-[#87cede] h-96 md:h-[500px] flex items-center justify-center relative overflow-hidden">
                                <div class="absolute inset-0 bg-black opacity-20"></div>
                                <div class="relative z-10 text-center text-white px-8">
                                    <h3 class="text-2xl md:text-3xl font-bold mb-4">Plataforma Agua de Honduras</h3>
                                    <p class="text-lg md:text-xl max-w-2xl mx-auto">
                                        Información hidrológica accesible y gratuita para toda la población hondureña
                                    </p>
                                </div>
                                <!-- Placeholder for actual image -->
                                <img src="/wp-content/uploads/2025/06/DJI_0141-2.jpg" alt="Plataforma Agua de Honduras" class="absolute inset-0 w-full h-full object-cover opacity-80" >
                            </div>
                        </div>

                        <!-- Slide 4 -->
                        <div class="carousel-slide w-full flex-shrink-0 relative">
                            <div class="bg-gradient-to-r from-[#7dbb5c] to-[#87cede] h-96 md:h-[500px] flex items-center justify-center relative overflow-hidden">
                                <div class="absolute inset-0 bg-black opacity-20"></div>
                                <!-- <div class="relative z-10 text-center text-white px-8">
                                    <h3 class="text-2xl md:text-3xl font-bold mb-4">Planes de Acción Hídrica</h3>
                                    <p class="text-lg md:text-xl max-w-2xl mx-auto">
                                        Estrategias específicas para las cuencas del corredor seco y microcuencas prioritarias
                                    </p>
                                </div> -->
                                <!-- Placeholder for actual image -->
                                <img src="/wp-content/uploads/2025/06/IMG_3993.jpg" alt="Planes de Acción Hídrica" class="absolute inset-0 w-full h-full object-cover opacity-80 z-40" >
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <button 
                    class="carousel-btn carousel-prev absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/90 hover:bg-white text-[#00903b] rounded-full p-3 shadow-lg hover:shadow-xl transition-all duration-300 z-20"
                    onclick="moveCarousel(-1)"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                
                <button 
                    class="carousel-btn carousel-next absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/90 hover:bg-white text-[#00903b] rounded-full p-3 shadow-lg hover:shadow-xl transition-all duration-300 z-20"
                    onclick="moveCarousel(1)"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>

                <!-- Dots Navigation -->
                <div class="flex justify-center mt-8 space-x-3">
                    <button class="carousel-dot w-3 h-3 rounded-full bg-[#00903b] transition-all duration-300" onclick="goToSlide(0)"></button>
                    <button class="carousel-dot w-3 h-3 rounded-full bg-gray-300 hover:bg-[#5ca54c] transition-all duration-300" onclick="goToSlide(1)"></button>
                    <button class="carousel-dot w-3 h-3 rounded-full bg-gray-300 hover:bg-[#5ca54c] transition-all duration-300" onclick="goToSlide(2)"></button>
                    <button class="carousel-dot w-3 h-3 rounded-full bg-gray-300 hover:bg-[#5ca54c] transition-all duration-300" onclick="goToSlide(3)"></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Still Have Questions Section -->
        <div class="max-w-4xl mx-auto mt-16 mb-16 bg-gradient-to-r from-[#00903b] to-[#7dbb5c] rounded-2xl p-8 md:p-12 text-white text-center">
            <h2 class="text-3xl font-bold mb-6">Sigue el enlace de Agua de Honduras</h2>
            <p class="text-xl mb-8">La plataforma Agua de Honduras es una iniciativa de innovacion que ofrece informacion confiable sobre el recurso hidrico de forma agil y gratuita.</p>
            <a 
                href="https://aguadehonduras.gob.hn/" 
                class="inline-block px-8 py-3 bg-white text-[#00903b] font-bold rounded-full hover:bg-[#87cede] hover:text-white transition-colors duration-300"
            >
                ¡Haz click aqui!
            </a>
        </div>

</div>

<style>
    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }
    
    .animate-gradient {
        background-size: 200% 200%;
        animation: gradient 5s ease infinite;
    }
    
    .shadow-custom {
        box-shadow: 0 10px 15px -3px rgba(135, 206, 222, 0.79), 0 4px 6px -2px rgba(135, 206, 222, 0.05);
    }

    /* Carousel Styles */
    .carousel-container {
        position: relative;
        max-width: 100%;
    }

    .carousel-track {
        width: 400%; /* 4 slides × 100% each */
    }

    .carousel-slide {
        width: 25%; /* Each slide takes 1/4 of track width */
    }

    .carousel-btn:hover {
        transform: translateY(-50%) scale(1.1);
    }

    .carousel-dot.active {
        background-color: #00903b !important;
        transform: scale(1.2);
    }

    @media (max-width: 768px) {
        .carousel-btn {
            display: none;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    let currentSlide = 0;
    const totalSlides = 4;
    const track = document.getElementById('carouselTrack');
    const dots = document.querySelectorAll('.carousel-dot');

    // Auto-play carousel
    setInterval(() => {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateCarousel();
    }, 5000);

    window.moveCarousel = function(direction) {
        currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
        updateCarousel();
    };

    window.goToSlide = function(slideIndex) {
        currentSlide = slideIndex;
        updateCarousel();
    };

    function updateCarousel() {
        const translateX = -currentSlide * 25; // 25% per slide
        track.style.transform = `translateX(${translateX}%)`;
        
        // Update dots
        dots.forEach((dot, index) => {
            if (index === currentSlide) {
                dot.classList.add('active');
                dot.style.backgroundColor = '#00903b';
            } else {
                dot.classList.remove('active');
                dot.style.backgroundColor = '#d1d5db';
            }
        });
    }

    // Touch/swipe support for mobile
    let startX = 0;
    let isDragging = false;

    track.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
        isDragging = true;
    });

    track.addEventListener('touchmove', (e) => {
        if (!isDragging) return;
        e.preventDefault();
    });

    track.addEventListener('touchend', (e) => {
        if (!isDragging) return;
        
        const endX = e.changedTouches[0].clientX;
        const diffX = startX - endX;
        
        if (Math.abs(diffX) > 50) { // Minimum swipe distance
            if (diffX > 0) {
                // Swipe left - next slide
                currentSlide = (currentSlide + 1) % totalSlides;
            } else {
                // Swipe right - previous slide  
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            }
            updateCarousel();
        }
        
        isDragging = false;
    });
});
</script>

<?php get_footer(); ?>