<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays multidimensionales</title>
</head>
<body>
    <?php
        //Creamos array multidimensional con arrays asociativos

        $alimentos=array("fruta"=>array("tropical"=>"kiwi",
                                        "cítrico"=>"mandarina",
                                        "otros"=>"manzana"), 
                         "leche"=>array("animal"=>"vaca",
                                        "vegetal"=>"coco"), 
                         "carne"=>array("vacuno"=>"lomo",
                                        "porcino"=>"pata"));


        //Una vez creado el array, para acceder a 'lomo':
        //echo $alimentos["carne"]["vacuno"];

        //Ahora vamos a imprimir todo:
        foreach($alimentos as $grupo=>$alim){
            echo "<b>$grupo:</b> <br>";
            
            //e imprimimos también el array interno:
            foreach ($alim as $clave=>$valor){
                echo "$clave = $valor <br>";
            }
            
            echo "<br>";
        }

        //Existe un método que imprime todo sin formato: var_dump
        echo var_dump($alimentos) . "<br>";

    ?>
</body>
</html>
