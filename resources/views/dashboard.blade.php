<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfinityNodes - Dashboard</title>
    <link rel="stylesheet" href="{{ url('fonts/style.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ url('img/favicon.ico') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ url('js/dashboard/app.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="sticky top-0 bg-white shadow-md z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16 items-center w-full">
        <div class="flex-shrink-0">
          <a href="{{ url('/') }}">
            <img class="h-12 w-full" src="{{ url('img/logo.jpg') }}" alt="Company logo">
          </a>
        </div>
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-4">
            <a href="{{ url('containers') }}" class="text-lg text-gray-800 hover:text-gray-600 px-3 py-2 rounded-md underline">Meine Produkte</a>
            <a href="{{ url('register') }}" class="text-lg text-gray-800 hover:text-gray-600 px-3 py-2 rounded-md">Rechnungen</a>
            <a href="{{ url('logout') }}" class="text-lg text-gray-800 hover:text-gray-600 px-3 py-2 rounded-md">Ausloggen</a>
          </div>
        </div>
        <div class="hidden md:block">
          <a>{{ session('username') }}</a>
          <button onclick="toggledMenu();" class="text-gray-800 hover:text-gray-600 px-3 py-2 rounded-md text-2xl">
            <i class="fa-solid fa-user"></i>
          </button>
        </div>
        <div class="md:hidden">
          <button onclick="toggledMenu();" class="text-gray-800 hover:text-gray-600 px-3 py-2 rounded-md text-2xl">
            <i class="fa-solid fa-user"></i>
          </button>
          <button onclick="toggleMenu()" class="text-gray-800 hover:text-gray-600 px-3 py-2 rounded-md text-2xl">
            <i class="fa-solid fa-bars"></i>
          </button>
        </div>
      </div>
    </div>
    <div id="mobile-menu" class="hidden md:hidden absolute top-full left-0 w-full bg-white shadow-md z-40">
      <a href="{{ url('containers') }}" class="block px-3 py-2 rounded-md text-base text-gray-800 hover:text-gray-600 px-3 py-2 rounded-md underline">Meine Produkte</a>
      <a href="{{ url('login') }}" class="block px-3 py-2 rounded-md text-base text-gray-800 hover:text-gray-600 px-3 py-2 rounded-md">Rechnungen</a>
      <a href="{{ url('logout') }}" class="block px-3 py-2 rounded-md text-base text-gray-800 hover:text-gray-600 px-3 py-2 rounded-md cursor-pointer">Ausloggen</a>
    </div>
    <div id="user-menu" class="hidden absolute w-full right-0 xl:w-24 x2l:w-24 2xl:right-0 2xl:left-3/4 md:w-24 md:w-24 md:right-0">
      <div class="bg-white rounded-md shadow-lg py-1 w-full x2l:w-48 md:w-24">
        <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
        <a href="/settings" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
        <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
      </div>
    </div>
  </div>
<script>
    function toggleMenu() {
      var menu = document.getElementById('mobile-menu');
      if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
      } else {
        menu.classList.add('hidden');
      }
    }

    function toggledMenu() {
      var menu = document.getElementById('user-menu');
      if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
      } else {
        menu.classList.add('hidden');
      }
    }

    
</script>
    <div>
    <div class="container mx-auto px-4 p-5">
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    <button class="modal-open bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center" data-modal="modal1">
        <i class="fa-brands fa-wordpress"></i>
      <span>ebsite Container</span>
    </button>
    <div class="modal hidden fixed w-full h-full top-0 left-0 flex items-center justify-center" id="modal1">
      <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
      <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <div class="modal-content py-4 text-left px-6">
          <div class="flex justify-between items-center pb-3">
            <p class="text-2xl font-bold">Website Container</p>
            <div class="modal-close cursor-pointer z-50">
              <span class="text-3xl font-semibold">&times;</span>
            </div>
          </div>
          <p>Einstellungsmöglichkeiten, "Ram, CPU, Festplatte", dementsprechend wird dadurch auch der Preis angepasst</p>
          <div class="flex justify-end pt-2">
            <div class="mr-5">
                <form action="{{ url('createContainer') }}" method="post">
                    @csrf
                    <button class="modal-close px-4 bg-blue-500 p-3 rounded-lg text-white hover:bg-blue-400">Erstellen</button>
                </form>
            </div>
            <div>
                <button class="modal-close px-4 bg-blue-500 p-3 rounded-lg text-white hover:bg-blue-400">Schließen</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="flex justify-center">
    <p class="text-red-500">{{ session("message") }}</p>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 p-4">
  @foreach ($containers as $container)
    <div class="bg-white rounded-lg shadow-md p-6">
      <div>
        <p class="font-bold text-gray-700">ID: <a href='{{ url("container/$container[id]") }}' class="font-normal">{{ substr($container["id"], 0, 12) }}</a></p>
      </div>
      <div>
        <p class="font-bold text-gray-700">Name: <span class="font-normal">{{ str_replace("/", "", $container["name"]) }}</span></p>
      </div>
      <div>
        <p class="font-bold text-gray-700">Image: <span class="font-normal">{{ $container["image"] }}</span></p>
      </div>
      <div>
        <p class="font-bold text-gray-700">State: <span class="font-normal">{{ $container["state"] }}</span></p>
      </div>
      <div>
        <p class="font-bold text-gray-700">Ports:</p>
        @foreach($container["ports"] as $port)
          <span class="font-bold text-gray-700">- {{ $port["protocol"] }}: <span class="font-normal">{{ $port["public"] }}</span></span><br>
        @endforeach
      </div>
      <div>
        <p class="font-bold text-gray-700">IP: <span class="font-normal">{{ $container["ip"] }}</span></p>
      </div>
      <div>

      </div>
      <div class="flex justify-end pt-2">
        <div class="mr-5">
          @if ($container["state"] == "running")
            <form method="post" action="{{ url('stopContainer') }}">
              @csrf
              <button id="stopContainer" name="stopContainer" value='{{ $container["id"] }}' class="modal-close px-4 bg-blue-500 p-3 rounded-lg text-white hover:bg-blue-400">Stoppen</button>
            </form>
          @else
            <form method="post" action="{{ url('startContainer') }}">
              @csrf
              <button id="startContainer" name="startContainer" value='{{ $container["id"] }}' class="modal-close px-4 bg-blue-500 p-3 rounded-lg text-white hover:bg-blue-400">Starten</button>
            </form>
          @endif
        </div>
        <div>
          <form method="post" action="{{ url('deleteContainer') }}">
            @csrf
            <button id="deleteContainer" name="deleteContainer" value='{{ $container["id"] }}' class="modal-close px-4 bg-blue-500 p-3 rounded-lg text-white hover:bg-blue-400">Löschen</button>
          </form>
        </div>
      </div>
    </div>
  @endforeach
</div>
<script>
  const openModalButtons = document.querySelectorAll('.modal-open');
  const closeModalButtons = document.querySelectorAll('.modal-close');
  const overlay = document.querySelector('.modal-overlay');
  
  openModalButtons.forEach(button => {
    button.addEventListener('click', event => {
      const modalId = button.getAttribute('data-modal');
      const modal = document.getElementById(modalId);
      modal.classList.remove('hidden');
    });
  });
  
  closeModalButtons.forEach(button => {
    button.addEventListener('click', () => {
      const modals = document.querySelectorAll('.modal');
      modals.forEach(modal => modal.classList.add('hidden'));
    });
  });
  
  overlay.addEventListener('click', () => {
    const modals = document.querySelectorAll('.modal');
    modals.forEach(modal => modal.classList.add('hidden'));
  });
</script>
    </div>
</body>
</html>