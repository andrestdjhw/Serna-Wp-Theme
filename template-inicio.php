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
        <div class="absolute inset-0 bg-gradient-to-br from-[#264da0] via-[#263b80] to-[#264da0]"></div>
        
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
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#ad8411] mb-6 bg-clip-text text-transparent bg-gradient-to-b from-[#ad8411] via-[#FFFFFF] to-[#ad8411] animate-gradient">
                    Secretaría de Recursos Naturales y Ambiente
                </h1>
                <p class="text-xl md:text-2xl text-white max-w-3xl mx-auto leading-relaxed opacity-90">
                    <!-- <cite>Al servicio del pueblo y por la recuperación de la soberanía de los recursos naturales.</cite> -->
                </p>
                <div class="mt-10 flex justify-center space-x-4">
                    <a href="/nosotros/perfil" class="px-6 py-3 bg-white text-[#231f20] font-bold rounded-full hover:bg-[#AD8411] hover:text-white transition-colors duration-300">
                        Conócenos
                    </a>
                    <a href="#servicios" class="px-6 py-3 border-2 border-white text-white font-bold rounded-full hover:bg-[#231f20] hover:text-white hover:border-[#231f20] transition-colors duration-300">
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
    <div class="main-content-wrapper max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        <!-- Featured Services Section -->
        <section id="servicios" class="section-watermark mb-24">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold  mb-4"><span class="bg-clip-text text-transparent bg-gradient-to-r from-[#264da0] to-[#263b80]">Nuestros Servicios</span></h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Ofrecemos una variedad de servicios para proteger y gestionar los recursos naturales de Honduras
                </p>
                <div class="mt-6">
                    <div class="inline-flex items-center justify-center w-50 h-1 bg-[#ad8411] rounded-full"></div>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div class="card-watermark bg-white rounded-lg shadow-custom overflow-hidden transition-transform duration-300 hover:transform hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-r from-[#263b80] to-[#264da0] text-white flex items-center justify-center">
                    <svg class="h-16 w-16 text-white" xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#ad8411] mb-3">Licencias Ambientales</h3>
                        <p class="text-gray-600 mb-4">
                            Proceso de evaluación y aprobación de proyectos para garantizar el cumplimiento de normas ambientales.
                        </p>
                        <a href="/slas" class="text-[#264da0] font-semibold hover:text-[#ad8411] transition-colors duration-300 flex items-center">
                            Más información
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Service Card 2 -->
                <div class="card-watermark bg-white rounded-lg shadow-custom overflow-hidden transition-transform duration-300 hover:transform hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-r from-[#263b80] to-[#264da0] text-white flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                    </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#ad8411] mb-3">Gestión Forestal</h3>
                        <p class="text-gray-600 mb-4">
                            Planificación y control del uso sostenible de los recursos forestales del país.
                        </p>
                        <a href="/direcciones/deca/" class="text-[#264da0] font-semibold hover:text-[#ad8411] transition-colors duration-300 flex items-center">
                            Más información
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Service Card 3 -->
                <div class="card-watermark bg-white rounded-lg shadow-custom overflow-hidden transition-transform duration-300 hover:transform hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-r from-[#263b80] to-[#264da0] text-white flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                    </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#ad8411] mb-3">Protección del Agua</h3>
                        <p class="text-gray-600 mb-4">
                            Programas para la conservación y uso racional de los recursos hídricos nacionales.
                        </p>
                        <a href="/direcciones/dgrh/" class="text-[#264da0] font-semibold hover:text-[#ad8411] transition-colors duration-300 flex items-center">
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
        <section class="section-watermark mb-24">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-[#00903b] mb-6"><span class="bg-clip-text text-transparent bg-gradient-to-r from-[#263b80] to-[#264da0]">Sobre Nosotros</span></h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        La Secretaría de Recursos Naturales y Ambiente (SERNA) protege y administra los recursos naturales de Honduras, promoviendo el desarrollo sostenible y el cuidado del ambiente para el bienestar de la población.
                    </p>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        La institución lidera la gestión ambiental del país mediante políticas y acciones orientadas al uso responsable del agua, el impulso de energías renovables, la protección de los ecosistemas, la conservación de la biodiversidad y el control de la contaminación,también coordina el manejo del Sistema Nacional de Áreas Protegidas de Honduras (SINAPH), regula actividades vinculadas al aprovechamiento de los recursos naturales y promueve iniciativas que fortalecen el desarrollo sostenible, su trabajo busca garantizar el equilibrio entre crecimiento económico, protección ambiental y calidad de vida para las presentes y futuras generaciones.
                    </p>
                    <a href="/nosotros/perfil" class="px-6 py-3 bg-[#264da0] text-white font-bold rounded-full hover:bg-[#263b80] transition-colors duration-300 inline-flex items-center">
                        Conoce más sobre nosotros
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="relative">
                    <div class="bg-[#87cede] rounded-lg overflow-hidden aspect-w-22 aspect-h-22">
                        <img src="/wp-content/uploads/2026/02/WhatsApp-Image-2026-02-19-at-12.09.24.jpeg" alt="SERNA Honduras" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </section>
        
        <!-- News & Updates Section -->
        <section class="section-watermark mb-24">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-[#00903b] mb-4"><span class="bg-clip-text text-transparent bg-gradient-to-r from-[#263b80] to-[#264da0]">Noticias y Actualizaciones</span></h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Mantente informado sobre nuestras últimas actividades, proyectos y noticias ambientales
                </p>
                <div class="mt-6">
                    <div class="inline-flex items-center justify-center w-50 h-1 bg-[#ad8411] rounded-full"></div>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- News Card 1 -->
                <div class="card-watermark bg-white rounded-lg shadow-lg shadow-custom overflow-hidden">
                    <div class="h-55 overflow-hidden">
                        <img src="/wp-content/uploads/2026/02/Primera_Noticia.jpeg" alt="Nuevas Autoridades" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span class="bg-[#ad8411] text-[#FFFFFF] px-2 py-1 rounded-full text-xs font-semibold mr-3">Nuevo Capítulo</span>
                            <span>6 Febrero 2026</span>
                        </div>
                        <h3 class="text-xl font-bold text-[#264da0] mb-3">¡Nuevo Liderazgo en la SERNA!</h3>
                        <p class="text-gray-600 mb-4 text-sm">El trabajo comenzó donde verdaderamente importa: con la gente, El ministro de Recursos Naturales y Ambiente, <strong>Juan Carlos Ramos</strong>, realizó un recorrido por las distintas áreas de la Secretaría, visitando personalmente a las y los colaboradores en cada uno de sus espacios de trabajo.</p>
                        <p class="text-gray-600 mb-4 text-sm">Un inicio que refleja liderazgo cercano, respeto al talento humano y compromiso con una gestión responsable, en sintonía con la visión del presidente <strong>Nasry Asfura</strong>, quien ha reiterado que el servicio público debe construirse desde el trabajo honesto, el contacto directo con la ciudadanía y el fortalecimiento de las instituciones.</p>
                        <a href="#" class="text-[#231f20] font-semibold hover:text-[#666666] transition-colors duration-300 flex items-center">
                            Leer más
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- News Card 2 -->
                <div class="card-watermark bg-white rounded-lg shadow-custom overflow-hidden">
                    <div class="h-55 overflow-hidden">
                        <img src="/wp-content/uploads/2026/02/Segunda_Noticia.jpg" alt="Convenio Internacional" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span class="bg-[#ad8411] text-[#FFFFFF] px-2 py-1 rounded-full text-xs font-semibold mr-3">Convenio</span>
                            <span>12 Febrero 2026</span>
                        </div>
                        <h3 class="text-xl font-bold text-[#264da0] mb-3">Fortaleciendo Relaciones Internacionales.</h3>
                        <p class="text-gray-600 mb-4 text-sm">
                            El titular de la Secretaría de Recursos Naturales y Ambiente (SERNA), <strong>Juan Carlos Ramos</strong>, sostuvo una importante reunión de trabajo con el Coordinador Residente de la Organización de las Naciones Unidas en Honduras, <strong>Alejandro Álvarez</strong>, y el representante de UNICEF, <strong>Bastiaan Van 't Hoff</strong>, para fortalecer la cooperación estratégica entre el país y el sistema de la ONU.
                        </p>
                        <p class="text-gray-600 mb-4 text-sm">El encuentro abordó iniciativas para atraer inversiones responsables, proteger el ambiente, mejorar la gestión del agua, conservar los recursos naturales y promover acciones para la adaptación y mitigación del cambio climático, con el propósito de fortalecer las capacidades del Estado y generar mayor bienestar para las familias hondureñas.</p>
                        <a href="#" class="text-[#231f20] font-semibold hover:text-[#666666] transition-colors duration-300 flex items-center">
                            Leer más
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- News Card 3 -->
                <div class="card-watermark bg-white rounded-lg shadow-custom overflow-hidden">
                    <div class="h-55 overflow-hidden">
                        <img src="/wp-content/uploads/2026/02/Tercer_Noticia.jpeg" alt="Convenio" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span class="bg-[#ad8411] text-[#FFFFFF] px-2 py-1 rounded-full text-xs font-semibold mr-3">Inversión</span>
                            <span>17 Febrero 2026</span>
                        </div>
                        <h3 class="text-xl font-bold text-[#264da0] mb-3">SERNA y PNUD fortalecen alianza para impulsar proyectos ambientales en Honduras.</h3>
                        <p class="text-gray-600 mb-4 text-sm">
                            El Ministro de la Secretaría de Recursos Naturales y Ambiente (SERNA), <strong>Juan Carlos Ramos</strong>, se reunió con el Programa de las Naciones Unidas para el Desarrollo y su representante, <strong>Alessandro Fracassetti</strong>, para fortalecer proyectos ambientales conjuntos,
                            el encuentro impulsa una cooperación más efectiva, enfocada en las prioridades del país y en generar resultados concretos para la población y el territorio de Honduras
                        </p>
                        <a href="#" class="text-[#231f20] font-semibold hover:text-[#666666] transition-colors duration-300 flex items-center">
                            Leer más
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="/nosotros/foro" class="px-6 py-3 border-2 border-[#264da0] text-[#264da0] font-bold rounded-full hover:bg-[#264da0] hover:text-white transition-colors duration-300 inline-flex items-center">
                    Ver todas las noticias
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </section>
        
        <!-- Stats Section -->
        <section class="bg-gradient-to-r from-[#263b80] to-[#264da0] rounded-2xl p-8 md:p-12 mb-24 text-white">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
                <div class="p-4 stat-item" data-target="1650000" data-suffix="+">
                    <div class="text-4xl font-bold mb-2 counter">0</div>
                    <div class="text-lg">Libras de lirio recogido</div>
                </div>
                <div class="p-4 stat-item" data-target="55000" data-suffix="+">
                    <div class="text-4xl font-bold mb-2 counter">0</div>
                    <div class="text-lg">Hectáreas recuperadas con PPAT y Plan 0 Deforestación</div>
                </div>
                <div class="p-4 stat-item" data-target="150" data-suffix="">
                    <div class="text-4xl font-bold mb-2 counter">0</div>
                    <div class="text-lg">Micro-cuencas intervenidas a nivel nacional.</div>
                </div>
                <div class="p-4 stat-item" data-target="18" data-suffix="">
                    <div class="text-4xl font-bold mb-2 counter">0</div>
                    <div class="text-lg">Áreas protegidas</div>
                </div>
            </div>
        </section>
        
        <!-- Call to Action -->
        <section class="section-watermark bg-white rounded-lg shadow-custom p-8 md:p-12 text-center">
            <h2 class="text-3xl font-bold text-[#00903b] mb-6"><span class="bg-clip-text text-transparent bg-gradient-to-r from-[#263b80] to-[#264da0]">¿Cómo puedes contribuir?</span></h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-8">
                Todos podemos ser parte de la solución. Descubre cómo puedes colaborar con la protección del medio ambiente en Honduras.
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="#" class="px-6 py-3 bg-[#231f20] text-white font-bold rounded-full hover:bg-[#E0AE19] hover:text-[#231f20] transition-colors duration-300">
                    Voluntariado
                </a>
                <a href="#" class="px-6 py-3 border-2 border-[#264da0] text-[#264da0] font-bold rounded-full hover:bg-[#264da0] hover:border-[#264da0] hover:text-white transition-colors duration-300">
                    Denuncias Ambientales
                </a>
                <a href="#" class="px-6 py-3 border-2 border-[#263b80] text-[#231f20] font-bold rounded-full hover:bg-[#263b80] hover:text-white transition-colors duration-300">
                    Programas Educativos
                </a>
            </div>
        </section>

        <!-- Sección para mapa de Google -->
        <section class="mt-24">
            <h2 class="text-3xl font-bold text-center mb-12 text-[#00903b]"><span class="bg-clip-text text-transparent bg-gradient-to-r from-[#263b80] to-[#264da0]">Estamos aquí</span></h2>
            <div class="bg-white rounded-lg shadow-custom overflow-hidden">
                <div class="aspect-w-16 aspect-h-9">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1707.8792146428075!2d-87.18747288964083!3d14.097344497602379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1ses-419!2shn!4v1747232723012!5m2!1ses-419!2shn" 
                        width="100%" 
                        height="600" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- Contenedor para el Chatbot -->
<div id="serna-chatbot"></div>

<style>

    /* =============================================
       VARIABLE DE RUTA DEL LOGO
       Cambia esta variable con la ruta real de tu logo PNG
       ============================================= */
    :root {
        --logo-watermark-url: url('/wp-content/uploads/2026/02/Blanco-SERNA-e1770905443177.png');
        /* 
            INSTRUCCIÓN: Reemplaza '/wp-content/uploads/logo-serna-blanco.png'
            con la ruta real de tu logo PNG de fondo transparente.
            Ejemplo: url('/wp-content/themes/tu-tema/images/logo-serna.png')
        */
    }

    html {
        scroll-behavior: smooth;
    }

    /* =============================================
       FONDO GENERAL DE LA PÁGINA - TONO HUESO
       ============================================= */

    /* El wrapper del contenido principal tendrá el tono hueso de fondo */
    .inicio-page {
        background-color: #FAFAF8; /* Blanco hueso moderado */
    }

    /* =============================================
       MARCA DE AGUA EN SECCIONES GRANDES
       ============================================= */

    /* Para secciones completas (servicios, nosotros, noticias, CTA) */
    .section-watermark {
        position: relative;
        /* padding extra para que la marca de agua no choque con el contenido */
    }

    .section-watermark::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: min(500px, 80%);
        height: min(500px, 80%);
        background-image: var(--logo-watermark-url);
        background-repeat: no-repeat;
        background-size: contain;
        background-position: center;
        opacity: 0.045; /* Muy sutil — ajusta entre 0.03 y 0.08 según tu logo */
        pointer-events: none;
        z-index: 0;
        filter: grayscale(100%) brightness(0); /* Fuerza el logo a negro puro para contraste sobre hueso */
    }

    /* Asegura que el contenido esté por encima de la marca de agua */
    .section-watermark > * {
        position: relative;
        z-index: 1;
    }

    /* =============================================
       MARCA DE AGUA EN CARDS INDIVIDUALES
       ============================================= */

    .card-watermark {
        position: relative;
        background-color: #FAFAF8 !important; /* Fondo hueso en lugar de blanco puro */
    }

    .card-watermark::after {
        content: '';
        position: absolute;
        bottom: 12px;
        right: 12px;
        width: 80px;
        height: 80px;
        background-image: var(--logo-watermark-url);
        background-repeat: no-repeat;
        background-size: contain;
        background-position: center;
        opacity: 0.06; /* Sutil — ajusta según necesidad */
        pointer-events: none;
        z-index: 0;
        filter: grayscale(100%) brightness(0);
    }

    /* =============================================
       AJUSTE DE FONDO PARA SECCIÓN CTA (Call to Action)
       ============================================= */

    .section-watermark.bg-white {
        background-color: #FAFAF8 !important;
    }

    /* =============================================
       ANIMACIONES
       ============================================= */

    @keyframes gradient {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    
    .animate-gradient {
        background-size: 200% 200%;
        animation: gradient 5s ease infinite;
    }
    
    .shadow-custom {
        box-shadow: 0 10px 15px -3px rgba(35, 31, 32, 0.79), 0 4px 6px -2px rgba(35, 31, 32, 0.05);
    }

    /* =============================================
       FONDO HUESO EXPLÍCITO PARA CARDS bg-white
       Asegura que Tailwind no sobreescriba el hueso
       ============================================= */
    .card-watermark.bg-white,
    .card-watermark {
        background-color: #FAFAF8 !important;
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
        const statsSection = document.querySelector('.bg-gradient-to-r.from-\\[\\#263b80\\].to-\\[\\#264da0\\]');
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
                        
                        setTimeout(() => {
                            animateCounter(counter, target, 2000, suffix);
                        }, index * 250);
                    });
                }
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -100px 0px'
        });

        if (statsSection) {
            observer.observe(statsSection);
        }
    });
</script>

<?php get_footer(); ?>