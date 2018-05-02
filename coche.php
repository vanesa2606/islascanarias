<?php

require_once("vehiculo.php");

class Coche extends Vehiculo{

    var $clase;

    var $precio;


    function __construct($marca, $clase, $precio){

        parent::__parent($marca);

        $this->clase = $clase;

        $this->precio = $precio;
    }

    function getClase(){

        return $this->clase;
    }

    function setClase($clase){

        $this->clase = $clase;
    }

    function getPrecio(){

        return $this->precio;
    }

    function setPrecio($precio){

        $this->precio = $precio;
    }

    function mostrar(){

        parent:: mostrar();

        echo "La clase del vehiculo es".getClase();

        echo "<br>";

        echo "El precio es".getPrecio();

        echo "<br>";
                    
    }
}
