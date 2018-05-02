<?php



class Pasajero{

    var $nombre;
    
    var $nif;

    var $fechanacimiento;

    var $discapacidad;


    function __construct($nombre, $nif, $fechanacimiento, $discapacidad){

        $this->nombre = $nombre;

        $this->nif = $nif;

        $this->fechanacimiento = $fechanacimiento;

        $this->discapacidad = $discapacidad;
    }

    function getNombre(){

        return $this->nombre;
    }

    function setNombre($nombre){

        $this->nombre = $nombre;
    }

    function getNif(){

        return $this->nif;
    }

    function setNif($nif){

        $this->nif = $nif;
    }

    function getFechanacimiento(){

        return $this->fechanacimiento;
    }

    function setFechanacimiento($fechanacimiento){

        $this->fechanacimiento = $fechanacimiento;
    }

    function getDiscapacidad(){

        return $this->discapacidad;
    }

    function setDiscapacidad($discapacidad){

        $this->discapacidad = $discapacidad;
    }

    function mostrar(){

        echo "El nombre es ".getNombre();

        echo "<br>";

        echo "El nif del pasajero es ".getNif();

        echo "<br>";

        echo "La fecha de nacimiento es el ".getFechanacimiento();

        echo "<br>";

        echo "Discapacidad ".getDiscapacidad();

        echo "<br>";
    }


    function calcularEdad($fechanacimiento){  // se puede poner getEdad()

        $date1 = new DateTime( date('Y-m-d') );  //Tambien vale $date1 = new DateTime('now');
        $date2 = new DateTime($this->getFechanacimiento());
        $diff = $date1->diff($date2); //diferencia entre fechas
        
        return $diff->y;

    }

}