<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfinityNodes - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-100">
    <div>
    <div class="container mx-auto px-4 p-5">
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    <button class="modal-open bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center" data-modal="modal1">
        <i class="fa-brands fa-wordpress"></i>
      <span>ebsite Container</span>
    </button>
    <form method="post" action="{{ url('logout') }}">
        @csrf
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span> Ausloggen</span>
        </button>
    </form>
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
@foreach ($containers as $container)
      <p>{{ json_encode($container) }}</p>
    @endforeach
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 p-4">

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