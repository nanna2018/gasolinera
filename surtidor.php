<?php


class Surtidor{
    var $precio;

    function __construct($precio){
        $this->precio=$precio;
    }
    function getPrecio(){
        return $this->precio;
    }
    function setPrecio($precio){
        $this->precio=$precio;
    }

    function mostrar(){
        echo $this->getPrecio()."<br>";
    }

    





}