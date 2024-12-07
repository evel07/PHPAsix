<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar llibre: <?= $book->name?></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }
        h1 {
            font-size: 1.5em;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: block;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px 20px;
            background-color: #0059b3;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #004080;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Editar llibre: <?= $book->name?></h1>
    <form action="/books/update/<?= $book->id ?>" method="POST">
        <div>
            <label for="name">Títol</label>
            <input type="text" name="name" id="name" value="<?=$book->name?>">
        </div>
        <div>
            <label for="author">Autor</label>
            <input type="text" name="author" id="author" value="<?=$book->author?>">
        </div>
        <div>
            <label for="releaseYear">Any</label>
            <input type="number" name="releaseYear" id="releaseYear" value="<?=$book->releaseYear?>">
        </div>
        <button type="submit">Editar</button>
    </form>
</div>
</body>
</html>
