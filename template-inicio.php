<?php
/**
 * Template Name: Inicio Template
 * Template Post Type: page
 */

get_header(); ?>

<style>
/* Georgia es una fuente del sistema, no requiere importación */

/* ============================================
   TOKENS — MISMOS DEL NAVBAR
   ============================================ */
:root {
    --navy:      #263b80;
    --blue:      #264da0;
    --gold:      #ad8411;
    --gold-dark: #ad8411;
    --black:     #231f20;
    --bone:      #F8F7F3;
    --text:      #374151;
    --text-soft: #666666;
    --border:    rgba(38, 61, 128, 0.08);
    --shadow:    0 8px 48px rgba(38, 61, 128, 0.13), 0 2px 8px rgba(0,0,0,0.05);
    --logo-mark: url('/wp-content/uploads/2026/02/Blanco-SERNA-e1770905443177.png');
}

html { scroll-behavior: smooth; }

*, *::before, *::after { box-sizing: border-box; }

.inicio-page {
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

/* Línea dorada — igual que mega-col-title del navbar */
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
}

.section-subtitle {
    font-family: Georgia, 'Times New Roman', serif;
    font-size: 17px;
    color: var(--text-soft);
    max-width: 560px;
    margin: 0 auto;
    line-height: 1.6;
}

/* ============================================
   HERO — Continuación visual del nav
   ============================================ */
