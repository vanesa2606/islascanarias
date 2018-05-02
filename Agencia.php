<?php

require_once("pasajero.php");
require_once("ruta.php");
require_once("oficina.php");
require_once("tarifapasajero.php");
require_once("tarifavehiculos.php");
require_once("coche.php");
require_once("camion.php");
require_once("ferry.php");

class Agencia {

    var $nombre;

    var $pasajeros;

    var $rutas;

    var $oficinas;

    var $ferrys;

    var $tarifas;

   var $tarifapasajeros;

   var $tarifavehiculos;


    function __construct ($nombre){

        $this->nombre = $nombre;

        $this->pasajeros = array();

        $this->rutas = array();//Esta es mi matriz de rutas

        $this->ferrys = array();

        $this->oficinas = array("10001", "10002", "10003","10004","10005","10006","10007");

        $this->tarifapasajero = array (
        new TarifaPasajero (10,5),
        new TarifaPasajero (11,10),
        new TarifaPasajero (12,15),
        new TarifaPasajero (13,30),
        new TarifaPasajero (14,45),
        new TarifaPasajero (15,60),
        new TarifaPasajero (16,70),
        new TarifaPasajero (17,80)

    );
        $this->tarifavehiculos = array (
            new Tarifavehiculos(10,1500),
            new Tarifavehiculos(11,2000),
            new Tarifavehiculos(12,2500),
            new Tarifavehiculos(13,3000),
            new Tarifavehiculos(14,3500),
            new Tarifavehiculos(15,4000),
            new Tarifavehiculos(16,5000),
            new Tarifavehiculos(17,6000)
        );

    

    function getNombre (){

        return $this->nombre;

    }



    function setNombre ($nombre){

        $this->nombre = $nombre;

    }

    function mostar(){

        echo "El nombre de la agencia es ".getNombre();

        echo "<br>";
    }


    function altaPasajero($pasajero){

        $this->pasajeros[] = $pasajero;
    }

    function bajaPasajero($nif){

        $enc = false;

        for ($i = 0; $i >count ($this->pasajeros) && ($enc = false); $i++){

            if ( $nif = $this->pasajeros[$i]->getNif()){
                $this->pasajeros[$i] = null;
                $enc = true;
            }
        }
    }
    

    function altaOficina($oficina){

        $this->oficinas[]= $oficina;
    }

    function altaFerry($ferry){

        $this->ferrys[] = $ferry;
    }

    function altaRuta($ruta){

        $this->rutas[] = $ruta;
    }

    function inicializarRuta($ruta){

        $this->rutas[$ruta->getIslaorigen()][$ruta->getIsladestino()] = $ruta;

    }

    function calcularPrecio($edad){

        $enc = false;

        for ($i=0; $i < count($this->tarifaspasajero) && ($enc == false); $i++) { 
           if ($edad>$this->$tarifapasajeros[$i]->getEdad()){
                $final = $this->tarifapasajeros[$i]->getPrecio();
                
           }

           else{
                $enc = true;

           }
        }
        return $final;
    }



    function venderBillete($origen, $destino, $pasajero){

        $Suma = $this->rutas[$origen][$destino]->getPrecio();

        $edad = calcularEdad();

        $extra = $this->calcularPrecio($edad);

        $suma = $suma + $extra * $this->rutas[$origen][$destino]->getDuracio();

        // tambien podemos sustituir en la variable $edad
        // $extra = $this->calcularPrecio(calcularEdad())
        // abajo donde esta la suma sustituimos el extra
        // $suma = $suma  + $this->calcularPrecio(calcularEdad())* $thsi->rutas....

        // con lo cual quedaria <asi:

        // $suma = $this->rutas[$origen][$destino]->getPrecio();
        // $suma = $suma + $this->calcularPrecio(calcularEdad())*$this->rutas[$origen][$destino]->getDuracion();


        if (($pasajero->getDiscapacidad()==true) || ($pasajero->getEdad() > 18)){
         $suma = $suma / 2;

        }

        return $suma;

    }



    }
}