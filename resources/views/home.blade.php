<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>InfinityNodes.net - Startseite</title>
  <link rel="stylesheet" href="{{ url('fonts/style.css') }}">
  <link rel="stylesheet" href="{{ url('css/home/style.css') }}">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" type="image/x-icon" href="{{ url('img/favicon.ico') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="sticky top-0 bg-white shadow-md z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16 items-center">
        <div class="flex-shrink-0">
          <a href="{{ url('/') }}">
            <img class="h-12 w-full" src="{{ url('img/logo.jpg') }}" alt="Company logo">
          </a>
        </div>
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-4">
            <a href="{{ url('/') }}" class="text-lg text-gray-800 hover:text-gray-600 px-3 py-2 rounded-md underline">Startseite</a>
            <a href="{{ url('containers') }}" class="text-lg text-gray-800 hover:text-gray-600 px-3 py-2 rounded-md">Containers</a>
            <a href="{{ url('login') }}" class="text-lg text-gray-800 hover:text-gray-600 px-3 py-2 rounded-md">Login</a>
            <a href="{{ url('register') }}" class="text-lg text-gray-800 hover:text-gray-600 px-3 py-2 rounded-md">Registieren</a>
          </div>
        </div>
        <div class="md:hidden">
          <button onclick="toggleMenu()" class="text-gray-800 hover:text-gray-600 px-3 py-2 rounded-md text-2xl">
            <i class="fa-solid fa-bars"></i>
          </button>
        </div>
      </div>
    </div>
    <div id="mobile-menu" class="hidden md:hidden absolute top-full left-0 w-full bg-white shadow-md z-40">
      <a href="{{ url('/') }}" class="block px-3 py-2 rounded-md text-base text-gray-800 hover:text-gray-600 px-3 py-2 rounded-md underline">Startseite</a>
      <a href="{{ url('containers') }}" class="block px-3 py-2 rounded-md text-base text-gray-800 hover:text-gray-600 px-3 py-2 rounded-md">Containers</a>
      <a href="{{ url('login') }}" class="block px-3 py-2 rounded-md text-base text-gray-800 hover:text-gray-600 px-3 py-2 rounded-md">Login</a>
      <a href="{{ url('register') }}" class="block px-3 py-2 rounded-md text-base text-gray-800 hover:text-gray-600 px-3 py-2 rounded-md">Registrieren</a>
    </div>
  </div>
  <div class="container mx-auto px-6 md:px-12 lg:px-24 py-12">
  <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
    <div class="md:text-left text-center">
      <h1 class="text-4xl md:text-4xl xl:text-5xl font-bold mb-4">InfinityNodes.net</h1>
      <p class="text-lg mb-6">Dein Anbieter für Webserver-Container, Minecraft-Container und mehr.</p>
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Zu den Containers
      </button>
    </div>
    <div class="flex justify-center md:justify-end">
      <img src="{{ url('img/dashboard.jpg') }}" alt="Placeholder image representing the service offered" class="rounded-lg shadow-lg">
    </div>
  </div>
</div>
<div class="container mx-auto px-4">
  <header class="text-center my-10">
    <h1 class="text-4xl font-bold">Unsere Produkte</h1>
  </header>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">
    <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center">
      <i class="fa-brands fa-wikipedia-w fa-2xl m-5"></i>
      <h2 class="text-lg font-semibold">Webserver-Container</h2>
      <p class="text-gray-600 text-sm md:text-base">Starten Sie Ihre Online-Präsenz mit unserem benutzerfreundlichen Webserver-Container. Ideal für Websites, Blogs oder Foren. Erwerben Sie jetzt Ihren Raum im Internet und bringen Sie Ihre Ideen heute noch online!</p>
      <div class="mt-5 mb-1 md:h-full md:flex md:items-end lg:text-center md:text-end">
        <p class="text-blue-500 hover:text-blue-700 text-xl">€1,00 / Monat</p>
      </div>
      <div class="md:flex md:items-end">
        <form method="get" action="{{ url('container/webserver') }}">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Konfigurieren</button>
        </form>
      </div>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center">
      <i class="fa-solid fa-shield-halved fa-2xl m-5"></i>
      <h2 class="text-lg font-semibold">Minecraft-Container</h2>
      <p class="text-gray-600 text-sm md:text-base">Erschaffen Sie Ihre eigene Spielwelt mit unserem Minecraft-Container. Schnell, zuverlässig und bereit für Kreativität. Holen Sie sich Ihren Container und starten Sie in Ihr Minecraft-Abenteuer noch heute!</p>
      <div class="mt-5 mb-1 md:h-full md:flex md:items-end lg:text-center md:text-end">
        <p class="text-blue-500 hover:text-blue-700 text-xl">€1,00 / Monat</p>
      </div>
      <div class="md:flex md:items-end">
        <form method="get" action="{{ url('container/minecraft') }}">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Konfigurieren</button>
        </form>
      </div>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center">
      <i class="fa-solid fa-database fa-2xl m-5"></i>
      <h2 class="text-lg font-semibold">Database-Container</h2>
      <p class="text-gray-600 text-sm md:text-base">Optimieren Sie Ihre Datenverwaltung mit unseren Datenbank-Container. Skalierbar für die idealen Lösungen für Ihre wachsenden Datenbedürfnisse.</p>
      <div class="mt-5 mb-1 md:h-full md:flex md:items-end lg:text-center md:text-end">
        <p class="text-blue-500 hover:text-blue-700 text-xl">€1,00 / Monat</p>
      </div>
      <div class="md:flex md:items-end">
        <form method="get" action="{{ url('container/database') }}">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Konfigurieren</button>
        </form>
      </div>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center">
      <i class="fa-solid fa-hard-drive fa-2xl m-5"></i>
      <h2 class="text-lg font-semibold">Storage-Container</h2>
      <p class="text-gray-600 text-sm md:text-base">Sichern Sie Ihre Daten mit unseren Storage-Container. Skalierbar und jederzeit zugänglich, bieten sie die ideale Lösung für Ihre Speicherbedürfnisse.</p>
      <div class="mt-5 mb-1 md:h-full md:flex md:items-end lg:text-center md:text-end">
        <p class="text-blue-500 hover:text-blue-700 text-xl">€1,00 / Monat</p>
      </div>
      <div class="md:flex md:items-end">
        <form method="get" action="{{ url('container/storage') }}">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Konfigurieren</button>
        </form>
      </div>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center">
      <i class="fa-solid fa-language fa-2xl m-5"></i>
      <h2 class="text-lg font-semibold">Coding-Container</h2>
      <p class="text-gray-600 text-sm md:text-base">Unsere Coding-Container sind perfekt für individuelle Entwickler und Teams, die in Java, PHP und mehr programmieren. Mit leichter Tool-Integration fördern sie die Anpassungsfähigkeit Ihrer Projekte.</p>
      <div class="mt-5 mb-1 md:h-full md:flex md:items-end lg:text-center md:text-end">
        <p class="text-blue-500 hover:text-blue-700 text-xl">€1,00 / Monat</p>
      </div>
      <div class="md:flex md:items-end">
        <form method="get" action="{{ url('container/coding') }}">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Konfigurieren</button>
        </form>
      </div>
    </div>
  </div>
  <div class="text-center my-10">
  </div>
</div>
<div class="container mx-auto px-4">
  <header class="text-center my-10">
    <h1 class="text-4xl font-bold">Hardware</h1>
  </header>
  <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 flex justify-center gap-8">
    <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center">
      <i class="fa-solid fa-microchip fa-2xl m-5"></i>
      <h2 class="text-lg font-semibold">Prozessor</h2>
      <p class="text-gray-600 text-sm md:text-base">Ihre Projekte werden auf Servern betrieben, die mit einer leistungsstarken AMD RYZEN CPU bestückt ist.</p>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center">
      <i class="fa-solid fa-memory fa-2xl m-5"></i>
      <h2 class="text-lg font-semibold">RAM</h2>
      <p class="text-gray-600 text-sm md:text-base">Ihre Projekte profitieren von DDR4 ECC Arbeitsspeicher, der für zusätzliche Datenintegrität und Stabilität sorgt.</p>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center">
      <i class="fa-regular fa-hard-drive fa-2xl m-5"></i>
      <h2 class="text-lg font-semibold">Festplatte</h2>
      <p class="text-gray-600 text-sm md:text-base">Die Server verwenden SSDs vom Typ U.2 NVMe, die für ultimative Geschwindigkeit und Zuverlässigkeit sorgen.</p>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6 flex flex-col items-center">
      <i class="fa-solid fa-network-wired fa-2xl m-5"></i>
      <h2 class="text-lg font-semibold">Netzwerk</h2>
      <p class="text-gray-600 text-sm md:text-base">Das Netzwerk basiert auf einer 1 Gbit Netzwerkkarte (NIC), die eine zuverlässige und schnelle Netzwerkverbindung gewährleistet.</p>
    </div>
  </div>
  <div class="text-center my-10">
  </div>
</div>
</body>
<footer class="bg-gray-800 text-white text-center">
  <div class="container mx-auto px-6 py-10">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div>
        <h2 class="text-xl font-semibold mb-4">Produkte</h2>
        <ul class="text-gray-400 space-y-2">
          <li><a href="#" class="hover:text-white">Webserver-Container</a></li>
          <li><a href="#" class="hover:text-white">Minecraft-Container</a></li>
          <li><a href="#" class="hover:text-white">Database-Container</a></li>
          <li><a href="#" class="hover:text-white">Storage-Container</a></li>
          <li><a href="#" class="hover:text-white">Coding-Container</a></li>
        </ul>
      </div>
      <div>
        <h2 class="text-xl font-semibold mb-4">Informationen</h2>
        <ul class="text-gray-400 space-y-2">
          <li><a href="#" class="hover:text-white">Impressum</a></li>
          <li><a href="#" class="hover:text-white">AGB`s</a></li>
          <li><a href="#" class="hover:text-white">Datenschutz</a></li>
          <li><a href="#" class="hover:text-white">Widerruf</a></li>
        </ul>
      </div>
      <div>
        <h2 class="text-xl font-semibold mb-4">Socialmedia</h2>
        <div class="text-gray-400 flex justify-center space-x-4">
          <a href="#" class="hover:text-white"><i class="fa-regular fa-star-half-stroke"></i> Trustpilot</a>
          <a href="#" class="hover:text-white"><i class="fa-brands fa-discord"></i> Discord</a>
          <a href="#" class="hover:text-white"><i class="fa-solid fa-handshake"></i> Partner</a>
        </div>
      </div>
    </div>
  </div>
</footer>
<script>
    function toggleMenu() {
      var menu = document.getElementById('mobile-menu');
      if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
      } else {
        menu.classList.add('hidden');
      }
    }
</script>
</html>