<?php

class Ferry{

    var $id;

    var $capacidadvehiculo;

    var $capacidadpasajero;


    function __construct($id, $capacidadvehiculo, $capacidadpasajero){

        $this->id = $id;

        $this->capacidadvehiculo = $capacidadvehiculo;

        $this->capacidadpasajero = $capacidadpasajero;

    }

    function getId(){

        return $this->id;
    }

    function setId($id){

        $this->id = $id;
    }

    function getCapacidadvehiculo(){

        return $this->capacidadvehiculo;
    }

    function setCapacidadvehiculo($capacidadvehiculo){

        $this->capacidadvehiculo = $capacidadvehiculo;
    }

    function getCapacidadpasajero(){

        return $this->capacidadPasajero;
    }

    function setCapacidadpasajero($capacidadpasajero){

        $this->capacidadpasajero = $capacidadpasajero;
    }

    function mostar(){

        echo "El id del ferry es".getId();

        echo "<br>";

        echo "La capacidad del vehiculo es de ".getCapacidadvehiculo();

        echo "<br>";

        echo "La capacidad de pasajeros es ".getCapacidadpasajero();

        echo "<br>";
    }

    
}