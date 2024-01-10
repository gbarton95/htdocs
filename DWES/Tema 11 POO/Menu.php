<?php
    class Menu
    {
        protected $dia;
        protected $fecha;
        protected $primerosplatos;
        protected $segundosplatos;
        protected $postres;

        public function __construct($day, $fecha){
            $this->dia=$day;
            $this->fecha=$fecha;

        }


    }
?>