/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./node_modules/react-dom/client.js":
/*!******************************************!*\
  !*** ./node_modules/react-dom/client.js ***!
  \******************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {

"use strict";


var m = __webpack_require__(/*! react-dom */ "react-dom");
if (false) {} else {
  var i = m.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED;
  exports.createRoot = function(c, o) {
    i.usingClientEntryPoint = true;
    try {
      return m.createRoot(c, o);
    } finally {
      i.usingClientEntryPoint = false;
    }
  };
  exports.hydrateRoot = function(c, h, o) {
    i.usingClientEntryPoint = true;
    try {
      return m.hydrateRoot(c, h, o);
    } finally {
      i.usingClientEntryPoint = false;
    }
  };
}


/***/ }),

/***/ "./src/scripts/ExampleReactComponent.js":
/*!**********************************************!*\
  !*** ./src/scripts/ExampleReactComponent.js ***!
  \**********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


function ExampleReactComponent() {
  const [clickCount, setClickCount] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(0);
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    className: "bg-gradient-to-r from-blue-500 to-indigo-600 text-white p-4 rounded-md mt-8",
    onClick: () => setClickCount(prev => prev + 1),
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h1", {
      className: "text-xl",
      children: "Hello from React!"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("p", {
      className: "text-sm",
      children: ["You have clicked on this component", " ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        className: "text-yellow-200 font-bold",
        children: clickCount
      }), " times."]
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (ExampleReactComponent);

/***/ }),

