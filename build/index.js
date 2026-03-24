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
    url: "https://www.facebook.com/sernaHN/?locale=es_LA",
    icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
      width: "16",
      height: "16",
      fill: "currentColor",
      viewBox: "0 0 16 16",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
        d: "M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"
      })
    })
  }, {
    name: "Twitter / X",
    url: "https://x.com/sernaHN",
    icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
      width: "15",
      height: "15",
      fill: "currentColor",
      viewBox: "0 0 16 16",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
        d: "M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"
      })
    })
  }, {
    name: "Instagram",
    url: "https://www.instagram.com/sernahn",
    icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
      width: "16",
      height: "16",
      fill: "currentColor",
      viewBox: "0 0 16 16",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
        d: "M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
      })
    })
  }, {
    name: "TikTok",
    url: "https://www.tiktok.com/@sernahn",
    icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
      width: "14",
      height: "14",
      fill: "currentColor",
      viewBox: "0 0 16 16",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
        d: "M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"
      })
    })
  }, {
    name: "YouTube",
    url: "https://www.youtube.com/@sernahn-gob",
    icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
      width: "17",
      height: "17",
      fill: "currentColor",
      viewBox: "0 0 16 16",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
        d: "M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"
      })
    })
  }];
  const infoBlocks = [{
    label: "Dirección",
    lines: ["Edificio Santa Fe, Colonia Castaño Sur,", "Tegucigalpa M.D.C., Honduras, C.A."]
  }, {
    label: "Teléfono",
    lines: ["(+504) 2232-9200"]
  }, {
    label: "Horario",
    lines: ["Lunes a Viernes", "7:30 A.M. – 3:30 P.M."]
  }];
  const linkColumns = [{
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
      name: "Control Interno (COCOIN)",
      url: "/nosotros/cocoin"
    }, {
      name: "Probidad y Ética (CEPEP)",
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
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("style", {
      children: `
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap');
        .footer-root { font-family: 'Outfit', sans-serif; }

        /* ── Wave ── */
        .footer-wave-wrap {
          width: 100%; overflow: hidden; line-height: 0;
          background: linear-gradient(90deg, #231f20 0%, #2d2828 16%, #4a4343 35%, #5d5757 55%, #666666 100%);
        }

        /* ── Body ── */
        .footer-body {
          background: linear-gradient(90deg, #231f20 0%, #2d2828 16%, #4a4343 35%, #5d5757 55%, #666666 100%);
          position: relative;
          overflow: hidden;
        }

        /* Subtle cross-hatch texture */
        .footer-body::before {
          content: '';
          position: absolute; inset: 0;
          background-image:
            repeating-linear-gradient(0deg, rgba(0,0,0,0.045) 0px, rgba(0,0,0,0.045) 1px, transparent 1px, transparent 32px),
            repeating-linear-gradient(90deg, rgba(0,0,0,0.03) 0px, rgba(0,0,0,0.03) 1px, transparent 1px, transparent 32px);
          pointer-events: none;
        }

        /* Dark panel removed — gradient handles depth */

        /* Gold accent bar */
        .footer-gold-bar {
          height: 3px; width: 100%;
          background: linear-gradient(90deg, #231f20 0%, #ad8411 15%, #e3a220 50%, #ad8411 85%, #231f20 100%);
          position: relative; z-index: 2;
        }

        .footer-inner {
          max-width: 1280px;
          margin: 0 auto;
          padding: 48px 32px 0;
          position: relative;
          z-index: 1;
        }

        /* ── Grid: [brand 230px] [1px divider] [info 210px] [nosotros 1fr] [dirs 1fr] [regionales 1fr] ── */
        .footer-grid {
          display: grid;
          grid-template-columns: 230px 1px 210px repeat(3, 1fr);
          align-items: start;
        }

        /* ── Brand ── */
        .footer-brand-cell {
          padding: 0 28px 44px 0;
          display: flex;
          flex-direction: column;
          gap: 22px;
        }
        .footer-logo { width: 138px; display: block; }

        .footer-tagline {
          font-size: 10.5px; font-weight: 300;
          letter-spacing: 0.13em; text-transform: uppercase;
          color: rgba(255,255,255,0.35); line-height: 1.8;
        }

        .social-row { display: flex; gap: 7px; flex-wrap: wrap; }

        .social-btn {
          width: 34px; height: 34px; border-radius: 50%;
          border: 1px solid rgba(255,255,255,0.16);
          background: rgba(255,255,255,0.05);
          color: rgba(255,255,255,0.55);
          display: flex; align-items: center; justify-content: center;
          text-decoration: none;
          transition: border-color .2s, background .2s, color .2s, transform .2s;
        }
        .social-btn:hover {
          border-color: #AD8411;
          background: rgba(173,132,17,0.16);
          color: #e3a220;
          transform: translateY(-2px);
        }

        /* Gold vertical divider */
        .footer-vdivider {
          background: linear-gradient(180deg, transparent, rgba(173,132,17,0.4) 15%, rgba(173,132,17,0.4) 85%, transparent);
          width: 1px;
          align-self: stretch;
        }

        /* ── Info col ── */
        .footer-info-cell {
          padding: 0 24px 44px 24px;
          border-right: 1px solid rgba(0,0,0,0.10);
        }

        /* ── Link cols ── */
        .footer-col {
          padding: 0 20px 44px 20px;
          border-right: 1px solid rgba(0,0,0,0.10);
        }
        .footer-col:last-child { border-right: none; }

        /* Column title */
        .f-title {
          font-size: 10px; font-weight: 700;
          letter-spacing: 0.18em; text-transform: uppercase;
          color: #AD8411;
          margin-bottom: 16px;
          display: flex; align-items: center; gap: 10px;
        }
        .f-title::after {
          content: ''; flex: 1; height: 1px;
          background: rgba(173,132,17,0.22); min-width: 8px;
        }

        /* Info blocks */
        .info-block { margin-bottom: 16px; }
        .info-block:last-child { margin-bottom: 0; }
        .info-label {
          font-size: 9px; font-weight: 700;
          letter-spacing: 0.18em; text-transform: uppercase;
          color: rgba(255,255,255,0.45); margin-bottom: 4px;
        }
        .info-line {
          font-size: 12.5px; font-weight: 300;
          color: rgba(255,255,255,0.78); line-height: 1.65;
        }

        /* Links */
        .f-links { list-style: none; margin: 0; padding: 0; display: flex; flex-direction: column; }
        .f-link {
          display: flex; align-items: center; gap: 6px;
          padding: 4.5px 0;
          font-size: 12.9px; font-weight: 400;
          color: rgba(255,255,255,0.68);
          text-decoration: none;
          transition: color .18s, gap .18s;
        }
        .f-dot {
          width: 3px; height: 3px; border-radius: 50%;
          background: #ad8411; flex-shrink: 0;
          opacity: 0; transition: opacity .18s;
        }
        .f-link:hover { color: #AD8411; gap: 9px; }
        .f-link:hover .f-dot { opacity: 1; }

        /* ── Bottom bar ── */
        .footer-bottom-wrap { position: relative; z-index: 1; }
        .footer-hdivider {
          max-width: 1280px; margin: 0 auto; padding: 0 32px;
        }
        .footer-hdivider hr {
          border: none; height: 1px;
          background: linear-gradient(90deg, transparent, rgba(173,132,17,0.4) 30%, rgba(173,132,17,0.4) 70%, transparent);
        }
        .footer-bottom {
          max-width: 1280px; margin: 0 auto;
          padding: 15px 32px 22px;
          display: flex; align-items: center;
          justify-content: space-between; gap: 12px; flex-wrap: wrap;
        }
        .footer-copy {
          font-size: 11px; font-weight: 300;
          color: rgba(255,255,255,0.32); letter-spacing: 0.02em;
        }
        .footer-copy strong { color: rgba(255,255,255,0.5); font-weight: 500; }
        .footer-blinks { display: flex; gap: 20px; }
        .footer-blink {
          font-size: 11px; font-weight: 300;
          color: rgba(255,255,255,0.30); text-decoration: none;
          transition: color .18s;
        }
        .footer-blink:hover { color: #AD8411; }

        /* ── Responsive ── */
        @media (max-width: 1050px) {
          .footer-grid { grid-template-columns: 210px 1px 190px repeat(3, 1fr); }
        }
        @media (max-width: 860px) {
          .footer-grid {
            grid-template-columns: 1fr 1fr 1fr;
            gap: 0;
          }
          .footer-brand-cell {
            grid-column: 1 / -1;
            flex-direction: row; flex-wrap: wrap;
            align-items: flex-start; gap: 28px;
            padding: 0 0 28px;
            border-bottom: 1px solid rgba(173,132,17,0.22);
            margin-bottom: 8px;
          }
          .footer-vdivider { display: none; }
          .footer-info-cell { padding: 0 16px 32px 0; border-right: 1px solid rgba(0,0,0,0.10); }
          .footer-col { padding: 0 16px 32px; }
        }
        @media (max-width: 560px) {
          .footer-grid { grid-template-columns: 1fr 1fr; }
          .footer-brand-cell { flex-direction: column; }
          .footer-inner { padding: 36px 18px 0; }
          .footer-bottom { flex-direction: column; align-items: center; text-align: center; }
          .footer-blinks { justify-content: center; }
          .footer-hdivider, .footer-bottom { padding-left: 18px; padding-right: 18px; }
        }
      `
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: "footer-root",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: "footer-wave-wrap",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
          viewBox: "0 0 1440 90",
          xmlns: "http://www.w3.org/2000/svg",
          preserveAspectRatio: "none",
          style: {
            display: "block",
            width: "100%",
            height: "clamp(36px,5vw,80px)"
          },
          fill: "white",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
            d: "M0 0H1440V45L1380 42.5C1320 40 1200 35 1080 32.5C960 30 840 30 720 32.5C600 35 480 40 360 35C240 30 120 15 60 7.5L0 0Z"
          })
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("footer", {
        className: "footer-body",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "footer-gold-bar"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "footer-inner",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            className: "footer-grid",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              className: "footer-brand-cell",
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("img", {
                src: "/wp-content/uploads/2026/02/Blanco-SERNA.png",
                alt: "SERNA",
                className: "footer-logo"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("p", {
                className: "footer-tagline",
                children: ["Secretar\xEDa de Recursos", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("br", {}), "Naturales y Ambiente", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("br", {}), "Honduras, C.A."]
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                className: "social-row",
                children: socialLinks.map((s, i) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                  href: s.url,
                  className: "social-btn",
                  "aria-label": s.name,
                  target: "_blank",
                  rel: "noopener noreferrer",
                  children: s.icon
                }, i))
              })]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              className: "footer-vdivider"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              className: "footer-info-cell",
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h3", {
                className: "f-title",
                children: "Informaci\xF3n"
              }), infoBlocks.map((b, i) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
                className: "info-block",
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                  className: "info-label",
                  children: b.label
                }), b.lines.map((l, j) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                  className: "info-line",
                  children: l
                }, j))]
              }, i))]
            }), linkColumns.map((col, i) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              className: "footer-col",
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h3", {
                className: "f-title",
                children: col.title
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("ul", {
                className: "f-links",
                children: col.links.map((link, j) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                    href: link.url,
                    className: "f-link",
                    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                      className: "f-dot"
                    }), link.name]
                  })
                }, j))
              })]
            }, i))]
          })
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "footer-bottom-wrap",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "footer-hdivider",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("hr", {})
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "footer-bottom",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("p", {
              className: "footer-copy",
              children: ["\xA9 ", new Date().getFullYear(), " ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("strong", {
                children: "SERNA"
              }), " \u2014 Todos los derechos reservados."]
            })
          })]
        })]
      })]
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
  const [scrolled, setScrolled] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [activeItem, setActiveItem] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(null);
  const closeTimer = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    const handleScroll = () => setScrolled(window.scrollY > 10);
    window.addEventListener("scroll", handleScroll);
    return () => window.removeEventListener("scroll", handleScroll);
  }, []);
  const handleMouseEnter = name => {
    if (closeTimer.current) clearTimeout(closeTimer.current);
    setActiveDropdown(name);
  };
  const handleMouseLeave = () => {
    closeTimer.current = setTimeout(() => setActiveDropdown(null), 120);
  };
  const toggleMenu = () => setIsMenuOpen(!isMenuOpen);
  const toggleDropdown = dropdown => setActiveDropdown(activeDropdown === dropdown ? null : dropdown);
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
    link: "https://login.microsoftonline.com/",
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
      }, {
        name: "RETC",
        link: "https://hn-serna-retc.web.app/",
        external: true
      }, {
        name: "Registro Aguas Residuales",
        link: "https://docs.google.com/forms/",
        external: true
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
        name: "Requisitos de Renovacion",
        link: "/direcciones/deca/requisitos-de-renovacion-licencia-ambiental"
      }, {
        name: "Constancia No Requerir Licencia",
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
  const getGridCols = columns => {
    switch (columns.length) {
      case 1:
        return "grid-cols-1";
      case 2:
        return "grid-cols-2";
      case 3:
        return "grid-cols-3";
      case 4:
        return "grid-cols-4";
      default:
        return "grid-cols-3";
    }
  };
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("style", {
      children: `
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap');

        .nav-root * { box-sizing: border-box; }

        .nav-root {
          font-family: 'Outfit', sans-serif;
        }

        /* ── Header ── */
        .serna-header {
          background: #ffffff;
          border-bottom: 1px solid rgba(38, 61, 128, 0.08);
          padding: 14px 0;
        }
        .serna-header-inner {
          max-width: 1280px;
          margin: 0 auto;
          padding: 0 24px;
          display: flex;
          align-items: center;
          justify-content: center;
        }
        .serna-logo { height: 56px; display: block; }

        /* ── Sticky Nav ── */
        .serna-nav {
          position: sticky;
          top: 0;
          z-index: 100;
          width: 100%;
          background: linear-gradient(135deg, #263b80 0%, #264da0 100%);
          transition: box-shadow 0.3s ease, backdrop-filter 0.3s ease;
        }
        .serna-nav.scrolled {
          box-shadow: 0 4px 32px rgba(38, 61, 128, 0.35);
          backdrop-filter: blur(12px);
        }

        /* thin gold accent line under nav */
        .serna-nav::after {
          content: '';
          display: block;
          height: 2px;
          background: linear-gradient(90deg, transparent, #E0B351 30%, #AD8411 70%, transparent);
          opacity: 0.7;
        }

        .serna-nav-inner {
          max-width: 1280px;
          margin: 0 auto;
          padding: 0 24px;
          display: flex;
          align-items: center;
          justify-content: center;
          height: 58px;
        }

        /* ── Desktop Nav Items ── */
        .desktop-nav {
          display: flex;
          align-items: center;
          gap: 2px;
        }

        .nav-item-wrap {
          position: relative;
        }

        .nav-btn, .nav-link {
          display: inline-flex;
          align-items: center;
          gap: 5px;
          padding: 8px 13px;
          font-family: 'Outfit', sans-serif;
          font-size: 13.5px;
          font-weight: 500;
          letter-spacing: 0.015em;
          color: rgba(255,255,255,0.92);
          background: transparent;
          border: none;
          border-radius: 6px;
          cursor: pointer;
          text-decoration: none;
          transition: color 0.2s, background 0.2s;
          white-space: nowrap;
          position: relative;
        }

        .nav-btn::before, .nav-link::before {
          content: '';
          position: absolute;
          bottom: 4px;
          left: 13px;
          right: 13px;
          height: 1.5px;
          background: #AD8411;
          transform: scaleX(0);
          transform-origin: left;
          transition: transform 0.25s ease;
          border-radius: 2px;
        }

        .nav-btn:hover, .nav-link:hover,
        .nav-btn.active, .nav-link.active {
          color: #fff;
          background: rgba(255,255,255,0.10);
        }

        .nav-btn:hover::before, .nav-link:hover::before,
        .nav-btn.active::before, .nav-link.active::before {
          transform: scaleX(1);
        }

        .nav-chevron {
          width: 14px;
          height: 14px;
          transition: transform 0.25s ease;
          opacity: 0.8;
          flex-shrink: 0;
        }
        .nav-btn.active .nav-chevron {
          transform: rotate(180deg);
        }

        /* ── Mega Menu ── */
        .mega-menu {
          position: absolute;
          top: calc(100% + 10px);
          left: 50%;
          transform: translateX(-50%);
          background: #ffffff;
          border-radius: 12px;
          box-shadow: 0 8px 48px rgba(38, 61, 128, 0.18), 0 2px 8px rgba(0,0,0,0.08);
          padding: 24px;
          z-index: 200;
          border: 1px solid rgba(38, 77, 160, 0.10);
          opacity: 0;
          visibility: hidden;
          transform: translateX(-50%) translateY(-6px);
          transition: opacity 0.2s ease, transform 0.2s ease, visibility 0.2s;
          pointer-events: none;
        }

        .mega-menu::before {
          content: '';
          position: absolute;
          top: -6px;
          left: 50%;
          transform: translateX(-50%);
          width: 12px;
          height: 12px;
          background: white;
          border-left: 1px solid rgba(38, 77, 160, 0.10);
          border-top: 1px solid rgba(38, 77, 160, 0.10);
          transform: translateX(-50%) rotate(45deg);
        }

        .mega-menu.open {
          opacity: 1;
          visibility: visible;
          transform: translateX(-50%) translateY(0);
          pointer-events: all;
        }

        .mega-grid {
          display: grid;
          gap: 0;
        }

        .mega-col {
          padding: 0 20px;
          border-right: 1px solid rgba(38, 61, 128, 0.07);
        }
        .mega-col:first-child { padding-left: 4px; }
        .mega-col:last-child {
          border-right: none;
          padding-right: 4px;
        }

        .mega-col-title {
          font-family: 'Outfit', sans-serif;
          font-size: 11px;
          font-weight: 700;
          letter-spacing: 0.1em;
          text-transform: uppercase;
          color: #263b80;
          margin-bottom: 10px;
          padding-bottom: 8px;
          border-bottom: 2px solid #AD8411;
          display: inline-block;
          text-decoration: none;
        }
        a.mega-col-title:hover { color: #264da0; }

        .mega-col-items { list-style: none; margin: 0; padding: 0; display: flex; flex-direction: column; gap: 1px; }

        .mega-item-link {
          display: flex;
          align-items: center;
          justify-content: space-between;
          gap: 8px;
          padding: 7px 10px;
          border-radius: 6px;
          font-size: 13px;
          font-weight: 400;
          color: #374151;
          text-decoration: none;
          transition: background 0.15s, color 0.15s, padding-left 0.15s;
        }
        .mega-item-link:hover {
          background: linear-gradient(90deg, rgba(38,61,128,0.06), rgba(38,77,160,0.03));
          color: #263b80;
          padding-left: 14px;
        }

        .ext-icon {
          width: 11px;
          height: 11px;
          opacity: 0.45;
          flex-shrink: 0;
        }

        /* ── Mobile Toggle ── */
        .mobile-brand {
          font-family: 'Outfit', sans-serif;
          font-weight: 700;
          font-size: 18px;
          color: white;
          text-decoration: none;
          letter-spacing: 0.05em;
        }

        .hamburger-btn {
          background: rgba(255,255,255,0.10);
          border: 1px solid rgba(255,255,255,0.20);
          border-radius: 8px;
          padding: 8px;
          cursor: pointer;
          color: white;
          display: flex;
          align-items: center;
          justify-content: center;
          transition: background 0.2s;
        }
        .hamburger-btn:hover { background: rgba(255,255,255,0.18); }

        /* ── Mobile Menu drawer ── */
        .mobile-menu {
          background: #ffffff;
          border-top: 2px solid #e3a220;
          overflow: hidden;
          max-height: 0;
          transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .mobile-menu.open { max-height: 1200px; }

        .mobile-menu-inner {
          padding: 8px 12px 24px;
          display: flex;
          flex-direction: column;
          gap: 0;
        }

        /* plain link rows */
        .mobile-nav-link {
          display: flex;
          align-items: center;
          padding: 13px 12px;
          border-bottom: 1px solid rgba(38,61,128,0.07);
          font-size: 14.5px;
          font-weight: 500;
          color: #1e2d6b;
          text-decoration: none;
          transition: color 0.15s;
        }
        .mobile-nav-link:hover { color: #e3a220; }

        /* accordion trigger */
        .mobile-toggle-btn {
          width: 100%;
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding: 13px 12px;
          border-bottom: 1px solid rgba(38,61,128,0.07);
          font-family: 'Outfit', sans-serif;
          font-size: 14.5px;
          font-weight: 500;
          color: #1e2d6b;
          background: transparent;
          border-left: none;
          border-right: none;
          border-top: none;
          cursor: pointer;
          transition: color 0.15s;
        }
        .mobile-toggle-btn:hover { color: #e3a220; }
        .mobile-toggle-btn.mob-open { color: #263b80; border-bottom-color: transparent; }

        .mob-chevron {
          width: 16px;
          height: 16px;
          flex-shrink: 0;
          color: #263b80;
          transition: transform 0.28s ease;
        }
        .mob-open .mob-chevron { transform: rotate(180deg); }

        /* accordion panel */
        .mobile-sub-panel {
          overflow: hidden;
          max-height: 0;
          transition: max-height 0.35s cubic-bezier(0.4, 0, 0.2, 1);
          background: #f4f6fb;
          border-radius: 0 0 10px 10px;
          margin: 0 4px 6px;
        }
        .mobile-sub-panel.mob-panel-open { max-height: 1000px; }

        .mobile-sub-inner {
          padding: 10px 10px 14px;
          display: flex;
          flex-direction: column;
          gap: 12px;
        }

        /* column group inside panel */
        .mob-col-group {}

        .mob-col-label {
          font-size: 10px;
          font-weight: 700;
          letter-spacing: 0.12em;
          text-transform: uppercase;
          color: #263b80;
          padding: 6px 8px 5px;
          display: block;
          text-decoration: none;
          opacity: 0.7;
        }

        .mob-items-list {
          display: flex;
          flex-direction: column;
          gap: 2px;
        }

        .mob-item-link {
          display: flex;
          align-items: center;
          justify-content: space-between;
          padding: 9px 12px;
          border-radius: 7px;
          font-size: 13.5px;
          font-weight: 400;
          color: #263b80;
          background: white;
          text-decoration: none;
          border: 1px solid rgba(38,61,128,0.08);
          transition: background 0.15s, border-color 0.15s, color 0.15s;
        }
        .mob-item-link:hover {
          background: #263b80;
          color: white;
          border-color: #263b80;
        }
        .mob-item-link:hover .ext-icon { opacity: 0.7; }

        @media (min-width: 768px) {
          .mobile-only { display: none !important; }
        }
        @media (max-width: 767px) {
          .desktop-only { display: none !important; }
          .serna-nav-inner { justify-content: space-between; }
        }
      `
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: "nav-root",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("header", {
        className: "serna-header",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "serna-header-inner",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("img", {
            src: "/wp-content/uploads/2026/02/v2-Horizontal-Color-SERNA-scaled.png",
            alt: "SERNA",
            className: "serna-logo"
          })
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("nav", {
        className: `serna-nav ${scrolled ? "scrolled" : ""}`,
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "serna-nav-inner",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "/",
            className: "mobile-brand mobile-only",
            children: "SERNA"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
            className: "hamburger-btn mobile-only",
            onClick: toggleMenu,
            "aria-label": "Abrir men\xFA",
            children: isMenuOpen ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
              width: "20",
              height: "20",
              fill: "none",
              stroke: "currentColor",
              strokeWidth: "2",
              viewBox: "0 0 24 24",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                strokeLinecap: "round",
                strokeLinejoin: "round",
                d: "M6 18L18 6M6 6l12 12"
              })
            }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
              width: "20",
              height: "20",
              fill: "none",
              stroke: "currentColor",
              strokeWidth: "2",
              viewBox: "0 0 24 24",
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                strokeLinecap: "round",
                strokeLinejoin: "round",
                d: "M4 6h16M4 12h16M4 18h16"
              })
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "desktop-nav desktop-only",
            children: navItems.map((item, i) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              className: "nav-item-wrap",
              onMouseEnter: () => item.hasDropdown && handleMouseEnter(item.name),
              onMouseLeave: () => item.hasDropdown && handleMouseLeave(),
              children: item.hasDropdown ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
                  className: `nav-btn ${activeDropdown === item.name ? "active" : ""}`,
                  onClick: () => toggleDropdown(item.name),
                  children: [item.name, /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                    className: "nav-chevron",
                    fill: "none",
                    stroke: "currentColor",
                    strokeWidth: "2.5",
                    viewBox: "0 0 24 24",
                    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                      strokeLinecap: "round",
                      strokeLinejoin: "round",
                      d: "M19 9l-7 7-7-7"
                    })
                  })]
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                  className: `mega-menu ${activeDropdown === item.name ? "open" : ""}`,
                  onMouseEnter: () => handleMouseEnter(item.name),
                  onMouseLeave: handleMouseLeave,
                  style: {
                    width: `${Math.min(item.columns.length * 220, 760)}px`,
                    maxWidth: "92vw"
                  },
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                    className: `mega-grid`,
                    style: {
                      gridTemplateColumns: `repeat(${item.columns.length}, 1fr)`
                    },
                    children: item.columns.map((col, ci) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
                      className: "mega-col",
                      children: [col.title && (col.link ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                        href: col.link,
                        className: "mega-col-title",
                        children: col.title
                      }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                        className: "mega-col-title",
                        children: col.title
                      })), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("ul", {
                        className: "mega-col-items",
                        children: col.items.map((sub, si) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
                          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                            href: sub.link,
                            target: sub.external ? "_blank" : undefined,
                            rel: sub.external ? "noopener noreferrer" : undefined,
                            className: "mega-item-link",
                            children: [sub.name, sub.external && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                              className: "ext-icon",
                              fill: "none",
                              stroke: "currentColor",
                              strokeWidth: "2",
                              viewBox: "0 0 24 24",
                              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                                strokeLinecap: "round",
                                strokeLinejoin: "round",
                                d: "M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
                              })
                            })]
                          })
                        }, si))
                      })]
                    }, ci))
                  })
                })]
              }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                href: item.link,
                target: item.external ? "_blank" : undefined,
                rel: item.external ? "noopener noreferrer" : undefined,
                className: "nav-link",
                children: item.name
              })
            }, i))
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: `mobile-menu mobile-only ${isMenuOpen ? "open" : ""}`,
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "mobile-menu-inner",
            children: navItems.map((item, i) => {
              const isOpen = activeDropdown === item.name;
              return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                children: item.hasDropdown ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
                  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
                    className: `mobile-toggle-btn ${isOpen ? "mob-open" : ""}`,
                    onClick: () => toggleDropdown(item.name),
                    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                      children: item.name
                    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                      className: "mob-chevron",
                      fill: "none",
                      stroke: "currentColor",
                      strokeWidth: "2.5",
                      viewBox: "0 0 24 24",
                      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                        strokeLinecap: "round",
                        strokeLinejoin: "round",
                        d: "M19 9l-7 7-7-7"
                      })
                    })]
                  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                    className: `mobile-sub-panel ${isOpen ? "mob-panel-open" : ""}`,
                    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                      className: "mobile-sub-inner",
                      children: item.columns.map((col, ci) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
                        className: "mob-col-group",
                        children: [col.title && (col.link ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                          href: col.link,
                          className: "mob-col-label",
                          children: col.title
                        }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                          className: "mob-col-label",
                          children: col.title
                        })), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                          className: "mob-items-list",
                          children: col.items.map((sub, si) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                            href: sub.link,
                            target: sub.external ? "_blank" : undefined,
                            rel: sub.external ? "noopener noreferrer" : undefined,
                            className: "mob-item-link",
                            children: [sub.name, sub.external && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
                              className: "ext-icon",
                              fill: "none",
                              stroke: "currentColor",
                              strokeWidth: "2",
                              viewBox: "0 0 24 24",
                              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
                                strokeLinecap: "round",
                                strokeLinejoin: "round",
                                d: "M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
                              })
                            })]
                          }, si))
                        })]
                      }, ci))
                    })
                  })]
                }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                  href: item.link,
                  target: item.external ? "_blank" : undefined,
                  rel: item.external ? "noopener noreferrer" : undefined,
                  className: "mobile-nav-link",
                  children: item.name
                })
              }, i);
            })
          })
        })]
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