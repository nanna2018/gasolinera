<?php


class Persona{
    var $nombre;
    var $edad;

    function __construct($nombre,$edad){
        $this->nombre=$nombre;
        $this->edad=$edad;
    }
    function getNombre(){
        return $this->nombre;
    }
    function getEdad(){
        return $this->edad;
    }
    function setNombre($nombre){
        $this->nombre=$nombre;
    }
    function setEdad($edad){
        $this->edad=$edad;
    } 
    function mostrar () {
        echo "Mi nombre es ".$this->nombre." y tengo ".$this->edad." años.<br>";
    }
}  
class Jugador extends Persona{
        var $numpartido;
    function __construct($nombre,$edad,$numpartido){
         parent::__construct($nombre,$edad);
         $this->numpartido=$numpartido;
    }
    function getNumpartido(){
        return $this->numpartido;
    }
    function setNumpartido($numpartido){
        $this->Numpsrtido=$numpartido;
    }
    function mostrar(){
        parent::mostrar();
        echo "He jugado  ".$this->getNumpartido()."  partidos.";
        echo "<br>";
    }
}

$a=new Persona("Ñoño",43);
$b=new Persona ("Tomas",51);
$c=new Jugador ("Angel",10,23);
$d=new Jugador ("Carlos",10,27);
$vector=array ($a,$b,$c,$d);

for ($i=0; $i < count($vector); $i++) { 
     $vector[$i]->mostrar();
}