.hero {
    position: relative;
    background: linear-gradient(135deg, #1d2e68 0%, #263b80 40%, #264da0 100%);
    overflow: hidden;
    padding: 96px 0 0;
}

/* Patrón de estrellas — destellos de 4 puntas tipo sparkle, irregulares */
.hero-stars {
    position: absolute;
    inset: 0;
    z-index: 1;
    pointer-events: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='240' height='160' viewBox='0 0 240 160'%3E%3Cpath fill='%2387b4e8' fill-opacity='0.18' d='M28,11 L29.65,20.35 L39,22 L29.65,23.65 L28,33 L26.35,23.65 L17,22 L26.35,20.35Z M90,7 L90.75,11.25 L95,12 L90.75,12.75 L90,17 L89.25,12.75 L85,12 L89.25,11.25Z M160,16 L161.35,23.65 L169,25 L161.35,26.35 L160,34 L158.65,26.35 L151,25 L158.65,23.65Z M220,9 L220.9,14.1 L226,15 L220.9,15.9 L220,21 L219.1,15.9 L214,15 L219.1,14.1Z M55,48 L56.05,53.95 L62,55 L56.05,56.05 L55,62 L53.95,56.05 L48,55 L53.95,53.95Z M130,36 L131.8,46.2 L142,48 L131.8,49.8 L130,60 L128.2,49.8 L118,48 L128.2,46.2Z M195,56 L195.6,59.4 L199,60 L195.6,60.6 L195,64 L194.4,60.6 L191,60 L194.4,59.4Z M15,82 L16.2,88.8 L23,90 L16.2,91.2 L15,98 L13.8,91.2 L7,90 L13.8,88.8Z M85,82 L85.45,84.55 L88,85 L85.45,85.45 L85,88 L84.55,85.45 L82,85 L84.55,84.55Z M150,85 L151.5,93.5 L160,95 L151.5,96.5 L150,105 L148.5,96.5 L140,95 L148.5,93.5Z M230,81 L231.05,86.95 L237,88 L231.05,89.05 L230,95 L228.95,89.05 L223,88 L228.95,86.95Z M40,117 L41.95,128.05 L53,130 L41.95,131.95 L40,143 L38.05,131.95 L27,130 L38.05,128.05Z M110,120 L110.75,124.25 L115,125 L110.75,125.75 L110,130 L109.25,125.75 L105,125 L109.25,124.25Z M175,122 L176.2,128.8 L183,130 L176.2,131.2 L175,138 L173.8,131.2 L167,130 L173.8,128.8Z M70,149 L70.9,154.1 L76,155 L70.9,155.9 L70,161 L69.1,155.9 L64,155 L69.1,154.1Z M200,139 L201.65,148.35 L211,150 L201.65,151.65 L200,161 L198.35,151.65 L189,150 L198.35,148.35Z M135,155 L135.45,157.55 L138,158 L135.45,158.45 L135,161 L134.55,158.45 L132,158 L134.55,157.55Z'/%3E%3C/svg%3E");
    background-size: 240px 160px;
    background-repeat: repeat;
}

/* Línea dorada inferior igual que el ::after del nav */
.hero::after {
    content: '';
    display: block;
    height: 2px;
    background: linear-gradient(90deg, transparent, var(--gold) 30%, var(--gold-dark) 70%, transparent);
    opacity: 0.75;
}

/* Marca de agua logos laterales */
.hero-watermark {
    position: absolute;
    inset: 0;
    pointer-events: none;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 4%;
    z-index: 1;
}
.hero-watermark img {
    width: min(260px, 28%);
    opacity: 0.06;
    filter: brightness(20) grayscale(1);
    object-fit: contain;
    user-select: none;
}

/* Orbes de fondo */
.hero-orbs {
    position: absolute;
    inset: 0;
    z-index: 2;
    overflow: hidden;
    pointer-events: none;
}
.hero-orbs span {
    position: absolute;
    border-radius: 50%;
    filter: blur(80px);
    opacity: 0.18;
    animation: pulse 6s ease-in-out infinite;
}
.hero-orbs span:nth-child(1) { width: 380px; height: 380px; background: #87cede; top: -80px; left: -60px; animation-delay: 0s; }
.hero-orbs span:nth-child(2) { width: 320px; height: 320px; background: #87cede; bottom: -60px; right: -40px; animation-delay: 2.5s; }
.hero-orbs span:nth-child(3) { width: 280px; height: 280px; background: #7dbb5c; bottom: -40px; left: 25%; animation-delay: 4.5s; }

@keyframes pulse {
    0%, 100% { opacity: 0.18; transform: scale(1); }
    50%       { opacity: 0.28; transform: scale(1.08); }
}

.hero-inner {
    position: relative;
    z-index: 10;
    text-align: center;
}

/* Pastilla estilo nav */
.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255,255,255,0.10);
    border: 1px solid rgba(255,255,255,0.20);
    border-radius: 99px;
    padding: 6px 16px 6px 10px;
    font-size: 12px;
    font-weight: 600;
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

.hero-title {
    font-size: clamp(32px, 5.5vw, 62px);
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

.hero-sub {
    font-family: Georgia, 'Times New Roman', serif;
    font-size: clamp(16px, 2vw, 20px);
    font-weight: 300;
    color: rgba(255,255,255,0.80);
    max-width: 600px;
    margin: 0 auto 40px;
    line-height: 1.55;
}

.hero-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 14px;
    justify-content: center;
    margin-bottom: 64px;
}

/* Botones — coherentes con el estilo del navbar */
.btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 13px 28px;
    background: #ffffff;
    color: var(--navy);
    font-family: Georgia, 'Times New Roman', serif;
    font-weight: 600;
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

.btn-outline {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 28px;
    background: transparent;
    color: rgba(255,255,255,0.92);
    font-family: Georgia, 'Times New Roman', serif;
    font-weight: 500;
    font-size: 14px;
    border-radius: 8px;
    border: 1.5px solid rgba(255,255,255,0.35);
    text-decoration: none;
    transition: background 0.22s, border-color 0.22s, transform 0.18s;
}
.btn-outline:hover {
    background: rgba(255,255,255,0.12);
    border-color: rgba(255,255,255,0.60);
    transform: translateY(-2px);
}

/* Ola del hero */
.hero-wave {
    position: relative;
    z-index: 10;
    line-height: 0;
    margin-top: -2px;
}
.hero-wave svg { display: block; width: 100%; }

/* ============================================
   SERVICIOS
   ============================================ */
.servicios {
    padding: 96px 0;
    background: var(--bone);
    position: relative;
}

/* Marca de agua centrada en sección */
.servicios::before {
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

.servicios-header { text-align: center; margin-bottom: 56px; }

.servicios-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 24px;
}

/* Cards — mismo lenguaje que el mega-menu del navbar */
.service-card {
    background: #ffffff;
    border: 1px solid var(--border);
    border-radius: 12px;
    overflow: hidden;
    box-shadow: var(--shadow);
    transition: transform 0.25s ease, box-shadow 0.25s ease;
    position: relative;
}
.service-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 56px rgba(38, 61, 128, 0.18), 0 4px 12px rgba(0,0,0,0.06);
}

/* Barra dorada superior — igual que mega-col-title border */
.service-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 2px;
    background: linear-gradient(90deg, var(--navy), var(--blue));
    opacity: 0;
    transition: opacity 0.25s;
}
.service-card:hover::before { opacity: 1; }

.service-icon-wrap {
    background: linear-gradient(135deg, var(--navy), var(--blue));
    padding: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
}
.service-icon-wrap::after {
    content: '';
    position: absolute;
    bottom: -20px;
    right: -20px;
    width: 80px; height: 80px;
    border-radius: 50%;
    background: rgba(255,255,255,0.06);
}
.service-icon-wrap svg {
    width: 52px; height: 52px;
    color: #ffffff;
    position: relative;
    z-index: 1;
}

.service-body { padding: 24px 28px 28px; }

/* Línea dorada de título — idéntica a mega-col-title */
.service-title {
    font-size: 18px;
    font-weight: 700;
    color: var(--navy);
    margin: 0 0 12px;
    padding-bottom: 10px;
    border-bottom: 2px solid var(--gold);
    display: inline-block;
}

.service-desc {
    font-family: Georgia, 'Times New Roman', serif;
    font-size: 14.5px;
    color: var(--text-soft);
    line-height: 1.65;
    margin: 0 0 20px;
}

.service-link {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 13.5px;
    font-weight: 600;
    color: var(--blue);
    text-decoration: none;
    transition: color 0.2s, gap 0.2s;
}
.service-link:hover { color: var(--gold-dark); gap: 10px; }
.service-link svg { width: 16px; height: 16px; }

/* ============================================
   SOBRE NOSOTROS
   ============================================ */
.about {
    padding: 96px 0;
    background: #ffffff;
    position: relative;
}
.about::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: var(--logo-mark);
    background-repeat: no-repeat;
    background-size: min(380px, 50%);
    background-position: center right 10%;
    opacity: 0.035;
    filter: grayscale(1) brightness(0);
    pointer-events: none;
}

