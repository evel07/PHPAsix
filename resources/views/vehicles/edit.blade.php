<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Demo ASIX</title>
</head>
<body>
<h1>Editar vehicle: <?= $vehicle->model?></h1>
<div>
    <form action="/books/update/<?= $vehicle->id ?>" method="POST">
        <div>
            <label for="model">Model</label>
            <input type="text" name="model" id="name" value="<?=$vehicle->model?>">
        </div>
        <div>
            <label for="year">Any</label>
            <input type="text" name="year" id="author" value="<?=$vehicle->year?>">
        </div>
        <div>
            <label for="driver">Conductor</label>
            <input type="text" name="driver" id="author" value="<?=$vehicle->driver?>">
        </div>
        <div>
            <label for="max_speed">Velocitat Màxima</label>
            <input type="number" name="max_speed" id="max_speed" value="<?=$vehicle->max_speed?>">
        </div>
        <button type="submit">Editar</button>
    </form>
</div>
</body>
</html>