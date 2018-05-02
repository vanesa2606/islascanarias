<?php
 


class Ruta{

    var $islaorigen;

    var $isladestino;

    var $ferrys;

    var $precio;

    var $duraciontrayecto;


    function __construct($islaorigen, $isladestino, $precio){

        $this->islaorigen = $islaorigen;

        $this->isladestino = $isladestino;

        $this->ferrys = array();

        $this->precio = $precio;

        $this->duraciontrayecto = array();
    }

    function getIslaorigen(){

        return $this->islaorigen;
    }

    function setIslaorigen($islaorigen){

        $this->islaorigen = $islaorigen;
    }

    function getIsladestino(){

        return $this->isladestino;
    }

    function setIsladestino($isladestino){

        $this->isladestino = $isladestino;
    }

  
        function getPrecio(){

                return $this->precio;
        }

        function setPrecio($precio){

                $this->precio = $precio;


        }

        function mostrar(){

            echo "Isla de origen ".getIslaorigen();
        
            echo "<br>";
            
            echo "Isla de destino ".getIsladestino();
        
            echo "<br>";

            echo "El precio es ".getPrecio();
        
            }
}