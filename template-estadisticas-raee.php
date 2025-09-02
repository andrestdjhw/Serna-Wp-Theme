<?php
/**
 * Template Name: RAEE Estadísticas Template
 * Template Post Type: page
 */

get_header(); ?>

<div class="raee-estadísticas-page">
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
                    Estadísticas RAEE
                </h1>
                <p class="text-xl md:text-2xl text-white max-w-3xl mx-auto leading-relaxed opacity-90">
                    Datos y análisis sobre la gestión de Residuos de Aparatos Electrónicos y Eléctricos en Honduras
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

    <!-- Glosario Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-[#00903b] mb-6">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#00903b] to-[#7dbb5c]">Glosario de Términos</span>
                </h2>
                <div class="h-1 w-24 bg-[#87cede] mx-auto mb-8 rounded-full"></div>
                <p class="text-lg text-gray-700 max-w-3xl mx-auto">
                    Definiciones importantes para comprender las estadísticas de RAEE
                </p>
            </div>

            <!-- Tabla de Glosario -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
                <div class="bg-gradient-to-r from-[#00903b] to-[#7dbb5c] px-6 py-4">
                    <h3 class="text-xl font-bold text-white text-center">Glosario RAEE</h3>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gray-50 border-b-2 border-[#87cede]">
                                <th class="px-6 py-4 text-left text-lg font-bold text-[#00903b] uppercase tracking-wide">Término</th>
                                <th class="px-6 py-4 text-left text-lg font-bold text-[#00903b] uppercase tracking-wide">Definición</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr class="hover:bg-gray-50 transition-colors duration-200">
                                <td class="px-6 py-4 text-base font-semibold text-[#5ca54c]">RAEE</td>
                                <td class="px-6 py-4 text-gray-700 text-base">Residuos de Aparatos Eléctricos y Electrónicos que han llegado al final de su vida útil</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors duration-200">
                                <td class="px-6 py-4 text-base font-semibold text-[#5ca54c]">AEE</td>
                                <td class="px-6 py-4 text-gray-700 text-base">Aparato eléctrico electrónico</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors duration-200">
                                <td class="px-6 py-4 text-base font-semibold text-[#5ca54c]">POM</td>
                                <td class="px-6 py-4 text-gray-700 text-base">Puesto en el mercado (siglas en ingles)</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors duration-200">
                                <td class="px-6 py-4 text-base font-semibold text-[#5ca54c]">kg</td>
                                <td class="px-6 py-4 text-gray-700 text-base">kilogramo</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors duration-200">
                                <td class="px-6 py-4 text-base font-semibold text-[#5ca54c]">kg AEE/hab</td>
                                <td class="px-6 py-4 text-gray-700 text-base">kilogramos de AEE por habitante (generación de RAEE)</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors duration-200">
                                <td class="px-6 py-4 text-base font-semibold text-[#5ca54c]">kg RAEE/hab</td>
                                <td class="px-6 py-4 text-gray-700 text-base">kilogramos de RAEE gestionados a traves de canales formales de recolección por habitante</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors duration-200">
                                <td class="px-6 py-4 text-base font-semibold text-[#5ca54c]">% de recolección</td>
                                <td class="px-6 py-4 text-gray-700 text-base">división de los kilogramos de RAEE recolectados entre los kilogramos de AEE multiplicado por 100</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Estadísticas y Gráficos Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-[#00903b] mb-6">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#00903b] to-[#7dbb5c]">Estadísticas de Gestión RAEE</span>
                </h2>
                <div class="h-1 w-24 bg-[#87cede] mx-auto mb-8 rounded-full"></div>
                <p class="text-lg text-gray-700 max-w-3xl mx-auto">
                    Análisis del progreso en la gestión de residuos electrónicos en Honduras
                </p>
            </div>

            <!-- Grid de Gráficos -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
                <!-- Gráfico 1: Tasa de recolección RAEE Anual -->
                <div class="bg-white rounded-2xl shadow-xl p-6 border border-gray-100">
                    <div class="mb-6">
                        <h3 class="text-xl font-bold text-[#00903b] mb-2">Tasa de recolección de RAEE %</h3>
                        <p class="text-gray-600 text-sm">Progreso anual en el procesamiento de residuos electrónicos</p>
                    </div>
                    <div class="h-80">
                        <canvas id="raeeChart1" class="w-full h-full"></canvas>
                    </div>
                </div>

                <!-- Gráfico 2: AEE (kilogramos) por habitante -->
                <div class="bg-white rounded-2xl shadow-xl p-6 border border-gray-100">
                    <div class="mb-6">
                        <h3 class="text-xl font-bold text-[#00903b] mb-2">AEE (kilogramos) por habitante</h3>
                        <p class="text-gray-600 text-sm">Avance hacia los objetivos del proyecto</p>
                    </div>
                    <div class="h-80">
                        <canvas id="raeeChart2" class="w-full h-full"></canvas>
                    </div>
                </div>

                <!-- Gráfico 3: RAEE recolectados (kilogramos) -->
                <div class="bg-white rounded-2xl shadow-xl p-6 border border-gray-100">
                    <div class="mb-6">
                        <h3 class="text-xl font-bold text-[#00903b] mb-2">RAEE recolectados (kilogramos)</h3>
                    </div>
                    <div class="h-80">
                        <canvas id="raeeChart3" class="w-full h-full"></canvas>
                    </div>
                </div>

                <!-- Gráfico 4: AEE importados en kilogramos (POM) -->
                <div class="bg-white rounded-2xl shadow-xl p-6 border border-gray-100">
                    <div class="mb-6">
                        <h3 class="text-xl font-bold text-[#00903b] mb-2">AEE importados en kilogramos (POM)</h3>
                    </div>
                    <div class="h-80">
                        <canvas id="raeeChart4" class="w-full h-full"></canvas>
                    </div>
                </div>
            </div>

            <!-- Indicadores Clave -->
            <!-- <div class="bg-gradient-to-r from-[#00903b] to-[#7dbb5c] rounded-2xl p-8 md:p-12 text-white">
                <h3 class="text-2xl md:text-3xl font-bold text-center mb-8">Indicadores Clave 2024</h3>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center">
                    <div class="p-4">
                        <div class="text-3xl md:text-4xl font-bold mb-2 text-[#87cede]">52</div>
                        <p class="text-lg opacity-90">Toneladas de Plástico Bromado</p>
                    </div>
                    <div class="p-4">
                        <div class="text-3xl md:text-4xl font-bold mb-2 text-[#87cede]">48%</div>
                        <p class="text-lg opacity-90">Meta Cumplida</p>
                    </div>
                    <div class="p-4">
                        <div class="text-3xl md:text-4xl font-bold mb-2 text-[#87cede]">27</div>
                        <p class="text-lg opacity-90">Instituciones Estatales</p>
                    </div>
                    <div class="p-4">
                        <div class="text-3xl md:text-4xl font-bold mb-2 text-[#87cede]">1,678</div>
                        <p class="text-lg opacity-90">Personas Capacitadas</p>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    <!-- Glosario Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-[#00903b] mb-6">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#00903b] to-[#7dbb5c]">Referencias o Fuentes</span>
                </h2>
                <div class="h-1 w-24 bg-[#87cede] mx-auto mb-8 rounded-full"></div>
            </div>

            <!-- Tabla de Glosario -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
                <div class="bg-gradient-to-r from-[#00903b] to-[#7dbb5c] px-6 py-4">
                    <h3 class="text-xl font-bold text-white text-center"></h3>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gray-50 border-b-2 border-[#87cede]">
                                <th class="px-6 py-4 text-left text-lg font-bold text-[#00903b] uppercase tracking-wide">Término</th>
                                <th class="px-6 py-4 text-left text-lg font-bold text-[#00903b] uppercase tracking-wide">Definición</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr class="hover:bg-gray-50 transition-colors duration-200">
                                <td class="px-6 py-4 text-base font-semibold text-[#5ca54c]">Habitantes</td>
                                <td class="px-6 py-4 text-gray-700 text-base">ine.gob.hn</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors duration-200">
                                <td class="px-6 py-4 text-base font-semibold text-[#5ca54c]">RAEE</td>
                                <td class="px-6 py-4 text-gray-700 text-base">Información proporcionada por las empresas gestoras RECICLAJE DIAMANTE, RECYCLE, RECACEL, INVEMA, SERAMB, HES, RECYPROCO</td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors duration-200">
                                <td class="px-6 py-4 text-base font-semibold text-[#5ca54c]">AEE</td>
                                <td class="px-6 py-4 text-gray-700 text-base">Información proporcionada por Administración Aduanera de Honduras mediante OFICIO-ADUANAS-DE-464-2024</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow-custom p-8 md:p-12 text-center">
                <h2 class="text-3xl font-bold text-[#00903b] mb-6">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#00903b] to-[#7dbb5c]">Más Información</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-8">
                    Accede a recursos adicionales y herramientas para la gestión de RAEE.
                </p>
                <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="/direcciones/cescco/rae" class="px-6 py-3 bg-[#7dbb5c] text-white font-bold rounded-full hover:bg-[#00903b] transition-colors duration-300">
                        Volver a RAEE Principal
                    </a>
                    <a href="#" class="px-6 py-3 border-2 border-[#00903b] text-[#00903b] font-bold rounded-full hover:bg-[#ee3725] hover:border-[#ee3725] hover:text-white transition-colors duration-300">
                        Descargar Reporte
                    </a>
                    <a href="#" class="px-6 py-3 border-2 border-[#87cede] text-[#00903b] font-bold rounded-full hover:bg-[#87cede] hover:text-white transition-colors duration-300">
                        Contactar Especialista
                    </a>
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

    /* Tabla responsive */
    @media (max-width: 768px) {
        .tabla-responsive {
            font-size: 0.875rem;
        }
        
        .tabla-responsive th,
        .tabla-responsive td {
            padding: 0.75rem 0.5rem;
        }
    }
</style>

<!-- Chart.js CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Configuración común para todos los gráficos
    const commonOptions = {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false
            }
        },
        scales: {
            y: {
                beginAtZero: true,
                max: 100,
                ticks: {
                    stepSize: 10,
                    callback: function(value) {
                        return value + '%';
                    }
                },
                grid: {
                    color: 'rgba(135, 206, 222, 0.2)'
                }
            },
            x: {
                grid: {
                    display: false
                }
            }
        }
    };

    // Gráfico 1:  de RAEE Procesadas
    const ctx1 = document.getElementById('raeeChart1').getContext('2d');
    new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ['2020', '2021', '2022', '2023'],
            datasets: [{
                data: [17, 69, 82, 99],
                backgroundColor: [
                    'rgba(0, 144, 59, 0.8)',
                    'rgba(92, 165, 76, 0.8)',
                    'rgba(125, 187, 92, 0.8)',
                    'rgba(135, 206, 222, 0.8)',
                    'rgba(238, 55, 37, 0.8)'
                ],
                borderColor: [
                    'rgba(0, 144, 59, 1)',
                    'rgba(92, 165, 76, 1)',
                    'rgba(125, 187, 92, 1)',
                    'rgba(135, 206, 222, 1)',
                    'rgba(238, 55, 37, 1)'
                ],
                borderWidth: 2,
                borderRadius: 8
            }]
        },
        options: {
            ...commonOptions,
            scales: {
                ...commonOptions.scales,
                y: {
                    ...commonOptions.scales.y,
                    ticks: {
                        callback: function(value) {
                            return value + '%';
                        }
                    }
                }
            }
        }
    });

    // Gráfico 2: AEE (kilogramos) por habitante
    const ctx2 = document.getElementById('raeeChart2').getContext('2d');
    new Chart(ctx2, {
        type: 'line',
        data: {
            labels: ['2020', '2021', '2022', '2023'],
            datasets: [{
                data: [4.5, 6.8, 5.7, 6.39],
                borderColor: 'rgba(0, 144, 59, 1)',
                backgroundColor: 'rgba(0, 144, 59, 0.1)',
                borderWidth: 3,
                fill: true,
                tension: 0.4,
                pointBackgroundColor: 'rgba(0, 144, 59, 1)',
                pointBorderColor: 'white',
                pointBorderWidth: 3,
                pointRadius: 6
            }]
        },
        options: {
            ...commonOptions,
            scales: {
                ...commonOptions.scales,
                y: {
                    beginAtZero: false,
                    min: 4.5,
                    max: 7,
                    ticks: {
                        stepSize: 0.5,
                        callback: function(value) {
                            return value;
                        }
                    },
                    grid: {
                        color: 'rgba(135, 206, 222, 0.2)'
                    }
                }
            }
        }
    });

    // Gráfico 3: RAEE recolectados (kilogramos)
    const ctx3 = document.getElementById('raeeChart3').getContext('2d');
    new Chart(ctx3, {
        type: 'line',
        data: {
            labels: ['2020', '2021', '2022', '2023'],
            datasets: [{
                data: [70895.97, 432942.39, 449289.18, 617324.86],
                backgroundColor: 'rgba(135, 206, 222, 0.8)',
                borderColor: 'rgba(135, 206, 222, 1)',
                borderWidth: 2,
                borderRadius: 8
            }]
        },
        options: {
            ...commonOptions,
            scales: {
                ...commonOptions.scales,
                y: {
                    beginAtZero: false,
                    min: 0,
                    max: 700000,
                    ticks: {
                        stepSize: 100000,
                        callback: function(value) {
                            return value;
                        }
                    },
                    grid: {
                        color: 'rgba(135, 206, 222, 0.2)'
                    }
                }
            }
        }
    });

    // Gráfico 4: AEE importados en kilogramos (POM)
    const ctx4 = document.getElementById('raeeChart4').getContext('2d');
    new Chart(ctx4, {
        type: 'doughnut',
        data: {
            labels: ['2020', '2021', '2022', '2023'],
            datasets: [{
                data: [42445060.57, 63136099.97, 54660909.91, 62239841.35],
                backgroundColor: [
                    'rgba(0, 144, 59, 0.8)',
                    'rgba(92, 165, 76, 0.8)',
                    'rgba(125, 187, 92, 0.8)',
                    'rgba(135, 206, 222, 0.8)',
                    'rgba(238, 55, 37, 0.8)'
                ],
                borderColor: 'white',
                borderWidth: 3
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        padding: 20,
                        usePointStyle: true
                    }
                }
            }
        }
    });
});
</script>

<?php get_footer(); ?>