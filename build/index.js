/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./node_modules/react-dom/client.js":
/*!******************************************!*\
  !*** ./node_modules/react-dom/client.js ***!
  \******************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



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

/***/ "./src/scripts/NavbarComponent.js":
/*!****************************************!*\
  !*** ./src/scripts/NavbarComponent.js ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

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

  // Navigation structure with megamenu dropdowns
  const navItems = [{
    name: "Inicio",
    link: "/",
    hasDropdown: false
  }, {
    name: "Nosotros",
    link: "/nosotros",
    hasDropdown: true,
    isMultiColumn: true,
    columns: [{
      title: "Sobre Nosotros",
      items: [{
        name: "Perfil",
        link: "/nosotros/Perfil"
      }, {
        name: "Comite de Control Interno",
        link: "/nosotros/cocoin"
      }, {
        name: "Comite de Probidad y Etica Publica",
        link: "/nosotros/cepep"
      }, {
        name: "Organigrama",
        link: "/nosotros/organigrama"
      }]
    }, {
      title: "Recursos",
      items: [{
        name: "Oportunidades",
        link: "/nosotros/oportunidades"
      }, {
        name: "Foro",
        link: "/nosotros/foro"
      }, {
        name: "Preguntas Frecuentes",
        link: "/nosotros/faq"
      }]
    }]
  }, {
    name: "Webmail",
    link: "/webmail",
    hasDropdown: false
  }, {
    name: "SLAS",
    link: "/slas",
    hasDropdown: false
  }, {
    name: "Direcciones",
    link: "/direcciones",
    hasDropdown: true,
    isMultiColumn: true,
    columns: [{
      title: "CESCCO",
      link: "/direcciones/cescco",
      items: [{
        name: "Anuncios",
        link: "/direcciones/cescco/anuncios"
      }, {
        name: "RAE",
        link: "direcciones/cescco/rae"
      }]
    }, {
      title: "Otras Direcciones",
      items: [{
        name: "DGA",
        link: "/direcciones/dga"
      }, {
        name: "DNCC",
        link: "/direcciones/dncc"
      }, {
        name: "DGRH",
        link: "/direcciones/dgrh"
      }, {
        name: "DIBIO",
        link: "/direcciones/dibio"
      }]
    }, {
      title: "Deca",
      items: [{
        name: "Anuncios Deca",
        link: "/direcciones/deca/anuncions_deca"
      }, {
        name: "Nuevos Requisitos SLAS",
        link: "/direcciones/deca/requisitos_slas"
      }, {
        name: "Requisitos de Renovacion de Licencia Ambiental",
        link: "/direcciones/deca/requisitos_renovacion_ambiental"
      }, {
        name: "Requisito de constancia de no requerir licencia ambiental",
        link: "/direcciones/deca/requisitos_constancia_no_licambiental"
      }]
    }]
  }, {
    name: "Regionales",
    link: "/regionales",
    hasDropdown: true,
    isMultiColumn: true,
    columns: [{
      title: "Norte y Centro",
      items: [{
        name: "Comayagua",
        link: "/regionales/comayagua"
      }, {
        name: "Regional San Pedro Sula",
        link: "/regionales/san_pedro_sula"
      }, {
        name: "Regional del Litoral Atlantico",
        link: "/regionales/litoral_atlantico"
      }, {
        name: "Regional Insular",
        link: "/regionales/insular"
      }]
    }, {
      title: "Sur y Este",
      items: [{
        name: "Regional Choluteca",
        link: "/regionales/choluteca"
      }, {
        name: "Regional Olancho",
        link: "/regionales/olancho"
      }]
    }, {
      title: "Occidente",
      items: [{
        name: "Regional Ocotepeque",
        link: "/regionales/ocotepeque"
      }, {
        name: "Regional Copan",
        link: "/regionales/copan"
      }]
    }]
  }, {
    name: "OCP",
    link: "/ocp",
    hasDropdown: true,
    isMultiColumn: true,
    columns: [{
      title: "Proyectos Principales",
      items: [{
        name: "ADAPTARC+",
        link: "/ocp/adaptarce"
      }, {
        name: "CONECTA+",
        link: "/ocp/contecta"
      }, {
        name: "COPS4",
        link: "/ocp/cops4"
      }]
    }, {
      title: "Otros Proyectos",
      items: [{
        name: "Proyecto Motagua",
        link: "/ocp/proyecto_motagua"
      }, {
        name: "Recover",
        link: "/ocp/recover"
      }, {
        name: "PlanetGold",
        link: "/ocp/planet_gold"
      }]
    }]
  }, {
    name: "Portales",
    link: "/portales",
    hasDropdown: true,
    isMultiColumn: true,
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
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("nav", {
    className: "bg-gradient-to-b from-green-600 to-green-500 sticky top-0 z-50",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: "max-w-7xl mx-auto px-4 sm:px-6 lg:px-8",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "flex items-center justify-between h-16",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "flex-shrink-0",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "/",
            className: "text-white font-bold text-xl",
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
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "hidden md:flex md:items-center md:space-x-8",
          children: navItems.map((item, index) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "relative group",
            children: item.hasDropdown ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
                className: "text-white hover:text-sky-300 transition-colors duration-200 flex items-center",
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
              }), item.isMultiColumn && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                className: `absolute top-full left-0 mt-1 w-full rounded-md shadow-lg bg-white py-6 z-50 transition-all duration-200 ${activeDropdown === item.name ? "opacity-100 visible" : "opacity-0 invisible"}`,
                onMouseEnter: () => setActiveDropdown(item.name),
                onMouseLeave: () => setActiveDropdown(null),
                style: {
                  minWidth: '600px',
                  maxWidth: '800px'
                },
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                  className: "grid grid-cols-3 gap-4 px-6",
                  children: item.columns.map((column, colIndex) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
                    className: "space-y-4",
                    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h3", {
                      className: "text-sm font-medium text-gray-900",
                      children: column.title
                    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("ul", {
                      className: "space-y-2",
                      children: column.items.map((subItem, subIndex) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
                        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                          href: subItem.link,
                          className: "text-sm text-green-600 hover:text-lime-500",
                          children: subItem.name
                        })
                      }, subIndex))
                    })]
                  }, colIndex))
                })
              }), !item.isMultiColumn && item.dropdownItems && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                className: `absolute top-full left-0 mt-1 w-48 rounded-md shadow-lg bg-white py-1 z-50 transition-all duration-200 ${activeDropdown === item.name ? "opacity-100 visible" : "opacity-0 invisible"}`,
                onMouseEnter: () => setActiveDropdown(item.name),
                onMouseLeave: () => setActiveDropdown(null),
                children: item.dropdownItems.map((dropdownItem, dropdownIndex) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                  href: dropdownItem.link,
                  className: "block px-4 py-2 text-sm text-green-700 hover:bg-lime-400",
                  children: dropdownItem.name
                }, dropdownIndex))
              })]
            }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: item.link,
              className: "text-white hover:text-sky-300 transition-colors duration-200",
              children: item.name
            })
          }, index))
        })]
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: `md:hidden ${isMenuOpen ? 'block' : 'hidden'}`,
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: "px-2 pt-2 pb-3 space-y-1 bg-gray-50",
        children: navItems.map((item, index) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "w-full",
          children: item.hasDropdown ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
              onClick: () => toggleDropdown(item.name),
              className: "w-full flex justify-between items-center px-3 py-2 rounded-md text-black hover:bg-green-700 transition-colors duration-200",
              children: [item.name, /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                className: `ml-1 h-4 w-4 transition-transform duration-200 ${activeDropdown === item.name ? 'transform rotate-180' : ''}`,
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
              children: item.isMultiColumn ? item.columns.map((column, colIndex) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
                className: "mb-2",
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                  className: "px-3 py-1 font-medium text-sm",
                  children: column.title
                }), column.items.map((subItem, subIndex) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                  href: subItem.link,
                  className: "block px-3 py-2 rounded-md text-black bg-green-100 hover:bg-green-200 transition-colors duration-200 my-1",
                  children: subItem.name
                }, subIndex))]
              }, colIndex)) : item.dropdownItems.map((dropdownItem, dropdownIndex) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                href: dropdownItem.link,
                className: "block px-3 py-2 rounded-md text-white bg-green-800 hover:bg-green-900 transition-colors duration-200",
                children: dropdownItem.name
              }, dropdownIndex))
            })]
          }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: item.link,
            className: "block px-3 py-2 rounded-md text-black hover:bg-green-700 transition-colors duration-200",
            children: item.name
          })
        }, index))
      })
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

module.exports = window["React"];

/***/ }),

