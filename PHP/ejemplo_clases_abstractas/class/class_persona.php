<?php
	abstract class Persona{
		protected $nombre;
		protected $apellido;
		protected $genero;
		protected $edad;
		protected $carrera;
		protected $horario;

		public function __construct(
			$nombre, $apellido, $genero,
			$edad, $carrera, $horario) {
			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->genero = $genero;
			$this->edad = $edad;
			$this->carrera = $carrera;
			$this->horario = $horario;
		}

		public function getNombre() {
			return $this->nombre;
		}

		public function setNombre($nombre) {
			$this->nombre = $nombre;
		}

		public function getApellido() {
			return $this->apellido;
		}

		public function setApellido($apellido) {
			$this->apellido = $apellido;
		}

		public function getGenero() {
			return $this->genero;
		}

		public function setGenero($genero) {
			$this->genero = $genero;
		}

		public function getEdad() {
			return $this->edad;
		}

		public function setEdad($edad) {
			$this->edad = $edad;
		}

		public function getCarrera() {
			return $this->carrera;
		}

		public function setCarrera($carrera) {
			$this->carrera = $carrera;
		}

		public function getHorario() {
			return $this->horario;
		}

		public function setHorario($horario) {
			$this->horario = $horario;
		}

		public function toString() {
			return "Persona [nombre=" . $this->nombre . ", apellido=" . $this->apellido . ", genero=" . $this->genero . ", edad=" . $this->edad
					. ", carrera=" . $this->carrera . ", horario=" . $this->horario . "]";
		}

		abstract public function aprobar();
		public function reprobar(){}
	}

?>