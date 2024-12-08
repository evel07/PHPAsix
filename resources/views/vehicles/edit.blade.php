<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Demo ASIX</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<section class="flex justify-center items-center h-screen">
    <div class="max-w-md w-full bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-6 text-center text-blue-600">Editar vehicle: <?= htmlspecialchars($vehicle->model) ?></h1>
        <div>
            <form action="/vehicles/update/<?= htmlspecialchars($vehicle->id) ?>" method="POST" class="space-y-4">
                <div>
                    <label for="model" class="block text-sm font-medium text-gray-700">Model</label>
                    <input type="text" name="model" id="model" value="<?= htmlspecialchars($vehicle->model) ?>" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500">
                </div>
                <div>
                    <label for="year" class="block text-sm font-medium text-gray-700">Any</label>
                    <input type="text" name="year" id="year" value="<?= htmlspecialchars($vehicle->year) ?>" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500">
                </div>
                <div>
                    <label for="driver" class="block text-sm font-medium text-gray-700">Conductor</label>
                    <input type="text" name="driver" id="driver" value="<?= htmlspecialchars($vehicle->driver) ?>" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500">
                </div>
                <div>
                    <label for="max_speed" class="block text-sm font-medium text-gray-700">Velocitat Màxima</label>
                    <input type="number" name="max_speed" id="max_speed" value="<?= htmlspecialchars($vehicle->max_speed) ?>" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-500">
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Editar</button>
                </div>
            </form>
        </div>
    </div>
</section>
</body>
</html>
