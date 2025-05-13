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

  // Calculate grid columns based on number of columns
  const getGridColumnsClass = (columns) => {
    switch(columns.length) {
      case 1: return 'grid-cols-1';
      case 2: return 'grid-cols-1 md:grid-cols-2';
      case 3: return 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3';
      case 4: return 'grid-cols-1 md:grid-cols-2 lg:grid-cols-4';
      default: return 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3';
    }
  };

  // Modified navItems structure with dynamic columns
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
            { name: "Perfil", link: "/perfil" },
            { name: "Comite de Control Interno", link: "/cocoin" },
            { name: "Comite de Probidad y Etica Publica", link: "/cepep" },
            { name: "Organigrama", link: "/organigrama" },
          ],
        },
        {
          title: "Recursos",
          items: [
            { name: "Oportunidades", link: "/oportunidades" },
            { name: "Foro", link: "/foro" },
            { name: "Preguntas Frecuentes", link: "/faq" },
            { name: "Contacto", link: "/contacto" }
          ],
        },
      ],
    },
    { name: "Webmail", link: "/webmail", hasDropdown: false },
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
            { name: "Anuncios", link: "/anuncios" },
            { name: "RAE", link: "/rae" },
          ],
        },
        {
          title: "Otras Direcciones",
          items: [
            { name: "DGA", link: "/dga" },
            { name: "DNCC", link: "/dncc" },
            { name: "DGRH", link: "/dgrh" },
            { name: "DIBIO", link: "/dibio" },
          ],
        },
        {
          title: "Deca",
          items: [
            { name: "Anuncios Deca", link: "/anuncios-deca" },
            { name: "Nuevos Requisitos SLAS", link: "/nuevos-requisitos-slas" },
            {
              name: "Requisitos de Renovacion de Licencia Ambiental",
              link: "/requisitos-de-renovacion-licencia-ambiental",
            },
            {
              name: "Requisito de constancia de no requerir licencia ambiental",
              link: "/requisitos-de-constancia-de-no-requerir-licencia-ambiental",
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
            { name: "Comayagua", link: "/comayagua" },
            { name: "Regional San Pedro Sula", link: "/regional-san-pedro-sula" },
            {
              name: "Regional del Litoral Atlantico",
              link: "/regional-litoral-del-atlantico",
            },
            { name: "Regional Insular", link: "/regional-insular" },
          ],
        },
        {
          title: "Sur y Este",
          items: [
            { name: "Regional Choluteca", link: "/regional-choluteca" },
            { name: "Regional Olancho", link: "/regional-olancho" },
          ],
        },
        {
          title: "Occidente",
          items: [
            { name: "Regional Ocotepeque", link: "/regional-ocotepeque" },
            { name: "Regional Copan", link: "/regional-copan" },
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
          title: "Proyectos Principales",
          items: [
            { name: "ADAPTARC+", link: "/adaptarce" },
            { name: "CONECTA+", link: "/conecta" },
            { name: "COPS4", link: "/cops4" },
          ],
        },
        {
          title: "Otros Proyectos",
          items: [
            { name: "Proyecto Motagua", link: "/proyecto-motagua" },
            { name: "Recover", link: "/recover" },
            { name: "PlanetGold", link: "/planet-gold" },
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
            { name: "SIELHO", link: "/portales/sielho" },
            {
              name: "Portal Unico de Transparencia",
              link: "/portales/portal_transparencia",
            },
            { name: "Presidencia", link: "/portales/presidencia" },
          ],
        },
        {
          title: "Portales Institucionales",
          items: [
            { name: "ONADICI", link: "/portales/onadici" },
            { name: "Honducompras", link: "/portales/honducompras" },
            { name: "TSC", link: "/portales/tsc" },
          ],
        },
      ],
    },
  ];

  return (
    <>
      {/* Encabezado con logo y titulo */}
      <header className="bg-white w-full border-b border-gray-200">
        <div className="max-w-7xl mx-auto px-4 py-4">
          {/*Emblema de Gobierno|Serna y titulos Centrados*/}
          <div className="flex flex-col items-center justify-center">
            <div className="flex items-center space-x-8">
              <img 
                src="/wp-content/uploads/2025/04/Gobierno-Color-768x768.png" 
                alt="Emblema de Honduras" 
                className="h-18"
              />
              <div className="h-12 w-px bg-gray-300 mx-2"></div>
              <img 
                src="/wp-content/uploads/2025/04/SERNA-Color-768x1017.png" 
                alt="Logo SERNA" 
                className="h-18"
              />
            </div>
            <h1 className="text-2xl font-bold text-[#87cede] mt-4 text-center">
              Secretaria de Recursos Naturales y Ambiente
            </h1>
          </div>
        </div>
      </header>

      {/*Barra de Navegacion Con Gradiente Verde*/}
      <nav className="bg-linear-to-t from-[#7dbb5c] to-[#00903b] sticky top-0 z-50 w-full shadow-md">
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

            {/*Contenedor Menu Escritorio */}
            <div className="hidden md:flex md:items-center md:justify-between md:flex-1">
              {/* Buscador al lado derecho */}
              <div className="relative">
                <input
                  type="text"
                  placeholder="Buscar..."
                  className="bg-white rounded-full py-1 px-4 text-sm focus:outline-none"
                />
              </div>
              
              {/* Items(Elementos) del Menu */}
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
                          className={`absolute top-full right-0 mt-1 rounded-md shadow-lg bg-white py-6 z-50 transition-all duration-200 ${
                            activeDropdown === item.name
                              ? "opacity-100 visible"
                              : "opacity-0 invisible"
                          }`}
                          onMouseEnter={() => setActiveDropdown(item.name)}
                          onMouseLeave={() => setActiveDropdown(null)}
                          style={{ 
                            width: `${Math.min(item.columns.length * 200, 600)}px`, 
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
                                        className="text-sm w-full flex justify-between items-center px-3 py-2 rounded-md text-[#00903b] hover:bg-green-700 hover:text-white transition-colors duration-200" 
                                      >
                                        {subItem.name}
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
                        className="text-white hover:text-[#e3a220] transition-colors duration-200"
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
            {/* Boton de busqueda en Menu Movil */}
            <div className="px-3 py-2">
              <input
                type="text"
                placeholder="Buscar..."
                className="w-full bg-white rounded-md py-2 px-4 text-sm border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500"
              />
            </div>
            
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
                                className="block px-3 py-2 rounded-md text-black bg-[#7dbb5c] hover:bg-[#00903b] hover:text-white transition-colors duration-200 my-1"
                              >
                                {subItem.name}
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