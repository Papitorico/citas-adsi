<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConsultoriosFacade
 *
 * @author albar
 */

include_once "../Models/ConfigDB.php";
//include_once "../Models/ConsultoriosFacade.php";
//$conex= new ConexionDB();



class ConsultoriosFacade {
    //put your code here
    public $conex;
    public $tales;
    function __construct(){
        
        $this-> conex= new ConexionDB();
        
    }
    
    function getConsultoriosAll(){
    
    return $this->conex->query("select * from track"); 
    
}
function insertarConsultorio($entity){
    $numero= $entity->getConNumero();
    $nombre= $entity->getConNombre();
    //print_r($entity); 
    $this->conex->query("insert into track (track_id,title,len,rating,count,album_id,genre_id) values ($numero,'$nombre',455,1,0,3,2) ");
       
}

function actualizarConsultorio($entity){
    
    $numero= $entity->getConNumero();
    $nombre= $entity->getConNombre();
    //print_r($entity); 
    //$this->conex->query("UPDATE track SET (track_id,title,len,rating,count,album_id,genre_id)=($numero,'$nombre',324,3,0,2,5) WHERE track_id=2");
    $this->conex->query("UPDATE track SET title='$nombre'where track_id= $numero ");
}      
    
function getConsultorioById($id){
    
    return $this->conex->query("select * from track where track_id = $id");
    //print_r($this->tales);
}
    
function deleteConsultorioById($id){
    
     $this->conex->query("delete from track where track_id = $id");
    
}

}
