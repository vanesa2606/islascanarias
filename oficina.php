<?php

require_once("tarifa.php");

class Oficina{

    var $nombre;

    var $codigopostal;



    function __construct($nombre, $codigopostal){

        $this->nombre = $nombre;

        $this->codigopostal = $codigopostal;

    }

    function getNombre(){

        return $this->nombre;
    }

    function setNombre($nombre){

        $this->nombre = $nombre;
    }

    function getCodigopostal(){

        return $this->codigopostal;
    }

    function setCodigopostal($codigopostal){

        $this->codigopostal = $codigopostal;
    }

    function mostrar(){

        echo "El codigo postal es ".getCodigopostal();

        echo "El nombre es ".getNombre();

    }

    



    
}