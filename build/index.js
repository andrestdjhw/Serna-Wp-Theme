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

/***/ "./src/index.css":
/*!***********************!*\
  !*** ./src/index.css ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/scripts/ChatbotComponent.js":
/*!*****************************************!*\
  !*** ./src/scripts/ChatbotComponent.js ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


const SernaChatbot = () => {
  const [isOpen, setIsOpen] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [messages, setMessages] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)([{
    id: 1,
    text: "¡Hola! Soy el asistente virtual de SERNA. ¿En qué puedo ayudarte hoy?",
    sender: 'bot',
    timestamp: new Date()
  }]);
  const [inputMessage, setInputMessage] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)('');
  const [isTyping, setIsTyping] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const messagesEndRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);
  const scrollToBottom = () => {
    messagesEndRef.current?.scrollIntoView({
      behavior: "smooth"
    });
  };
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    scrollToBottom();
  }, [messages]);
  const handleSendMessage = e => {
    e.preventDefault();
    if (inputMessage.trim() === '') return;

    // Agregar mensaje del usuario
    const userMessage = {
      id: Date.now(),
      text: inputMessage,
      sender: 'user',
      timestamp: new Date()
    };
    setMessages(prev => [...prev, userMessage]);
    setInputMessage('');
    setIsTyping(true);

    // Simular respuesta del bot (aquí conectarías tu API)
    setTimeout(() => {
      const botResponse = getBotResponse(inputMessage);
      const botMessage = {
        id: Date.now() + 1,
        text: botResponse,
        sender: 'bot',
        timestamp: new Date()
      };
      setMessages(prev => [...prev, botMessage]);
      setIsTyping(false);
    }, 1500);
  };
  const getBotResponse = userInput => {
    const input = userInput.toLowerCase();
    if (input.includes('licencia') || input.includes('permiso')) {
      return "Para obtener una licencia ambiental, puedes visitar nuestra sección de servicios o contactar directamente a nuestras oficinas. ¿Te gustaría conocer los requisitos específicos?";
    } else if (input.includes('forestal') || input.includes('bosque')) {
      return "Ofrecemos servicios de gestión forestal sostenible. Puedes consultar nuestros programas de reforestación y manejo de bosques en la sección correspondiente.";
    } else if (input.includes('agua') || input.includes('hídrico')) {
      return "SERNA gestiona la protección de recursos hídricos. ¿Necesitas información sobre permisos de uso de agua o programas de conservación?";
    } else if (input.includes('denuncia') || input.includes('reportar')) {
      return "Puedes reportar infracciones ambientales a través de nuestro sistema de denuncias. ¿Te gustaría que te proporcione los pasos para realizar una denuncia?";
    } else if (input.includes('contacto') || input.includes('teléfono')) {
      return "Puedes contactarnos en nuestras oficinas centrales o regionales. ¿En qué región te encuentras para proporcionarte la información de contacto específica?";
    } else {
      return "Gracias por tu consulta. Te puedo ayudar con información sobre licencias ambientales, gestión forestal, protección del agua, denuncias ambientales y más. ¿Sobre qué tema específico te gustaría saber?";
    }
  };
  const quickActions = [{
    text: "Licencias Ambientales",
    icon: "📋"
  }, {
    text: "Gestión Forestal",
    icon: "🌲"
  }, {
    text: "Protección del Agua",
    icon: "💧"
  }, {
    text: "Hacer Denuncia",
    icon: "⚠️"
  }];
  const handleQuickAction = action => {
    setInputMessage(action);
  };
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    className: "fixed bottom-6 right-6 z-50",
    children: [isOpen && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: "mb-4 w-80 h-96 bg-white rounded-lg shadow-2xl border border-gray-200 flex flex-col overflow-hidden",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "bg-gradient-to-r from-[#231f20] to-[#666666] text-white p-4 flex items-center justify-between",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "flex items-center space-x-2",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "w-8 h-8 bg-white bg-opacity-20 rounded-full flex items-center justify-center",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
              className: "w-5 h-5",
              fill: "currentColor",
              viewBox: "0 0 24 24",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                d: "M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"
              })
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h3", {
              className: "font-semibold text-sm",
              children: "Asistente SERNA"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
              className: "text-xs opacity-90",
              children: "En l\xEDnea"
            })]
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
          onClick: () => setIsOpen(false),
          className: "text-white hover:text-[#231f20] hover:bg-white hover:bg-opacity-20 rounded p-1 transition-colors duration-200",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
            className: "w-4 h-4",
            fill: "none",
            stroke: "currentColor",
            viewBox: "0 0 24 24",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
              strokeLinecap: "round",
              strokeLinejoin: "round",
              strokeWidth: 2,
              d: "M6 18L18 6M6 6l12 12"
            })
          })
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "flex-1 overflow-y-auto p-4 space-y-3",
        children: [messages.map(message => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: `flex ${message.sender === 'user' ? 'justify-end' : 'justify-start'}`,
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: `max-w-xs px-3 py-2 rounded-lg text-sm ${message.sender === 'user' ? 'bg-[#264da0] text-white' : 'bg-gray-100 text-gray-800 border border-gray-200'}`,
            children: message.text
          })
        }, message.id)), isTyping && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "flex justify-start",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "bg-gray-100 border border-gray-200 px-3 py-2 rounded-lg",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              className: "flex space-x-1",
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                className: "w-2 h-2 bg-gray-400 rounded-full animate-pulse"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                className: "w-2 h-2 bg-gray-400 rounded-full animate-pulse",
                style: {
                  animationDelay: '0.2s'
                }
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                className: "w-2 h-2 bg-gray-400 rounded-full animate-pulse",
                style: {
                  animationDelay: '0.4s'
                }
              })]
            })
          })
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          ref: messagesEndRef
        })]
      }), messages.length === 1 && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "px-4 pb-2",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "text-xs text-gray-500 mb-2",
          children: "Temas frecuentes:"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "flex flex-wrap gap-1",
          children: quickActions.map((action, index) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
            onClick: () => handleQuickAction(action.text),
            className: "text-xs bg-[#263b80] bg-opacity-20 text-white px-2 py-1 rounded-full hover:bg-opacity-30 transition-colors duration-200",
            children: [action.icon, " ", action.text]
          }, index))
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: "p-4 border-t border-gray-200",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "flex space-x-2",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
            type: "text",
            value: inputMessage,
            onChange: e => setInputMessage(e.target.value),
            onKeyPress: e => e.key === 'Enter' && handleSendMessage(e),
            placeholder: "Escribe tu consulta...",
            className: "flex-1 px-3 py-2 text-sm border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-[#E0AE19] focus:border-transparent"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
            onClick: handleSendMessage,
            className: "bg-[#264da0] text-white p-2 rounded-full hover:bg-[#263b80] transition-colors duration-200 disabled:opacity-50",
            disabled: inputMessage.trim() === '',
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
              className: "w-4 h-4",
              fill: "none",
              stroke: "currentColor",
              viewBox: "0 0 24 24",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                strokeLinecap: "round",
                strokeLinejoin: "round",
                strokeWidth: 2,
                d: "M12 19l9 2-9-18-9 18 9-2zm0 0v-8"
              })
            })
          })]
        })
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
      onClick: () => setIsOpen(!isOpen),
      className: `w-14 h-14 rounded-full shadow-lg flex items-center justify-center transition-all duration-300 transform hover:scale-105 ${isOpen ? 'bg-gray-600 text-white' : 'bg-gradient-to-r from-[#263b80] to-[#87cede] text-white'}`,
      children: isOpen ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
        className: "w-6 h-6",
        fill: "none",
        stroke: "currentColor",
        viewBox: "0 0 24 24",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
          strokeLinecap: "round",
          strokeLinejoin: "round",
          strokeWidth: 2,
          d: "M6 18L18 6M6 6l12 12"
        })
      }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "relative",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
          className: "w-6 h-6",
          fill: "currentColor",
          viewBox: "0 0 24 24",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
            d: "M20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h4l4 4 4-4h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-2 12H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"
          })
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "absolute -top-1 -right-1 w-3 h-3 bg-[#ad8411] rounded-full animate-pulse"
        })]
      })
    })]
  });
};
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (SernaChatbot);

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

/***/ "./src/scripts/FooterComponent.js":
/*!****************************************!*\
  !*** ./src/scripts/FooterComponent.js ***!
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


function FooterComponent() {
  const socialLinks = [{
    name: "Facebook",
    icon: "facebook",
    url: "https://www.facebook.com/sernaHN/?locale=es_LA"
  }, {
    name: "Twitter",
    icon: "twitter",
    url: "https://x.com/sernaHN"
  }, {
    name: "Instagram",
    icon: "instagram",
    url: "https://www.instagram.com/sernahn?igsh=MWtqbzlqeXo1amxsMQ=="
  }, {
    name: "TikTok",
    icon: "tiktok",
    url: "https://www.tiktok.com/@sernahn?_t=ZM-8wLr9KveuyE&_r=1"
  }, {
    name: "YouTube",
    icon: "youtube",
    url: "https://www.youtube.com/@sernahn-gob"
  }];

  // Columnas del Footer y Estructura de datos
  // Columnas del Footer y Estructura de datos
  const footerColumns = [{
    title: "Dirección",
    content: ["Despacho de Recursos Naturales y", "Ambiente, SERNA, ", " Edificio Santa Fe, Colonia Castaño Sur, Tegucigalpa", "M.D.C., Honduras, C.A."]
  }, {
    title: "Contáctenos",
    content: ["Tel: (+504) 2232-9200", "Horario: 9:00 A.M. - 4:00 P.M."]
  }, {
    title: "Nosotros",
    links: [{
      name: "Perfil",
      url: "/nosotros/perfil"
    }, {
      name: "Organigrama",
      url: "/nosotros/organigrama"
    }, {
      name: "Oportunidades",
      url: "/nosotros/oportunidades"
    }, {
      name: "Comité de Control Interno",
      url: "/nosotros/cocoin"
    }, {
      name: "Comité de Probidad y Ética Pública",
      url: "/nosotros/cepep"
    }, {
      name: "Preguntas Frecuentes",
      url: "/nosotros/faq"
    }, {
      name: "Te escuchamos",
      url: "/contacto"
    }]
  }, {
    title: "Direcciones",
    links: [{
      name: "CESCCO",
      url: "/direcciones/cescco"
    }, {
      name: "UTOH",
      url: "/direcciones/utoh"
    }, {
      name: "DIBIO",
      url: "/direcciones/dibio"
    }, {
      name: "DGA",
      url: "/direcciones/dga"
    }, {
      name: "DECA",
      url: "/direcciones/deca"
    }, {
      name: "DNCC",
      url: "/direcciones/dncc"
    }, {
      name: "UTOH",
      url: "/direcciones/utoh"
    }]
  }, {
    title: "Regionales",
    links: [{
      name: "Copán",
      url: "/regionales/regional-copan"
    }, {
      name: "Comayagua",
      url: "/regionales/comayagua"
    }, {
      name: "Atlántico",
      url: "/regionales/regional-litoral-del-atlantico"
    }, {
      name: "Roatán",
      url: "/regionales/regional-insular"
    }, {
      name: "Choluteca",
      url: "/regionales/regional-choluteca"
    }, {
      name: "San Pedro Sula",
      url: "/regionales/regional-san-pedro-sula"
    }, {
      name: "Ocotepeque",
      url: "/regionales/regional-ocotepeque"
    }, {
      name: "Olancho",
      url: "/regionales/regional-olancho"
    }]
  }];
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("footer", {
    className: "relative text-white",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: "w-full overflow-hidden leading-[0] bg-gradient-to-r from-[#231f20] via-[#666666] to-[#666666]",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
        viewBox: "0 0 1440 120",
        xmlns: "http://www.w3.org/2000/svg",
        preserveAspectRatio: "none",
        className: "block w-full h-12 md:h-20",
        fill: "white",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
          d: "M0 0H1440V60L1380 56.7C1320 53 1200 47 1080 43.3C960 40 840 40 720 43.3C600 47 480 53 360 46.7C240 40 120 20 60 10L0 0Z"
        })
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: "bg-gradient-to-r from-[#231f20] via-[#666666] to-[#666666] pt-4 pb-6",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "max-w-7xl mx-auto px-4",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "grid grid-cols-1 md:grid-cols-6 gap-8",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            className: "md:col-span-1 flex flex-col items-center md:items-start",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              className: "w-40 mb-8",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("img", {
                src: "/wp-content/uploads/2026/02/Blanco-SERNA.png",
                alt: "SERNA",
                className: "w-full"
              })
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              className: "flex space-x-2 mb-6",
              children: socialLinks.map((social, index) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                href: social.url,
                className: "text-white hover:text-[#E0AE19] transition-colors",
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
                  className: "text-sm hover:text-[#E0AE19] transition-colors",
                  children: link.name
                })
              }, i))
            })]
          }, index))]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "mt-6 pt-6 border-t border-white/20 text-center text-base",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("p", {
            children: ["\xA9 ", new Date().getFullYear(), " SERNA - Secretar\xEDa de Recursos Naturales y Ambiente. Todos los derechos reservados."]
          })
        })]
      })
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (FooterComponent);

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

  // Calcula cuadricula de columnas basado en numero de columnas
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

  // Estructura de datos de la barra de navegacion
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
        link: "/nosotros/perfil"
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
      }, {
        name: "Contacto",
        link: "/contacto"
      }]
    }]
  }, {
    name: "Webmail",
    link: "https://login.microsoftonline.com/common/oauth2/v2.0/authorize?client_id=9199bf20-a13f-4107-85dc-02114787ef48&scope=https%3A%2F%2Foutlook.office.com%2F.default%20openid%20profile%20offline_access&redirect_uri=https%3A%2F%2Foutlook.live.com%2Fmail%2F&client-request-id=cbf620c2-64c5-a43e-227e-d0b69d75a947&response_mode=fragment&client_info=1&prompt=select_account&nonce=019852b6-5247-7c5a-8586-495d1d0d1196&state=eyJpZCI6IjAxOTg1MmI2LTUyNDctN2UyZS05NTI2LTY5NjdkMjRkMGRjNCIsIm1ldGEiOnsiaW50ZXJhY3Rpb25UeXBlIjoicmVkaXJlY3QifX0%3D&claims=%7B%22access_token%22%3A%7B%22xms_cc%22%3A%7B%22values%22%3A%5B%22CP1%22%5D%7D%7D%7D&x-client-SKU=msal.js.browser&x-client-VER=4.14.0&response_type=code&code_challenge=V_FtD9t6XFT0Qv-_dqA3NxghrtQ_pMuhPgSiLeKkGt0&code_challenge_method=S256&cobrandid=ab0455a0-8d03-46b9-b18b-df2f57b9e44c&fl=dob,flname,wld&sso_reload=true",
    hasDropdown: false,
    external: true
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
        link: "/direcciones/cescco/anuncios"
      }, {
        name: "RAEE",
        link: "/direcciones/cescco/rae"
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
      }, {
        name: "UTOH",
        link: "/direcciones/utoh"
      }]
    }, {
      title: "Deca",
      link: "/direcciones/deca",
      items: [{
        name: "Anuncios Deca",
        link: "/direcciones/deca/anuncios-deca"
      }, {
        name: "Nuevos Requisitos SLAS",
        link: "/direcciones/deca/nuevos-requisitos-slas"
      }, {
        name: "Requisitos de Renovacion de Licencia Ambiental",
        link: "/direcciones/deca/requisitos-de-renovacion-licencia-ambiental"
      }, {
        name: "Requisito de constancia de no requerir licencia ambiental",
        link: "/direcciones/deca/requisitos-de-constancia-de-no-requerir-licencia-ambiental"
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
        link: "/regionales/comayagua"
      }, {
        name: "Regional San Pedro Sula",
        link: "/regionales/regional-san-pedro-sula"
      }, {
        name: "Regional del Litoral Atlantico",
        link: "/regionales/regional-litoral-del-atlantico"
      }, {
        name: "Regional Insular",
        link: "/regionales/regional-insular"
      }]
    }, {
      title: "Sur y Este",
      items: [{
        name: "Regional Choluteca",
        link: "/regionales/regional-choluteca"
      }, {
        name: "Regional Olancho",
        link: "/regionales/regional-olancho"
      }]
    }, {
      title: "Occidente",
      items: [{
        name: "Regional Ocotepeque",
        link: "/regionales/regional-ocotepeque"
      }, {
        name: "Regional Copan",
        link: "/regionales/regional-copan"
      }]
    }]
  }, {
    name: "OCP",
    link: "/ocp",
    hasDropdown: true,
    columns: [{
      title: "",
      items: [{
        name: "ADAPTARC+",
        link: "/ocp/adaptarce"
      }, {
        name: "CONECTA+",
        link: "/ocp/conecta"
      }, {
        name: "COPS4",
        link: "/ocp/cops4"
      }]
    }, {
      title: "",
      items: [{
        name: "Proyecto Motagua",
        link: "/ocp/proyecto-motagua"
      }, {
        name: "Recover",
        link: "/ocp/recover"
      }, {
        name: "PlanetGold",
        link: "/ocp/planet-gold"
      }, {
        name: "Proyecto Goascoran",
        link: "/ocp/goascoran"
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
        link: "https://sielho.iaip.gob.hn/inicio/",
        external: true
      }, {
        name: "Portal Unico de Transparencia",
        link: "https://portalunico.iaip.gob.hn/",
        external: true
      }, {
        name: "Presidencia",
        link: "https://presidencia.gob.hn/",
        external: true
      }]
    }, {
      title: "Portales Institucionales",
      items: [{
        name: "ONADICI",
        link: "https://www.onadici.gob.hn/",
        external: true
      }, {
        name: "Honducompras",
        link: "https://www.honducompras.gob.hn/",
        external: true
      }, {
        name: "TSC",
        link: "https://www.tsc.gob.hn/",
        external: true
      }]
    }]
  }];
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("header", {
      className: "bg-[#FFFFFF] w-full border-b border-gray-200",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: "max-w-7xl mx-auto px-4 py-4",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "flex flex-col items-center justify-center",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "flex items-center space-x-8",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("img", {
              src: "/wp-content/uploads/2026/02/v2-Horizontal-Color-SERNA-scaled.png",
              alt: "Emblema de Honduras",
              className: "h-18"
            })
          })
        })
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("nav", {
      className: "site-header sticky top-0 z-50 w-full shadow-md bg-gradient-to-t from-[#264da0] to-[#263b80]",
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
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "hidden md:flex md:items-center md:justify-center md:flex-1",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
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
                    className: `absolute top-full left-1/6 transform -translate-x-1/2 mt-1 rounded-md shadow-lg bg-white py-6 z-50 transition-all duration-200 ${activeDropdown === item.name ? "opacity-100 visible" : "opacity-0 invisible"}`,
                    onMouseEnter: () => setActiveDropdown(item.name),
                    onMouseLeave: () => setActiveDropdown(null),
                    style: {
                      width: `${Math.min(item.columns.length * 250, 800)}px`,
                      maxWidth: "90vw"
                    },
                    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                      className: `grid ${getGridColumnsClass(item.columns)} gap-4 px-6`,
                      children: item.columns.map((column, colIndex) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
                        className: "space-y-4",
                        children: [column.link ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                          href: column.link,
                          className: "text-sm font-medium font-custom text-gray-900 hover:text-[#264da0]",
                          children: column.title
                        }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h3", {
                          className: "text-sm font-medium font-custom text-gray-900",
                          children: column.title
                        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("ul", {
                          className: "space-y-2",
                          children: column.items.map((subItem, subIndex) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
                            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                              href: subItem.link,
                              target: subItem.external ? "_blank" : undefined,
                              rel: subItem.external ? "noopener noreferrer" : undefined,
                              className: "text-sm w-full flex justify-between items-center px-3 py-2 rounded-md text-[#264da0] hover:bg-[#264da0] hover:text-white transition-colors duration-200",
                              children: [subItem.name, subItem.external && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                                className: "w-3 h-3 ml-1",
                                fill: "none",
                                stroke: "currentColor",
                                viewBox: "0 0 24 24",
                                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                                  strokeLinecap: "round",
                                  strokeLinejoin: "round",
                                  strokeWidth: 2,
                                  d: "M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
                                })
                              })]
                            })
                          }, subIndex))
                        })]
                      }, colIndex))
                    })
                  })]
                }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                  href: item.link,
                  target: item.external ? "_blank" : undefined,
                  rel: item.external ? "noopener noreferrer" : undefined,
                  className: "text-white hover:text-[#e3a220] font-custom transition-colors duration-200",
                  children: item.name
                })
              }, index))
            })
          })]
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: `md:hidden ${isMenuOpen ? "block" : "hidden"}`,
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "px-2 pt-2 pb-3 space-y-1 bg-gray-50",
          children: navItems.map((item, index) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "w-full",
            children: item.hasDropdown ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
                onClick: () => toggleDropdown(item.name),
                className: "w-full flex justify-between items-center px-3 py-2 rounded-md text-[#263b80] hover:bg-[#264da0] hover:text-white transition-colors duration-200",
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
                  children: [column.link ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                    href: column.link,
                    className: "block px-3 py-1 font-medium text-sm text-[#263b80] hover:text-[#e3a220] transition-colors duration-200",
                    children: column.title
                  }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                    className: "px-3 py-1 font-medium text-sm",
                    children: column.title
                  }), column.items.map((subItem, subIndex) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                    href: subItem.link,
                    target: subItem.external ? "_blank" : undefined,
                    rel: subItem.external ? "noopener noreferrer" : undefined,
                    className: "flex items-center justify-between px-3 py-2 rounded-md text-white bg-[#263b80] hover:bg-[#264da0] hover:text-white transition-colors duration-200 my-1",
                    children: [subItem.name, subItem.external && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                      className: "w-3 h-3 ml-1",
                      fill: "none",
                      stroke: "currentColor",
                      viewBox: "0 0 24 24",
                      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                        strokeLinecap: "round",
                        strokeLinejoin: "round",
                        strokeWidth: 2,
                        d: "M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
                      })
                    })]
                  }, subIndex))]
                }, colIndex))
              })]
            }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: item.link,
              target: item.external ? "_blank" : undefined,
              rel: item.external ? "noopener noreferrer" : undefined,
              className: "block px-3 py-2 rounded-md text-[#263b80] hover:bg-[#264da0] hover:text-white transition-colors duration-200",
              children: item.name
            })
          }, index))
        })
      })]
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (NavbarComponent);

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
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-dom/client */ "./node_modules/react-dom/client.js");
/* harmony import */ var _index_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./index.css */ "./src/index.css");
/* harmony import */ var _scripts_ExampleReactComponent__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./scripts/ExampleReactComponent */ "./src/scripts/ExampleReactComponent.js");
/* harmony import */ var _scripts_FooterComponent__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./scripts/FooterComponent */ "./src/scripts/FooterComponent.js");
/* harmony import */ var _scripts_NavbarComponent__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./scripts/NavbarComponent */ "./src/scripts/NavbarComponent.js");
/* harmony import */ var _scripts_ChatbotComponent__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./scripts/ChatbotComponent */ "./src/scripts/ChatbotComponent.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__);




