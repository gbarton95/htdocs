<?php
//OBJETO PERSONA
	class Persona	{
        protected $nombre;
        protected $apellidos;
        protected $sexo;
		protected $fechaNacimiento;

	//Constructor
        public function  __construct($nom,$ape,$sexo,$fechaNaci) {
			$this->nombre=$nom;
			$this->apellidos=$ape;
			$this->sexo=$sexo;
			$this->fechaNacimiento=$fechaNaci;
		}

	// Métodos:
        public function getNombre() {
            return $this->nombre;
        }

        public function setNombre( $nombre ) {
            $this->nombre = $nombre;
        }

        public function getApellidos() {
            return $this->apellidos;
        }

        public function setApellidos( $apellidos ) {
            $this->apellidos = $apellidos;
        }

        public function getSexo() {
            return $this->sexo;
        }

        public function setSexo( $sexo ) {
            $this->sexo = $sexo;
        }

        public function getFechaNacimiento() {
            return $this->fechaNacimiento;
        }

        public function setFechaNacimiento( $fecha ) {
            $this->fechaNacimiento = $fecha;
        }

        public function getNombreCompleto() {
          return "$this->nombre, $this->apellidos";
        }

        public function calculaEdad() {
          $dia=date("j");
          $mes=date("n");
          $anyo=date("Y");

          $vnac=explode("-",$this->fechaNacimiento);

          if ( ($vnac[1]== $mes) && ($vnac[0] > $dia)) {
                    $anyo=($anyo-1);
                }
          if ($vnac[1] > $mes) {
                    $anyo=($anyo-1);
                }

          $edad=($anyo-$vnac[2]);
          return $edad;
        }
	}
?>