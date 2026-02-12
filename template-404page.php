<?php
/**
 * Template Name: 404 Template
 * Template Post Type: page
 */

get_header(); ?>

<div class="construccion-page">
    <!-- Hero Section -->
    <section class="relative py-24 min-h-screen flex items-center overflow-hidden">
        <!-- Gradient Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-[#263b80] via-[#264da0] to-[#264da0]"></div>
        
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-20 left-10 w-72 h-72 bg-[#87cede] rounded-full mix-blend-multiply filter blur-xl animate-pulse"></div>
            <div class="absolute bottom-20 right-10 w-72 h-72 bg-[#87cede] rounded-full mix-blend-multiply filter blur-xl animate-pulse" style="animation-delay: 3s;"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-[#7dbb5c] rounded-full mix-blend-multiply filter blur-xl animate-pulse" style="animation-delay: 5s;"></div>
        </div>
        
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')"></div>
        
        <!-- Content -->
        <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <!-- Construction Icon -->
            <div class="mb-8 flex justify-center">
                <div class="bg-white bg-opacity-20 rounded-full p-8 backdrop-blur-sm">
                    <svg class="w-24 h-24 text-gray-700 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                    </svg>
                </div>
            </div>
            
            <!-- Main Title -->
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 bg-clip-text text-transparent bg-gradient-to-r from-white via-[#87cede] to-white animate-gradient">
                Página en Construcción
            </h1>
            
            <!-- Subtitle -->
            <p class="text-xl md:text-2xl text-white max-w-2xl mx-auto leading-relaxed opacity-90 mb-8">
                Estamos trabajando para mejorar tu experiencia. Esta página estará disponible muy pronto.
            </p>
            
            <!-- 404 Message -->
            <div class="bg-white bg-opacity-20 rounded-lg p-6 mb-8 backdrop-blur-sm max-w-lg mx-auto">
                <p class="text-gray-700 font-semibold text-lg">Error 404 - Página no encontrada</p>
                <p class="text-gray-700 opacity-80 text-sm mt-2">La página que buscas no existe o está siendo actualizada</p>
            </div>
            
            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4 mb-12">
                <a href="<?php echo home_url(); ?>" class="px-8 py-3 bg-white text-[#231f20] font-bold rounded-full hover:bg-[#231f20] hover:text-white transition-colors duration-300 inline-flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    Volver al Inicio
                </a>
                <a href="javascript:history.back()" class="px-8 py-3 border-2 border-white text-white font-bold rounded-full hover:bg-[#ad8411] hover:text-white hover:border-[#ad8411] transition-colors duration-300 inline-flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Página Anterior
                </a>
            </div>
            
            <!-- Progress Indicator -->
            <div class="max-w-md mx-auto">
                <p class="text-white text-sm mb-4 opacity-80">Progreso de construcción:</p>
                <div class="bg-white bg-opacity-20 rounded-full h-3 overflow-hidden backdrop-blur-sm">
                    <div class="bg-[#ad8411] h-full rounded-full progress-bar" style="width: 0%"></div>
                </div>
                <p class="text-white text-xs mt-2 opacity-70">Actualizando contenido...</p>
            </div>
        </div>
        
        <!-- Wave Background -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="w-full h-12 md:h-20">
                <path d="M0 0L60 10C120 20 240 40 360 46.7C480 53 600 47 720 43.3C840 40 960 40 1080 43.3C1200 47 1320 53 1380 56.7L1440 60V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0V0Z" fill="white"/>
            </svg>
        </div>
    </section>

    <!-- Information Section -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <section class="text-center mb-16">
            <h2 class="text-3xl font-bold mb-6">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#263b80] to-[#87cede]">
                    Mientras tanto, puedes explorar:
                </span>
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div class="bg-white rounded-lg shadow-custom p-6 transition-transform duration-300 hover:transform hover:-translate-y-2">
                    <div class="bg-[#263b80] w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="h-8 w-8 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#263b80] mb-3">Licencias Ambientales</h3>
                    <p class="text-gray-600 mb-4">
                        Consulta sobre procesos de evaluación ambiental
                    </p>
                    <a href="/slas" class="text-[#231f20] font-semibold hover:text-[#666666] transition-colors duration-300">
                        Más información →
                    </a>
                </div>
                
                <!-- Service Card 2 -->
                <div class="bg-white rounded-lg shadow-custom p-6 transition-transform duration-300 hover:transform hover:-translate-y-2">
                    <div class="bg-[#263b80] w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#263b80] mb-3">Información General</h3>
                    <p class="text-gray-600 mb-4">
                        Conoce más sobre nuestra institución
                    </p>
                    <a href="/nosotros/perfil" class="text-[#231f20] font-semibold hover:text-[#666666] transition-colors duration-300">
                        Conoce SERNA →
                    </a>
                </div>
                
                <!-- Service Card 3 -->
                <div class="bg-white rounded-lg shadow-custom p-6 transition-transform duration-300 hover:transform hover:-translate-y-2">
                    <div class="bg-[#263b80] w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#263b80] mb-3">Contáctanos</h3>
                    <p class="text-gray-600 mb-4">
                        ¿Tienes preguntas? Estamos aquí para ayudarte
                    </p>
                    <a href="/contacto" class="text-[#231f20] font-semibold hover:text-[#666666] transition-colors duration-300">
                        Contactar →
                    </a>
                </div>
            </div>
        </section>
        
        <!-- Contact Info -->
        <section class="bg-gradient-to-r from-[#263b80] to-[#87cede] rounded-2xl p-8 text-white text-center">
            <h3 class="text-2xl font-bold mb-4">¿Necesitas ayuda inmediata?</h3>
            <p class="mb-6 opacity-90">
                Nuestro equipo está disponible para atender tus consultas
            </p>
            <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-8">
                <div class="flex items-center">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <span>(+504) 2235-8050</span>
                </div>
                <div class="flex items-center">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <span>info@serna.gob.hn</span>
                </div>
            </div>
        </section>
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
        box-shadow: 0 10px 15px -3px rgba(35, 31, 32, 0.3), 0 4px 6px -2px rgba(35, 31, 32, 0.05);
    }
    
    .progress-bar {
        animation: progressAnimation 3s ease-in-out infinite;
    }
    
    @keyframes progressAnimation {
        0% {
            width: 0%;
        }
        50% {
            width: 75%;
        }
        100% {
            width: 60%;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animación adicional para la barra de progreso
    const progressBar = document.querySelector('.progress-bar');
    if (progressBar) {
        // Simular progreso de construcción
        let progress = 0;
        const interval = setInterval(() => {
            progress += Math.random() * 5;
            if (progress > 75) {
                progress = 60 + Math.random() * 15;
            }
            progressBar.style.width = progress + '%';
        }, 2000);
    }
    
    // Efecto de hover para las tarjetas
    const cards = document.querySelectorAll('.shadow-custom');
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });
});
</script>

<?php get_footer(); ?>