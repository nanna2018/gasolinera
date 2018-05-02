<?php

require_once ("persona.php");
require_once ("repostaje.php");

class Cliente extends Persona{
        var $cif;
        var $repostajes;
     function __construct($nombre,$cif){
         parent::__construct($nombre);
         $this->repostajes=array();
         $this->cif=$cif;
     }
     function getCif(){
         return $this->cif;
     }
     function setCif($cif){
         $this->cif=$cif;
    }

     function anadirRepostajeUno($repostajes){
         $this->repostajes[]=$repostajes;
     }

     function anadirRepostajeDos($litros,$fecha){
         $aux= new Repostaje($litros,$fecha);
         $this->repostajes[]=$aux;


     }
     function mostrar(){
         parent:: mostrar();
         echo $this->getCif()."<br>";
         for ($i=0; $i < count($this->repostajes); $i++) { 
          $this->repostajes[$i]->mostrar();
         }
        }

}

