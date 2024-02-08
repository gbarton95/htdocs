<?php

class View
{
    public static function show($viewName, $data = null)
    {
        include $viewName . ".php"; //Como es php, podría poner directamente "$viewName.php"
    }
}

?>
