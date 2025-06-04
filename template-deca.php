<?php
/**
 * Template Name: DECA Template
 * Template Post Type: page
 */

get_header(); ?>

<div class="deca-page">
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
                    Direccion General de Evaluacion y Control Ambiental
                </h1>
                <p class="text-xl md:text-2xl text-white max-w-3xl mx-auto leading-relaxed opacity-90">
                    
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

    <!-- DGA Story Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="lg:w-1/2 mb-12 lg:mb-0 lg:pr-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-[#00903b] mb-6"><span class="bg-clip-text text-transparent bg-gradient-to-r from-[#00903b] to-[#7dbb5c]">Sobre Nosotros</span></h2>
                    <div class="h-1 w-20 bg-[#87cede] mb-8"></div>
                    <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                        La Direccion General de Evaluacion y Control Ambiental (DECA), es la dependencia de la Secretaria de Recursos Naturales, Ambiente, que vela por la obligatoria aplicacion de la Evaluacion de Impacto Ambiental para todos los proyectos o empresas con el potencial de contaminar el medio ambiente y degradar los recursos naturales. 
                    </p>
                    <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                        Garantizando que el desarrollo de cualquier actividad susceptible de contaminar o degradar el ambiente sera precedido de una evaluacion ambiental que permita prevenir, mitigar y/o compensar los posibles efectos negativos.
                    </p>
                    <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                        Engloba los mas relevantes procesos y actividades ejecutadas por las unidades vinculantes de la SERNA a fin de emitir un producto final denominado Certificado de Licencia Ambiental.
                    </p>
                </div>
                <div class="lg:w-1/2">
                    <div class="bg-gradient-to-r from-[#00903b] to-[#7dbb5c] rounded-2xl overflow-hidden shadow-xl transform rotate-1 hover:rotate-0 transition-transform duration-300">
                        <img src="/wp-content/uploads/2025/06/DECA.jpg" alt="Banner DGRH" class="w-full h-auto object-cover opacity-90 hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision and Mission Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 mt-4">
                <!-- <h2 class="text-3xl md:text-4xl font-bold text-[#00903b] mb-4"><span class="bg-clip-text text-transparent bg-gradient-to-r from-[#00903b] to-[#7dbb5c]">Nuestros Pilares Fundamentales</span></h2>
                <div class="h-1 w-20 bg-[#87cede] mx-auto"></div> -->
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
                        Ser líderes y conductores de una consciente actuación público-privada y ciudadana, enfocada en la protección ambiental y preservación de los recursos naturales que facilita el desarrollo humano sostenible.
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
                        La Dirección General de Evaluación y Control Ambiental es responsable de coordinar el Sistema Nacional de Evaluación de Impacto Ambiental (SINEIA), así como de los análisis técnicos asociados a la expedición y control de licencias ambientales y de la práctica de auditorías ambientales.
                    </p>
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
                                <h3 class="text-xl font-bold text-[#00903b] mb-2">Dirección General de Evaluación y Control Ambiental (DECA) ha trabajado para cumplir con las acciones orientadas a la Evaluación de Impacto Ambiental: </h3>
                                <p class="text-sm text-[#5ca54c] mb-3">Enero 2023</p>
                                <p class="text-gray-600">
                                    A todos los proyectos, obras y/o actividades con el potencial de contaminar el medio ambiente y degradar los recursos naturales, asimismo, incluye los procedimientos para realizar las inspecciones de control y seguimiento, la presentación de ICMA´s y las Renovaciones de Licencias, así como la atención de Denuncias Ambientales y todas las actividades que se realizan en todo lo que involucra el Licenciamiento Ambiental, de esta manera se impulsa el desarrollo sostenible de nuestra Honduras, donde las actuaciones operativas de la Dirección se circunscriben al marco jurídico del ambiente del país, sus convenios y tratados internacionales, como Dirección hemos trabajado tomando como base las metas de cumplimiento del Plan Operativo Anual (POA) de la DECA.
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
                                <h3 class="text-xl font-bold text-[#5ca54c] mb-2">El equipo técnico de analistas ambientales de la DECA realizaron un total de 1,556 Dictames técnicos de Auditorias de las medidas de mitigación:</h3>
                                <p class="text-sm text-[#5ca54c] mb-3">Marzo 2023</p>
                                <p class="text-gray-600">
                                    Brindaron atención a 150 Denuncias Ambientales las cuales se les dio seguimiento mediante análisis de información y visitas técnicas de campo para constatar cualquier daño ambiental causado por el denunciado, esto se llevó a cabo sin importar la zona geográfica cubriendo así a nivel País las inspecciones pertinentes que ameritan visita a campo.
                                </p>
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
                                <h3 class="text-xl font-bold text-[#7dbb5c] mb-2">La Dirección General de Evaluación y Control Ambiental (DECA) trabaja en <strong class="text-[#00903b]">Desarrollar las capacidades en profesionales que realizan su práctica en temas de Licenciamiento y Auditoria Ambiental</strong> abriendo las puertas a estudiantes de diversas universidades a nivel nacional, en el año 2023 se capacitaron 5 profesionales por egresar de diferentes carreras del área ambiental.</h3>
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
                                <h3 class="text-xl font-bold text-[#00903b] mb-2">Dirección llevo a cabo las convocatorias del taller Desafíos y Oportunidades de la Sostenibilidad del Planeta</h3>
                                <p class="text-sm text-[#5ca54c] mb-3">Junio 2023</p>
                                <p class="text-gray-600">
                                    Dirigido a los profesionales Prestadores de Servicios Ambientales (PSA), con el finde de potenciar las capacidades y habilidades técnicas de los mismos y así coadyuvar esfuerzos para hacerle frente a los problemas ambientales actuales; los talleres fueron impartidos en las Ciudades de Siguatepeque, Tegucigalpa y San Pedro Sula.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-[#00903b] mb-6">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#00903b] to-[#7dbb5c]">Galería de Imágenes</span>
                </h2>
                <div class="h-1 w-24 bg-[#87cede] mx-auto mb-6 rounded-full"></div>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Conoce nuestras actividades y logros a través de esta colección de imágenes
                </p>
            </div>
            
            <!-- Masonry Gallery Grid -->
            <div class="masonry-grid">
                <!-- Gallery Item 1 -->
                <div class="masonry-item">
                    <div class="gallery-card">
                        <div class="image-container">
                            <img src="/wp-content/uploads/2025/06/DECA.jpg" alt="Actividad DECA 1" class="gallery-image">
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 2 -->
                <div class="masonry-item">
                    <div class="gallery-card">
                        <div class="image-container">
                            <img src="/wp-content/uploads/2025/06/DECA.jpg" alt="Actividad DECA 2" class="gallery-image">
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 3 -->
                <div class="masonry-item">
                    <div class="gallery-card">
                        <div class="image-container">
                            <img src="/wp-content/uploads/2025/06/DECA.jpg" alt="Actividad DECA 3" class="gallery-image">
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 4 -->
                <div class="masonry-item">
                    <div class="gallery-card">
                        <div class="image-container">
                            <img src="/wp-content/uploads/2025/06/DECA.jpg" alt="Actividad DECA 4" class="gallery-image">
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 5 -->
                <div class="masonry-item">
                    <div class="gallery-card">
                        <div class="image-container">
                            <img src="/wp-content/uploads/2025/06/DECA.jpg" alt="Actividad DECA 5" class="gallery-image">
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 6 -->
                <div class="masonry-item">
                    <div class="gallery-card">
                        <div class="image-container">
                            <img src="/wp-content/uploads/2025/06/DECA.jpg" alt="Actividad DECA 6" class="gallery-image">
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 7 -->
                <div class="masonry-item">
                    <div class="gallery-card">
                        <div class="image-container">
                            <img src="/wp-content/uploads/2025/06/DECA.jpg" alt="Actividad DECA 7" class="gallery-image">
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 8 -->
                <div class="masonry-item">
                    <div class="gallery-card">
                        <div class="image-container">
                            <img src="/wp-content/uploads/2025/06/DECA.jpg" alt="Actividad DECA 8" class="gallery-image">
                        </div>
                    </div>
                </div>
            </div>

            <!-- View More Button -->
            <!-- <div class="text-center mt-12">
                <button class="inline-flex items-center px-8 py-3 bg-gradient-to-r from-[#00903b] to-[#7dbb5c] text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                    <span>Ver Más Imágenes</span>
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </button>
            </div> -->
        </div>
    </section>
    
    <!-- Call to Action -->
        <section class="bg-white rounded-lg shadow-custom p-8 md:p-12 text-center">
            <h2 class="text-3xl font-bold text-[#00903b] mb-6"><span class="bg-clip-text text-transparent bg-gradient-to-r from-[#00903b] to-[#7dbb5c]">Material Relevante</span></h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-8">
                Encuentra informacion adicional con respecto al Licenciamiento Ambiental aqui.
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="#" class="px-6 py-3 bg-[#7dbb5c] text-white font-bold rounded-full hover:bg-[#00903b] transition-colors duration-300">
                    Informacion Relevante para PSAs
                </a>
                <a href="#" class="px-6 py-3 border-2 border-[#00903b] text-[#00903b] font-bold rounded-full hover:bg-[#ee3725] hover:border-[#ee3725] hover:text-white transition-colors duration-300">
                    Nuevos Requisitos SLAS
                </a>
                <a href="#" class="px-6 py-3 border-2 border-[#87cede] text-[#00903b] font-bold rounded-full hover:bg-[#87cede] hover:text-white transition-colors duration-300">
                    Requisitos de Renovacion de Licencia Ambiental
                </a>
                <a href="#" class="px-6 py-3 border-2 border-[#ee3725] text-[#00903b] font-bold rounded-full hover:bg-[#ee3725] hover:text-white transition-colors duration-300">
                    Requisitos de Constancia de No Requerir Licencia Ambiental
                </a>
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
        box-shadow: 0 10px 15px -3px rgba(135, 206, 222, 0.79), 0 4px 6px -2px rgba(135, 206, 222, 0.05);
    }

    /* Masonry Gallery Styles */
    .masonry-grid {
        column-count: 1;
        column-gap: 1.5rem;
        line-height: 0;
    }

    @media (min-width: 640px) {
        .masonry-grid {
            column-count: 2;
        }
    }

    @media (min-width: 1024px) {
        .masonry-grid {
            column-count: 3;
        }
    }

    @media (min-width: 1280px) {
        .masonry-grid {
            column-count: 4;
        }
    }

    .masonry-item {
        display: inline-block;
        width: 100%;
        margin-bottom: 1.5rem;
        break-inside: avoid;
        line-height: 1.5;
    }

    .gallery-card {
        background: white;
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        transition: all 0.3s ease;
        transform: translateY(0);
    }

    .gallery-card:hover .overlay-icon {
        background-color: rgba(135, 206, 222, 0.3);
        border-color: rgba(135, 206, 222, 0.8);
        transform: scale(1.1);
    }

    /* Responsive adjustments */
    @media (max-width: 639px) {
        .masonry-item {
            margin-bottom: 1rem;
        }
        
        .overlay-title {
            font-size: 1rem;
        }
        
        .overlay-text {
            font-size: 0.75rem;
        }
        
        .overlay-icon {
            width: 2.5rem;
            height: 2.5rem;
        }
        
        .overlay-icon svg {
            width: 1.25rem;
            height: 1.25rem;
        }
    }

    /* Loading animation for images */
    .gallery-image {
        background-color: #f3f4f6;
        background-image: linear-gradient(45deg, transparent 40%, rgba(255,255,255,0.5) 50%, transparent 60%);
        background-size: 200% 100%;
        animation: shimmer 1.5s infinite;
    }

    .gallery-image[src] {
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

    /* Lightbox styles (if you want to add lightbox functionality) */
    .gallery-card {
        cursor: pointer;
    }

    /* Additional hover effects */
    .gallery-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border: 2px solid transparent;
        border-radius: 1rem;
        background: linear-gradient(135deg, #00903b, #7dbb5c) border-box;
        -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
        -webkit-mask-composite: subtract;
        mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
        mask-composite: subtract;
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 1;
        pointer-events: none;
    }

    .gallery-card:hover::before {
        opacity: 1;
    }
</style>
<?php get_footer(); ?>