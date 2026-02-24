<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Andrés Castro - Héroe de Nicaragua</title>

<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Playfair+Display:ital,wght@0,400;0,600;1,400&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

<style>
:root {
    --gold: #D4AF37;
    --gold-light: #F4D03F;
    --deep-red: #8B0000;
    --parchment: #F4E4C1;
    --dark: #1a1a1a;
}

* {
    -webkit-tap-highlight-color: transparent;
    touch-action: manipulation;
}

body {
    font-family: 'Inter', sans-serif;
    background: #0a0a0a;
    color: #e5e5e5;
    overflow-x: hidden;
    -webkit-text-size-adjust: 100%;
}

.font-cinzel { font-family: 'Cinzel', serif; }
.font-playfair { font-family: 'Playfair Display', serif; }

/* Efecto de reflejo para el nombre - ajustado para móvil */
.reflection-text {
    position: relative;
    display: inline-block;
    line-height: 1.1;
}

.reflection-text::before {
    content: 'ANDRÉS CASTRO';
    position: absolute;
    top: 100%;
    left: 0;
    transform: scaleY(-1) translateY(-20%);
    background: linear-gradient(to bottom, rgba(212, 175, 55, 0.4), transparent);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    filter: blur(2px);
    opacity: 0.6;
    pointer-events: none;
    animation: shimmer 3s ease-in-out infinite;
}

@keyframes shimmer {
    0%, 100% { opacity: 0.3; filter: blur(2px); }
    50% { opacity: 0.7; filter: blur(1px); }
}

/* Efecto de brillo dorado */
.gold-shine {
    background: linear-gradient(90deg, var(--gold) 0%, var(--gold-light) 50%, var(--gold) 100%);
    background-size: 200% auto;
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: shine 3s linear infinite;
}

@keyframes shine {
    to { background-position: 200% center; }
}

/* Efecto de partículas flotantes */
.particles {
    position: absolute;
    inset: 0;
    overflow: hidden;
    pointer-events: none;
}

.particle {
    position: absolute;
    width: 4px;
    height: 4px;
    background: var(--gold);
    border-radius: 50%;
    opacity: 0;
    animation: float 15s infinite;
    box-shadow: 0 0 10px var(--gold);
}

@keyframes float {
    0% {
        transform: translateY(100vh) translateX(0) scale(0);
        opacity: 0;
    }
    10% { opacity: 1; }
    90% { opacity: 1; }
    100% {
        transform: translateY(-100vh) translateX(100px) scale(1);
        opacity: 0;
    }
}

/* Efecto de grano cinematográfico mejorado */
.grain {
    position: fixed;
    inset: 0;
    pointer-events: none;
    opacity: 0.05;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
    animation: grain 0.5s steps(10) infinite;
}

@keyframes grain {
    0%, 100% { transform: translate(0, 0); }
    10% { transform: translate(-5%, -10%); }
    20% { transform: translate(-15%, 5%); }
    30% { transform: translate(7%, -25%); }
    40% { transform: translate(-5%, 25%); }
    50% { transform: translate(-15%, 10%); }
    60% { transform: translate(15%, 0%); }
    70% { transform: translate(0%, 15%); }
    80% { transform: translate(3%, 35%); }
    90% { transform: translate(-10%, 10%); }
}

/* Efecto de viñeta */
.vignette {
    position: fixed;
    inset: 0;
    pointer-events: none;
    background: radial-gradient(circle, transparent 50%, rgba(0,0,0,0.8) 100%);
    z-index: 5;
}

/* Efecto de texto con glow */
.text-glow {
    text-shadow: 0 0 20px rgba(212, 175, 55, 0.5), 0 0 40px rgba(212, 175, 55, 0.3);
}

/* Tarjetas con efecto hover 3D - desactivado en móvil */
.card-3d {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

@media (hover: hover) {
    .card-3d:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(212, 175, 55, 0.2);
    }
}

