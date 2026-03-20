import React, { useState, useEffect, useRef } from "react";

function NavbarComponent() {
  const [isMenuOpen, setIsMenuOpen] = useState(false);
  const [activeDropdown, setActiveDropdown] = useState(null);
  const [scrolled, setScrolled] = useState(false);
  const [activeItem, setActiveItem] = useState(null);
  const closeTimer = useRef(null);

  useEffect(() => {
    const handleScroll = () => setScrolled(window.scrollY > 10);
    window.addEventListener("scroll", handleScroll);
    return () => window.removeEventListener("scroll", handleScroll);
  }, []);

  const handleMouseEnter = (name) => {
    if (closeTimer.current) clearTimeout(closeTimer.current);
    setActiveDropdown(name);
  };

  const handleMouseLeave = () => {
    closeTimer.current = setTimeout(() => setActiveDropdown(null), 120);
  };

  const toggleMenu = () => setIsMenuOpen(!isMenuOpen);
  const toggleDropdown = (dropdown) =>
    setActiveDropdown(activeDropdown === dropdown ? null : dropdown);

  const navItems = [
    { name: "Inicio", link: "/", hasDropdown: false },
    {
      name: "Nosotros",
      link: "/nosotros",
      hasDropdown: true,
      columns: [
        {
          title: "Sobre Nosotros",
          items: [
            { name: "Perfil", link: "/nosotros/perfil" },
            { name: "Comite de Control Interno", link: "/nosotros/cocoin" },
            { name: "Comite de Probidad y Etica Publica", link: "/nosotros/cepep" },
            { name: "Organigrama", link: "/nosotros/organigrama" },
          ],
        },
        {
          title: "Recursos",
          items: [
            { name: "Oportunidades", link: "/nosotros/oportunidades" },
            { name: "Foro", link: "/nosotros/foro" },
            { name: "Preguntas Frecuentes", link: "/nosotros/faq" },
            { name: "Contacto", link: "/contacto" },
          ],
        },
      ],
    },
    {
      name: "Webmail",
      link: "https://login.microsoftonline.com/",
      hasDropdown: false,
      external: true,
    },
    { name: "Licenciamiento Ambiental", link: "/slas", hasDropdown: false },
    {
      name: "Direcciones",
      link: "/direcciones",
      hasDropdown: true,
      columns: [
        {
          title: "CESCCO",
          link: "/direcciones/cescco",
          items: [
            { name: "Anuncios", link: "/direcciones/cescco/anuncios" },
            { name: "RAEE", link: "/direcciones/cescco/rae" },
            { name: "RETC", link: "https://hn-serna-retc.web.app/", external: true },
            { name: "Registro Aguas Residuales", link: "https://docs.google.com/forms/", external: true },
          ],
        },
        {
          title: "Otras Direcciones",
          items: [
            { name: "DGA", link: "/direcciones/dga" },
            { name: "DNCC", link: "/direcciones/dncc" },
            { name: "DGRH", link: "/direcciones/dgrh" },
            { name: "DIBIO", link: "/direcciones/dibio" },
            { name: "UTOH", link: "/direcciones/utoh" },
          ],
        },
        {
          title: "Deca",
          link: "/direcciones/deca",
          items: [
            { name: "Anuncios Deca", link: "/direcciones/deca/anuncios-deca" },
            { name: "Nuevos Requisitos SLAS", link: "/direcciones/deca/nuevos-requisitos-slas" },
            { name: "Requisitos de Renovacion", link: "/direcciones/deca/requisitos-de-renovacion-licencia-ambiental" },
            { name: "Constancia No Requerir Licencia", link: "/direcciones/deca/requisitos-de-constancia-de-no-requerir-licencia-ambiental" },
          ],
        },
      ],
    },
    {
      name: "Regionales",
      link: "/regionales",
      hasDropdown: true,
      columns: [
        {
          title: "Norte y Centro",
          items: [
            { name: "Comayagua", link: "/regionales/comayagua" },
            { name: "Regional San Pedro Sula", link: "/regionales/regional-san-pedro-sula" },
            { name: "Regional del Litoral Atlantico", link: "/regionales/regional-litoral-del-atlantico" },
            { name: "Regional Insular", link: "/regionales/regional-insular" },
          ],
        },
        {
          title: "Sur y Este",
          items: [
            { name: "Regional Choluteca", link: "/regionales/regional-choluteca" },
            { name: "Regional Olancho", link: "/regionales/regional-olancho" },
          ],
        },
        {
          title: "Occidente",
          items: [
            { name: "Regional Ocotepeque", link: "/regionales/regional-ocotepeque" },
            { name: "Regional Copan", link: "/regionales/regional-copan" },
          ],
        },
      ],
    },
    {
      name: "OCP",
      link: "/ocp",
      hasDropdown: true,
      columns: [
        {
          title: "",
          items: [
            { name: "ADAPTARC+", link: "/ocp/adaptarce" },
            { name: "CONECTA+", link: "/ocp/conecta" },
            { name: "COPS4", link: "/ocp/cops4" },
          ],
        },
        {
          title: "",
          items: [
            { name: "Proyecto Motagua", link: "/ocp/proyecto-motagua" },
            { name: "Recover", link: "/ocp/recover" },
            { name: "PlanetGold", link: "/ocp/planet-gold" },
            { name: "Proyecto Goascoran", link: "/ocp/goascoran" },
          ],
        },
      ],
    },
    {
      name: "Portales",
      link: "/portales",
      hasDropdown: true,
      columns: [
        {
          title: "Portales Gubernamentales",
          items: [
            { name: "SIELHO", link: "https://sielho.iaip.gob.hn/inicio/", external: true },
            { name: "Portal Unico de Transparencia", link: "https://portalunico.iaip.gob.hn/", external: true },
            { name: "Presidencia", link: "https://presidencia.gob.hn/", external: true },
          ],
        },
        {
          title: "Portales Institucionales",
          items: [
            { name: "ONADICI", link: "https://www.onadici.gob.hn/", external: true },
            { name: "Honducompras", link: "https://www.honducompras.gob.hn/", external: true },
            { name: "TSC", link: "https://www.tsc.gob.hn/", external: true },
          ],
        },
      ],
    },
  ];

  const getGridCols = (columns) => {
    switch (columns.length) {
      case 1: return "grid-cols-1";
      case 2: return "grid-cols-2";
      case 3: return "grid-cols-3";
      case 4: return "grid-cols-4";
      default: return "grid-cols-3";
    }
  };

  return (
    <>
      <style>{`
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap');

        .nav-root * { box-sizing: border-box; }

        .nav-root {
          font-family: 'Outfit', sans-serif;
        }

        /* ── Header ── */
        .serna-header {
          background: #ffffff;
          border-bottom: 1px solid rgba(38, 61, 128, 0.08);
          padding: 14px 0;
        }
        .serna-header-inner {
          max-width: 1280px;
          margin: 0 auto;
          padding: 0 24px;
          display: flex;
          align-items: center;
          justify-content: center;
        }
        .serna-logo { height: 56px; display: block; }

        /* ── Sticky Nav ── */
        .serna-nav {
          position: sticky;
          top: 0;
          z-index: 100;
          width: 100%;
          background: linear-gradient(135deg, #263b80 0%, #264da0 100%);
          transition: box-shadow 0.3s ease, backdrop-filter 0.3s ease;
        }
        .serna-nav.scrolled {
          box-shadow: 0 4px 32px rgba(38, 61, 128, 0.35);
          backdrop-filter: blur(12px);
        }

        /* thin gold accent line under nav */
        .serna-nav::after {
          content: '';
          display: block;
          height: 2px;
          background: linear-gradient(90deg, transparent, #e3a220 30%, #ad8411 70%, transparent);
          opacity: 0.7;
        }

        .serna-nav-inner {
          max-width: 1280px;
          margin: 0 auto;
          padding: 0 24px;
          display: flex;
          align-items: center;
          justify-content: center;
          height: 58px;
        }

        /* ── Desktop Nav Items ── */
        .desktop-nav {
          display: flex;
          align-items: center;
          gap: 2px;
        }

        .nav-item-wrap {
          position: relative;
        }

        .nav-btn, .nav-link {
          display: inline-flex;
          align-items: center;
          gap: 5px;
          padding: 8px 13px;
          font-family: 'Outfit', sans-serif;
          font-size: 13.5px;
          font-weight: 500;
          letter-spacing: 0.015em;
          color: rgba(255,255,255,0.92);
          background: transparent;
          border: none;
          border-radius: 6px;
          cursor: pointer;
          text-decoration: none;
          transition: color 0.2s, background 0.2s;
          white-space: nowrap;
          position: relative;
        }

        .nav-btn::before, .nav-link::before {
          content: '';
          position: absolute;
          bottom: 4px;
          left: 13px;
          right: 13px;
          height: 1.5px;
          background: #e3a220;
          transform: scaleX(0);
          transform-origin: left;
          transition: transform 0.25s ease;
          border-radius: 2px;
        }

        .nav-btn:hover, .nav-link:hover,
        .nav-btn.active, .nav-link.active {
          color: #fff;
          background: rgba(255,255,255,0.10);
        }

        .nav-btn:hover::before, .nav-link:hover::before,
        .nav-btn.active::before, .nav-link.active::before {
          transform: scaleX(1);
        }

        .nav-chevron {
          width: 14px;
          height: 14px;
          transition: transform 0.25s ease;
          opacity: 0.8;
          flex-shrink: 0;
        }
        .nav-btn.active .nav-chevron {
          transform: rotate(180deg);
        }

        /* ── Mega Menu ── */
        .mega-menu {
          position: absolute;
          top: calc(100% + 10px);
          left: 50%;
          transform: translateX(-50%);
          background: #ffffff;
          border-radius: 12px;
          box-shadow: 0 8px 48px rgba(38, 61, 128, 0.18), 0 2px 8px rgba(0,0,0,0.08);
          padding: 24px;
          z-index: 200;
          border: 1px solid rgba(38, 77, 160, 0.10);
          opacity: 0;
          visibility: hidden;
          transform: translateX(-50%) translateY(-6px);
          transition: opacity 0.2s ease, transform 0.2s ease, visibility 0.2s;
          pointer-events: none;
        }

        .mega-menu::before {
          content: '';
          position: absolute;
          top: -6px;
          left: 50%;
          transform: translateX(-50%);
          width: 12px;
          height: 12px;
          background: white;
          border-left: 1px solid rgba(38, 77, 160, 0.10);
          border-top: 1px solid rgba(38, 77, 160, 0.10);
          transform: translateX(-50%) rotate(45deg);
        }

        .mega-menu.open {
          opacity: 1;
          visibility: visible;
          transform: translateX(-50%) translateY(0);
          pointer-events: all;
        }

        .mega-grid {
          display: grid;
          gap: 0;
        }

        .mega-col {
          padding: 0 20px;
          border-right: 1px solid rgba(38, 61, 128, 0.07);
        }
        .mega-col:first-child { padding-left: 4px; }
        .mega-col:last-child {
          border-right: none;
          padding-right: 4px;
        }

        .mega-col-title {
          font-family: 'Outfit', sans-serif;
          font-size: 11px;
          font-weight: 700;
          letter-spacing: 0.1em;
          text-transform: uppercase;
          color: #263b80;
          margin-bottom: 10px;
          padding-bottom: 8px;
          border-bottom: 2px solid #e3a220;
          display: inline-block;
          text-decoration: none;
        }
        a.mega-col-title:hover { color: #264da0; }

        .mega-col-items { list-style: none; margin: 0; padding: 0; display: flex; flex-direction: column; gap: 1px; }

        .mega-item-link {
          display: flex;
          align-items: center;
          justify-content: space-between;
          gap: 8px;
          padding: 7px 10px;
          border-radius: 6px;
          font-size: 13px;
          font-weight: 400;
          color: #374151;
          text-decoration: none;
          transition: background 0.15s, color 0.15s, padding-left 0.15s;
        }
        .mega-item-link:hover {
          background: linear-gradient(90deg, rgba(38,61,128,0.06), rgba(38,77,160,0.03));
          color: #263b80;
          padding-left: 14px;
        }

        .ext-icon {
          width: 11px;
          height: 11px;
          opacity: 0.45;
          flex-shrink: 0;
        }

        /* ── Mobile Toggle ── */
        .mobile-brand {
          font-family: 'Outfit', sans-serif;
          font-weight: 700;
          font-size: 18px;
          color: white;
          text-decoration: none;
          letter-spacing: 0.05em;
        }

        .hamburger-btn {
          background: rgba(255,255,255,0.10);
          border: 1px solid rgba(255,255,255,0.20);
          border-radius: 8px;
          padding: 8px;
          cursor: pointer;
          color: white;
          display: flex;
          align-items: center;
          justify-content: center;
          transition: background 0.2s;
        }
        .hamburger-btn:hover { background: rgba(255,255,255,0.18); }

        /* ── Mobile Menu drawer ── */
        .mobile-menu {
          background: #ffffff;
          border-top: 2px solid #e3a220;
          overflow: hidden;
          max-height: 0;
          transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .mobile-menu.open { max-height: 1200px; }

        .mobile-menu-inner {
          padding: 8px 12px 24px;
          display: flex;
          flex-direction: column;
          gap: 0;
        }

        /* plain link rows */
        .mobile-nav-link {
          display: flex;
          align-items: center;
          padding: 13px 12px;
          border-bottom: 1px solid rgba(38,61,128,0.07);
          font-size: 14.5px;
          font-weight: 500;
          color: #1e2d6b;
          text-decoration: none;
          transition: color 0.15s;
        }
        .mobile-nav-link:hover { color: #e3a220; }

        /* accordion trigger */
        .mobile-toggle-btn {
          width: 100%;
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding: 13px 12px;
          border-bottom: 1px solid rgba(38,61,128,0.07);
          font-family: 'Outfit', sans-serif;
          font-size: 14.5px;
          font-weight: 500;
          color: #1e2d6b;
          background: transparent;
          border-left: none;
          border-right: none;
          border-top: none;
          cursor: pointer;
          transition: color 0.15s;
        }
        .mobile-toggle-btn:hover { color: #e3a220; }
        .mobile-toggle-btn.mob-open { color: #263b80; border-bottom-color: transparent; }

        .mob-chevron {
          width: 16px;
          height: 16px;
          flex-shrink: 0;
          color: #263b80;
          transition: transform 0.28s ease;
        }
        .mob-open .mob-chevron { transform: rotate(180deg); }

        /* accordion panel */
        .mobile-sub-panel {
          overflow: hidden;
          max-height: 0;
          transition: max-height 0.35s cubic-bezier(0.4, 0, 0.2, 1);
          background: #f4f6fb;
          border-radius: 0 0 10px 10px;
          margin: 0 4px 6px;
        }
        .mobile-sub-panel.mob-panel-open { max-height: 1000px; }

        .mobile-sub-inner {
          padding: 10px 10px 14px;
          display: flex;
          flex-direction: column;
          gap: 12px;
        }

        /* column group inside panel */
        .mob-col-group {}

        .mob-col-label {
          font-size: 10px;
          font-weight: 700;
          letter-spacing: 0.12em;
          text-transform: uppercase;
          color: #263b80;
          padding: 6px 8px 5px;
          display: block;
          text-decoration: none;
          opacity: 0.7;
        }

        .mob-items-list {
          display: flex;
          flex-direction: column;
          gap: 2px;
        }

        .mob-item-link {
          display: flex;
          align-items: center;
          justify-content: space-between;
          padding: 9px 12px;
          border-radius: 7px;
          font-size: 13.5px;
          font-weight: 400;
          color: #263b80;
          background: white;
          text-decoration: none;
          border: 1px solid rgba(38,61,128,0.08);
          transition: background 0.15s, border-color 0.15s, color 0.15s;
        }
        .mob-item-link:hover {
          background: #263b80;
          color: white;
          border-color: #263b80;
        }
        .mob-item-link:hover .ext-icon { opacity: 0.7; }

        @media (min-width: 768px) {
          .mobile-only { display: none !important; }
        }
        @media (max-width: 767px) {
          .desktop-only { display: none !important; }
          .serna-nav-inner { justify-content: space-between; }
        }
      `}</style>

      <div className="nav-root">
        {/* ── Header ── */}
        <header className="serna-header">
          <div className="serna-header-inner">
            <img
              src="/wp-content/uploads/2026/02/v2-Horizontal-Color-SERNA-scaled.png"
              alt="SERNA"
              className="serna-logo"
            />
          </div>
        </header>

        {/* ── Sticky Nav ── */}
        <nav className={`serna-nav ${scrolled ? "scrolled" : ""}`}>
          <div className="serna-nav-inner">

            {/* Mobile brand + hamburger */}
            <a href="/" className="mobile-brand mobile-only">SERNA</a>
            <button
              className="hamburger-btn mobile-only"
              onClick={toggleMenu}
              aria-label="Abrir menú"
            >
              {isMenuOpen ? (
                <svg width="20" height="20" fill="none" stroke="currentColor" strokeWidth="2" viewBox="0 0 24 24">
                  <path strokeLinecap="round" strokeLinejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
              ) : (
                <svg width="20" height="20" fill="none" stroke="currentColor" strokeWidth="2" viewBox="0 0 24 24">
                  <path strokeLinecap="round" strokeLinejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
              )}
            </button>

            {/* Desktop menu */}
            <div className="desktop-nav desktop-only">
              {navItems.map((item, i) => (
                <div
                  key={i}
                  className="nav-item-wrap"
                  onMouseEnter={() => item.hasDropdown && handleMouseEnter(item.name)}
                  onMouseLeave={() => item.hasDropdown && handleMouseLeave()}
                >
                  {item.hasDropdown ? (
                    <>
                      <button
                        className={`nav-btn ${activeDropdown === item.name ? "active" : ""}`}
                        onClick={() => toggleDropdown(item.name)}
                      >
                        {item.name}
                        <svg className="nav-chevron" fill="none" stroke="currentColor" strokeWidth="2.5" viewBox="0 0 24 24">
                          <path strokeLinecap="round" strokeLinejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                      </button>

                      <div
                        className={`mega-menu ${activeDropdown === item.name ? "open" : ""}`}
                        onMouseEnter={() => handleMouseEnter(item.name)}
                        onMouseLeave={handleMouseLeave}
                        style={{ width: `${Math.min(item.columns.length * 220, 760)}px`, maxWidth: "92vw" }}
                      >
                        <div className={`mega-grid`} style={{ gridTemplateColumns: `repeat(${item.columns.length}, 1fr)` }}>
                          {item.columns.map((col, ci) => (
                            <div key={ci} className="mega-col">
                              {col.title && (
                                col.link
                                  ? <a href={col.link} className="mega-col-title">{col.title}</a>
                                  : <span className="mega-col-title">{col.title}</span>
                              )}
                              <ul className="mega-col-items">
                                {col.items.map((sub, si) => (
                                  <li key={si}>
                                    <a
                                      href={sub.link}
                                      target={sub.external ? "_blank" : undefined}
                                      rel={sub.external ? "noopener noreferrer" : undefined}
                                      className="mega-item-link"
                                    >
                                      {sub.name}
                                      {sub.external && (
                                        <svg className="ext-icon" fill="none" stroke="currentColor" strokeWidth="2" viewBox="0 0 24 24">
                                          <path strokeLinecap="round" strokeLinejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                        </svg>
                                      )}
                                    </a>
                                  </li>
                                ))}
                              </ul>
                            </div>
                          ))}
                        </div>
                      </div>
                    </>
                  ) : (
                    <a
                      href={item.link}
                      target={item.external ? "_blank" : undefined}
                      rel={item.external ? "noopener noreferrer" : undefined}
                      className="nav-link"
                    >
                      {item.name}
                    </a>
                  )}
                </div>
              ))}
            </div>
          </div>

          {/* Mobile sliding menu */}
          <div className={`mobile-menu mobile-only ${isMenuOpen ? "open" : ""}`}>
            <div className="mobile-menu-inner">
              {navItems.map((item, i) => {
                const isOpen = activeDropdown === item.name;
                return (
                  <div key={i}>
                    {item.hasDropdown ? (
                      <>
                        <button
                          className={`mobile-toggle-btn ${isOpen ? "mob-open" : ""}`}
                          onClick={() => toggleDropdown(item.name)}
                        >
                          <span>{item.name}</span>
                          <svg className="mob-chevron" fill="none" stroke="currentColor" strokeWidth="2.5" viewBox="0 0 24 24">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M19 9l-7 7-7-7"/>
                          </svg>
                        </button>

                        <div className={`mobile-sub-panel ${isOpen ? "mob-panel-open" : ""}`}>
                          <div className="mobile-sub-inner">
                            {item.columns.map((col, ci) => (
                              <div key={ci} className="mob-col-group">
                                {col.title && (
                                  col.link
                                    ? <a href={col.link} className="mob-col-label">{col.title}</a>
                                    : <span className="mob-col-label">{col.title}</span>
                                )}
                                <div className="mob-items-list">
                                  {col.items.map((sub, si) => (
                                    <a
                                      key={si}
                                      href={sub.link}
                                      target={sub.external ? "_blank" : undefined}
                                      rel={sub.external ? "noopener noreferrer" : undefined}
                                      className="mob-item-link"
                                    >
                                      {sub.name}
                                      {sub.external && (
                                        <svg className="ext-icon" fill="none" stroke="currentColor" strokeWidth="2" viewBox="0 0 24 24">
                                          <path strokeLinecap="round" strokeLinejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                        </svg>
                                      )}
                                    </a>
                                  ))}
                                </div>
                              </div>
                            ))}
                          </div>
                        </div>
                      </>
                    ) : (
                      <a
                        href={item.link}
                        target={item.external ? "_blank" : undefined}
                        rel={item.external ? "noopener noreferrer" : undefined}
                        className="mobile-nav-link"
                      >
                        {item.name}
                      </a>
                    )}
                  </div>
                );
              })}
            </div>
          </div>
        </nav>
      </div>
    </>
  );
}

export default NavbarComponent;