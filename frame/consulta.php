<?php include 'conn.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
</head>
<header>
    <h1>Consultar Datos</h1>
</header>
<body>

<table border=1>
    <thead>
            <td>ID</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Correo</td>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM datos";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["nombre"]."</td>
                <td>".$row["apellido"]."</td>
                <td>".$row["correo"]."</td>
                </tr>
                ";
            }
        } 
        ?>
    </tbody>
</table>
    
</body>
</html>