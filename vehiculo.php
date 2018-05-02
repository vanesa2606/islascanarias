<?php



class Vehiculo{

    var $marca;

    function __construct($marca){

        $this->marca = $marca;
    }

    function getMarca(){

        return $this->marca;
    }

    function setMarca($marca){

        $this->marca = $marca;
    }

    function mostrar(){

        echo "La marca del vehiculo es".getMarca();
    }
}