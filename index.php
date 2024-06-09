<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- favicon -->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <title>Fix Us Consultant | Página en Construcción</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-CJ530ZGYKZ"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-CJ530ZGYKZ');
  </script>
</head>
<body class="min-h-screen bg-gray-100 flex flex-col items-center justify-center relative px-4">
    <header class="flex justify-center">
      <img style="max-width: 350px" src="./img/logo_fixus.png" alt="Logo de la Consultora">
    </header>
    <main class="text-gray-800 py-12">
      <h1 class="text-3xl text-center font-bold mb-4">¡Próximamente!</h1>
      <h2 class="text-2xl text-center font-medium mb-4">Estamos trabajando en algo emocionante...</h2>
      <p class="text-center mb-8">Mientras tanto, te invitamos a que nos sigas en nuestras redes para no perderte de nada:</p>
      <ul class="flex justify-center gap-2 mt-4">
        <li>
          <a href="https://instagram.com/fixusconsultants" class="text-gray-700 hover:text-gray-900">
            <i class="fab fa-instagram text-4xl"></i>
          </a>
        </li>
      </ul>
    </main>
    <footer class="text-gray-600 p-4 flex flex-col items-center justify-center">
      <p>&copy; 2024 - Fix Us Consultant</p>
    </footer>
</body>
</html>