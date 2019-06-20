<?php 

include "lib/jugadores.php";
	$nba=new jugador();
		if (isset($_GET["Nombre"])) {
			$resultadoActualizar=$nba->actualizarJugador($_GET["Nombre"]);
			if ($resultadoActualizar==true) {
			echo $_GET["Nombre"];
			}
		}
		else{
			echo "error en el update";
		}
		echo "<br>";
		// echo "<a href='listaequipos.php'>Borrar mas Equipos</a>";
?>










