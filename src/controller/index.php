<?php 
require_once '../modelo/getDatos.php';
use App\modelo\getDatos;
class index{
    private $data;
    private $resultado;
    function __construct(){ 
        $this->data=new getDatos();

    }
    function getDatosController(){
        $this->resultado=$this->data->traeDatos(); 
        include_once '../vista/index.php';

    }
}
$objeto = new index();
$resultado=$objeto->getDatosController()
?>