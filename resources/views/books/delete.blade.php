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
        <h1 class="text-2xl font-bold mb-6 text-center text-red-600">Eliminar Llibres</h1>
        <div>
            <p class="mb-6 text-center">Estàs segur que vols eliminar el llibre <strong class="text-blue-600"><?= $book->name ?></strong>?</p>
            <form action="/books/destroy/<?= $vehicle->id ?>" method="POST" class="flex justify-around">
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">Eliminar</button>
                <a href="/books" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">Cancel·lar</a>
            </form>
        </div>
    </div>
</section>
</body>
</html>
