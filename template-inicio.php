<?php
/**
 * Template Name: Inicio Template
 * Template Post Type: page
 */

get_header(); ?>

<div class="inicio-page">
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
                    Secretaría de Recursos Naturales y Ambiente
                </h1>
                <p class="text-xl md:text-2xl text-white max-w-3xl mx-auto leading-relaxed opacity-90">
                    <cite>Al servicio del pueblo y por la recuperacion de la soberania de los recursos naturales.</cite>
                </p>
                <div class="mt-8 flex justify-center space-x-4">
                    <a href="/nosotros/perfil" class="px-6 py-3 bg-white text-[#00903b] font-bold rounded-full hover:bg-[#87cede] hover:text-white transition-colors duration-300">
                        Conócenos
                    </a>
                    <a href="#servicios" class="px-6 py-3 border-2 border-white text-white font-bold rounded-full hover:bg-[#ee3725] hover:text-white hover:border-[#ee3725] transition-colors duration-300">
                        Nuestros Servicios
                    </a>
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

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <!-- Featured Services Section -->
        <section id="servicios" class="mb-24">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold  mb-4"><span class="bg-clip-text text-transparent bg-gradient-to-r from-[#00903b] to-[#7dbb5c]">Nuestros Servicios</span></h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Ofrecemos una variedad de servicios para proteger y gestionar los recursos naturales de Honduras
                </p>
                <div class="mt-6">
                    <div class="inline-flex items-center justify-center w-16 h-1 bg-[#87cede] rounded-full"></div>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div class="bg-white rounded-lg shadow-custom overflow-hidden transition-transform duration-300 hover:transform hover:-translate-y-2">
                    <div class="h-48 bg-[#00903b] flex items-center justify-center">
                    <svg class="h-16 w-16 text-white" xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>

                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#00903b] mb-3">Licencias Ambientales</h3>
                        <p class="text-gray-600 mb-4">
                            Proceso de evaluación y aprobación de proyectos para garantizar el cumplimiento de normas ambientales.
                        </p>
                        <a href="/slas" class="text-[#7dbb5c] font-semibold hover:text-[#00903b] transition-colors duration-300 flex items-center">
                            Más información
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Service Card 2 -->
                <div class="bg-white rounded-lg shadow-custom overflow-hidden transition-transform duration-300 hover:transform hover:-translate-y-2">
                    <div class="h-48 bg-[#5ca54c] flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                    </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#00903b] mb-3">Gestión Forestal</h3>
                        <p class="text-gray-600 mb-4">
                            Planificación y control del uso sostenible de los recursos forestales del país.
                        </p>
                        <a href="#" class="text-[#7dbb5c] font-semibold hover:text-[#00903b] transition-colors duration-300 flex items-center">
                            Más información
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Service Card 3 -->
                <div class="bg-white rounded-lg shadow-custom overflow-hidden transition-transform duration-300 hover:transform hover:-translate-y-2">
                    <div class="h-48 bg-[#7dbb5c] flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                    </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#00903b] mb-3">Protección del Agua</h3>
                        <p class="text-gray-600 mb-4">
                            Programas para la conservación y uso racional de los recursos hídricos nacionales.
                        </p>
                        <a href="#" class="text-[#7dbb5c] font-semibold hover:text-[#00903b] transition-colors duration-300 flex items-center">
                            Más información
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- About Us Section -->
        <section class="mb-24">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-[#00903b] mb-6"><span class="bg-clip-text text-transparent bg-gradient-to-r from-[#00903b] to-[#7dbb5c]">Sobre Nosotros</span></h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        SERNA, conocida actualmente como la Secretaría de Recursos Naturales y Ambiente (SERNA), es el organismo público de Honduras encargado de la formulación, coordinación y evaluación de políticas relacionadas con la protección y aprovechamiento de los recursos hídricos, las energías renovables, la generación y transmisión de energía hidroeléctrica y geotérmica, la actividad minera, y la exploración y explotación de hidrocarburos. También se encarga de la coordinación y evaluación de políticas relacionadas con el ambiente, ecosistemas, el Sistema Nacional de Áreas Protegidas de Honduras (SINAPH), la protección de la flora y fauna, y el control de la contaminación en todas sus formas. Anteriormente, se denominó como Secretaría de Ambiente (SEDA) y fue creada el 30 de noviembre de 1999 mediante Decreto No. 218-96.
                    </p>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                    La misión de SERNA es impulsar el desarrollo sostenible de Honduras mediante la formulación, coordinación, ejecución y evaluación de políticas públicas orientadas a la preservación de los recursos naturales y la conservación del ambiente, para mejorar la calidad de vida de sus habitantes, actuando con honestidad, responsabilidad, compromiso, eficiencia y transparencia.
                    </p>
                    <a href="/nosotros/perfil" class="px-6 py-3 bg-[#7dbb5c] text-white font-bold rounded-full hover:bg-[#00903b] transition-colors duration-300 inline-flex items-center">
                        Conoce más sobre nosotros
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="relative">
                    <div class="bg-[#87cede] rounded-lg overflow-hidden aspect-w-22 aspect-h-22">
                        <img src="/wp-content/uploads/2025/06/DJI_0011.jpg" alt="SERNA Honduras" class="w-full h-full object-cover">
                    </div>
                    <!-- <div class="absolute -bottom-6 -right-6 bg-white p-6 rounded-lg shadow-custom w-2/3">
                        <h3 class="text-xl font-bold text-[#00903b] mb-2">Nuestra Visión</h3>
                        <p class="text-gray-600 text-sm">
                            La visión de SERNA es ser una institución que promueva a nivel nacional una gestión eficiente de los recursos naturales y el ambiente, participando activamente en labores de protección ambiental, promoviendo acciones públicas y privadas para preservar los recursos naturales, y ofreciendo información ambiental oportuna para apoyar la toma de decisiones en el sector.
                        </p>
                    </div> -->
                </div>
            </div>
        </section>
        
        <!-- News & Updates Section -->
        <section class="mb-24">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-[#00903b] mb-4"><span class="bg-clip-text text-transparent bg-gradient-to-r from-[#00903b] to-[#7dbb5c]">Noticias y Actualizaciones</span></h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Mantente informado sobre nuestras últimas actividades, proyectos y noticias ambientales
                </p>
                <div class="mt-6">
                    <div class="inline-flex items-center justify-center w-16 h-1 bg-[#87cede] rounded-full"></div>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- News Card 1 -->
                <div class="bg-white rounded-lg shadow-lg shadow-custom overflow-hidden">
                    <div class="h-55 overflow-hidden">
                        <img src="https://serna.gob.hn/wp-content/uploads/2024/09/IMG_9592-1.webp" alt="Proyecto Reforestación" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span class="bg-[#87cede] text-[#00903b] px-2 py-1 rounded-full text-xs font-semibold mr-3">Noticia</span>
                            <span>22 Enero 2024</span>
                        </div>
                        <h3 class="text-xl font-bold text-[#00903b] mb-3">Proyecto AdaptarC</h3>
                        <p class="text-gray-600 mb-4">
                            Impulsa el desarrollo de productores y emprendedores.
                        </p>
                        <a href="#" class="text-[#7dbb5c] font-semibold hover:text-[#00903b] transition-colors duration-300 flex items-center">
                            Leer más
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- News Card 2 -->
                <div class="bg-white rounded-lg shadow-custom overflow-hidden">
                    <div class="h-55 overflow-hidden">
                        <img src="https://serna.gob.hn/wp-content/uploads/2023/11/Cafe-Hondureno.jpg" alt="Taller Ambiental" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span class="bg-[#87cede] text-[#00903b] px-2 py-1 rounded-full text-xs font-semibold mr-3">Evento</span>
                            <span>28 Mayo 2023</span>
                        </div>
                        <h3 class="text-xl font-bold text-[#00903b] mb-3">Cafe Hondureño destaca en Shanghai</h3>
                        <p class="text-gray-600 mb-4">
                            Capacitación dirigida a educadores para incorporar temas ambientales en el currículo escolar.
                        </p>
                        <a href="#" class="text-[#7dbb5c] font-semibold hover:text-[#00903b] transition-colors duration-300 flex items-center">
                            Leer más
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- News Card 3 -->
                <div class="bg-white rounded-lg shadow-custom overflow-hidden">
                    <div class="h-55 overflow-hidden">
                        <img src="https://serna.gob.hn/wp-content/uploads/2023/11/PORTADA.jpg" alt="Convenio Internacional" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span class="bg-[#87cede] text-[#00903b] px-2 py-1 rounded-full text-xs font-semibold mr-3">Convenio</span>
                            <span>06 Noviembre 2023</span>
                        </div>
                        <h3 class="text-xl font-bold text-[#00903b] mb-3">Campaña de prevencion de incendios 2024</h3>
                        <p class="text-gray-600 mb-4">
                            Acuerdo para fortalecer las capacidades técnicas en monitoreo de calidad del aire en ciudades principales.
                        </p>
                        <a href="#" class="text-[#7dbb5c] font-semibold hover:text-[#00903b] transition-colors duration-300 flex items-center">
                            Leer más
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="px-6 py-3 border-2 border-[#00903b] text-[#00903b] font-bold rounded-full hover:bg-[#00903b] hover:text-white transition-colors duration-300 inline-flex items-center">
                    Ver todas las noticias
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </section>
        
        <!-- Stats Section -->
        <section class="bg-gradient-to-r from-[#00903b] to-[#7dbb5c] rounded-2xl p-8 md:p-12 mb-24 text-white">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
                <!-- Stat 1 -->
                <div class="p-4 stat-item" data-target="1650000" data-suffix="+">
                    <div class="text-4xl font-bold mb-2 counter">0</div>
                    <div class="text-lg">Libras de lirio recogido</div>
                </div>
                
                <!-- Stat 2 -->
                <div class="p-4 stat-item" data-target="55000" data-suffix="+">
                    <div class="text-4xl font-bold mb-2 counter">0</div>
                    <div class="text-lg">Hectáreas recuperadas con PPAT y Plan 0 Deforestación</div>
                </div>
                
                <!-- Stat 3 -->
                <div class="p-4 stat-item" data-target="150" data-suffix="">
                    <div class="text-4xl font-bold mb-2 counter">0</div>
                    <div class="text-lg">Microcuencas intervenidas a nivel nacional.</div>
                </div>
                
                <!-- Stat 4 -->
                <div class="p-4 stat-item" data-target="18" data-suffix="">
                    <div class="text-4xl font-bold mb-2 counter">0</div>
                    <div class="text-lg">Áreas protegidas</div>
                </div>
            </div>
        </section>
        
        <!-- Call to Action -->
        <section class="bg-white rounded-lg shadow-custom p-8 md:p-12 text-center">
            <h2 class="text-3xl font-bold text-[#00903b] mb-6"><span class="bg-clip-text text-transparent bg-gradient-to-r from-[#00903b] to-[#7dbb5c]">¿Cómo puedes contribuir?</span></h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-8">
                Todos podemos ser parte de la solución. Descubre cómo puedes colaborar con la protección del medio ambiente en Honduras.
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="#" class="px-6 py-3 bg-[#7dbb5c] text-white font-bold rounded-full hover:bg-[#00903b] transition-colors duration-300">
                    Voluntariado
                </a>
                <a href="#" class="px-6 py-3 border-2 border-[#00903b] text-[#00903b] font-bold rounded-full hover:bg-[#ee3725] hover:border-[#ee3725] hover:text-white transition-colors duration-300">
                    Denuncias Ambientales
                </a>
                <a href="#" class="px-6 py-3 border-2 border-[#87cede] text-[#00903b] font-bold rounded-full hover:bg-[#87cede] hover:text-white transition-colors duration-300">
                    Programas Educativos
                </a>
            </div>
        </section>
    </div>
</div>

<!-- Contenedor para el Chatbot -->
<div id="serna-chatbot"></div>

<style>

    html {
        scroll-behavior: smooth;
    }

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
</style>

<script>
    // Función para formatear números con comas
    function formatNumber(num) {
        return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    // Función mejorada para animar el conteo con easing
    function animateCounter(element, target, duration = 1800, suffix = '') {
        let start = 0;
        const startTime = performance.now();
        
        // Función de easing para suavizar la animación
        const easeOutQuad = t => t * (2 - t);
        
        function updateCounter(currentTime) {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const easedProgress = easeOutQuad(progress);
            const currentValue = Math.floor(easedProgress * target);
            
            element.textContent = formatNumber(currentValue) + suffix;
            
            if (progress < 1) {
                requestAnimationFrame(updateCounter);
            } else {
                element.textContent = formatNumber(target) + suffix;
            }
        }
        
        requestAnimationFrame(updateCounter);
    }

    // Configuración mejorada usando Intersection Observer
    document.addEventListener('DOMContentLoaded', function() {
        const statsSection = document.querySelector('.bg-gradient-to-r.from-\\[\\#00903b\\].to-\\[\\#7dbb5c\\]');
        const statItems = document.querySelectorAll('.stat-item');
        let hasAnimated = false;

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !hasAnimated) {
                    hasAnimated = true;
                    
                    statItems.forEach((item, index) => {
                        const counter = item.querySelector('.counter');
                        const target = parseInt(item.dataset.target);
                        const suffix = item.dataset.suffix || '';
                        
                        // Pequeño retraso escalonado para mejor efecto
                        setTimeout(() => {
                            animateCounter(counter, target, 2000, suffix);
                        }, index * 250);
                    });
                }
            });
        }, {
            threshold: 0.2, // Se activa cuando el 20% del elemento es visible
            rootMargin: '0px 0px -100px 0px' // Margen negativo para activar antes
        });

        if (statsSection) {
            observer.observe(statsSection);
        }
    });
</script>

<?php get_footer(); ?>