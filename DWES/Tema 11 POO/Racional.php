<?php
    class Racional {
        protected $numerador;
        protected $denominador;

        //constructor
        public function __construct($num=1, $den=1) {
            if(is_string($num)) {
                $n = explode("/", $num);
                $num = $n[0];
                $den = $n[1];
            }
        $this-> numerador= $num;
        $this-> denominador= $den;
	    }

    }




?>