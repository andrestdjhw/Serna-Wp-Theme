<?php
/**
 * Template Name: Oportunidades Template
 * Template Post Type: page
 */

get_header(); ?>

<style>
@import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap');

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

.oportunidades-page {
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
.oportunidades-hero {
    position: relative;
    background: linear-gradient(135deg, #1d2e68 0%, var(--navy) 40%, var(--blue) 100%);
    overflow: hidden;
    padding: 96px 0 0;
}

.oportunidades-hero::after {
    content: '';
    display: block;
    height: 2px;
    background: linear-gradient(90deg, transparent, var(--gold) 30%, var(--gold-dark) 70%, transparent);
    opacity: 0.75;
}

/* ── Patrón de puntos — igual que homepage ── */
.oportunidades-hero-stars {
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

.oportunidades-hero-watermark {
    position: absolute;
    inset: 0;
    pointer-events: none;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 4%;
    z-index: 2;
}
.oportunidades-hero-watermark img {
    width: min(260px, 28%);
    opacity: 0.06;
    filter: brightness(20) grayscale(1);
    object-fit: contain;
    user-select: none;
}

.oportunidades-hero-orbs {
    position: absolute;
    inset: 0;
    z-index: 2;
    overflow: hidden;
    pointer-events: none;
}
.oportunidades-hero-orbs span {
    position: absolute;
    border-radius: 50%;
    filter: blur(80px);
    opacity: 0.18;
    animation: orb-pulse 6s ease-in-out infinite;
}
.oportunidades-hero-orbs span:nth-child(1) { width: 340px; height: 340px; background: #87cede; top: -80px; left: -60px; }
.oportunidades-hero-orbs span:nth-child(2) { width: 300px; height: 300px; background: #87cede; bottom: -60px; right: -40px; animation-delay: 3s; }
.oportunidades-hero-orbs span:nth-child(3) { width: 260px; height: 260px; background: #7dbb5c; bottom: -40px; left: 25%; animation-delay: 5s; }

@keyframes orb-pulse {
    0%, 100% { opacity: 0.18; transform: scale(1); }
    50%       { opacity: 0.28; transform: scale(1.08); }
}

.oportunidades-hero-inner {
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

.oportunidades-hero-title {
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

.oportunidades-hero-sub {
    font-family: 'DM Sans', sans-serif;
    font-style: italic;
    font-size: clamp(16px, 2vw, 20px);
    color: rgba(255,255,255,0.80);
    max-width: 580px;
    margin: 0 auto 64px;
    line-height: 1.6;
}

.oportunidades-hero-wave {
    position: relative;
    z-index: 10;
    line-height: 0;
    margin-top: -2px;
}
.oportunidades-hero-wave svg { display: block; width: 100%; }

/* ============================================
   PROCESO — PASOS
   ============================================ */
.proceso {
    padding: 96px 0 0;
    position: relative;
}
.proceso::before {
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

.proceso-header {
    text-align: center;
    margin-bottom: 56px;
}

.proceso-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 32px;
    position: relative;
    z-index: 1;
}

@media (max-width: 768px) { .proceso-grid { grid-template-columns: 1fr; } }

.proceso-grid::before {
    content: '';
    position: absolute;
    top: 48px;
    left: calc(16.66% + 24px);
    right: calc(16.66% + 24px);
    height: 1.5px;
    background: linear-gradient(90deg, var(--navy), var(--blue));
    opacity: 0.15;
    z-index: 0;
}
@media (max-width: 768px) { .proceso-grid::before { display: none; } }

.paso-card {
    text-align: center;
    position: relative;
    z-index: 1;
}

.paso-numero {
    width: 14px; height: 14px;
    background: var(--gold);
    border-radius: 50%;
    margin: 0 auto 6px;
    box-shadow: 0 0 0 4px rgba(227,162,32,0.2);
}

.paso-icon-wrap {
    width: 80px; height: 80px;
    background: linear-gradient(135deg, var(--navy), var(--blue));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    box-shadow: 0 8px 24px rgba(38, 61, 128, 0.25);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.paso-card:hover .paso-icon-wrap {
    transform: scale(1.1) translateY(-4px);
    box-shadow: 0 16px 36px rgba(38, 61, 128, 0.3);
}
.paso-icon-wrap svg { width: 36px; height: 36px; color: white; }

.paso-title {
    font-size: 20px;
    font-weight: 700;
    color: var(--navy);
    margin: 0 0 10px;
    padding-bottom: 8px;
    border-bottom: 2px solid var(--gold);
    display: inline-block;
}

.paso-desc {
    font-family: 'DM Sans', sans-serif;
    font-size: 14.5px;
    color: var(--text-soft);
    line-height: 1.7;
    max-width: 260px;
    margin: 10px auto 0;
}

/* ============================================
   OPORTUNIDADES — CARDS
   ============================================ */
.oportunidades-section {
    padding: 80px 0;
    position: relative;
    z-index: 1;
}

.oportunidades-header {
    text-align: center;
    margin-bottom: 56px;
}

.oportunidades-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(272px, 1fr));
    gap: 24px;
}

.oport-card {
    background: #ffffff;
    border: 1px solid var(--border);
    border-radius: 12px;
    overflow: hidden;
    box-shadow: var(--shadow);
    transition: transform 0.25s ease, box-shadow 0.25s ease;
    display: flex;
    flex-direction: column;
}
.oport-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 52px rgba(38, 61, 128, 0.18);
}
.oport-card::before {
    content: '';
    display: block;
    height: 2px;
    background: linear-gradient(90deg, var(--navy), var(--blue));
    opacity: 0;
    transition: opacity 0.25s;
}
.oport-card:hover::before { opacity: 1; }

.oport-img {
    height: 180px;
    overflow: hidden;
    background: var(--navy);
}
.oport-img img {
    width: 100%; height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.5s ease;
}
.oport-card:hover .oport-img img { transform: scale(1.06); }

.oport-body {
    padding: 24px 26px 28px;
    display: flex;
    flex-direction: column;
    flex: 1;
}

.oport-title {
    font-size: 15px;
    font-weight: 700;
    color: var(--black);
    margin: 0 0 10px;
    border-left: 2px solid var(--gold);
    padding-left: 10px;
    line-height: 1.4;
}

.oport-desc {
    font-family: 'DM Sans', sans-serif;
    font-size: 13.5px;
    color: var(--text-soft);
    line-height: 1.65;
    margin: 0 0 20px;
    flex: 1;
}

.oport-link {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 13px;
    font-weight: 700;
    color: var(--gold-dark);
    text-decoration: none;
    transition: color 0.2s, gap 0.2s;
    align-self: flex-start;
}
.oport-link:hover { color: var(--navy); gap: 10px; }
.oport-link svg { width: 15px; height: 15px; }

/* ============================================
   CTA AYUDA
   ============================================ */
.ayuda-cta {
    background: linear-gradient(135deg, var(--navy) 0%, var(--blue) 100%);
    border-radius: 16px;
    padding: 64px 40px;
    text-align: center;
    position: relative;
    overflow: hidden;
    margin-bottom: 96px;
}

/* Patrón de puntos en el CTA — coherente con el hero */
.ayuda-cta::before {
    --dot-color: rgba(135, 206, 222, 0.12);
    --dot-size: 3rem;

    content: '';
    position: absolute;
    inset: 0;
    background-image:
        radial-gradient(var(--dot-color) 5%, transparent 6%),
        radial-gradient(var(--dot-color) 5%, transparent 6%);
    background-position:
        0 0,
        calc(var(--dot-size) / 2) calc(var(--dot-size) / 2);
    background-size: var(--dot-size) var(--dot-size);
    pointer-events: none;
}

.ayuda-cta-inner { position: relative; z-index: 1; }

.ayuda-cta h2 {
    font-size: clamp(24px, 3.5vw, 36px);
    font-weight: 800;
    color: #ffffff;
    margin: 0 0 16px;
}

.ayuda-cta p {
    font-family: 'DM Sans', sans-serif;
    font-size: 17px;
    color: rgba(255,255,255,0.75);
    max-width: 560px;
    margin: 0 auto 36px;
    line-height: 1.6;
}

.ayuda-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 14px;
    justify-content: center;
}

.btn-cta-white {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 13px 28px;
    background: #ffffff;
    color: var(--navy);
    font-family: 'Outfit', sans-serif;
    font-weight: 700;
    font-size: 14px;
    border-radius: 8px;
    text-decoration: none;
    transition: background 0.22s, color 0.22s, transform 0.18s, box-shadow 0.22s;
    box-shadow: 0 4px 16px rgba(0,0,0,0.15);
}
.btn-cta-white:hover {
    background: var(--gold);
    color: #FFFFFF;
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(227,162,32,0.35);
}

.btn-cta-outline {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 28px;
    background: transparent;
    color: rgba(255,255,255,0.92);
    font-family: 'Outfit', sans-serif;
    font-weight: 500;
    font-size: 14px;
    border-radius: 8px;
    border: 1.5px solid rgba(255,255,255,0.35);
    text-decoration: none;
    transition: background 0.22s, border-color 0.22s, transform 0.18s;
}
.btn-cta-outline:hover {
    background: rgba(255,255,255,0.12);
    border-color: rgba(255,255,255,0.65);
    transform: translateY(-2px);
}

/* ============================================
   RESPONSIVE
   ============================================ */
@media (max-width: 640px) {
    .oportunidades-hero { padding: 72px 0 0; }
    .proceso { padding: 64px 0 0; }
    .oportunidades-section { padding: 56px 0; }
    .ayuda-cta { padding: 44px 24px; margin-bottom: 64px; }
    .ayuda-actions { flex-direction: column; align-items: center; }
}
</style>

<div class="oportunidades-page">

    <!-- =============================================
         HERO
    ============================================= -->
    <section class="oportunidades-hero">

        <!-- Patrón de puntos (reemplaza estrellas) -->
        <div class="oportunidades-hero-stars" aria-hidden="true"></div>

        <div class="oportunidades-hero-watermark" aria-hidden="true">
            <img src="/wp-content/uploads/2026/02/cropped-Logo-Gobierno.png" alt="">
            <img src="/wp-content/uploads/2026/02/cropped-Logo-Gobierno.png" alt="">
        </div>

        <div class="oportunidades-hero-orbs" aria-hidden="true">
            <span></span><span></span><span></span>
        </div>

        <div class="container oportunidades-hero-inner">
            <div class="hero-badge">
                <span class="hero-badge-dot"></span>
                Convocatorias
            </div>
            <h1 class="oportunidades-hero-title">¿Cómo aplicar?</h1>
            <p class="oportunidades-hero-sub">
                <cite>Conoce el proceso completo para aplicar a nuestros programas y servicios ambientales.</cite>
            </p>
        </div>

        <div class="oportunidades-hero-wave">
            <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <path d="M0 0 C360 80 1080 80 1440 0 L1440 80 L0 80 Z" fill="#F8F7F3"/>
            </svg>
        </div>
    </section>

    <!-- =============================================
         PROCESO
    ============================================= -->
    <section class="proceso">
        <div class="container">

            <div class="proceso-header">
                <p class="section-label">
                    <span class="gold-rule"></span>
                    Pasos a seguir
                    <span class="gold-rule"></span>
                </p>
                <h2 class="section-title">Proceso de Aplicación</h2>
                <div class="gold-divider"></div>
            </div>

            <div class="proceso-grid">

                <!-- Paso 1 -->
                <div class="paso-card">
                    <div class="paso-numero"></div>
                    <div class="paso-icon-wrap">
                        <svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                        </svg>
                    </div>
                    <h3 class="paso-title">Requisitos</h3>
                    <p class="paso-desc">Revisa todos los documentos y requisitos necesarios antes de iniciar tu aplicación.</p>
                </div>

                <!-- Paso 2 -->
                <div class="paso-card">
                    <div class="paso-numero"></div>
                    <div class="paso-icon-wrap">
                        <svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="paso-title">Fechas</h3>
                    <p class="paso-desc">Consulta las fechas importantes de convocatorias y plazos límite para aplicaciones.</p>
                </div>

                <!-- Paso 3 -->
                <div class="paso-card">
                    <div class="paso-numero"></div>
                    <div class="paso-icon-wrap">
                        <svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                    </div>
                    <h3 class="paso-title">Formulario</h3>
                    <p class="paso-desc">Completa el formulario de aplicación en línea con toda la información solicitada.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- =============================================
         OPORTUNIDADES
    ============================================= -->
    <section class="oportunidades-section">
        <div class="container">

            <div class="oportunidades-header">
                <p class="section-label">
                    <span class="gold-rule"></span>
                    Convocatorias abiertas
                    <span class="gold-rule"></span>
                </p>
                <h2 class="section-title">Oportunidades</h2>
                <div class="gold-divider"></div>
                <p style="font-size:17px; color:var(--text-soft); max-width:560px; margin:0 auto; line-height:1.6; font-family:'DM Sans',sans-serif;">
                    Descubre las diferentes oportunidades disponibles para contribuir a la conservación del medio ambiente.
                </p>
            </div>

            <div class="oportunidades-grid">

                <!-- Card 1 -->
                <div class="oport-card">
                    <div class="oport-img">
                        <img src="/wp-content/uploads/2025/08/Oportunidades.jpg" alt="CS/OCP/CONECTA/001-2024">
                    </div>
                    <div class="oport-body">
                        <h3 class="oport-title">CS/OCP/CONECTA/001-2024</h3>
                        <p class="oport-desc">Servicios de asistencia técnica en comunicaciones, actividades de sensibilización y visibilidad.</p>
                        <a href="https://empleos.hn/jobs/csocpconecta001-2024servicios-de-asistencia" target="_blank" rel="noopener noreferrer" class="oport-link">
                            Aplicar ahora
                            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="oport-card">
                    <div class="oport-img">
                        <img src="/wp-content/uploads/2025/08/Oportunidades.jpg" alt="CS/OCP/CONECTA/002-2024">
                    </div>
                    <div class="oport-body">
                        <h3 class="oport-title">CS/OCP/CONECTA/002-2024</h3>
                        <p class="oport-desc">Servicios de asistencia Diseñador Gráfico Junior.</p>
                        <a href="https://empleos.hn/jobs/csocpconecta002-2024servicios-de-asistencia" target="_blank" rel="noopener noreferrer" class="oport-link">
                            Ver convocatoria
                            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="oport-card">
                    <div class="oport-img">
                        <img src="/wp-content/uploads/2025/08/Marketing.jpg" alt="Consultoría">
                    </div>
                    <div class="oport-body">
                        <h3 class="oport-title">Consultoría</h3>
                        <p class="oport-desc">Estudio de Factibilidad Técnico y Económico.</p>
                        <a href="https://procurement-notices.undp.org/view_negotiation.cfm?nego_id=16856" target="_blank" rel="noopener noreferrer" class="oport-link">
                            Ver vacantes
                            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="oport-card">
                    <div class="oport-img">
                        <img src="/wp-content/uploads/2025/08/Marketing.jpg" alt="SDC/COPs4/OCP-002-2024">
                    </div>
                    <div class="oport-body">
                        <h3 class="oport-title">SDC/COPs4/OCP-002-2024</h3>
                        <p class="oport-desc">Desarrollo de la nueva plataforma del Registro de Emisiones y Transferencia de Contaminantes <strong>(RETC)</strong> para Honduras.</p>
                        <a href="https://empleos.hn/jobs/sdccops4ocp-002-2024-desarrollo-de-la-nueva" target="_blank" rel="noopener noreferrer" class="oport-link">
                            Participar
                            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =============================================
         CTA AYUDA
    ============================================= -->
    <div class="container">
        <div class="ayuda-cta">
            <div class="ayuda-cta-inner">
                <h2>¿Necesitas ayuda con tu aplicación?</h2>
                <p>Nuestro equipo está disponible para ayudarte durante todo el proceso. No dudes en contactarnos.</p>
                <div class="ayuda-actions">
                    <a href="/contacto" class="btn-cta-white">
                        Contactar Soporte
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                    <a href="/nosotros/faq" class="btn-cta-outline">
                        Preguntas Frecuentes
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>