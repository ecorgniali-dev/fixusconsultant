<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Fix Us Consultant | Marketing para clínicas odontológicas</title>
    <link rel="preconnect" href="https://kit.fontawesome.com">
    <link rel="preload" href="./img/landing-odontologia/odontologo_sonriendo.png" as="image">
    <link href="./output.css" rel="stylesheet">
    <script async src="https://kit.fontawesome.com/91b1e2c885.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="min-h-screen text-gray-800">

        <main>
            <section class="pt-10 text-gray-50 bg-gradient-to-br from-black via-gray-800 to-gray-400 relative overflow-hidden">
                <div class="max-w-screen-lg mx-auto px-4 flex flex-col gap-8 md:flex-row items-end relative">
                    <div class="text-center md:w-2/3 md:min-h-[450px] md:text-left">
                        <h2 class="text-5xl font-bold mb-6 md:text-left">Atrae más pacientes y haz <span class="bg-gradient-to-b from-kobi-100 to-kobi-600 bg-clip-text text-transparent">crecer</span>
                            tu clínica odontológica</h2>
                        <p class="text-lg md:text-left">Capta nuevos pacientes, <span class="font-semibold italic text-kobi-400">fideliza</span> a los actuales y <span class="font-semibold italic text-kobi-400">multiplica</span>
                            tus citas con una estrategia exclusiva para clínicas odontológicas.</p>
                        <p class="text-lg mb-8 md:text-left">Nos enfocamos en <span class="font-semibold italic text-kobi-400">aumentar tu cartera de pacientes e ingresos</span>. Tus futuros pacientes ya están en Instagram, Facebook o Google buscando servicios dentales. El mundo digital ha cambiado las reglas: lo de antes ya no basta.</p>
                        <a
                            href="https://calendly.com/{}/{}" target="_blank" class="inline-block font-semibold bg-kobi-400 hover:opacity-80 shadow-md shadow-kobi-200/50  py-3 px-8 rounded text-lg transition duration-300">
                            Sí, quiero más pacientes
                        </a>
                    </div>
                    <div class="md:w-1/3 relative">
                        <div class="absolute bg-kobi-600 opacity-10 rounded-full z-0 -bottom-32 -right-20 w-[34rem] h-[34rem] md:-bottom-36 md:-right-24"></div>
                        <img src="./img/landing-odontologia/odontologo_sonriendo.png" alt="Odontologo sonriendo" class="relative rounded z-10 w-full h-auto" />
                    </div>
                </div>
            </section>

            <section id="beneficios" class="py-12">
                <div class="max-w-screen-lg mx-auto px-4">
                    <h2 class="text-3xl font-bold text-center mb-8 md:text-4xl">Beneficios de nuestra
                        estrategia para tu clínica odontológica</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                        <?php
                        $beneficios = [
                            [
                                'icon' => '<i class="fas fa-users text-4xl text-kobi-600"></i>',
                                'text' => 'Atrae nuevos pacientes con contenido que inspira confianza desde el primer contacto.'
                            ],
                            [
                                'icon' => '<i class="fas fa-check-circle text-4xl text-kobi-600"></i>',
                                'text' => 'Fideliza a tus pacientes actuales y genera recomendaciones para atraer aún más pacientes.'
                            ],
                            [
                                'icon' => '<i class="fas fa-chart-line text-4xl text-kobi-600"></i>',
                                'text' => 'Promociona tus servicios de manera profesional, maximizando cada euro invertido en publicidad.'
                            ],
                            [
                                'icon' => '<i class="fas fa-calendar-alt text-4xl text-kobi-600"></i>',
                                'text' => 'Recibe reportes detallados y ajustes constantes para obtener siempre los mejores resultados.'
                            ]
                        ];
                        ?>

                        <?php foreach ($beneficios as $beneficio) { ?>
                            <div class="flex items-start space-x-6 p-4 bg-white">
                                <div class="shrink-0"><?= $beneficio['icon'] ?></div>
                                <p class="text-lg leading-relaxed md:text-xl"><?= $beneficio['text'] ?></p>
                            </div>
                        <?php } ?>

                    </div>
                    <div class="flex justify-center mt-8">
                        <a
                            href="https://calendly.com/{}/{}" target="_blank" class="bg-gray-800 hover:opacity-80 shadow-lg shadow-gray-500 text-white font-semibold py-3 px-8 rounded text-lg transition duration-300">
                            Quiero ver crecer mi clínica
                        </a>
                    </div>
                </div>
            </section>

            <section id="servicios" class="py-12 bg-gray-100">
                <div class="max-w-screen-lg mx-auto px-4">
                    <h2 class="text-3xl font-bold text-center mb-8 md:text-4xl">Todo lo necesario para
                        atraer y fidelizar pacientes</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                        <?php
                        $servicios = [
                            [
                                'title' => "Estrategia de Contenidos",
                                'description' => "Análisis a fondo de tu público y creación de un calendario de contenido que refleje la profesionalidad y calidad de tus servicios dentales.",
                                'image' => "./img/landing-odontologia/marketing-strategy.jpg"
                            ],
                            [
                                'title' => "Creación de Contenido Mensual",
                                'description' => "Posts visuales que captan la atención, reels informativos sobre tratamientos dentales y carruseles educativos que fidelizan a tus pacientes.",
                                'image' => "./img/landing-odontologia/social-media-marketing.jpg"
                            ],
                            [
                                'title' => "Estrategia de Publicidad",
                                'description' => "Segmentación avanzada para atraer pacientes locales y aumentar las reservas de consultas.",
                                'image' => "./img/landing-odontologia/segmentacion.jpg"
                            ],
                            [
                                'title' => "Gestión Mensual de Publicidad",
                                'description' => "Optimización constante para maximizar los resultados.",
                                'image' => "./img/landing-odontologia/resultados.jpg"
                            ]
                        ];
                        ?>

                        <?php foreach ($servicios as $servicio) { ?>
                            <div class="relative flex flex-col">
                                <div class="absolute inset-0 border-2 rounded border-kobi-600 translate-x-1 translate-y-1"></div>
                                <div class="relative z-10 rounded overflow-hidden bg-white flex-grow">
                                    <img src="<?= $servicio['image'] ?>" alt="<?= $servicio['title'] ?>" width="300" height="200" loading="lazy"
                                        class="w-full h-48 object-cover" />
                                    <div class="text-gray-800 p-4">
                                        <h3 class="text-2xl font-bold mb-4 "><?= $servicio['title'] ?></h3>
                                        <p class="leading-relaxed"><?= $servicio['description'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="flex justify-center mt-8">
                        <a
                            href="https://calendly.com/{}/{}" target="_blank" class="text-center font-semibold py-3 px-8 rounded bg-kobi-400 hover:bg-opacity-80  shadow-lg shadow-gray-500 transition duration-300 md:text-lg">
                            Quiero una estrategia que atraiga pacientes
                        </a>
                    </div>
                </div>
            </section>

            <section id="ofertas" class="py-20 bg-gradient-to-b from-black via-gray-800 to-gray-400">
                <div class="max-w-screen-lg mx-auto px-4">
                    <h2 class="text-white text-4xl font-bold text-center mb-8">Aprovecha nuestra oferta
                        especial</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                        <?php 
                        $ofertas = [
                            [
                                'title' => "Pago mensual",
                                'precio' => "1.800€",
                                'periodo' => "/mes",
                                'precio_anterior' => "Precio normal: 2.300€",
                                'descripcion' => "Accede a nuestra estrategia integral con una inversión mensual.",
                            ],
                            [
                                'title' => "Pago único por 4 meses",
                                'precio' => "6.500€",
                                'periodo' => "",
                                'precio_anterior' => "",
                                'descripcion' => "Ahorra y asegura resultados sostenidos a largo plazo con una estrategia de 4 meses",
                                'destaque' => true
                            ]
                        ];
                        ?>

                        <?php foreach ($ofertas as $oferta) { ?>
                            <div class="relative flex">
                                <div class="absolute rounded inset-0 border-2 border-kobi-600 translate-x-1 translate-y-1"></div>
                                <div class="relative rounded flex-grow z-10 bg-gradient-to-b from-kobi-100 to-kobi-50 p-8">
                                    <h3 class="text-2xl font-bold mb-4 "><?= $oferta['title'] ?></h3>
                                    <p class="text-4xl text-kobi-600 font-bold mb-2"><?= $oferta['precio'] ?><span class="text-lg"><?= $oferta['periodo'] ?></span></p>
                                    <p class="text-sm mb-4 text-kobi-800"><s><?= $oferta['precio_anterior'] ?><?= $oferta['periodo'] ?></s></p>
                                    <p class="mb-6"><?= $oferta['descripcion'] ?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="flex justify-center mt-8">
                        <a
                            href="https://calendly.com/{}/{}" target="_blank" class="text-center font-semibold py-3 px-4 bg-kobi-400 hover:bg-opacity-80 shadow-lg shadow-kobi-300/50 rounded transition duration-300 md:text-lg">
                            Quiero aprovechar la oferta y atraer más pacientes
                        </a>
                    </div>
                </div>
            </section>

            <section class="py-20 text-white bg-gradient-to-t from-black via-gray-800 to-gray-400">
                <div class="max-w-screen-lg mx-auto px-4 text-center relative">
                    <h2 class="text-4xl font-bold mb-6 ">¿Listo para llevar tu clínica
                        odontológica al siguiente nivel?</h2>
                    <p class="text-xl mb-8 max-w-2xl mx-auto">No esperes más para <span class="text-kobi-600 font-bold">transformar</span> tu presencia en
                        redes sociales. Haz <span class="text-kobi-600 font-bold">crecer</span> tu clínica odontológica con nuestra estrategia de marketing integral.
                    </p>
                    <a
                        href="https://calendly.com/{}/{}" target="_blank"
                        class="text-gray-800 bg-kobi-400 hover:bg-opacity-80 font-semibold py-3 px-8 rounded shadow-md shadow-kobi-300/50 transition duration-300 md:text-lg">
                        Sí, quiero atraer más pacientes
                    </a>
                </div>
            </section>
        </main>
    </div>
</body>

</html>