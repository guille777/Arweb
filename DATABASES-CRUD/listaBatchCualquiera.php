<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>listado borrar</title>
</head>
<body>
	<table border="1">
    <tr>
        <th>bid</th>
        <th>token</th>
        <th>timestamp</th>
    </tr>
<?php 
include "lib/kinder.php";
	$jug= new kinder();
	// echo "<a href="."index.php".">volver</a><br>";
	$tabla=$jug->devolverBatch();
		foreach ($tabla as $key => $fila) {
		echo "<tr>";  
			echo "<td>".$fila["bid"]."</td>";
			echo "<td>".$fila["token"]."</td>";
			echo "<td>".$fila["timestamp"]."</td>";
			// echo "<td>".$fila["batch"]."</td>";
			// echo "<td>".$fila["Peso"]."</td>";
			// echo "<td>".$fila["Posicion"]."</td>";
			// echo "<td>".$fila["Nombre_equipo"]."</td>";
			// echo "<td>"."<a href='borrarJugador.php?codigo=".$fila["codigo"]."&Nombre=".$fila["Nombre"]."&Procedencia=".$fila["Procedencia"]."&Altura=".$fila["Altura"]."&Peso=".$fila["Peso"]."&Posicion=".$fila["Posicion"]."&Nombre_equipo=".$fila["Nombre_equipo"]."'>Borrar Registro</a>"."</td>";
		echo "</tr>"; 
		}
		echo "</table>";
?>
</body>
</html>







