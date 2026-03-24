<?php
/**
 * Template Name: Perfil Template
 * Template Post Type: page
 */

get_header(); ?>

<style>
/* Georgia es una fuente del sistema, no requiere importación */

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

.perfil-page {
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
    margin-bottom: 14px;
}
.section-label.centered { justify-content: center; }

.section-title {
    font-size: clamp(26px, 4vw, 38px);
    font-weight: 700;
    color: var(--navy);
    line-height: 1.18;
    margin: 0 0 16px;
}

.gold-divider {
    width: 48px;
    height: 2px;
    background: var(--gold);
    border-radius: 2px;
    margin: 0 0 28px;
}
.gold-divider.centered { margin: 0 auto 28px; }

/* Botones */
.btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 13px 28px;
    background: #ffffff;
    color: var(--navy);
    font-family: Georgia, 'Times New Roman', serif;
    font-weight: 700;
    font-size: 14px;
    border-radius: 8px;
    text-decoration: none;
    transition: background 0.22s, color 0.22s, transform 0.18s, box-shadow 0.22s;
    box-shadow: 0 4px 16px rgba(0,0,0,0.15);
}
.btn-primary:hover {
    background: var(--gold);
    color: #FFFFFF;
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(227,162,32,0.35);
}

/* ============================================
   HERO
   ============================================ */
.perfil-hero {
    position: relative;
    background: linear-gradient(135deg, #1d2e68 0%, var(--navy) 40%, var(--blue) 100%);
    overflow: hidden;
    padding: 96px 0 0;
}

.perfil-hero::after {
    content: '';
    display: block;
    height: 2px;
    background: linear-gradient(90deg, transparent, var(--gold) 30%, var(--gold-dark) 70%, transparent);
    opacity: 0.75;
}

/* Patrón de estrellas — igual que homepage */
.perfil-hero-stars {
    position: absolute;
    inset: 0;
    z-index: 1;
    pointer-events: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='240' height='160' viewBox='0 0 240 160'%3E%3Cpath fill='%2387b4e8' fill-opacity='0.18' d='M28,11 L29.65,20.35 L39,22 L29.65,23.65 L28,33 L26.35,23.65 L17,22 L26.35,20.35Z M90,7 L90.75,11.25 L95,12 L90.75,12.75 L90,17 L89.25,12.75 L85,12 L89.25,11.25Z M160,16 L161.35,23.65 L169,25 L161.35,26.35 L160,34 L158.65,26.35 L151,25 L158.65,23.65Z M220,9 L220.9,14.1 L226,15 L220.9,15.9 L220,21 L219.1,15.9 L214,15 L219.1,14.1Z M55,48 L56.05,53.95 L62,55 L56.05,56.05 L55,62 L53.95,56.05 L48,55 L53.95,53.95Z M130,36 L131.8,46.2 L142,48 L131.8,49.8 L130,60 L128.2,49.8 L118,48 L128.2,46.2Z M195,56 L195.6,59.4 L199,60 L195.6,60.6 L195,64 L194.4,60.6 L191,60 L194.4,59.4Z M15,82 L16.2,88.8 L23,90 L16.2,91.2 L15,98 L13.8,91.2 L7,90 L13.8,88.8Z M85,82 L85.45,84.55 L88,85 L85.45,85.45 L85,88 L84.55,85.45 L82,85 L84.55,84.55Z M150,85 L151.5,93.5 L160,95 L151.5,96.5 L150,105 L148.5,96.5 L140,95 L148.5,93.5Z M230,81 L231.05,86.95 L237,88 L231.05,89.05 L230,95 L228.95,89.05 L223,88 L228.95,86.95Z M40,117 L41.95,128.05 L53,130 L41.95,131.95 L40,143 L38.05,131.95 L27,130 L38.05,128.05Z M110,120 L110.75,124.25 L115,125 L110.75,125.75 L110,130 L109.25,125.75 L105,125 L109.25,124.25Z M175,122 L176.2,128.8 L183,130 L176.2,131.2 L175,138 L173.8,131.2 L167,130 L173.8,128.8Z M70,149 L70.9,154.1 L76,155 L70.9,155.9 L70,161 L69.1,155.9 L64,155 L69.1,154.1Z M200,139 L201.65,148.35 L211,150 L201.65,151.65 L200,161 L198.35,151.65 L189,150 L198.35,148.35Z M135,155 L135.45,157.55 L138,158 L135.45,158.45 L135,161 L134.55,158.45 L132,158 L134.55,157.55Z'/%3E%3C/svg%3E");
    background-size: 240px 160px;
    background-repeat: repeat;
}

/* Marcas de agua */
.perfil-hero-watermark {
    position: absolute;
    inset: 0;
    pointer-events: none;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 4%;
    z-index: 2;
}
.perfil-hero-watermark img {
    width: min(260px, 28%);
    opacity: 0.06;
    filter: brightness(20) grayscale(1);
    object-fit: contain;
    user-select: none;
}

/* Orbes */
.perfil-hero-orbs {
    position: absolute;
    inset: 0;
    z-index: 2;
    overflow: hidden;
    pointer-events: none;
}
.perfil-hero-orbs span {
    position: absolute;
    border-radius: 50%;
    filter: blur(80px);
    opacity: 0.15;
    animation: orb-pulse 6s ease-in-out infinite;
}
.perfil-hero-orbs span:nth-child(1) { width: 340px; height: 340px; background: var(--gold-dark); top: -80px; left: -60px; animation-delay: 0s; }
.perfil-hero-orbs span:nth-child(2) { width: 300px; height: 300px; background: var(--gold-dark); bottom: -60px; right: -40px; animation-delay: 3s; }
.perfil-hero-orbs span:nth-child(3) { width: 260px; height: 260px; background: #ffffff; bottom: -40px; left: 25%; animation-delay: 5s; }

@keyframes orb-pulse {
    0%, 100% { opacity: 0.15; transform: scale(1); }
    50%       { opacity: 0.22; transform: scale(1.08); }
}

.perfil-hero-inner {
    position: relative;
    z-index: 10;
    text-align: center;
}

/* Badge */
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
    flex-shrink: 0;
    box-shadow: 0 0 6px var(--gold);
}

.perfil-hero-title {
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

.perfil-hero-sub {
    font-style: italic;
    font-size: clamp(16px, 2vw, 20px);
    font-weight: 400;
    color: rgba(255,255,255,0.80);
    max-width: 600px;
    margin: 0 auto 40px;
    line-height: 1.6;
}

.perfil-hero-actions {
    display: flex;
    justify-content: center;
    margin-bottom: 64px;
}

/* Ola */
.perfil-hero-wave {
    position: relative;
    z-index: 10;
    line-height: 0;
    margin-top: -2px;
}
.perfil-hero-wave svg { display: block; width: 100%; }

/* ============================================
   HISTORIA
   ============================================ */
.historia {
    padding: 96px 0;
    background: #ffffff;
    position: relative;
}
.historia::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: var(--logo-mark);
    background-repeat: no-repeat;
    background-size: min(420px, 55%);
    background-position: center right 8%;
    opacity: 0.035;
    filter: grayscale(1) brightness(0);
    pointer-events: none;
}

.historia-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
    position: relative;
    z-index: 1;
}