.about-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
}

@media (max-width: 768px) {
    .about-grid { grid-template-columns: 1fr; gap: 40px; }
}

.about-text { position: relative; z-index: 1; }
.about-text .section-label { justify-content: flex-start; }
.about-text .section-title { text-align: left; margin-bottom: 24px; }

.about-body {
    font-family: Georgia, 'Times New Roman', serif;
    font-size: 15.5px;
    color: var(--text-soft);
    line-height: 1.75;
    margin-bottom: 36px;
}
.about-body p + p { margin-top: 14px; }

/* Separador dorado — mismo estilo que la línea del nav */
.about-divider {
    width: 48px;
    height: 2px;
    background: var(--gold);
    border-radius: 2px;
    margin: 20px 0 24px;
}

.about-img-wrap {
    position: relative;
    z-index: 1;
}
.about-img-frame {
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid var(--border);
    box-shadow: var(--shadow);
    aspect-ratio: 4/3;
}
.about-img-frame img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.6s ease;
}
.about-img-frame:hover img { transform: scale(1.04); }

/* Tarjeta flotante de acento */
.about-badge-float {
    position: absolute;
    bottom: -20px;
    left: -24px;
    background: var(--navy);
    color: white;
    border-radius: 10px;
    padding: 16px 22px;
    font-size: 13px;
    font-weight: 600;
    box-shadow: 0 8px 32px rgba(38, 61, 128, 0.35);
    display: flex;
    align-items: center;
    gap: 10px;
}
.about-badge-float .dot {
    width: 8px; height: 8px;
    border-radius: 50%;
    background: var(--gold);
    flex-shrink: 0;
    box-shadow: 0 0 8px var(--gold);
}

@media (max-width: 768px) {
    .about-badge-float { display: none; }
}

/* ============================================
   NOTICIAS
   ============================================ */
.noticias {
    padding: 96px 0;
    background: var(--bone);
    position: relative;
}
.noticias::before {
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

.noticias-header { text-align: center; margin-bottom: 56px; }

.noticias-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 24px;
}

.news-card {
    background: #ffffff;
    border: 1px solid var(--border);
    border-radius: 12px;
    overflow: hidden;
    box-shadow: var(--shadow);
    transition: transform 0.25s ease, box-shadow 0.25s ease;
    display: flex;
    flex-direction: column;
}
.news-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 16px 48px rgba(38, 61, 128, 0.16);
}

.news-img {
    height: 200px;
    overflow: hidden;
}
.news-img img {
    width: 100%; height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.5s ease;
}
.news-card:hover .news-img img { transform: scale(1.06); }

.news-body {
    padding: 24px 26px 26px;
    display: flex;
    flex-direction: column;
    flex: 1;
}

