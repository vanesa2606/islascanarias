<?php


require_once("tarifa.php");

class Tarifavehiculos extends Tarifa{

    var $peso;

    function __construct($precio, $peso){

        parent::__construct($precio);

        $this->peso = $peso;

    }

    function getPeso(){

        return $this->peso;
    }

    
    function setpeso($peso){
        $this->peso = $peso;

       
    }

    function mostar(){

        echo "El vehiculo es ".getPrecio();

        echo "<br>";

       
    }
}