// Importar componentes





// Función para inicializar componentes cuando el DOM esté listo

function initializeComponents() {
  // Renderizar NavbarComponent si existe el contenedor
  const navbarContainer = document.getElementById('navbar-react');
  if (navbarContainer) {
    try {
      const navbarRoot = (0,react_dom_client__WEBPACK_IMPORTED_MODULE_1__.createRoot)(navbarContainer);
      navbarRoot.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_scripts_NavbarComponent__WEBPACK_IMPORTED_MODULE_5__["default"], {}));
      console.log('✅ NavbarComponent renderizado correctamente');
    } catch (error) {
      console.error('❌ Error renderizando NavbarComponent:', error);
    }
  }

  // Renderizar FooterComponent si existe el contenedor
  const footerContainer = document.getElementById('footer-react');
  if (footerContainer) {
    try {
      const footerRoot = (0,react_dom_client__WEBPACK_IMPORTED_MODULE_1__.createRoot)(footerContainer);
      footerRoot.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_scripts_FooterComponent__WEBPACK_IMPORTED_MODULE_4__["default"], {}));
      console.log('✅ FooterComponent renderizado correctamente');
    } catch (error) {
      console.error('❌ Error renderizando FooterComponent:', error);
    }
  }

  // Renderizar ExampleReactComponent si existe el contenedor
  const exampleContainer = document.getElementById('example-react');
  if (exampleContainer) {
    try {
      const exampleRoot = (0,react_dom_client__WEBPACK_IMPORTED_MODULE_1__.createRoot)(exampleContainer);
      exampleRoot.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_scripts_ExampleReactComponent__WEBPACK_IMPORTED_MODULE_3__["default"], {}));
      console.log('✅ ExampleReactComponent renderizado correctamente');
    } catch (error) {
      console.error('❌ Error renderizando ExampleReactComponent:', error);
    }
  }

  // Renderizar Chatbot
  let chatbotContainer = document.getElementById('serna-chatbot');

  // Si no existe el contenedor, crearlo
  if (!chatbotContainer) {
    chatbotContainer = document.createElement('div');
    chatbotContainer.id = 'serna-chatbot';
    document.body.appendChild(chatbotContainer);
  }
  if (chatbotContainer) {
    try {
      const chatbotRoot = (0,react_dom_client__WEBPACK_IMPORTED_MODULE_1__.createRoot)(chatbotContainer);
      chatbotRoot.render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_scripts_ChatbotComponent__WEBPACK_IMPORTED_MODULE_6__["default"], {}));
      console.log('✅ Chatbot renderizado correctamente');
    } catch (error) {
      console.error('❌ Error renderizando Chatbot:', error);
    }
  }
}

// Inicializar cuando el DOM esté completamente cargado
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initializeComponents);
} else {
  // El DOM ya está cargado
  initializeComponents();
}
})();

/******/ })()
;
//# sourceMappingURL=index.js.map