<?php
/**
 * Template Name: Nuevos Requisitos SLAS Template
 * Template Post Type: page
 */

get_header(); ?>

<div class="nuevos-requisitos-slas-page bg-[#F3F4F6]">
    <section class="relative py-24 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-[#263b80] via-[#264da0] to-[#264da0]"></div>
        
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-0 -left-4 w-72 h-72 bg-[#87cede] rounded-full mix-blend-multiply filter blur-xl animate-pulse"></div>
            <div class="absolute bottom-0 right-0 w-72 h-72 bg-[#87cede] rounded-full mix-blend-multiply filter blur-xl animate-pulse" style="animation-delay: 3s;"></div>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 text-center">
            <p class="text-[#87cede] font-black uppercase tracking-widest mb-4">Secretaría de Recursos Naturales y Ambiente</p>
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                Requisitos de Licenciamiento Ambiental
            </h1>
            <div class="inline-flex items-center justify-center w-24 h-1 bg-[#ad8411] rounded-full"></div>
            <p class="mt-6 text-white/80 text-lg max-w-2xl mx-auto">
                Listado oficial de la documentación necesaria para el Sistema de Licenciamiento Ambiental (SLAS).
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-[#263b80]">Documentación Requerida</h2>
                            <p class="text-gray-500 text-sm">Asegúrese de cumplir con todos los puntos enumerados.</p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <?php
                        $requisitos = [
                            "Reporte Oficial del Sistema de Licenciamiento Ambiental",
                            "Escrito de Solicitud de Licencia Ambiental",
                            "Carta Poder o Poder General para pleitos, autenticado",
                            "Medidas de Control Ambiental emitidas por el Sistema de Licenciamiento Ambiental (SLAS)",
                            "Fotocopia de RTN de la Empresa, autenticada",
                            "Fotocopia del Documento de Identificación Nacional (DNI) del Representante Legal de la sociedad mercantil",
                            "Declaración Jurada del Representante Legal de la sociedad mercantil",
                            "Declaración Jurada del Prestador de Servicios Ambientales (PSA) debidamente autenticada",
                            "Título de propiedad debidamente timbrado y registrado / Contrato de arrendamiento o cualquier otro título traslaticio de dominio del área a desarrollar el proyecto",
                            "Escritura de constitución de sociedad, Comerciante individual o personería jurídica en caso de Sociedad mercantil extranjera (debidamente apostillados)",
                            "Informe de Validación de las Medidas de Control Ambiental del SLAS por el PSA",
                            "Recibo de pago por inspección TGR-1 en la casilla: Institución 150-SERNA; rubro 12117-Monitoreo Ambiental",
                            "Garantía Bancaria original, vigente por un año",
                            "Publicación del aviso de presentación de la solicitud (en diario de mayor circulación, acreditar página completa, vigencia de 05 días hábiles)"
                        ];

                        foreach ($requisitos as $index => $req) : ?>
                            <div class="flex items-start gap-4 p-4 rounded-xl hover:bg-gray-50 transition-colors border border-transparent hover:border-gray-200">
                                <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-[#87cede]/20 text-[#263b80] font-bold text-sm">
                                    <?php echo $index + 1; ?>
                                </span>
                                <p class="text-gray-700 leading-relaxed pt-1"><?php echo $req; ?></p>
                            </div>
                        <?php endforeach; ?>

                        <div class="mt-8 p-6 bg-[#263b80]/5 rounded-2xl border-l-4 border-[#ad8411]">
                            <h3 class="text-lg font-bold text-[#263b80] mb-4 flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#ad8411]" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                </svg>
                                15. Herramienta Técnica de evaluación de acuerdo a la categoría:
                            </h3>
                            <div class="grid md:grid-cols-2 gap-4">
                                <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-100">
                                    <span class="block text-[#ad8411] font-black text-xs uppercase mb-1">Categoría 1</span>
                                    <p class="text-gray-700 font-medium">Memoria Técnica</p>
                                </div>
                                <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-100">
                                    <span class="block text-[#ad8411] font-black text-xs uppercase mb-1">Categoría 2</span>
                                    <p class="text-gray-700 font-medium">Cuadro Resumen de Plan de Gestión Ambiental (nuevo) / Plan de Mejoramiento Ambiental (operación)</p>
                                </div>
                                <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-100">
                                    <span class="block text-[#ad8411] font-black text-xs uppercase mb-1">Categoría 3</span>
                                    <p class="text-gray-700 font-medium">Plan de Gestión Ambiental (nuevo) / Plan de Mejoramiento Ambiental (operación)</p>
                                </div>
                                <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-100">
                                    <span class="block text-[#ad8411] font-black text-xs uppercase mb-1">Categoría 4</span>
                                    <p class="text-gray-700 font-medium">Estudio de Evaluación de Impacto Ambiental (EsIA) (nuevo) / Estudio de Evaluación de Auditoría Ambiental (EAA) (operando)</p>
                                </div>
                            </div>
                            
                            <div class="mt-5 p-4 bg-[#ad8411]/10 rounded-lg text-sm text-[#263b80]">
                                <strong class="font-bold">Proyectos Categoría 4:</strong> Deberá presentar la socialización y aprobación por Certificación del Punto de Acta de Cabildo abierto con medios de verificación fotográfico y listado de asistencia, publicaciones de avisos de inicio y finalización del Estudio de Impacto Ambiental, spot publicitario 03 veces por día durante 05 días en radio locales y nacionales, Fondo de Garantía o Seguro Ambiental vigente durante la vida útil del proyecto.
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 rounded-xl hover:bg-gray-50 transition-colors border border-transparent hover:border-gray-200">
                            <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-[#87cede]/20 text-[#263b80] font-bold text-sm">
                                16
                            </span>
                            <p class="text-gray-700 leading-relaxed pt-1">Recibo TGR-1, por el monto de Inversión de Licenciamiento Ambiental, casilla: Institución 150-Secretaría de Recursos Naturales y Ambiente (SERNA); rubro 12209-Otras Licencias, el cual deberá ser cancelado en un periodo no menos a 10 días a partir de estar completa la documentación técnica y legal.</p>
                        </div>

                    </div>

                    <div class="mt-12 p-8 bg-gray-50 rounded-2xl border border-gray-100">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 rounded-lg bg-[#ad8411] flex items-center justify-center text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-[#263b80]">Observaciones</h3>
                        </div>
                        
                        <ul class="space-y-4 text-gray-700 leading-relaxed text-sm">
                            <li class="flex items-start gap-3">
                                <span class="block w-1.5 h-1.5 rounded-full bg-[#ad8411] mt-2 flex-shrink-0"></span>
                                Las revisiones se realizarán con el expediente en forma física y en la plataforma del SLAS, la misma deberá está completa para su revisión en Secretaría General.
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="block w-1.5 h-1.5 rounded-full bg-[#ad8411] mt-2 flex-shrink-0"></span>
                                Para los proyectos que se encuentran dentro de Área Protegida, deberá de presentar <strong class="underline font-semibold text-[#263b80]">CONSTANCIA DE FACTIBILIDAD</strong> emitida por el ICF.
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="block w-1.5 h-1.5 rounded-full bg-[#ad8411] mt-2 flex-shrink-0"></span>
                                A los proyectos turísticos que le aplique, Certificado de Viabilidad Turística emitida por el IHT, de acuerdo a lo establecido en la Ley de Incentivo de Turismo y su Reglamento.
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="block w-1.5 h-1.5 rounded-full bg-[#ad8411] mt-2 flex-shrink-0"></span>
                                Los proyectos de Lotificación y urbanización (nuevos o en operación) deberán de presentar Constancia emitida por Catastro Municipal.
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="block w-1.5 h-1.5 rounded-full bg-[#ad8411] mt-2 flex-shrink-0"></span>
                                Los proyectos de Lotificación y urbanización (nuevos) deberán de presentar Estudio de Evaluación de Emplazamiento emitido por COPECO / En el Distrito Central se puede presentar Informe de Evaluación de Riesgo emitido por el Departamento de Riesgo de la AMDC.
                            </li>
                            <li class="flex items-start gap-3 font-medium text-[#263b80]">
                                <span class="block w-1.5 h-1.5 rounded-full bg-[#ad8411] mt-2 flex-shrink-0"></span>
                                Todos los planos deben ser tamaño tabloide, firmados, sellados y timbrados por Ing. Civil o arquitecto.
                            </li>
                        </ul>
                        
                        <div class="mt-6 border-t border-gray-100 pt-5 text-center text-xs text-gray-500">
                             Casos Específicos: Toda fotocopia debe ser presentada debidamente autenticada o cotejada conforme a su original.
                        </div>
                    </div>

                    <div class="mt-12 text-center">
                        <a href="/wp-content/uploads/2026/04/Requisitos-de-Licencia-Ambiental-SERNA-1.docx" 
                           download 
                           class="inline-flex items-center px-8 py-4 bg-[#ad8411] text-white font-bold rounded-full hover:bg-[#263b80] transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                            Descargar Listado en PDF/Imagen
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