.news-meta {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 14px;
    flex-wrap: wrap;
}

/* Tag igual que los badges del navbar móvil */
.news-tag {
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    background: var(--navy);
    color: white;
    padding: 4px 10px;
    border-radius: 4px;
}

.news-date {
    font-size: 12px;
    color: var(--text-soft);
    font-family: Georgia, 'Times New Roman', serif;
}

.news-title {
    font-size: 17px;
    font-weight: 700;
    color: var(--navy);
    margin: 0 0 12px;
    line-height: 1.35;
    /* Línea dorada a la izquierda — eco del borde del mega-menu */
    border-left: 2px solid var(--gold);
    padding-left: 12px;
}

.news-excerpt {
    font-family: Georgia, 'Times New Roman', serif;
    font-size: 14px;
    color: var(--text-soft);
    line-height: 1.65;
    margin: 0 0 20px;
    flex: 1;
}

.news-link {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 13px;
    font-weight: 600;
    color: var(--navy);
    text-decoration: none;
    transition: color 0.2s, gap 0.2s;
    align-self: flex-start;
}
.news-link:hover { color: var(--gold-dark); gap: 10px; }
.news-link svg { width: 15px; height: 15px; }

.noticias-footer { text-align: center; margin-top: 48px; }

/* ============================================
   CTA
   ============================================ */
.cta {
    padding: 80px 0;
    background: linear-gradient(135deg, var(--navy) 0%, var(--blue) 100%);
    position: relative;
    overflow: hidden;
}
.cta::after {
    content: '';
    display: block;
    position: absolute;
    inset: 0;
    background-image: var(--logo-mark);
    background-repeat: no-repeat;
    background-size: min(500px, 60%);
    background-position: center;
    opacity: 0.05;
    filter: brightness(20) grayscale(1);
    pointer-events: none;
}

.cta-inner {
    position: relative;
    z-index: 1;
    text-align: center;
}

.cta-title {
    font-size: clamp(26px, 4vw, 40px);
    font-weight: 800;
    color: #ffffff;
    margin: 0 0 16px;
}
.cta-title span {
    color: var(--gold);
}

.cta-sub {
    font-family: Georgia, 'Times New Roman', serif;
    font-size: 17px;
    color: rgba(255,255,255,0.75);
    max-width: 540px;
    margin: 0 auto 40px;
    line-height: 1.6;
}

.cta-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 14px;
    justify-content: center;
}

.btn-cta-light {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 13px 26px;
    background: rgba(255,255,255,0.12);
    color: rgba(255,255,255,0.92);
    font-family: Georgia, 'Times New Roman', serif;
    font-weight: 500;
    font-size: 14px;
    border-radius: 8px;
    border: 1.5px solid rgba(255,255,255,0.25);
    text-decoration: none;
    transition: background 0.22s, border-color 0.22s, transform 0.18s;
}
.btn-cta-light:hover {
    background: rgba(255,255,255,0.22);
    border-color: rgba(255,255,255,0.55);
    transform: translateY(-2px);
}

/* ============================================
   MAPA
   ============================================ */
.mapa {
    padding: 96px 0;
    background: #ffffff;
}
.mapa-header { text-align: center; margin-bottom: 48px; }

.mapa-frame {
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid var(--border);
    box-shadow: var(--shadow);
    line-height: 0;
}
.mapa-frame iframe { display: block; }

/* ============================================
   RESPONSIVE
   ============================================ */
@media (max-width: 640px) {
    .hero { padding: 72px 0 0; }
    .hero-actions { flex-direction: column; align-items: center; }
    .servicios, .about, .noticias, .mapa { padding: 64px 0; }
    .cta { padding: 60px 0; }
}
</style>

