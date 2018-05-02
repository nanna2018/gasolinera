<?php

require_once ("Surtidor.php");

class Surtidorgasoil extends Surtidor{
      var $premiun;
    function __construct($precio,$premiun){
        parent::__construct($precio);
        $this->premiun=$premiun;
    }
    function getPremiun (){
        return $this->premiun=$premiun;
    }
    function setPremiun($premiun){
        $this->premiun=$premiun;
    }
    function mostrar(){
        parent:: mostrar();
        echo $this->getPremiun()."<br>";
    }
}
