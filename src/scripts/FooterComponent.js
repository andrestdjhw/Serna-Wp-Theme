import React from "react";

function FooterComponent() {
  const socialLinks = [
    { name: "Facebook", icon: "facebook", url: "https://www.facebook.com/sernaHN/?locale=es_LA" },
    { name: "Twitter", icon: "twitter", url: "https://x.com/sernaHN" },
    { name: "Instagram", icon: "instagram", url: "https://www.instagram.com/sernahn?igsh=MWtqbzlqeXo1amxsMQ==" },
    { name: "TikTok", icon: "tiktok", url: "https://www.tiktok.com/@sernahn?_t=ZM-8wLr9KveuyE&_r=1" },
    { name: "YouTube", icon: "youtube", url: "https://www.youtube.com/@sernahn-gob" },
  ];

  // Columnas del Footer y Estructura de datos
  // Columnas del Footer y Estructura de datos
  const footerColumns = [
    {
      title: "Dirección",
      content: [
        "Despacho de Recursos Naturales y",
        "Ambiente, SERNA, ",
        " Edificio Santa Fe, Colonia Castaño Sur, Tegucigalpa",
        "M.D.C., Honduras, C.A."
      ]
    },
    {
      title: "Contáctenos",
      content: [
        "Tel: (+504) 2232-9200",
        "Horario: 9:00 A.M. - 4:00 P.M."
      ]
    },
    {
      title: "Nosotros",
      links: [
        { name: "Perfil", url: "/nosotros/perfil" },
        { name: "Organigrama", url: "/nosotros/organigrama" },
        { name: "Oportunidades", url: "/nosotros/oportunidades" },
        { name: "Comité de Control Interno", url: "/nosotros/cocoin" },
        { name: "Comité de Probidad y Ética Pública", url: "/nosotros/cepep" },
        { name: "Preguntas Frecuentes", url: "/nosotros/faq" },
        { name: "Te escuchamos", url: "/contacto" }
      ]
    },
    {
      title: "Direcciones",
      links: [
        { name: "CESCCO", url: "/direcciones/cescco" },
        { name: "UTOH", url: "/direcciones/utoh" },
        { name: "DIBIO", url: "/direcciones/dibio" },
        { name: "DGA", url: "/direcciones/dga" },
        { name: "DECA", url: "/direcciones/deca" },
        { name: "DNCC", url: "/direcciones/dncc" },
        { name: "UTOH", url: "/direcciones/utoh" }
      ]
    },
    {
      title: "Regionales",
      links: [
        { name: "Copán", url: "/regionales/regional-copan" },
        { name: "Comayagua", url: "/regionales/comayagua" },
        { name: "Atlántico", url: "/regionales/regional-litoral-del-atlantico" },
        { name: "Roatán", url: "/regionales/regional-insular" },
        { name: "Choluteca", url: "/regionales/regional-choluteca" },
        { name: "San Pedro Sula", url: "/regionales/regional-san-pedro-sula" },
        { name: "Ocotepeque", url: "/regionales/regional-ocotepeque" },
        { name: "Olancho", url: "/regionales/regional-olancho" }
      ]
    }
  ];

  return (
    <footer className="relative text-white">
      {/*
        ── Ola superior: transición blanco → gris ──
        El contenedor es gris (#666666). El SVG dibuja una forma BLANCA
        que parte desde y=0 (arriba), baja siguiendo la misma curva del
        hero, y cierra en y=0 por ambos lados — dejando el blanco ENCIMA
        de la ola y el gris del footer por DEBAJO.
      */}
      <div className="w-full overflow-hidden leading-[0] bg-gradient-to-r from-[#231f20] via-[#666666] to-[#666666]">
        <svg
          viewBox="0 0 1440 120"
          xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="none"
          className="block w-full h-12 md:h-20"
          fill="white"
        >
          {/* Rellena desde y=0 hasta la cresta de la ola → blanco queda arriba */}
          <path d="M0 0H1440V60L1380 56.7C1320 53 1200 47 1080 43.3C960 40 840 40 720 43.3C600 47 480 53 360 46.7C240 40 120 20 60 10L0 0Z" />
        </svg>
      </div>

      {/* Cuerpo del footer */}
      <div className="bg-gradient-to-r from-[#231f20] via-[#666666] to-[#666666] pt-4 pb-6">
        <div className="max-w-7xl mx-auto px-4">
          {/* Contenido Principal del Footer */}
          <div className="grid grid-cols-1 md:grid-cols-6 gap-8">
            {/* Columna de Logo y Redes Sociales */}
            <div className="md:col-span-1 flex flex-col items-center md:items-start">
              {/* Logo SERNA */}
              <div className="w-40 mb-8">
                <img
                  src="/wp-content/uploads/2026/02/Blanco-SERNA.png"
                  alt="SERNA"
                  className="w-full"
                />
              </div>

              {/* Iconos de Redes Sociales */}
              <div className="flex space-x-2 mb-6">
                {socialLinks.map((social, index) => (
                  <a
                    key={index}
                    href={social.url}
                    className="text-white hover:text-[#E0AE19] transition-colors"
                    aria-label={social.name}
                  >
                    <div className="w-8 h-8 flex items-center justify-center rounded-full bg-white/20 hover:bg-white/30 transition-colors">
                      {social.icon === "facebook" && (
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                      )}
                      {social.icon === "twitter" && (
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                        </svg>
                      )}
                      {social.icon === "instagram" && (
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                        </svg>
                      )}
                      {social.icon === "tiktok" && (
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
                        </svg>
                      )}
                      {social.icon === "youtube" && (
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                        </svg>
                      )}
                    </div>
                  </a>
                ))}
              </div>
            </div>

            {/* Columnas Dinamicas del Footer */}
            {footerColumns.map((column, index) => (
              <div key={index} className="md:col-span-1 text-center md:text-left">
                <h3 className="text-xl font-bold mb-4 font-custom">{column.title}</h3>

                {/* Para columnas de contenido de texto */}
                {column.content && (
                  <div className="text-sm space-y-2">
                    {column.content.map((line, i) => (
                      <p key={i}>{line}</p>
                    ))}
                  </div>
                )}

                {/* Para Columnas con enlaces */}
                {column.links && (
                  <ul className="space-y-2">
                    {column.links.map((link, i) => (
                      <li key={i}>
                        <a
                          href={link.url}
                          className="text-sm hover:text-[#E0AE19] transition-colors"
                        >
                          {link.name}
                        </a>
                      </li>
                    ))}
                  </ul>
                )}
              </div>
            ))}
          </div>

          {/* Copyright */}
          <div className="mt-6 pt-6 border-t border-white/20 text-center text-base">
            <p>&copy; {new Date().getFullYear()} SERNA - Secretaría de Recursos Naturales y Ambiente. Todos los derechos reservados.</p>
          </div>
        </div>
      </div>
    </footer>
  );
}

export default FooterComponent;