/***/ "./src/scripts/FooterComponent.js":
/*!****************************************!*\
  !*** ./src/scripts/FooterComponent.js ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


function FooterComponent() {
  // Arreglo para los enlaces de redes sociales, con sus iconos
  const socialLinks = [{
    name: "Facebook",
    icon: "facebook",
    url: "#"
  }, {
    name: "Twitter",
    icon: "twitter",
    url: "#"
  }, {
    name: "Instagram",
    icon: "instagram",
    url: "#"
  }, {
    name: "TikTok",
    icon: "tiktok",
    url: "#"
  }, {
    name: "YouTube",
    icon: "youtube",
    url: "#"
  }];

  // Columnas del Footer y Estructura de datos
  const footerColumns = [{
    title: "Dirección",
    content: ["Despacho de Recursos Naturales y", "Ambiente, 100 metros al Sur del", "Estadio Nacional, Tegucigalpa", "M.D.C., Honduras, C.A."]
  }, {
    title: "Contáctenos",
    content: ["Tel: (+504) 2232-9200", "Horario: 9:00 A.M. - 4:00 P.M."]
  }, {
    title: "Nosotros",
    links: [{
      name: "Perfil",
      url: "/perfil"
    }, {
      name: "Organigrama",
      url: "/organigrama"
    }, {
      name: "Oportunidades",
      url: "/oportunidades"
    }, {
      name: "Comité de Control Interno",
      url: "/cocoin"
    }, {
      name: "Comité de Probidad y Ética Pública",
      url: "/cepep"
    }, {
      name: "Preguntas Frecuentes",
      url: "/faq"
    }, {
      name: "Te escuchamos",
      url: "/contacto"
    }]
  }, {
    title: "Direcciones",
    links: [{
      name: "CESCCO",
      url: "/cescco"
    }, {
      name: "UTOH",
      url: "/utoh"
    }, {
      name: "DIBIO",
      url: "/dibio"
    }, {
      name: "DGA",
      url: "/dga"
    }, {
      name: "DECA",
      url: "/deca"
    }, {
      name: "DNCC",
      url: "/dncc"
    }]
  }, {
    title: "Regionales",
    links: [{
      name: "Copán",
      url: "/regional-copan"
    }, {
      name: "Comayagua",
      url: "/comayagua"
    }, {
      name: "Atlántico",
      url: "/regional-litoral-del-atlantico"
    }, {
      name: "Roatán",
      url: "/regional-insular"
    }, {
      name: "Choluteca",
      url: "/regional-choluteca"
    }, {
      name: "San Pedro Sula",
      url: "/regional-san-pedro-sula"
    }, {
      name: "Ocotepeque",
      url: "/regional-ocotepeque"
    }, {
      name: "Olancho",
      url: "/regional-olancho"
    }]
  }];
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("footer", {
    className: "bg-gradient-to-b from-[#87cede] to-[#88cfe0] text-white pt-10 pb-6",
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: "max-w-7xl mx-auto px-4",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "grid grid-cols-1 md:grid-cols-6 gap-8",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "md:col-span-1 flex flex-col items-center md:items-start",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "w-40 mb-8",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("img", {
              src: "/wp-content/uploads/2025/04/Serna-Blanco-227x300.png",
              alt: "SERNA",
              className: "w-full",
              onError: e => {
                e.target.onerror = null;
                e.target.src = "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='200' viewBox='0 0 200 200'%3E%3Crect width='200' height='200' fill='%23333'/%3E%3Ctext x='50%25' y='50%25' font-size='18' text-anchor='middle' fill='white' font-family='system-ui' dominant-baseline='middle'%3ESERNA LOGO%3C/text%3E%3C/svg%3E";
              }
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "flex space-x-2 mb-6",
            children: socialLinks.map((social, index) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: social.url,
              className: "text-white hover:text-[#ee3725] transition-colors",
              "aria-label": social.name,
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
                className: "w-8 h-8 flex items-center justify-center rounded-full bg-white/20 hover:bg-white/30 transition-colors",
                children: [social.icon === "facebook" && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                  xmlns: "http://www.w3.org/2000/svg",
                  width: "16",
                  height: "16",
                  fill: "currentColor",
                  viewBox: "0 0 16 16",
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                    d: "M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"
                  })
                }), social.icon === "twitter" && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                  xmlns: "http://www.w3.org/2000/svg",
                  width: "16",
                  height: "16",
                  fill: "currentColor",
                  viewBox: "0 0 16 16",
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                    d: "M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"
                  })
                }), social.icon === "instagram" && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                  xmlns: "http://www.w3.org/2000/svg",
                  width: "16",
                  height: "16",
                  fill: "currentColor",
                  viewBox: "0 0 16 16",
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                    d: "M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
                  })
                }), social.icon === "tiktok" && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                  xmlns: "http://www.w3.org/2000/svg",
                  width: "16",
                  height: "16",
                  fill: "currentColor",
                  viewBox: "0 0 16 16",
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                    d: "M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"
                  })
                }), social.icon === "youtube" && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                  xmlns: "http://www.w3.org/2000/svg",
                  width: "16",
                  height: "16",
                  fill: "currentColor",
                  viewBox: "0 0 16 16",
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                    d: "M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"
                  })
                })]
              })
            }, index))
          })]
        }), footerColumns.map((column, index) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "md:col-span-1 text-center md:text-left",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h3", {
            className: "text-xl font-bold mb-4 font-custom",
            children: column.title
          }), column.content && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "text-sm space-y-2",
            children: column.content.map((line, i) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
              children: line
            }, i))
          }), column.links && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("ul", {
            className: "space-y-2",
            children: column.links.map((link, i) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                href: link.url,
                className: "text-sm hover:text-[#ee3725] transition-colors",
                children: link.name
              })
            }, i))
          })]
        }, index))]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: "mt-12 pt-6 border-t border-white/20 text-center text-base",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("p", {
          children: ["\xA9 ", new Date().getFullYear(), " SERNA - Secretar\xEDa de Recursos Naturales y Ambiente. Todos los derechos reservados."]
        })
      })]
    })
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (FooterComponent);

/***/ }),

/***/ "./src/scripts/InicioComponent.js":
/*!****************************************!*\
  !*** ./src/scripts/InicioComponent.js ***!
  \****************************************/