@media (max-width: 768px) {
    .historia-grid { grid-template-columns: 1fr; gap: 40px; }
}

.historia-body {
    font-size: 15.5px;
    color: var(--text-soft);
    line-height: 1.8;
}
.historia-body p + p { margin-top: 16px; }

.historia-img-frame {
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid var(--border);
    box-shadow: var(--shadow);
    transform: rotate(1deg);
    transition: transform 0.35s ease, box-shadow 0.35s ease;
}
.historia-img-frame:hover {
    transform: rotate(0deg);
    box-shadow: 0 16px 56px rgba(38, 61, 128, 0.2);
}
.historia-img-frame img {
    width: 100%;
    height: auto;
    display: block;
    opacity: 0.92;
    transition: opacity 0.3s;
}
.historia-img-frame:hover img { opacity: 1; }

/* ============================================
   PILARES (VISIÓN Y MISIÓN)
   ============================================ */
.pilares {
    padding: 96px 0;
    background: var(--bone);
    position: relative;
}
.pilares::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: var(--logo-mark);
    background-repeat: no-repeat;
    background-size: min(440px, 60%);
    background-position: center;
    opacity: 0.035;
    filter: grayscale(1) brightness(0);
    pointer-events: none;
}

.pilares-header {
    text-align: center;
    margin-bottom: 56px;
}

