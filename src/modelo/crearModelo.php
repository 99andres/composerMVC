<?php
 namespace App\modelo;
 require_once '../conexion/conexion.php';
 use App\conexion\conexion;

 class crearModelo{
     private $conexion;
     private $consulta;
     private $resultado;
     function __construct(){
        $this->conexion=new conexion();
     }
     function crearModelo2($nombre,$apellido){
         $this->consulta="insert into datos(nombre,apellido) values('$nombre','$apellido')";
         $this->resultado=$this->conexion->conexion()->query($this->consulta);
         if($this->resultado){
            header('location:../controller/');
         }
     }
 } 
 ?>