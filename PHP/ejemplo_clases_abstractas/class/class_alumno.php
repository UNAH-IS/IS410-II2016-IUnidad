<?php
	include_once("class_persona.php");

	class Alumno extends Persona{
		private $cuenta;

		public function __construct(
				$nombre,
				$apellido,
				$genero,
				$edad,
				$carrera,
				$horario,
				$cuenta){
			Parent::__construct($nombre, $apellido, $genero, $edad, $carrera, $horario);
			$this->cuenta = $cuenta;
		}

		public function getCuenta() {
			return $this->cuenta;
		}

		public function setCuenta($cuenta) {
			$this->cuenta = $cuenta;
		}

		public function toString(){
			return Parent::toString() . ", Cuenta: " . $this->cuenta;
		}
		
		public function aprobar(){
			echo "Aprobando";
		}
	}

?>