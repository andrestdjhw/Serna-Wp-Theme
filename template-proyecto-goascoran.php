<?php
/**
 * Template Name: Proyecto Goascoran Template
 * Template Post Type: page
 */

get_header(); ?>

<div class="proyecto-goascoran-page">
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
                    Proyecto Binacional Cuenca Goascorán
                </h1>
                <div class="mt-8 flex justify-center space-x-4">
                    <a href="https://ee.kobotoolbox.org/x/2DZJoJvP" target="_blank" class="px-6 py-3 border-2 border-white text-white font-bold rounded-full hover:bg-[#ee3725] hover:text-white hover:border-[#ee3725] transition-colors duration-300">
                        ¡Ponte en contacto con nosotros!
                    </a>
                </div>
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

    <div class="bg-gray-50">
        <!-- Story Section Mejorada -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:flex lg:items-start lg:gap-8">
                    <!-- Contenido de texto -->
                    <div class="lg:w-3/5 mb-8 lg:mb-0">
                        <h2 class="text-3xl md:text-4xl font-bold mb-6">
                            <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#00903b] to-[#7dbb5c]">
                                Sobre Nosotros
                            </span>
                        </h2>
                        <div class="h-1 w-20 bg-[#87cede] mb-6"></div>
                        
                        <!-- Texto inicial siempre visible -->
                        <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                            Este proyecto es una iniciativa regional centrada en la cuenca transfronteriza del Goascorán, que se encuentra entre el este de El Salvador y el suroeste de Honduras. La cuenca del Goascorán desemboca en el Golfo de Fonseca y consta de 36 subcuencas, abarcando 13 municipios en los departamentos salvadoreños de La Unión y Morazán y 16 municipios en los departamentos hondureños de La Paz, Valle, Comayagua y Francisco Morazán. 
                        </p>
                        <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                            Fortalecimiento de las capacidades de adaptación de las comunidades vulnerables al clima en la cuenca del Goascorán de El Salvador y Honduras a través de prácticas y servicios de adaptación comunitarios integrados.
                        </p>
                        <!-- Contenido expandible -->
                        <div id="expandable-content" class="overflow-hidden transition-all duration-500 ease-in-out max-h-0">
                            <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                                Existen varios programas y proyectos en curso en la cuenca del Goascorán que abordan la adaptación al cambio climático y el desarrollo sostenible. Este proyecto buscará complementar y construir sobre estas iniciativas existentes, evitando la duplicación de esfuerzos y fomentando las sinergias.
                            </p>
                        </div>
                        
                        <!-- Botón Leer más/menos -->
                        <button 
                            id="toggle-btn" 
                            class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-[#00903b] to-[#7dbb5c] text-white font-semibold rounded-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300 group"
                            onclick="toggleContent()"
                        >
                            <span id="btn-text">Leer más</span>
                            <svg id="arrow-icon" class="ml-2 w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                    </div>
                    
                    <!-- Imagen -->
                    <div class="lg:w-2/5">
                        <div class="relative group">
                            <!-- Contenedor con efecto de hover mejorado -->
                            <div class="bg-gradient-to-br from-[#87cede] via-cyan-400 to-cyan-600 rounded-2xl p-1 shadow-2xl transform hover:scale-105 transition-all duration-300">
                                <div class="bg-white rounded-xl overflow-hidden">
                                    <img 
                                        src="/wp-content/uploads/2025/12/PortadaProyectoGoascoran-scaled.jpg" 
                                        alt="Banner PlanetGold - Minería responsable en Honduras" 
                                        class="w-full h-64 lg:h-80 object-cover transition-transform duration-300 group-hover:scale-110"
                                    >
                                </div>
                            </div>
                            
                            <!-- Overlay con información adicional -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                                <div class="p-6 text-white">
                                    <h3 class="text-xl font-bold mb-2">Proyecto Binacional Cuenca Goascorán</h3>
                                    <p class="text-sm">Comunidades Resilientes al Cambio Climático</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Estadísticas destacadas -->
                        <div class="mt-6 grid grid-cols-2 gap-4">
                            <div class="bg-gradient-to-r from-[#00903b] to-[#7dbb5c] rounded-lg p-4 text-white text-center">
                                <div class="text-2xl font-bold">36</div>
                                <div class="text-sm opacity-90">Subcuencas</div>
                            </div>
                            <div class="bg-gradient-to-r from-[#87cede] to-cyan-500 rounded-lg p-4 text-white text-center">
                                <div class="text-2xl font-bold">29</div>
                                <div class="text-sm opacity-90">Municipios</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Stats Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-[#00903b] to-[#7dbb5c] rounded-2xl p-8 md:p-12 text-white">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center">
                    <!-- Stat 1 -->
                    <div class="p-4">
                        <div class="text-4xl font-bold mb-2 text-[#e3a220] mb-6 bg-clip-text text-transparent bg-gradient-to-r from-white via-[#87cede] to-[#FFFFFF] animate-gradient">245,000</div>
                        <div class="text-lg">Beneficiarios Indirectos.</div>
                    </div>
                    
                    <!-- Stat 2 -->
                    <div class="p-4">
                        <div class="text-4xl font-bold mb-2 text-[#e3a220] mb-6 bg-clip-text text-transparent bg-gradient-to-r from-white via-[#87cede] to-[#FFFFFF] animate-gradient">6,000</div>
                        <div class="text-lg">Beneficiarios Directos.</div>
                    </div>
                    
                    <!-- Stat 3 -->
                    <div class="p-4">
                        <div class="text-4xl font-bold mb-2 text-[#e3a220] mb-6 bg-clip-text text-transparent bg-gradient-to-r from-white via-[#87cede] to-[#FFFFFF] animate-gradient">51%</div>
                        <div class="text-lg">De los Beneficiarios Directos son mujeres.</div>
                    </div>

                    <!-- Stat 4 -->
                    <div class="p-4">
                        <div class="text-4xl font-bold mb-2 text-[#e3a220] mb-6 bg-clip-text text-transparent bg-gradient-to-r from-white via-[#87cede] to-[#FFFFFF] animate-gradient">70%</div>
                        <div class="text-lg">De los Beneficiarios Directos en Honduras, se identifican como pueblos originarios.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="py-16 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-2">
                <h2 class="text-3xl font-bold text-[#00903b]"><span class="bg-clip-text text-transparent bg-gradient-to-r from-[#00903b] to-[#7dbb5c]">Logros Recientes del Proyecto en Honduras</span></h2>
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
                                <h3 class="text-xl font-bold text-[#00903b] mb-2">Se han seleccionado 3.300 hogares para beneficiarse del proyecto</h3>
                                <p class="text-gray-600">Con tasas de participación de  51% para las mujeres, 70% para grupos indígenas y la participación de los jóvenes es de 14%, superado las metas para el proyecto.</p>
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
                                <h3 class="text-xl font-bold text-[#5ca54c] mb-2">Se tiene una evaluación diagnóstica de las estaciones en la cuenca del río Goascorán</h3>
                                <p class="text-gray-600">Se identificó 11 estaciones hidrológicas, meteorológicas y pluviométricas operativas, junto con siete sitios potenciales para nuevas estaciones meteorológicas.</p>
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
                                <h3 class="text-xl font-bold text-[#7dbb5c] mb-2">Se han establecido alianzas estratégicas con actores gubernamentales, comunitarios y organizaciones clave para fortalecer la adaptación climática en la cuenca.</h3>
                                <p class="text-gray-600">Entre ellas, la DGRH, que lidera la implementación de planes de adaptación en las 12 microcuencas; el ICF, que trabaja en procesos de formación orientados a la prevención de incendios forestales; y CENAOS/COPECO, socio estratégico para mejorar el acceso a información climática y meteorológica.</p>
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
                                <h3 class="text-xl font-bold text-[#00903b] mb-2">A nivel comunitario, el Consejo de Cuenca integrará las necesidades de adaptación.</h3>
                                <p class="text-gray-600">En los planes de desarrollo local, impulsará procesos de formación y elaborará un manual de adaptación. Asimismo, ADEPES desarrolla una planificación detallada para fortalecer el acceso a mecanismos de transferencia de riesgos, como seguros, dirigidos a pequeños agricultores y comunidades. Finalmente, el Programa Mundial de Alimentos (WFP) ha diseñado una estrategia basada en un diagnóstico sobre seguros paramétricos, definiendo la ruta para beneficiar aproximadamente a 3,300 personas del proyecto, brindando además acompañamiento, formación y seguimiento (comenzará en 2026).</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-[#00903b] mb-6">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#00903b] to-[#7dbb5c]">
                        Galería de Actividades
                    </span>
                </h2>
                <div class="h-1 w-24 bg-[#87cede] mx-auto mb-8 rounded-full"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Conoce las principales actividades y logros del Proyecto Goascorán en Honduras
                </p>
            </div>

            <!-- Enhanced Masonry Gallery Grid -->
            <div class="enhanced-masonry-grid mb-16">
                <!-- Gallery Item 1 -->
                <div class="masonry-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="enhanced-gallery-card group">
                        <div class="image-container">
                            <img src="/wp-content/uploads/2025/12/PrimerTallerFocalizacion.jpeg" alt="Actividad Proyecto Goascoran 1" class="gallery-image">
                            <div class="image-overlay">
                                <div class="overlay-content">
                                    <div class="overlay-icon">
                                        <!-- Presentation/Meeting Icon -->
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2M7 4h10M7 4l-2 14h14l-2-14M11 9h2M9 13h6"></path>
                                        </svg>
                                    </div>
                                    <h3 class="overlay-title">Primer taller de Focalización</h3>
                                    <p class="overlay-text">En Marcala, La Paz, Para definición de criterios de selección.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 2 -->
                <div class="masonry-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="enhanced-gallery-card group">
                        <div class="image-container">
                            <img src="/wp-content/uploads/2025/12/WhatsApp-Image-2025-11-07-at-10.32.53-AM-4.jpeg" alt="Actividad Proyecto Goascoran 2" class="gallery-image">
                            <div class="image-overlay">
                                <div class="overlay-content">
                                    <div class="overlay-icon">
                                        <!-- Tunnel/Mining Icon -->
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                        </svg>
                                    </div>
                                    <h3 class="overlay-title">Tercer taller de sensibilización de genero</h3>
                                    <p class="overlay-text">En salon municipal de Aguanqueterique, La Paz</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 3 -->
                <div class="masonry-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="enhanced-gallery-card group">
                        <div class="image-container">
                            <img src="/wp-content/uploads/2025/12/WhatsApp-Image-2025-11-07-at-10.32.52-AM.jpeg" alt="Actividad Proyecto Goascoran 3" class="gallery-image">
                            <div class="image-overlay">
                                <div class="overlay-content">
                                    <div class="overlay-icon">
                                        <!-- Cooperation/Handshake Icon -->
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="overlay-title">Tercer taller de sensibilización de genero</h3>
                                    <p class="overlay-text">En salon municipal de Aguanqueterique, La Paz</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 4 -->
                <div class="masonry-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="enhanced-gallery-card group">
                        <div class="image-container">
                            <img src="/wp-content/uploads/2025/12/PrimeraValidacionBeneficiarios.jpeg" alt="Actividad Proyecto Goascoran 4" class="gallery-image">
                            <div class="image-overlay">
                                <div class="overlay-content">
                                    <div class="overlay-icon">
                                        <!-- Map/Location Icon -->
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                                        </svg>
                                    </div>
                                    <h3 class="overlay-title">Segundo taller de Focalización</h3>
                                    <p class="overlay-text">En Marcala, La Paz, Para validación de beneficiarios.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 5 -->
                <div class="masonry-item" data-aos="fade-up" data-aos-delay="500">
                    <div class="enhanced-gallery-card group">
                        <div class="image-container">
                            <img src="/wp-content/uploads/2025/12/ValidacionSalvaguarda-scaled.jpg" alt="Actividad Proyecto Goascoran 5" class="gallery-image">
                            <div class="image-overlay">
                                <div class="overlay-content">
                                    <div class="overlay-icon">
                                        <!-- Survey/Clipboard Icon -->
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="overlay-title">Validación de Políticas de Salvaguarda</h3>
                                    <p class="overlay-text">En Guajiquiro, La Paz</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 6 -->
                <div class="masonry-item" data-aos="fade-up" data-aos-delay="600">
                    <div class="enhanced-gallery-card group">
                        <div class="image-container">
                            <img src="/wp-content/uploads/2025/12/DiagnosticoEstacionesMeteorologicas-scaled.jpeg" alt="Actividad Planet Gold 6" class="gallery-image">
                            <div class="image-overlay">
                                <div class="overlay-content">
                                    <div class="overlay-icon">
                                        <!-- Women/Female Icon -->
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="overlay-title">Inspección de estación hidro-meteorológicas</h3>
                                    <p class="overlay-text">En la cuenca del Goascorán</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- sección: CTA para acceder a SLAS -->
        <section class="mb-20">
            <div class="relative overflow-hidden rounded-lg">
                <!-- Fondo Gradiente -->
                <div class="absolute inset-0 bg-gradient-to-r from-[#00903b] via-[#5ca54c] to-[#7dbb5c]"></div>
                
                <!-- Elementos decorativos -->
                <div class="absolute inset-0 opacity-20">
                    <div class="absolute top-4 right-4 w-20 h-20 bg-[#87cede] rounded-full mix-blend-multiply filter blur-lg animate-pulse"></div>
                    <div class="absolute bottom-4 left-4 w-32 h-32 bg-[#87cede] rounded-full mix-blend-multiply filter blur-xl animate-pulse" style="animation-delay: 2s;"></div>
                </div>
                
                <!-- Patrón de fondo -->
                <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'40\' height=\'40\' viewBox=\'0 0 40 40\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.3\'%3E%3Cpath d=\'M20 20c0 11.046-8.954 20-20 20v20h40V20H20z\'/%3E%3C/g%3E%3C/svg%3E')"></div>
                
                <!-- Contenido -->
                <div class="relative z-10 px-8 py-16 md:px-16 md:py-20 text-center">
                    <div class="max-w-4xl mx-auto">
                        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                            Gestión del Conocimiento
                        </h2>
                        <p class="text-lg md:text-xl text-white opacity-90 mb-8 leading-relaxed">
                            Accede a la biblioteca de recursos generados por el proyecto.
                        </p>
                        
                        <!-- Botones CTA -->
                        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                            <a href="https://www.adaptation-fund.org/project/strengthening-the-adaptive-capacities-of-climate-vulnerable-communities-in-the-goascoran-watershed-of-el-salvador-and-honduras-through-integrated-community-based-adaptation-practices-and-services/" target="_blank" 
                               class="inline-flex items-center px-8 py-4 bg-white text-[#00903b] font-bold rounded-full hover:bg-gray-100 transform hover:-translate-y-1 transition-all duration-300 shadow-lg hover:shadow-xl">
                                <i class="fas fa-external-link-alt mr-3"></i>
                                Mas información
                            </a>
                            
                            <a href="#" 
                               class="inline-flex items-center px-8 py-4 border-2 border-white text-white font-bold rounded-full hover:bg-white hover:text-[#00903b] transform hover:-translate-y-1 transition-all duration-300">
                                <i class="fas fa-file-download mr-3"></i>
                                Descargar Guía
                            </a>
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
    
    .shadow-custom {
        box-shadow: 0 10px 15px -3px rgba(135, 206, 222, 0.79), 0 4px 6px -2px rgba(135, 206, 222, 0.05);
    }

/* Enhanced Gallery Styles - Mejorado con márgenes apropiados */
.enhanced-masonry-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-template-rows: repeat(2, auto);
    gap: 2rem;
    max-width: 100%;
    margin: 0; /* Removemos márgenes automáticos */
}

@media (max-width: 1280px) {
    .enhanced-masonry-grid {
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: repeat(3, auto);
        gap: 1.5rem;
    }
}

@media (max-width: 1024px) {
    .enhanced-masonry-grid {
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(4, auto);
        gap: 1.5rem;
    }
}

@media (max-width: 640px) {
    .enhanced-masonry-grid {
        grid-template-columns: 1fr;
        grid-template-rows: repeat(8, auto);
        gap: 1rem;
    }
}

@media (max-width: 640px) {
    .enhanced-masonry-grid {
        grid-template-columns: 1fr;
        grid-template-rows: repeat(8, auto);
        gap: 1.5rem;
    }
}

.masonry-item {
    width: 100%;
    height: fit-content;
    break-inside: avoid;
}

.enhanced-gallery-card {
    position: relative;
    background: white;
    border-radius: 1.5rem;
    overflow: hidden;
    box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    transform: translateY(0) scale(1);
    cursor: pointer;
    height: 100%;
}

.enhanced-gallery-card:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 25px 50px -12px rgba(59, 130, 246, 0.25), 0 25px 25px -12px rgba(59, 130, 246, 0.1);
}