/* Línea de tiempo animada */
.timeline-line {
    position: absolute;
    left: 20px;
    top: 0;
    bottom: 0;
    width: 2px;
    background: linear-gradient(to bottom, transparent, var(--gold), transparent);
    transform-origin: top;
    transform: scaleY(0);
}

/* Botón principal */
.btn-primary {
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
    background: var(--gold);
    color: #000;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 0.1em;
}

.btn-primary::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
    transition: left 0.5s ease;
}

.btn-primary:hover::before,
.btn-primary:active::before {
    left: 100%;
}

.btn-primary:hover,
.btn-primary:active {
    transform: scale(1.05);
    box-shadow: 0 0 30px rgba(212, 175, 55, 0.6);
}

/* Efecto de ondas en el hero */
.waves {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 60px;
    background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%230a0a0a' fill-opacity='1' d='M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E");
    background-size: cover;
    animation: wave 10s linear infinite;
}

@keyframes wave {
    0% { background-position-x: 0; }
    100% { background-position-x: 1440px; }
}

/* Efecto de imagen con zoom suave */
.img-zoom {
    overflow: hidden;
}

.img-zoom img {
    transition: transform 0.7s ease;
}

@media (hover: hover) {
    .img-zoom:hover img {
        transform: scale(1.1);
    }
}