/***/ "react-dom":
/*!***************************!*\
  !*** external "ReactDOM" ***!
  \***************************/
/***/ ((module) => {

module.exports = window["ReactDOM"];

/***/ }),

/***/ "react/jsx-runtime":
/*!**********************************!*\
  !*** external "ReactJSXRuntime" ***!
  \**********************************/
/***/ ((module) => {

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
// This entry needs to be wrapped in an IIFE because it needs to be isolated against other modules in the chunk.
(() => {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _scripts_Person__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./scripts/Person */ "./src/scripts/Person.js");
/* harmony import */ var _scripts_ExampleReactComponent__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./scripts/ExampleReactComponent */ "./src/scripts/ExampleReactComponent.js");
/* harmony import */ var _scripts_NavbarComponent__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./scripts/NavbarComponent */ "./src/scripts/NavbarComponent.js");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! react-dom/client */ "./node_modules/react-dom/client.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5__);






const person1 = new _scripts_Person__WEBPACK_IMPORTED_MODULE_0__["default"]("Brad");

// Mount the navbar
if (document.querySelector("#navbar-root")) {
  const navRoot = react_dom_client__WEBPACK_IMPORTED_MODULE_4__.createRoot(document.querySelector("#navbar-root"));
  navRoot.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5__.jsx)(_scripts_NavbarComponent__WEBPACK_IMPORTED_MODULE_2__["default"], {}));
}

// Mount the example component
if (document.querySelector("#render-react-example-here")) {
  const root = react_dom_client__WEBPACK_IMPORTED_MODULE_4__.createRoot(document.querySelector("#render-react-example-here"));
  root.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_5__.jsx)(_scripts_ExampleReactComponent__WEBPACK_IMPORTED_MODULE_1__["default"], {}));
}
})();

/******/ })()
;
//# sourceMappingURL=index.js.map