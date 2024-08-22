<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Fix Us Consultant | Negocios con propósito</title>
    <link rel="canonical" href="https://fixusconsultant.com/">
    <meta name="description" content="Agencia de publicidad digital y desarrollo web. Impulsamos el crecimiento de tu emprendimiento o negocio mediante la publicidad digital y el desarrollo web.">
    <meta property="og:title" content="Fix Us Consultant | Negocios con propósito">
    <meta property="og:description" content="Agencia de publicidad digital y desarrollo web. Impulsamos el crecimiento de tu emprendimiento o negocio mediante la publicidad digital y el desarrollo web.">
    <meta property="og:image" content="https://fixusconsultant.com/img/logo_fixus.png">
    <meta property="og:url" content="https://fixusconsultant.com/">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_ES">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Fix Us Consultant | Negocios con propósito">
    <meta name="twitter:description" content="Agencia de publicidad digital y desarrollo web. Impulsamos el crecimiento de tu emprendimiento o negocio mediante la publicidad digital y el desarrollo web.">
    <meta name="twitter:image" content="https://fixusconsultant.com/img/logo_fixus.png">
    <meta name="twitter:url" content="https://fixusconsultant.com/">
    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Fix Us Consultant",
        "description": "Agencia de publicidad digital y desarrollo web. Impulsamos el crecimiento de tu emprendimiento o negocio mediante la publicidad digital y el desarrollo web.",
        "url": "https://fixusconsultant.com/",
        "logo": "https://fixusconsultant.com/img/logo_fixus.png",
        "sameAs": [
            "https://www.instagram.com/fixusconsultant"
        ],
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+5493482545262",
            "contactType": "customer service"
        }
        }
    </script>
    <link rel="preload" href="https://cdn.tailwindcss.com" as="script">
    <link rel="preload" href="https://kit.fontawesome.com/91b1e2c885.js" as="script">
    <link rel="preload" href="./img/team-work.jpg" as="image">
    <link rel="preload" href="./img/team-work-mobile.jpg" as="image">
    <link rel="preload" href="./img/logo_fixus.png" as="image">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        header {
            background-image: linear-gradient(rgba(37, 37, 37, 0.7), rgba(37, 37, 37, 0.6)), url("./img/team-work.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: scroll;
        }
        @media (max-width: 767px) {
            header {
                background-image: linear-gradient(rgba(37, 37, 37, 0.7), rgba(37, 37, 37, 0.6)), url("./img/team-work-mobile.jpg");
                background-attachment: scroll;
            }
        }
    </style>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CJ530ZGYKZ"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'kobi': {
                            '50': '#fbf4f7',
                            '100': '#f8ebf0',
                            '200': '#f4d6e3',
                            '300': '#e6a2bd',
                            '400': '#de88a8',
                            '500': '#d06489',
                            '600': '#bd4568',
                            '700': '#a23452',
                            '800': '#862e44',
                            '900': '#712a3d',
                            '950': '#441320',
                        },
                    }
                }
            }
        };

        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-CJ530ZGYKZ');
    </script>
    <script src="https://kit.fontawesome.com/91b1e2c885.js" crossorigin="anonymous"></script>
</head>