.pilares-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 28px;
    position: relative;
    z-index: 1;
}

/* Cards — mismo lenguaje que el homepage */
.pilar-card {
    background: #ffffff;
    border: 1px solid var(--border);
    border-left: 3px solid var(--blue);
    border-radius: 12px;
    padding: 36px 32px;
    box-shadow: var(--shadow);
    transition: transform 0.25s ease, box-shadow 0.25s ease, border-left-color 0.25s;
}
.pilar-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 16px 52px rgba(38, 61, 128, 0.16);
    border-left-color: var(--gold);
}

.pilar-icon-wrap {
    width: 56px; height: 56px;
    background: linear-gradient(135deg, var(--navy), var(--blue));
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    flex-shrink: 0;
}
.pilar-icon-wrap svg { width: 28px; height: 28px; color: white; }

.pilar-title {
    font-size: 22px;
    font-weight: 700;
    color: var(--navy);
    margin: 0 0 10px;
    padding-bottom: 10px;
    border-bottom: 2px solid var(--gold);
    display: inline-block;
}

.pilar-text {
    font-size: 15px;
    color: var(--text-soft);
    line-height: 1.75;
    margin: 12px 0 0;
}

/* ============================================
   VALORES
   ============================================ */
.valores {
    padding: 96px 0;
    background: linear-gradient(135deg, var(--navy) 0%, var(--blue) 100%);
    position: relative;
    overflow: hidden;
}

/* Estrellas de fondo — mismo patrón que el hero */
.valores::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='240' height='160' viewBox='0 0 240 160'%3E%3Cpath fill='%2387b4e8' fill-opacity='0.12' d='M28,11 L29.65,20.35 L39,22 L29.65,23.65 L28,33 L26.35,23.65 L17,22 L26.35,20.35Z M90,7 L90.75,11.25 L95,12 L90.75,12.75 L90,17 L89.25,12.75 L85,12 L89.25,11.25Z M160,16 L161.35,23.65 L169,25 L161.35,26.35 L160,34 L158.65,26.35 L151,25 L158.65,23.65Z M220,9 L220.9,14.1 L226,15 L220.9,15.9 L220,21 L219.1,15.9 L214,15 L219.1,14.1Z M55,48 L56.05,53.95 L62,55 L56.05,56.05 L55,62 L53.95,56.05 L48,55 L53.95,53.95Z M130,36 L131.8,46.2 L142,48 L131.8,49.8 L130,60 L128.2,49.8 L118,48 L128.2,46.2Z M195,56 L195.6,59.4 L199,60 L195.6,60.6 L195,64 L194.4,60.6 L191,60 L194.4,59.4Z M15,82 L16.2,88.8 L23,90 L16.2,91.2 L15,98 L13.8,91.2 L7,90 L13.8,88.8Z M85,82 L85.45,84.55 L88,85 L85.45,85.45 L85,88 L84.55,85.45 L82,85 L84.55,84.55Z M150,85 L151.5,93.5 L160,95 L151.5,96.5 L150,105 L148.5,96.5 L140,95 L148.5,93.5Z M230,81 L231.05,86.95 L237,88 L231.05,89.05 L230,95 L228.95,89.05 L223,88 L228.95,86.95Z M40,117 L41.95,128.05 L53,130 L41.95,131.95 L40,143 L38.05,131.95 L27,130 L38.05,128.05Z M110,120 L110.75,124.25 L115,125 L110.75,125.75 L110,130 L109.25,125.75 L105,125 L109.25,124.25Z M175,122 L176.2,128.8 L183,130 L176.2,131.2 L175,138 L173.8,131.2 L167,130 L173.8,128.8Z M70,149 L70.9,154.1 L76,155 L70.9,155.9 L70,161 L69.1,155.9 L64,155 L69.1,154.1Z M200,139 L201.65,148.35 L211,150 L201.65,151.65 L200,161 L198.35,151.65 L189,150 L198.35,148.35Z M135,155 L135.45,157.55 L138,158 L135.45,158.45 L135,161 L134.55,158.45 L132,158 L134.55,157.55Z'/%3E%3C/svg%3E");
    background-size: 240px 160px;
    background-repeat: repeat;
    pointer-events: none;
}

