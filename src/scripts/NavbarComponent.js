import React, { useState } from "react"

function NavbarComponent() {
  const [isMenuOpen, setIsMenuOpen] = useState(false)

  const toggleMenu = () => {
    setIsMenuOpen(!isMenuOpen)
  }

  return (
    <nav className="bg-gradient-navbar sticky top-0 z-50">
      {/* Main navbar container */}
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex items-center justify-between h-16">
          {/* Logo/Brand Section */}
          <div className="flex-shrink-0">
            <a href="/" className="text-primary-text-color font-bold text-xl">
              SERNA
            </a>
          </div>
          
          {/* Mobile menu button */}
          <div className="flex md:hidden">
            <button
              onClick={toggleMenu}
              className="inline-flex items-center justify-center p-2 rounded-md text-primary-text-color hover:bg-secondary-bg-color/30 focus:outline-none transition-colors duration-200"
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
            <a href="/" className="text-primary-text-color hover:text-primary-color transition-colors duration-200">
              Home
            </a>
            <a href="/about" className="text-primary-text-color hover:text-primary-color transition-colors duration-200">
              About
            </a>
            <a href="/services" className="text-primary-text-color hover:text-primary-color transition-colors duration-200">
              Services
            </a>
            <a href="/blog" className="text-primary-text-color hover:text-primary-color transition-colors duration-200">
              Blog
            </a>
            <a href="/contact" className="text-primary-text-color hover:text-primary-color transition-colors duration-200">
              Contact
            </a>
            <button className="bg-naranja-serna text-primary-text-color px-4 py-2 rounded-md hover:bg-naranja-serna/90 transition-colors duration-200">
              Get Started
            </button>
          </div>
        </div>
      </div>

      {/* Mobile menu */}
      <div className={`md:hidden ${isMenuOpen ? 'block' : 'hidden'}`}>
        <div className="px-2 pt-2 pb-3 space-y-1 bg-secondary-bg-color">
          <a
            href="/"
            className="block px-3 py-2 rounded-md text-primary-text-color hover:bg-third-color transition-colors duration-200"
          >
            Home
          </a>
          <a
            href="/about"
            className="block px-3 py-2 rounded-md text-primary-text-color hover:bg-third-color transition-colors duration-200"
          >
            About
          </a>
          <a
            href="/services"
            className="block px-3 py-2 rounded-md text-primary-text-color hover:bg-third-color transition-colors duration-200"
          >
            Services
          </a>
          <a
            href="/blog"
            className="block px-3 py-2 rounded-md text-primary-text-color hover:bg-third-color transition-colors duration-200"
          >
            Blog
          </a>
          <a
            href="/contact"
            className="block px-3 py-2 rounded-md text-primary-text-color hover:bg-third-color transition-colors duration-200"
          >
            Contact
          </a>
          <button className="w-full text-left px-3 py-2 rounded-md bg-naranja-serna text-primary-text-color hover:bg-naranja-serna/90 transition-colors duration-200">
            Get Started
          </button>
        </div>
      </div>
    </nav>
  )
}

export default NavbarComponent