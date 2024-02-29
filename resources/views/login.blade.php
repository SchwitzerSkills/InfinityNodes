<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfinityNodes - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 ">
    <div class="md:min-h-screen lg:min-h-screen flex items-center justify-center relative top-32 md:top-0 lg:top-0">
        <div class="bg-white p-8 rounded-lg shadow-lg w-80 md:w-full lg:w-full max-w-md">
            <h1 class="text-2xl font-bold text-center mb-4">Anmelden</h1>
            <div>
                <p class="text-sm text-red-500 text-center mb-4">{{ session('message') }}</p>
            </div>
            <form method="post" action="{{ url('login') }}">
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
</html>