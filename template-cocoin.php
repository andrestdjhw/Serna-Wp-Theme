<?php
/**
 * Template Name: Cocoin Template
 * Template Post Type: page
 */

get_header(); ?>

<div class="cocoin-page">
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
        <div class="cocoin-hero-dots" aria-hidden="true"></div>
        
        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="cocoin-hero-title">
                    Comité de Control Interno
                </h1>
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

    <!-- Featured News Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-[#00903b] mb-6">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#263b80] to-[#264da0]">(COCOIN)</span>
                </h2>
                <div class="h-1 w-24 bg-[#E0AE19] mx-auto mb-2 rounded-full"></div>
            </div>
            
            <!-- Featured News Card -->
            <div class="bg-gradient-to-r from-[#263b80] to-[#264da0] rounded-2xl overflow-hidden shadow-xl">
                <div class="lg:flex">
                    <div class="lg:w-1/2">
                        <img src="/wp-content/uploads/2025/08/BOLETIN-TRIMESTRAL.png" alt="Noticia Destacada" class="w-full h-64 lg:h-full object-cover">
                    </div>
                    <div class="lg:w-1/2 p-8 lg:p-12 text-white">
                        <div class="flex items-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl lg:text-3xl font-bold mb-4">
                            Boletín Trimestral
                        </h3>
                        <p class="text-lg leading-relaxed mb-6 opacity-90">
                            Manténgase al tanto de las ultimas actualizaciones.
                        </p>
                        <a href="/wp-content/uploads/2025/08/Newsletter-Boletin-Informativo-Naturaleza-Ecologia-y-Sostenibilidad-Minimalista-Blanco-y-Verde-1.pdf" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-6 py-3 bg-white text-[#231f20] font-semibold rounded-full hover:bg-[#E0AE19] hover:text-[#231f20] transition-colors duration-300">
                            Descargar Recurso
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
@import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap');

/* Fuente base coherente con el resto del sitio */
.cocoin-page {
    font-family: 'Outfit', sans-serif;
}

/* Título hero — mismo gradiente animado que el resto de templates */
.cocoin-hero-title {
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

/* ── Patrón de puntos — igual que el resto de templates ── */
.cocoin-hero-dots {
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

@keyframes gradient {
    0%   { background-position: 0% 50%; }
    50%  { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

.animate-gradient {
    background-size: 200% 200%;
    animation: gradient 5s ease infinite;
}

/* News Card Styles */
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
.news-card:hover .news-image { transform: scale(1.05); }
.news-image[src] { animation: none; background: none; }

.news-date-badge {
    position: absolute;
    top: 1rem; right: 1rem;
    background: linear-gradient(135deg, #00903b, #7dbb5c);
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
    background: linear-gradient(135deg, #00903b, #7dbb5c);
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
.news-card:hover .news-title { color: #00903b; }

.news-excerpt {
    font-family: 'DM Sans', sans-serif;
    color: #6b7280;
    line-height: 1.6;
    margin-bottom: 1rem;
    font-size: 0.95rem;
}

.news-read-more {
    display: inline-flex;
    align-items: center;
    color: #00903b;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    font-size: 0.9rem;
}
.news-read-more:hover { color: #7dbb5c; transform: translateX(4px); }
.news-read-more svg  { transition: transform 0.3s ease; }
.news-read-more:hover svg { transform: translateX(2px); }

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

<?php get_footer(); ?>