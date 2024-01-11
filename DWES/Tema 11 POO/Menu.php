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
        public function agregarPrimerPlato($plato){
            $this->primerosplatos[] = $plato;
        }

        public function agregarSegundoPlato($plato){
            $this->segundosplatos[] = $plato;
        }

        public function agregarPostre($plato){
            $this->postres[] = $plato;
        }
    }
?>