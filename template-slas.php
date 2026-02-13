<?php
/**
 * Template Name: SLAS Template
 * Template Post Type: page
 */

get_header(); ?>

<div class="slas-page">
    <!-- sección Hero Panel con gradientes -->
    <section class="relative py-24 overflow-hidden">
        <!-- Fondo Gradiente -->
        <div class="absolute inset-0 bg-gradient-to-br from-[#263b80] via-[#264da0] to-[#264da0]"></div>
        
        <!-- Fondo: Elementos Animados tipo Fuegos Artificiales -->
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-0 -left-4 w-72 h-72 bg-[#87cede] rounded-full mix-blend-multiply filter blur-xl animate-pulse"></div>
            <div class="absolute bottom-0 right-0 w-72 h-72 bg-[#87cede] rounded-full mix-blend-multiply filter blur-xl animate-pulse" style="animation-delay: 3s;"></div>
            <div class="absolute -bottom-8 left-20 w-72 h-72 bg-[#7dbb5c] rounded-full mix-blend-multiply filter blur-xl animate-pulse" style="animation-delay: 5s;"></div>
        </div>
        
        <!-- Patron de fondo -->
        <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')"></div>
        
        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 bg-clip-text text-transparent bg-gradient-to-r from-white via-[#87cede] to-white animate-gradient">
                    SLAS
                </h1>
                <p class="text-xl md:text-2xl text-white max-w-3xl mx-auto leading-relaxed opacity-90">
                    Licenciamiento Ambiental (SLAS) en Honduras
                </p>
                <div class="mt-4">
                    <div class="inline-flex items-center justify-center w-50 h-1 bg-[#ad8411] rounded-full"></div>
                </div>
            </div>
        </div>
        
        <!-- Fondo de Ola -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="w-full h-12 md:h-20">
                <path d="M0 0L60 10C120 20 240 40 360 46.7C480 53 600 47 720 43.3C840 40 960 40 1080 43.3C1200 47 1320 53 1380 56.7L1440 60V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0V0Z" fill="white"/>
            </svg>
        </div>
    </section>

    <!-- Contenido Principal -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        
        <!-- sección: Acerca de SLAS -->
        <section class="mb-10">
            <div class="bg-white rounded-lg shadow-custom p-8 md:p-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-center">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#263b80] to-[#87cede]">Acerca de SLAS</span>
                </h2>
                <div class="text-center mb-6">
                    <div class="inline-flex items-center justify-center w-16 h-1 bg-[#264da0] rounded-full"></div>
                </div>
                <p class="text-lg text-gray-700 leading-relaxed max-w-4xl mx-auto text-center">
                    El Sistema de Licenciamiento Ambiental Simplificado (SLAS) de Honduras es una plataforma digital avanzada, diseñada para agilizar y transparentar el proceso de obtención de Licencias Ambientales. Esta herramienta en línea es una iniciativa de la Secretaría de Recursos Naturales y Ambiente (MiAmbiente+), que facilita a los desarrolladores y apoderados legales la gestión ambiental de proyectos.
                </p>
            </div>
        </section>

        <!-- sección: Objetivos y Características -->
        <section class="mb-20">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#263b80] to-[#87cede]">Objetivos y Características</span>
                </h2>
                <div class="inline-flex items-center justify-center w-16 h-1 bg-[#264da0] rounded-full"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Objetivos -->
                <div class="bg-white rounded-lg shadow-custom">
                    <div class="accordion-header bg-gradient-to-r from-[#263b80] to-[#264da0] text-white p-6 rounded-t-lg cursor-pointer" onclick="toggleAccordion('objetivos')">
                        <div class="flex items-center justify-between">
                            <h3 class="text-xl font-bold flex items-center">
                                <i class="fas fa-bullseye mr-3"></i>
                                Objetivos
                            </h3>
                            <i class="fas fa-chevron-down transition-transform duration-300" id="objetivos-icon"></i>
                        </div>
                    </div>
                    <div class="accordion-content active p-6" id="objetivos-content">
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <div class="flex-shrink-0 w-6 h-6 bg-[#263b80] rounded-full flex items-center justify-center mt-1 mr-3">
                                    <i class="fas fa-check text-[#E0B32F] text-xs"></i>
                                </div>
                                <span class="text-gray-700">Proporcionar una vía rápida para conocer la viabilidad ambiental de proyectos en solo 28 segundos.</span>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0 w-6 h-6 bg-[#263b80] rounded-full flex items-center justify-center mt-1 mr-3">
                                    <i class="fas fa-check text-[#E0B32F] text-xs"></i>
                                </div>
                                <span class="text-gray-700">Emitir Licencias Ambientales de Operación en un plazo de 24 a 48 horas.</span>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0 w-6 h-6 bg-[#263b80] rounded-full flex items-center justify-center mt-1 mr-3">
                                    <i class="fas fa-check text-[#E0B32F] text-xs"></i>
                                </div>
                                <span class="text-gray-700">Garantizar el cumplimiento de los requisitos y procedimientos legales para la Licencia de Funcionamiento en un plazo máximo de 6 meses.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Características -->
                <div class="bg-white rounded-lg shadow-custom">
                    <div class="accordion-header bg-gradient-to-r from-[#263b80] to-[#264da0] text-white p-6 rounded-t-lg cursor-pointer" onclick="toggleAccordion('caracteristicas')">
                        <div class="flex items-center justify-between">
                            <h3 class="text-xl font-bold flex items-center">
                                <i class="fas fa-cogs mr-3"></i>
                                Características
                            </h3>
                            <i class="fas fa-chevron-down transition-transform duration-300" id="caracteristicas-icon"></i>
                        </div>
                    </div>
                    <div class="accordion-content active p-6" id="caracteristicas-content">
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <div class="flex-shrink-0 w-6 h-6 bg-[#263b80] rounded-full flex items-center justify-center mt-1 mr-3">
                                    <i class="fas fa-star text-[#E0B32F] text-xs"></i>
                                </div>
                                <span class="text-gray-700">Control y seguimiento de las medidas ambientales.</span>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0 w-6 h-6 bg-[#263b80] rounded-full flex items-center justify-center mt-1 mr-3">
                                    <i class="fas fa-star text-[#E0B32F] text-xs"></i>
                                </div>
                                <span class="text-gray-700">Sistema de denuncias ambientales.</span>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0 w-6 h-6 bg-[#263b80] rounded-full flex items-center justify-center mt-1 mr-3">
                                    <i class="fas fa-star text-[#E0B32F] text-xs"></i>
                                </div>
                                <span class="text-gray-700">Renovación de Licencias Ambientales.</span>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0 w-6 h-6 bg-[#263b80] rounded-full flex items-center justify-center mt-1 mr-3">
                                    <i class="fas fa-star text-[#E0B32F] text-xs"></i>
                                </div>
                                <span class="text-gray-700">Presentación de servicios ambientales.</span>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0 w-6 h-6 bg-[#263b80] rounded-full flex items-center justify-center mt-1 mr-3">
                                    <i class="fas fa-star text-[#E0B32F] text-xs"></i>
                                </div>
                                <span class="text-gray-700">Seguimiento en tiempo real de los expedientes.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- sección: Proceso de Licenciamiento -->
        <section class="mb-20">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#263b80] to-[#87cede]">Proceso de Licenciamiento</span>
                </h2>
                <div class="inline-flex items-center justify-center w-16 h-1 bg-[#263b80] rounded-full"></div>
            </div>
            
            <div class="bg-white rounded-lg shadow-custom p-8 md:p-12">
                <div class="max-w-4xl mx-auto">
                    <div class="space-y-8">
                        <!-- Paso 1 -->
                        <div class="flex flex-col md:flex-row items-center md:items-start step-line">
                            <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-r from-[#263b80] to-[#264da0] rounded-full flex items-center justify-center text-white font-bold text-xl mb-4 md:mb-0 md:mr-6">
                                1
                            </div>
                            <div class="text-center md:text-left">
                                <h3 class="text-xl font-bold text-[#264da0] mb-2">Registro en la Plataforma</h3>
                                <p class="text-gray-700">Los usuarios ingresan datos del proyecto, incluyendo las coordenadas y detalles de la empresa y el representante legal.</p>
                            </div>
                        </div>

                        <!-- Paso 2 -->
                        <div class="flex flex-col md:flex-row items-center md:items-start step-line">
                            <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-r from-[#264da0] to-[#263b80] rounded-full flex items-center justify-center text-white font-bold text-xl mb-4 md:mb-0 md:mr-6">
                                2
                            </div>
                            <div class="text-center md:text-left">
                                <h3 class="text-xl font-bold text-[#264da0] mb-2">Carga de Documentación</h3>
                                <p class="text-gray-700">Se suben los documentos requeridos que conformarán el expediente ambiental.</p>
                            </div>
                        </div>

                        <!-- Paso 3 -->
                        <div class="flex flex-col md:flex-row items-center md:items-start step-line">
                            <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-r from-[#263b80] to-[#87cede] rounded-full flex items-center justify-center text-white font-bold text-xl mb-4 md:mb-0 md:mr-6">
                                3
                            </div>
                            <div class="text-center md:text-left">
                                <h3 class="text-xl font-bold text-[#264da0] mb-2">Verificación y Viabilidad</h3>
                                <p class="text-gray-700">El sistema evalúa la información y proporciona una primera impresión sobre la complejidad de la solicitud.</p>
                            </div>
                        </div>

                        <!-- Paso 4 -->
                        <div class="flex flex-col md:flex-row items-center md:items-start step-line">
                            <div class="flex-shrink-0 w-16 h-16 bg-gradient-to-r from-[#87cede] to-[#263b80] rounded-full flex items-center justify-center text-white font-bold text-xl mb-4 md:mb-0 md:mr-6">
                                4
                            </div>
                            <div class="text-center md:text-left">
                                <h3 class="text-xl font-bold text-[#264da0] mb-2">Presentación Física</h3>
                                <p class="text-gray-700">Se presenta la solicitud de licencia ambiental con la documentación técnica y legal correspondiente.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- sección: Impactos y Beneficios -->
        <section class="mb-20">
            <div class="bg-white rounded-lg shadow-custom p-8 md:p-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-center">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#263b80] to-[#87cede]">Impactos y Beneficios</span>
                </h2>
                <div class="text-center mb-6">
                    <div class="inline-flex items-center justify-center w-16 h-1 bg-[#263b80] rounded-full"></div>
                </div>
                <p class="text-lg text-gray-700 leading-relaxed max-w-4xl mx-auto text-center">
                    El SLAS representa un paso adelante en la modernización de los servicios públicos, con un impacto significativo en la promoción del desarrollo socioeconómico, la generación de empleo y el bienestar humano, siempre en armonía con la protección ambiental. La claridad y rapidez del sistema brindan confianza a los inversores y facilitan la planificación y ejecución responsable de proyectos en Honduras.
                </p>
            </div>
        </section>

        <!-- sección: CTA para acceder a SLAS -->
        <section class="mb-20">
            <div class="relative overflow-hidden rounded-lg">
                <!-- Fondo Gradiente -->
                <div class="absolute inset-0 bg-gradient-to-r from-[#263b80] via-[#264da0] to-[#264da0]"></div>
                
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
                            ¿Listo para comenzar tu trámite?
                        </h2>
                        <p class="text-lg md:text-xl text-white opacity-90 mb-8 leading-relaxed">
                            Accede a la plataforma SLAS y solicita tu licencia ambiental de manera fácil, rápida y segura.
                        </p>
                        
                        <!-- Botones CTA -->
                        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                            <a href="https://slas.miambiente.gob.hn/#login" target="_blank" 
                               class="inline-flex items-center px-8 py-4 bg-white text-[#231f20] font-bold rounded-full hover:bg-[#231f20] hover:text-[#FFFFFF] transform hover:-translate-y-1 transition-all duration-300 shadow-lg hover:shadow-xl">
                                <i class="fas fa-external-link-alt mr-3"></i>
                                Acceder a SLAS
                            </a>
                            
                            <a href="#" 
                               class="inline-flex items-center px-8 py-4 border-2 border-white text-white font-bold rounded-full hover:bg-[#ad8411] hover:border-[#ad8411] hover:text-[#FFFFFF] transform hover:-translate-y-1 transition-all duration-300">
                                <i class="fas fa-file-download mr-3"></i>
                                Descargar Guía
                            </a>
                        </div>
                        
                        <!-- Información adicional -->
                        <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6 text-white">
                            <div class="flex flex-col items-center">
                                <div class="w-12 h-12 bg-gradient-to-r from-[#87cede] to-[#263b80] rounded-full flex items-center justify-center mb-3">
                                    <i class="fas fa-clock text-[#E0B32F]"></i>
                                </div>
                                <h3 class="font-semibold mb-1">Disponible 24/7</h3>
                                <p class="text-sm opacity-80">Acceso las 24 horas</p>
                            </div>
                            
                            <div class="flex flex-col items-center">
                                <div class="w-12 h-12 bg-gradient-to-r from-[#87cede] to-[#263b80] rounded-full flex items-center justify-center mb-3">
                                    <i class="fas fa-shield-alt text-[#E0B32F]"></i>
                                </div>
                                <h3 class="font-semibold mb-1">Seguro</h3>
                                <p class="text-sm opacity-80">Información protegida</p>
                            </div>
                            
                            <div class="flex flex-col items-center">
                                <div class="w-12 h-12 bg-gradient-to-r from-[#87cede] to-[#263b80] rounded-full flex items-center justify-center mb-3">
                                    <i class="fas fa-tachometer-alt text-[#E0B32F]"></i>
                                </div>
                                <h3 class="font-semibold mb-1">Rápido</h3>
                                <p class="text-sm opacity-80">Procesos optimizados</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
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
        box-shadow: 0 10px 15px -3px rgba(35, 31, 32, 0.4), 0 4px 6px -2px rgba(35, 31, 32, 0.05);
    }
    
    .accordion-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out;
    }
    
    .accordion-content.active {
        max-height: 500px;
    }
    
    .step-line {
        position: relative;
    }
    
    .step-line::after {
        content: '';
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        top: 100%;
        width: 2px;
        height: 60px;
        background: linear-gradient(to bottom, #666666, transparent);
    }
    
    .step-line:last-child::after {
        display: none;
    }
    
    @media (max-width: 768px) {
        .step-line::after {
            left: 31px;
            transform: none;
        }
    }
</style>

<!-- Script para funcionalidad de acordeones -->
<script>
function toggleAccordion(id) {
    const content = document.getElementById(id + '-content');
    const icon = document.getElementById(id + '-icon');
    
    if (content.classList.contains('active')) {
        content.classList.remove('active');
        icon.style.transform = 'rotate(-90deg)';
    } else {
        content.classList.add('active');
        icon.style.transform = 'rotate(0deg)';
    }
}

document.addEventListener('DOMContentLoaded', function() {
    // Inicializar iconos de acordeones
    document.getElementById('objetivos-icon').style.transform = 'rotate(0deg)';
    document.getElementById('caracteristicas-icon').style.transform = 'rotate(0deg)';
});
</script>

<?php get_footer(); ?>