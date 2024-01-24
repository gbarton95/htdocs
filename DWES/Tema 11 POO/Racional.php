<?php
    class Racional {
        protected $numerador;
        protected $denominador;

        //constructor
        public function __construct($num) {
            if(str_contains($num, "/")) {
                $n = explode("/", $num);
                $num = $n[0];
                $den = $n[1];

                $this-> numerador= $num;
                $this-> denominador= $den;
            } else {
                $den = 1;
                $this-> numerador= $num;
                $this-> denominador= 1;
            }
	    }

        public function __toString() {
            return $this->numerador . "/" . $this->denominador;
        }

        public function __sumar($otronum, $otroden){
            $denominadorComun = $denominador * $otroden;
            $num1 = ($denominadorComun/$denominador)*$numerador;
            $num2 = ($denominadorComun/$otroden)*$otronum;

            $this->numerador = $num1+$num2;
            $this->denominador = $denominadorComun;
        }

        public function __restar($otronum, $otroden){
            $denominadorComun = $denominador * $otroden;
            $num1 = ($denominadorComun/$denominador)*$numerador;
            $num2 = ($denominadorComun/$otroden)*$otronum;

            $this->numerador = $num1-$num2;
            $this->denominador = $denominadorComun;
        }

        public function __multiplicar($otronum, $otroden){
            $this->numerador = $numerador*$otronum;
            $this->denominador = $denominador*$otroden;
        }

        public function __dividir($otronum, $otroden){
            $this->numerador = $numerador*$otroden;
            $this->denominador = $denominador*$otronum;
        }
    }
?>