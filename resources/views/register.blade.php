<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfinityNodes - Registrieren</title>
    <link rel="stylesheet" href="{{ url('fonts/style.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ url('img/favicon.ico') }}">
    <script src="https://cdn.tailwindcss.com"></script>
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
            <a href="{{ url('/') }}" class="text-lg text-gray-800 hover:text-gray-600 px-3 py-2 rounded-md">Startseite</a>
            <a href="{{ url('containers') }}" class="text-lg text-gray-800 hover:text-gray-600 px-3 py-2 rounded-md">Containers</a>
            <a href="{{ url('login') }}" class="text-lg text-gray-800 hover:text-gray-600 px-3 py-2 rounded-md">Login</a>
            <a href="{{ url('register') }}" class="text-lg text-gray-800 hover:text-gray-600 px-3 py-2 rounded-md underline">Registieren</a>
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
      <a href="{{ url('/') }}" class="block px-3 py-2 rounded-md text-base text-gray-800 hover:text-gray-600 px-3 py-2 rounded-md">Startseite</a>
      <a href="{{ url('containers') }}" class="block px-3 py-2 rounded-md text-base text-gray-800 hover:text-gray-600 px-3 py-2 rounded-md">Containers</a>
      <a href="{{ url('login') }}" class="block px-3 py-2 rounded-md text-base text-gray-800 hover:text-gray-600 px-3 py-2 rounded-md">Login</a>
      <a href="{{ url('register') }}" class="block px-3 py-2 rounded-md text-base text-gray-800 hover:text-gray-600 px-3 py-2 rounded-md underline">Registrieren</a>
    </div>
  </div>
    <div class="flex items-center justify-center relative top-32 md:relative md:top-32 lg:relative lg:top-32">
        <div class="bg-white p-8 rounded-lg shadow-lg w-80 md:w-full lg:w-full max-w-md">
            <h1 class="text-2xl font-bold text-center mb-4">Anmelden</h1>
            <div>
                <p class="text-sm text-red-500 text-center mb-4">{{ session('message') }}</p>
            </div>
            <form method="post" action="{{ url('login/auth') }}">
                @csrf
                <div class="mb-4">
                    <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                    <input type="username" id="username" name="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Passwort</label>
                    <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Anmelden
                    </button>
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
                        Passwort vergessen?
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
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