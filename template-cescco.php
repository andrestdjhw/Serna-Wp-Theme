<?php
/**
 * Template Name: Cescco Template
 * Template Post Type: page
 */

get_header(); ?>

<div class="cescco-page">
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
                    CESCCO
                </h1>
                <p class="text-xl md:text-2xl text-white max-w-3xl mx-auto leading-relaxed opacity-90">
                    Centro de Estudios y Control de Contaminantes.
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
                        El Centro de Estudios y Control de Contaminantes (CESCCO) depencia de la SERNA; es el organismo tecnico-cientifico superior del Estado de Honduras en materia de contaminacion ambiental, se encarga de la investigacion, prestacion de servicios de analisis laboratoriales en las matrices agua, aire, suelo, sedimentos y alimentos, la vigilancia ambiental y gestion de sustancias quimicas. 
                    </p>
                    <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                        Asimismo, brinda capacitacion y sensibilizacion en temas relacionados con la legislacion y contaminacion ambiental, cada uno de estos servicios con el proposito de fortalecer la gestion ambiental de Honduras basado en principios de responsabilidad, honestidad, etica e integridad.
                    </p>
                </div>
                <div class="lg:w-1/2">
                    <div class="bg-gradient-to-r from-[#00903b] to-[#7dbb5c] rounded-2xl overflow-hidden shadow-xl transform rotate-1 hover:rotate-0 transition-transform duration-300">
                        <img src="/wp-content/uploads/2025/06/CESCCO2.jpg" alt="Banner DGRH" class="w-full h-auto object-cover opacity-90 hover:opacity-100 transition-opacity duration-300">
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
                            <div class="w-16 h-16 bg-gradient-to-r from-[#87cede] to-[#5ca54c] rounded-full flex items-center justify-center border-4 border-white shadow-md">
                                <span class="text-white text-2xl font-bold">1</span>
                            </div>
                        </div>
                        
                        <!-- Card Content -->
                        <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-transform hover:translate-y-[-5px]">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-[#00903b] mb-2">Reactivada la capacidad instalada de los laboratorios CESCCO en un 78% desde el año 2023, logramos abastecimiento de insumos, materiales y equipo requerido. </h3>
                                <p class="text-sm text-[#5ca54c] mb-3">Enero 2025</p>
                                <p class="text-gray-600">
                                    CESCCO brinda sus servicios al público en general, atención a inspecciones, denuncias, toma de muestras, etc.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Timeline Item 2 -->
                    <div class="relative pl-20 md:pl-24">
                        <!-- Number Circle -->
                        <div class="absolute left-0 top-6 z-10">
                            <div class="w-16 h-16 bg-gradient-to-r from-[#87cede] to-[#5ca54c] rounded-full flex items-center justify-center border-4 border-white shadow-md">
                                <span class="text-white text-2xl font-bold">2</span>
                            </div>
                        </div>
                        
                        <!-- Card Content -->
                        <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-transform hover:translate-y-[-5px]">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-[#5ca54c] mb-2">Brindamos apoyo a instituciones encargadas de aplicar la legislación ambiental como la Fiscalía Especial del Medio Ambiente (FEMA) y la Procuraduría General de la República (PGR):</h3>
                                <p class="text-sm text-[#5ca54c] mb-3">Marzo 2025</p>
                                <p class="text-gray-600">
                                    Con inspecciones, recolección de muestras y análisis laboratoriales en atención a denuncias o procesos de oficio.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Timeline Item 3 -->
                    <div class="relative pl-20 md:pl-24">
                        <!-- Number Circle -->
                        <div class="absolute left-0 top-6 z-10">
                            <div class="w-16 h-16 bg-gradient-to-r from-[#87cede] to-[#5ca54c] rounded-full flex items-center justify-center border-4 border-white shadow-md">
                                <span class="text-white text-2xl font-bold">3</span>
                            </div>
                        </div>
                        
                        <!-- Card Content -->
                        <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-transform hover:translate-y-[-5px]">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-[#7dbb5c] mb-2">Atendimos en el año 2023, 36 inspecciones y/o denuncias ambientales </h3>
                                <p class="text-sm text-[#5ca54c] mb-3">Enero 2023</p>
                                <p class="text-gray-600">
                                    Ofreciendo información técnico científica, con el propósito de normalizar o mitigar los problemas de contaminación que amenazan la salud de la población y al ambiente.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Timeline Item 4 -->
                    <div class="relative pl-20 md:pl-24">
                        <!-- Number Circle -->
                        <div class="absolute left-0 top-6 z-10">
                            <div class="w-16 h-16 bg-gradient-to-r from-[#87cede] to-[#5ca54c] rounded-full flex items-center justify-center border-4 border-white shadow-md">
                                <span class="text-white text-2xl font-bold">4</span>
                            </div>
                        </div>
                        
                        <!-- Card Content -->
                        <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-transform hover:translate-y-[-5px]">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-[#00903b] mb-2">Realizamos 579 análisis laboratoriales.</h3>
                                <p class="text-sm text-[#5ca54c] mb-3">Enero 2025</p>
                                <p class="text-gray-600">
                                    Al servicio de la población, en atención a denuncias, investigación y acompañamientos a los diferentes SINEIAS convocados.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Timeline Item 5 -->
                    <div class="relative pl-20 md:pl-24">
                        <!-- Number Circle -->
                        <div class="absolute left-0 top-6 z-10">
                            <div class="w-16 h-16 bg-gradient-to-r from-[#87cede] to-[#5ca54c] rounded-full flex items-center justify-center border-4 border-white shadow-md">
                                <span class="text-white text-2xl font-bold">5</span>
                            </div>
                        </div>
                        
                        <!-- Card Content -->
                        <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-transform hover:translate-y-[-5px]">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-[#5ca54c] mb-2">Inicio de la red de micro plásticos en arena y aguas superficiales marinas en tres playas</h3>
                                <p class="text-sm text-[#5ca54c] mb-3">Marzo 2025</p>
                                <p class="text-gray-600">
                                    (El Edén, Punta Ratón y Cedeño) en la zona del Golfo de Fonseca.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Timeline Item 6 -->
                    <div class="relative pl-20 md:pl-24">
                        <!-- Number Circle -->
                        <div class="absolute left-0 top-6 z-10">
                            <div class="w-16 h-16 bg-gradient-to-r from-[#87cede] to-[#5ca54c] rounded-full flex items-center justify-center border-4 border-white shadow-md">
                                <span class="text-white text-2xl font-bold">6</span>
                            </div>
                        </div>
                        
                        <!-- Card Content -->
                        <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-transform hover:translate-y-[-5px]">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-[#7dbb5c] mb-2">100% de cumplimiento en las mediciones en la red de monitoreo para partículas de aire PM10 y PM2.5 en la Ciudad de Tegucigalpa M.D.C.</h3>
                                <p class="text-sm text-[#5ca54c] mb-3">Mayo 2025</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative pl-20 md:pl-24">
                <!-- Contact Icon Circle -->
                <div class="absolute left-0 top-6 z-10">
                    <div class="w-16 h-16 bg-gradient-to-r from-[#87cede] to-[#5ca54c] rounded-full flex items-center justify-center border-4 border-white shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>
                
                <!-- Contact Card Content -->
                <div class="bg-gradient-to-br from-[#00903b] to-[#7dbb5c] rounded-lg overflow-hidden shadow-xl">
                    <div class="p-8 text-white">
                        <h3 class="text-2xl font-bold mb-6 text-center">Visitános</h3>
                        
                        <!-- Contact Grid -->
                        <div class="grid md:grid-cols-2 gap-8">
                            <!-- Contact Information -->
                            <div class="space-y-6">
                                 <!-- Phone 
                                <div class="flex items-start space-x-4">
                                    <div class="bg-[#ee3725] bg-opacity-20 p-2 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-sm opacity-90">Teléfono</h4>
                                        <p class="text-white">(504)2242-8524</p>
                                    </div>
                                </div>
                                
                                 Email 
                                <div class="flex items-start space-x-4">
                                    <div class="bg-[#ee3725] bg-opacity-20 p-2 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-sm opacity-90">Correo Electrónico</h4>
                                        <p class="text-white">gestionambiental@serna.gob.hn</p>
                                    </div>
                                </div> -->
                                
                                <!-- Address -->
                                <div class="flex items-start space-x-4">
                                    <div class="bg-[#ee3725] bg-opacity-20 p-2 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-sm opacity-90">Dirección</h4>
                                        <p class="text-white">Centro de Estudios y Control de Contaminantes(CESCCO); frente al Cuartel General de Bomberos, Barrio Morazan - Calzada a Parque Juana Lainez</p>
                                        <p class="text-white">Tegucigalpa M.D.C. - Honduras<, CA/p>
                                    </div>
                                </div>
                                
                                <!-- Schedule -->
                                <div class="flex items-start space-x-4">
                                    <div class="bg-[#ee3725] bg-opacity-20 p-2 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-sm opacity-90">Horarios de Atención</h4>
                                        <p class="text-white">Lunes a Viernes: 7:30 AM - 3:30 PM</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Map Container -->
                            <div class="bg-gradient-to-r from-[#87cede] to-blue-300  rounded-lg p-4 backdrop-blur-sm">
                                <h4 class="font-semibold text-white mb-4 text-center">Nuestra Ubicación</h4>
                                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                                    <!-- Google Maps Embed Frame -->
                                    <!-- Reemplaza el src con tu URL específica de Google Maps -->
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1934.8222914965293!2d-87.20422926151848!3d14.09814609800575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6fa37a8a24075b%3A0x8f35b1e830d625ea!2sElegant%20Style%20BarberShop!5e0!3m2!1ses!2sus!4v1748981967526!5m2!1ses!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                
                                <!-- Call to Action Button -->
                                <div class="mt-4 text-center">
                                    <a href="https://maps.google.com" target="_blank" class="inline-flex items-center px-4 py-2 bg-[#ee3725] bg-opacity-20 hover:bg-opacity-30 transition-all duration-300 rounded-full text-white text-sm font-medium">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                        </svg>
                                        Ver en Google Maps
                                    </a>
                                </div>
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
                            <img src="/wp-content/uploads/2025/06/CESCCO.jpg" alt="Actividad  CESCCO 1" class="gallery-image">
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 2 -->
                <div class="masonry-item">
                    <div class="gallery-card">
                        <div class="image-container">
                            <img src="/wp-content/uploads/2025/06/CESCCO.jpg" alt="Actividad CESCCO 2" class="gallery-image">
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 3 -->
                <div class="masonry-item">
                    <div class="gallery-card">
                        <div class="image-container">
                            <img src="/wp-content/uploads/2025/06/CESCCO.jpg" alt="Actividad CESCCO 3" class="gallery-image">
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 4 -->
                <div class="masonry-item">
                    <div class="gallery-card">
                        <div class="image-container">
                            <img src="/wp-content/uploads/2025/06/CESCCO.jpg" alt="Actividad CESCCO 4" class="gallery-image">
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 5 -->
                <div class="masonry-item">
                    <div class="gallery-card">
                        <div class="image-container">
                            <img src="/wp-content/uploads/2025/06/CESCCO.jpg" alt="Actividad CESCCO 5" class="gallery-image">
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 6 -->
                <div class="masonry-item">
                    <div class="gallery-card">
                        <div class="image-container">
                            <img src="/wp-content/uploads/2025/06/CESCCO.jpg" alt="Actividad CESCCO 6" class="gallery-image">
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 7 -->
                <div class="masonry-item">
                    <div class="gallery-card">
                        <div class="image-container">
                            <img src="/wp-content/uploads/2025/06/CESCCO.jpg" alt="Actividad CESCCO 7" class="gallery-image">
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 8 -->
                <div class="masonry-item">
                    <div class="gallery-card">
                        <div class="image-container">
                            <img src="/wp-content/uploads/2025/06/CESCCO.jpg" alt="Actividad CESCCO 8" class="gallery-image">
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