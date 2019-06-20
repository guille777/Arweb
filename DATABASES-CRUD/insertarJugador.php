<?php 
include "lib/jugadores.php";
$jugador= new jugador();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test</title>
</head>
<body>
	<?php 
   
	if (!empty($_POST['nombre']) && !empty($_POST['peso'])   ) {
		
		$jugador->insertarJugador($_POST["nombre"],$_POST["peso"]);

		$tabla=$jugador->devolverUltimoJugador($_POST['nombre']);
                foreach ($tabla as $key => $fila) {
                    echo "nombre : ".$fila["Nombre"]."<br>";
                }

    // echo "<a href="."inder.php".">Inserta mas jugadores</a><br>";

    echo "<a href='formAct.php?Nombre=".$fila["Nombre"]. "'>Actualizar Jugador</a><br>";
    echo "<a href='borrarJugador.php?Nombre=".$fila["Nombre"]. "'>Borrar Jugador</a><br>";
 
    }
	else {
                echo "<a href="."index.php".">rellena todos los campos</a><br>";
        }
?>
</body>
</html>