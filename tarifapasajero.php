<?php

require_once("tarifa.php");

class Tarifapasajero extends Tarifa{

    var $edad;
    var $precio;

    function __construct($precio, $edad){

        parent::__construct($precio);

        $this->edad = $edad;

     
    }

    function getEdad(){

        return $this->edad;
    }

    function setEdad($edad){

        $this->edad = $edad;
    }


    function mostrar(){

        echo "La edad del pasajero es".getEdad();

        echo "<br>";
    }


}