/* Efecto de texto con gradiente animado */
.text-gradient-anim {
    background: linear-gradient(90deg, var(--gold), #fff, var(--gold));
    background-size: 200% auto;
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: gradient-shift 3s ease infinite;
}

@keyframes gradient-shift {
    0%, 100% { background-position: 0% center; }
    50% { background-position: 100% center; }
}

/* Efecto de carga inicial */
.loader {
    position: fixed;
    inset: 0;
    background: #0a0a0a;
    z-index: 10000;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: opacity 0.5s ease, visibility 0.5s ease;
}

.loader.hidden {
    opacity: 0;
    visibility: hidden;
}

.loader-text {
    font-family: 'Cinzel', serif;
    font-size: 2rem;
    color: var(--gold);
    animation: pulse 1.5s ease-in-out infinite;
}

@keyframes pulse {
    0%, 100% { opacity: 0.3; }
    50% { opacity: 1; }
}

/* Efecto de scroll indicator */
.scroll-indicator {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    animation: bounce 2s infinite;
}

@keyframes bounce {
    0%, 20%, 50%, 80%, 100% { transform: translateX(-50%) translateY(0); }
    40% { transform: translateX(-50%) translateY(-20px); }
    60% { transform: translateX(-50%) translateY(-10px); }
}

/* Ajustes responsive específicos */
@media (max-width: 768px) {
    .reflection-text::before {
        display: none; /* Ocultar reflejo en móvil para mejor rendimiento */
    }
    
    .waves {
        height: 40px;
    }
    
    .particle {
        width: 2px;
        height: 2px;
    }
    
    .timeline-line {
        left: 15px;
    }
    
    .font-cinzel {
        letter-spacing: 0.02em;
    }
}

/* Ajustes para pantallas muy pequeñas */
@media (max-width: 375px) {
    html {
        font-size: 14px;
    }
}

/* Deshabilitar cursor personalizado en móvil */
@media (pointer: coarse) {
    .custom-cursor {
        display: none !important;
    }
}
</style>
</head>

<body>

<!-- Loader -->
<div class="loader" id="loader">
    <div class="loader-text">AC</div>
</div>

<!-- Cursor personalizado (solo desktop) -->
<div class="custom-cursor hidden md:block" id="cursor"></div>

<!-- Efectos de fondo -->
<div class="grain"></div>
<div class="vignette"></div>

<!-- Navegación mejorada y responsive -->
<nav class="fixed top-0 w-full z-40 px-4 md:px-6 py-3 md:py-4 transition-all duration-500" id="navbar">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <div class="font-cinzel text-xl md:text-2xl tracking-widest text-gold font-bold opacity-0" id="nav-logo">AC</div>
        
        <!-- Menú móvil -->
        <button class="md:hidden text-gold p-2" id="mobile-menu-btn" aria-label="Menú">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
        
        <!-- Menú desktop -->
        <div class="hidden md:flex space-x-8 text-sm tracking-wider uppercase">
            <a href="#inicio" class="nav-link opacity-0 hover:text-gold transition-colors duration-300 relative group">
                Inicio
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a href="#historia" class="nav-link opacity-0 hover:text-gold transition-colors duration-300 relative group">
                Historia
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a href="#legado" class="nav-link opacity-0 hover:text-gold transition-colors duration-300 relative group">
                Legado
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
            </a>
        </div>
    </div>
    
    <!-- Menú móvil desplegable -->
    <div class="md:hidden hidden absolute top-full left-0 w-full bg-black/95 backdrop-blur-md border-t border-gold/20" id="mobile-menu">
        <div class="flex flex-col p-4 space-y-4 text-center">
            <a href="#inicio" class="text-gold py-2 hover:bg-gold/10 rounded transition-colors">Inicio</a>
            <a href="#historia" class="text-gold py-2 hover:bg-gold/10 rounded transition-colors">Historia</a>
            <a href="#legado" class="text-gold py-2 hover:bg-gold/10 rounded transition-colors">Legado</a>
        </div>
    </div>
</nav>

<!-- Hero Section Responsive -->
<section id="inicio" class="relative min-h-screen overflow-hidden flex items-center justify-center">
    
    <!-- Partículas flotantes -->
    <div class="particles" id="particles"></div>
    
    <!-- Imagen de fondo con parallax -->
    <div class="absolute inset-0 parallax-layer" id="hero-bg">
        <img src="/img/batalla-san-jacinto.jpg"
            class="w-full h-full object-cover scale-110"
            id="hero-img"
            alt="Batalla de San Jacinto"
            onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
        
        <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/50 to-black/90"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-transparent to-black/60"></div>
    </div>

    <!-- Contenido del Hero -->
    <div class="relative z-10 text-center px-4 max-w-5xl mx-auto pt-20 md:pt-0">
        <p class="text-gold tracking-[0.3em] md:tracking-[0.5em] uppercase text-xs md:text-sm mb-4 md:mb-6 hero-anim opacity-0" id="hero-subtitle">
            Héroe Nacional de Nicaragua
        </p>

        <div class="mb-6 md:mb-8 relative">
            <h1 class="font-cinzel text-4xl sm:text-6xl md:text-8xl lg:text-9xl font-bold hero-anim opacity-0 reflection-text gold-shine leading-tight" id="hero-title">
                ANDRÉS<br class="md:hidden"> CASTRO
            </h1>
        </div>

        <div class="overflow-hidden mb-8 md:mb-12 px-2">
            <p class="font-playfair italic text-lg sm:text-xl md:text-2xl lg:text-3xl text-gray-300 hero-anim opacity-0 px-4" id="hero-quote">
                "El valor no necesita armas, solo corazón"
            </p>
        </div>

        <div class="flex flex-col sm:flex-row justify-center gap-3 md:gap-4 hero-anim opacity-0 px-4" id="hero-buttons">
            <a href="#historia" class="border border-gold text-gold px-6 md:px-8 py-3 rounded-full hover:bg-gold hover:text-black transition-all duration-300 text-sm md:text-base text-center">
                Explorar Historia
            </a>
           
            </button>
        </div>
    </div>

    <!-- Indicador de scroll -->
    <div class="scroll-indicator text-gold opacity-0 hidden md:block" id="scroll-indicator">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>

    <!-- Olas decorativas -->
    <div class="waves"></div>
</section>

<!-- Introducción Responsive -->
<section class="py-16 md:py-32 bg-neutral-900 relative overflow-hidden" id="intro">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_var(--gold)_0%,_transparent_70%)] opacity-5"></div>
    
    <div class="max-w-4xl mx-auto text-center px-4 md:px-6 relative z-10">
        <div class="w-24 h-px bg-gold mx-auto mb-6 md:mb-8" id="intro-divider"></div>
        
        <h2 class="font-cinzel text-3xl sm:text-4xl md:text-5xl lg:text-6xl text-gradient-anim mb-4 md:mb-8 section-reveal opacity-0 px-2" id="intro-title">
            La Leyenda de un Héroe
        </h2>
        
        <p class="text-gray-400 text-base md:text-lg lg:text-xl leading-relaxed section-reveal opacity-0 px-4" id="intro-text">
            Descubre la historia del valiente soldado que cambió el destino de una nación con un acto de coraje que resonaría por la eternidad
        </p>
        
        <div class="mt-8 md:mt-12 flex flex-col sm:flex-row justify-center gap-6 md:gap-8 section-reveal opacity-0" id="intro-stats">
            <div class="text-center">
                <div class="text-3xl md:text-4xl font-cinzel text-gold mb-1 counter" data-target="1856">0</div>
                <div class="text-xs md:text-sm text-gray-500 uppercase tracking-widest">Año Histórico</div>
            </div>
            <div class="text-center">
                <div class="text-3xl md:text-4xl font-cinzel text-gold mb-1 counter" data-target="14">0</div>
                <div class="text-xs md:text-sm text-gray-500 uppercase tracking-widest">De Septiembre</div>
            </div>
            <div class="text-center">
                <div class="text-3xl md:text-4xl font-cinzel text-gold mb-1 counter" data-target="1">0</div>
                <div class="text-xs md:text-sm text-gray-500 uppercase tracking-widest">Héroe</div>
            </div>
        </div>
    </div>
