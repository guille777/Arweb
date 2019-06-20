<?php 

include "classPerro.php";

$perro = new Animal();

	echo $perro->getTipo();

	echo "<br>";

	$perro->setTipo("araña");
	$perro->getTipo();
	echo $perro->tipo;


	$perro->setPatas(4);
	$perro->getPatas();
	echo $perro->patas;






 ?>