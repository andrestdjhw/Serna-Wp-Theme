import React, { useState } from "react"

function NavbarComponent() {
  const [isMenuOpen, setIsMenuOpen] = useState(false)
  const [activeDropdown, setActiveDropdown] = useState(null)

  const toggleMenu = () => {
    setIsMenuOpen(!isMenuOpen)
  }

  const toggleDropdown = (dropdown) => {
    if (activeDropdown === dropdown) {
      setActiveDropdown(null)
    } else {
      setActiveDropdown(dropdown)
    }
  }

  // Estructura de la navegacion con megamenu y listas
  const navItems = [
    { name: "Inicio", link: "/", hasDropdown: false },
    { 
      name: "Nosotros", 
      link: "/nosotros", 
      hasDropdown: true,
      isMultiColumn: true,
      columns: [
        {
          title: "Sobre Nosotros",
          items: [
            { name: "Perfil", link: "/perfil" },
            { name: "Comite de Control Interno", link: "/cocoin" },
            { name: "Comite de Probidad y Etica Publica", link: "/cepep" },
            { name: "Organigrama", link: "/organigrama" }
          ]
        },
        {
          title: "Recursos",
          items: [
            { name: "Oportunidades", link: "/oportunidades" },
            { name: "Foro", link: "/foro" },
            { name: "Preguntas Frecuentes", link: "/faq" }
          ]
        }
      ]
    },
    { name: "Webmail", link: "/webmail", hasDropdown: false },
    { name: "SLAS", link: "/slas", hasDropdown: false },
    { 
      name: "Direcciones", 
      link: "/direcciones", 
      hasDropdown: true,
      isMultiColumn: true,
      columns: [
        {
          title: "CESCCO",
          link: "/direcciones/cescco" ,
          items: [
            { name: "Anuncios", link: "/anuncios"  },
            { name: "RAE", link: "/rae"  }
          ]
        },
        {
          title: "Otras Direcciones",
          items: [
            { name: "DGA", link: "/dga" },
            { name: "DNCC", link: "/dncc" },
            { name: "DGRH", link: "/dgrh" },
            { name: "DIBIO", link: "/dibio" }
          ]
        },
        {
          title: "Deca",
          items: [
            { name: "Anuncios Deca", link: "/anuncios-deca" },
            { name: "Nuevos Requisitos SLAS", link: "/nuevos-requisitos-slas" },
            { name: "Requisitos de Renovacion de Licencia Ambiental", link: "/requisitos-de-renovacion-licencia-ambiental" },
            { name: "Requisito de constancia de no requerir licencia ambiental", link: "/requisitos-de-constancia-de-no-requerir-licencia-ambiental" }
          ]
        }
      ]
    },
    { 
      name: "Regionales", 
      link: "/regionales", 
      hasDropdown: true,
      isMultiColumn: true,
      columns: [
        {
          title: "Norte y Centro",
          items: [
            { name: "Comayagua", link: "/comayagua" },
            { name: "Regional San Pedro Sula", link: "/regional-san-pedro-sula" },
            { name: "Regional del Litoral Atlantico", link: "/regional-litoral-del-atlantico" },
            { name: "Regional Insular", link: "/regional-insular" }
          ]
        },
        {
          title: "Sur y Este",
          items: [
            { name: "Regional Choluteca", link: "/regional-choluteca" },
            { name: "Regional Olancho", link: "/regional-olancho" }
          ]
        },
        {
            title: "Occidente",
            items: [
                { name: "Regional Ocotepeque", link: "/regional-ocotepeque" },
                { name: "Regional Copan", link: "/regional-copan" }
            ]
        }
      ]
    },
    { 
      name: "OCP", 
      link: "/ocp", 
      hasDropdown: true,
      isMultiColumn: true,
      columns: [
        {
          title: "Proyectos Principales",
          items: [
            { name: "ADAPTARC+", link: "/adaptarce" },
            { name: "CONECTA+", link: "/conecta" },
            { name: "COPS4", link: "/cops4" }
          ]
        },
        {
          title: "Otros Proyectos",
          items: [
            { name: "Proyecto Motagua", link: "/proyecto-motagua" },
            { name: "Recover", link: "/recover" },
            { name: "PlanetGold", link: "/planet-gold" }
          ]
        }
      ]
    },
    { 
      name: "Portales", 
      link: "/portales", 
      hasDropdown: true,
      isMultiColumn: true,
      columns: [
        {
          title: "Portales Gubernamentales",
          items: [
            { name: "SIELHO", link: "/portales/sielho" },
            { name: "Portal Unico de Transparencia", link: "/portales/portal_transparencia" },
            { name: "Presidencia", link: "/portales/presidencia" }
          ]
        },
        {
          title: "Portales Institucionales",
          items: [
            { name: "ONADICI", link: "/portales/onadici" },
            { name: "Honducompras", link: "/portales/honducompras" },
            { name: "TSC", link: "/portales/tsc" }
          ]
        }
      ]
    }
  ]

  return (
    <nav className="bg-gradient-to-t from-[#7dbb5c] to-[#00903b] sticky top-0 z-50 w-full">
      {/* Contenedor principal del Navbar - Ajustes de WIDTH (Ancho) */}
      <div className="w-full mx-auto">
        <div className="flex items-center justify-between h-16 px-4">
          {/* Logo/Brand Section */}
          <div className="flex-shrink-0">
            <a href="/" className="text-white font-bold text-xl font-custom">
              SERNA
            </a>
          </div>
          
          {/* Mobile menu button */}
          <div className="flex md:hidden">
            <button
              onClick={toggleMenu}
              className="inline-flex items-center justify-center p-2 rounded-md text-white hover:bg-black/20 focus:outline-none"
              aria-expanded={isMenuOpen}
              aria-label="Toggle main menu"
            >
              {isMenuOpen ? (
                <svg className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
                </svg>
              ) : (
                <svg className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M4 6h16M4 12h16M4 18h16" />
                </svg>
              )}
            </button>
          </div>

          {/* Menu Escritorio */}
          <div className="hidden md:flex md:items-center md:justify-end md:flex-1">
            <div className="flex space-x-4 lg:space-x-8">
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
                          <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 9l-7 7-7-7" />
                        </svg>
                      </button>
                      
                      {/* Tesla-style mega menu - FIXED POSITIONING */}
                      {item.isMultiColumn && (
                        <div 
                          className={`absolute top-full right-0 mt-1 rounded-md shadow-lg bg-white py-6 z-50 transition-all duration-200 ${
                            activeDropdown === item.name ? "opacity-100 visible" : "opacity-0 invisible"
                          }`}
                          onMouseEnter={() => setActiveDropdown(item.name)}
                          onMouseLeave={() => setActiveDropdown(null)}
                          style={{ width: '600px', maxWidth: '90vw' }}
                        >
                          <div className="grid grid-cols-1 md:grid-cols-3 gap-4 px-6">
                            {item.columns.map((column, colIndex) => (
                              <div key={colIndex} className="space-y-4">
                                <h3 className="text-sm font-medium font-custom text-gray-900">{column.title}</h3>
                                <ul className="space-y-2">
                                  {column.items.map((subItem, subIndex) => (
                                    <li key={subIndex}>
                                      <a 
                                        href={subItem.link} 
                                        className="text-sm text-lime-600 hover:text-green-800"
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
                      )}
                      
                      {/* Regular dropdown (for compatibility with non-multicolumn items) */}
                      {!item.isMultiColumn && item.dropdownItems && (
                        <div 
                          className={`absolute top-full right-0 mt-1 w-48 rounded-md shadow-lg bg-white py-1 z-50 transition-all duration-200 ${
                            activeDropdown === item.name ? "opacity-100 visible" : "opacity-0 invisible"
                          }`}
                          onMouseEnter={() => setActiveDropdown(item.name)}
                          onMouseLeave={() => setActiveDropdown(null)}
                        >
                          {item.dropdownItems.map((dropdownItem, dropdownIndex) => (
                            <a
                              key={dropdownIndex}
                              href={dropdownItem.link}
                              className="block px-4 py-2 text-sm text-green-700 hover:bg-lime-400"
                            >
                              {dropdownItem.name}
                            </a>
                          ))}
                        </div>
                      )}
                    </>
                  ) : (
                    <a href={item.link} className="text-white hover:text-[#e3a220] transition-colors duration-200">
                      {item.name}
                    </a>
                  )}
                </div>
              ))}
            </div>
          </div>
        </div>
      </div>

      {/* Menu Dispositivos Mobiles */}
      <div className={`md:hidden ${isMenuOpen ? 'block' : 'hidden'}`}>
        <div className="px-2 pt-2 pb-3 space-y-1 bg-gray-50">
          {navItems.map((item, index) => (
            <div key={index} className="w-full">
              {item.hasDropdown ? (
                <>
                  <button
                    onClick={() => toggleDropdown(item.name)}
                    className="w-full flex justify-between items-center px-3 py-2 rounded-md text-black hover:bg-green-700 hover:text-white transition-colors duration-200"
                  >
                    {item.name}
                    <svg 
                      className={`ml-1 h-4 w-4 transition-transform duration-200 ${activeDropdown === item.name ? 'transform rotate-180' : ''}`} 
                      fill="none" 
                      viewBox="0 0 24 24" 
                      stroke="currentColor"
                    >
                      <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 9l-7 7-7-7" />
                    </svg>
                  </button>
                  {activeDropdown === item.name && (
                    <div className="pl-4 py-2 space-y-1">
                      {/* If item uses the multicolumn format, flatten it for mobile */}
                      {item.isMultiColumn ? (
                        item.columns.map((column, colIndex) => (
                          <div key={colIndex} className="mb-2">
                            <div className="px-3 py-1 font-medium text-sm">{column.title}</div>
                            {column.items.map((subItem, subIndex) => (
                              <a
                                key={subIndex}
                                href={subItem.link}
                                className="block px-3 py-2 rounded-md text-black bg-[#7dbb5c] hover:bg-green-200 transition-colors duration-200 my-1"
                              >
                                {subItem.name}
                              </a>
                            ))}
                          </div>
                        ))
                      ) : (
                        item.dropdownItems.map((dropdownItem, dropdownIndex) => (
                          <a
                            key={dropdownIndex}
                            href={dropdownItem.link}
                            className="block px-3 py-2 rounded-md text-white bg-green-800 hover:bg-green-900 transition-colors duration-200"
                          >
                            {dropdownItem.name}
                          </a>
                        ))
                      )}
                    </div>
                  )}
                </>
              ) : (
                <a
                  href={item.link}
                  className="block px-3 py-2 rounded-md text-black hover:bg-green-700 hover:text-white transition-colors duration-200"
                >
                  {item.name}
                </a>
              )}
            </div>
          ))}
        </div>
      </div>
    </nav>
  )
}

export default NavbarComponent