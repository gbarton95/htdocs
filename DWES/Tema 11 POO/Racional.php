<?php
    class Racional {
        protected $numerador;
        protected $denominador;

        //constructor
        public function __construct($num=1, $den=1) {
            if(str_contains($num, "/")) {
                $n = explode("/", $num);
                $num = $n[0];
                $den = $n[1];

                $this-> numerador= (int)$num;
                $this-> denominador= (int)$den;
            } else {
                $this-> numerador= (int)$num;
            }
	    }

        public function getNumerador() {
            return $this->numerador;
        }

        public function getDenominador() {
            return $this->denominador;
        }

        public function setNumerador($numerador) {
            $this->numerador = (int)$numerador;
        }

        public function setDenominador($denominador) {
            // Aseguraremos que el denominador no sea 0
            if ($denominador != 0) {
                $this->denominador = (int)$denominador;
            } else {
                $this->denominador = 1;
                echo "Error: El denominador no puede ser cero. Se ha establecido a 1.";
            }
        }

        public function __toString() {
            return $this->numerador . "/" . $this->denominador;
        }

        /* Mi primer planteamiento

        public function sumar($otronum, $otroden){
            $denominadorComun = $this->denominador * $otroden;
            $num1 = ($denominadorComun/$this->denominador)*$this->numerador;
            $num2 = ($denominadorComun/$otroden)*$otronum;

            $this->numerador = $num1+$num2;
            $this->denominador = $denominadorComun;
        }

        public function restar($otronum, $otroden){
            $denominadorComun = $this->denominador * $otroden;
            $num1 = ($denominadorComun/$this->denominador)*$this->numerador;
            $num2 = ($denominadorComun/$otroden)*$otronum;

            $this->numerador = $num1-$num2;
            $this->denominador = $denominadorComun;
        }

        public function multiplicar($otronum, $otroden){
            $this->numerador = $this->numerador*$otronum;
            $this->denominador = $this->denominador*$otroden;
        }

        public function dividir($otronum, $otroden){
            if($otronum==0 || $otroden==0 || $this->denominador==0){
                return "No se puede dividir entre 0";
            } else {
                $this->numerador = $this->numerador*$otroden;
                $this->denominador = $this->denominador*$otronum; 
            }
            
        }       */

        public function sumarRacionales(Racional $n1, Racional $n2){
            $denominadorComun = $n1->getDenominador() * $n2->getDenominador();
            $num1 = ($denominadorComun/$n1->getDenominador())*$n1->getNumerador();
            $num2 = ($denominadorComun/$n2->getDenominador())*$n2->getNumerador();

            $numerador = $num1+$num2;
            $denominador = $denominadorComun;
            $r = new Racional($numerador, $denominador);
            return $r;
        }

        public function restarRacionales(Racional $n1, Racional $n2){
            $denominadorComun = $n1->getDenominador * $n2->getDenominador;
            $num1 = ($denominadorComun/$n1->getDenominador)*$n1->getNumerador;
            $num2 = ($denominadorComun/$n2->getDenominador)*$n2->getNumerador;

            $numerador = $num1-$num2;
            $denominador = $denominadorComun;
            return new Racional($numerador, $denominador);
        }

        public function multiplicarRacionales(Racional $n1, Racional $n2){
            $numerador = $n1->getNumerador*$n2->getNumerador;
            $denominador = $n1->getDenominador*$n2->getDenominador;
            return new Racional($numerador, $denominador);
        }

        public function dividirRacionales(Racional $n1, Racional $n2){
            $numerador = $n1->getNumerador*$n2->getDenominador;
            $denominador = $n1->getDenominador*$n2->getNumerador;
            return new Racional($numerador, $denominador);
        }

        public function simplificarRacional(Racional $n1){
            //Así lo haría yo sin calcular el MCD:
            $numerador=$n1->getNumerador;
            $denominador=$n1->getDenominador;

            for ($i=$denominador; $i>=1; $i--) { 
                if($numerador%$i==0 && $denominador%$i==0){
                    $numerador=$numerador/$i;
                    $denominador=$denominador/$i;
                    $i=$denominador;
                }
            }

            return new Racional($numerador, $denominador);
        }
    }
?>