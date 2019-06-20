<?php
include "db.php";
/**
*Seguimos con crud, puede que en esta tabla falten control de errores, añadire-mejorare despues de corrección.
*/
class jugador extends db{
	
	function __construct()
	{
		parent::__construct();
	}

	public function devolverUltimoJugador($nombre){
	  $sql="SELECT * FROM jugadores WHERE Nombre = '".$nombre."' ";
	    return $resultado=$this->realizarConsulta($sql);
	}

		public function devolverId($id){
	  $sql="SELECT * FROM jugadores WHERE id = '".$id."' ";
	    return $resultado=$this->realizarConsulta($sql);
	}

	public function devolverJugador(){
		$sql="SELECT * FROM jugadores";
		return $resultado=$this->realizarConsulta($sql);
	}

	public function insertarJugador($nombre,$peso){
	  $sqlInsercion="INSERT INTO jugadores(Nombre,Peso) Values('".$nombre."','".$peso."')";
	     // $this->conexion->query($sqlInsercion);
	     return $resultado=$this->realizarConsulta($sqlInsercion);
	}

		// public function actualizarUsuario($email,$nombre,$apellidos){
 //  		$sqlActualizar="UPDATE jugadores SET email='".$email."',nombre='".$nombre."',apellidos='".$apellidos."' WHERE nombre='".$nombre."'";
 //  		return $resultado=$this->realizarConsulta($sqlActualizar);
 //  	}

		public function actualizarJugador($nombre){

		$sqlActualizar="UPDATE jugadores SET Nombre='".$nombre."' ";
		// $this->conexion->query($sqlActualizar);
		return $resultado=$this->realizarConsulta($sqlActualizar);
	}

		public function borrarJugador($nombre){
	  $deleteSql="DELETE FROM jugadores WHERE Nombre = '".$nombre."'";
	  	if($this->conexion->query($deleteSql)){
	  		return true;
	  	}else{
	  		return false;
	  	}
	}


	//al pasar VALUES: comillas simples porque es un string en DB, y luego comillas dobles...sqlinsercion= variable para almacenar insert, conexion objeto php que ejecuta funcion de mysqli query a database...       conflicto con el campo Nombre_equipo puesto con select=input?name
	// public function insertarJugador($codigo,$nombre,$procedencia,$altura,$peso,$posicion,$Nombre_equipo){
	//   $sqlInsercion="INSERT INTO jugadores(codigo,Nombre,Procedencia,Altura,Peso,Posicion,Nombre_equipo) Values('".$codigo."','".$nombre."','".$procedencia."','".$altura."','".$peso."','".$posicion."','".$Nombre_equipo."')";
	//      $this->conexion->query($sqlInsercion);
	// }
	// public function actualizarJugador($codigo,$nombre,$procedencia,$altura,$peso,$posicion,$Nombre_equipo){
	// 	$sqlActualizar="UPDATE jugadores SET codigo='".$codigo."',Nombre='".$nombre."',Procedencia='".$procedencia."',Altura='".$altura."',Peso='".$peso."',Posicion='".$posicion."',Nombre_equipo='".$Nombre_equipo."' WHERE codigo='".$codigo."' ";
	// 	$this->conexion->query($sqlActualizar);
	// }

	
	

	

	// public function actualizarJugador($nombre){
	// $sqlActualizar="UPDATE jugadores SET Nombre='".$nombre."' WHERE Nombre='".$nombre."' ";
	// 	$this->conexion->query($sqlActualizar);
	// }



	  // public function actualizarJugador($id,$nombre){
   //    if ($this->error==false) {
   //          $sqlActualizar="UPDATE jugadores SET Nombre='".$nombre."' WHERE id='".$id."' ";
          
   //           if (!$this->conexion->query($sqlActualizar)) {
   //              echo "Falló la insercion de la tabla: (" . $this->conexion->errno . ") " . $this->conexion->error;
   //                return false;
   //            }else{

   //              return true;
   //            }
            
   //    }else{

   //        return false;
   //    }
   //  }



	


	// public function SelectEquipoLocal(){
 //    	return $this->conexion->query("SELECT distinct(Nombre) FROM equipos  GROUP BY Nombre ASC");
 //  	}

}
?>