</section>

<!-- Historia Premium Responsive -->
<section id="historia" class="py-16 md:py-32 bg-neutral-950 relative">
    <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-gold to-transparent opacity-30"></div>
    
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        
        <!-- Header de sección -->
        <div class="text-center mb-12 md:mb-20 section-reveal opacity-0">
            <p class="text-gold tracking-widest uppercase text-xs md:text-sm mb-3 md:mb-4">Biografía</p>
            <h2 class="font-cinzel text-3xl sm:text-4xl md:text-5xl lg:text-6xl text-white mb-4 md:mb-6">Su Historia</h2>
            <div class="w-16 md:w-24 h-0.5 md:h-1 bg-gold mx-auto"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-8 md:gap-16 items-start">
            
            <!-- Columna de imagen -->
            <div class="section-reveal opacity-0 md:sticky md:top-24" id="portrait-container">
                <div class="relative img-zoom rounded-xl md:rounded-2xl overflow-hidden border-2 border-gold/30 group">
                    <img src="/img/retrato-andres-castro.jpg"
                        class="w-full h-auto object-cover filter sepia-[0.3] contrast-110 md:group-hover:sepia-0 transition-all duration-700"
                        alt="Retrato de Andrés Castro"
                        onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 md:group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <!-- Marco decorativo -->
                    <div class="absolute inset-3 md:inset-4 border border-gold/50 rounded-lg md:rounded-xl pointer-events-none"></div>
                    
                    <!-- Esquinas decorativas -->
                    <div class="absolute top-3 left-3 md:top-4 md:left-4 w-6 h-6 md:w-8 md:h-8 border-t-2 border-l-2 border-gold"></div>
                    <div class="absolute top-3 right-3 md:top-4 md:right-4 w-6 h-6 md:w-8 md:h-8 border-t-2 border-r-2 border-gold"></div>
                    <div class="absolute bottom-3 left-3 md:bottom-4 md:left-4 w-6 h-6 md:w-8 md:h-8 border-b-2 border-l-2 border-gold"></div>
                    <div class="absolute bottom-3 right-3 md:bottom-4 md:right-4 w-6 h-6 md:w-8 md:h-8 border-b-2 border-r-2 border-gold"></div>
                    
                    <div class="img-placeholder hidden absolute inset-0 bg-neutral-900 items-center justify-center text-gold p-4">
                        <div class="text-center">
                            <svg class="w-12 h-12 md:w-16 md:h-16 mx-auto mb-4 opacity-50" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                            </svg>
                            <p class="text-sm md:text-base">Retrato no encontrado</p>
                        </div>
                    </div>
                </div>
                
                <!-- Información rápida -->
                <div class="grid grid-cols-2 gap-3 md:gap-4 mt-4 md:mt-6">
                    <div class="card-3d bg-neutral-900 border border-gold/20 rounded-lg md:rounded-xl p-3 md:p-4 text-center">
                        <p class="text-gold text-xs tracking-widest mb-1">NACIMIENTO</p>
                        <p class="font-semibold text-sm md:text-base">Managua, Nicaragua</p>
                        <p class="text-gray-500 text-xs mt-1">1831</p>
                    </div>
                    <div class="card-3d bg-neutral-900 border border-gold/20 rounded-lg md:rounded-xl p-3 md:p-4 text-center">
                        <p class="text-gold text-xs tracking-widest mb-1">RECONOCIMIENTO</p>
                        <p class="font-semibold text-sm md:text-base">Héroe Nacional</p>
                        <p class="text-gray-500 text-xs mt-1">1856</p>
                    </div>
                </div>
            </div>

            <!-- Columna de contenido -->
            <div class="space-y-8 md:space-y-12 relative" id="timeline-container">
                <!-- Línea de tiempo vertical -->
                <div class="timeline-line hidden md:block" id="timeline-line"></div>
                
                <!-- Item 1 -->
                <div class="timeline-item relative pl-12 md:pl-16 opacity-0 transform translate-x-8 md:translate-x-12" data-index="0">
                    <div class="absolute left-0 top-0 w-8 h-8 md:w-10 md:h-10 border-2 border-gold rounded-full flex items-center justify-center bg-neutral-950 z-10">
                        <span class="text-gold font-bold text-xs md:text-sm">01</span>
                    </div>
                    <div class="card-3d bg-neutral-900/50 backdrop-blur-sm border border-gold/10 rounded-xl md:rounded-2xl p-4 md:p-6 hover:border-gold/30 transition-all duration-300">
                        <h3 class="font-cinzel text-lg md:text-2xl text-gold mb-2 md:mb-3">El Origen</h3>
                        <p class="text-gray-400 text-sm md:text-base leading-relaxed">
                            Nacido en 1831 en la Villa de Managua, hijo de padres campesinos humildes. Desde su juventud, Andrés demostró una valentía excepcional y un amor profundo por su patria que lo llevaría a convertirse en leyenda.
                        </p>
                        <div class="mt-3 md:mt-4 flex items-center gap-2 text-gold/60 text-xs md:text-sm">
                            <svg class="w-3 h-3 md:w-4 md:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>Managua, Nicaragua</span>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="timeline-item relative pl-12 md:pl-16 opacity-0 transform translate-x-8 md:translate-x-12" data-index="1">
                    <div class="absolute left-0 top-0 w-8 h-8 md:w-10 md:h-10 border-2 border-gold rounded-full flex items-center justify-center bg-neutral-950 z-10">
                        <span class="text-gold font-bold text-xs md:text-sm">02</span>
                    </div>
                    <div class="card-3d bg-neutral-900/50 backdrop-blur-sm border border-gold/10 rounded-xl md:rounded-2xl p-4 md:p-6 hover:border-gold/30 transition-all duration-300">
                        <h3 class="font-cinzel text-lg md:text-2xl text-gold mb-2 md:mb-3">Batalla de San Jacinto</h3>
                        <p class="text-gray-400 text-sm md:text-base leading-relaxed mb-3 md:mb-4">
                            El <span class="text-gold font-semibold">14 de septiembre de 1856</span>, en medio de la batalla contra los filibusteros de William Walker, Castro se quedó sin municiones. Sin dudarlo, tomó una piedra y con ella derribó a un filibustero, elevando la moral del ejército nicaragüense.
                        </p>
                        <div class="bg-gold/10 border-l-4 border-gold p-3 md:p-4 rounded-r-lg">
                            <p class="text-gold italic text-xs md:text-sm">
                                "El muy valiente sargento primero Andrés Castro, quien por faltarle fuego a su carabina, botó a pedradas a un americano…"
                            </p>
                            <p class="text-gold/60 text-xs mt-2 not-italic">— Coronel José Dolores Estrada</p>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="timeline-item relative pl-12 md:pl-16 opacity-0 transform translate-x-8 md:translate-x-12" data-index="2">
                    <div class="absolute left-0 top-0 w-8 h-8 md:w-10 md:h-10 border-2 border-gold rounded-full flex items-center justify-center bg-neutral-950 z-10">
                        <span class="text-gold font-bold text-xs md:text-sm">03</span>
                    </div>
                    <div class="card-3d bg-neutral-900/50 backdrop-blur-sm border border-gold/10 rounded-xl md:rounded-2xl p-4 md:p-6 hover:border-gold/30 transition-all duration-300">
                        <h3 class="font-cinzel text-lg md:text-2xl text-gold mb-2 md:mb-3">El Legado Eterno</h3>
                        <p class="text-gray-400 text-sm md:text-base leading-relaxed">
                            Herido en combate, quedó lisiado de por vida, pero su sacrificio no fue en vano. Su valentía se convirtió en símbolo eterno de resistencia nacional y su nombre es recordado con honor en cada rincón de Nicaragua.
                        </p>
                        <div class="mt-3 md:mt-4 flex flex-wrap gap-2">
                            <span class="px-2 md:px-3 py-1 bg-gold/20 text-gold text-xs rounded-full border border-gold/30">Valentía</span>
                            <span class="px-2 md:px-3 py-1 bg-gold/20 text-gold text-xs rounded-full border border-gold/30">Sacrificio</span>
                            <span class="px-2 md:px-3 py-1 bg-gold/20 text-gold text-xs rounded-full border border-gold/30">Patriotismo</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Sección CTA Simple -->
