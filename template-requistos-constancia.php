<?php
/**
 * Template Name: Requisitos Constancia No Requerir SLAS Template
 * Template Post Type: page
 */

get_header(); ?>

<div class="requisitos-constancia-slas-page bg-[#F3F4F6]">
    <section class="relative py-24 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-[#263b80] via-[#264da0] to-[#264da0]"></div>
        
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-0 -left-4 w-72 h-72 bg-[#87cede] rounded-full mix-blend-multiply filter blur-xl animate-pulse"></div>
            <div class="absolute bottom-0 right-0 w-72 h-72 bg-[#87cede] rounded-full mix-blend-multiply filter blur-xl animate-pulse" style="animation-delay: 3s;"></div>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 text-center">
            <p class="text-[#87cede] font-black uppercase tracking-widest mb-4">Secretaría de Recursos Naturales y Ambiente</p>
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                Constancia de No Requerir Licenciamiento
            </h1>
            <div class="inline-flex items-center justify-center w-24 h-1 bg-[#ad8411] rounded-full"></div>
            <p class="mt-6 text-white/80 text-lg max-w-2xl mx-auto">
                Requisitos necesarios para tramitar la constancia de no requerir licenciamiento ambiental.
            </p>
        </div>
        
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" class="w-full h-12">
                <path d="M0 120h1440V0c-240 40-480 40-720 40S240 40 0 0v120z" fill="#F3F4F6"/>
            </svg>
        </div>
    </section>

    <section class="py-16">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-gray-100">
                <div class="p-8 md:p-12">
                    <div class="flex items-center gap-4 mb-10 border-b border-gray-100 pb-6">
                        <div class="bg-[#263b80] p-3 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-[#263b80]">Listado de Requisitos</h2>
                            <p class="text-gray-500 text-sm">Presentar la documentación completa en el orden indicado.</p>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <?php
                        $requisitos = [
                            "Escrito de Solicitud mediante Apoderado Legal.",
                            "Carta Poder, debidamente autenticada.",
                            "Título de Propiedad debidamente timbrado y registrado | Contrato de arrendamiento (del lugar donde se desarrollará el proyecto).",
                            "Recibo T.G.R. 1 por la cantidad de 200 L. En la casilla #12121, Emisión de Constancias, Certificaciones y Otros."
                        ];

                        foreach ($requisitos as $index => $req) : ?>
                            <div class="flex items-start gap-4 p-4 rounded-xl hover:bg-gray-50 transition-colors border border-transparent hover:border-gray-200">
                                <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-[#87cede]/20 text-[#263b80] font-bold text-sm">
                                    <?php echo $index + 1; ?>
                                </span>
                                <p class="text-gray-700 leading-relaxed pt-1"><?php echo $req; ?></p>
                            </div>
                        <?php endforeach; ?>

                        <div class="ml-0 md:ml-2 p-6 bg-[#263b80]/5 rounded-2xl border-l-4 border-[#ad8411]">
                            <div class="flex items-start gap-4">
                                <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-[#ad8411] text-white font-bold text-sm">
                                    5
                                </span>
                                <div class="w-full">
                                    <p class="text-[#263b80] font-bold text-lg mb-4">Memoria técnica del proyecto:</p>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                        <div class="flex items-center gap-3 bg-white p-3 rounded-lg shadow-sm border border-gray-100">
                                            <span class="w-2 h-2 rounded-full bg-[#87cede]"></span>
                                            <span class="text-gray-700 text-sm">Descripción del Proyecto</span>
                                        </div>
                                        <div class="flex items-center gap-3 bg-white p-3 rounded-lg shadow-sm border border-gray-100">
                                            <span class="w-2 h-2 rounded-full bg-[#87cede]"></span>
                                            <span class="text-gray-700 text-sm">Planos</span>
                                        </div>
                                        <div class="flex items-center gap-3 bg-white p-3 rounded-lg shadow-sm border border-gray-100">
                                            <span class="w-2 h-2 rounded-full bg-[#87cede]"></span>
                                            <span class="text-gray-700 text-sm">Fotografías</span>
                                        </div>
                                        <div class="flex items-center gap-3 bg-white p-3 rounded-lg shadow-sm border border-gray-100">
                                            <span class="w-2 h-2 rounded-full bg-[#87cede]"></span>
                                            <span class="text-gray-700 text-sm">Coordenadas de Ubicación</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12 p-6 bg-amber-50 rounded-2xl border border-amber-100 flex items-center gap-4">
                        <div class="flex-shrink-0 w-12 h-12 rounded-full bg-[#ad8411] flex items-center justify-center text-white shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-[#263b80] font-bold">Observaciones:</h4>
                            <p class="text-gray-700 italic text-sm">Toda fotocopia deberá ser autenticada.</p>
                        </div>
                    </div>

                    <div class="mt-12 text-center">
                        <a href="/wp-content/uploads/2026/04/WhatsApp-Image-2026-04-08-at-08.00.59.jpeg" 
                           target="_blank" 
                           class="inline-flex items-center px-8 py-4 bg-[#263b80] text-white font-bold rounded-full hover:bg-[#ad8411] transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                            Descargar Imagen de Requisitos
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
    .animate-gradient {
        background-size: 200% 200%;
        animation: gradient 5s ease infinite;
    }
    @keyframes gradient {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
</style>

<?php get_footer(); ?>