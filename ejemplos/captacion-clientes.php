<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Página de Captación de Clientes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

    <!-- Countdown Timer -->
    <div class="bg-rose-500 text-white p-4 text-center">
        <div class="flex justify-center gap-4">
            <span class="bg-white text-rose-500 px-3 py-1 rounded">00</span>
            <span class="bg-white text-rose-500 px-3 py-1 rounded">00</span>
            <span class="bg-white text-rose-500 px-3 py-1 rounded">00</span>
        </div>
    </div>

    <main class="max-w-4xl mx-auto px-4">

        <!-- Value Proposition -->
        <div class="grid md:grid-cols-2 gap-8 py-20">
            <div class="bg-rose-500 aspect-video rounded-lg flex items-center justify-center text-white">
                Foto o video
            </div>
            <div class="space-y-4">
                <h2 class="text-2xl font-bold">Propuesta de valor</h2>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                <button class="bg-black text-white px-6 py-3 rounded-lg hover:bg-gray-800 transition">
                    Call to action
                </button>
            </div>
        </div>

        <!-- Benefits -->
        <section class="py-20">
            <h2 class="text-2xl font-bold mb-4">Beneficios</h2>
            <p class="mb-6">Lorem ipsum dolor sit amet. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="aspect-square bg-sky-200 rounded-full flex items-center justify-center border-2 border-black">BENEFICIO</div>
                <div class="aspect-square bg-sky-200 rounded-full flex items-center justify-center border-2 border-black">BENEFICIO</div>
                <div class="aspect-square bg-sky-200 rounded-full flex items-center justify-center border-2 border-black">BENEFICIO</div>
                <div class="aspect-square bg-sky-200 rounded-full flex items-center justify-center border-2 border-black">BENEFICIO</div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="py-20">
            <h2 class="text-2xl font-bold mb-6">Otros clientes opinan...</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="border p-4 rounded-lg">
                    <p class="text-sm mb-2">Lorem ipsum dolor sit amet</p>
                    <div class="text-yellow-400">★★★★★</div>
                </div>
                <div class="border p-4 rounded-lg">
                    <p class="text-sm mb-2">Lorem ipsum dolor sit amet</p>
                    <div class="text-yellow-400">★★★★★</div>
                </div>
                <div class="border p-4 rounded-lg">
                    <p class="text-sm mb-2">Lorem ipsum dolor sit amet</p>
                    <div class="text-yellow-400">★★★★★</div>
                </div>
                <div class="border p-4 rounded-lg">
                    <p class="text-sm mb-2">Lorem ipsum dolor sit amet</p>
                    <div class="text-yellow-400">★★★★★</div>
                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section class="py-20">
            <h2 class="text-2xl font-bold mb-6">Preguntas frecuentes</h2>
            <div class="space-y-4">
                <details class="border p-4 rounded-lg">
                    <summary class="font-bold">Lorem ipsum lorem ipsum lorem ipsum lorem ipsum</summary>
                    <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nunc vitae
                        vestibulum
                        iaculis, nibh nunc tincidunt erat, et convallis nunc tellus in sapien. Ut sed nibh at lectus
                        gravida
                        egestas. Morbi nec libero id sapien tincidunt blandit. In hac habitasse platea dictumst.
                        Suspendisse
                        potenti. Nulla facilisi. Sed malesuada, augue ut vulputate iaculis, nibh nunc tincidunt erat,
                        et
                        convallis
                        nunc tellus in sapien. Ut sed nibh at lectus gravida egestas.</p>
                </details>
                <details class="border p-4 rounded-lg">
                    <summary class="font-bold">Lorem ipsum lorem ipsum lorem ipsum lorem ipsum</summary>
                    <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nunc vitae
                        vestibulum
                        iaculis, nibh nunc tincidunt erat, et convallis nunc tellus in sapien. Ut sed nibh at lectus
                        gravida
                        egestas. Morbi nec libero id sapien tincidunt blandit. In hac habitasse platea dictumst.
                        Suspendisse
                        potenti. Nulla facilisi. Sed malesuada, augue ut vulputate iaculis, nibh nunc tincidunt erat,
                        et
                        convallis
                        nunc tellus in sapien. Ut sed nibh at lectus gravida egestas.</p>
                </details>
                <details class="border p-4 rounded-lg">
                    <summary class="font-bold">Lorem ipsum lorem ipsum lorem ipsum lorem ipsum</summary>
                    <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nunc vitae
                        vestibulum
                        iaculis, nibh nunc tincidunt erat, et convallis nunc tellus in sapien. Ut sed nibh at lectus
                        gravida
                        egestas. Morbi nec libero id sapien tincidunt blandit. In hac habitasse platea dictumst.
                        Suspendisse
                        potenti. Nulla facilisi. Sed malesuada, augue ut vulputate iaculis, nibh nunc tincidunt erat,
                        et
                        convallis
                        nunc tellus in sapien. Ut sed nibh at lectus gravida egestas.</p>
                </details>
            </div>
            <button class="w-full bg-black text-white py-3 rounded-lg mt-6 hover:bg-gray-800 transition">
                Call to action
            </button>
        </section>

        <!-- Chat Support -->
        <div class="fixed bottom-4 right-4 bg-white p-4 rounded-full shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
            </svg>
        </div>

        <!-- Footer -->
        <footer class="text-center text-sm text-gray-600 mt-8">
            <div class="space-x-4">
                <a href="#" class="hover:underline">Link 1</a>
                <a href="#" class="hover:underline">Link 2</a>
                <a href="#" class="hover:underline">Link 3</a>
                <a href="#" class="hover:underline">Link 4</a>
            </div>
        </footer>
    </main>
</body>
</html>