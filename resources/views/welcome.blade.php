<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - Salud Ocupacional</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-500 to-indigo-600 min-h-screen flex items-center justify-center">

<div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md">

    <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">
        Sistema de Salud Ocupacional
    </h2>

    @if(session('error'))
        <div class="bg-red-100 text-red-600 p-2 rounded mb-4 text-center">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="/login">
        @csrf

        <div class="mb-4">
            <label class="block text-gray-600">Correo</label>
            <input type="email" name="correo" required
                class="w-full mt-1 p-2 border rounded-lg focus:ring-2 focus:ring-blue-400">
        </div>

        <div class="mb-6">
            <label class="block text-gray-600">Cédula</label>
            <input type="password" name="cedula" required
                class="w-full mt-1 p-2 border rounded-lg focus:ring-2 focus:ring-blue-400">
        </div>

        <button type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
            Ingresar
        </button>

    </form>

</div>

</body>
</html>