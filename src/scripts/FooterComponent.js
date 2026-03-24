import React from "react";

function FooterComponent() {
  const socialLinks = [
    {
      name: "Facebook", url: "https://www.facebook.com/sernaHN/?locale=es_LA",
      icon: <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/></svg>
    },
    {
      name: "Twitter / X", url: "https://x.com/sernaHN",
      icon: <svg width="15" height="15" fill="currentColor" viewBox="0 0 16 16"><path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/></svg>
    },
    {
      name: "Instagram", url: "https://www.instagram.com/sernahn",
      icon: <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/></svg>
    },
    {
      name: "TikTok", url: "https://www.tiktok.com/@sernahn",
      icon: <svg width="14" height="14" fill="currentColor" viewBox="0 0 16 16"><path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/></svg>
    },
    {
      name: "YouTube", url: "https://www.youtube.com/@sernahn-gob",
      icon: <svg width="17" height="17" fill="currentColor" viewBox="0 0 16 16"><path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/></svg>
    },
  ];

  const infoBlocks = [
    { label: "Dirección", lines: ["Edificio Santa Fe, Colonia Castaño Sur,", "Tegucigalpa M.D.C., Honduras, C.A."] },
    { label: "Teléfono",  lines: ["(+504) 2232-9200"] },
    { label: "Horario",   lines: ["Lunes a Viernes", "7:30 A.M. – 3:30 P.M."] },
  ];

  const linkColumns = [
    {
      title: "Nosotros",
      links: [
        { name: "Perfil", url: "/nosotros/perfil" },
        { name: "Organigrama", url: "/nosotros/organigrama" },
        { name: "Oportunidades", url: "/nosotros/oportunidades" },
        { name: "Control Interno (COCOIN)", url: "/nosotros/cocoin" },
        { name: "Probidad y Ética (CEPEP)", url: "/nosotros/cepep" },
        { name: "Preguntas Frecuentes", url: "/nosotros/faq" },
        { name: "Te escuchamos", url: "/contacto" },
      ],
    },
    {
      title: "Direcciones",
      links: [
        { name: "CESCCO", url: "/direcciones/cescco" },
        { name: "UTOH",   url: "/direcciones/utoh"   },
        { name: "DIBIO",  url: "/direcciones/dibio"  },
        { name: "DGA",    url: "/direcciones/dga"    },
        { name: "DECA",   url: "/direcciones/deca"   },
        { name: "DNCC",   url: "/direcciones/dncc"   },
      ],
    },
    {
      title: "Regionales",
      links: [
        { name: "Copán",          url: "/regionales/regional-copan" },
        { name: "Comayagua",      url: "/regionales/comayagua" },
        { name: "Atlántico",      url: "/regionales/regional-litoral-del-atlantico" },
        { name: "Roatán",         url: "/regionales/regional-insular" },
        { name: "Choluteca",      url: "/regionales/regional-choluteca" },
        { name: "San Pedro Sula", url: "/regionales/regional-san-pedro-sula" },
        { name: "Ocotepeque",     url: "/regionales/regional-ocotepeque" },
        { name: "Olancho",        url: "/regionales/regional-olancho" },
      ],
    },
  ];

  return (
    <>
      <style>{`
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap');
        .footer-root { font-family: 'Outfit', sans-serif; }

        /* ── Wave ── */
        .footer-wave-wrap {
          width: 100%; overflow: hidden; line-height: 0;
          background: linear-gradient(90deg, #231f20 0%, #2d2828 16%, #4a4343 35%, #5d5757 55%, #666666 100%);
        }

        /* ── Body ── */
        .footer-body {
          background: linear-gradient(90deg, #231f20 0%, #2d2828 16%, #4a4343 35%, #5d5757 55%, #666666 100%);
          position: relative;
          overflow: hidden;
        }

        /* Subtle cross-hatch texture */
        .footer-body::before {
          content: '';
          position: absolute; inset: 0;
          background-image:
            repeating-linear-gradient(0deg, rgba(0,0,0,0.045) 0px, rgba(0,0,0,0.045) 1px, transparent 1px, transparent 32px),
            repeating-linear-gradient(90deg, rgba(0,0,0,0.03) 0px, rgba(0,0,0,0.03) 1px, transparent 1px, transparent 32px);
          pointer-events: none;
        }

        /* Dark panel removed — gradient handles depth */

        /* Gold accent bar */
        .footer-gold-bar {
          height: 3px; width: 100%;
          background: linear-gradient(90deg, #231f20 0%, #ad8411 15%, #e3a220 50%, #ad8411 85%, #231f20 100%);
          position: relative; z-index: 2;
        }

        .footer-inner {
          max-width: 1280px;
          margin: 0 auto;
          padding: 48px 32px 0;
          position: relative;
          z-index: 1;
        }

        /* ── Grid: [brand 230px] [1px divider] [info 210px] [nosotros 1fr] [dirs 1fr] [regionales 1fr] ── */
        .footer-grid {
          display: grid;
          grid-template-columns: 230px 1px 210px repeat(3, 1fr);
          align-items: start;
        }

        /* ── Brand ── */
        .footer-brand-cell {
          padding: 0 28px 44px 0;
          display: flex;
          flex-direction: column;
          gap: 22px;
        }
        .footer-logo { width: 138px; display: block; }

        .footer-tagline {
          font-size: 10.5px; font-weight: 300;
          letter-spacing: 0.13em; text-transform: uppercase;
          color: rgba(255,255,255,0.35); line-height: 1.8;
        }

        .social-row { display: flex; gap: 7px; flex-wrap: wrap; }

        .social-btn {
          width: 34px; height: 34px; border-radius: 50%;
          border: 1px solid rgba(255,255,255,0.16);
          background: rgba(255,255,255,0.05);
          color: rgba(255,255,255,0.55);
          display: flex; align-items: center; justify-content: center;
          text-decoration: none;
          transition: border-color .2s, background .2s, color .2s, transform .2s;
        }
        .social-btn:hover {
          border-color: #AD8411;
          background: rgba(173,132,17,0.16);
          color: #e3a220;
          transform: translateY(-2px);
        }

        /* Gold vertical divider */
        .footer-vdivider {
          background: linear-gradient(180deg, transparent, rgba(173,132,17,0.4) 15%, rgba(173,132,17,0.4) 85%, transparent);
          width: 1px;
          align-self: stretch;
        }

        /* ── Info col ── */
        .footer-info-cell {
          padding: 0 24px 44px 24px;
          border-right: 1px solid rgba(0,0,0,0.10);
        }

        /* ── Link cols ── */
        .footer-col {
          padding: 0 20px 44px 20px;
          border-right: 1px solid rgba(0,0,0,0.10);
        }
        .footer-col:last-child { border-right: none; }

        /* Column title */
        .f-title {
          font-size: 10px; font-weight: 700;
          letter-spacing: 0.18em; text-transform: uppercase;
          color: #AD8411;
          margin-bottom: 16px;
          display: flex; align-items: center; gap: 10px;
        }
        .f-title::after {
          content: ''; flex: 1; height: 1px;
          background: rgba(173,132,17,0.22); min-width: 8px;
        }

        /* Info blocks */
        .info-block { margin-bottom: 16px; }
        .info-block:last-child { margin-bottom: 0; }
        .info-label {
          font-size: 9px; font-weight: 700;
          letter-spacing: 0.18em; text-transform: uppercase;
          color: rgba(255,255,255,0.45); margin-bottom: 4px;
        }
        .info-line {
          font-size: 12.5px; font-weight: 300;
          color: rgba(255,255,255,0.78); line-height: 1.65;
        }

        /* Links */
        .f-links { list-style: none; margin: 0; padding: 0; display: flex; flex-direction: column; }
        .f-link {
          display: flex; align-items: center; gap: 6px;
          padding: 4.5px 0;
          font-size: 12.9px; font-weight: 400;
          color: rgba(255,255,255,0.68);
          text-decoration: none;
          transition: color .18s, gap .18s;
        }
        .f-dot {
          width: 3px; height: 3px; border-radius: 50%;
          background: #ad8411; flex-shrink: 0;
          opacity: 0; transition: opacity .18s;
        }
        .f-link:hover { color: #AD8411; gap: 9px; }
        .f-link:hover .f-dot { opacity: 1; }

        /* ── Bottom bar ── */
        .footer-bottom-wrap { position: relative; z-index: 1; }
        .footer-hdivider {
          max-width: 1280px; margin: 0 auto; padding: 0 32px;
        }
        .footer-hdivider hr {
          border: none; height: 1px;
          background: linear-gradient(90deg, transparent, rgba(173,132,17,0.4) 30%, rgba(173,132,17,0.4) 70%, transparent);
        }
        .footer-bottom {
          max-width: 1280px; margin: 0 auto;
          padding: 15px 32px 22px;
          display: flex; align-items: center;
          justify-content: space-between; gap: 12px; flex-wrap: wrap;
        }
        .footer-copy {
          font-size: 11px; font-weight: 300;
          color: rgba(255,255,255,0.32); letter-spacing: 0.02em;
        }
        .footer-copy strong { color: rgba(255,255,255,0.5); font-weight: 500; }
        .footer-blinks { display: flex; gap: 20px; }
        .footer-blink {
          font-size: 11px; font-weight: 300;
          color: rgba(255,255,255,0.30); text-decoration: none;
          transition: color .18s;
        }
        .footer-blink:hover { color: #AD8411; }

        /* ── Responsive ── */
        @media (max-width: 1050px) {
          .footer-grid { grid-template-columns: 210px 1px 190px repeat(3, 1fr); }
        }
        @media (max-width: 860px) {
          .footer-grid {
            grid-template-columns: 1fr 1fr 1fr;
            gap: 0;
          }
          .footer-brand-cell {
            grid-column: 1 / -1;
            flex-direction: row; flex-wrap: wrap;
            align-items: flex-start; gap: 28px;
            padding: 0 0 28px;
            border-bottom: 1px solid rgba(173,132,17,0.22);
            margin-bottom: 8px;
          }
          .footer-vdivider { display: none; }
          .footer-info-cell { padding: 0 16px 32px 0; border-right: 1px solid rgba(0,0,0,0.10); }
          .footer-col { padding: 0 16px 32px; }
        }
        @media (max-width: 560px) {
          .footer-grid { grid-template-columns: 1fr 1fr; }
          .footer-brand-cell { flex-direction: column; }
          .footer-inner { padding: 36px 18px 0; }
          .footer-bottom { flex-direction: column; align-items: center; text-align: center; }
          .footer-blinks { justify-content: center; }
          .footer-hdivider, .footer-bottom { padding-left: 18px; padding-right: 18px; }
        }
      `}</style>

      <div className="footer-root">
        {/* Wave transition */}
        <div className="footer-wave-wrap">
          <svg viewBox="0 0 1440 90" xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            style={{ display:"block", width:"100%", height:"clamp(36px,5vw,80px)" }}
            fill="white"
          >
            <path d="M0 0H1440V45L1380 42.5C1320 40 1200 35 1080 32.5C960 30 840 30 720 32.5C600 35 480 40 360 35C240 30 120 15 60 7.5L0 0Z"/>
          </svg>
        </div>

        <footer className="footer-body">
          <div className="footer-gold-bar" />

          <div className="footer-inner">
            <div className="footer-grid">

              {/* Brand */}
              <div className="footer-brand-cell">
                <img src="/wp-content/uploads/2026/02/Blanco-SERNA.png" alt="SERNA" className="footer-logo" />
                <p className="footer-tagline">Secretaría de Recursos<br/>Naturales y Ambiente<br/>Honduras, C.A.</p>
                <div className="social-row">
                  {socialLinks.map((s, i) => (
                    <a key={i} href={s.url} className="social-btn" aria-label={s.name} target="_blank" rel="noopener noreferrer">
                      {s.icon}
                    </a>
                  ))}
                </div>
              </div>

              {/* Vertical gold divider */}
              <div className="footer-vdivider" />

              {/* Info: Dirección + Contacto */}
              <div className="footer-info-cell">
                <h3 className="f-title">Información</h3>
                {infoBlocks.map((b, i) => (
                  <div key={i} className="info-block">
                    <p className="info-label">{b.label}</p>
                    {b.lines.map((l, j) => <p key={j} className="info-line">{l}</p>)}
                  </div>
                ))}
              </div>

              {/* Link columns */}
              {linkColumns.map((col, i) => (
                <div key={i} className="footer-col">
                  <h3 className="f-title">{col.title}</h3>
                  <ul className="f-links">
                    {col.links.map((link, j) => (
                      <li key={j}>
                        <a href={link.url} className="f-link">
                          <span className="f-dot" />
                          {link.name}
                        </a>
                      </li>
                    ))}
                  </ul>
                </div>
              ))}

            </div>
          </div>

          {/* Bottom bar */}
          <div className="footer-bottom-wrap">
            <div className="footer-hdivider"><hr /></div>
            <div className="footer-bottom">
              <p className="footer-copy">
                &copy; {new Date().getFullYear()} <strong>SERNA</strong> — Todos los derechos reservados.
              </p>
              {/* <div className="footer-blinks">
                <a href="/privacidad"    className="footer-blink">Privacidad</a>
                <a href="/terminos"      className="footer-blink">Términos de uso</a>
                <a href="/accesibilidad" className="footer-blink">Accesibilidad</a>
              </div> */}
            </div>
          </div>
        </footer>
      </div>
    </>
  );
}

export default FooterComponent;