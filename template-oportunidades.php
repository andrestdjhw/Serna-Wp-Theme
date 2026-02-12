<?php
/**
 * Template Name: Oportunidades Template
 * Template Post Type: page
 */

get_header(); ?>

<div class="oportunidades-page">
    <!-- Hero Section -->
    <section class="relative py-24 overflow-hidden">
        <!-- Gradient Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-[#263b80] via-[#264da0] to-[#264da0]"></div>
        
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
                    ¿Cómo aplicar?
                </h1>
                <p class="text-xl md:text-2xl text-white max-w-3xl mx-auto leading-relaxed opacity-90">
                    <cite>Conoce el proceso completo para aplicar a nuestros programas y servicios ambientales.</cite>
                </p>
            </div>
        </div>
        
        <!-- Wave Background -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="w-full h-12 md:h-20">
                <path d="M0 0L60 10C120 20 240 40 360 46.7C480 53 600 47 720 43.3C840 40 960 40 1080 43.3C1200 47 1320 53 1380 56.7L1440 60V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0V0Z" fill="white"/>
            </svg>
        </div>
    </section>

    <!-- Contenido Principal -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        
        <!-- Sección de Proceso -->
        <section class="mb-24">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Step 1: Requisitos -->
                <div class="text-center group">
                    <div class="w-24 h-24 bg-gradient-to-br from-[#264da0] to-[#87cede] rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="h-12 w-12 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-[#264da0] mb-3">Requisitos</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Revisa todos los documentos y requisitos necesarios antes de iniciar tu aplicación.
                    </p>
                </div>
                
                <!-- Step 2: Fechas -->
                <div class="text-center group">
                    <div class="w-24 h-24 bg-gradient-to-br from-[#264da0] to-[#87cede] rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="h-12 w-12 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-[#264da0] mb-3">Fechas</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Consulta las fechas importantes de convocatorias y plazos límite para aplicaciones.
                    </p>
                </div>
                
                <!-- Step 3: Formulario -->
                <div class="text-center group">
                    <div class="w-24 h-24 bg-gradient-to-br from-[#264da0] to-[#87cede] rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="h-12 w-12 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-[#264da0] mb-3">Formulario</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Completa el formulario de aplicación en línea con toda la información solicitada.
                    </p>
                </div>
            </div>
        </section>

        <!-- Sección de Oportunidades -->
        <section class="mb-24">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4"><span class="bg-clip-text text-transparent bg-gradient-to-r from-[#263b80] to-[#264da0]">Oportunidades</span></h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Descubre las diferentes oportunidades disponibles para contribuir a la conservación del medio ambiente
                </p>
                <div class="mt-6">
                    <div class="inline-flex items-center justify-center w-50 h-1 bg-[#E0AE19] rounded-full"></div>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Opportunity Card 1 -->
                <div class="bg-white rounded-lg shadow-custom overflow-hidden transition-transform duration-300 hover:transform hover:-translate-y-2">
                    <div class="h-48 bg-[#231f20] flex items-center justify-center">
                        <img src="/wp-content/uploads/2025/08/Oportunidades.jpg" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#231f20] mb-3">CS/OCP/CONECTA/001-2024</h3>
                        <p class="text-gray-600 mb-4">
                            Servicios de asistencia técnica en comunicaciones, actividades de sensibilización y visibilidad.
                        </p>
                        <a href="https://empleos.hn/jobs/csocpconecta001-2024servicios-de-asistencia" target="_blank" rel="noopener noreferrer" class="text-[#ad8411] font-semibold hover:text-[#666666] transition-colors duration-300 flex items-center">
                            Aplicar ahora
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Opportunity Card 2 -->
                <div class="bg-white rounded-lg shadow-custom overflow-hidden transition-transform duration-300 hover:transform hover:-translate-y-2">
                    <div class="h-48 bg-[#231f20] flex items-center justify-center">
                        <img src="/wp-content/uploads/2025/08/Oportunidades.jpg" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#231f20] mb-3">CS/OCP/CONECTA/002-2024</h3>
                        <p class="text-gray-600 mb-4">
                            Servicios de asistencia Diseñador Gráfico Junior.
                        </p>
                        <a href="https://empleos.hn/jobs/csocpconecta002-2024servicios-de-asistencia" target="_blank" rel="noopener noreferrer" class="text-[#ad8411] font-semibold hover:text-[#666666] transition-colors duration-300 flex items-center">
                            Ver convocatoria
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Opportunity Card 3 -->
                <div class="bg-white rounded-lg shadow-custom overflow-hidden transition-transform duration-300 hover:transform hover:-translate-y-2">
                    <div class="h-48 bg-[#231f20] flex items-center justify-center">
                        <img src="/wp-content/uploads/2025/08/Marketing.jpg" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#231f20] mb-3">Consultoría: </h3>
                        <p class="text-gray-600 mb-4">
                            Estudio de Factibilidad Técnico y Económico.
                        </p>
                        <a href="https://procurement-notices.undp.org/view_negotiation.cfm?nego_id=16856" target="_blank" rel="noopener noreferrer" class="text-[#ad8411] font-semibold hover:text-[#666666] transition-colors duration-300 flex items-center">
                            Ver vacantes
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Opportunity Card 4 -->
                <div class="bg-white rounded-lg shadow-custom overflow-hidden transition-transform duration-300 hover:transform hover:-translate-y-2">
                    <div class="h-48 bg-[#231f20] flex items-center justify-center">
                        <img src="/wp-content/uploads/2025/08/Marketing.jpg" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-[#231f20] mb-3">SDC/COPs4/OCP-002-2024</h3>
                        <p class="text-gray-600 mb-4">
                            Desarrollo de la nueva plataforma del Registro de Emisiones y Transferencia de Contaminantes <strong>(RETC)</strong> para Honduras.
                        </p>
                        <a href="https://empleos.hn/jobs/sdccops4ocp-002-2024-desarrollo-de-la-nueva" target="_blank" rel="noopener noreferrer" class="text-[#ad8411] font-semibold hover:text-[#666666] transition-colors duration-300 flex items-center">
                            Participar
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Additional Information Section -->
        <section class="bg-gradient-to-r from-[#263b80] to-[#264da0] rounded-2xl p-8 md:p-12 mb-24 text-white">
            <div class="text-center">
                <h2 class="text-3xl font-bold mb-6">¿Necesitas ayuda con tu aplicación?</h2>
                <p class="text-lg mb-8 max-w-3xl mx-auto opacity-90">
                    Nuestro equipo está disponible para ayudarte durante todo el proceso de aplicación. No dudes en contactarnos.
                </p>
                <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="/contacto" class="px-6 py-3 bg-white text-[#231f20] font-bold rounded-full hover:bg-[#E0AE19] hover:text-[#231f20] transition-colors duration-300">
                        Contactar Soporte
                    </a>
                    <a href="/nosotros/faq" class="px-6 py-3 border-2 border-white text-white font-bold rounded-full hover:bg-[#231f20] hover:text-white hover:border-[#231f20] transition-colors duration-300">
                        Preguntas Frecuentes
                    </a>
                </div>
            </div>
        </section>
        
        <!-- Call to Action -->
        <!-- <section class="bg-white rounded-lg shadow-custom p-8 md:p-12 text-center">
            <h2 class="text-3xl font-bold text-[#00903b] mb-6"><span class="bg-clip-text text-transparent bg-gradient-to-r from-[#00903b] to-[#7dbb5c]">¡Comienza tu aplicación hoy!</span></h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-8">
                El futuro del medio ambiente en Honduras depende de personas comprometidas como tú. Únete a nosotros en esta importante misión.
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="/aplicar" class="px-8 py-4 bg-[#7dbb5c] text-white font-bold rounded-full hover:bg-[#00903b] transition-colors duration-300 inline-flex items-center">
                    Aplicar Ahora
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="/guia-aplicación" class="px-8 py-4 border-2 border-[#00903b] text-[#00903b] font-bold rounded-full hover:bg-[#00903b] hover:text-white transition-colors duration-300 inline-flex items-center">
                    Descargar Guía
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </a>
            </div>
        </section> -->
    </div>
</div>

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
        box-shadow: 0 10px 15px -3px rgba(35, 31, 32, 0.79), 0 4px 6px -2px rgba(35, 31, 32, 0.05);
    }

    .group:hover .group-hover\:scale-110 {
        transform: scale(1.1);
    }
</style>

<?php get_footer(); ?>