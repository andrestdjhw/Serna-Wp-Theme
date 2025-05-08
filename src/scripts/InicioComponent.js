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