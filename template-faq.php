<?php
/**
 * Template Name: Preguntas Frecuentes Template
 * Template Post Type: page
 */

get_header(); ?>

<div class="faq-page">
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
                    Preguntas Frecuentes
                </h1>
                <p class="text-xl md:text-2xl text-white max-w-3xl mx-auto leading-relaxed opacity-90">
                    Encuentra respuestas a las preguntas más comunes sobre nuestros servicios y trámites.
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

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <!-- Search Section -->
        <!-- <div class="mb-16">
            <div class="max-w-3xl mx-auto">
                <div class="relative">
                    <input 
                        type="text" 
                        placeholder="Buscar en preguntas frecuentes..." 
                        class="w-full px-6 py-4 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#00903b] focus:border-transparent shadow-lg"
                        id="faq-search"
                    >
                    <button class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-[#7dbb5c] text-white p-2 rounded-full hover:bg-[#00903b] transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div> -->
        
        <!-- FAQ Categories -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold text-center text-[#00903b] mb-8 mt-8">Categorías</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <button class="faq-category-btn px-4 py-3 bg-white rounded-lg shadow-custom hover:bg-[#87cede] hover:text-white transition-colors duration-300 font-medium" data-category="all">
                    Todas
                </button>
                <button class="faq-category-btn px-4 py-3 bg-white rounded-lg shadow-custom hover:bg-[#87cede] hover:text-white transition-colors duration-300 font-medium" data-category="licencias">
                    Licencias Ambientales
                </button>
                <button class="faq-category-btn px-4 py-3 bg-white rounded-lg shadow-custom hover:bg-[#87cede] hover:text-white transition-colors duration-300 font-medium" data-category="tramites">
                    Trámites
                </button>
                <button class="faq-category-btn px-4 py-3 bg-white rounded-lg shadow-custom hover:bg-[#87cede] hover:text-white transition-colors duration-300 font-medium" data-category="servicios">
                    Servicios
                </button>
            </div>
        </div>
        
        <!-- FAQ Accordion -->
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-center text-[#00903b] mb-12 mt-12">Preguntas y Respuestas</h2>
            
            <div class="space-y-4" id="faq-accordion">
                <!-- FAQ Item 1 -->
                <div class="faq-item bg-white rounded-lg shadow-custom overflow-hidden" data-category="licencias">
                    <button class="faq-question w-full flex justify-between items-center p-6 text-left hover:bg-gray-50 transition-colors duration-200">
                        <h3 class="text-lg md:text-xl font-bold text-[#00903b]">¿Qué es una licencia ambiental y quién la necesita?</h3>
                        <svg class="w-6 h-6 text-[#7dbb5c] transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6">
                        <div class="prose max-w-none text-gray-700">
                            <p>Una licencia ambiental es un documento oficial emitido por la SERNA que autoriza la ejecución de proyectos, obras o actividades que puedan generar impactos ambientales significativos. Es requerida por personas naturales o jurídicas que planean desarrollar actividades como:</p>
                            <ul>
                                <li>Proyectos de construcción de infraestructura</li>
                                <li>Actividades industriales o manufactureras</li>
                                <li>Proyectos agrícolas o ganaderos a gran escala</li>
                                <li>Actividades mineras o extractivas</li>
                                <li>Proyectos turísticos</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 2 -->
                <div class="faq-item bg-white rounded-lg shadow-custom overflow-hidden" data-category="licencias">
                    <button class="faq-question w-full flex justify-between items-center p-6 text-left hover:bg-gray-50 transition-colors duration-200">
                        <h3 class="text-lg md:text-xl font-bold text-[#00903b]">¿Cuál es el proceso para obtener una licencia ambiental?</h3>
                        <svg class="w-6 h-6 text-[#7dbb5c] transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6">
                        <div class="prose max-w-none text-gray-700">
                            <p>El proceso para obtener una licencia ambiental consta de los siguientes pasos:</p>
                            <ol>
                                <li><strong>Presentación de solicitud:</strong> Debe presentarse en las oficinas de la SERNA con los documentos requeridos.</li>
                                <li><strong>Evaluación técnica:</strong> Nuestros especialistas revisan la documentación y realizan visitas de campo si es necesario.</li>
                                <li><strong>Estudio de impacto ambiental:</strong> Para proyectos de mayor envergadura, se requiere un estudio detallado.</li>
                                <li><strong>Resolución:</strong> Se emite la resolución aprobatoria o denegatoria.</li>
                                <li><strong>Expedición de licencia:</strong> Una vez aprobada, se emite la licencia ambiental.</li>
                            </ol>
                            <p>El tiempo promedio de tramitación es de 30 a 60 días hábiles, dependiendo de la complejidad del proyecto.</p>
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 3 -->
                <div class="faq-item bg-white rounded-lg shadow-custom overflow-hidden" data-category="tramites">
                    <button class="faq-question w-full flex justify-between items-center p-6 text-left hover:bg-gray-50 transition-colors duration-200">
                        <h3 class="text-lg md:text-xl font-bold text-[#00903b]">¿Qué documentos necesito para iniciar un trámite ambiental?</h3>
                        <svg class="w-6 h-6 text-[#7dbb5c] transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6">
                        <div class="prose max-w-none text-gray-700">
                            <p>Los documentos básicos requeridos para la mayoría de trámites ambientales incluyen:</p>
                            <ul>
                                <li>Solicitud debidamente llenada (formulario proporcionado por SERNA)</li>
                                <li>Copia de identificación del solicitante (RTN para personas jurídicas)</li>
                                <li>Croquis de ubicación del proyecto</li>
                                <li>Descripción detallada de la actividad o proyecto</li>
                                <li>Para renovaciones: copia de la licencia ambiental anterior</li>
                                <li>Pago de tasas correspondientes</li>
                            </ul>
                            <p class="mt-4 text-sm text-gray-500">* Los requisitos específicos pueden variar según el tipo de trámite. Consulte con nuestro personal para información detallada.</p>
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 4 -->
                <div class="faq-item bg-white rounded-lg shadow-custom overflow-hidden" data-category="servicios">
                    <button class="faq-question w-full flex justify-between items-center p-6 text-left hover:bg-gray-50 transition-colors duration-200">
                        <h3 class="text-lg md:text-xl font-bold text-[#00903b]">¿Cómo puedo verificar el estado de mi trámite?</h3>
                        <svg class="w-6 h-6 text-[#7dbb5c] transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6">
                        <div class="prose max-w-none text-gray-700">
                            <p>Puede verificar el estado de su trámite de las siguientes maneras:</p>
                            <ol>
                                <li><strong>En línea:</strong> A través de nuestro sistema SLAS (Sistema de Licenciamiento Ambiental en Línea) ingresando con su número de expediente.</li>
                                <li><strong>Por teléfono:</strong> Llamando al (+504) 2232-9200 en horario de atención.</li>
                                <li><strong>Presencialmente:</strong> En nuestras oficinas centrales en Tegucigalpa o en las oficinas regionales.</li>
                                <li><strong>Por correo electrónico:</strong> Enviando un mensaje a info@serna.gob.hn con su número de expediente.</li>
                            </ol>
                            <p class="mt-4">Para consultas en línea, visite: <a href="https://serna.gob.hn/slas" class="text-[#7dbb5c] hover:underline">https://serna.gob.hn/slas</a></p>
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 5 -->
                <div class="faq-item bg-white rounded-lg shadow-custom overflow-hidden" data-category="tramites">
                    <button class="faq-question w-full flex justify-between items-center p-6 text-left hover:bg-gray-50 transition-colors duration-200">
                        <h3 class="text-lg md:text-xl font-bold text-[#00903b]">¿Cuáles son los horarios de atención al público?</h3>
                        <svg class="w-6 h-6 text-[#7dbb5c] transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6">
                        <div class="prose max-w-none text-gray-700">
                            <p>Nuestros horarios de atención al público son:</p>
                            <ul>
                                <li><strong>Oficinas Centrales (Tegucigalpa):</strong> Lunes a Viernes de 7:30 AM a 3:30 PM</li>
                                <li><strong>Oficinas Regionales:</strong> Lunes a Viernes de 8:00 AM a 4:00 PM</li>
                                <li><strong>Atención telefónica:</strong> Lunes a Viernes de 7:30 AM a 3:30 PM</li>
                            </ul>
                            <p class="mt-4">* Los horarios pueden variar en días feriados oficiales. Consulte nuestro calendario de atención en días festivos en la sección de noticias.</p>
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 6 -->
                <div class="faq-item bg-white rounded-lg shadow-custom overflow-hidden" data-category="servicios">
                    <button class="faq-question w-full flex justify-between items-center p-6 text-left hover:bg-gray-50 transition-colors duration-200">
                        <h3 class="text-lg md:text-xl font-bold text-[#00903b]">¿Cómo puedo presentar una denuncia ambiental?</h3>
                        <svg class="w-6 h-6 text-[#7dbb5c] transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6">
                        <div class="prose max-w-none text-gray-700">
                            <p>Para presentar una denuncia ambiental, puede hacerlo de las siguientes formas:</p>
                            <ol>
                                <li><strong>Formulario en línea:</strong> Complete el formulario disponible en nuestro portal de denuncias ambientales.</li>
                                <li><strong>Presencialmente:</strong> En cualquiera de nuestras oficinas centrales o regionales.</li>
                                <li><strong>Por teléfono:</strong> Llamando a la línea de denuncias: (+504) 2232-9215</li>
                                <li><strong>Por correo electrónico:</strong> Enviando los detalles a denuncias@serna.gob.hn</li>
                            </ol>
                            <p class="mt-4">Toda denuncia debe incluir:</p>
                            <ul>
                                <li>Descripción detallada del problema</li>
                                <li>Ubicación exacta (coordenadas GPS si es posible)</li>
                                <li>Fotos o videos como evidencia (opcional pero recomendado)</li>
                                <li>Datos de contacto del denunciante (se mantendrán confidenciales)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Still Have Questions Section -->
        <div class="max-w-4xl mx-auto mt-16 bg-gradient-to-r from-[#00903b] to-[#7dbb5c] rounded-2xl p-8 md:p-12 text-white text-center">
            <h2 class="text-3xl font-bold mb-6">¿No encontraste lo que buscabas?</h2>
            <p class="text-xl mb-8">Nuestro equipo está listo para ayudarte con cualquier pregunta adicional que puedas tener.</p>
            <a 
                href="/contacto" 
                class="inline-block px-8 py-3 bg-white text-[#00903b] font-bold rounded-full hover:bg-[#87cede] hover:text-white transition-colors duration-300"
            >
                Contáctanos
            </a>
        </div>
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
        box-shadow: 0 10px 15px -3px rgba(135, 206, 222, 0.79), 0 4px 6px -2px rgba(135, 206, 222, 0.05);
    }
    
    .faq-item.active .faq-question svg {
        transform: rotate(180deg);
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // FAQ Accordion Functionality
    const faqQuestions = document.querySelectorAll('.faq-question');
    
    faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
            const faqItem = question.closest('.faq-item');
            const answer = faqItem.querySelector('.faq-answer');
            const icon = question.querySelector('svg');
            
            // Toggle current item
            answer.classList.toggle('hidden');
            faqItem.classList.toggle('active');
            
            // Close other open items
            faqQuestions.forEach(otherQuestion => {
                if (otherQuestion !== question) {
                    const otherItem = otherQuestion.closest('.faq-item');
                    const otherAnswer = otherItem.querySelector('.faq-answer');
                    const otherIcon = otherQuestion.querySelector('svg');
                    
                    otherAnswer.classList.add('hidden');
                    otherItem.classList.remove('active');
                    otherIcon.classList.remove('rotate-180');
                }
            });
        });
    });
    
    // FAQ Category Filter
    const categoryButtons = document.querySelectorAll('.faq-category-btn');
    const faqItems = document.querySelectorAll('.faq-item');
    
    categoryButtons.forEach(button => {
        button.addEventListener('click', () => {
            const category = button.dataset.category;
            
            // Update active button
            categoryButtons.forEach(btn => btn.classList.remove('bg-[#00903b]', 'text-white'));
            button.classList.add('bg-[#00903b]', 'text-white');
            
            // Filter items
            faqItems.forEach(item => {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
    
    // FAQ Search Functionality
    const faqSearch = document.getElementById('faq-search');
    
    faqSearch.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        
        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question h3').textContent.toLowerCase();
            const answer = item.querySelector('.faq-answer').textContent.toLowerCase();
            
            if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });
});
</script>

<?php get_footer(); ?>