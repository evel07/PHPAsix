<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecte PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('/imatges/fastandfurious.png') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        header {
            background-color: rgba(0, 51, 102, 0.8);
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
            background-color: rgba(0, 89, 179, 0.8);
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
        }
        nav ul li a:hover {
            background-color: rgba(0, 64, 128, 0.8);
            transform: scale(1.1);
        }
        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
        }
        .hero h1 {
            font-size: 3em;
            margin: 0;
            color: #ffcc00; /* Color del títol canviat per millorar la visibilitat */
        }
        .hero p {
            font-size: 1.2em;
            margin: 10px 0;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            background-color: rgba(0, 89, 179, 0.8);
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: rgba(0, 64, 128, 0.8);
        }
        footer {
            background-color: rgba(0, 51, 102, 0.8);
            color: #fff;
            text-align: center;
            padding: 20px 0;
            position: relative;
            bottom: 0;
            width: 100%;
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

<main class="flex-1 hero">
    <section>
        <h1>Benvingut al Projecte de PHP</h1>
        <p>Explora els vehicles més emblemàtics de la saga Fast & Furious i els llibres fets a classe.</p>
        <a href="/books" class="btn">Descobreix els Llibres</a>
        <a href="/vehicles" class="btn">Descobreix els Vehicles</a>
    </section>
</main>

<footer>
    <p>&copy; 2024 Projecte PHP. Desenvolupat per Evelyn Nofuentes Garcia.</p>
</footer>
</body>
</html>