.valores-header {
    text-align: center;
    margin-bottom: 56px;
    position: relative;
    z-index: 1;
}
.valores-header .section-title { color: #ffffff; }

.valores-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 20px;
    position: relative;
    z-index: 1;
}

@media (max-width: 1024px) { .valores-grid { grid-template-columns: repeat(3, 1fr); } }
@media (max-width: 640px)  { .valores-grid { grid-template-columns: repeat(2, 1fr); } }

.valor-card {
    background: #ffffff;
    border: 1px solid var(--border);
    border-radius: 12px;
    padding: 28px 20px;
    text-align: center;
    box-shadow: 0 4px 24px rgba(0,0,0,0.12);
    transition: transform 0.25s ease, box-shadow 0.25s ease;
    position: relative;
    overflow: hidden;
}
/* Línea dorada superior al hacer hover */
.valor-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 2px;
    background: var(--gold);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.3s ease;
}
.valor-card:hover::before { transform: scaleX(1); }
.valor-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 40px rgba(38, 61, 128, 0.25);
}

.valor-icon-wrap {
    width: 64px; height: 64px;
    background: linear-gradient(135deg, var(--navy), var(--blue));
    border-radius: 12px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 16px;
}
.valor-icon-wrap svg { width: 30px; height: 30px; color: white; }

.valor-title {
    font-size: 16px;
    font-weight: 700;
    color: var(--navy);
    margin: 0 0 10px;
    padding-bottom: 8px;
    border-bottom: 2px solid var(--gold);
    display: inline-block;
}

.valor-text {
    font-size: 13px;
    color: var(--text-soft);
    line-height: 1.65;
    margin: 10px 0 0;
}

/* ============================================
   RESPONSIVE
   ============================================ */
@media (max-width: 640px) {
    .perfil-hero { padding: 72px 0 0; }
    .historia, .pilares, .valores { padding: 64px 0; }
    .perfil-hero-title { font-size: 28px; }
}
</style>

