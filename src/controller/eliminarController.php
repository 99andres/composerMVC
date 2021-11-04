<?php 
include_once '../modelo/eliminarModelo.php';
use App\modelo\eliminarModelo;

class eliminarController{
    private $eliminar;
    function eliminarController($id){
        $this->eliminar=new eliminarModelo();
        $this->eliminar->eliminarModelo2($id); 
    }
}
$objeto=new eliminarController($_GET['id']);
?>