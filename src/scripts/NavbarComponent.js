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

  // Navigation structure with dropdowns
  const navItems = [
    { name: "Inicio", link: "/", hasDropdown: false },
    { 
      name: "Nosotros", 
      link: "/nosotros", 
      hasDropdown: true,
      dropdownItems: [
        { name: "Perfil", link: "/nosotros/Perfil" },
        { name: "Comite de Control Interno", link: "/nosotros/cocoin" },
        { name: "Comite de Probidad y Etica Publica", link: "/nosotros/cepep" },
        { name: "Organigrama", link: "/nosotros/organigrama" },
        { name: "Oportunidades", link: "/nosotros/oportunidades" },
        { name: "Foro", link: "/nosotros/foro" },
        { name: "Preguntas Frecuentes", link: "/nosotros/faq" }
      ]
    },
    { name: "Webmail", link: "/webmail", hasDropdown: false },
    { name: "SLAS", link: "/slas", hasDropdown: false },
    { 
      name: "Direcciones", 
      link: "/direcciones", 
      hasDropdown: true,
      dropdownItems: [
        { name: "Cescco", link: "/direcciones/cescco" },
        { name: "DGRH", link: "/direcciones/dgrh" },
        { name: "DIBIO", link: "/direcciones/dibio" },
        { name: "DGA", link: "/direcciones/dga" },
        { name: "DNCC", link: "/direcciones/dncc" },
        { name: "Deca", link: "/direcciones/deca" }
      ]
    },
    { 
      name: "Regionales", 
      link: "/regionales", 
      hasDropdown: true,
      dropdownItems: [
        { name: "Regional Copan", link: "/regionales/copan" },
        { name: "Comayagua", link: "/regionales/comayagua" },
        { name: "Regional del Litoral Atlantico", link: "/regionales/litoral_atlantico" },
        { name: "Regional Insular", link: "/regionales/insular" },
        { name: "Regional Choluteca", link: "/regionales/choluteca" },
        { name: "Regional San Pedro Sula", link: "/regionales/san_pedro_sula" },
        { name: "Regional Ocotepeque", link: "/regionales/ocotepeque" },
        { name: "Regional Olancho", link: "/regionales/olancho" }
      ]
    },
    { 
      name: "OCP", 
      link: "/ocp", 
      hasDropdown: true,
      dropdownItems: [
        { name: "ADAPTARC+", link: "/ocp/adaptarce" },
        { name: "CONECTA+", link: "/ocp/contecta" },
        { name: "COPS4", link: "/ocp/cops4" },
        { name: "Proyecto Motagua", link: "/ocp/proyecto_motagua" },
        { name: "Recover", link: "/ocp/recover" },
        { name: "PlanetGold", link: "/ocp/planet_gold" }
      ]
    },
    { 
      name: "Portales", 
      link: "/portales", 
      hasDropdown: true,
      dropdownItems: [
        { name: "SIELHO", link: "/portales/sielho" },
        { name: "Portal Unico de Transparencia", link: "/portales/portal_transparencia" },
        { name: "ONADICI", link: "/portales/onadici" },
        { name: "Presidencia", link: "/portales/presidencia" },
        { name: "Honducompras", link: "/portales/honducompras" },
        { name: "TSC", link: "/portales/tsc" }
      ]
    }
  ]

  return (
    <nav className="bg-gradient-to-b from-green-600 to-green-500 sticky top-0 z-50">
      {/* Main navbar container */}
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex items-center justify-between h-16">
          {/* Logo/Brand Section */}
          <div className="flex-shrink-0">
            <a href="/" className="text-white font-bold text-xl">
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

          {/* Desktop menu */}
          <div className="hidden md:flex md:items-center md:space-x-8">
            {navItems.map((item, index) => (
              <div key={index} className="relative group">
                {item.hasDropdown ? (
                  <>
                    <button 
                      className="text-white hover:text-sky-300 transition-colors duration-200 flex items-center"
                      onMouseEnter={() => setActiveDropdown(item.name)}
                      onMouseLeave={() => setActiveDropdown(null)}
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
                    <div 
                      className={`absolute top-full left-0 mt-1 w-48 rounded-md shadow-lg bg-white py-1 z-50 transition-all duration-200 ${
                        activeDropdown === item.name ? "opacity-100 visible" : "opacity-0 invisible"
                      }`}
                      onMouseEnter={() => setActiveDropdown(item.name)}
                      onMouseLeave={() => setActiveDropdown(null)}
                    >
                      {item.dropdownItems.map((dropdownItem, dropdownIndex) => (
                        <a
                          key={dropdownIndex}
                          href={dropdownItem.link}
                          className="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                        >
                          {dropdownItem.name}
                        </a>
                      ))}
                    </div>
                  </>
                ) : (
                  <a href={item.link} className="text-white hover:text-sky-300 transition-colors duration-200">
                    {item.name}
                  </a>
                )}
              </div>
            ))}
            <button className="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition-colors duration-200">
              Get Started
            </button>
          </div>
        </div>
      </div>

      {/* Mobile menu */}
      <div className={`md:hidden ${isMenuOpen ? 'block' : 'hidden'}`}>
        <div className="px-2 pt-2 pb-3 space-y-1 bg-gray-50">
          {navItems.map((item, index) => (
            <div key={index} className="w-full">
              {item.hasDropdown ? (
                <>
                  <button
                    onClick={() => toggleDropdown(item.name)}
                    className="w-full flex justify-between items-center px-3 py-2 rounded-md text-black hover:bg-green-700 transition-colors duration-200"
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
                      {item.dropdownItems.map((dropdownItem, dropdownIndex) => (
                        <a
                          key={dropdownIndex}
                          href={dropdownItem.link}
                          className="block px-3 py-2 rounded-md text-white bg-green-800 hover:bg-green-900 transition-colors duration-200"
                        >
                          {dropdownItem.name}
                        </a>
                      ))}
                    </div>
                  )}
                </>
              ) : (
                <a
                  href={item.link}
                  className="block px-3 py-2 rounded-md text-black hover:bg-green-700 transition-colors duration-200"
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