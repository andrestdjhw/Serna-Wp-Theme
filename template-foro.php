<?php
/**
 * Template Name: FORO Noticias Template
 * Template Post Type: page
 */

get_header(); ?>

<div class="foro-news-page">
    <!-- Hero Section -->
    <section class="relative py-24 overflow-hidden">
        <!-- Gradient Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-[#263b80] via-[#264da0] to-[#264da0]"></div>
        
        <!-- Animated Background Elements (orbes) -->
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-0 -left-4 w-72 h-72 bg-[#87cede] rounded-full mix-blend-multiply filter blur-xl animate-pulse"></div>
            <div class="absolute bottom-0 right-0 w-72 h-72 bg-[#87cede] rounded-full mix-blend-multiply filter blur-xl animate-pulse" style="animation-delay: 3s;"></div>
            <div class="absolute -bottom-8 left-20 w-72 h-72 bg-[#7dbb5c] rounded-full mix-blend-multiply filter blur-xl animate-pulse" style="animation-delay: 5s;"></div>
        </div>
        
        <!-- Patrón de puntos — coherente con el resto del sitio -->
        <div class="foro-hero-dots" aria-hidden="true"></div>
        
        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="foro-hero-title">
                    Noticias
                </h1>
                <p class="foro-hero-sub">
                    Mantente informado sobre las últimas actividades, logros y noticias de la <strong class="mt-4 text-2xl">Secretaría de Recursos Naturales y Ambiente</strong>
                </p>
                <div class="mt-8">
                    <div class="inline-flex items-center justify-center w-50 h-1 bg-[#ad8411] rounded-full"></div>
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

    <!-- Latest News Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-[#00903b] mb-6">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#263b80] to-[#87cede]">Últimas Noticias</span>
                </h2>
            </div>
            
            <!-- News Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="newsGrid">

                <!-- News Card 1 -->
                <article class="news-card">
                    <div class="news-image-container">
                        <img src="/wp-content/uploads/2026/03/Noticia27FEB.jpeg" alt="Noticia 27 de Febrero" class="news-image">
                        <div class="news-date-badge">
                            <span class="news-date-day">27</span>
                            <span class="news-date-month">FEB</span>
                        </div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-category">Logro</span>
                            <span class="news-separator">•</span>
                            <span class="news-date-full">27 de febrero, 2026</span>
                        </div>
                        <h3 class="news-title">Fortaleza Interinstitucional SERNA-Aduanas</h3>
                        <div class="news-excerpt-container">
                            <p class="news-excerpt news-excerpt-visible">
                                El ministro <strong>Juan Carlos Ramos</strong>, de la SERNA, sostuvo una reunión en el marco de la cooperación interinstitucional, en cumplimiento al mandato del presidente <strong>Nasry Asfura</strong>, orientado al apoyo a la inversión, la facilitación de procesos y el fortalecimiento del cumplimiento de los compromisos nacionales e internacionales del país.
                            </p>
                            <p class="news-excerpt news-excerpt-hidden">
                                Durante el encuentro, el abogado <strong>Marco Abadie</strong> y el titular de SERNA reafirmaron su compromiso de fortalecer el intercambio eficiente de información y avanzar en la digitalización de procesos, con el objetivo de respaldar al sector productivo y de inversión, así como dar cumplimiento a convenios internacionales como el Protocolo de Montreal.
                            </p>
                        </div>
                        <a href="#" class="news-read-more" onclick="toggleNewsContent(event, this)">
                            <span class="read-more-text">Leer más</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 read-more-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- News Card 2 -->
                <article class="news-card">
                    <div class="news-image-container">
                        <img src="/wp-content/uploads/2026/03/Noticia27FEB_2.jpeg" alt="Noticia 27 Febrero, Avances con el sector industrial" class="news-image">
                        <div class="news-date-badge">
                            <span class="news-date-day">27</span>
                            <span class="news-date-month">FEB</span>
                        </div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-category">Inversion</span>
                            <span class="news-separator">•</span>
                            <span class="news-date-full">27 de febrero, 2026</span>
                        </div>
                        <h3 class="news-title">Avances con el sector industrial</h3>
                        <div class="news-excerpt-container">
                            <p class="news-excerpt news-excerpt-visible">
                                El ministro de la SERNA, <strong>Juan Carlos Ramos</strong>, recibió a los funcionarios de la Organización de las Naciones Unidas para el Desarrollo Industrial (ONUDI), <strong>Marcela Gonzales</strong> y <strong>Alan Bastida</strong>, quienes presentaron la cartera de proyectos destinada al sector industrial.
                            </p>
                            <p class="news-excerpt news-excerpt-hidden">
                                Durante el encuentro, se reiteró el apoyo de ONUDI al gobierno y el compromiso de Honduras con sus obligaciones internacionales, incluyendo el cumplimiento del Protocolo de Montreal.
                            </p>
                        </div>
                        <a href="#" class="news-read-more" onclick="toggleNewsContent(event, this)">
                            <span class="read-more-text">Leer más</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 read-more-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- News Card 3 -->
                <article class="news-card">
                    <div class="news-image-container">
                        <img src="/wp-content/uploads/2026/03/Noticia24FEB.jpeg" alt="Noticia 2" class="news-image">
                        <div class="news-date-badge">
                            <span class="news-date-day">24</span>
                            <span class="news-date-month">FEB</span>
                        </div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-category">Logro</span>
                            <span class="news-separator">•</span>
                            <span class="news-date-full">24 de febrero, 2026</span>
                        </div>
                        <h3 class="news-title">¡Se activó la Racha en SERNA!</h3>
                        <div class="news-excerpt-container">
                            <p class="news-excerpt news-excerpt-visible">
                                Bajo la administración del presidente <strong>Nasry Asfura</strong>, con la gestión del Ministro <strong>Juan Carlos Ramos</strong>, la SERNA avanza de manera contundente en la firma de licencias ambientales, fortaleciendo una gestión ágil, ordenada, con sustento técnico y respaldo jurídico. 🌱
                            </p>
                            <p class="news-excerpt news-excerpt-hidden">
                                ¡Honduras, vamos a estar bien!
                            </p>
                        </div>
                        <a href="https://share.google/Mqnneqva39gvDLXU4" target="_blank" rel="noopener noreferrer" class="news-read-more" onclick="toggleNewsContent(event, this)">
                            <span class="read-more-text">Leer más</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 read-more-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- News Card 4 -->
                <article class="news-card">
                    <div class="news-image-container">
                        <img src="/wp-content/uploads/2026/03/Noticia19FEB.jpeg" alt="Noticia 19 Febrero" class="news-image">
                        <div class="news-date-badge">
                            <span class="news-date-day">19</span>
                            <span class="news-date-month">FEB</span>
                        </div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-category">Logro</span>
                            <span class="news-separator">•</span>
                            <span class="news-date-full">19 de febrero, 2026</span>
                        </div>
                        <h3 class="news-title">Honduras firme con la agenda ambiental internacional.</h3>
                        <div class="news-excerpt-container">
                            <p class="news-excerpt news-excerpt-visible">
                                El ministro <strong>Juan Carlos Ramos y Marcos Pinzón</strong>, coordinador regional del Programa de las Naciones Unidas para el Medio Ambiente sostuvieron un encuentro para reafirmar el compromiso de Honduras con el Protocolo de Montreal.
                            </p>
                            <p class="news-excerpt news-excerpt-hidden">
                                Este acuerdo, vigente desde 1987, ha permitido eliminar el 99 % de las sustancias que dañan la capa de ozono, contribuyendo a su recuperación y a la protección del ambiente.
                            </p>
                        </div>
                        <a href="#" class="news-read-more" onclick="toggleNewsContent(event, this)">
                            <span class="read-more-text">Leer más</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 read-more-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- News Card 5 -->
                <article class="news-card">
                    <div class="news-image-container">
                        <img src="/wp-content/uploads/2026/03/Noticia19FEB_2.jpeg" alt="Noticia 19 Febrero, Encuentro Ministro SERNA Representantes FAO" class="news-image">
                        <div class="news-date-badge">
                            <span class="news-date-day">19</span>
                            <span class="news-date-month">FEB</span>
                        </div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-category">Nuevo Capítulo</span>
                            <span class="news-separator">•</span>
                            <span class="news-date-full">19 de febrero, 2026</span>
                        </div>
                        <h3 class="news-title">Encuentro Ministro SERNA Representantes FAO</h3>
                        <div class="news-excerpt-container">
                            <p class="news-excerpt news-excerpt-visible">
                                Ministro <strong>Juan Carlos Ramos</strong> sostiene un encuentro con la FAO y su representante, <strong>Fátima Espinal Mercedes</strong>, para fortalecer alianzas y avanzar en proyectos junto al sistema de Naciones Unidas.
                            </p>
                            <p class="news-excerpt news-excerpt-hidden">
                                Estas acciones impulsan el desarrollo sostenible, la protección de los recursos naturales y mejores oportunidades para las comunidades hondureñas.
                            </p>
                        </div>
                        <a href="#" class="news-read-more" onclick="toggleNewsContent(event, this)">
                            <span class="read-more-text">Leer más</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 read-more-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- News Card 6 -->
                <article class="news-card">
                    <div class="news-image-container">
                        <img src="/wp-content/uploads/2026/03/Noticia18FEB-scaled.jpg" alt="Noticia 18 FEB" class="news-image">
                        <div class="news-date-badge">
                            <span class="news-date-day">18</span>
                            <span class="news-date-month">FEB</span>
                        </div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-category">Logro</span>
                            <span class="news-separator">•</span>
                            <span class="news-date-full">18 de febrero, 2026</span>
                        </div>
                        <h3 class="news-title">Reunión Ministro SERNA Representantes del PMA</h3>
                        <div class="news-excerpt-container">
                            <p class="news-excerpt news-excerpt-visible">
                                Un encuentro orientado a fortalecer la cooperación y el desarrollo nacional sostuvo el ministro <strong>Juan Carlos Ramos</strong> con el Programa Mundial de Alimentos (PMA) y su representante, <strong>Stephanie Hochstetter</strong>.
                            </p>
                            <p class="news-excerpt news-excerpt-hidden">
                                La reunión reafirma el compromiso de la SERNA de trabajar junto a aliados estratégicos para apoyar a la población y fortalecer la respuesta ante situaciones de crisis en el país.
                            </p>
                        </div>
                        <a href="#" class="news-read-more" onclick="toggleNewsContent(event, this)">
                            <span class="read-more-text">Leer más</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 read-more-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                    </div>
                </article>

            </div>

            <!-- Load More Button -->
            <div class="text-center mt-12" id="loadMoreContainer">
                <button id="loadMoreBtn" class="inline-flex items-center px-8 py-3 bg-gradient-to-r from-[#87cede] to-[#264da0] text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300" onclick="loadMoreNews()">
                    <span>Cargar Más Noticias</span>
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-[#264da0] to-[#263b80] rounded-2xl overflow-hidden shadow-xl">
                <div class="px-8 py-12 text-center text-white">
                    <h2 class="text-3xl font-bold mb-4">Mantente Informado</h2>
                    <p class="foro-newsletter-sub text-xl mb-8 opacity-90">
                        Suscríbete a nuestro boletín para recibir las últimas noticias y actualizaciones de SERNA
                    </p>
                    <div class="max-w-md mx-auto">
                        <div class="flex flex-col sm:flex-row gap-4">
                            <input type="email" placeholder="Tu correo electrónico" class="flex-1 px-4 py-3 rounded-full bg-white text-gray-800 focus:outline-none focus:ring-2 focus:ring-[#87cede]">
                            <button class="px-6 py-3 bg-[#231f20] text-white font-semibold rounded-full hover:bg-[#ad8411] hover:text-white transition-colors duration-300">
                                Suscribirse
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
@import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap');

/* Fuente base */
.foro-news-page {
    font-family: 'Outfit', sans-serif;
}

/* ── Título hero — mismo gradiente animado que el resto de templates ── */
.foro-hero-title {
    font-size: clamp(32px, 5.5vw, 62px);
    font-weight: 800;
    line-height: 1.08;
    margin: 0 0 24px;
    background: linear-gradient(180deg, #ffffff 20%, #ad8411 60%, #ffffff 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    background-size: 100% 200%;
    animation: gradientShift 6s ease infinite;
}

@keyframes gradientShift {
    0%, 100% { background-position: 0% 0%; }
    50%       { background-position: 0% 100%; }
}

/* Subtítulo hero */
.foro-hero-sub {
    font-family: 'DM Sans', sans-serif;
    font-size: clamp(16px, 2vw, 20px);
    color: rgba(255,255,255,0.85);
    max-width: 680px;
    margin: 0 auto;
    line-height: 1.6;
}

/* Newsletter subtitle */
.foro-newsletter-sub {
    font-family: 'DM Sans', sans-serif;
}

/* ── Patrón de puntos — igual que el resto de templates ── */
.foro-hero-dots {
    --dot-color: rgba(135, 206, 222, 0.30);
    --dot-size: 3rem;

    position: absolute;
    inset: 0;
    z-index: 1;
    pointer-events: none;

    background-image:
        radial-gradient(var(--dot-color) 5%, transparent 6%),
        radial-gradient(var(--dot-color) 5%, transparent 6%);
    background-position:
        0 0,
        calc(var(--dot-size) / 2) calc(var(--dot-size) / 2);
    background-size: var(--dot-size) var(--dot-size);
    background-color: transparent;

    box-shadow: inset 0 0 140px rgba(173, 132, 17, 0.10);

    mask-image: radial-gradient(
        ellipse 100% 100% at 50% 50%,
        rgba(0,0,0,0.60) 20%,
        rgba(0,0,0,0.30) 65%,
        transparent 100%
    );
    -webkit-mask-image: radial-gradient(
        ellipse 100% 100% at 50% 50%,
        rgba(0,0,0,0.60) 20%,
        rgba(0,0,0,0.30) 65%,
        transparent 100%
    );
}

/* ── News Cards ── */
.news-card {
    background: white;
    border-radius: 1rem;
    overflow: hidden;
    box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -1px rgba(0,0,0,0.06);
    transition: all 0.3s ease;
    transform: translateY(0);
    border: 2px solid transparent;
}
.news-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1), 0 10px 10px -5px rgba(0,0,0,0.04);
    border-color: rgba(135,206,222,0.3);
}

.news-image-container {
    position: relative;
    height: 200px;
    overflow: hidden;
}
.news-image {
    width: 100%; height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
    background-color: #f3f4f6;
    background-image: linear-gradient(45deg, transparent 40%, rgba(255,255,255,0.5) 50%, transparent 60%);
    background-size: 200% 100%;
    animation: shimmer 1.5s infinite;
}
.news-card:hover .news-image { transform: scale(1.5); }
.news-image[src] { animation: none; background: none; }

.news-date-badge {
    position: absolute;
    top: 1rem; right: 1rem;
    background: linear-gradient(135deg, #264da0, #87cede);
    color: white;
    padding: 0.5rem;
    border-radius: 0.5rem;
    text-align: center;
    font-weight: bold;
    min-width: 3rem;
    box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
}
.news-date-day   { display: block; font-size: 1.25rem; line-height: 1; }
.news-date-month { display: block; font-size: 0.75rem; text-transform: uppercase; opacity: 0.9; }

.news-content { padding: 1.5rem; }

.news-meta {
    display: flex;
    align-items: center;
    margin-bottom: 1rem;
    font-family: 'DM Sans', sans-serif;
    font-size: 0.875rem;
    color: #6b7280;
}
.news-category {
    background: linear-gradient(135deg, #264da0, #87cede);
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 9999px;
    font-weight: 600;
    font-size: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}
.news-separator  { margin: 0 0.5rem; color: #d1d5db; }
.news-date-full  { color: #9ca3af; }

.news-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: #1f2937;
    margin-bottom: 0.75rem;
    line-height: 1.4;
    transition: color 0.3s ease;
}
.news-card:hover .news-title { color: #231f20; }

.news-excerpt-container { position: relative; overflow: hidden; }

.news-excerpt {
    font-family: 'DM Sans', sans-serif;
    color: #231f20;
    line-height: 1.6;
    margin-bottom: 1rem;
    font-size: 0.95rem;
    transition: max-height 0.4s ease, opacity 0.4s ease, margin 0.4s ease;
}
.news-excerpt-hidden {
    max-height: 0;
    opacity: 0;
    margin-bottom: 0;
    overflow: hidden;
}
.news-excerpt-visible { max-height: 1000px; opacity: 1; }
.news-card.expanded .news-excerpt-hidden {
    max-height: 1000px;
    opacity: 1;
    margin-bottom: 1rem;
}

.news-read-more {
    display: inline-flex;
    align-items: center;
    color: #666666;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    font-size: 0.9rem;
    cursor: pointer;
}
.news-read-more:hover { color: #231f20; transform: translateX(4px); }
.news-read-more svg  { transition: transform 0.3s ease; }
.news-read-more:hover svg { transform: translateX(2px); }
.news-card.expanded .read-more-icon { transform: rotate(180deg); }
.news-card.expanded .news-read-more:hover .read-more-icon { transform: rotate(180deg) translateX(-2px); }

@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to   { opacity: 1; transform: translateY(0); }
}
.news-card.fade-in { animation: fadeInUp 0.6s ease forwards; }

@keyframes shimmer {
    0%   { background-position: -200% 0; }
    100% { background-position: 200% 0; }
}

@media (max-width: 640px) {
    .news-card    { margin-bottom: 1.5rem; }
    .news-content { padding: 1rem; }
    .news-title   { font-size: 1.125rem; }
    .news-date-badge { top: 0.75rem; right: 0.75rem; padding: 0.375rem; min-width: 2.5rem; }
    .news-date-day   { font-size: 1rem; }
    .news-date-month { font-size: 0.625rem; }
}
</style>

<script>
let currentNewsIndex = 0;
const newsPerLoad = 3;

function toggleNewsContent(event, element) {
    event.preventDefault();
    const newsCard = element.closest('.news-card');
    const readMoreText = element.querySelector('.read-more-text');
    newsCard.classList.toggle('expanded');
    readMoreText.textContent = newsCard.classList.contains('expanded') ? 'Leer menos' : 'Leer más';
}

function loadMoreNews() {
    const extendedNews = document.querySelectorAll('.extended-news');
    const loadMoreContainer = document.getElementById('loadMoreContainer');
    const newsToShow = Array.from(extendedNews).slice(currentNewsIndex, currentNewsIndex + newsPerLoad);

    if (newsToShow.length === 0) { loadMoreContainer.style.display = 'none'; return; }

    newsToShow.forEach((news, index) => {
        setTimeout(() => {
            news.style.display = 'block';
            setTimeout(() => { news.classList.add('fade-in'); }, 10);
        }, index * 150);
    });

    currentNewsIndex += newsPerLoad;

    if (currentNewsIndex >= extendedNews.length) {
        setTimeout(() => { loadMoreContainer.style.display = 'none'; }, newsToShow.length * 150 + 500);
    }

    if (newsToShow.length > 0) {
        setTimeout(() => {
            newsToShow[0].scrollIntoView({ behavior: 'smooth', block: 'center' });
        }, newsToShow.length * 150 + 200);
    }
}
</script>

<?php get_footer(); ?>