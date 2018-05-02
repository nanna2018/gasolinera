<?php
class Repostaje{
    var $litros;
    var $fecha;

    function __construct($litros,$fecha){
        $this->litros=$litros;
        $this->fecha=$fecha;
    }
    function getLitros(){
        return $this->litros;
    }
    function getFecha(){
        return $this->fecha;
    }
    function setLitros($litros){
        $this->litros=$litros;
    }
    function setFecha($fecha){
        $this->fecha=$fecha;
    }
    function mostrar(){
        echo " litros: ".$this->getLitros();
        echo "<br>";
        echo " fecha: ".$this->getFecha();
        echo "<br>";
        $date1 = new DateTime( date('Y-m-d') );  //Tambien vale $date1 = new DateTime('now');
        $date2 = new DateTime($this->getFecha());
        $diff = $date1->diff($date2); //diferencia entre fechas
        
        /*echo "<pre>";
        print_r($diff);
        echo "</pre>";
       */
        echo "Hace ".$diff->y;
        echo ($diff->y != 1) ? " años" : " año";
        echo $diff->m."";      
        echo ($diff->m != 1) ? " meses" : " mes";       
        echo " y ".$diff->d;
        echo ($diff->d != 1) ? " días" : " día"; 
        echo " desde el repostaje";
    }       
       
    /*function mostrar () {
        parent::mostrar();
        echo "<br>";
        echo "Fecha poda: ".$this->getFechaPoda();
        echo "<br>";
        /* En el siguiente ejemplo vamos a sumar 2 días a la fecha actual */
        /*
        $fecha = date('Y-m-d');
        $nuevafecha = strtotime ( '+2 day' , strtotime ( $fecha ) ) ;
        $nuevafecha = date ( 'Y-m-j' , $nuevafecha );
        echo $nuevafecha;
        */
        
        
}      
       
    