<div class="perfil-page">

    <!-- =============================================
         HERO
    ============================================= -->
    <section class="perfil-hero">

        <!-- Patrón de estrellas -->
        <div class="perfil-hero-stars" aria-hidden="true"></div>

        <!-- Marcas de agua laterales -->
        <div class="perfil-hero-watermark" aria-hidden="true">
            <img src="/wp-content/uploads/2026/02/cropped-Logo-Gobierno.png" alt="">
            <img src="/wp-content/uploads/2026/02/cropped-Logo-Gobierno.png" alt="">
        </div>

        <!-- Orbes animados -->
        <div class="perfil-hero-orbs" aria-hidden="true">
            <span></span><span></span><span></span>
        </div>

        <!-- Contenido -->
        <div class="container perfil-hero-inner">
            <div class="hero-badge">
                <span class="hero-badge-dot"></span>
                Secretaría de Estado
            </div>

            <h1 class="perfil-hero-title">Perfil Institucional</h1>

            <p class="perfil-hero-sub">
                <cite>Al servicio del pueblo y por la recuperación de la soberanía de los recursos naturales.</cite>
            </p>

            <div class="perfil-hero-actions">
                <a href="#historia" class="btn-primary">
                    Conoce más
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Ola de transición -->
        <div class="perfil-hero-wave">
            <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <path d="M0 0 C360 80 1080 80 1440 0 L1440 80 L0 80 Z" fill="#ffffff"/>
            </svg>
        </div>
    </section>

    <!-- =============================================
         HISTORIA
    ============================================= -->
    <section id="historia" class="historia">
        <div class="container">
            <div class="historia-grid">

                <div>
                    <p class="section-label">
                        <span class="gold-rule" style="width:32px"></span>
                        Quiénes somos
                    </p>
                    <h2 class="section-title">Nuestra Historia</h2>
                    <div class="gold-divider"></div>
                    <div class="historia-body">
                        <p>SERNA, conocida actualmente como la Secretaría de Recursos Naturales y Ambiente, es el organismo público de Honduras encargado de la formulación, coordinación y evaluación de políticas relacionadas con la protección y aprovechamiento de los recursos hídricos, las energías renovables, la generación y transmisión de energía hidroeléctrica y geotérmica, la actividad minera, y la exploración y explotación de hidrocarburos.</p>
                        <p>También coordina políticas relacionadas con el ambiente, ecosistemas, el Sistema Nacional de Áreas Protegidas de Honduras (SINAPH), la protección de la flora y fauna, y el control de la contaminación en todas sus formas. Anteriormente denominada Secretaría de Ambiente (SEDA), fue creada el 30 de noviembre de 1999 mediante Decreto No. 218-96.</p>
                        <p>Desde su fundación, SERNA ha trabajado para desarrollar políticas que promuevan el uso racional de los recursos naturales, convirtiéndose en un pilar fundamental para el desarrollo nacional.</p>
                    </div>
                </div>

                <div>
                    <div class="historia-img-frame">
                        <img src="/wp-content/uploads/2026/02/BannerPerfilInstitucional-scaled.jpg" alt="Historia de SERNA">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =============================================
         PILARES — VISIÓN Y MISIÓN
    ============================================= -->
    <section class="pilares">
        <div class="container">

            <div class="pilares-header">
                <p class="section-label centered">
                    <span class="gold-rule"></span>
                    Lo que nos mueve
                    <span class="gold-rule"></span>
                </p>
                <h2 class="section-title" style="text-align:center">Nuestros Pilares Fundamentales</h2>
                <div class="gold-divider centered"></div>
            </div>

            <div class="pilares-grid">

                <!-- Visión -->
                <div class="pilar-card">
                    <div class="pilar-icon-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                    </div>
                    <h3 class="pilar-title">Visión</h3>
                    <p class="pilar-text">Ser una institución que promueva a nivel nacional una gestión eficiente de los recursos naturales y el ambiente, participando activamente en labores de protección ambiental, promoviendo acciones públicas y privadas para preservar los recursos naturales, y ofreciendo información ambiental oportuna para apoyar la toma de decisiones en el sector.</p>
                </div>

                <!-- Misión -->
                <div class="pilar-card">
                    <div class="pilar-icon-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="pilar-title">Misión</h3>
                    <p class="pilar-text">Impulsar el desarrollo sostenible de Honduras mediante la formulación, coordinación, ejecución y evaluación de políticas públicas orientadas a la preservación de los recursos naturales y la conservación del ambiente, para mejorar la calidad de vida de sus habitantes, actuando con honestidad, responsabilidad, compromiso, eficiencia y transparencia.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- =============================================
         VALORES
    ============================================= -->
    <section class="valores">
        <div class="container">

            <div class="valores-header">
                <p class="section-label centered" style="color: rgba(255,255,255,0.65);">
                    <span class="gold-rule"></span>
                    Principios institucionales
                    <span class="gold-rule"></span>
                </p>
                <h2 class="section-title">Nuestros Valores</h2>
                <div class="gold-divider centered"></div>
                <p style="font-size:17px; color:rgba(255,255,255,0.75); max-width:520px; margin:0 auto; line-height:1.6; font-family: Georgia, serif;">
                    Los principios que guían nuestro trabajo diario y nuestra relación con la ciudadanía.
                </p>
            </div>

            <div class="valores-grid">

                <!-- Honestidad -->
                <div class="valor-card">
                    <div class="valor-icon-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h3 class="valor-title">Honestidad</h3>
                    <p class="valor-text">Actuamos con integridad y rectitud en todas nuestras acciones y decisiones.</p>
                </div>

                <!-- Responsabilidad -->
                <div class="valor-card">
                    <div class="valor-icon-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <h3 class="valor-title">Responsabilidad</h3>
                    <p class="valor-text">Asumimos con compromiso nuestras obligaciones hacia el país y sus ciudadanos.</p>
                </div>

                <!-- Compromiso -->
                <div class="valor-card">
                    <div class="valor-icon-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="valor-title">Compromiso</h3>
                    <p class="valor-text">Dedicamos todos nuestros esfuerzos al cumplimiento de los objetivos institucionales.</p>
                </div>

                <!-- Eficiencia -->
                <div class="valor-card">
                    <div class="valor-icon-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="valor-title">Eficiencia</h3>
                    <p class="valor-text">Optimizamos el uso de los recursos para obtener los mejores resultados posibles.</p>
                </div>

                <!-- Transparencia -->
                <div class="valor-card">
                    <div class="valor-icon-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z"/>
                        </svg>
                    </div>
                    <h3 class="valor-title">Transparencia</h3>
                    <p class="valor-text">Garantizamos el acceso a la información y rendimos cuentas de nuestras acciones.</p>
                </div>

            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>