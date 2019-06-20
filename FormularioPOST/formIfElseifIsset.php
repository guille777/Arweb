<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="formIfElseifIsset.php" method="post">
		<label for="">edad</label>
		<input type="text" name="edad" id="" required="">
		<label for="">enviar</label>
		<input type="submit" name="enviar" id="">
	</form>
<?php 
	if(isset($_POST['enviar'])){
		$edad = $_POST['edad'];
			if ($edad >= 18) {
				echo "la edad de la persona es: ".$edad;
			}elseif($edad < 18){
				echo "es menor";
			}
	}
?>
</body>
</html>


