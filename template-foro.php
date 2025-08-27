<?php
/**
 * Template Name: FORO Noticias Template
 * Template Post Type: page
 */

get_header(); ?>

<div class="foro-news-page">
    <!-- Hero Section -->
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
                    Noticias 
                </h1>
                <p class="text-xl md:text-2xl text-white max-w-3xl mx-auto leading-relaxed opacity-90">
                    Mantente informado sobre las últimas actividades, logros y noticias de la <strong class="mt-4 text-2xl">Secretaria de Recursos Naturales y Ambiente</strong>
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

    <!-- Latest News Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-[#00903b] mb-6">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#00903b] to-[#7dbb5c]">Últimas Noticias</span>
                </h2>
                <!-- <div class="h-1 w-24 bg-[#87cede] mx-auto mb-6 rounded-full"></div>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Mantente al día con las últimas actividades y logros de DECA
                </p> -->
            </div>
            
            <!-- News Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- News Card 1 -->
                <article class="news-card">
                    <div class="news-image-container">
                        <img src="/wp-content/uploads/2025/08/NoticiaLago2.jpeg" alt="Noticia 1" class="news-image">
                        <div class="news-date-badge">
                            <span class="news-date-day">23</span>
                            <span class="news-date-month">ABR</span>
                        </div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-category">Inversion</span>
                            <span class="news-separator">•</span>
                            <span class="news-date-full">23 de Abril, 2025</span>
                        </div>
                        <h3 class="news-title">
                            80$ millones de dolares, aprobados para la recuperacion del lago de Yojoa
                        </h3>
                        <p class="news-excerpt">
                            En SERNA asumimos el compromiso de preservar el Lago de Yojoa para siempre. Siguiendo el mandato de la Presidenta <strong>Xiomara Castro</strong>, trabajamos por un Lago de Yojoa limpio, saludable y libre de concesiones contaminantes.
                        </p>
                        <p class="news-excerpt">
                            Gracias al financiamiento de $80 millones aprobado por el Congreso Nacional de Honduras, construiremos infraestructura resiliente, restauraremos las montañas que lo rodean y protegeremos el corredor biológico más visitado del país.
                        </p>
                        <a href="#" class="news-read-more">
                            Leer más
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- News Card 2 -->
                <article class="news-card">
                    <div class="news-image-container">
                        <img src="/wp-content/uploads/2025/08/Logro.jpeg" alt="Noticia 2" class="news-image">
                        <div class="news-date-badge">
                            <span class="news-date-day">07</span>
                            <span class="news-date-month">JUL</span>
                        </div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-category">Logro</span>
                            <span class="news-separator">•</span>
                            <span class="news-date-full">07 de Julio, 2025</span>
                        </div>
                        <h3 class="news-title">
                            Presidenta <strong>Xiomara Castro</strong> posiciona a Honduras en la cima del financiamiento verde.
                        </h3>
                        <p class="news-excerpt">
                            Con el liderazgo de la Presidenta de Honduras <strong>Xiomara Castro</strong> y Coalición de Países con Bosques Tropicales, el financiamiento para defender nuestras reservas naturales será una realidad.
                        </p>
                        <p class="news-excerpt">
                            En la IV Cumbre de Desarrollo Sostenible (Sevilla, 2025), fuimos reconocidos por nuestras acciones concretas en bonos verdes y justicia climática.
                            La agenda ambiental es compromiso en marcha.
                        </p>
                        <a href="https://share.google/Mqnneqva39gvDLXU4" target="_blank" rel="noopener noreferrer" class="news-read-more">
                            Leer más
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- News Card 3 -->
                <article class="news-card">
                    <div class="news-image-container">
                        <img src="/wp-content/uploads/2025/06/DECA.jpg" alt="Noticia 3" class="news-image">
                        <div class="news-date-badge">
                            <span class="news-date-day">28</span>
                            <span class="news-date-month">JUN</span>
                        </div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-category">Tecnología</span>
                            <span class="news-separator">•</span>
                            <span class="news-date-full">28 de Junio, 2025</span>
                        </div>
                        <h3 class="news-title">
                            Lanzamiento de Sistema Digital de Licenciamiento
                        </h3>
                        <p class="news-excerpt">
                            DECA presenta su nueva plataforma digital que facilitará el proceso de solicitud y seguimiento de licencias ambientales, promoviendo la transparencia y eficiencia.
                        </p>
                        <a href="#" class="news-read-more">
                            Leer más
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- News Card 4 -->
                <article class="news-card">
                    <div class="news-image-container">
                        <img src="/wp-content/uploads/2025/06/DECA.jpg" alt="Noticia 4" class="news-image">
                        <div class="news-date-badge">
                            <span class="news-date-day">20</span>
                            <span class="news-date-month">JUN</span>
                        </div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-category">Educación</span>
                            <span class="news-separator">•</span>
                            <span class="news-date-full">20 de Junio, 2025</span>
                        </div>
                        <h3 class="news-title">
                            Programa de Pasantías Universitarias 2025
                        </h3>
                        <p class="news-excerpt">
                            DECA abre sus puertas a estudiantes universitarios del área ambiental para fortalecer sus conocimientos prácticos a través del programa de pasantías profesionales.
                        </p>
                        <a href="#" class="news-read-more">
                            Leer más
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- News Card 5 -->
                <article class="news-card">
                    <div class="news-image-container">
                        <img src="/wp-content/uploads/2025/06/DECA.jpg" alt="Noticia 5" class="news-image">
                        <div class="news-date-badge">
                            <span class="news-date-day">15</span>
                            <span class="news-date-month">JUN</span>
                        </div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-category">Auditorías</span>
                            <span class="news-separator">•</span>
                            <span class="news-date-full">15 de Junio, 2025</span>
                        </div>
                        <h3 class="news-title">
                            Resultado de Auditorías Ambientales del Segundo Trimestre
                        </h3>
                        <p class="news-excerpt">
                            DECA presenta los resultados de las auditorías ambientales realizadas durante el segundo trimestre, evidenciando mejoras significativas en el cumplimiento ambiental.
                        </p>
                        <a href="#" class="news-read-more">
                            Leer más
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- News Card 6 -->
                <article class="news-card">
                    <div class="news-image-container">
                        <img src="/wp-content/uploads/2025/06/DECA.jpg" alt="Noticia 6" class="news-image">
                        <div class="news-date-badge">
                            <span class="news-date-day">08</span>
                            <span class="news-date-month">JUN</span>
                        </div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-category">Cooperación</span>
                            <span class="news-separator">•</span>
                            <span class="news-date-full">08 de Junio, 2025</span>
                        </div>
                        <h3 class="news-title">
                            Convenio de Cooperación con Universidades Nacionales
                        </h3>
                        <p class="news-excerpt">
                            DECA firma convenios de cooperación con las principales universidades del país para fortalecer la investigación ambiental y el desarrollo sostenible.
                        </p>
                        <a href="#" class="news-read-more">
                            Leer más
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </article>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-12">
                <button class="inline-flex items-center px-8 py-3 bg-gradient-to-r from-[#00903b] to-[#7dbb5c] text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                    <span>Cargar Más Noticias</span>
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-[#00903b] to-[#7dbb5c] rounded-2xl overflow-hidden shadow-xl">
                <div class="px-8 py-12 text-center text-white">
                    <h2 class="text-3xl font-bold mb-4">
                        Mantente Informado
                    </h2>
                    <p class="text-xl mb-8 opacity-90">
                        Suscríbete a nuestro boletín para recibir las últimas noticias y actualizaciones de SERNA
                    </p>
                    <div class="max-w-md mx-auto">
                        <div class="flex flex-col sm:flex-row gap-4">
                            <input type="email" placeholder="Tu correo electrónico" class="flex-1 px-4 py-3 rounded-full bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-[#87cede]">
                            <button class="px-6 py-3 bg-[#ee3725] text-white font-semibold rounded-full hover:bg-[#87cede] hover:text-white transition-colors duration-300">
                                Suscribirse
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

    /* News Card Styles */
    .news-card {
        background: white;
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        transition: all 0.3s ease;
        transform: translateY(0);
        border: 2px solid transparent;
    }

    .news-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        border-color: rgba(135, 206, 222, 0.3);
    }

    .news-image-container {
        position: relative;
        height: 200px;
        overflow: hidden;
    }

    .news-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .news-card:hover .news-image {
        transform: scale(1.5);
    }

    .news-date-badge {
        position: absolute;
        top: 1rem;
        right: 1rem;
        background: linear-gradient(135deg, #00903b, #7dbb5c);
        color: white;
        padding: 0.5rem;
        border-radius: 0.5rem;
        text-align: center;
        font-weight: bold;
        min-width: 3rem;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }

    .news-date-day {
        display: block;
        font-size: 1.25rem;
        line-height: 1;
    }

    .news-date-month {
        display: block;
        font-size: 0.75rem;
        text-transform: uppercase;
        opacity: 0.9;
    }

    .news-content {
        padding: 1.5rem;
    }

    .news-meta {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
        font-size: 0.875rem;
        color: #6b7280;
    }

    .news-category {
        background: linear-gradient(135deg, #00903b, #7dbb5c);
        color: white;
        padding: 0.25rem 0.75rem;
        border-radius: 9999px;
        font-weight: 600;
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    .news-separator {
        margin: 0 0.5rem;
        color: #d1d5db;
    }

    .news-date-full {
        color: #9ca3af;
    }

    .news-title {
        font-size: 1.25rem;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 0.75rem;
        line-height: 1.4;
        transition: color 0.3s ease;
    }

    .news-card:hover .news-title {
        color: #00903b;
    }

    .news-excerpt {
        color: #6b7280;
        line-height: 1.6;
        margin-bottom: 1rem;
        font-size: 0.95rem;
    }

    .news-read-more {
        display: inline-flex;
        align-items: center;
        color: #00903b;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 0.9rem;
    }

    .news-read-more:hover {
        color: #7dbb5c;
        transform: translateX(4px);
    }

    .news-read-more svg {
        transition: transform 0.3s ease;
    }

    .news-read-more:hover svg {
        transform: translateX(2px);
    }

    /* Responsive adjustments */
    @media (max-width: 640px) {
        .news-card {
            margin-bottom: 1.5rem;
        }
        
        .news-content {
            padding: 1rem;
        }
        
        .news-title {
            font-size: 1.125rem;
        }
        
        .news-date-badge {
            top: 0.75rem;
            right: 0.75rem;
            padding: 0.375rem;
            min-width: 2.5rem;
        }
        
        .news-date-day {
            font-size: 1rem;
        }
        
        .news-date-month {
            font-size: 0.625rem;
        }
    }

    /* Loading animation for images */
    .news-image {
        background-color: #f3f4f6;
        background-image: linear-gradient(45deg, transparent 40%, rgba(255,255,255,0.5) 50%, transparent 60%);
        background-size: 200% 100%;
        animation: shimmer 1.5s infinite;
    }

    .news-image[src] {
        animation: none;
        background: none;
    }

    @keyframes shimmer {
        0% {
            background-position: -200% 0;
        }
        100% {
            background-position: 200% 0;
        }
    }
</style>

<?php get_footer(); ?>