<?php
/**
 * Template Name: Contact Template
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

.contacto-page {
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
    margin-bottom: 14px;
}
.section-label.centered { justify-content: center; }

.section-title {
    font-size: clamp(22px, 3.5vw, 32px);
    font-weight: 700;
    color: var(--navy);
    line-height: 1.18;
    margin: 0 0 14px;
}

.gold-divider {
    width: 48px;
    height: 2px;
    background: var(--gold);
    border-radius: 2px;
    margin: 0 0 28px;
}
.gold-divider.centered { margin: 0 auto 28px; }

/* ============================================
   HERO
   ============================================ */
.contacto-hero {
    position: relative;
    background: linear-gradient(135deg, #1d2e68 0%, var(--navy) 40%, var(--blue) 100%);
    overflow: hidden;
    padding: 96px 0 0;
}

.contacto-hero::after {
    content: '';
    display: block;
    height: 2px;
    background: linear-gradient(90deg, transparent, var(--gold) 30%, var(--gold-dark) 70%, transparent);
    opacity: 0.75;
}

/* ── Patrón de puntos — igual que homepage ── */
.contacto-hero-stars {
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

.contacto-hero-watermark {
    position: absolute;
    inset: 0;
    pointer-events: none;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 4%;
    z-index: 2;
}
.contacto-hero-watermark img {
    width: min(260px, 28%);
    opacity: 0.06;
    filter: brightness(20) grayscale(1);
    object-fit: contain;
    user-select: none;
}

.contacto-hero-orbs {
    position: absolute;
    inset: 0;
    z-index: 2;
    overflow: hidden;
    pointer-events: none;
}
.contacto-hero-orbs span {
    position: absolute;
    border-radius: 50%;
    filter: blur(80px);
    opacity: 0.18;
    animation: orb-pulse 6s ease-in-out infinite;
}
.contacto-hero-orbs span:nth-child(1) { width: 340px; height: 340px; background: #87cede; top: -80px; left: -60px; }
.contacto-hero-orbs span:nth-child(2) { width: 300px; height: 300px; background: #87cede; bottom: -60px; right: -40px; animation-delay: 3s; }
.contacto-hero-orbs span:nth-child(3) { width: 260px; height: 260px; background: #7dbb5c; bottom: -40px; left: 25%; animation-delay: 5s; }

@keyframes orb-pulse {
    0%, 100% { opacity: 0.18; transform: scale(1); }
    50%       { opacity: 0.28; transform: scale(1.08); }
}

.contacto-hero-inner {
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

.contacto-hero-title {
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

.contacto-hero-sub {
    font-family: 'DM Sans', sans-serif;
    font-size: clamp(16px, 2vw, 20px);
    color: rgba(255,255,255,0.80);
    max-width: 520px;
    margin: 0 auto 64px;
    line-height: 1.6;
}

.contacto-hero-wave {
    position: relative;
    z-index: 10;
    line-height: 0;
    margin-top: -2px;
}
.contacto-hero-wave svg { display: block; width: 100%; }

/* ============================================
   CONTENIDO PRINCIPAL
   ============================================ */
.contacto-main {
    padding: 80px 0 96px;
    position: relative;
}
.contacto-main::before {
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

.contacto-grid {
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: 32px;
    align-items: start;
    position: relative;
    z-index: 1;
}

@media (max-width: 900px) {
    .contacto-grid { grid-template-columns: 1fr; }
}

/* ============================================
   SIDEBAR — INFO + REDES
   ============================================ */
.info-card,
.social-card {
    background: #ffffff;
    border: 1px solid var(--border);
    border-radius: 12px;
    padding: 32px 28px;
    box-shadow: var(--shadow);
}
.social-card { margin-top: 24px; }

.info-card-title,
.social-card-title {
    font-size: 18px;
    font-weight: 700;
    color: var(--navy);
    margin: 0 0 10px;
    padding-bottom: 10px;
    border-bottom: 2px solid var(--gold);
    display: inline-block;
}

.info-items {
    display: flex;
    flex-direction: column;
    gap: 20px;
    margin-top: 20px;
}

.info-item {
    display: flex;
    align-items: flex-start;
    gap: 14px;
}

.info-icon {
    width: 42px; height: 42px;
    background: linear-gradient(135deg, var(--navy), var(--blue));
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.info-icon svg { width: 20px; height: 20px; color: white; }

.info-label {
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    color: var(--navy);
    margin-bottom: 3px;
}
.info-value {
    font-family: 'DM Sans', sans-serif;
    font-size: 14.5px;
    color: var(--text-soft);
    line-height: 1.5;
}

/* Redes sociales */
.social-links {
    display: flex;
    gap: 10px;
    margin-top: 20px;
    flex-wrap: wrap;
}

.social-link {
    width: 42px; height: 42px;
    background: var(--bone);
    border: 1px solid var(--border);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--navy);
    text-decoration: none;
    transition: background 0.2s, color 0.2s, transform 0.18s, border-color 0.2s;
    font-size: 16px;
}
.social-link:hover {
    background: var(--navy);
    color: #ffffff;
    border-color: var(--navy);
    transform: translateY(-3px);
}

/* ============================================
   FORMULARIO
   ============================================ */
.form-card {
    background: #ffffff;
    border: 1px solid var(--border);
    border-radius: 12px;
    padding: 40px 36px;
    box-shadow: var(--shadow);
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}
@media (max-width: 560px) { .form-row { grid-template-columns: 1fr; } }

.form-group {
    display: flex;
    flex-direction: column;
    gap: 7px;
    margin-bottom: 20px;
}
.form-group:last-child { margin-bottom: 0; }

.form-label {
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    color: var(--navy);
}

.form-input,
.form-select,
.form-textarea {
    width: 100%;
    padding: 12px 16px;
    font-family: 'DM Sans', sans-serif;
    font-size: 14.5px;
    color: var(--text);
    background: var(--bone);
    border: 1.5px solid rgba(38, 61, 128, 0.15);
    border-radius: 8px;
    outline: none;
    transition: border-color 0.2s, background 0.2s, box-shadow 0.2s;
    -webkit-appearance: none;
}
.form-input:focus,
.form-select:focus,
.form-textarea:focus {
    border-color: var(--blue);
    background: #ffffff;
    box-shadow: 0 0 0 3px rgba(38, 77, 160, 0.10);
}
.form-textarea { resize: vertical; min-height: 140px; }

/* Select con flecha personalizada */
.form-select-wrap { position: relative; }
.form-select-wrap::after {
    content: '';
    position: absolute;
    right: 14px;
    top: 50%;
    transform: translateY(-50%);
    width: 0; height: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 6px solid var(--navy);
    pointer-events: none;
    opacity: 0.6;
}

/* Botón enviar */
.btn-submit {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 13px 32px;
    background: var(--navy);
    color: #ffffff;
    font-family: 'Outfit', sans-serif;
    font-weight: 700;
    font-size: 15px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background 0.22s, transform 0.18s, box-shadow 0.22s;
    box-shadow: 0 4px 16px rgba(38, 61, 128, 0.25);
    position: relative;
    overflow: hidden;
}
.btn-submit::after {
    content: '';
    position: absolute;
    bottom: 4px; left: 16px; right: 16px;
    height: 1.5px;
    background: var(--gold);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.25s ease;
    border-radius: 2px;
}
.btn-submit:hover {
    background: var(--blue);
    transform: translateY(-2px);
    box-shadow: 0 8px 28px rgba(38, 61, 128, 0.3);
}
.btn-submit:hover::after { transform: scaleX(1); }
.btn-submit svg { width: 16px; height: 16px; }

/* Mensajes de estado */
.form-alert {
    display: none;
    padding: 14px 18px;
    border-radius: 8px;
    font-family: 'DM Sans', sans-serif;
    font-size: 14.5px;
    font-weight: 600;
    margin-top: 20px;
    align-items: center;
    gap: 10px;
}
.form-alert.visible { display: flex; }
.form-alert.success {
    background: rgba(34, 197, 94, 0.10);
    border: 1px solid rgba(34, 197, 94, 0.35);
    color: #166534;
}
.form-alert.error {
    background: rgba(239, 68, 68, 0.08);
    border: 1px solid rgba(239, 68, 68, 0.3);
    color: #991b1b;
}
.form-alert svg { width: 18px; height: 18px; flex-shrink: 0; }

/* ============================================
   MAPA
   ============================================ */
.contacto-mapa {
    padding: 0 0 96px;
    position: relative;
    z-index: 1;
}

.mapa-header { text-align: center; margin-bottom: 40px; }

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
    .contacto-hero { padding: 72px 0 0; }
    .contacto-main { padding: 56px 0 64px; }
    .form-card { padding: 28px 20px; }
    .info-card, .social-card { padding: 24px 20px; }
}
</style>

<div class="contacto-page">

    <!-- =============================================
         HERO
    ============================================= -->
    <section class="contacto-hero">

        <!-- Patrón de puntos (reemplaza estrellas) -->
        <div class="contacto-hero-stars" aria-hidden="true"></div>

        <div class="contacto-hero-watermark" aria-hidden="true">
            <img src="/wp-content/uploads/2026/02/cropped-Logo-Gobierno.png" alt="">
            <img src="/wp-content/uploads/2026/02/cropped-Logo-Gobierno.png" alt="">
        </div>

        <div class="contacto-hero-orbs" aria-hidden="true">
            <span></span><span></span><span></span>
        </div>

        <div class="container contacto-hero-inner">
            <div class="hero-badge">
                <span class="hero-badge-dot"></span>
                Atención Ciudadana
            </div>
            <h1 class="contacto-hero-title">Contáctenos</h1>
            <p class="contacto-hero-sub">¿Tienes alguna pregunta o comentario? Estamos aquí para ayudarte.</p>
        </div>

        <div class="contacto-hero-wave">
            <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <path d="M0 0 C360 80 1080 80 1440 0 L1440 80 L0 80 Z" fill="#F8F7F3"/>
            </svg>
        </div>
    </section>

    <!-- =============================================
         CONTENIDO
    ============================================= -->
    <section class="contacto-main">
        <div class="container">
            <div class="contacto-grid">

                <!-- ── Sidebar ── -->
                <div>

                    <!-- Info de contacto -->
                    <div class="info-card">
                        <p class="section-label">
                            <span class="gold-rule" style="width:28px"></span>
                            Datos
                        </p>
                        <h2 class="section-title" style="font-size:20px; margin-bottom:0">Información de Contacto</h2>
                        <div class="gold-divider" style="margin-top:10px; margin-bottom:0"></div>

                        <div class="info-items">

                            <div class="info-item">
                                <div class="info-icon">
                                    <svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="info-label">Email</div>
                                    <div class="info-value">contacto@serna.gob.hn</div>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="info-icon">
                                    <svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="info-label">Teléfono</div>
                                    <div class="info-value">+504 2232-9200</div>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="info-icon">
                                    <svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="info-label">Ubicación</div>
                                    <div class="info-value">Edificio Santa Fe, Colonia Castaño Sur, Tegucigalpa</div>
                                </div>
                            </div>

                            <div class="info-item">
                                <div class="info-icon">
                                    <svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="info-label">Horario</div>
                                    <div class="info-value">Lun – Vie: 7:30 AM – 3:30 PM</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Redes sociales -->
                    <div class="social-card">
                        <p class="section-label">
                            <span class="gold-rule" style="width:28px"></span>
                            Síguenos
                        </p>
                        <h2 class="section-title" style="font-size:20px; margin-bottom:0">Redes Sociales</h2>
                        <div class="gold-divider" style="margin-top:10px; margin-bottom:0"></div>
                        <div class="social-links">

                            <!-- Facebook -->
                            <a href="https://www.facebook.com/sernaHN/?locale=es_LA" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="Facebook">
                                <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>
                                </svg>
                            </a>

                            <!-- Twitter / X -->
                            <a href="https://x.com/sernaHN" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="Twitter / X">
                                <svg width="17" height="17" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                </svg>
                            </a>

                            <!-- Instagram -->
                            <a href="https://www.instagram.com/sernahn" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="Instagram">
                                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
                                </svg>
                            </a>

                            <!-- TikTok -->
                            <a href="https://www.tiktok.com/@sernahn" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="TikTok">
                                <svg width="17" height="17" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.32 6.32 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.69a8.18 8.18 0 004.79 1.54V6.79a4.85 4.85 0 01-1.02-.1z"/>
                                </svg>
                            </a>

                        </div>
                    </div>

                </div>

                <!-- ── Formulario ── -->
                <div class="form-card">
                    <p class="section-label">
                        <span class="gold-rule" style="width:28px"></span>
                        Escríbenos
                    </p>
                    <h2 class="section-title" style="margin-bottom:0">Envíanos un mensaje</h2>
                    <div class="gold-divider" style="margin-top:10px"></div>

                    <form id="contact-form">
                        <?php wp_nonce_field('contact_form_nonce', 'contact_nonce'); ?>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label" for="first_name">Nombre</label>
                                <input class="form-input" type="text" id="first_name" name="first_name" placeholder="Juan" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="last_name">Apellido</label>
                                <input class="form-input" type="text" id="last_name" name="last_name" placeholder="Pérez" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="email">Correo electrónico</label>
                            <input class="form-input" type="email" id="email" name="email" placeholder="correo@ejemplo.com" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="phone">Teléfono <span style="font-weight:400; opacity:.6">(opcional)</span></label>
                            <input class="form-input" type="tel" id="phone" name="phone" placeholder="+504 0000-0000">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="subject">Asunto</label>
                            <div class="form-select-wrap">
                                <select class="form-select" id="subject" name="subject" required>
                                    <option value="">Selecciona un asunto</option>
                                    <option value="general">Consulta general</option>
                                    <option value="slas">Problema con SLAS</option>
                                    <option value="direccion ambiental">Dirección Ambiental</option>
                                    <option value="secretaria general">Secretaría General</option>
                                    <option value="otro">Otro</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="message">Mensaje</label>
                            <textarea class="form-textarea" id="message" name="message" placeholder="Escribe tu mensaje aquí..." required></textarea>
                        </div>

                        <button type="submit" class="btn-submit">
                            Enviar mensaje
                            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                        </button>

                        <!-- Mensajes -->
                        <div id="alert-success" class="form-alert success" role="alert">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Tu mensaje ha sido enviado correctamente. ¡Nos pondremos en contacto pronto!
                        </div>
                        <div id="alert-error" class="form-alert error" role="alert">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Hubo un problema al enviar tu mensaje. Por favor, inténtalo de nuevo.
                        </div>

                    </form>
                </div>

            </div><!-- /.contacto-grid -->

            <!-- ── Mapa ── -->
            <div class="contacto-mapa" style="margin-top: 80px;">
                <div class="mapa-header">
                    <p class="section-label centered">
                        <span class="gold-rule"></span>
                        Ubicación
                        <span class="gold-rule"></span>
                    </p>
                    <h2 class="section-title" style="text-align:center; font-size: clamp(24px,3.5vw,34px);">Estamos aquí</h2>
                    <div class="gold-divider centered"></div>
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

        </div>
    </section>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var form    = document.getElementById('contact-form');
    var success = document.getElementById('alert-success');
    var error   = document.getElementById('alert-error');

    if (!form) return;

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        success.classList.remove('visible');
        error.classList.remove('visible');

        var formData = new FormData(form);
        formData.append('action', 'process_contact_form');

        fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
            method: 'POST',
            body: formData
        })
        .then(function (r) { return r.json(); })
        .then(function (data) {
            if (data.success) {
                success.classList.add('visible');
                form.reset();
            } else {
                error.classList.add('visible');
            }
        })
        .catch(function () {
            error.classList.add('visible');
        });
    });
});
</script>

<?php get_footer(); ?>