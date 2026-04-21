<?php
/**
 * Template Name: DGA Template
 * Template Post Type: page
 */

get_header(); ?>

<div class="dga-page">
    <!-- hero section  -->
    <section class="relative py-24 overflow-hidden">
        <!-- Gradient Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-[#263b80] via-[#264da0] to-[#264da0]"></div>
        
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-0 -left-4 w-72 h-72 bg-[#87cede] rounded-full mix-blend-multiply filter blur-xl animate-pulse"></div>
            <div class="absolute bottom-0 right-0 w-72 h-72 bg-[#87cede] rounded-full mix-blend-multiply filter blur-xl animate-pulse" style="animation-delay: 3s;"></div>
            <div class="absolute -bottom-8 left-20 w-72 h-72 bg-[#87cede] rounded-full mix-blend-multiply filter blur-xl animate-pulse" style="animation-delay: 5s;"></div>
        </div>
        
        <!-- Patrón de puntos — coherente con el resto del sitio -->
        <div class="dga-hero-dots" aria-hidden="true"></div>
        
        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="dga-hero-title">
                    Dirección General de Gestión Ambiental
                </h1>
                <div class="mt-8">
                    <div class="inline-flex items-center justify-center w-50 h-1 bg-[#ad8411] rounded-full"></div>
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
                    <h2 class="text-3xl md:text-4xl font-bold text-[#00903b] mb-6"><span class="bg-clip-text text-transparent bg-gradient-to-r from-[#263b80] to-[#264da0]">Sobre Nosotros</span></h2>
                    <div class="h-1 w-110 bg-[#ad8411] mb-8"></div>
                    <p class="dga-body-text text-lg text-gray-700 mb-6 leading-relaxed">
                        Es la dirección que tiene como mandato orientar el accionar coherente del Gobierno y la Sociedad, a fin de alcanzar una elevada calidad ambiental y asegurar el uso sostenible de los recursos naturales. 
                    </p>
                    <p class="dga-body-text text-lg text-gray-700 mb-6 leading-relaxed">
                        A traves de procesos que fortalezcan la gestión ambiental en municipios, instituciones publicas y privadas. Y de sensibilizar a la población por medio de capacitaciones, charlas, foros y conferencias.
                    </p>
                </div>
                <div class="lg:w-1/2">
                    <div class="bg-gradient-to-r from-[#00903b] to-[#7dbb5c] rounded-2xl overflow-hidden shadow-xl transform rotate-1 hover:rotate-0 transition-transform duration-300">
                        <img src="/wp-content/uploads/2025/08/DGABanner3.jpg" alt="Banner DGA" class="w-full h-auto object-cover opacity-90 hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision and Mission Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 mt-4"></div>
            
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Vision Card -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 border-l-4 border-[#264da0]">
                    <div class="flex items-center mb-6">
                        <div class="bg-[#264da0] p-3 rounded-full mr-8">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 ml-4">Visión</h3>
                    </div>
                    <p class="dga-body-text text-gray-600 leading-relaxed">
                        Ser la principal impulsora del desarrollo ambiental de Honduras mediante el fortalecimiento y la consolidación de los procesos de gestión ambiental en entidades públicas y privadas.
                    </p>
                </div>
                
                <!-- Mission Card -->
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 border-l-4 border-[#263b80]">
                    <div class="flex items-center mb-6">
                        <div class="bg-[#263b80] p-3 rounded-full mr-8">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 ml-4">Misión</h3>
                    </div>
                    <p class="dga-body-text text-gray-600 leading-relaxed">
                        Coordinar, formar, promover y divulgar acciones en materia ambiental con entidades públicas y privadas, nacionales e internacionales, a través de procesos de capacitación y asistencia técnica ambiental.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="py-16 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-2">
                <h2 class="text-3xl font-bold text-[#00903b]"><span class="bg-clip-text text-transparent bg-gradient-to-r from-[#263b80] to-[#264da0]">Logros Recientes</span></h2>
                <div class="h-1 w-24 bg-[#ad8411] mx-auto mt-2 mb-12 rounded-full"></div>
            </div>
            
            <div class="relative">
                <div class="absolute left-8 md:left-11 top-0 bottom-0 w-1 bg-gradient-to-b from-[#263b80] via-[#264da0] to-[#264da0]"></div>
                
                <div class="space-y-12">
                    <!-- Timeline Item 1 -->
                    <div class="relative pl-20 md:pl-24">
                        <div class="absolute left-0 top-6 z-10">
                            <div class="w-16 h-16 bg-gradient-to-r from-[#264da0] to-[#87cede] rounded-full flex items-center justify-center border-4 border-white shadow-md">
                                <span class="text-white text-2xl font-bold">1</span>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-transform hover:translate-y-[-5px]">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-[#264da0] mb-2">Logramos recuperar 2,055 toneladas de residuos valorizables gracias a las exitosas campañas de RECICLA+.</h3>
                                <p class="text-sm text-[#264da0] mb-3">Enero 2025</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Timeline Item 2 -->
                    <div class="relative pl-20 md:pl-24">
                        <div class="absolute left-0 top-6 z-10">
                            <div class="w-16 h-16 bg-gradient-to-r from-[#264da0] to-[#87cede] rounded-full flex items-center justify-center border-4 border-white shadow-md">
                                <span class="text-white text-2xl font-bold">2</span>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-transform hover:translate-y-[-5px]">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-[#263b80] mb-2">Capacitamos a 69 instituciones, incluyendo:</h3>
                                <p class="text-sm text-[#264da0] mb-3">Marzo 2025</p>
                                <p class="dga-body-text text-gray-600">
                                    Policía Nacional, Fuerzas Armadas y Unidades Municipales Ambientales en temáticas cruciales como Derecho Minero, Aprovechamiento Forestal y Licenciamiento Ambiental.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Timeline Item 3 -->
                    <div class="relative pl-20 md:pl-24">
                        <div class="absolute left-0 top-6 z-10">
                            <div class="w-16 h-16 bg-gradient-to-r from-[#264da0] to-[#87cede] rounded-full flex items-center justify-center border-4 border-white shadow-md">
                                <span class="text-white text-2xl font-bold">3</span>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-transform hover:translate-y-[-5px]">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-[#263b80] mb-2">Se acreditaron cinco alcaldías</h3>
                                <p class="text-sm text-[#264da0] mb-3">Mayo 2025</p>
                                <p class="dga-body-text text-gray-600">
                                    En los temas de Gestión Forestal, Gestión Hídrica y Gestión en Residuos Sólidos, a través del Sistema Nacional de Acreditación en Gestión Ambiental Municipal (SINAGAM).
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Timeline Item 4 -->
                    <div class="relative pl-20 md:pl-24">
                        <div class="absolute left-0 top-6 z-10">
                            <div class="w-16 h-16 bg-gradient-to-r from-[#264da0] to-[#87cede] rounded-full flex items-center justify-center border-4 border-white shadow-md">
                                <span class="text-white text-2xl font-bold">4</span>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-transform hover:translate-y-[-5px]">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-[#264da0] mb-2">Se realizó la presentación de la primera fase del Plan Maestro</h3>
                                <p class="text-sm text-[#264da0] mb-3">Enero 2025</p>
                                <p class="dga-body-text text-gray-600">
                                    Para la Gestión Integral de Residuos Sólidos para el Valle de Sula, en cooperación con KEITI y el Ministerio de Ambiente de la República de Corea del Sur.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Timeline Item 5 -->
                    <div class="relative pl-20 md:pl-24">
                        <div class="absolute left-0 top-6 z-10">
                            <div class="w-16 h-16 bg-gradient-to-r from-[#264da0] to-[#87cede] rounded-full flex items-center justify-center border-4 border-white shadow-md">
                                <span class="text-white text-2xl font-bold">5</span>
                            </div>
                        </div>
                        <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-transform hover:translate-y-[-5px]">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-[#264da0] mb-2">Participación en la postura de región</h3>
                                <p class="text-sm text-[#264da0] mb-3">Enero 2025</p>
                                <p class="dga-body-text text-gray-600">
                                    En el acuerdo altamente vinculante de plástico para la elaboración del Instrumento internacional jurídicamente vinculante sobre la contaminación por plásticos, incluidos en el medio marino; París, Francia.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Card -->
                    <div class="relative pl-20 md:pl-24">
                        <div class="absolute left-0 top-6 z-10">
                            <div class="w-16 h-16 bg-gradient-to-r from-[#87cede] to-[#264da0] rounded-full flex items-center justify-center border-4 border-white shadow-md">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                        
                        <div class="bg-gradient-to-br from-[#264da0] to-[#264da0] rounded-lg overflow-hidden shadow-xl">
                            <div class="p-8 text-white">
                                <h3 class="text-2xl font-bold mb-6 text-center">Contáctenos</h3>
                                <div class="grid md:grid-cols-2 gap-8">
                                    <div class="space-y-6">
                                        <div class="flex items-start space-x-4">
                                            <div class="bg-[#ad8411] bg-opacity-20 p-2 rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-sm opacity-90">Teléfono</h4>
                                                <p class="dga-body-text text-white">(504)2242-8524</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-4">
                                            <div class="bg-[#ad8411] bg-opacity-20 p-2 rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-sm opacity-90">Correo Electrónico</h4>
                                                <p class="dga-body-text text-white">gestionambiental@serna.gob.hn</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-4">
                                            <div class="bg-[#ad8411] bg-opacity-20 p-2 rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-sm opacity-90">Dirección</h4>
                                                <p class="dga-body-text text-white">Centro Cívico Gubernamental, Blvd Juan Pablo Segundo, Torre 1, Piso 7,</p>
                                                <p class="dga-body-text text-white">Tegucigalpa, Honduras</p>
                                            </div>
                                        </div>
                                        <div class="flex items-start space-x-4">
                                            <div class="bg-[#ad8411] bg-opacity-20 p-2 rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <h4 class="font-semibold text-sm opacity-90">Horarios de Atención</h4>
                                                <p class="dga-body-text text-white">Lunes a Viernes: 7:30 AM - 3:30 PM</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="bg-gradient-to-r from-[#231f20] to-[#0000000] rounded-lg p-4 backdrop-blur-sm">
                                        <h4 class="font-semibold text-white mb-4 text-center">Nuestra Ubicación</h4>
                                        <div class="bg-white rounded-lg overflow-hidden shadow-md">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3869.8039962776797!2d-87.1891958!3d14.088744799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6fa2d3cbe98797%3A0x53c925da6514647b!2sCentro%20C%C3%ADvico%20Gubernamental%20Jos%C3%A9%20Cecilio%20Del%20Valle!5e0!3m2!1ses!2shn!4v1748538636999!5m2!1ses!2shn" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <a href="https://maps.google.com" target="_blank" class="inline-flex items-center px-4 py-2 bg-[#ad8411] bg-opacity-20 hover:bg-opacity-30 transition-all duration-300 rounded-full text-white text-sm font-medium">
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
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-[#00903b] mb-6">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#263b80] to-[#87cede]">Galería de Imágenes</span>
                </h2>
                <div class="h-1 w-24 bg-[#263b80] mx-auto mb-6 rounded-full"></div>
                <p class="dga-body-text text-lg text-gray-600 max-w-2xl mx-auto">
                    Conoce nuestras actividades y logros a través de esta colección de imágenes
                </p>
            </div>
            
            <div class="masonry-grid">
                <div class="masonry-item"><div class="gallery-card"><div class="image-container"><img src="/wp-content/uploads/2025/05/DGA.jpeg" alt="Actividad DGA 1" class="gallery-image"></div></div></div>
                <div class="masonry-item"><div class="gallery-card"><div class="image-container"><img src="/wp-content/uploads/2025/08/Actividad5.jpg" alt="Actividad DGA 2" class="gallery-image"></div></div></div>
                <div class="masonry-item"><div class="gallery-card"><div class="image-container"><img src="/wp-content/uploads/2025/08/Actividad3.jpg" alt="Actividad DGA 3" class="gallery-image"></div></div></div>
                <div class="masonry-item"><div class="gallery-card"><div class="image-container"><img src="/wp-content/uploads/2025/06/DJI_0485.jpg" alt="Actividad DGA 4" class="gallery-image"></div></div></div>
                <div class="masonry-item"><div class="gallery-card"><div class="image-container"><img src="/wp-content/uploads/2025/06/DJI_0483.jpg" alt="Actividad DGA 5" class="gallery-image"></div></div></div>
                <div class="masonry-item"><div class="gallery-card"><div class="image-container"><img src="/wp-content/uploads/2025/08/Actividad2.jpg" alt="Actividad DGA 6" class="gallery-image"></div></div></div>
                <div class="masonry-item"><div class="gallery-card"><div class="image-container"><img src="/wp-content/uploads/2025/08/Actividad4.jpg" alt="Actividad DGA 7" class="gallery-image"></div></div></div>
                <div class="masonry-item"><div class="gallery-card"><div class="image-container"><img src="/wp-content/uploads/2025/06/DJI_0518.jpg" alt="Actividad DGA 8" class="gallery-image"></div></div></div>
            </div>
        </div>
    </section>

    <!-- Biblioteca Virtual DGA -->
    <section class="dga-biblioteca py-24 relative overflow-hidden bg-gray-50">
        <div class="absolute inset-0 opacity-5" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23263b80\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')"></div>
        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-[#263b80] via-[#87cede] to-[#263b80]"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-block text-[#ad8411] font-semibold tracking-widest uppercase text-sm mb-3">Recursos en línea</span>
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#263b80] to-[#264da0]">Biblioteca Virtual DGA</span>
                </h2>
                <div class="h-1 w-24 bg-[#ad8411] mx-auto mb-6 rounded-full"></div>
                <p class="dga-body-text text-lg text-gray-600 max-w-2xl mx-auto">
                    Acceso público y gratuito a documentos, estudios y herramientas técnicas que apoyan la gestión sostenible del ambiente en Honduras.
                </p>
            </div>

            <div class="flex flex-col sm:flex-row justify-center items-center gap-10 flex-wrap">

                <!-- CARD 1: Educación Ambiental -->
                <div class="dga-flip-card">
                    <div class="dga-flip-content">
                        <div class="dga-front">
                            <img src="/wp-content/uploads/2026/04/DGA_Educacion_Ambiental-scaled.jpg" alt="Educación Ambiental" class="dga-front-img">
                            <div class="dga-front-overlay"></div>
                            <div class="dga-front-content">
                                <span class="dga-badge">Biblioteca Virtual</span>
                                <div class="dga-front-desc">
                                    <div class="dga-front-title">
                                        <p>Educación Ambiental</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 opacity-60 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                                        </svg>
                                    </div>
                                    <p class="dga-card-footer">Pasa el cursor para más información</p>
                                </div>
                            </div>
                        </div>
                        <div class="dga-back">
                            <div class="dga-spin-ring"></div>
                            <div class="dga-back-inner">
                                <div class="dga-back-blob" id="blob-edu-1"></div>
                                <div class="dga-back-blob" id="blob-edu-2"></div>
                                <div class="dga-back-blob" id="blob-edu-3"></div>
                                <div class="relative z-10 flex flex-col items-center gap-5 px-6 text-center">
                                    <div class="w-14 h-14 rounded-full bg-[#87cede] bg-opacity-20 flex items-center justify-center border border-[#87cede] border-opacity-40">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-[#87cede]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                                        </svg>
                                    </div>
                                    <p class="text-white text-opacity-70 text-sm leading-relaxed">Materiales, guías y recursos pedagógicos para la sensibilización y formación ambiental ciudadana.</p>
                                    <a href="/direcciones/dga/educacion-ambiental/" class="dga-card-btn">
                                        Explorar recursos
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 2: Prevención Ambiental -->
                <div class="dga-flip-card">
                    <div class="dga-flip-content">
                        <div class="dga-front">
                            <img src="/wp-content/uploads/2026/04/DGA_Prevencion_Ambiental-scaled.jpg" alt="Prevención Ambiental" class="dga-front-img">
                            <div class="dga-front-overlay dga-overlay-green"></div>
                            <div class="dga-front-content">
                                <span class="dga-badge">Biblioteca Virtual</span>
                                <div class="dga-front-desc">
                                    <div class="dga-front-title">
                                        <p>Prevención Ambiental</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 opacity-60 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
                                    </div>
                                    <p class="dga-card-footer">Pasa el cursor para más información</p>
                                </div>
                            </div>
                        </div>
                        <div class="dga-back">
                            <div class="dga-spin-ring dga-spin-green"></div>
                            <div class="dga-back-inner">
                                <div class="dga-back-blob dga-blob-green" id="blob-prev-1"></div>
                                <div class="dga-back-blob dga-blob-green" id="blob-prev-2"></div>
                                <div class="relative z-10 flex flex-col items-center gap-5 px-6 text-center">
                                    <div class="w-14 h-14 rounded-full bg-[#00903b] bg-opacity-20 flex items-center justify-center border border-[#00903b] border-opacity-40">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-[#7dbb5c]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
                                    </div>
                                    <p class="text-white text-opacity-70 text-sm leading-relaxed">Normativas, protocolos y herramientas para la identificación y mitigación de impactos ambientales.</p>
                                    <a href="/direcciones/dga/prevencion-ambiental/" class="dga-card-btn dga-btn-green">
                                        Explorar recursos
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 3: Residuos Sólidos -->
                <div class="dga-flip-card">
                    <div class="dga-flip-content">
                        <div class="dga-front">
                            <img src="/wp-content/uploads/2026/04/DGA_Residuos_Solidos-scaled.jpg" alt="Residuos Sólidos" class="dga-front-img">
                            <div class="dga-front-overlay dga-overlay-gold"></div>
                            <div class="dga-front-content">
                                <span class="dga-badge">Biblioteca Virtual</span>
                                <div class="dga-front-desc">
                                    <div class="dga-front-title">
                                        <p>Residuos Sólidos</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 opacity-60 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3"/></svg>
                                    </div>
                                    <p class="dga-card-footer">Pasa el cursor para más información</p>
                                </div>
                            </div>
                        </div>
                        <div class="dga-back">
                            <div class="dga-spin-ring dga-spin-gold"></div>
                            <div class="dga-back-inner">
                                <div class="dga-back-blob dga-blob-gold" id="blob-res-1"></div>
                                <div class="dga-back-blob dga-blob-gold" id="blob-res-2"></div>
                                <div class="relative z-10 flex flex-col items-center gap-5 px-6 text-center">
                                    <div class="w-14 h-14 rounded-full bg-[#ad8411] bg-opacity-20 flex items-center justify-center border border-[#ad8411] border-opacity-40">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-[#ad8411]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3"/></svg>
                                    </div>
                                    <p class="text-white text-opacity-70 text-sm leading-relaxed">Planes, estudios y estadísticas sobre gestión integral de residuos sólidos a nivel municipal y nacional.</p>
                                    <a href="/direcciones/dga/residuos-solidos/" class="dga-card-btn dga-btn-gold">
                                        Explorar recursos
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>

<style>
@import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap');

/* Fuente base */
.dga-page {
    font-family: 'Outfit', sans-serif;
}

/* Cuerpo de texto — DM Sans */
.dga-body-text {
    font-family: 'DM Sans', sans-serif;
}

/* ── Título hero — gradiente animado igual que el resto de templates ── */
.dga-hero-title {
    font-size: clamp(32px, 5.5vw, 62px);
    font-weight: 800;
    line-height: 1.08;
    margin: 0 0 24px;
    background: linear-gradient(180deg, #ffffff 20%, #ad8411 60%, #ffffff 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    background-size: 100% 200%;
    animation: gradientShift 6s ease infinite;
}

@keyframes gradientShift {
    0%, 100% { background-position: 0% 0%; }
    50%       { background-position: 0% 100%; }
}

/* ── Patrón de puntos — igual que el resto de templates ── */
.dga-hero-dots {
    --dot-color: rgba(135, 206, 222, 0.30);
    --dot-size: 3rem;

    position: absolute;
    inset: 0;
    z-index: 1;
    pointer-events: none;

    background-image:
        radial-gradient(var(--dot-color) 5%, transparent 6%),
        radial-gradient(var(--dot-color) 5%, transparent 6%);
    background-position:
        0 0,
        calc(var(--dot-size) / 2) calc(var(--dot-size) / 2);
    background-size: var(--dot-size) var(--dot-size);
    background-color: transparent;

    box-shadow: inset 0 0 140px rgba(173, 132, 17, 0.10);

    mask-image: radial-gradient(
        ellipse 100% 100% at 50% 50%,
        rgba(0,0,0,0.60) 20%,
        rgba(0,0,0,0.30) 65%,
        transparent 100%
    );
    -webkit-mask-image: radial-gradient(
        ellipse 100% 100% at 50% 50%,
        rgba(0,0,0,0.60) 20%,
        rgba(0,0,0,0.30) 65%,
        transparent 100%
    );
}

/* ══════════════════════════════════════════════
   MASONRY GALLERY
══════════════════════════════════════════════ */
.masonry-grid {
    column-count: 1;
    column-gap: 1.5rem;
    line-height: 0;
}
@media (min-width: 640px)  { .masonry-grid { column-count: 2; } }
@media (min-width: 1024px) { .masonry-grid { column-count: 3; } }
@media (min-width: 1280px) { .masonry-grid { column-count: 4; } }

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
    box-shadow: 0 4px 6px -1px rgba(35,31,32,0.1), 0 2px 4px -1px rgba(35,31,32,0.06);
    transition: all 0.3s ease;
    transform: translateY(0);
    position: relative;
    cursor: pointer;
}
.gallery-card:hover .overlay-icon {
    background-color: rgba(135,206,222,0.3);
    border-color: rgba(135,206,222,0.8);
    transform: scale(1.1);
}
@media (max-width: 639px) { .masonry-item { margin-bottom: 1rem; } }

.gallery-image {
    background-color: #f3f4f6;
    background-image: linear-gradient(45deg, transparent 40%, rgba(255,255,255,0.5) 50%, transparent 60%);
    background-size: 200% 100%;
    animation: shimmer 1.5s infinite;
}
.gallery-image[src] { animation: none; background: none; }

@keyframes shimmer {
    0%   { background-position: -200% 0; }
    100% { background-position: 200% 0; }
}
.gallery-card::before {
    content: '';
    position: absolute;
    inset: 0;
    border: 2px solid transparent;
    border-radius: 1rem;
    background: linear-gradient(135deg, #00903b, #87cede) border-box;
    -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
    -webkit-mask-composite: subtract;
    mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
    mask-composite: subtract;
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: 1;
    pointer-events: none;
}
.gallery-card:hover::before { opacity: 1; }

/* ══════════════════════════════════════════════
   FLIP CARDS — BIBLIOTECA VIRTUAL DGA
══════════════════════════════════════════════ */
.dga-flip-card {
    overflow: visible;
    width: 280px;
    height: 380px;
    perspective: 1000px;
}
.dga-flip-content {
    width: 100%;
    height: 100%;
    transform-style: preserve-3d;
    transition: transform 500ms cubic-bezier(.4,.2,.2,1);
    box-shadow: 0 0 18px 2px rgba(38,59,128,0.45);
    border-radius: 12px;
    position: relative;
}
.dga-flip-card:hover .dga-flip-content { transform: rotateY(180deg); }

.dga-front,
.dga-back {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden;
    border-radius: 12px;
    overflow: hidden;
}

.dga-front { color: white; }

/* Cuando la card está volteada el front queda invisible pero
   sigue en el DOM — sin esto bloquea los clicks del botón del back */
.dga-flip-card:hover .dga-front { pointer-events: none; }
.dga-front-img {
    position: absolute;
    inset: 0;
    width: 100%; height: 100%;
    object-fit: cover;
    object-position: center;
}
.dga-front-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, rgba(38,59,128,0.20) 0%, rgba(38,59,128,0.72) 100%);
}
.dga-overlay-green { background: linear-gradient(to bottom, rgba(0,80,30,0.20) 0%, rgba(0,100,40,0.72) 100%); }
.dga-overlay-gold  { background: linear-gradient(to bottom, rgba(80,55,0,0.20) 0%, rgba(120,80,8,0.72) 100%); }

.dga-front-content {
    position: absolute;
    inset: 0;
    padding: 14px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    z-index: 2;
}
.dga-badge {
    background-color: rgba(0,0,0,0.35);
    padding: 3px 12px;
    border-radius: 9999px;
    backdrop-filter: blur(4px);
    font-size: 0.65rem;
    font-weight: 600;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    width: fit-content;
    border: 1px solid rgba(255,255,255,0.15);
}
.dga-front-desc {
    background-color: rgba(0,0,0,0.50);
    backdrop-filter: blur(6px);
    border-radius: 8px;
    padding: 10px 12px;
    box-shadow: 0 0 14px 5px rgba(0,0,0,0.4);
}
.dga-front-title {
    font-size: 1rem;
    font-weight: 700;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 6px;
}
.dga-front-title p { flex: 1; line-height: 1.3; }
.dga-card-footer {
    font-family: 'DM Sans', sans-serif;
    color: rgba(255,255,255,0.55);
    font-size: 0.68rem;
    margin-top: 5px;
}

.dga-back {
    background-color: #0d1b3e;
    display: flex;
    align-items: center;
    justify-content: center;
    transform: rotateY(180deg);
}
.dga-spin-ring {
    position: absolute;
    display: block;
    width: 200px;
    height: 160%;
    background: linear-gradient(90deg, transparent, #87cede, #264da0, #87cede, #264da0, transparent);
    animation: dga-spin 4000ms infinite linear;
    pointer-events: none; /* ← no intercepta clicks */
}
.dga-spin-green { background: linear-gradient(90deg, transparent, #7dbb5c, #00903b, #7dbb5c, #00903b, transparent); }
.dga-spin-gold  { background: linear-gradient(90deg, transparent, #ad8411, #f5c842, #ad8411, #f5c842, transparent); }

@keyframes dga-spin {
    0%   { transform: rotateZ(0deg); }
    100% { transform: rotateZ(360deg); }
}

.dga-back-inner {
    position: absolute;
    width: 99%; height: 99%;
    background-color: #0d1b3e;
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}

.dga-back-blob {
    position: absolute;
    border-radius: 50%;
    filter: blur(22px);
    animation: dga-float 3000ms infinite ease-in-out;
    pointer-events: none; /* ← no intercepta clicks */
}
#blob-edu-1 { width:120px; height:120px; background:rgba(38,77,160,0.5);   top:-20px; left:10px; }
#blob-edu-2 { width:80px;  height:80px;  background:rgba(135,206,222,0.4); top:30px;  left:180px; animation-delay:-1000ms; }
#blob-edu-3 { width:50px;  height:50px;  background:rgba(38,59,128,0.6);   top:200px; left:60px;  animation-delay:-2000ms; }
.dga-blob-green:nth-child(1) { width:120px; height:120px; background:rgba(0,144,59,0.45);   top:-20px; left:10px; }
.dga-blob-green:nth-child(2) { width:70px;  height:70px;  background:rgba(125,187,92,0.40); top:200px; left:160px; animation-delay:-1200ms; }
.dga-blob-gold:nth-child(1)  { width:110px; height:110px; background:rgba(173,132,17,0.45); top:-20px; left:20px; }
.dga-blob-gold:nth-child(2)  { width:65px;  height:65px;  background:rgba(245,200,66,0.35); top:210px; left:170px; animation-delay:-1500ms; }

@keyframes dga-float {
    0%   { transform: translateY(0px); }
    50%  { transform: translateY(12px); }
    100% { transform: translateY(0px); }
}

.dga-card-btn {
    display: inline-flex;
    align-items: center;
    padding: 0.55rem 1.4rem;
    border-radius: 9999px;
    font-size: 0.8rem;
    font-weight: 600;
    background: linear-gradient(135deg, #264da0, #87cede);
    color: white;
    text-decoration: none;
    transition: opacity 0.2s, transform 0.2s;
    box-shadow: 0 4px 14px rgba(38,77,160,0.45);
}
.dga-card-btn:hover { opacity: 0.88; transform: scale(1.04); }
.dga-btn-green { background: linear-gradient(135deg, #00903b, #7dbb5c); box-shadow: 0 4px 14px rgba(0,144,59,0.45); }
.dga-btn-gold  { background: linear-gradient(135deg, #ad8411, #f5c842); color: #1a0e00; box-shadow: 0 4px 14px rgba(173,132,17,0.45); }

@media (hover: none) and (pointer: coarse) {
    .dga-flip-card { height: auto; }
    .dga-flip-content { transform: none !important; box-shadow: 0 6px 20px rgba(38,59,128,0.3); }
    .dga-front { display: none; }
    .dga-back  { position: relative; height: 320px; transform: none; }
}
</style>

<?php get_footer(); ?>