/***/ (() => {

/* import React, { useState, useEffect } from "react";
import { __ } from '@wordpress/i18n';

const InicioComponent = () => {
    const [posts, setPosts] = useState(inicioData.latest_posts || []);
    const [stats, setStats] = useState(inicioData.stats_data || []);
    const [isLoading, setIsLoading] = useState(false);
    
    // Hero section data
    const heroData = {
        title: __('Bienvenido a nuestro sitio web', 'text-domain'),
        subtitle: __('Soluciones innovadoras para tus necesidades', 'text-domain'),
        ctaText: __('Conoce más', 'text-domain'),
        ctaLink: '#servicios',
        backgroundImage: 'https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'
    };
    
    // Fetch latest posts if not already loaded
    useEffect(() => {
        if (posts.length === 0) {
            setIsLoading(true);
            fetch(`${inicioData.rest_url}wp/v2/posts?per_page=3&_embed`)
                .then(response => response.json())
                .then(data => {
                    const formattedPosts = data.map(post => ({
                        title: post.title.rendered,
                        excerpt: post.excerpt.rendered,
                        date: new Date(post.date).toLocaleDateString(),
                        link: post.link,
                        image: post._embedded?.['wp:featuredmedia']?.[0]?.source_url || ''
                    }));
                    setPosts(formattedPosts);
                    setIsLoading(false);
                })
                .catch(error => {
                    console.error('Error fetching posts:', error);
                    setIsLoading(false);
                });
        }
    }, []);
    
    return (
        <div className="min-h-screen bg-gray-50">
            {/* Hero Section }
            <div 
                className="relative py-32 px-4 sm:px-6 lg:px-8 bg-cover bg-center"
                style={{ backgroundImage: `linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(${heroData.backgroundImage})` }}
            >
                <div className="max-w-7xl mx-auto text-center">
                    <h1 className="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 animate-fade-in">
                        {heroData.title}
                    </h1>
                    <p className="text-xl md:text-2xl text-gray-200 mb-8 max-w-3xl mx-auto">
                        {heroData.subtitle}
                    </p>
                    <a 
                        href={heroData.ctaLink}
                        className="inline-block px-8 py-3 bg-green-600 text-white font-medium rounded-full hover:bg-green-700 transition duration-300 transform hover:scale-105"
                    >
                        {heroData.ctaText}
                    </a>
                </div>
                
                {/* Animated waves at bottom }
                <div className="absolute bottom-0 left-0 right-0">
                    <svg viewBox="0 0 1440 120" className="w-full h-16 md:h-24">
                        <path 
                            fill="white" 
                            d="M0,64L48,80C96,96,192,128,288,128C384,128,480,96,576,85.3C672,75,768,85,864,101.3C960,117,1056,139,1152,138.7C1248,139,1344,117,1392,106.7L1440,96L1440,120L1392,120C1344,120,1248,120,1152,120C1056,120,960,120,864,120C768,120,672,120,576,120C480,120,384,120,288,120C192,120,96,120,48,120L0,120Z"
                        ></path>
                    </svg>
                </div>
            </div>
            
            {/* Stats Section }
            <div className="py-16 bg-white">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 className="text-3xl font-bold text-center text-gray-900 mb-12">
                        {__('Nuestros logros en números', 'text-domain')}
                    </h2>
                    
                    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                        {stats.map((stat, index) => (
                            <div 
                                key={index}
                                className="bg-green-50 rounded-2xl p-8 text-center transform hover:scale-105 transition duration-300 shadow-lg"
                            >
                                <div className="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100 text-green-600 mb-4">
                                    <StatIcon icon={stat.icon} />
                                </div>
                                <h3 className="text-4xl font-bold text-green-600 mb-2">
                                    {stat.value}
                                </h3>
                                <p className="text-lg text-gray-600">
                                    {stat.label}
                                </p>
                            </div>
                        ))}
                    </div>
                </div>
            </div>
            
            {/* Latest News Section }
            <div className="py-16 bg-gray-50">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="text-center mb-12">
                        <h2 className="text-3xl font-bold text-gray-900">
                            {__('Últimas noticias', 'text-domain')}
                        </h2>
                        <p className="mt-4 text-xl text-gray-600 max-w-2xl mx-auto">
                            {__('Mantente informado con nuestras últimas actualizaciones', 'text-domain')}
                        </p>
                    </div>
                    
                    {isLoading ? (
                        <div className="flex justify-center">
                            <div className="animate-spin rounded-full h-12 w-12 border-t-2 border-b-2 border-green-500"></div>
                        </div>
                    ) : (
                        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
                            {posts.map((post, index) => (
                                <article 
                                    key={index}
                                    className="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300"
                                >
                                    {post.image && (
                                        <div className="h-48 overflow-hidden">
                                            <img 
                                                src={post.image} 
                                                alt={post.title}
                                                className="w-full h-full object-cover"
                                            />
                                        </div>
                                    )}
                                    <div className="p-6">
                                        <div className="text-sm text-gray-500 mb-2">
                                            {post.date}
                                        </div>
                                        <h3 className="text-xl font-bold text-gray-900 mb-3">
                                            <a 
                                                href={post.link} 
                                                className="hover:text-green-600 transition duration-200"
                                            >
                                                {post.title}
                                            </a>
                                        </h3>
                                        <div 
                                            className="text-gray-600 mb-4 line-clamp-3"
                                            dangerouslySetInnerHTML={{ __html: post.excerpt }}
                                        />
                                        <a 
                                            href={post.link}
                                            className="inline-flex items-center text-green-600 hover:text-green-800 font-medium"
                                        >
                                            {__('Leer más', 'text-domain')}
                                            <svg className="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </article>
                            ))}
                        </div>
                    )}
                    
                    <div className="mt-12 text-center">
                        <a 
                            href="/blog"
                            className="inline-block px-6 py-3 border border-transparent text-base font-medium rounded-full text-white bg-green-600 hover:bg-green-700 transition duration-300"
                        >
                            {__('Ver todas las noticias', 'text-domain')}
                        </a>
                    </div>
                </div>
            </div>
            
            {/* CTA Section }
            <div className="bg-green-700">
                <div className="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
                    <h2 className="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                        <span className="block">{__('¿Listo para comenzar?', 'text-domain')}</span>
                        <span className="block text-green-200">{__('Contáctanos hoy mismo.', 'text-domain')}</span>
                    </h2>
                    <div className="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                        <div className="inline-flex rounded-md shadow">
                            <a
                                href="/contacto"
                                className="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-green-600 bg-white hover:bg-green-50"
                            >
                                {__('Contáctanos', 'text-domain')}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
};

// Helper component for stat icons
const StatIcon = ({ icon }) => {
    switch(icon) {
        case 'users':
            return (
                <svg className="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            );
        case 'briefcase':
            return (
                <svg className="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
            );
        case 'award':
            return (
                <svg className="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            );
        case 'headset':
            return (
                <svg className="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            );
        default:
            return (
                <svg className="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
            );
    }
};

export default InicioComponent; */

/***/ }),

