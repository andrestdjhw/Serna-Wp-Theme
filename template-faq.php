<?php
/**
 * Template Name: Preguntas Frecuentes Template
 * Template Post Type: page
 */

get_header(); ?>

<style>
/* ============================================
   TOKENS — MISMOS DEL NAVBAR Y HOMEPAGE
   ============================================ */
:root {
    --navy:      #263b80;
    --blue:      #264da0;
    --gold:      #ad8411;
    --gold-dark: #ad8411;
    --black:     #231f20;
    --bone:      #F8F7F3;
    --text:      #374151;
    --text-soft: #6B7280;
    --border:    rgba(38, 61, 128, 0.08);
    --shadow:    0 8px 48px rgba(38, 61, 128, 0.13), 0 2px 8px rgba(0,0,0,0.05);
    --logo-mark: url('/wp-content/uploads/2026/02/Blanco-SERNA-e1770905443177.png');
}

html { scroll-behavior: smooth; }
*, *::before, *::after { box-sizing: border-box; }

.faq-page {
    font-family: Georgia, 'Times New Roman', serif;
    background: var(--bone);
    color: var(--text);
}

/* ============================================
   UTILIDADES
   ============================================ */
.container {
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 24px;
}

.gold-rule {
    display: inline-block;
    width: 48px;
    height: 2px;
    background: var(--gold);
    border-radius: 2px;
    vertical-align: middle;
}

.section-label {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--navy);
    display: flex;
    align-items: center;
    gap: 10px;
    justify-content: center;
    margin-bottom: 14px;
}

.section-title {
    font-size: clamp(26px, 4vw, 38px);
    font-weight: 700;
    color: var(--navy);
    line-height: 1.18;
    margin: 0 0 16px;
    text-align: center;
}

.gold-divider {
    width: 48px;
    height: 2px;
    background: var(--gold);
    border-radius: 2px;
    margin: 0 auto 32px;
}

/* ============================================
   HERO
   ============================================ */
