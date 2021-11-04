<?php 
require_once '../modelo/crearModelo.php';
use App\Modelo\crearModelo;
class crearController{
    private $resultado;
    function crearController($nombre,$apellido){
        $this->resultado=new crearModelo();
        $this->resultado->crearModelo2($nombre,$apellido);
    } 

}
$objeto=new crearController($_REQUEST['nombre'],$_REQUEST['apellido']);
?>