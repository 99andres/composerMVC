<?php 
require_once '../modelo/editarModelo.php';
use App\modelo\editarModelo;
class editarController{
    private $objeto;
    private $resultado;
    function __construct(){
        $this->objeto=new editarModelo();

    }
    function editarController2($id){
        $id=empty($id)?'':$id;
        if(!empty($id) || $id!=""){
            $this->resultado=$this->objeto->editarModelo2($id);
            include_once '../vista/editarVista.php';
        }
        else{
            if(isset($_POST['guardar'])){
                $this->objeto->setEditarDatos($_POST['id'],$_POST['nombre'],$_POST['apellido']);
            }
        }
        
        
    }
    
}
$objeto=new editarController();
if(isset($_GET['id'])){
    $objeto->editarController2($_GET['id']);    
}
else{
    $objeto->editarController2('');
}

?>