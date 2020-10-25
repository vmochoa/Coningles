<?php

require_once "../Controladores/AlumnosGPDC.php";
require_once "../Modelos/AlumnosGPDM.php";

class AlumnosAGPD{

	public $Aid;

	public function EAlumnosGPDA(){

		$columna = "id";
		$valor = $this->Aid;

		$resultado = AlumnosGPDC::AGPDC($columna, $valor);

		echo json_encode($resultado);

	}

}

if(isset($_POST["Aid"])){

	$eA = new AlumnosAGPD();
	$eA -> Aid = $_POST["Aid"];
	$eA -> EAlumnosGPDA();

}