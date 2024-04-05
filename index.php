<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fix Us Consultant | Página en Construcción</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'cotton-candy': {
              '50': '#fcf3f6',
              '100': '#fbe8f0',
              '200': '#f8d2e1',
              '300': '#f5b6cd',
              '400': '#ec7aa2',
              '500': '#e15380',
              '600': '#cf335c',
              '700': '#b32345',
              '800': '#94203a',
              '900': '#7c1f33',
              '950': '#4b0c1a',
            },
          }
        }
      }
    }
  </script>
</head>
<body class="min-h-screen bg-gray-100 flex flex-col items-center justify-center relative px-4">
    <header class="flex justify-center">
      <img src="https://imagen.io/" alt="Logo de la Consultora">
    </header>
    <main class="text-gray-800 py-12">
      <h1 class="text-3xl text-center font-bold mb-4">¡Próximamente!</h1>
      <h2 class="text-2xl text-center font-medium mb-4">Estamos trabajando en algo emocionante...</h2>
      <p class="text-center mb-8">Te invitamos a que te suscribas a nuestro boletín informativo para que seas el primero en enterarte de nuestro lanzamiento.</p>
      <form action="#">
        <div class="flex flex-col items-center">
          <input type="email" placeholder="Tu correo electrónico" class="border-2 border-gray-300 p-2 rounded w-full max-w-md">
          <button type="submit" class="bg-cotton-candy-300 p-2 rounded mt-4 w-full max-w-md">Suscribirme</button>
        </div>
      </form>
      <p class="text-center mt-8">También puedes seguirnos en nuestras redes sociales:</p>
      <ul class="flex justify-center gap-2 mt-4">
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Instagram</a></li>
      </ul>
    </main>
    <footer class="text-gray-600 p-4 flex flex-col items-center justify-center">
      <p>&copy; 2024 - Fix Us Consultant</p>
    </footer>
</body>
</html>
