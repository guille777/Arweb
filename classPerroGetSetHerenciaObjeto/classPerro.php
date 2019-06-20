<?php 
/**
 * 
 */
class animal {
	
	// function __construct(argument)
	// {
	// 	# code...
	// }
	public $tipo="perro";
	public $patas=4;

	public function getTipo(){
		return $this->tipo;

	}
	public function getPatas(){
		return $this->patas;

	}
	///////
	//seters:
	public function setTipo($tipo){
		$this->tipo=$tipo;
	}
	public function setPatas($patas){
		$this->patas=$patas;
	}






}






 ?>