<?php 
namespace App\modelo;
require_once '../conexion/conexion.php';
use App\conexion\conexion;

class editarModelo{
    
    function __construct(){
        $this->conexion=new conexion();
    }
    function editarModelo2($id){
        $this->consulta="select * from datos where id=$id";
        $this->resultado=$this->conexion->conexion()->query($this->consulta);
        $data=[];
        while($row=$this->resultado->fetch_object()){
            $data[]=$row;
        }
        return $data;

    }
    function setEditarDatos($id,$nombre,$apellido){
        $this->consulta="update datos set nombre='$nombre',apellido='$apellido' where id=$id";
        $this->resultado=$this->conexion->conexion()->query($this->consulta);
        if($this->resultado){
            header('location:../controller/');
        }
    }
    private $conexion;
    private $consulta;
    private $resultado;


}
?>