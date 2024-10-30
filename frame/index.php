<?php include 'conn.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
</head>
<header>
    <h1>Insertar Datos</h1>
</header>

<body>
<form method="POST" action="insertar_crud.php">
    <input type="text" value="create" name="crud" hidden>

    <div class="form-group" style="display: flex; align-items: center; justify-content: flex-start;">
        <label for="id" style="width: 100px;">ID:</label>
        <input type="text" id="id" name="id" class="form-control" style="width: 300px;">
    </div>
    <br>
    <div class="form-group" style="display: flex; align-items: center; justify-content: flex-start;">
        <label for="nombre" style="width: 100px;">Nombre:</label>
        <input type="text" id="nombre" name="nombre" class="form-control" style="width: 300px;">
    </div>
    <br>
    <div class="form-group" style="display: flex; align-items: center; justify-content: flex-start;">
        <label for="apellido" style="width: 100px;">Apellido:</label>
        <input type="text" id="apellido" name="apellido" class="form-control" style="width: 300px;">
    </div>
    <br>
    <div class="form-group" style="display: flex; align-items: center; justify-content: flex-start;">
        <label for="correo" style="width: 100px;">Correo:</label>
        <input type="text" name="correo" id="correo" class="form-control" style="width: 300px;">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">INSERTAR</button>
</form>

</body>

</html>