<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Vehicles</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<section>
    <div class="max-w-7xl mx-auto bg-white shadow-lg py-6 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold mb-6">Afegir nou vehicle</h1>
        <div>
            <form action="/vehicle/store" method="POST">
                <div class="mb-4">
                    <label for="model" class="block text-sm font-medium text-gray-700">Model</label>
                    <input type="text" name="model" id="model" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="year" class="block text-sm font-medium text-gray-700">Any</label>
                    <input type="number" name="year" id="year" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="driver" class="block text-sm font-medium text-gray-700">Conductor</label>
                    <input type="text" name="driver" id="driver" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="max_speed" class="block text-sm font-medium text-gray-700">Velocitat Màxima</label>
                    <input type="number" name="max_speed" id="max_speed" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
                </div>
                <button type="submit"  class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Crear</button>
            </form>
        </div>
    </div>
</section>
</body>
</html>