.enhanced-gallery-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, #87cede, #1d4ed820, #60a5fa20);
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: 1;
    border-radius: 1.5rem;
}

.enhanced-gallery-card:hover::before {
    opacity: 1;
}

.image-container {
    position: relative;
    overflow: hidden;
    border-radius: 1.5rem;
    height: 100%;
}

.gallery-image {
    width: 100%;
    height: 250px;
    object-fit: cover;
    display: block;
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    filter: brightness(1) saturate(1);
}

.enhanced-gallery-card:hover .gallery-image {
    transform: scale(1.1);
    filter: brightness(1.1) saturate(1.2);
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(59, 130, 246, 0.85), rgba(29, 78, 216, 0.85), rgba(96, 165, 250, 0.85));
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    z-index: 2;
}

.enhanced-gallery-card:hover .image-overlay {
    opacity: 1;
}

.overlay-content {
    text-align: center;
    color: white;
    transform: translateY(20px);
    transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    padding: 1rem;
}

.enhanced-gallery-card:hover .overlay-content {
    transform: translateY(0);
}

.overlay-icon {
    width: 4rem;
    height: 4rem;
    background: rgba(255, 255, 255, 0.2);
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}

.enhanced-gallery-card:hover .overlay-icon {
    background: rgba(255, 255, 255, 0.3);
    border-color: rgba(255, 255, 255, 0.6);
    transform: scale(1.1) rotateY(360deg);
}