<div class="inicio-page">

    <!-- =============================================
         HERO
    ============================================= -->
    <section class="hero">

        <!-- Patrón de estrellas -->
        <div class="hero-stars" aria-hidden="true"></div>

        <!-- Marcas de agua laterales -->
        <div class="hero-watermark" aria-hidden="true">
            <img src="/wp-content/uploads/2026/02/cropped-Logo-Gobierno.png" alt="">
            <img src="/wp-content/uploads/2026/02/cropped-Logo-Gobierno.png" alt="">
        </div>

        <!-- Orbes animados -->
        <div class="hero-orbs" aria-hidden="true">
            <span></span><span></span><span></span>
        </div>

        <!-- Contenido -->
        <div class="container hero-inner">
            <div class="hero-badge">
                <span class="hero-badge-dot"></span>
                Secretaría de Estado
            </div>

            <h1 class="hero-title">
                Secretaría de Recursos<br>Naturales y Ambiente
            </h1>

            <p class="hero-sub">
                Protegemos los recursos naturales de Honduras, promoviendo el desarrollo sostenible para el bienestar de todos los hondureños.
            </p>

            <div class="hero-actions">
                <a href="/nosotros/perfil" class="btn-primary">
                    Conócenos
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
                <a href="#servicios" class="btn-outline">
                    Nuestros Servicios
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Ola de transición -->
        <div class="hero-wave">
            <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <path d="M0 0 C360 80 1080 80 1440 0 L1440 80 L0 80 Z" fill="#F8F7F3"/>
            </svg>
        </div>
    </section>

    <!-- =============================================
         SERVICIOS
    ============================================= -->
    <section id="servicios" class="servicios">
        <div class="container">

            <div class="servicios-header">
                <p class="section-label">
                    <span class="gold-rule"></span>
                    Lo que hacemos
                    <span class="gold-rule"></span>
                </p>
                <h2 class="section-title">Nuestros Servicios</h2>
                <p class="section-subtitle">Ofrecemos servicios especializados para proteger y gestionar los recursos naturales de Honduras.</p>
            </div>

            <div class="servicios-grid">

                <!-- Servicio 1 -->
                <div class="service-card">
                    <div class="service-icon-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <div class="service-body">
                        <h3 class="service-title">Licencias Ambientales</h3>
                        <p class="service-desc">Proceso de evaluación y aprobación de proyectos para garantizar el cumplimiento de las normas ambientales vigentes.</p>
                        <a href="/slas" class="service-link">
                            Más información
                            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Servicio 2 -->
                <div class="service-card">
                    <div class="service-icon-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"/>
                        </svg>
                    </div>
                    <div class="service-body">
                        <h3 class="service-title">Gestión Forestal</h3>
                        <p class="service-desc">Planificación y control del uso sostenible de los recursos forestales, preservando los ecosistemas del país.</p>
                        <a href="/direcciones/deca/" class="service-link">
                            Más información
                            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Servicio 3 -->
                <div class="service-card">
                    <div class="service-icon-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                        </svg>
                    </div>
                    <div class="service-body">
                        <h3 class="service-title">Protección del Agua</h3>
                        <p class="service-desc">Programas para la conservación y uso racional de los recursos hídricos nacionales para las futuras generaciones.</p>
                        <a href="/direcciones/dgrh/" class="service-link">
                            Más información
                            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =============================================
         SOBRE NOSOTROS
    ============================================= -->
    <section class="about">
        <div class="container">
            <div class="about-grid">

                <div class="about-text">
                    <p class="section-label">
                        <span class="gold-rule" style="width:32px"></span>
                        Quiénes somos
                    </p>
                    <h2 class="section-title">Sobre Nosotros</h2>
                    <div class="about-divider"></div>
                    <div class="about-body">
                        <p>La Secretaría de Recursos Naturales y Ambiente (SERNA) protege y administra los recursos naturales de Honduras, promoviendo el desarrollo sostenible y el cuidado del ambiente para el bienestar de la población.</p>
                        <p>La institución lidera la gestión ambiental del país mediante políticas orientadas al uso responsable del agua, el impulso de energías renovables, la protección de los ecosistemas, la conservación de la biodiversidad y el control de la contaminación.</p>
                        <p>Nuestro trabajo busca garantizar el equilibrio entre crecimiento económico, protección ambiental y calidad de vida para las presentes y futuras generaciones.</p>
                    </div>
                    <a href="/nosotros/perfil" class="btn-primary" style="background: var(--navy); color: white; display: inline-flex;">
                        Conoce más sobre nosotros
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                <div class="about-img-wrap">
                    <div class="about-img-frame">
                        <img src="/wp-content/uploads/2026/02/WhatsApp-Image-2026-02-19-at-12.09.24.jpeg" alt="SERNA Honduras">
                    </div>
                    <div class="about-badge-float">
                        <span class="dot"></span>
                        Gestión responsable de recursos naturales
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =============================================
         NOTICIAS
    ============================================= -->
    <section class="noticias">
        <div class="container">

            <div class="noticias-header">
                <p class="section-label">
                    <span class="gold-rule"></span>
                    Al día
                    <span class="gold-rule"></span>
                </p>
                <h2 class="section-title">Noticias y Actualizaciones</h2>
                <p class="section-subtitle">Mantente informado sobre nuestras últimas actividades, proyectos y noticias ambientales.</p>
            </div>

            <div class="noticias-grid">

                <!-- Noticia 1 -->
                <div class="news-card">
                    <div class="news-img">
                        <img src="/wp-content/uploads/2026/02/Primera_Noticia.jpeg" alt="Nuevas Autoridades">
                    </div>
                    <div class="news-body">
                        <div class="news-meta">
                            <span class="news-tag">Nuevo Capítulo</span>
                            <span class="news-date">6 Feb 2026</span>
                        </div>
                        <h3 class="news-title">¡Nuevo Liderazgo en la SERNA!</h3>
                        <p class="news-excerpt">El ministro <strong>Juan Carlos Ramos</strong> inició su gestión visitando personalmente a colaboradores en cada área de la Secretaría, reflejando un liderazgo cercano y compromiso con el servicio público.</p>
                        <a href="#" class="news-link">
                            Leer más
                            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Noticia 2 -->
                <div class="news-card">
                    <div class="news-img">
                        <img src="/wp-content/uploads/2026/02/Segunda_Noticia.jpg" alt="Convenio Internacional">
                    </div>
                    <div class="news-body">
                        <div class="news-meta">
                            <span class="news-tag">Convenio</span>
                            <span class="news-date">12 Feb 2026</span>
                        </div>
                        <h3 class="news-title">Fortaleciendo Relaciones Internacionales</h3>
                        <p class="news-excerpt">El titular de SERNA se reunió con el Coordinador Residente de la ONU en Honduras y el representante de UNICEF para fortalecer la cooperación estratégica en materia ambiental.</p>
                        <a href="#" class="news-link">
                            Leer más
                            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Noticia 3 -->
                <div class="news-card">
                    <div class="news-img">
                        <img src="/wp-content/uploads/2026/04/WhatsApp-Image-2026-04-07-at-12.05.02-e1775668792765.jpeg" alt="Nuevo Subsecretario">
                    </div>
                    <div class="news-body">
                        <div class="news-meta">
                            <span class="news-tag">Nuevo Capítulo</span>
                            <span class="news-date">7 Abr 2026</span>
                        </div>
                        <h3 class="news-title">Bienvenida al Subsecretario de Estado en el Despacho de Ambiente, Ramón Dagoberto Rodríguez</h3>
                        <p class="news-excerpt">La Secretaría de Recursos Naturales y Ambiente (SERNA) da una cordial bienvenida al Subsecretario de Estado en el Despacho de Ambiente, <strong>Ramón Dagoberto Rodríguez</strong>, quien se une a esta importante labor con un compromiso firme, liderazgo y vocación de servicio.</p>
                        <a href="#" class="news-link">
                            Leer más
                            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>

            </div>

            <div class="noticias-footer">
                <a href="/nosotros/foro" class="btn-outline" style="border-color: var(--navy); color: var(--navy); background: transparent;">
                    Ver todas las noticias
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

        </div>
    </section>

    <!-- =============================================
         CTA
    ============================================= -->
    <section class="cta">
        <div class="container cta-inner">
            <h2 class="cta-title">¿Cómo puedes <span>contribuir</span>?</h2>
            <p class="cta-sub">Todos podemos ser parte de la solución. Descubre cómo colaborar con la protección del medio ambiente en Honduras.</p>
            <div class="cta-actions">
                <a href="#" class="btn-primary">
                    Voluntariado
                </a>
                <a href="#" class="btn-cta-light">Denuncias Ambientales</a>
                <a href="#" class="btn-cta-light">Programas Educativos</a>
            </div>
        </div>
    </section>

    <!-- =============================================
         MAPA
    ============================================= -->
    <section class="mapa">
        <div class="container">
            <div class="mapa-header">
                <p class="section-label">
                    <span class="gold-rule"></span>
                    Ubicación
                    <span class="gold-rule"></span>
                </p>
                <h2 class="section-title">Estamos aquí</h2>
            </div>
            <div class="mapa-frame">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1707.8792146428075!2d-87.18747288964083!3d14.097344497602379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1ses-419!2shn!4v1747232723012!5m2!1ses-419!2shn"
                    width="100%"
                    height="520"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

</div>

<!-- Chatbot -->
<div id="serna-chatbot"></div>

<?php get_footer(); ?>