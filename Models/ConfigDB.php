<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConfigDB
 *
 * @author albar
 */
class ConexionDB {
    
private $conexion;
private $servidor01="localhost";
private $nombreUsuarioSer="root";
private $contraseniaser="";
private $basededatos="music";

    function __construct() {
       //echo "aqui constructor de conexion" ;
       $this-> conectar();
       
    }//put your code here
    
    private function conectar(){
        
        $this->conexion = new mysqli($this->servidor01, $this->nombreUsuarioSer, $this->contraseniaser, $this->basededatos );
        
if($this->conexion->connect_error){
    die("Error de conexion..".$conexion->connect_error);
    
}
       
    }
    
    function query($sql){
        
        return $registros = mysqli_query($this->conexion, $sql);
    }
    
}