.faq-hero {
    position: relative;
    background: linear-gradient(135deg, #1d2e68 0%, var(--navy) 40%, var(--blue) 100%);
    overflow: hidden;
    padding: 96px 0 0;
}

.faq-hero::after {
    content: '';
    display: block;
    height: 2px;
    background: linear-gradient(90deg, transparent, var(--gold) 30%, var(--gold-dark) 70%, transparent);
    opacity: 0.75;
}

/* Patrón de estrellas */
.faq-hero-stars {
    position: absolute;
    inset: 0;
    z-index: 1;
    pointer-events: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='240' height='160' viewBox='0 0 240 160'%3E%3Cpath fill='%2387b4e8' fill-opacity='0.18' d='M28,11 L29.65,20.35 L39,22 L29.65,23.65 L28,33 L26.35,23.65 L17,22 L26.35,20.35Z M90,7 L90.75,11.25 L95,12 L90.75,12.75 L90,17 L89.25,12.75 L85,12 L89.25,11.25Z M160,16 L161.35,23.65 L169,25 L161.35,26.35 L160,34 L158.65,26.35 L151,25 L158.65,23.65Z M220,9 L220.9,14.1 L226,15 L220.9,15.9 L220,21 L219.1,15.9 L214,15 L219.1,14.1Z M55,48 L56.05,53.95 L62,55 L56.05,56.05 L55,62 L53.95,56.05 L48,55 L53.95,53.95Z M130,36 L131.8,46.2 L142,48 L131.8,49.8 L130,60 L128.2,49.8 L118,48 L128.2,46.2Z M195,56 L195.6,59.4 L199,60 L195.6,60.6 L195,64 L194.4,60.6 L191,60 L194.4,59.4Z M15,82 L16.2,88.8 L23,90 L16.2,91.2 L15,98 L13.8,91.2 L7,90 L13.8,88.8Z M85,82 L85.45,84.55 L88,85 L85.45,85.45 L85,88 L84.55,85.45 L82,85 L84.55,84.55Z M150,85 L151.5,93.5 L160,95 L151.5,96.5 L150,105 L148.5,96.5 L140,95 L148.5,93.5Z M230,81 L231.05,86.95 L237,88 L231.05,89.05 L230,95 L228.95,89.05 L223,88 L228.95,86.95Z M40,117 L41.95,128.05 L53,130 L41.95,131.95 L40,143 L38.05,131.95 L27,130 L38.05,128.05Z M110,120 L110.75,124.25 L115,125 L110.75,125.75 L110,130 L109.25,125.75 L105,125 L109.25,124.25Z M175,122 L176.2,128.8 L183,130 L176.2,131.2 L175,138 L173.8,131.2 L167,130 L173.8,128.8Z M70,149 L70.9,154.1 L76,155 L70.9,155.9 L70,161 L69.1,155.9 L64,155 L69.1,154.1Z M200,139 L201.65,148.35 L211,150 L201.65,151.65 L200,161 L198.35,151.65 L189,150 L198.35,148.35Z M135,155 L135.45,157.55 L138,158 L135.45,158.45 L135,161 L134.55,158.45 L132,158 L134.55,157.55Z'/%3E%3C/svg%3E");
    background-size: 240px 160px;
    background-repeat: repeat;
}

/* Marcas de agua */
.faq-hero-watermark {
    position: absolute;
    inset: 0;
    pointer-events: none;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 4%;
    z-index: 2;
}
.faq-hero-watermark img {
    width: min(260px, 28%);
    opacity: 0.06;
    filter: brightness(20) grayscale(1);
    object-fit: contain;
    user-select: none;
}

/* Orbes */
.faq-hero-orbs {
    position: absolute;
    inset: 0;
    z-index: 2;
    overflow: hidden;
    pointer-events: none;
}
.faq-hero-orbs span {
    position: absolute;
    border-radius: 50%;
    filter: blur(80px);
    opacity: 0.18;
    animation: orb-pulse 6s ease-in-out infinite;
}
.faq-hero-orbs span:nth-child(1) { width: 340px; height: 340px; background: #87cede; top: -80px; left: -60px; animation-delay: 0s; }
.faq-hero-orbs span:nth-child(2) { width: 300px; height: 300px; background: #87cede; bottom: -60px; right: -40px; animation-delay: 3s; }
.faq-hero-orbs span:nth-child(3) { width: 260px; height: 260px; background: #7dbb5c; bottom: -40px; left: 25%; animation-delay: 5s; }

@keyframes orb-pulse {
    0%, 100% { opacity: 0.18; transform: scale(1); }
    50%       { opacity: 0.28; transform: scale(1.08); }
}

.faq-hero-inner {
    position: relative;
    z-index: 10;
    text-align: center;
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255,255,255,0.10);
    border: 1px solid rgba(255,255,255,0.20);
    border-radius: 99px;
    padding: 6px 16px 6px 10px;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.85);
    margin-bottom: 28px;
}
.hero-badge-dot {
    width: 6px; height: 6px;
    background: var(--gold);
    border-radius: 50%;
    box-shadow: 0 0 6px var(--gold);
}

.faq-hero-title {
    font-size: clamp(30px, 5vw, 58px);
    font-weight: 800;
    line-height: 1.08;
    margin: 0 0 20px;
    background: linear-gradient(180deg, #ffffff 20%, var(--gold) 60%, #fff 100%);
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

.faq-hero-sub {
    font-size: clamp(16px, 2vw, 20px);
    font-weight: 400;
    color: rgba(255,255,255,0.80);
    max-width: 580px;
    margin: 0 auto 64px;
    line-height: 1.6;
}

.faq-hero-wave {
    position: relative;
    z-index: 10;
    line-height: 0;
    margin-top: -2px;
}
.faq-hero-wave svg { display: block; width: 100%; }

/* ============================================
   CONTENIDO PRINCIPAL
   ============================================ */
.faq-main {
    padding: 80px 0 96px;
    position: relative;
}
.faq-main::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: var(--logo-mark);
    background-repeat: no-repeat;
    background-size: min(440px, 55%);
    background-position: center;
    opacity: 0.03;
    filter: grayscale(1) brightness(0);
    pointer-events: none;
}

.faq-inner {
    max-width: 860px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
}

/* ============================================
   FILTROS DE CATEGORÍA
   ============================================ */
.faq-filters {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center;
    margin-bottom: 56px;
}

.faq-cat-btn {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 9px 20px;
    font-family: Georgia, 'Times New Roman', serif;
    font-size: 13px;
    font-weight: 600;
    border-radius: 8px;
    border: 1.5px solid var(--border);
    background: #ffffff;
    color: var(--navy);
    cursor: pointer;
    transition: background 0.2s, color 0.2s, border-color 0.2s, transform 0.18s, box-shadow 0.2s;
    box-shadow: 0 2px 8px rgba(38,61,128,0.07);
    position: relative;
}
/* Línea dorada inferior al hacer hover — eco del nav-btn */
.faq-cat-btn::after {
    content: '';
    position: absolute;
    bottom: 3px;
    left: 12px; right: 12px;
    height: 1.5px;
    background: var(--gold);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.25s ease;
    border-radius: 2px;
}
.faq-cat-btn:hover,
.faq-cat-btn.active {
    background: var(--navy);
    color: #ffffff;
    border-color: var(--navy);
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(38,61,128,0.18);
}
.faq-cat-btn:hover::after,
.faq-cat-btn.active::after {
    transform: scaleX(1);
    background: var(--gold);
}

/* ============================================
   ACORDEÓN FAQ
   ============================================ */
.faq-header-section {
    text-align: center;
    margin-bottom: 40px;
}

.faq-list {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.faq-item {
    background: #ffffff;
    border: 1px solid var(--border);
    border-radius: 12px;
    overflow: hidden;
    box-shadow: var(--shadow);
    transition: box-shadow 0.25s ease, border-color 0.25s ease;
}
.faq-item:hover {
    box-shadow: 0 12px 40px rgba(38, 61, 128, 0.14);
}
.faq-item.active {
    border-color: rgba(38, 61, 128, 0.2);
    border-left: 3px solid var(--gold);
}

.faq-question {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 16px;
    padding: 22px 26px;
    background: transparent;
    border: none;
    cursor: pointer;
    text-align: left;
    font-family: Georgia, 'Times New Roman', serif;
    transition: background 0.18s;
}
.faq-question:hover { background: rgba(38, 61, 128, 0.03); }

.faq-question h3 {
    font-size: 16px;
    font-weight: 700;
    color: var(--navy);
    margin: 0;
    line-height: 1.4;
}

.faq-chevron {
    width: 22px; height: 22px;
    flex-shrink: 0;
    color: var(--navy);
    opacity: 0.6;
    transition: transform 0.3s ease, opacity 0.2s;
}
.faq-item.active .faq-chevron {
    transform: rotate(180deg);
    opacity: 1;
    color: var(--gold-dark);
}

.faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.38s cubic-bezier(0.4, 0, 0.2, 1);
}
.faq-answer.open { max-height: 1200px; }

.faq-answer-inner {
    padding: 0 26px 26px;
    border-top: 1px solid var(--border);
}

/* Estilos de contenido de respuestas */
.faq-answer-inner p {
    font-size: 15px;
    color: var(--text-soft);
    line-height: 1.75;
    margin: 14px 0 0;
}
.faq-answer-inner strong { color: var(--text); font-weight: 700; }

.faq-answer-inner ol,
.faq-answer-inner ul {
    margin: 12px 0 0 20px;
    display: flex;
    flex-direction: column;
    gap: 8px;
}
.faq-answer-inner li {
    font-size: 14.5px;
    color: var(--text-soft);
    line-height: 1.65;
}
.faq-answer-inner ol { list-style: decimal; }
.faq-answer-inner ul { list-style: disc; }

.faq-answer-inner a {
    color: var(--blue);
    font-weight: 600;
    text-decoration: none;
    transition: color 0.2s;
}
.faq-answer-inner a:hover { color: var(--gold-dark); }

.faq-answer-inner .faq-note {
    font-size: 13px;
    color: #9CA3AF;
    font-style: italic;
    margin-top: 12px;
    padding-left: 12px;
    border-left: 2px solid var(--border);
}

/* ============================================
   CTA FINAL
   ============================================ */
.faq-cta {
    margin-top: 64px;
    background: linear-gradient(135deg, var(--navy) 0%, var(--blue) 100%);
    border-radius: 16px;
    padding: 56px 40px;
    text-align: center;
    position: relative;
    overflow: hidden;
}
/* Estrellas de fondo en el CTA */
.faq-cta::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='240' height='160' viewBox='0 0 240 160'%3E%3Cpath fill='%2387b4e8' fill-opacity='0.12' d='M28,11 L29.65,20.35 L39,22 L29.65,23.65 L28,33 L26.35,23.65 L17,22 L26.35,20.35Z M90,7 L90.75,11.25 L95,12 L90.75,12.75 L90,17 L89.25,12.75 L85,12 L89.25,11.25Z M160,16 L161.35,23.65 L169,25 L161.35,26.35 L160,34 L158.65,26.35 L151,25 L158.65,23.65Z M220,9 L220.9,14.1 L226,15 L220.9,15.9 L220,21 L219.1,15.9 L214,15 L219.1,14.1Z M55,48 L56.05,53.95 L62,55 L56.05,56.05 L55,62 L53.95,56.05 L48,55 L53.95,53.95Z M130,36 L131.8,46.2 L142,48 L131.8,49.8 L130,60 L128.2,49.8 L118,48 L128.2,46.2Z M195,56 L195.6,59.4 L199,60 L195.6,60.6 L195,64 L194.4,60.6 L191,60 L194.4,59.4Z M15,82 L16.2,88.8 L23,90 L16.2,91.2 L15,98 L13.8,91.2 L7,90 L13.8,88.8Z M150,85 L151.5,93.5 L160,95 L151.5,96.5 L150,105 L148.5,96.5 L140,95 L148.5,93.5Z'/%3E%3C/svg%3E");
    background-size: 240px 160px;
    pointer-events: none;
}

.faq-cta-inner { position: relative; z-index: 1; }

.faq-cta h2 {
    font-size: clamp(22px, 3.5vw, 32px);
    font-weight: 800;
    color: #ffffff;
    margin: 0 0 14px;
}

.faq-cta p {
    font-size: 17px;
    color: rgba(255,255,255,0.75);
    max-width: 480px;
    margin: 0 auto 32px;
    line-height: 1.6;
}

.btn-cta-primary {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 13px 32px;
    background: #ffffff;
    color: var(--navy);
    font-family: Georgia, 'Times New Roman', serif;
    font-weight: 700;
    font-size: 15px;
    border-radius: 8px;
    text-decoration: none;
    transition: background 0.22s, color 0.22s, transform 0.18s, box-shadow 0.22s;
    box-shadow: 0 4px 16px rgba(0,0,0,0.15);
}
.btn-cta-primary:hover {
    background: var(--gold);
    color: #FFFFFF;
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(227,162,32,0.4);
}

/* ============================================
   RESPONSIVE
   ============================================ */
@media (max-width: 640px) {
    .faq-hero { padding: 72px 0 0; }
    .faq-main { padding: 56px 0 72px; }
    .faq-cta { padding: 40px 24px; }
    .faq-question { padding: 18px 20px; }
    .faq-answer-inner { padding: 0 20px 20px; }
}
</style>

<div class="faq-page">

    <!-- =============================================
         HERO
    ============================================= -->
    <section class="faq-hero">

        <div class="faq-hero-stars" aria-hidden="true"></div>

        <div class="faq-hero-watermark" aria-hidden="true">
            <img src="/wp-content/uploads/2026/02/cropped-Logo-Gobierno.png" alt="">
            <img src="/wp-content/uploads/2026/02/cropped-Logo-Gobierno.png" alt="">
        </div>

        <div class="faq-hero-orbs" aria-hidden="true">
            <span></span><span></span><span></span>
        </div>

        <div class="container faq-hero-inner">
            <div class="hero-badge">
                <span class="hero-badge-dot"></span>
                Atención Ciudadana
            </div>
            <h1 class="faq-hero-title">Preguntas Frecuentes</h1>
            <p class="faq-hero-sub">Encuentra respuestas a las preguntas más comunes sobre nuestros servicios y trámites.</p>
        </div>

        <div class="faq-hero-wave">
            <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <path d="M0 0 C360 80 1080 80 1440 0 L1440 80 L0 80 Z" fill="#F8F7F3"/>
            </svg>
        </div>
    </section>

    <!-- =============================================
         CONTENIDO
    ============================================= -->
    <section class="faq-main">
        <div class="container">
            <div class="faq-inner">

                <!-- Filtros -->
                <div class="faq-filters">
                    <button class="faq-cat-btn active" data-category="all">Todas</button>
                    <button class="faq-cat-btn" data-category="licencias">Licencias Ambientales</button>
                    <button class="faq-cat-btn" data-category="tramites">Trámites</button>
                    <button class="faq-cat-btn" data-category="servicios">Servicios</button>
                </div>

                <!-- Encabezado sección -->
                <div class="faq-header-section">
                    <p class="section-label">
                        <span class="gold-rule"></span>
                        Soporte
                        <span class="gold-rule"></span>
                    </p>
                    <h2 class="section-title">Preguntas y Respuestas</h2>
                    <div class="gold-divider"></div>
                </div>

                <!-- Acordeón -->
                <div class="faq-list" id="faq-accordion">

                    <!-- 1 -->
                    <div class="faq-item" data-category="licencias">
                        <button class="faq-question">
                            <h3>¿Qué es una licencia ambiental?</h3>
                            <svg class="faq-chevron" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="faq-answer">
                            <div class="faq-answer-inner">
                                <p>Una licencia ambiental es un documento otorgado por la autoridad competente que autoriza a una entidad o individuo para llevar a cabo actividades que puedan tener impacto en el medio ambiente. Su objetivo principal es asegurar que dichas actividades se realicen de manera sostenible y respetando las leyes y regulaciones ambientales.</p>
                            </div>
                        </div>
                    </div>

                    <!-- 2 -->
                    <div class="faq-item" data-category="licencias">
                        <button class="faq-question">
                            <h3>¿Quién necesita una licencia ambiental?</h3>
                            <svg class="faq-chevron" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="faq-answer">
                            <div class="faq-answer-inner">
                                <p><strong>Todo proyecto o actividad que cause un impacto ambiental, incluyendo:</strong></p>
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

                    <!-- 3 -->
                    <div class="faq-item" data-category="licencias">
                        <button class="faq-question">
                            <h3>¿Cuál es el proceso para obtener una licencia ambiental?</h3>
                            <svg class="faq-chevron" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="faq-answer">
                            <div class="faq-answer-inner">
                                <p>El proceso consta de los siguientes pasos:</p>
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

                    <!-- 4 -->
                    <div class="faq-item" data-category="tramites">
                        <button class="faq-question">
                            <h3>¿Qué documentos necesito para iniciar un trámite ambiental?</h3>
                            <svg class="faq-chevron" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="faq-answer">
                            <div class="faq-answer-inner">
                                <p>Los documentos básicos requeridos para la mayoría de trámites ambientales incluyen:</p>
                                <ul>
                                    <li>Reporte oficial del sistema de Licenciamiento Ambiental.</li>
                                    <li>Escrito de solicitud de Licencia Ambiental.</li>
                                    <li>Carta Poder o Poder General para Pleitos, Autenticado.</li>
                                    <li>Medidas de control ambiental, emitidas por el Sistema de Licenciamiento Ambiental (SLAS).</li>
                                    <li>Fotocopia del RTN de la empresa, Autenticada.</li>
                                    <li>Declaración jurada del representante legal de la sociedad mercantil.</li>
                                    <li>Declaración jurada del prestador de servicios ambientales debidamente autenticada.</li>
                                    <li>Título de propiedad debidamente timbrado y registrado / Contrato de arrendamiento o cualquier otro título traslaticio de dominio.</li>
                                    <li>Escritura de constitución de sociedad, comerciante individual o Persona Jurídica.</li>
                                    <li>Informe de validación del prestador de servicios ambientales.</li>
                                    <li>Recibo original de pago por inspección a favor de fondo rotatorio DECA — Cuenta #02001-000131-0, BANADESA.</li>
                                    <li>Garantía bancaria original, vigente por un año.</li>
                                    <li>Publicación del aviso de presentación de la solicitud en un octavo de página en un diario de mayor circulación.</li>
                                    <li>Herramienta técnica de acuerdo a la categoría del proyecto: Memoria Técnica, Plan de Gestión Ambiental o Estudio de Impacto Ambiental.</li>
                                    <li>Recibo T.G.R. por el monto de inversión de Licenciamiento Ambiental.</li>
                                </ul>
                                <p class="faq-note">* Las revisiones se harán con el expediente en forma física y en la plataforma SLAS-2. La documentación deberá estar completa para ser revisada por Secretaría General.</p>
                                <p class="faq-note">* El recibo T.G.R. deberá ser cancelado en un periodo no mayor a 10 días a partir de estar completa la verificación física y digital de la documentación.</p>
                                <p class="faq-note">* El plazo máximo para la presentación del aviso del periódico son 5 días a partir de su publicación.</p>
                            </div>
                        </div>
                    </div>

                    <!-- 5 -->
                    <div class="faq-item" data-category="servicios">
                        <button class="faq-question">
                            <h3>¿Cómo puedo verificar el estado de mi trámite?</h3>
                            <svg class="faq-chevron" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="faq-answer">
                            <div class="faq-answer-inner">
                                <p>Puede verificar el estado de su trámite de las siguientes maneras:</p>
                                <ol>
                                    <li><strong>En línea:</strong> A través del sistema SLAS ingresando con su número de expediente.</li>
                                    <li><strong>Por teléfono:</strong> Llamando al (+504) 2232-9200 en horario de atención.</li>
                                    <li><strong>Presencialmente:</strong> En nuestras oficinas — Edificio Santa Fe, Colonia Castaño Sur, Tegucigalpa.</li>
                                    <li><strong>Por correo electrónico:</strong> Enviando un mensaje a <a href="mailto:info@serna.gob.hn">info@serna.gob.hn</a> con su número de expediente.</li>
                                </ol>
                                <p>Para consultas en línea, visite: <a href="https://serna.gob.hn/slas" target="_blank" rel="noopener noreferrer">serna.gob.hn/slas</a></p>
                            </div>
                        </div>
                    </div>

                    <!-- 6 -->
                    <div class="faq-item" data-category="tramites">
                        <button class="faq-question">
                            <h3>¿Cuáles son los horarios de atención al público?</h3>
                            <svg class="faq-chevron" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="faq-answer">
                            <div class="faq-answer-inner">
                                <p>Nuestros horarios de atención al público son:</p>
                                <ul>
                                    <li><strong>Oficinas Centrales (Tegucigalpa):</strong> Lunes a Viernes de 7:30 AM a 3:30 PM</li>
                                    <li><strong>Atención telefónica:</strong> Lunes a Viernes de 7:30 AM a 3:30 PM</li>
                                </ul>
                                <p class="faq-note">* Los horarios pueden variar en días feriados oficiales. Consulte nuestro calendario de atención en la sección de noticias.</p>
                            </div>
                        </div>
                    </div>

                    <!-- 7 -->
                    <div class="faq-item" data-category="servicios">
                        <button class="faq-question">
                            <h3>¿Cómo puedo presentar una denuncia ambiental?</h3>
                            <svg class="faq-chevron" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="faq-answer">
                            <div class="faq-answer-inner">
                                <p>Para presentar una denuncia ambiental puede hacerlo de las siguientes formas:</p>
                                <ol>
                                    <li><strong>Formulario en línea:</strong> Complete el formulario disponible en nuestro portal de denuncias ambientales.</li>
                                    <li><strong>Presencialmente:</strong> En cualquiera de nuestras oficinas centrales o regionales.</li>
                                    <li><strong>Por teléfono:</strong> Llamando a la línea de denuncias: (+504) 2232-9215</li>
                                    <li><strong>Por correo electrónico:</strong> Enviando los detalles a <a href="mailto:denuncias@serna.gob.hn">denuncias@serna.gob.hn</a></li>
                                </ol>
                                <p>Toda denuncia debe incluir:</p>
                                <ul>
                                    <li>Descripción detallada del problema</li>
                                    <li>Ubicación exacta (coordenadas GPS si es posible)</li>
                                    <li>Fotos o videos como evidencia (opcional pero recomendado)</li>
                                    <li>Datos de contacto del denunciante (se mantendrán confidenciales)</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div><!-- /.faq-list -->

                <!-- CTA final -->
                <div class="faq-cta">
                    <div class="faq-cta-inner">
                        <h2>¿No encontraste lo que buscabas?</h2>
                        <p>Nuestro equipo está listo para ayudarte con cualquier pregunta adicional que puedas tener.</p>
                        <a href="/contacto" class="btn-cta-primary">
                            Contáctenos
                            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    /* ── Acordeón ── */
    document.querySelectorAll('.faq-question').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var item   = btn.closest('.faq-item');
            var answer = item.querySelector('.faq-answer');
            var isOpen = item.classList.contains('active');

            // Cierra todos
            document.querySelectorAll('.faq-item').forEach(function (i) {
                i.classList.remove('active');
                i.querySelector('.faq-answer').classList.remove('open');
            });

            // Abre el actual si estaba cerrado
            if (!isOpen) {
                item.classList.add('active');
                answer.classList.add('open');
            }
        });
    });

    /* ── Filtros de categoría ── */
    var catBtns  = document.querySelectorAll('.faq-cat-btn');
    var faqItems = document.querySelectorAll('.faq-item');

    catBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            var cat = btn.dataset.category;

            catBtns.forEach(function (b) { b.classList.remove('active'); });
            btn.classList.add('active');

            faqItems.forEach(function (item) {
                item.style.display = (cat === 'all' || item.dataset.category === cat) ? '' : 'none';
                // Cierra los que se ocultan
                if (item.style.display === 'none') {
                    item.classList.remove('active');
                    item.querySelector('.faq-answer').classList.remove('open');
                }
            });
        });
    });

});
</script>

<?php get_footer(); ?>