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
            //"j" significa sin 0 a la izquierda, "d" con 0.
          $dia=date("j");
            //"n" número de mes, "F" para nombre completo.
          $mes=date("n");
          $anyo=date("Y");

            //con 'explode' separamos un string en elementos de array
          $vnac=explode("-",$this->fechaNacimiento);


        //si aún no ha cumplido años, le quitaremos un año al actual:
          //mismo mes, día anterior a cumpleaños
          if ( ($vnac[1]== $mes) && ($vnac[0] > $dia)) {
                    $anyo=($anyo-1);
                }
          //mes de nacimiento mayor que mes actual
          if ($vnac[1] > $mes) {
                    $anyo=($anyo-1);
                }

          $edad=($anyo-$vnac[2]);
          return $edad;
        }
	}
?>