<?php
    class Racional {
        protected $numerador;
        protected $denominador;

        //constructor
        public function __construct($num=1, $den=1) {
            if(str_contains($num, "/")) {
                $n   = explode("/", $num);
                $num = $n[0];
                $den = $n[1];
            }
            $this-> numerador= (int)$num;
            $this-> denominador= (int)$den;
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
                //Error: El denominador no puede ser cero
            }
        }

        public function __toString() {
            if($this->denominador==1){
                return $this->numerador;
            }else{
                return $this->numerador . "/" . $this->denominador;
            }

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

        public function simplificarRacional() {
            $numerador = $this->getNumerador();
            $denominador = $this->getDenominador();
                for ($i = $denominador; $i > 1; $i--) {
                    if ($numerador % $i == 0 && $denominador % $i == 0) {
                        $numerador = $numerador / $i;
                        $denominador = $denominador / $i;
                        $i=$denominador;
                    }
                }
            return new Racional($numerador, $denominador);
            }
        }

    //Métodos con Racionales
    function sumarRacionales(Racional $n1, Racional $n2){
    //si tienen distinto denominador, saco un múltiplo común
        if($n1->getDenominador()!= $n2->getDenominador()) {
            $denominadorComun = $n1->getDenominador() * $n2->getDenominador();
            $num1 = ($denominadorComun / $n1->getDenominador()) * $n1->getNumerador();
            $num2 = ($denominadorComun/ $n2->getDenominador()) * $n2->getNumerador();
            return new Racional($num1+$num2, $denominadorComun);
        } else {
            return new Racional($n1->getNumerador()+$n2->getNumerador(), $n1->getDenominador());
        }
    }

    function restarRacionales(Racional $n1, Racional $n2){
        if($n1->getDenominador()!= $n2->getDenominador()) {
            $denominadorComun = $n1->getDenominador() * $n2->getDenominador();
            $num1 = ($denominadorComun / $n1->getDenominador()) * $n1->getNumerador();
            $num2 = ($denominadorComun/ $n2->getDenominador()) * $n2->getNumerador();
            return new Racional($num1-$num2, $denominadorComun);
        } else {
            return new Racional($n1->getNumerador()-$n2->getNumerador(), $n1->getDenominador());
        }
    }

    function multiplicarRacionales(Racional $n1, Racional $n2){
        $numerador = $n1->getNumerador()*$n2->getNumerador();
        $denominador = $n1->getDenominador()*$n2->getDenominador();
        return new Racional($numerador, $denominador);
    }

    function dividirRacionales(Racional $n1, Racional $n2){
        $numerador = $n1->getNumerador()*$n2->getDenominador();
        $denominador = $n1->getDenominador()*$n2->getNumerador();
        return new Racional($numerador, $denominador);
    }
?>