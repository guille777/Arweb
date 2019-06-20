<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
include "lib/jugadores.php";
	$nba=new jugador();
		if (isset($_GET["Nombre"])) {
			$resultadoBorrar=$nba->borrarJugador($_GET["Nombre"]);
			if ($resultadoBorrar==true) {
			echo $_GET["Nombre"];
			}
		}
		else{
			echo "error en el borrado";
		}
		echo "<br>";
		// echo "<a href='listaequipos.php'>Borrar mas Equipos</a>";
?>
</body>
</html>