.overlay-title {
    font-size: 1.125rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    line-height: 1.4;
}

.overlay-text {
    font-size: 0.875rem;
    opacity: 0.9;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
    line-height: 1.3;
}

/* Enhanced animations */
@keyframes gradient {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

.animate-gradient {
    background-size: 200% 200%;
    animation: gradient 6s ease infinite;
}

/* Floating animation for decorative elements */
@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(180deg); }
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}

/* Enhanced button styles */
.shadow-3xl {
    box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25);
}

/* Smooth scroll behavior */
html {
    scroll-behavior: smooth;
}

/* Loading states */
.gallery-image {
    background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
    background-size: 200% 100%;
    animation: loading 1.5s infinite;
}

.gallery-image[src] {
    animation: none;
    background: none;
}

@keyframes loading {
    0% { background-position: 200% 0; }
    100% { background-position: -200% 0; }
}

/* Focus styles for accessibility */
.enhanced-gallery-card:focus {
    outline: 3px solid #3b82f6;
    outline-offset: 2px;
}

button:focus {
    outline: 3px solid #3b82f6;
    outline-offset: 2px;
}

/* Contenedor para las últimas 2 imágenes en 2 columnas */
.enhanced-masonry-grid .masonry-item:nth-child(7) {
    grid-column: 1 / 3;
}

