<?php 
namespace App\modelo;
require_once '../conexion/conexion.php';
use App\conexion\conexion;

class getDatos {
    private $conexion;
    function __construct(){
        $this->conexion=new conexion();
    } 
    function traeDatos(){
        $consulta="select * from datos";
        $resultado=$this->conexion->conexion()->query($consulta);
        $data=[];
        while($row=$resultado->fetch_object()){
            $data[]=$row;
        }
        return $data;
    }
}


?>