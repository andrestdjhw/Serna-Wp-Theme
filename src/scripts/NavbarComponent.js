import React, { useState } from "react";

function NavbarComponent() {
  const [isMenuOpen, setIsMenuOpen] = useState(false);
  const [activeDropdown, setActiveDropdown] = useState(null);

  const toggleMenu = () => {
    setIsMenuOpen(!isMenuOpen);
  };

  const toggleDropdown = (dropdown) => {
    if (activeDropdown === dropdown) {
      setActiveDropdown(null);
    } else {
      setActiveDropdown(dropdown);
    }
  };

  // Calcula cuadricula de columnas basado en numero de columnas
  const getGridColumnsClass = (columns) => {
    switch(columns.length) {
      case 1: return 'grid-cols-1';
      case 2: return 'grid-cols-1 md:grid-cols-2';
      case 3: return 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3';
      case 4: return 'grid-cols-1 md:grid-cols-2 lg:grid-cols-4';
      default: return 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3';
    }
  };

  // Estructura de datos de la barra de navegacion
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
            { name: "Contacto", link: "/contacto" }
          ],
        },
      ],
    },
    { name: "Webmail", link: "https://login.microsoftonline.com/common/oauth2/v2.0/authorize?client_id=9199bf20-a13f-4107-85dc-02114787ef48&scope=https%3A%2F%2Foutlook.office.com%2F.default%20openid%20profile%20offline_access&redirect_uri=https%3A%2F%2Foutlook.live.com%2Fmail%2F&client-request-id=cbf620c2-64c5-a43e-227e-d0b69d75a947&response_mode=fragment&client_info=1&prompt=select_account&nonce=019852b6-5247-7c5a-8586-495d1d0d1196&state=eyJpZCI6IjAxOTg1MmI2LTUyNDctN2UyZS05NTI2LTY5NjdkMjRkMGRjNCIsIm1ldGEiOnsiaW50ZXJhY3Rpb25UeXBlIjoicmVkaXJlY3QifX0%3D&claims=%7B%22access_token%22%3A%7B%22xms_cc%22%3A%7B%22values%22%3A%5B%22CP1%22%5D%7D%7D%7D&x-client-SKU=msal.js.browser&x-client-VER=4.14.0&response_type=code&code_challenge=V_FtD9t6XFT0Qv-_dqA3NxghrtQ_pMuhPgSiLeKkGt0&code_challenge_method=S256&cobrandid=ab0455a0-8d03-46b9-b18b-df2f57b9e44c&fl=dob,flname,wld&sso_reload=true", hasDropdown: false , external: true},
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
            {
              name: "Requisitos de Renovacion de Licencia Ambiental",
              link: "/direcciones/deca/requisitos-de-renovacion-licencia-ambiental",
            },
            {
              name: "Requisito de constancia de no requerir licencia ambiental",
              link: "/direcciones/deca/requisitos-de-constancia-de-no-requerir-licencia-ambiental",
            },
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
            {
              name: "Regional del Litoral Atlantico",
              link: "/regionales/regional-litoral-del-atlantico",
            },
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
            { 
              name: "SIELHO", 
              link: "https://sielho.iaip.gob.hn/inicio/", 
              external: true 
            },
            {
              name: "Portal Unico de Transparencia",
              link: "https://portalunico.iaip.gob.hn/",
              external: true
            },
            { 
              name: "Presidencia", 
              link: "https://presidencia.gob.hn/",
              external: true 
            },
          ],
        },
        {
          title: "Portales Institucionales",
          items: [
            { 
              name: "ONADICI", 
              link: "https://www.onadici.gob.hn/",
              external: true 
            },
            { 
              name: "Honducompras", 
              link: "https://www.honducompras.gob.hn/",
              external: true 
            },
            { 
              name: "TSC", 
              link: "https://www.tsc.gob.hn/",
              external: true 
            },
          ],
        },
      ],
    },
  ];

  return (
    <>
      {/* Encabezado con logo y titulo - NO es sticky, bajará con el scroll */}
      <header className="bg-[#333333] w-full border-b border-gray-200">
        <div className="max-w-7xl mx-auto px-4 py-4">
          {/*Emblema de Gobierno|Serna y titulos Centrados*/}
          <div className="flex flex-col items-center justify-center">
            <div className="flex items-center space-x-8">
              <img 
                src="/wp-content/uploads/2025/05/SERNA-Extendido-Blanco-768x274.png" 
                alt="Emblema de Honduras" 
                className="h-18"
              />   
            </div>
          </div>
        </div>
      </header>

      {/*Barra de Navegacion Con Gradiente Verde - STICKY */}
      <nav className="site-header sticky top-0 z-50 w-full shadow-md bg-gradient-to-t from-[#7dbb5c] to-[#00903b]">
        <div className="max-w-7xl mx-auto px-4">
          <div className="flex items-center justify-between h-16">
            {/* Logo/Marca seccion para Movil */}
            <div className="flex-shrink-0 md:hidden">
              <a href="/" className="text-white font-bold text-xl font-custom">
                SERNA
              </a>  
            </div>

            {/* Boton de Menu Movil */}
            <div className="flex md:hidden">
              <button
                onClick={toggleMenu}
                className="inline-flex items-center justify-center p-2 rounded-md text-white hover:bg-black/20 focus:outline-none"
                aria-expanded={isMenuOpen}
                aria-label="Toggle main menu"
              >
                {isMenuOpen ? (
                  <svg
                    className="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      strokeLinecap="round"
                      strokeLinejoin="round"
                      strokeWidth={2}
                      d="M6 18L18 6M6 6l12 12"
                    />
                  </svg>
                ) : (
                  <svg
                    className="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      strokeLinecap="round"
                      strokeLinejoin="round"
                      strokeWidth={2}
                      d="M4 6h16M4 12h16M4 18h16"
                    />
                  </svg>
                )}
              </button>
            </div>

            {/*Contenedor Menu Escritorio - CENTRADO */}
            <div className="hidden md:flex md:items-center md:justify-center md:flex-1">
              {/* Items(Elementos) del Menu - Centrados */}
              <div className="flex space-x-8">
                {navItems.map((item, index) => (
                  <div key={index} className="relative group">
                    {item.hasDropdown ? (
                      <>
                        <button
                          className="text-white hover:text-[#e3a220] font-custom transition-colors duration-200 flex items-center"
                          onMouseEnter={() => setActiveDropdown(item.name)}
                          onClick={() => toggleDropdown(item.name)}
                        >
                          {item.name}
                          <svg
                            className="ml-1 h-4 w-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                          >
                            <path
                              strokeLinecap="round"
                              strokeLinejoin="round"
                              strokeWidth={2}
                              d="M19 9l-7 7-7-7"
                            />
                          </svg>
                        </button>

                        {/* Dynamic Mega Menu */}
                        <div
                          className={`absolute top-full left-1/6 transform -translate-x-1/2 mt-1 rounded-md shadow-lg bg-white py-6 z-50 transition-all duration-200 ${
                            activeDropdown === item.name
                              ? "opacity-100 visible"
                              : "opacity-0 invisible"
                          }`}
                          onMouseEnter={() => setActiveDropdown(item.name)}
                          onMouseLeave={() => setActiveDropdown(null)}
                          style={{ 
                            width: `${Math.min(item.columns.length * 250, 800)}px`, 
                            maxWidth: "90vw" 
                          }}
                        >
                          <div className={`grid ${getGridColumnsClass(item.columns)} gap-4 px-6`}>
                            {item.columns.map((column, colIndex) => (
                              <div key={colIndex} className="space-y-4">
                                {column.link ? (
                                  <a 
                                    href={column.link}
                                    className="text-sm font-medium font-custom text-gray-900 hover:text-[#00903b]"
                                  >
                                    {column.title}
                                  </a>
                                ) : (
                                  <h3 className="text-sm font-medium font-custom text-gray-900">
                                    {column.title}
                                  </h3>
                                )}
                                <ul className="space-y-2">
                                  {column.items.map((subItem, subIndex) => (
                                    <li key={subIndex}>
                                      <a
                                        href={subItem.link}
                                        target={subItem.external ? "_blank" : undefined}
                                        rel={subItem.external ? "noopener noreferrer" : undefined}
                                        className="text-sm w-full flex justify-between items-center px-3 py-2 rounded-md text-[#00903b] hover:bg-green-700 hover:text-white transition-colors duration-200" 
                                      >
                                        {subItem.name}
                                        {subItem.external && (
                                          <svg 
                                            className="w-3 h-3 ml-1" 
                                            fill="none" 
                                            stroke="currentColor" 
                                            viewBox="0 0 24 24"
                                          >
                                            <path 
                                              strokeLinecap="round" 
                                              strokeLinejoin="round" 
                                              strokeWidth={2} 
                                              d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" 
                                            />
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
                        className="text-white hover:text-[#e3a220] font-custom transition-colors duration-200"
                      >
                        {item.name}
                      </a>
                    )}
                  </div>
                ))}
              </div>
            </div>
          </div>
        </div>

        {/* Menu Dispositivos Moviles */}
        <div className={`md:hidden ${isMenuOpen ? "block" : "hidden"}`}>
          <div className="px-2 pt-2 pb-3 space-y-1 bg-gray-50">
            {navItems.map((item, index) => (
              <div key={index} className="w-full">
                {item.hasDropdown ? (
                  <>
                    <button
                      onClick={() => toggleDropdown(item.name)}
                      className="w-full flex justify-between items-center px-3 py-2 rounded-md text-[#00903b] hover:bg-green-700 hover:text-white transition-colors duration-200"
                    >
                      {item.name}
                      <svg
                        className={`ml-1 h-4 w-4 transition-transform duration-200 ${
                          activeDropdown === item.name
                            ? "transform rotate-180"
                            : ""
                        }`}
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          strokeLinecap="round"
                          strokeLinejoin="round"
                          strokeWidth={2}
                          d="M19 9l-7 7-7-7"
                        />
                      </svg>
                    </button>
                    {activeDropdown === item.name && (
                      <div className="pl-4 py-2 space-y-1">
                        {item.columns.map((column, colIndex) => (
                          <div key={colIndex} className="mb-2">
                            <div className="px-3 py-1 font-medium text-sm">
                              {column.title}
                            </div>
                            {column.items.map((subItem, subIndex) => (
                              <a
                                key={subIndex}
                                href={subItem.link}
                                target={subItem.external ? "_blank" : undefined}
                                rel={subItem.external ? "noopener noreferrer" : undefined}
                                className="flex items-center justify-between px-3 py-2 rounded-md text-black bg-[#7dbb5c] hover:bg-[#00903b] hover:text-white transition-colors duration-200 my-1"
                              >
                                {subItem.name}
                                {subItem.external && (
                                  <svg 
                                    className="w-3 h-3 ml-1" 
                                    fill="none" 
                                    stroke="currentColor" 
                                    viewBox="0 0 24 24"
                                  >
                                    <path 
                                      strokeLinecap="round" 
                                      strokeLinejoin="round" 
                                      strokeWidth={2} 
                                      d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" 
                                    />
                                  </svg>
                                )}
                              </a>
                            ))}
                          </div>
                        ))}
                      </div>
                    )}
                  </>
                ) : (
                  <a
                    href={item.link}
                    target={item.external ? "_blank" : undefined}
                    rel={item.external ? "noopener noreferrer" : undefined}
                    className="block px-3 py-2 rounded-md text-[#00903b] hover:bg-[#00903b] hover:text-white transition-colors duration-200"
                  >
                    {item.name}
                  </a>
                )}
              </div>
            ))}
          </div>
        </div>
      </nav>
    </>
  );
}

export default NavbarComponent;