<section id="legado" class="py-16 md:py-24 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-neutral-950 via-black to-neutral-900"></div>
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23D4AF37\' fill-opacity=\'0.03\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
    
    <div class="relative z-10 max-w-4xl mx-auto px-4 md:px-6 text-center">
        <div class="section-reveal opacity-0">
            <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-cinzel mb-6 md:mb-8 text-gradient-anim px-2">
                ¿Listo para conocer más?
            </h2>
            <p class="text-gray-400 text-base md:text-lg mb-8 md:mb-12 max-w-2xl mx-auto px-4">
                Descubre todos los detalles de la historia de este héroe nacional
            </p>
            
            <a href="historia.php" class="inline-block btn-primary px-8 md:px-12 py-4 md:py-5 rounded-full text-base md:text-lg shadow-lg hover:shadow-gold/50 transition-all duration-300">
                Iniciar la historia
            </a>
        </div>
    </div>
</section>

<!-- Footer Responsive -->
<footer class="relative py-12 md:py-16 bg-black border-t border-gold/20">
    <div class="absolute inset-0 bg-gradient-to-t from-gold/5 to-transparent"></div>
    
    <div class="relative z-10 max-w-6xl mx-auto px-4 md:px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12 mb-8 md:mb-12 text-center md:text-left">
            <div>
                <div class="font-cinzel text-2xl md:text-3xl text-gold font-bold mb-3 md:mb-4">AC</div>
                <p class="text-gray-500 text-xs md:text-sm leading-relaxed px-4 md:px-0">
                    Honrando la memoria del héroe nacional de Nicaragua cuya valentía sigue inspirando generaciones.
                </p>
            </div>
            
            <div class="text-center">
                <h4 class="text-gold font-cinzel mb-3 md:mb-4 text-sm md:text-base">Enlaces Rápidos</h4>
                <ul class="space-y-2 text-xs md:text-sm text-gray-400">
                    <li><a href="#inicio" class="hover:text-gold transition-colors">Inicio</a></li>
                    <li><a href="#historia" class="hover:text-gold transition-colors">Biografía</a></li>
                    <li><a href="#legado" class="hover:text-gold transition-colors">Legado</a></li>
                </ul>
            </div>
            
            <div class="text-center md:text-right">
                <h4 class="text-gold font-cinzel mb-3 md:mb-4 text-sm md:text-base">Contacto</h4>
                <p class="text-gray-500 text-xs md:text-sm">Feria Universitaria</p>
                <p class="text-gray-500 text-xs md:text-sm">Nicaragua</p>
                <div class="flex justify-center md:justify-end gap-3 md:gap-4 mt-3 md:mt-4">
                    <a href="#" class="w-8 h-8 md:w-10 md:h-10 rounded-full border border-gold/30 flex items-center justify-center text-gold hover:bg-gold hover:text-black transition-all duration-300" aria-label="Twitter">
                        <svg class="w-4 h-4 md:w-5 md:h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                    </a>
                    <a href="#" class="w-8 h-8 md:w-10 md:h-10 rounded-full border border-gold/30 flex items-center justify-center text-gold hover:bg-gold hover:text-black transition-all duration-300" aria-label="Instagram">
                        <svg class="w-4 h-4 md:w-5 md:h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="border-t border-gold/10 pt-6 md:pt-8 text-center">
            <p class="text-gray-600 text-xs md:text-sm">
                © 2026 Feria Universitaria • Nicaragua. Todos los derechos reservados.
            </p>
        </div>
    </div>