/***/ "./src/scripts/NavbarComponent.js":
/*!****************************************!*\
  !*** ./src/scripts/NavbarComponent.js ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


function NavbarComponent() {
  const [isMenuOpen, setIsMenuOpen] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [activeDropdown, setActiveDropdown] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(null);
  const toggleMenu = () => {
    setIsMenuOpen(!isMenuOpen);
  };
  const toggleDropdown = dropdown => {
    if (activeDropdown === dropdown) {
      setActiveDropdown(null);
    } else {
      setActiveDropdown(dropdown);
    }
  };

  // Calculate grid columns based on number of columns
  const getGridColumnsClass = columns => {
    switch (columns.length) {
      case 1:
        return 'grid-cols-1';
      case 2:
        return 'grid-cols-1 md:grid-cols-2';
      case 3:
        return 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3';
      case 4:
        return 'grid-cols-1 md:grid-cols-2 lg:grid-cols-4';
      default:
        return 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3';
    }
  };

  // Modified navItems structure with dynamic columns
  const navItems = [{
    name: "Inicio",
    link: "/",
    hasDropdown: false
  }, {
    name: "Nosotros",
    link: "/nosotros",
    hasDropdown: true,
    columns: [{
      title: "Sobre Nosotros",
      items: [{
        name: "Perfil",
        link: "/perfil"
      }, {
        name: "Comite de Control Interno",
        link: "/cocoin"
      }, {
        name: "Comite de Probidad y Etica Publica",
        link: "/cepep"
      }, {
        name: "Organigrama",
        link: "/organigrama"
      }]
    }, {
      title: "Recursos",
      items: [{
        name: "Oportunidades",
        link: "/oportunidades"
      }, {
        name: "Foro",
        link: "/foro"
      }, {
        name: "Preguntas Frecuentes",
        link: "/faq"
      }, {
        name: "Contacto",
        link: "/contacto"
      }]
    }]
  }, {
    name: "Webmail",
    link: "/webmail",
    hasDropdown: false
  }, {
    name: "Licenciamiento Ambiental",
    link: "/slas",
    hasDropdown: false
  }, {
    name: "Direcciones",
    link: "/direcciones",
    hasDropdown: true,
    columns: [{
      title: "CESCCO",
      link: "/direcciones/cescco",
      items: [{
        name: "Anuncios",
        link: "/anuncios"
      }, {
        name: "RAE",
        link: "/rae"
      }]
    }, {
      title: "Otras Direcciones",
      items: [{
        name: "DGA",
        link: "/dga"
      }, {
        name: "DNCC",
        link: "/dncc"
      }, {
        name: "DGRH",
        link: "/dgrh"
      }, {
        name: "DIBIO",
        link: "/dibio"
      }]
    }, {
      title: "Deca",
      items: [{
        name: "Anuncios Deca",
        link: "/anuncios-deca"
      }, {
        name: "Nuevos Requisitos SLAS",
        link: "/nuevos-requisitos-slas"
      }, {
        name: "Requisitos de Renovacion de Licencia Ambiental",
        link: "/requisitos-de-renovacion-licencia-ambiental"
      }, {
        name: "Requisito de constancia de no requerir licencia ambiental",
        link: "/requisitos-de-constancia-de-no-requerir-licencia-ambiental"
      }]
    }]
  }, {
    name: "Regionales",
    link: "/regionales",
    hasDropdown: true,
    columns: [{
      title: "Norte y Centro",
      items: [{
        name: "Comayagua",
        link: "/comayagua"
      }, {
        name: "Regional San Pedro Sula",
        link: "/regional-san-pedro-sula"
      }, {
        name: "Regional del Litoral Atlantico",
        link: "/regional-litoral-del-atlantico"
      }, {
        name: "Regional Insular",
        link: "/regional-insular"
      }]
    }, {
      title: "Sur y Este",
      items: [{
        name: "Regional Choluteca",
        link: "/regional-choluteca"
      }, {
        name: "Regional Olancho",
        link: "/regional-olancho"
      }]
    }, {
      title: "Occidente",
      items: [{
        name: "Regional Ocotepeque",
        link: "/regional-ocotepeque"
      }, {
        name: "Regional Copan",
        link: "/regional-copan"
      }]
    }]
  }, {
    name: "OCP",
    link: "/ocp",
    hasDropdown: true,
    columns: [{
      title: "Proyectos Principales",
      items: [{
        name: "ADAPTARC+",
        link: "/adaptarce"
      }, {
        name: "CONECTA+",
        link: "/conecta"
      }, {
        name: "COPS4",
        link: "/cops4"
      }]
    }, {
      title: "Otros Proyectos",
      items: [{
        name: "Proyecto Motagua",
        link: "/proyecto-motagua"
      }, {
        name: "Recover",
        link: "/recover"
      }, {
        name: "PlanetGold",
        link: "/planet-gold"
      }]
    }]
  }, {
    name: "Portales",
    link: "/portales",
    hasDropdown: true,
    columns: [{
      title: "Portales Gubernamentales",
      items: [{
        name: "SIELHO",
        link: "/portales/sielho"
      }, {
        name: "Portal Unico de Transparencia",
        link: "/portales/portal_transparencia"
      }, {
        name: "Presidencia",
        link: "/portales/presidencia"
      }]
    }, {
      title: "Portales Institucionales",
      items: [{
        name: "ONADICI",
        link: "/portales/onadici"
      }, {
        name: "Honducompras",
        link: "/portales/honducompras"
      }, {
        name: "TSC",
        link: "/portales/tsc"
      }]
    }]
  }];
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("header", {
      className: "bg-white w-full border-b border-gray-200",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: "max-w-7xl mx-auto px-4 py-4",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "flex flex-col items-center justify-center",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            className: "flex items-center space-x-8",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("img", {
              src: "/wp-content/uploads/2025/04/Gobierno-Color-768x768.png",
              alt: "Emblema de Honduras",
              className: "h-18"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              className: "h-12 w-px bg-gray-300 mx-2"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("img", {
              src: "/wp-content/uploads/2025/04/SERNA-Color-768x1017.png",
              alt: "Logo SERNA",
              className: "h-18"
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h1", {
            className: "text-2xl font-bold text-[#87cede] mt-4 text-center",
            children: "Secretaria de Recursos Naturales y Ambiente"
          })]
        })
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("nav", {
      className: "bg-linear-to-t from-[#7dbb5c] to-[#00903b] sticky top-0 z-50 w-full shadow-md",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: "max-w-7xl mx-auto px-4",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "flex items-center justify-between h-16",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "flex-shrink-0 md:hidden",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: "/",
              className: "text-white font-bold text-xl font-custom",
              children: "SERNA"
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "flex md:hidden",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
              onClick: toggleMenu,
              className: "inline-flex items-center justify-center p-2 rounded-md text-white hover:bg-black/20 focus:outline-none",
              "aria-expanded": isMenuOpen,
              "aria-label": "Toggle main menu",
              children: isMenuOpen ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                className: "h-6 w-6",
                fill: "none",
                viewBox: "0 0 24 24",
                stroke: "currentColor",
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                  strokeLinecap: "round",
                  strokeLinejoin: "round",
                  strokeWidth: 2,
                  d: "M6 18L18 6M6 6l12 12"
                })
              }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                className: "h-6 w-6",
                fill: "none",
                viewBox: "0 0 24 24",
                stroke: "currentColor",
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                  strokeLinecap: "round",
                  strokeLinejoin: "round",
                  strokeWidth: 2,
                  d: "M4 6h16M4 12h16M4 18h16"
                })
              })
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            className: "hidden md:flex md:items-center md:justify-between md:flex-1",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              className: "relative",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
                type: "text",
                placeholder: "Buscar...",
                className: "bg-white rounded-full py-1 px-4 text-sm focus:outline-none"
              })
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              className: "flex space-x-8",
              children: navItems.map((item, index) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                className: "relative group",
                children: item.hasDropdown ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
                  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
                    className: "text-white hover:text-[#e3a220] font-custom transition-colors duration-200 flex items-center",
                    onMouseEnter: () => setActiveDropdown(item.name),
                    onClick: () => toggleDropdown(item.name),
                    children: [item.name, /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                      className: "ml-1 h-4 w-4",
                      fill: "none",
                      viewBox: "0 0 24 24",
                      stroke: "currentColor",
                      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                        strokeLinecap: "round",
                        strokeLinejoin: "round",
                        strokeWidth: 2,
                        d: "M19 9l-7 7-7-7"
                      })
                    })]
                  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                    className: `absolute top-full right-0 mt-1 rounded-md shadow-lg bg-white py-6 z-50 transition-all duration-200 ${activeDropdown === item.name ? "opacity-100 visible" : "opacity-0 invisible"}`,
                    onMouseEnter: () => setActiveDropdown(item.name),
                    onMouseLeave: () => setActiveDropdown(null),
                    style: {
                      width: `${Math.min(item.columns.length * 200, 600)}px`,
                      maxWidth: "90vw"
                    },
                    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                      className: `grid ${getGridColumnsClass(item.columns)} gap-4 px-6`,
                      children: item.columns.map((column, colIndex) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
                        className: "space-y-4",
                        children: [column.link ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                          href: column.link,
                          className: "text-sm font-medium font-custom text-gray-900 hover:text-[#00903b]",
                          children: column.title
                        }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h3", {
                          className: "text-sm font-medium font-custom text-gray-900",
                          children: column.title
                        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("ul", {
                          className: "space-y-2",
                          children: column.items.map((subItem, subIndex) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
                            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                              href: subItem.link,
                              className: "text-sm w-full flex justify-between items-center px-3 py-2 rounded-md text-[#00903b] hover:bg-green-700 hover:text-white transition-colors duration-200",
                              children: subItem.name
                            })
                          }, subIndex))
                        })]
                      }, colIndex))
                    })
                  })]
                }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                  href: item.link,
                  className: "text-white hover:text-[#e3a220] transition-colors duration-200",
                  children: item.name
                })
              }, index))
            })]
          })]
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: `md:hidden ${isMenuOpen ? "block" : "hidden"}`,
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "px-2 pt-2 pb-3 space-y-1 bg-gray-50",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "px-3 py-2",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
              type: "text",
              placeholder: "Buscar...",
              className: "w-full bg-white rounded-md py-2 px-4 text-sm border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500"
            })
          }), navItems.map((item, index) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "w-full",
            children: item.hasDropdown ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
                onClick: () => toggleDropdown(item.name),
                className: "w-full flex justify-between items-center px-3 py-2 rounded-md text-[#00903b] hover:bg-green-700 hover:text-white transition-colors duration-200",
                children: [item.name, /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                  className: `ml-1 h-4 w-4 transition-transform duration-200 ${activeDropdown === item.name ? "transform rotate-180" : ""}`,
                  fill: "none",
                  viewBox: "0 0 24 24",
                  stroke: "currentColor",
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                    strokeLinecap: "round",
                    strokeLinejoin: "round",
                    strokeWidth: 2,
                    d: "M19 9l-7 7-7-7"
                  })
                })]
              }), activeDropdown === item.name && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                className: "pl-4 py-2 space-y-1",
                children: item.columns.map((column, colIndex) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
                  className: "mb-2",
                  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                    className: "px-3 py-1 font-medium text-sm",
                    children: column.title
                  }), column.items.map((subItem, subIndex) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                    href: subItem.link,
                    className: "block px-3 py-2 rounded-md text-black bg-[#7dbb5c] hover:bg-[#00903b] hover:text-white transition-colors duration-200 my-1",
                    children: subItem.name
                  }, subIndex))]
                }, colIndex))
              })]
            }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: item.link,
              className: "block px-3 py-2 rounded-md text-[#00903b] hover:bg-[#00903b] hover:text-white transition-colors duration-200",
              children: item.name
            })
          }, index))]
        })
      })]
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (NavbarComponent);

/***/ }),

