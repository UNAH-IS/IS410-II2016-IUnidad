<?php
	class Maestro extends Persona {
		private $codigoEmpleado;
		private $sueldo;

		public function __construct($nombre,
						$apellido, 
						$genero,
						$edad, 
						$carrera,
						$horario,
						$codigoEmpleado,
						$sueldo) {
			Parent::__construct($nombre, $apellido, $genero, $edad, $carrera, $horario);
			$this->codigoEmpleado = $codigoEmpleado;
			$this->sueldo = $sueldo;
		}

		public function getCodigoEmpleado() {
			return $this->codigoEmpleado;
		}

		public function setCodigoEmpleado($codigoEmpleado) {
			$this->codigoEmpleado = $codigoEmpleado;
		}

		public function getSueldo() {
			return $this->sueldo;
		}

		public function setSueldo($sueldo) {
			$this->sueldo = $sueldo;
		}

		public function toString() {
			return Parent::toString().", Codigo Empleado: " . 
					$this->codigoEmpleado . "Sueldo " . $this->sueldo;
		}
	}

?>