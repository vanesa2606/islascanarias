<?php

require_once("vehiculo.php");

class Camion extends Vehiculo{

    var $pma;

    var $tara;

    var $precio;

    function __construct($marca, $pma, $tara){

        parent::__construct($marca);

        $this->pma = $pma;

        $this->tara = $tara;

        $this->precio = $precio;
    }


    function getPma(){

        return $this->pma;
    }

    function setPma($pma){
        
        $this->pma = $pma;

    }

    function getTara(){

        return $this->tara;
    }

    function setTara($tara){
      
        $this->tara = $tara;
      
    }

    function getPrecio(){

        return $this->precio;
    }

    function setPrecio($precio){

        $this->precio = $precio;

    }


    function mostrar(){

        parent::mostar();

        echo "El PMA es".getPma();

        echo "<br>";

    }
}