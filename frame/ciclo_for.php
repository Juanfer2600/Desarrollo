<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<h1>Ciclo For con sus aumentos</h1>
	<?php 
	echo "<table class=\"table table-striped\">"; 
	echo "<tr><th>x</th><th>x^2</th><th>x^3</th><th>x^4</th><th>x^5</th</tr>";
	for ($i = 1; $i <= 10; $i++) {
		echo "<tr><td>"; 
        echo $i; 
        echo "</td><td>"; 
        echo ($i*$i); 
        echo "</td><td>";
        echo($i*$i*$i); 
        echo "</td><td>";
        echo($i*$i*$i*$i); 
        echo "</td><td>";
        echo($i*$i*$i*$i*$i);
        echo"</td></tr>";

	}
	"</table>"
	?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>