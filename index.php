<?php

require_once ("Gasolinera.php");
require_once ("repostaje.php");
require_once ("surtidor.php");

$gaso1 = new Gasolinera ("Alburquerque","galp");
/*$e1= new Empleado("Juan","8861341n");
$repo1 = new Repostaje ( 50,"2018-03-02");

$c1= new Cliente("Pedro","001122333");

$c1->anadirRepostajeUno($repo1);
$c1->anadirRepostajeDos( 50,"2018-04-02");



$gaso1->altaCliente($c1);
$gaso1->altaEmpleado($e1);
*/


$s1= new SurtidorGasolina(1.40,"95");
$s2= new SurtidorGasolina(1.40,"95");
$s3= new SurtidorGasolina(1.40,"95");
$s4= new SurtidorGasoil(1.15,false);
$s5= new SurtidorGasoil(1.15,false);
$s6= new SurtidorGasoil(1.15,false);
$gaso1->anadirSurtidor($s1);
$gaso1->anadirSurtidor($s2);
$gaso1->anadirSurtidor($s3);
$gaso1->anadirSurtidor($s4);
$gaso1->anadirSurtidor($s5);
$gaso1->anadirSurtidor($s6);





    


    /*$cliente1 = new Cliente ("Vanesa",28);
    $cliente2 = new Cliente ("Ana",20);
    $cliente3 = new Cliente ("Minerva",7);
    $gaso1->altaCliente($cliente1);
    $gaso1->altaCliente($cliente2);
    $gaso1->altaCliente($cliente3);
    $gaso1->bajaCliente(7);
    
 

  

    $empleado1 = new Empleado("Vanesa",28);
    $empleado2= new Empleado("Ana",20);
    $empleado3= new Empleado("Minerva",7);
    $gaso1->altaEmpleado($empleado3);
    $gaso1->altaEmpleado($empleado2);
    $gaso1->altaEmpleado($empleado1);
    $gaso1->bajaEmpleado("Ana");
    */
    


   

    $gaso1->mostrar();
   
//imprimir lo que eata ocurriendo
echo "<pre>";
print_r($gaso1);
echo "</pre>";