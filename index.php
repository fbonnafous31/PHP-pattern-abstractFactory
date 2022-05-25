<?php

    require_once('libraries/autoload.php');

    $pizzeriaBrest = new \Pizzeria\PizzeriaBrest();
    $pizza  = $pizzeriaBrest->commanderPizza('fromage');
    echo "Luc a commandé une pizza ".$pizza->getNom()."<br><br>";

    $pizzeriaStrasbourg = new \Pizzeria\PizzeriaStrasbourg();
    $pizza  = $pizzeriaStrasbourg->commanderPizza('fromage');
    echo "Michel a commandé une pizza ".$pizza->getNom();

?>