</footer>

<script>
// Registrar plugins de GSAP
gsap.registerPlugin(ScrollTrigger);

// Loader inicial
window.addEventListener('load', () => {
    setTimeout(() => {
        document.getElementById('loader').classList.add('hidden');
        initAnimations();
    }, 1500);
});

// Generar partículas (menos en móvil)
function createParticles() {
    const container = document.getElementById('particles');
    const isMobile = window.innerWidth < 768;
    const count = isMobile ? 20 : 50;
    
    for (let i = 0; i < count; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        particle.style.left = Math.random() * 100 + '%';
        particle.style.animationDelay = Math.random() * 15 + 's';
        particle.style.animationDuration = (10 + Math.random() * 10) + 's';
        container.appendChild(particle);
    }
}
createParticles();

// Cursor personalizado (solo desktop)
if (window.matchMedia("(pointer: fine)").matches) {
    const cursor = document.getElementById('cursor');
    document.addEventListener('mousemove', (e) => {
        cursor.style.left = e.clientX - 10 + 'px';
        cursor.style.top = e.clientY - 10 + 'px';
    });

    document.querySelectorAll('a, button, .card-3d').forEach(el => {
        el.addEventListener('mouseenter', () => cursor.classList.add('hover'));
        el.addEventListener('mouseleave', () => cursor.classList.remove('hover'));
    });
}