.enhanced-masonry-grid .masonry-item:nth-child(8) {
    grid-column: 3 / 5;
}

/* Responsivo para tablets (3 columnas) */
@media (max-width: 1280px) {
    .enhanced-masonry-grid .masonry-item:nth-child(7) {
        grid-column: 1 / 2;
    }
    
    .enhanced-masonry-grid .masonry-item:nth-child(8) {
        grid-column: 2 / 4;
    }
}

/* Responsivo para tablets pequeñas (2 columnas) */
@media (max-width: 1024px) {
    .enhanced-masonry-grid .masonry-item:nth-child(7),
    .enhanced-masonry-grid .masonry-item:nth-child(8) {
        grid-column: span 1;
    }
}

/* Responsivo para móviles */
@media (max-width: 640px) {
    .enhanced-masonry-grid .masonry-item:nth-child(7),
    .enhanced-masonry-grid .masonry-item:nth-child(8) {
        grid-column: span 1;
    }
}

</style>

<script>
    function toggleContent() {
        const content = document.getElementById('expandable-content');
        const button = document.getElementById('toggle-btn');
        const btnText = document.getElementById('btn-text');
        const arrowIcon = document.getElementById('arrow-icon');
            
        if (content.style.maxHeight === '0px' || content.style.maxHeight === '') {
            // Expandir
                content.style.maxHeight = content.scrollHeight + 'px';
                btnText.textContent = 'Leer menos';
                arrowIcon.style.transform = 'rotate(180deg)';
                button.classList.add('bg-gradient-to-r', 'from-[#87cede]', 'to-cyan-500');
                button.classList.remove('from-[#00903b]', 'to-[#7dbb5c]');
            } else {
                // Contraer
                content.style.maxHeight = '0px';
                btnText.textContent = 'Leer más';
                arrowIcon.style.transform = 'rotate(0deg)';
                button.classList.remove('from-[#00903b]', 'to-[#7dbb5c]');
                button.classList.add('from-[#00903b]', 'to-[#7dbb5c]');
            }
    }
</script>
<?php get_footer(); ?>