/***/ "./src/scripts/Person.js":
/*!*******************************!*\
  !*** ./src/scripts/Person.js ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
class Person {
  constructor(name) {
    this.name = name;
    this.greet();
  }
  greet() {
    console.log(`Hello, my name is ${this.name}.`);
  }
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Person);

/***/ }),

/***/ "react":
/*!************************!*\
  !*** external "React" ***!
  \************************/
/***/ ((module) => {

"use strict";
module.exports = window["React"];

/***/ }),

/***/ "react-dom":
/*!***************************!*\
  !*** external "ReactDOM" ***!
  \***************************/
/***/ ((module) => {

"use strict";
module.exports = window["ReactDOM"];

/***/ }),

/***/ "react/jsx-runtime":
/*!**********************************!*\
  !*** external "ReactJSXRuntime" ***!
  \**********************************/
/***/ ((module) => {

"use strict";
module.exports = window["ReactJSXRuntime"];

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be in strict mode.
(() => {
"use strict";
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-dom/client */ "./node_modules/react-dom/client.js");
/* harmony import */ var _scripts_Person__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./scripts/Person */ "./src/scripts/Person.js");
/* harmony import */ var _scripts_ExampleReactComponent__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./scripts/ExampleReactComponent */ "./src/scripts/ExampleReactComponent.js");
/* harmony import */ var _scripts_NavbarComponent__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./scripts/NavbarComponent */ "./src/scripts/NavbarComponent.js");
/* harmony import */ var _scripts_FooterComponent__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./scripts/FooterComponent */ "./src/scripts/FooterComponent.js");
/* harmony import */ var _scripts_InicioComponent__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./scripts/InicioComponent */ "./src/scripts/InicioComponent.js");
/* harmony import */ var _scripts_InicioComponent__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_scripts_InicioComponent__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__);








