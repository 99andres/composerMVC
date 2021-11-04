<?php
namespace App\modelo;
require_once '../conexion/conexion.php';
use App\conexion\conexion;
class eliminarModelo{
    private $conexion;
    private $resultado;
    function __construct(){
        $this->conexion=new conexion();
    }
    function eliminarModelo2($id){
        $consulta="";
        $consulta.="delete from datos where id=$id;";
        $consulta.="set @numero=0;";
        $consulta.="update datos set id=@numero:=@numero+1;";
        $consulta.="set @numero=0;";
        $this->resultado=$this->conexion->conexion()->multi_query($consulta);
        if($this->resultado){
            $consulta="alter table datos auto_increment=1";
            $this->conexion->conexion()->query($consulta);
            header('location:../controller/');
        }
    }
} 
?> 