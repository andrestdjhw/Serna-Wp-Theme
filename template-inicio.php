<?php
/**
 * Template Name: Inicio Template
 * Template Post Type: page
 */

get_header(); ?>

<style>
@import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap');

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
    font-family: 'Outfit', sans-serif;
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
}

.section-subtitle {
    font-family: 'DM Sans', sans-serif;
    font-size: 17px;
    color: var(--text-soft);
    max-width: 560px;
    margin: 0 auto;
    line-height: 1.6;
}

/* ============================================
   HERO
   ============================================ */
.hero {
    position: relative;
    background: linear-gradient(135deg, #1d2e68 0%, #263b80 40%, #264da0 100%);
    overflow: hidden;
    padding: 96px 0 0;
}

/* ── Patrón de puntos adaptado a SERNA ──────────────────
   Puntos: celeste SERNA (rgba(135,206,222,0.35)) sobre
   fondo transparente para que el gradiente del .hero
   siga siendo visible debajo.
   El offset de la segunda capa crea el patrón de cuadrícula
   diagonal igual que el original.
   ──────────────────────────────────────────────────── */
.hero-hex-pattern {
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

    /* Destello dorado sutil — coherente con el gold del navbar */
    box-shadow: inset 0 0 140px rgba(173, 132, 17, 0.10);

    /* Fundido radial: más visible al centro, desvanece en bordes */
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
    font-family: 'DM Sans', sans-serif;
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

/* Botones */
.btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 13px 28px;
    background: #ffffff;
    color: var(--navy);
    font-family: 'DM Sans', sans-serif;
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
    font-family: 'DM Sans', sans-serif;
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
    position: relative;
    overflow: hidden;
    height: 200px;
}
.service-icon-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    display: block;
    transition: transform 0.5s ease;
}
.service-card:hover .service-icon-wrap img {
    transform: scale(1.06);
}
/* Overlay degradado sobre la imagen — mantiene legibilidad */
.service-icon-wrap::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(
        to bottom,
        rgba(38, 59, 128, 0.15) 0%,
        rgba(38, 59, 128, 0.45) 100%
    );
    pointer-events: none;
}

.service-body { padding: 24px 28px 28px; }

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
    font-family: 'DM Sans', sans-serif;
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
    font-family: 'DM Sans', sans-serif;
    font-size: 15.5px;
    color: var(--text-soft);
    line-height: 1.75;
    margin-bottom: 36px;
}
.about-body p + p { margin-top: 14px; }

.about-divider {
    width: 48px;
    height: 2px;
    background: var(--gold);
    border-radius: 2px;
    margin: 20px 0 24px;
}

.about-img-wrap { position: relative; z-index: 1; }
.about-img-frame {
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid var(--border);
    box-shadow: var(--shadow);
    aspect-ratio: 4/3;
}
.about-img-frame img {
    width: 100%; height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.6s ease;
}
.about-img-frame:hover img { transform: scale(1.04); }

.about-badge-float {
    position: absolute;
    bottom: -20px; left: -24px;
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
@media (max-width: 768px) { .about-badge-float { display: none; } }

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

.news-img { height: 200px; overflow: hidden; }
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
    font-family: 'DM Sans', sans-serif;
}

.news-title {
    font-size: 17px;
    font-weight: 700;
    color: var(--navy);
    margin: 0 0 12px;
    line-height: 1.35;
    border-left: 2px solid var(--gold);
    padding-left: 12px;
}

.news-excerpt {
    font-family: 'DM Sans', sans-serif;
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
.cta-title span { color: var(--gold); }

.cta-sub {
    font-family: 'DM Sans', sans-serif;
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
    font-family: 'DM Sans', sans-serif;
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

        <!-- Patrón hexagonal SERNA (reemplaza las estrellas) -->
        <div class="hero-hex-pattern" aria-hidden="true"></div>

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
                        <!-- Reemplaza src con la ruta real: /wp-content/uploads/... -->
                        <img src="/wp-content/uploads/2026/04/Inicio_Licencia_Ambiental-scaled.jpg" alt="Licencias Ambientales">
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
                        <!-- Reemplaza src con la ruta real: /wp-content/uploads/... -->
                        <img src="/wp-content/uploads/2026/04/Inicio_Gestion_Forestal-scaled.jpg" alt="Gestión Forestal">
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
                        <!-- Reemplaza src con la ruta real: /wp-content/uploads/... -->
                        <img src="/wp-content/uploads/2026/04/Inicio_Manejo_Agua-scaled.jpg" alt="Protección del Agua">
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
                <a href="#" class="btn-primary">Voluntariado</a>
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