<html>

<head>
    <title>Pagina con muchos frames</title>
</head>

<body>
    <br>
    <table width="100%" height="100%" border="1px" align="center">
        <tr>
            <td width="30%">
                <p><a href="index.php" target="iframe_a">Insertar Datos del Alumno</a></p>
                <p><a href="consulta.php" target="iframe_a">Consulta</a></p>
                <p><a href="ciclo_for.php" target="iframe_a">Ciclo con bootstrap</a></p>
                <p><a href="https://es.wikipedia.org/wiki/JavaScript" target="iframe_a">HTML</a></p>
            </td>
            <td>
                <iframe width="100%" height="100%" src="http://localhost:8082/insert.php" name="iframe_a"></iframe>
            </td>
        </tr>
    </table>

</body>

</html>