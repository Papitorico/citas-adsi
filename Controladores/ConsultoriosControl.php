<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConsultoriosControl
 *
 * @author albar
 * ->fetch_object()
 * 
 */
$GLOBALS["UrlWebhttp"]= "http://localhost/CLIENTE/";
include_once "../Controladores/ConsultoriosControl.php";
include_once "../Models/ConfigDB.php";
include_once "../Models/ConsultoriosFacade.php";
$conex= new ConexionDB();


class ConsultoriosControl {
    //put your code here
    private $facade;
    function __construct(){
        
        $this->facade= new ConsultoriosFacade();
        
    }
    
function getConsultoriosAll(){
    
    //return $this->conex->query("select * from track"); 
    return $this->facade->getConsultoriosAll();
}
    
function insertarConsultorio($entity){
    
    //print_r($entity); 
    $this->facade->insertarConsultorio($entity);
}


function actualizarConsultorio($entity){
    
    $this->facade->actualizarConsultorio($entity);
}


function getConsultorioById($id){
    
    //print_r($id); 
    return $this->facade->getConsultorioById($id)->fetch_object();
}
function deleteConsultorioById($id){
    
    return $this->facade->deleteConsultorioById($id);
    
}


}
