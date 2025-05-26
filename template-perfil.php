<?php
/**
 * Template Name: Perfil Template
 * Template Post Type: page
 */

get_header(); ?>

<div class="perfil-page">
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
                    Perfil Institucional
                </h1>
                <p class="text-xl md:text-2xl text-white max-w-3xl mx-auto leading-relaxed opacity-90">
                    <cite>Al servicio del pueblo y por la recuperacion de la soberania de los recursos naturales.</cite>
                </p>
                <div class="mt-8 flex justify-center space-x-4">
                    <a href="#" class="px-6 py-3 bg-white text-[#00903b] font-bold rounded-full hover:bg-[#87cede] hover:text-white transition-colors duration-300">
                        Conoce mas
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

    <!-- SERNA Story Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="lg:w-1/2 mb-12 lg:mb-0 lg:pr-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-[#00903b] mb-6"><span class="bg-clip-text text-transparent bg-gradient-to-r from-[#00903b] to-[#7dbb5c]">Nuestra Historia</span></h2>
                    <div class="h-1 w-20 bg-[#87cede] mb-8"></div>
                    <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                        SERNA, conocida actualmente como la Secretaría de Recursos Naturales y Ambiente (SERNA), es el organismo público de Honduras encargado de la formulación, coordinación y evaluación de políticas relacionadas con la protección y aprovechamiento de los recursos hídricos, las energías renovables, la generación y transmisión de energía hidroeléctrica y geotérmica, la actividad minera, y la exploración y explotación de hidrocarburos. También se encarga de la coordinación y evaluación de políticas relacionadas con el ambiente, ecosistemas, el Sistema Nacional de Áreas Protegidas de Honduras (SINAPH), la protección de la flora y fauna, y el control de la contaminación en todas sus formas. Anteriormente, se denominó como Secretaría de Ambiente (SEDA) y fue creada el 30 de noviembre de 1999 mediante Decreto No. 218-96.
                    </p>
                    <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                        Desde su fundación, SERNA ha trabajado incansablemente para desarrollar políticas que promuevan el uso racional de nuestros recursos, fomentando la inversión responsable y el desarrollo tecnológico en el sector energético.
                    </p>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        Nuestra institución se ha convertido en un pilar fundamental para el desarrollo nacional, asegurando que los beneficios de nuestros recursos naturales lleguen a todos los ciudadanos.
                    </p>
                </div>
                <div class="lg:w-1/2">
                    <div class="bg-gradient-to-r from-[#00903b] to-[#7dbb5c] rounded-2xl overflow-hidden shadow-xl transform rotate-1 hover:rotate-0 transition-transform duration-300">
                        <img src="/wp-content/uploads/2025/04/SERNA-Blanco-768x1017.png" alt="Historia de SERNA" class="w-full h-auto object-cover opacity-90 hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision and Mission Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 mt-4">
                <h2 class="text-3xl md:text-4xl font-bold text-[#00903b] mb-4"><span class="bg-clip-text text-transparent bg-gradient-to-r from-[#00903b] to-[#7dbb5c]">Nuestros Pilares Fundamentales</span></h2>
                <div class="h-1 w-20 bg-[#87cede] mx-auto"></div>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Vision Card -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 border-l-4 border-[#00903b]">
                    <div class="flex items-center mb-6">
                        <div class="bg-[#00903b] p-3 rounded-full mr-8">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 ml-4">Visión</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed">
                    La visión de SERNA es ser una institución que promueva a nivel nacional una gestión eficiente de los recursos naturales y el ambiente, participando activamente en labores de protección ambiental, promoviendo acciones públicas y privadas para preservar los recursos naturales, y ofreciendo información ambiental oportuna para apoyar la toma de decisiones en el sector.
                    </p>
                </div>
                
                <!-- Mission Card -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 border-l-4 border-[#5ca54c]">
                    <div class="flex items-center mb-6">
                        <div class="bg-[#5ca54c] p-3 rounded-full mr-8">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 ml-4">Misión</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed">
                    La misión de SERNA es impulsar el desarrollo sostenible de Honduras mediante la formulación, coordinación, ejecución y evaluación de políticas públicas orientadas a la preservación de los recursos naturales y la conservación del ambiente, para mejorar la calidad de vida de sus habitantes, actuando con honestidad, responsabilidad, compromiso, eficiencia y transparencia.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-20 bg-gradient-to-r from-[#00903b] to-[#7dbb5c] mt-8 mb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Nuestros Valores</h2>
                <div class="h-1 w-20 bg-[#87cede] mx-auto"></div>
                <p class="text-xl text-white mt-6 max-w-3xl mx-auto">
                    Los principios que guían nuestro trabajo diario y nuestra relación con la ciudadanía
                </p>
            </div>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-8">
                <!-- Honestidad -->
                <div class="bg-white p-6 rounded-lg shadow-custom hover:shadow-lg transition-shadow duration-300 text-center">
                    <div class="bg-[#00903b] bg-opacity-10 p-4 rounded-full inline-block mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Honestidad</h3>
                    <p class="text-gray-600">
                        Actuamos con integridad y rectitud en todas nuestras acciones y decisiones.
                    </p>
                </div>
                
                <!-- Responsabilidad -->
                <div class="bg-white p-6 rounded-lg shadow-custom hover:shadow-lg transition-shadow duration-300 text-center">
                    <div class="bg-[#ee3725] bg-opacity-10 p-4 rounded-full inline-block mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Responsabilidad</h3>
                    <p class="text-gray-600">
                        Asumimos con compromiso nuestras obligaciones hacia el país y sus ciudadanos.
                    </p>
                </div>
                
                <!-- Compromiso -->
                <div class="bg-white p-6 rounded-lg shadow-custom hover:shadow-lg transition-shadow duration-300 text-center">
                    <div class="bg-[#e3a220] bg-opacity-10 p-4 rounded-full inline-block mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Compromiso</h3>
                    <p class="text-gray-600">
                        Dedicamos todos nuestros esfuerzos al cumplimiento de nuestros objetivos institucionales.
                    </p>
                </div>
                
                <!-- Eficiencia -->
                <div class="bg-white p-6 rounded-lg shadow-custom hover:shadow-lg transition-shadow duration-300 text-center">
                    <div class="bg-[#87cede] bg-opacity-10 p-4 rounded-full inline-block mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Eficiencia</h3>
                    <p class="text-gray-600">
                        Optimizamos el uso de los recursos para obtener los mejores resultados posibles.
                    </p>
                </div>
                
                <!-- Transparencia -->
                <div class="bg-white p-6 rounded-lg shadow-custom hover:shadow-lg transition-shadow duration-300 text-center">
                    <div class="bg-[#868385] bg-opacity-10 p-4 rounded-full inline-block mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z" />
                    </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Transparencia</h3>
                    <p class="text-gray-600">
                        Garantizamos el acceso a la información y rendimos cuentas de nuestras acciones.                        
                    </p>
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
    
    .shadow-custom {
        box-shadow: 0 10px 15px -3px rgba(255, 68, 56, 0.79), 0 4px 6px -2px rgba(255, 68, 56, 0.05);
    }
</style>
<?php get_footer(); ?>