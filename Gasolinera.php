<?php
require_once ("empleado.php");
require_once ("cliente.php");
require_once ("surtidor.php");
require_once ("surtidorgasolina.php");
require_once ("surtidorgasoil.php");
class Gasolinera{

    var $ciudad;
    var $marca;
    var $clientes;
    var $empleados;
    var $surtidores;

    function __construct($ciudad,$marca){
        $this->ciudad = $ciudad;
        $this->marca=$marca;
        $this->clientes = array();
        $this->empleados = array();
        $this->surtidores= array();
    }
    function getCiudad(){
        return $this->ciudad;
    }
    function getMarca(){
        return $this->marca;
    }
    function setCuidad($ciudad){
        $this->ciudad=$ciudad;
    }
    function setMarca($marca){
        $this->marca=$marca;
    }
//añadir->al final
//borrar->anular casilla
   function altaCliente($cliente){
    $this->clientes[]=$cliente;
   }
    function altaEmpleado($empleado){
    $this->empleados[]=$empleado;
   }
    function anadirSurtidor($surtidor){
    $this->surtidores[]=$surtidor;
    }
    function mostrar () {
        echo "Ciudad:".$this->getCiudad();
        echo "<br>";
        echo "Marca:".$this->getMarca();
        echo "<br><br>";
        for ($i=0; $i < count($this->clientes) ; $i++) {
            if(($this->clientes[$i])!=null){
                $this->clientes[$i]->mostrar();
            } 
            for ($i=0; $i < count($this->empleados) ; $i++) {
                if(($this->empleados[$i])!=null){
                    $this->empleados[$i]->mostrar();
                } 
            }
            
        }
    } 
//busca por cf y anula cuando lo encuentra
    function bajaCliente ($cif) {
        $enc = false;
        for ($i=0; ($i < count($this->clientes)) && ($enc==false); $i++) { 
            if ($this->clientes[$i] != null) {
                if ($this->clientes[$i]->getCif() == $cif) {
                    $this->clientes[$i] = null;
                    $enc = true;
                }
            }
        }
    }
//busca por nombre y anula cuando lo encuentra
    function bajaEmpleado ($nombre) {
        $enc = false;
        for ($i=0; ($i < count($this->empleados)) && ($enc==false); $i++) { 
            if ($this->empleados[$i] != null) {
                if ($this->empleados[$i]->getNombre() == $nombre) {
                    $this->empleados[$i] = null;
                    $enc = true;
                }
            }
        }
    }
}
