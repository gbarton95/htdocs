<!--PUEDO PONERLE SU PROPIO CSS-->
<style>
    *{
        color:red;
        font-weight:bold;
    }
</style>

<?php
        if(isset($_POST["boton"])){
            $numero1=$_POST["num1"];
            $numero2=$_POST["num2"];
            $operacion=$_POST["operacion"];

            calcular($numero1,$numero2,$operacion);
        }

        //Aquí defino la función, a la que invoco arriba ^
        function calcular($numero1,$numero2,$operacion){
        
            if(!strcmp("Suma",$operacion)){
                echo "El resultado es: " . ($numero1+$numero2);
            } else if(!strcmp("Resta",$operacion)){
                echo "El resultado es: " . ($numero1-$numero2);
            } else if(!strcmp("Multiplicación",$operacion)){
                echo "El resultado es: " . ($numero1*$numero2);
            } else if(!strcmp("División",$operacion)){
                echo "El resultado es: " . ($numero1/$numero2);
            }else if(!strcmp("Módulo",$operacion)){
                echo "El resultado es: " . ($numero1%$numero2);
            }else if(!strcmp("incremento",$operacion)){
                $numero1++;
                echo "El resultado es: " . $numero1;
            }else if(!strcmp("decremento",$operacion)){
                $numero1--;
                echo "El resultado es: " . $numero1;
            }
        }

    ?>