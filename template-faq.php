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
                    Preguntas Frecuentes
                </h1>
                <p class="text-xl md:text-2xl text-white max-w-3xl mx-auto leading-relaxed opacity-90">
                    Encuentra respuestas a las preguntas más comunes sobre nuestros servicios y trámites.
                </p>
                <div class="mt-8">
                    <div class="inline-flex items-center justify-center w-50 h-1 bg-[#E0AE19] rounded-full"></div>
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
            <!-- <h2 class="text-3xl font-bold text-center text-[#00903b] mb-8 mt-8">Categorías</h2> -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <button class="faq-category-btn px-4 py-3 bg-[#264da0] text-white rounded-lg shadow-custom hover:bg-[#666666] hover:text-white transition-colors duration-300 font-medium" data-category="all">
                    Todas
                </button>
                <button class="faq-category-btn px-4 py-3 bg-[#264da0] text-white rounded-lg shadow-custom hover:bg-[#666666] hover:text-white transition-colors duration-300 font-medium" data-category="licencias">
                    Licencias Ambientales
                </button>
                <button class="faq-category-btn px-4 py-3 bg-[#264da0] text-white rounded-lg shadow-custom hover:bg-[#666666] hover:text-white transition-colors duration-300 font-medium" data-category="tramites">
                    Trámites
                </button>
                <button class="faq-category-btn px-4 py-3 bg-[#264da0] text-white rounded-lg shadow-custom hover:bg-[#666666] hover:text-white transition-colors duration-300 font-medium" data-category="servicios">
                    Servicios
                </button>
            </div>
        </div>
        
        <!-- FAQ Accordion -->
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-center text-[#264da0] mb-12 mt-12"><span class="bg-clip-text text-transparent bg-gradient-to-r from-[#263b80] to-[#264da0]">Preguntas y Respuestas</span></h2>
            
            <div class="space-y-4" id="faq-accordion">
                <!-- FAQ Item 1 -->
                <div class="faq-item bg-white rounded-lg shadow-custom overflow-hidden" data-category="licencias">
                    <button class="faq-question w-full flex justify-between items-center p-6 text-left hover:bg-gray-50 transition-colors duration-200">
                        <h3 class="text-lg md:text-xl font-bold text-[#264da0]">¿Qué es una licencia ambiental?</h3>
                        <svg class="w-6 h-6 text-[#7dbb5c] transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6">
                        <div class="prose max-w-none text-gray-700">
                            <p>Una licencia ambiental es un documento otorgado por la autoridad competente que autoriza a una entidad o individuo para llevar a cabo actividades que puedan tener impacto en el medio ambiente. Su objetivo principal es asegurar que dichas actividades se realicen de manera sostenible y respetando las leyes y regulaciones ambientales</p>
                        </div>
                    </div>
                </div>
                <!-- FAQ Item 2 -->
                <div class="faq-item bg-white rounded-lg shadow-custom overflow-hidden" data-category="licencias">
                    <button class="faq-question w-full flex justify-between items-center p-6 text-left hover:bg-gray-50 transition-colors duration-200">
                        <h3 class="text-lg md:text-xl font-bold text-[#264da0]">¿Quien necesita una licencia ambiental?</h3>
                        <svg class="w-6 h-6 text-[#7dbb5c] transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6">
                        <div class="prose max-w-none text-gray-700">
                            <p><strong>Todo proyecto o actividad que causa un impacto ambiental como:</strong></p>
                            <ul class="list-inside">
                                <li>Proyectos de construcción de infraestructura</li>
                                <li>Actividades industriales o manufactureras</li>
                                <li>Proyectos agrícolas o ganaderos a gran escala</li>
                                <li>Actividades mineras o extractivas</li>
                                <li>Proyectos turísticos</li>
                                <li>...</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 3 -->
                <div class="faq-item bg-white rounded-lg shadow-custom overflow-hidden" data-category="licencias">
                    <button class="faq-question w-full flex justify-between items-center p-6 text-left hover:bg-gray-50 transition-colors duration-200">
                        <h3 class="text-lg md:text-xl font-bold text-[#264da0]">¿Cuál es el proceso para obtener una licencia ambiental?</h3>
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
                        <h3 class="text-lg md:text-xl font-bold text-[#264da0]">¿Qué documentos necesito para iniciar un trámite ambiental?</h3>
                        <svg class="w-6 h-6 text-[#7dbb5c] transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6">
                        <div class="prose max-w-none text-gray-700">
                            <p>Los documentos básicos requeridos para la mayoría de trámites ambientales incluyen:</p>
                            <ul class="list-inside">
                                <li>Reporte oficial del sistema de Licenciamiento Ambiental.</li>
                                <li>Escrito de solicitud de Licencia Ambiental.</li>
                                <li>Carta Poder o Poder General para Pleitos, Autenticado.</li>
                                <li>Medidas de control ambiental, emitidas por el Sistema de Licenciamiento Ambiental (SLAS).</li>
                                <li>Fotocopia del RTN de la empresa, Autenticada.</li>
                                <li>Declaración jurada del representante legal de la sociedad mercantil.</li>
                                <li>Declaración jurada del prestador de servicio ambientales debidamente autenticada.</li>
                                <li>Titulo de propiedad debidamente timbrado y registrado/Contrato de arrendamiento o cualquier otro titulo traslaticio de dominio, del lugar a desarrollar el proyecto.</li>
                                <li>Escritura de constitución de sociedad, comerciante individual o Persona Jurídica(En caso de sociedad mercantil extranjera, los documentos deberán estar debidamente apostillados A ley).</li>
                                <li>Informe de validación del prestador de servicios ambientales.</li>
                                <li>Recibo original de pago por inspección a favor de fondo rotatorio DECA-Cuenta #02001-000131-0, BANADESA.</li>
                                <li>Garantía bancaria original, vigente por un año.</li>
                                <li>Publicación del aviso de presentación de la solicitud, en un octavo de pagina en un diario de mayor circulación, acreditar pagina completa del periódico. </li>
                                <li>Herramienta técnica de acuerdo A la categoría del Proyecto: Memoria Técnica, Plan de gestión ambiental, Estudio de impacto ambiental; (Documentación categoría 4; Socialización y aprobación de Acta de cabildo abierto con fotografías listados, Publicación de avisos de inicio Y finalización del estudio de impacto ambiental, Spot Publicitarios durante 5 días en Radios Locales y Nacionales, Constancia de INGHEOMIN y para Camaricultores Constancia de la SAG).</li>
                                <li>Recibo T.G.R. Por el monto de inversion de Licenciamiento Ambiental</li>
                            </ul>
                            <p class="mt-4 text-sm text-gray-500">* Las revisiones se harán con el expediente en forma física y en la plataforma SLAS-2, La documentación deberá estar completa, para ser revisada por Secretaría General.</p>
                            <p class="mt-4 text-sm text-gray-500">* El recibo T.G.R. 1. Por el monto de inversion de Licenciamiento Ambiental deberá ser cancelado en un periodo no mayor a 10 días A partir de estar completa la Verificación física y digital de la documentación Técnica y Legal.</p>
                            <p class="mt-4 text-sm text-gray-500">* El plazo máximo para la presentación del aviso del periódico son 5 días a partir de su publicación.</p>
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 4 -->
                <div class="faq-item bg-white rounded-lg shadow-custom overflow-hidden" data-category="servicios">
                    <button class="faq-question w-full flex justify-between items-center p-6 text-left hover:bg-gray-50 transition-colors duration-200">
                        <h3 class="text-lg md:text-xl font-bold text-[#264da0]">¿Cómo puedo verificar el estado de mi trámite?</h3>
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
                                <li><strong>Presencialmente:</strong> En nuestras oficinas centrales SERNA, Edificio Santa Fe, Colonia Castaño Sur, Tegucigalpa..</li>
                                <li><strong>Por correo electrónico:</strong> Enviando un mensaje a info@serna.gob.hn con su número de expediente.</li>
                            </ol>
                            <p class="mt-4">Para consultas en línea, visite: <a href="https://serna.gob.hn/slas" class="text-[#666666] hover:underline">https://serna.gob.hn/slas</a></p>
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 5 -->
                <div class="faq-item bg-white rounded-lg shadow-custom overflow-hidden" data-category="tramites">
                    <button class="faq-question w-full flex justify-between items-center p-6 text-left hover:bg-gray-50 transition-colors duration-200">
                        <h3 class="text-lg md:text-xl font-bold text-[#264da0]">¿Cuáles son los horarios de atención al público?</h3>
                        <svg class="w-6 h-6 text-[#7dbb5c] transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6">
                        <div class="prose max-w-none text-gray-700">
                            <p>Nuestros horarios de atención al público son:</p>
                            <ul>
                                <li><strong>Oficinas Centrales (Tegucigalpa):</strong> Lunes a Viernes de 7:30 AM a 3:30 PM</li>
                                <li><strong>Atención telefónica:</strong> Lunes a Viernes de 7:30 AM a 3:30 PM</li>
                            </ul>
                            <p class="mt-4">* Los horarios pueden variar en días feriados oficiales. Consulte nuestro calendario de atención en días festivos en la sección de noticias.</p>
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 6 -->
                <div class="faq-item bg-white rounded-lg shadow-custom overflow-hidden" data-category="servicios">
                    <button class="faq-question w-full flex justify-between items-center p-6 text-left hover:bg-gray-50 transition-colors duration-200">
                        <h3 class="text-lg md:text-xl font-bold text-[#264da0]">¿Cómo puedo presentar una denuncia ambiental?</h3>
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
        <div class="max-w-4xl mx-auto mt-16 bg-gradient-to-r from-[#263b80] to-[#264da0] rounded-2xl p-8 md:p-12 text-white text-center">
            <h2 class="text-3xl font-bold mb-6">¿No encontraste lo que buscabas?</h2>
            <p class="text-xl mb-8">Nuestro equipo está listo para ayudarte con cualquier pregunta adicional que puedas tener.</p>
            <a 
                href="/contacto" 
                class="inline-block px-8 py-3 bg-white text-[#231f20] font-bold rounded-full hover:bg-[#E0AE19] hover:text-[#231f20] transition-colors duration-300"
            >
                Contáctenos
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
        box-shadow: 0 10px 15px -3px rgba(35, 31, 32, 0.79), 0 4px 6px -2px rgba(35, 31, 32, 0.05);
    }
    
    .faq-item.active .faq-question svg {
        transform: rotate(180deg);
    }

    .list-inside{
        list-style-type: circle;
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
            categoryButtons.forEach(btn => btn.classList.remove('bg-[#ad8411]', 'text-white'));
            button.classList.add('bg-[#ad8411]', 'text-white');
            
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