const person1 = new _scripts_Person__WEBPACK_IMPORTED_MODULE_2__["default"]("Brad");

// Mount the navbar
if (document.querySelector("#navbar-root")) {
  const navRoot = react_dom_client__WEBPACK_IMPORTED_MODULE_1__.createRoot(document.querySelector("#navbar-root"));
  navRoot.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_scripts_NavbarComponent__WEBPACK_IMPORTED_MODULE_4__["default"], {}));
}

// Mount the example component
if (document.querySelector("#render-react-example-here")) {
  const root = react_dom_client__WEBPACK_IMPORTED_MODULE_1__.createRoot(document.querySelector("#render-react-example-here"));
  root.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_scripts_ExampleReactComponent__WEBPACK_IMPORTED_MODULE_3__["default"], {}));
}

// Mount the footer
if (document.querySelector("#footer-root")) {
  const footerRoot = react_dom_client__WEBPACK_IMPORTED_MODULE_1__.createRoot(document.querySelector("#footer-root"));
  footerRoot.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_scripts_FooterComponent__WEBPACK_IMPORTED_MODULE_5__["default"], {}));
}

// Mount the inicio component
/* if (document.querySelector("#inicio-root")) {
  const inicioRoot = ReactDOM.createRoot(document.querySelector("#inicio-root"))
  inicioRoot.render(<InicioComponent />)
} */
})();

/******/ })()
;
//# sourceMappingURL=index.js.map