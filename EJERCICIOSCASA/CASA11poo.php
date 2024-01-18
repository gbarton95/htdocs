<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programación Orientada a Objetos</title>
</head>

<body>
    <?php
    //creación de clase (vacía)
    class Moto{    }
    //creación de instancia de la clase
    $yamada = new Moto();

    //vamos a darle atributos a una nueva clase:
    class Coche
    {
        private $ruedas;
        private $color;
        private $motor;

        //para hacer el método CONSTRUCTOR (estado incial del objeto):
        public function __construct(){
            $this->ruedas = 4;
            $this->color = "";
            $this->motor = 1600;
        }


        //Las funciones dentro de una clase son sus MÉTODOS
        function arrancar(){
            echo "Arranco <br>";
        }

        function girar(){
            echo "Giro <br>";
        }

        function frenar(){
            echo "Freno <br>";
        }

        //Métodos GETTER:

        public function getRuedas(){
            return $this->ruedas . "<br>";
        }

        //Métodos SETTER:
        public function set_color($color_coche){
            $this->color=$color_coche;

            echo "El color de este coche es: " . $this->color;

        }
    }

    //instancias:
    $renault = new Coche();
    $mazda = new Coche();
    $seat = new Coche();

    //Para pedirle que ejecute un método, ->
    $mazda->girar();

    //Para acceder a propiedades del objeto ->
    echo $renault->getRuedas();

    //Utilizando métodos ->
    $renault->set_color("rojo");

    echo "<br><br>";

    ///////////////////////////////////////////////////////////////////////////////

    //Las clases en PHP también pueden tener herencia, se haría del siguiente modo:

    class CocheElectrico extends Coche{
        public function __construct(){
        parent::__construct(); // Llama al constructor del padre
        $this->ruedas = 4;
        $this->color = "Blanco";
        $this->motor = 600;
    }

        //modificar o añadir contenido al método padre:
        function arrancar(){
            parent::arrancar();
            echo "Coche arrancado sin emisiones.";
        }
    }

    //Instancio un coche eléctrico:

    $cochelec = new CocheElectrico();

    $cochelec->arrancar();


    ?>
</body>

</html>