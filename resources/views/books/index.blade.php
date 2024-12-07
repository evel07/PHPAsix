<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Llibres</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background-color: #003366;
            color: #fff;
            padding: 10px 0;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        nav ul li {
            display: inline;
            margin-right: 15px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            background-color: #0059b3;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
        }
        nav ul li a:hover {
            background-color: #004080;
            transform: scale(1.1);
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            background-color: #0059b3;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #004080;
        }
        main {
            flex: 1;
            padding: 20px;
        }
        footer {
            background-color: #003366;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table th, table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }
        table th {
            background-color: #003366;
            color: #fff;
        }
        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        table tr:hover {
            background-color: #ddd;
        }
        a.btn-action {
            background-color: #0059b3;
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 3px;
            transition: background-color 0.3s;
        }
        a.btn-action:hover {
            background-color: #004080;
        }
        .title {
            font-size: 28px;
            font-weight: bold;
            color: #003366;
            text-align: center;
            text-transform: uppercase;
            margin: 20px 0;
            position: relative;
        }
        .title:after {
            content: '';
            display: block;
            width: 50px;
            height: 3px;
            background-color: #0059b3;
            margin: 10px auto;
        }
    </style>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="/">Inici</a></li>
            <li><a href="/books">Llibres</a></li>
            <li><a href="/vehicles">Fast & Furious</a></li>
        </ul>
    </nav>
</header>

<main class="flex-1">
    <section>
        <p class="title">Llista de llibres:</p>
        <a href="/books/create" class="btn">Crear Llibre</a>
        <div>
            <table>
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Year</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($books as $book): ?>
                <tr>
                    <td><?=$book->id;?></td>
                    <td><?=$book->name;?></td>
                    <td><?=$book->author;?></td>
                    <td><?=$book->releaseYear;?></td>
                    <td>
                        <a href="/books/edit/<?= $book->id?>" class="btn-action">Editar</a>
                        <a href="/books/confirm-delete/<?= $book->id?>" class="btn-action">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</main>

<footer>
    <p>&copy; 2024 Projecte PHP. Desenvolupat per Evelyn Nofuentes Garcia.</p>
</footer>
</body>
</html>