// Menú móvil
const mobileMenuBtn = document.getElementById('mobile-menu-btn');
const mobileMenu = document.getElementById('mobile-menu');

mobileMenuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
});

// Cerrar menú al hacer clic en un enlace
mobileMenu.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
    });
});

// Inicializar animaciones
function initAnimations() {
    // Animación de entrada del navbar
    gsap.to('#nav-logo', { opacity: 1, duration: 1, delay: 0.5 });
    gsap.to('.nav-link', { 
        opacity: 1, 
        y: 0, 
        duration: 0.8, 
        stagger: 0.1, 
        delay: 0.8 
    });

    // Animación del hero
    gsap.to('#hero-subtitle', { 
        opacity: 1, 
        y: 0, 
        duration: 1, 
        delay: 0.3,
        ease: "power3.out"
    });
    
    gsap.to('#hero-title', { 
        opacity: 1, 
        y: 0, 
        duration: 1.2, 
        delay: 0.5,
        ease: "power3.out"
    });
    
    gsap.to('#hero-quote', { 
        opacity: 1, 
        duration: 1, 
        delay: 1.5,
        ease: "power3.out"
    });
    
    gsap.to('#hero-buttons', { 
        opacity: 1, 
        y: 0, 
        duration: 0.8, 
        delay: 2,
        ease: "power3.out"
    });
    
    gsap.to('#scroll-indicator', { 
        opacity: 1, 
        duration: 1, 
        delay: 2.5 
    });

    // Parallax del hero (solo en desktop)
    if (window.innerWidth >= 768) {
        gsap.to('#hero-bg', {
            yPercent: 30,
            ease: "none",
            scrollTrigger: {
                trigger: "#inicio",
                start: "top top",
                end: "bottom top",
                scrub: true
            }
        });
    }

    // Animación de la introducción
    ScrollTrigger.create({
        trigger: "#intro",
        start: "top 80%",
        onEnter: () => {
            gsap.to('#intro-title', { opacity: 1, y: 0, duration: 1 });
            gsap.to('#intro-text', { opacity: 1, y: 0, duration: 1, delay: 0.3 });
            gsap.to('#intro-stats', { opacity: 1, y: 0, duration: 1, delay: 0.6 });
            
            // Animar contadores
            document.querySelectorAll('.counter').forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                gsap.to(counter, {
                    innerHTML: target,
                    duration: 2,
                    snap: { innerHTML: 1 },
                    ease: "power2.out"
                });
            });
        }
    });

    // Animación de la línea de tiempo (solo desktop)
    if (window.innerWidth >= 768) {
        gsap.to('#timeline-line', {
            scaleY: 1,
            ease: "none",
            scrollTrigger: {
                trigger: "#timeline-container",
                start: "top 70%",
                end: "bottom 70%",
                scrub: true
            }
        });
    }

    // Animación de items de timeline
    document.querySelectorAll('.timeline-item').forEach((item, index) => {
        gsap.to(item, {
            opacity: 1,
            x: 0,
            duration: 0.8,
            ease: "power3.out",
            scrollTrigger: {
                trigger: item,
                start: "top 85%",
                toggleActions: "play none none reverse"
            },
            delay: index * 0.1
        });
    });

    // Animación del retrato
    gsap.from('#portrait-container', {
        opacity: 0,
        x: -30,
        duration: 1,
        scrollTrigger: {
            trigger: '#historia',
            start: "top 60%"
        }
    });

    // Animaciones generales de sección
    gsap.utils.toArray('.section-reveal').forEach(section => {
        gsap.to(section, {
            opacity: 1,
            y: 0,
            duration: 1,
            ease: "power3.out",
            scrollTrigger: {
                trigger: section,
                start: "top 85%",
                toggleActions: "play none none reverse"
            }
        });
    });
}

// Navbar scroll effect
const navbar = document.getElementById("navbar");
window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
        navbar.classList.add("bg-black/95", "backdrop-blur-md", "shadow-lg");
        navbar.classList.remove("py-3", "md:py-4");
        navbar.classList.add("py-2", "md:py-3");
    } else {
        navbar.classList.remove("bg-black/95", "backdrop-blur-md", "shadow-lg");
        navbar.classList.remove("py-2", "md:py-3");
        navbar.classList.add("py-3", "md:py-4");
    }
});

// Smooth scroll para enlaces internos
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            const offset = window.innerWidth < 768 ? 60 : 80;
            const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - offset;
            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        }
    });
});

// Efecto 3D en tarjetas (solo desktop)
if (window.matchMedia("(hover: hover)").matches) {
    document.querySelectorAll('.card-3d').forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const rotateX = (y - centerY) / 20;
            const rotateY = (centerX - x) / 20;
            
            card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateZ(10px)`;
        });
        
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateZ(0)';
        });
    });
}

// Recargar partículas al cambiar tamaño de ventana
let resizeTimer;
window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
        const particles = document.getElementById('particles');
        particles.innerHTML = '';
        createParticles();
    }, 250);
});
</script>

</body>
</html>