<body class="font-sans text-gray-800">

    <nav class="bg-white sticky top-0 left-0 w-full z-50 shadow-lg">
        <div class="max-w-screen-lg mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex-shrink-0 flex items-center">
                    <a href="/"><img class="h-16 w-auto" src="./img/logo_fixus.png" alt="Logo Fix Us" width="64" height="64"></a>
                </div>
                <div class="hidden md:ml-6 md:flex md:items-center md:space-x-4">
                    <a href="#servicios" class="text-gray-700 hover:bg-gray-100 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Servicios</a>
                    <a href="#beneficios" class="text-gray-700 hover:bg-gray-100 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Beneficios</a>
                    <a href="#contacto" class="text-gray-800 bg-kobi-400 hover:bg-kobi-500 transition-colors duration-300 px-3 py-2 rounded-md text-sm font-medium">Contacto</a>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-gray-700 text-3xl hover:text-gray-900 focus:outline-none">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>

        <div id="mobile-menu" class="hidden absolute bg-white top-16 left-0 w-full z-10 px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="#servicios" class="block text-gray-700 hover:bg-gray-100 hover:text-gray-900 px-3 py-2 rounded-md text-base font-medium">Servicios</a>
            <a href="#beneficios" class="block text-gray-700 hover:bg-gray-100 hover:text-gray-900 px-3 py-2 rounded-md text-base font-medium">Beneficios</a>
            <a href="#contacto" class="block text-gray-700 hover:bg-gray-100 hover:text-gray-900 px-3 py-2 rounded-md text-base font-medium">Contacto</a>
        </div>
    </nav>

    <header>
        <div class="min-h-screen max-w-screen-lg px-4 pt-4 pb-12 mx-auto flex flex-col justify-center items-center gap-24 lg:px-8">
            <div class="text-white text-center flex flex-col justify-between items-center md:w-4/6 md:gap-2 lg:gap-4">
                <h1 class="mb-4 text-light">Agencia de publicidad digital y desarrollo web</h1>
                <p class="text-3xl font-bold leading-snug mb-4 sm:text-4xl md:text-5xl lg:text-6xl">Escalemos en equipo la cima del éxito</p>
                <p class="text-base mb-4 md:text-lg lg:text-xl xl:text-2xl">Impulsamos el crecimiento de tu emprendimiento o negocio mediante la <span class="text-kobi-300 font-bold">publicidad digital</span> y el <span class="text-kobi-300 font-bold">desarrollo web</span>.</p>
                <a href="https://wa.me/5493482545262" target="_blank" class="text-gray-800 bg-kobi-400 hover:bg-kobi-500 transition-colors duration-300 font-bold py-2 px-4 rounded">Contáctanos</a>
            </div>
        </div>
    </header>

    <section id="servicios" class="bg-gray-100 py-16">
        <h2 class="text-3xl text-center font-bold mb-6">Nuestros Servicios</h2>
        <div class="max-w-screen-lg mx-auto px-4 lg:px-8">
            <div class="flex flex-col items-center">
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    <div class="p-4 bg-white shadow-lg rounded-lg">
                        <i class="text-6xl text-kobi-500 mb-2 fas fa-ad fa-fw"></i>
                        <h3 class="text-xl font-bold mb-2 xl:text-2xl">Publicidad digital</h3>
                        <p class="text-base mb-4 lg:text-lg">Nuestros servicios de publicidad paga te permiten llegar a tu audiencia objetivo, crear impacto y medir el éxito de tu campaña.</p>
                        <a href="https://wa.me/5493482545262" target="_blank" class="text-white bg-gray-800 hover:bg-kobi-600 transition-colors duration-300 font-bold py-2 px-4 rounded inline-block">Me interesa</a>
                    </div>
                    <div class="p-4 bg-white shadow-lg rounded-lg">
                        <i class="text-6xl text-kobi-500 mb-2 fas fa-code fa-fw"></i>
                        <h3 class="text-xl font-bold mb-2 xl:text-2xl">Desarrollo web</h3>
                        <p class="text-base mb-4 lg:text-lg">Creamos soluciones web a medida que reflejan la esencia de tu negocio y potencian la imagen de tu marca.</p>
                        <a href="https://wa.me/5493482545262" target="_blank" class="text-white bg-gray-800 hover:bg-kobi-600 transition-colors duration-300 font-bold py-2 px-4 rounded inline-block">Me interesa</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="beneficios" class="py-16">
        <h2 class="text-3xl text-center font-bold mb-6">Beneficios</h2>
        <div class="max-w-screen-lg mx-auto flex flex-col justify-center items-center">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
                <div class="p-4 bg-white shadow-lg rounded-lg">
                    <div class="flex items-center mb-2">
                        <i class="fas fa-chart-line text-2xl mr-2 text-kobi-500"></i>
                        <h3 class="text-xl font-bold">Más ventas</h3>
                    </div>
                    <p class="text-base mb-4">Aumenta tus ingresos con nuestras estrategias de marketing personalizadas y efectivas, diseñadas para convertir más visitantes en clientes.</p>
                </div>
                <div class="p-4 bg-white shadow-lg rounded-lg">
                    <div class="flex items-center mb-2">
                        <i class="fas fa-users text-2xl mr-2 text-kobi-500"></i>
                        <h3 class="text-xl font-bold">Más clientes</h3>
                    </div>
                    <p class="text-base mb-4">Amplía tu base de clientes con técnicas probadas que atraen y retienen a usuarios interesados en tus productos o servicios.</p>
                </div>
                <div class="p-4 bg-white shadow-lg rounded-lg">
                    <div class="flex items-center mb-2">
                        <i class="fas fa-business-time text-2xl mr-2 text-kobi-500"></i>
                        <h3 class="text-xl font-bold">Crecimiento sostenido</h3>
                    </div>
                    <p class="text-base mb-4">Impulsa el desarrollo sostenible de tu negocio con soluciones integrales que promueven un crecimiento constante y robusto.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-kobi-300 py-16 bg-[url('/img/fix_us_19.png')] bg-contain bg-no-repeat bg-left bg-opacity-20">
        <div class="max-w-screen-lg px-4 py-4 mx-auto flex flex-col justify-center items-center">
            <h2 class="text-3xl text-center font-bold mb-4">Transformando negocios con propósito</h2>
            <p class="text-base text-center mb-4 md:text-lg">¿Qué es una marca sin un propósito? Sabemos que no queremos ser una consultora más, queremos aportar valor a las marcas que trabajan con nosotros y a través de ellas <span class="font-bold">generar un impacto positivo en el mundo.</span></p>
        </div>
    </section>

    <section class="py-16">
        <h2 class="text-3xl text-center font-bold mb-4">¿Te pasa algo de esto?</h2>
        <div class="max-w-screen-lg mx-auto px-4 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-2">
            <div class="flex space-x-4 p-4 justify-start">
                <i class="fas fa-caret-right text-3xl text-kobi-500"></i>
                <p class="text-lg xl:text-xl">Las redes no me están dando los resultados que quiero</p>
            </div>
            <div class="flex space-x-4 p-4 justify-start">
                <i class="fas fa-caret-right text-3xl text-kobi-500"></i>
                <p class="text-lg xl:text-xl">El boca a boca no es suficiente</p>
            </div>
            <div class="flex space-x-4 p-4 justify-start">
                <i class="fas fa-caret-right text-3xl text-kobi-500"></i>
                <p class="text-lg xl:text-xl">Mi emprendimiento es muy poco conocido</p>
            </div>
            <div class="flex space-x-4 p-4 justify-start">
                <i class="fas fa-caret-right text-3xl text-kobi-500"></i>
                <p class="text-lg xl:text-xl">Mis ventas no alcanzan a cubrir mis gastos</p>
            </div>
        </div>
    </section>

    <section class="py-16">
        <h2 class="text-3xl text-center font-bold mb-4">Te ayudamos a</h2>
        <div class="max-w-screen-lg mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">

            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <div class="flex items-center mb-4">
                    <i class="fas fa-search text-2xl text-blue-500 mr-4"></i>
                    <h2 class="text-2xl font-semibold">Destacar cuando las personas te googlean</h2>
                </div>
                <p class="text-lg">
                    Muchas empresas tienen problemas para ser visibles en un mercado lleno de competencia. Sin una buena optimización, es difícil que los clientes te encuentren.
                </p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <div class="flex items-center mb-4">
                    <i class="fas fa-bullhorn text-2xl text-green-500 mr-4"></i>
                    <h2 class="text-2xl font-semibold">Alcanzar a tu cliente ideal</h2>
                </div>
                <p class="text-lg">
                    Llegar a las personas correctas puede ser complicado. Sin una buena segmentación, tus anuncios pueden no llegar a quienes realmente están interesados en tus productos o servicios, perdiendo tiempo y dinero.
                </p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <div class="flex items-center mb-4">
                    <i class="fas fa-chart-line text-2xl text-red-500 mr-4"></i>
                    <h2 class="text-2xl font-semibold">Impulsar tus ventas</h2>
                </div>
                <p class="text-lg">
                    Aumentar las ventas es crucial, pero necesitas estar visible cuando las personas buscan lo que ofreces. Sin buenos anuncios en Google, puedes perder ventas importantes.
                </p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <div class="flex items-center mb-4">
                    <i class="fas fa-undo text-2xl text-yellow-500 mr-4"></i>
                    <h2 class="text-2xl font-semibold">Convertir más visitantes en clientes</h2>
                </div>
                <p class="text-lg">
                    Si las personas abandonan tu página rápidamente o no compran, puede ser por problemas en la experiencia del usuario. Si tu página web no está optimizada, podrías estar perdiendo clientes por un diseño pobre, tiempos de carga lentos o navegación confusa.
                </p>
            </div>
        </div>
    </section>

    <section id="contacto" class="max-w-screen-lg px-4 mx-auto text-center py-16 mb-16">
        <h2 class="text-3xl font-bold mb-4">¿Quieres escalar tu negocio?</h2>
        <p class="text-base mb-4 md:text-lg">Déjanos tu mensaje y te contactaremos a la brevedad.</p>
        <a href="https://wa.me/5493482545262" target="_blank" class="bg-kobi-500 hover:bg-gray-700 transition-colors duration-300 text-white text-lg font-bold py-2 px-4 rounded inline-flex items-center">
            <i class="fab fa-whatsapp mr-2 text-2xl"></i>
            Escribinos
        </a>
    </section>

    <footer class="bg-gradient-to-b from-gray-100 to-kobi-300 py-16">
        <div class="max-w-screen-lg px-4 mx-auto flex flex-col items-center justify-center gap-4">
            <img src="./img/fix_us_23.png" alt="FixUs Logo" style="max-width: 180px;">
            <div>
                <a href="https://instagram.com/fixusconsultants" target="_blank" class="mx-2">
                    <i class="fab fa-instagram text-gray-700 hover:text-gray-900 transition-colors duration-300 text-4xl"></i>
                </a>
            </div>
            <div class="text-center">
                <p class="font-bold">&copy; 2024 - Fix<span class="italic">U</span>s</p>
                <p>Todos los derechos reservados</p>
            </div>
        </div>
    </footer>

    <script>
        let menu = document.getElementById('mobile-menu'),
            menuButton = document.getElementById('mobile-menu-button');
        menuButton.addEventListener('click', () => {
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });
        // si hacemos clic en cualquier lugar que no sea el menu, cerramos el menu
        document.addEventListener('click', (e) => {
            if (!menuButton.contains(e.target)) {
                menu.classList.add('hidden');
            }
        });
    </script>
</body>

</html>