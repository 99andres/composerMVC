<?php 
namespace App\conexion;
class conexion { 
    private $conexion;
    public function conexion(){
        $this->conexion=new \mysqli("localhost","root","ColomSop1.1.3*_","ensayando");
        if($this->conexion){ 
            return $this->conexion;
        }

    }
}
?>