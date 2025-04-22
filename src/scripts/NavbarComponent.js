import React, { useState } from "react"

function NavbarComponent() {
  const [isMenuOpen, setIsMenuOpen] = useState(false)

  const toggleMenu = () => {
    setIsMenuOpen(!isMenuOpen)
  }

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
            <a href="/" className="text-white hover:text-sky-300 transition-colors duration-200">
              Inicio
            </a>
            <a href="/nosotros" className="text-white hover:text-sky-300 transition-colors duration-200">
              Nosotros
            </a>
            <a href="/webmail" className="text-white hover:text-sky-300 transition-colors duration-200">
              Webmail
            </a>
            <a href="/slas" className="text-white hover:text-sky-300 transition-colors duration-200">
              SLAS
            </a>
            <a href="/direcciones" className="text-white hover:text-sky-300 transition-colors duration-200">
              Direcciones
            </a>
            <a href="/regionales" className="text-white hover:text-sky-300 transition-colors duration-200">
              Regionales
            </a>
            <a href="/ocp" className="text-white hover:text-sky-300 transition-colors duration-200">
              OCP
            </a>
            <a href="/portales" className="text-white hover:text-sky-300 transition-colors duration-200">
              Portales
            </a>
            <button className="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition-colors duration-200">
              Get Started
            </button>
          </div>
        </div>
      </div>

      {/* Mobile menu */}
      <div className={`md:hidden ${isMenuOpen ? 'block' : 'hidden'}`}>
        <div className="px-2 pt-2 pb-3 space-y-1 bg-gray-800">
          <a
            href="/"
            className="block px-3 py-2 rounded-md text-white hover:bg-green-700 transition-colors duration-200"
          >
            Inicio
          </a>
          <a
            href="/nosotros"
            className="block px-3 py-2 rounded-md text-white hover:bg-green-700 transition-colors duration-200"
          >
            Nosotros
          </a>
          <a
            href="/webmail"
            className="block px-3 py-2 rounded-md text-white hover:bg-green-700 transition-colors duration-200"
          >
            Webmail
          </a>
          <a
            href="/slas"
            className="block px-3 py-2 rounded-md text-white hover:bg-green-700 transition-colors duration-200"
          >
            SLAS
          </a>
          <a
            href="/direcciones"
            className="block px-3 py-2 rounded-md text-white hover:bg-green-700 transition-colors duration-200"
          >
            Direcciones
          </a>
          <a
            href="/regionales"
            className="block px-3 py-2 rounded-md text-white hover:bg-green-700 transition-colors duration-200"
          >
            Regionales
          </a>
          <a
            href="/ocp"
            className="block px-3 py-2 rounded-md text-white hover:bg-green-700 transition-colors duration-200"
          >
            OCP
          </a>
          <a
            href="/portales"
            className="block px-3 py-2 rounded-md text-white hover:bg-green-700 transition-colors duration-200"
          >
            Portales
          </a>
          <button className="w-full text-left px-3 py-2 rounded-md bg-red-500 text-white hover:bg-red-600 transition-colors duration-200">
            Get Started
          </button>
        </div>
      </div>
    </nav>
  )
}

export default NavbarComponent