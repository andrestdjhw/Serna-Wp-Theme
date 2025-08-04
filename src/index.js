import React from 'react';
import { createRoot } from 'react-dom/client';
import './index.css';

// Importar componentes
import ExampleReactComponent from './scripts/ExampleReactComponent';
import FooterComponent from './scripts/FooterComponent';
import NavbarComponent from './scripts/NavbarComponent';
import SernaChatbot from './scripts/ChatbotComponent';

// Función para inicializar componentes cuando el DOM esté listo
function initializeComponents() {
    // Renderizar NavbarComponent si existe el contenedor
    const navbarContainer = document.getElementById('navbar-react');
    if (navbarContainer) {
        try {
            const navbarRoot = createRoot(navbarContainer);
            navbarRoot.render(<NavbarComponent />);
            console.log('✅ NavbarComponent renderizado correctamente');
        } catch (error) {
            console.error('❌ Error renderizando NavbarComponent:', error);
        }
    }

    // Renderizar FooterComponent si existe el contenedor
    const footerContainer = document.getElementById('footer-react');
    if (footerContainer) {
        try {
            const footerRoot = createRoot(footerContainer);
            footerRoot.render(<FooterComponent />);
            console.log('✅ FooterComponent renderizado correctamente');
        } catch (error) {
            console.error('❌ Error renderizando FooterComponent:', error);
        }
    }

    // Renderizar ExampleReactComponent si existe el contenedor
    const exampleContainer = document.getElementById('example-react');
    if (exampleContainer) {
        try {
            const exampleRoot = createRoot(exampleContainer);
            exampleRoot.render(<ExampleReactComponent />);
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
            const chatbotRoot = createRoot(chatbotContainer);
            chatbotRoot.render(<SernaChatbot />);
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