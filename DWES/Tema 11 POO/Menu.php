<?php
    class Menu
    {  //atributos
        protected $dia;
        protected $fecha;
        protected $primerosplatos = array();
        protected $segundosplatos =  array();
        protected $postres =  array();

        //constructor
        public function __construct($day, $fecha){
            $this->dia=$day;
            $this->fecha=$fecha;
        }

        //metodos
        public function getDia(){
            return $this->dia;
        }

        public function getFecha(){
            return $this->fecha;
        }

        public function agregarPrimerPlato($plato){
            $this->primerosplatos[] = $plato;
        }

        public function getPrimerosPlatos(){
            return $this->primerosplatos;
        }

        public function agregarSegundoPlato($plato){
            $this->segundosplatos[] = $plato;
        }

        public function SegundosPlatos(){
            return $this->segundosplatos;
        }

        public function agregarPostre($plato){
            $this->postres[] = $plato;
        }

        public function Postres(){
            return $this->postres;
        }
    }
?>