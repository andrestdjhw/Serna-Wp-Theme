<?php
/**
 * Template Name: DECA Noticias Template
 * Template Post Type: page
 */

get_header(); ?>

<div class="deca-news-page">
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
                    Noticias DECA
                </h1>
                <p class="text-xl md:text-2xl text-white max-w-3xl mx-auto leading-relaxed opacity-90">
                    Mantente informado sobre las últimas actividades, logros y noticias de la Dirección General de Evaluación y Control Ambiental
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

    <!-- Featured News Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-[#00903b] mb-6">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#00903b] to-[#7dbb5c]">Noticia Destacada</span>
                </h2>
                <div class="h-1 w-24 bg-[#87cede] mx-auto mb-6 rounded-full"></div>
            </div>
            
            <!-- Featured News Card -->
            <div class="bg-gradient-to-r from-[#00903b] to-[#7dbb5c] rounded-2xl overflow-hidden shadow-xl">
                <div class="lg:flex">
                    <div class="lg:w-1/2">
                        <img src="/wp-content/uploads/2025/08/DECAanuncio.jpeg" alt="Noticia Destacada" class="w-full h-64 lg:h-full object-cover">
                    </div>
                    <div class="lg:w-1/2 p-8 lg:p-12 text-white">
                        <div class="flex items-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-[#87cede] font-semibold">09 de Mayo, 2024</span>
                        </div>
                        <h3 class="text-2xl lg:text-3xl font-bold mb-4">
                            DECA Implementa Nuevos Protocolos de Evaluación Ambiental
                        </h3>
                        <p class="text-lg leading-relaxed mb-6 opacity-90">
                            La Dirección General de Evaluación y Control Ambiental informa modificación de monto de inspección para evaluación ambiental.
                        </p>
                        <a href="#" class="inline-flex items-center px-6 py-3 bg-white text-[#00903b] font-semibold rounded-full hover:bg-[#87cede] hover:text-white transition-colors duration-300">
                            Leer más
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News Section -->
    

    <!-- Newsletter Section -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-[#00903b] to-[#7dbb5c] rounded-2xl overflow-hidden shadow-xl">
                <div class="px-8 py-12 text-center text-white">
                    <h2 class="text-3xl font-bold mb-4">
                        Mantente Informado
                    </h2>
                    <p class="text-xl mb-8 opacity-90">
                        Suscríbete a nuestro boletín para recibir las últimas noticias y actualizaciones de DECA
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
        </div
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
        transform: scale(1.05);
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