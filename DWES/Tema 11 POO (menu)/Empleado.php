<?php
require 'Persona.php';

//OBJETO EMPLEADO
    class Empleado extends Persona {
        private $sueldo;
        private $puesto;

    //Constructor
        public function  __construct($nom,$ape,$sexo,$fechaNaci,$sueldo,$puesto) {
			parent::__construct($nom,$ape,$sexo,$fechaNaci);
            $this->sueldo=$sueldo;
			$this->puesto=$puesto;
		}

    //Método 'imprimir información'
        public function printInfo() {
            echo "El empleado {$this->nombre} {$this->apellidos} tiene un sueldo de {$this->sueldo} y por tanto ";

            if ($this->sueldo > 2000){
                echo "debe pagar impuestos. \n";
            } else {
                echo "no debe pagar impuestos. \n";
            }
        }

    }
?>